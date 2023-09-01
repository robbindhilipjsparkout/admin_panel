<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;



class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.user_login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            return redirect()->route('dashboard', ['user' => $user]);
        } else {
            return back()->withErrors(['email' => 'Invalid credentials', 'password' => 'Invalid Credentials']);
        }
    
    }   

    public function index(Request $request)
    {
        $user = $request->user(); // Get the authenticated user
        
        return view('auth.dashboard', compact('user'));
    }

    public function logout()
    
    {
        Auth::logout();

        return redirect('/');
    }
}