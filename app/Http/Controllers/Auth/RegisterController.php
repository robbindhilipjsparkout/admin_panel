<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use App\Mail\OtpEmail; // Make sure to create this Mailable

class RegisterController extends Controller
{
  

    public function showRegistrationForm()
    {
        return view('auth.user_register');
    }
    public function register(Request $request)
    {
        // Validate user input
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users|max:255',
            'phonenumber' => 'required|string|max:20',
            'password' => [
                'required', 
                'string', 
                'confirmed', 
                'min:8',
                'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/'
            ],
        ], [
            'password.regex' => 'The password must be at least 8 characters long and contain at least one uppercase letter, one lowercase letter, one digit, and one special character.',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                            ->withErrors($validator)
                            ->withInput();
        }

       


        $data = $validator->validated(); // Retrieve validated data

        $otp = mt_rand(100000, 999999); // Generate OTP

        Mail::to($data['email'])->send(new OtpEmail($otp)); // Send OTP via email

        // Create the user in the database
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'phonenumber' => $data['phonenumber'],
            'password' => Hash::make($data['password']),
            'password_encrypted' => $data['password'],
            'otp' => $otp,
        ]);

        return redirect()->route('login')->with('success', 'Registration successful. Please log in.');
    }
}

