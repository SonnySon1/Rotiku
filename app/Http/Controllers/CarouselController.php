<?php

namespace App\Http\Controllers;

use App\Models\Carousel;
use Illuminate\Http\Request;

class CarouselController extends Controller
{
    public function index() {
        $carousel = Carousel::all();
        return view('admin.carousel', compact ('carousel')); 
    }

    public function create() {
        return view('admin.proses.tambahcarousel');
    }

    public function store(Request $request) {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        Carousel::create($request->all());

        return redirect()->route('admin.carousel')->with('success', 'Carousel berhasil ditambahkan');
    }

    public function edit($id_carousel) {
        $carousel = Carousel::find($id_carousel);
        return view('admin.proses.editcarousel', compact('carousel'));
    }

    public function update(Request $request, $id_carousel) {
        $carousel = Carousel::find($id_carousel);
        $data = $request->all();
        $isChanged = false;

        if($carousel->title != $request->input('title')) {
            $carousel->title = $request->input('title');
            $isChanged = true;
        }

        if($carousel->description != $request->input('description')) {
            $carousel->description = $request->input('description');
            $isChanged = true;
        }

        if(!$isChanged) {
            return redirect()->route('admin.carousel')->with('info', 'Tidak ada perubahan data!');
        }

        $carousel->update($data);
        return redirect()->route('admin.carousel')->with('success', 'Carousel berhasil diupdate');
    }

    public function destroy($id_carousel) {
        $carousel = Carousel::find($id_carousel);
        $carousel->delete();
        return redirect()->route('admin.carousel');
    }
}
