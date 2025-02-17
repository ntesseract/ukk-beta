<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Milon\Barcode\DNS1D;


class ProductController extends Controller
{
    public function index(Request $request)
{
   $search = $request->search;
   
   $products = Product::query()
       ->when($search, function($query) use ($search) {
           $query->where('nama', 'like', "%{$search}%")
                 ->orWhere('nis', 'like', "%{$search}%");
       })
       ->paginate(12);

   return view('products.index', compact('products', 'search')); 
}
    public function frontIndex()
    {
        $products = Product::paginate(3);
        return view('produk', compact('products'));
    }

    /* public function create()
    {
        return view('products.create');
    } */

    public function store(Request $request)
{
   $request->validate([
       'nis' => 'nullable|integer|unique:products,nis',
       'nama' => 'required|string|max:255',
       'jumlah' => 'required|integer|min:1',
       'harga' => 'required|integer|min:1',
       'tanggal' => 'required|date',
       'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
   ]);

   // Generate unique barcode
   do {
       $barcode = mt_rand(1000000000, 9999999999); 
   } while (Product::where('barcode', $barcode)->exists());

   $fotoPath = null;
   if ($request->hasFile('foto')) {
       $fotoPath = $request->file('foto')->store('products', 'public');
   }

   Product::create([
       'barcode' => $barcode,
       'nis' => $request->nis,
       'nama' => $request->nama,
       'jumlah' => $request->jumlah,
       'harga' => $request->harga,
       'tanggal' => $request->tanggal,
       'foto' => $fotoPath ?? 'noimage.png',
   ]);

   return redirect()->route('products.index')
       ->with('success', 'Produk berhasil ditambahkan!');
}


    public function update(Request $request, Product $product)
    {
        $request->validate([
            'nis' => 'nullable|integer|unique:products,nis,' . $product->id,
            'nama' => 'required|string|max:255',
            'jumlah' => 'required|integer|min:1',
            'harga' => 'required|integer|min:1',
            'tanggal' => 'required|date',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
        ]);
    
        if ($request->hasFile('foto')) {
            if($product->foto && $product->foto != 'noimage.png') {
                Storage::disk('public')->delete($product->foto);
            }
            $product->foto = $request->file('foto')->store('products', 'public');
        }
    
        $product->update($request->except(['foto', '_token', '_method']));
    
        return redirect()->route('products.index')->with('success', 'Produk berhasil diupdate!');
    }

public function destroy($id)
{
    $product = Product::findOrFail($id);

    if ($product->foto && $product->foto !== 'noimage.png') {
        Storage::disk('public')->delete($product->foto);
    }

    $product->delete();

    return redirect()->route('products.index')->with('success', 'Produk berhasil dihapus!');
}


}
