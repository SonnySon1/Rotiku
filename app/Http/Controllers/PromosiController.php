<?php

namespace App\Http\Controllers;

use App\Models\Promosi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PromosiController extends Controller
{
    public function index()
    {
        $promosi = Promosi::all();
        return view('admin.promosi', compact('promosi'));
    }

    public function create()
    {
        return view('admin.proses.tambahpromosi');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'subtitle' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'required'
        ]);

        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $filename = time() . '.' . $foto->getClientOriginalExtension();
            $foto->move('gallery', $filename);

            $promosi = new Promosi;
            $promosi->title = $request->input('title');
            $promosi->subtitle = $request->input('subtitle');
            $promosi->foto = $filename;
            $promosi->description = $request->input('description');

            if ($promosi->save()) {
                return redirect()->route('admin.promosi.index')->with('success', 'Promosi berhasil ditambah');
            } else {
                return redirect()->back()->with('error', 'Promosi gagal ditambahkan');
            }
        }

        return redirect()->back()->with('error', 'Promosi gagal ditambahkan');
    }

     public function edit($id_promosi) {
        $promosi = Promosi::find($id_promosi);

        return view('admin.proses.editpromosi', compact('promosi'));
     }

     public function update(Request $request, $id_promosi) {
        $promosi = Promosi::find($id_promosi);
        $isChanged = false;

        if ($request->hasFile('foto')) {
            if ($promosi->foto) {
                $imagePath = public_path('gallery/' . $promosi->foto);
                if (File::exists($imagePath)) {
                    File::delete($imagePath);
                }
            }

            $foto = $request->file('foto');
            $fotoName = time() . '.' . $foto->getClientOriginalExtension();
            $foto->move(public_path('gallery'), $fotoName);
            $promosi->foto = $fotoName;
            $isChanged = true;
        }

        if ($promosi->title != $request->input('title')) {
            $promosi->title = $request->input('title');
            $isChanged = true;
        }

        if ($promosi->subtitle != $request->input('subtitle')) {
            $promosi->subtitle = $request->input('subtitle');
            $isChanged = true;
        }

        if ($promosi->description != $request->input('description')) {
            $promosi->description = $request->input('description');
            $isChanged = true;
        }

        if (!$isChanged) {
            return redirect()->route('admin.promosi.index')->with('info', 'Tidak ada perubahan data');
        }

        $promosi->update();
        return redirect()->route('admin.promosi.index')->with('success', 'Promosi berhasil diupdate');
     }

     public function destroy($id_promosi) {
        $promosi = Promosi::find($id_promosi);

        $fotoPath = public_path('gallery/'. $promosi->foto);
        if (File::exists($fotoPath)) {
            File::delete($fotoPath);
        }

        $promosi->delete();

        return redirect()->route('admin.promosi.index');
     }
}
