<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {
        $kategori = Kategori::all();
        return view('admin.kategori', compact('kategori'));
    }

    public function create()
    {
        return view('admin.proses.tambahkategori');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kategori' => 'required|unique:kategori',
        ]);

        Kategori::create($request->all());

        return redirect()->route('admin.kategori.index')->with('success', 'Kategori berhasil ditambahkan');
    }

    public function edit($id_kategori)
    {
        $kategori = Kategori::find($id_kategori);
        return view('admin.proses.editkategori', compact('kategori'));
    }

    public function update(Request $request, $id_kategori)
    {
        $kategori = Kategori::find($id_kategori);
        $data = $request->all();

        $isChanged = false;

        if ($kategori->kategori != $request->input('kategori')) {
            $kategori->kategori = $request->input('kategori');
            $isChanged = true;
        }

        if (!$isChanged) {
            return redirect()->route('admin.kategori.index')->with('info', 'Tidak ada perubahan data!');
        }

        $kategori->update($data);

        return redirect()->route('admin.kategori.index')->with('success', 'Kategori berhasil diupdate');
    }

    public function destroy($id_kategori)
    {
        $kategori = Kategori::find($id_kategori);
        $kategori->delete($kategori);

        return redirect()->route('admin.kategori.index');
    }
}
