<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class SiswaController extends Controller 
{
    public function index(Request $request)
    {
        $search = $request->search;
        $siswas = Siswa::when($search, function($query) use ($search) {
            return $query->where('namasiswa', 'like', "%{$search}%")
                        ->orWhere('nis', 'like', "%{$search}%");
        })->paginate(9);

        return view('siswas.index', compact('siswas', 'search'));
    }

    public function frontIndex()
    {
        $siswas = Siswa::paginate(8);
        return view('siswa', compact('siswas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nis' => 'required|integer|exists:products,nis|unique:siswas,nis',
            'namasiswa' => 'required|string',
            'alamat' => 'required',
            'jeniskelamin' => 'required|in:L,P',
            'kelas' => 'required',
            'ttl' => 'required|date',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        DB::beginTransaction();
        try {
            $data = $request->except('foto');

            if ($request->hasFile('foto')) {
                $data['foto'] = $request->file('foto')->store('siswas', 'public');
            } else {
                $data['foto'] = 'noimage.png';
            }

            $siswa = Siswa::create($data);

            DB::commit();
            return redirect()->route('siswas.index')->with('success', 'Siswa berhasil ditambahkan');

        } catch (\Exception $e) {
            DB::rollBack();
            return back()->withInput()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    public function update(Request $request, $nis)
    {
        $siswa = Siswa::findOrFail($nis);

        $request->validate([
            'nis' => "required|integer|exists:products,nis|unique:siswas,nis,{$nis},nis",
            'namasiswa' => 'required|string|max:255',
            'alamat' => 'required',
            'jeniskelamin' => 'required|in:L,P',
            'kelas' => 'required',
            'ttl' => 'required|date',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        DB::beginTransaction();
        try {
            if ($request->hasFile('foto')) {
                if ($siswa->foto && $siswa->foto != 'noimage.png') {
                    Storage::disk('public')->delete($siswa->foto);
                }
                $siswa->foto = $request->file('foto')->store('siswas', 'public');
            }

            $siswa->update($request->except(['foto', '_token', '_method']));
            
            DB::commit();
            return redirect()->route('siswas.index')
                ->with('success', 'Data siswa berhasil diupdate!');

        } catch (\Exception $e) {
            DB::rollBack();
            return back()->withInput()
                ->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    public function destroy($nis)
    {
        DB::beginTransaction();
        try {
            $siswa = Siswa::findOrFail($nis);

            if ($siswa->foto && $siswa->foto != 'noimage.png') {
                Storage::disk('public')->delete($siswa->foto);
            }

            $siswa->delete();

            DB::commit();
            return redirect()->route('siswas.index')
                ->with('success', 'Data siswa berhasil dihapus!');

        } catch (\Exception $e) {
            DB::rollBack();
            return back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }
}