<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BeliController extends Controller
{
    public function index() {
        return view('frontend.beli');
    }
}
