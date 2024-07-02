<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutMeController extends Controller
{
    public function index()
    {
        $data = [
            'name' => 'Lhorexcel Dela Cruz Bombarda',
            'age' => 21,
            'major' => 'BSIT- Web Technology.'
        ];
        return view('About_Me', $data);
    }
}
