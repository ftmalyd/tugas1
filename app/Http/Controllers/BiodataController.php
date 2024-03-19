<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BiodataController extends Controller
{
    public function index()
    {
        $biodata = [
            'nim' => '215150400111051',
            'nama' => 'Fitma Muflikatul Maulidia',
            'alamat' => 'Perum. Graha Dewata Estate Blok ii8 No.8',
            'hobi' => 'Mendengarkan Musik',
        ];

        return view('biodata', compact('biodata'));
    }
}