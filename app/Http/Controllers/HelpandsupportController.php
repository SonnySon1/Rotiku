<?php

namespace App\Http\Controllers;

use App\Models\Help;
use Illuminate\Http\Request;

class HelpandsupportController extends Controller
{
    public function index() {
        return view('admin.helpandsuport');
    }

    public function create() {
        return view('admin.proses.tambahhelpAndSuport');
    }

    public function store(Request $request, $id_help) {
        $request->validate([
            'subtitle' => 'required',
            'title' => 'required',
            'description' => 'required',
        ]);

        $help = new Help;
        $help = $request->input('subtitle');
        $help = $request->input('title');
        $help = $request->input('description');

        $help->save();
        return redirect()->route('admin.help')->with('success', 'Data berhasil ditambahkan.');
    }

    public function edit($id_help) {
        $help = Help::find($id_help);
        return view('admin.proses.editHelpAndSuport');
    }

    public function update(Request $request, $id_help) {
        
    }
}
