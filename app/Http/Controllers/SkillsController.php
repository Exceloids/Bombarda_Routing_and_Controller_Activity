<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkillsController extends Controller
{
    public function index()
    {
        $skills = [
            'Graphic Designing',
            'Video Editing',
            'Photography',
            'HTML', 'CSS', 'Java',
            'Film Production',
            'Mobile Development',
            'Adaptability'
        ];

        return view('Skills', ['skills' => $skills]);
    }
}
