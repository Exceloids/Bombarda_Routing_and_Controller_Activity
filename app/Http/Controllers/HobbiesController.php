<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HobbiesController extends Controller
{
    public function index()
    {
        $hobbies = [
            'Sleeping',
            'Eating',
            'Watching Movies',
            'Traveling'
        ];

        return view('Hobbies', ['hobbies' => $hobbies]);
    }
}
