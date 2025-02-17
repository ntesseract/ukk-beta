<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\Guru;
use App\Models\Siswa;

class HomeController extends Controller
{
    public function dashboard()
    {
        $user = Auth::user();
        $data = [];

        switch ($user->level) {
            case 'admin':
                $data = [
                    'products_count' => Product::count(),
                    'guru_count' => Guru::count(),
                    'siswa_count' => Siswa::count(),
                ];
                break;
            case 'guru':
                $data = [
                    'products_count' => Product::count(),
                    'siswa_count' => Siswa::count(),
                ];
                break;
            case 'siswa':
                $data = [
                    'products_count' => Product::count(),
                ];
                break;
        }

        return view('dashboard', [
            'data' => $data,
            'user' => $user
        ]);
    }
}