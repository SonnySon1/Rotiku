<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JumlahController extends Controller
{
    public function index() {
        return view('admin.jumlah');
    }
}
