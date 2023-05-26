<?php

namespace App\Http\Controllers;
use App\Models\Roti;
use App\Models\Kategori;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function index($id_roti)
    {
        $invoice = Roti::findOrFail($id_roti);
        $kategori = Kategori::findOrFail($invoice->id_kategori);

        return view('frontend.invoice', compact('invoice', 'kategori'));
    }
}
