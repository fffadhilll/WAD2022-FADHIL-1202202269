<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Showroom;

class ShowroomController extends Controller
{
    public function index() {
        $showrooms = Showroom::all();
        return view('ListCar-Fadhil', ['showrooms' => $showrooms]);
    }

    public function showCar() {
        return view('Add-Fadhil');
    }

    public function addCar(Request $request) {
        Showroom::create($request->all());

        return redirect('/listcar')->with('success', 'Mobil berhasil ditambahkan');
    }
    
}
