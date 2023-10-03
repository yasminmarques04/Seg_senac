<?php

namespace App\Http\Controllers;

class SlideController extends Controller
{
    public function index()
    {
        $itens = [
            'Item 1',
            'Item 2',
            'Item 3',
        ];

        return view('slide', compact('itens'));
    }
}

    
