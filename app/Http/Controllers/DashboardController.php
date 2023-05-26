<?php

namespace App\Http\Controllers;
use App\Models\Roti;
use App\Models\Kategori;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $jumlahRoti = Roti::count();
        $jumlahKategori = Kategori::count();
        $totalStok = Roti::sum('stok');

        $stokRoti = Roti::pluck('stok')->toArray();
        $allStok = Roti::sum('stok');
        $maxStok = $allStok; 
        $chartData = [
            'day' => [
                'labels' => ["Day 1", "Day 2", "Day 3", "Day 4", "Day 5", "Day 6", "Day 7"],
                'data' => $stokRoti,
            ],
            'week' => [
                'labels' => ["Week 1", "Week 2", "Week 3", "Week 4"],
                'data' => $stokRoti,
            ],
            'month' => [
                'labels' => ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                'data' => $stokRoti,
            ],

        ];
    
        return view('admin.dashboard', compact('jumlahRoti', 'jumlahKategori', 'totalStok', 'chartData', 'maxStok'));
    }

}
