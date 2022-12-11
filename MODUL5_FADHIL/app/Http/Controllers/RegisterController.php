<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index() {
        return view('register.Register', [
            "title" => "Register"
        ]);
    }

    public function store(Request $request) {
        // return $request->all();
        $data = $request->all();

        // dd('berhasil');

        User::create($data);
    }
}
