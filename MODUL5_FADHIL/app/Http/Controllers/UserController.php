<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    //

    public function index()
    {
        return view('Register-Fadhil', ["title"=>"Register"]);
    }

    public function login()
    {
        return view('Login', ["title"=>"Login"]);
    }

    public function logout()
    {
        return view('Login');
    }

    /**
     * Register User
     * 
     * @param Request $request
     * @return response
     */
    public function register(Request $request)
    {
        $data = $request->all();

        User::create([
            'name' => $data['name'],
            'no_hp' => $data['hp'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);

        return redirect('/login')->with('success', 'Register Berhasil');
    }

    /**
     * Login User
     * 
     * @param Request $request
     * @return response
     */
    public function loginUser(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
            'remember_me' => 'boolean'
        ]);


        // login user with email and password
        $credentials = request(['email', 'password']);
        if (!auth()->attempt($credentials))
            return redirect()->route('login')->with('error', 'Login Gagal');

        return redirect('/')->with('success', 'Login Berhasil');
    }

    /**
     * Logout User
     * 
     */
    public function logoutUser()
    {
        Session::flush();
        auth()->logout();

        return redirect('/')->with('success', 'Logout Berhasil');
    }

    /**
     * Edit User
     * 
     * @param Request $request
     * @return response
     */
    public function edit(Request $request, $id)
    {
        $data = $request->all();

        $user = User::find($id);
        $user->name = $data['name'];
        $user->no_hp = $data['no_hp'];
        $user->password = bcrypt($data['password']);
        $user->save();

        return redirect('/')->with('success', 'Edit Berhasil');
    }

    public function userDetail(Request $request, $id)
    {
        $user = User::find($id);
        // dd($car);

        return view('Profile-Fadhil', ["title"=>"Profile"], compact('user'));
    }
}