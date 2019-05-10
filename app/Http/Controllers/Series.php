<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Series extends Controller {
    public function index(Request $request) {
        $series = [
            '3%',
            'Agentes da Shield',
            'Flash',
            'Jessica Jones',
            'Demolidor'
        ];

        return view('series.index', compact('series'));
    }

    public function create() {
        return view('series.create');
    }
}