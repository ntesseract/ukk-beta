<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guru;
use Illuminate\Support\Facades\Storage;

class GuruController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->search;
        $gurus = Guru::when($search, fn($q) => 
            $q->where('namaguru', 'like', "%{$search}%")
              ->orWhere('nip', 'like', "%{$search}%")
        )->paginate(9);

        $guru = new Guru(); // Tambahkan ini untuk form tambah
        return view('gurus.index', compact('gurus', 'search', 'guru'));
    }

    public function frontIndex()
    {
        $gurus = Guru::paginate(8);
        return view('guru', compact('gurus'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nip' => 'required|string|unique:gurus',
            'nis' => 'required|string|unique:gurus', // Ubah validasi NIS
            'namaguru' => 'required|string',
            'jeniskelamin' => 'required|in:L,P',
            'kontak' => 'required',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        try {
            $data = $request->except('foto');
            
            if ($request->hasFile('foto')) {
                $data['foto'] = $request->file('foto')->store('gurus', 'public');
            } else {
                $data['foto'] = 'noimage.png';
            }

            Guru::create($data);
            return redirect()->route('gurus.index')->with('success', 'Guru berhasil ditambahkan');
        } catch (\Exception $e) {
            return back()->withInput()
                        ->with('error', 'Terjadi kesalahan saat menambah guru: ' . $e->getMessage());
        }
    }

    public function update(Request $request, $nip)
{
    $guru = Guru::findOrFail($nip);
    
    $request->validate([
        'nip' => "required|string|unique:gurus,nip,{$nip},nip",
        'nis' => "required|string|unique:gurus,nis,{$guru->nis},nis", // Perbaikan validasi NIS
        'namaguru' => 'required|string',
        'jeniskelamin' => 'required|in:L,P',
        'kontak' => 'required',
        'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
    ]);

    try {
        // Update data dasar
        $updateData = $request->only(['namaguru', 'nis', 'jeniskelamin', 'kontak']);
        
        // Handle foto jika ada
        if ($request->hasFile('foto')) {
            if ($guru->foto && $guru->foto != 'noimage.png') {
                Storage::disk('public')->delete($guru->foto);
            }
            $updateData['foto'] = $request->file('foto')->store('gurus', 'public');
        }

        $guru->update($updateData);
        return redirect()->route('gurus.index')
            ->with('success', 'Data guru berhasil diupdate');
    } catch (\Exception $e) {
        return back()->withInput()
            ->with('error', 'Terjadi kesalahan saat mengupdate guru: ' . $e->getMessage());
    }
}

    public function destroy($nip)
    {
        try {
            $guru = Guru::findOrFail($nip);
            
            if ($guru->foto && $guru->foto != 'noimage.png') {
                Storage::disk('public')->delete($guru->foto);
            }
            
            $guru->delete();
            return redirect()->route('gurus.index')->with('success', 'Guru berhasil dihapus');
        } catch (\Exception $e) {
            return back()->with('error', 'Terjadi kesalahan saat menghapus guru: ' . $e->getMessage());
        }
    }
}