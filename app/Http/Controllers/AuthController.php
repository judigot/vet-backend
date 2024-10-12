<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Passport\TokenRepository;
use App\Http\Controllers\BaseController;

class AuthController extends BaseController
{
    /**
     * Register a new user.
     */
    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:50',
            'last_name' => 'required|string|max:50',
            'email' => 'required|string|email|max:100|unique:user', // Make sure to match your table name here
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Create the user and hash the password
        $user = User::create([
            'first_name' => $validatedData['first_name'],
            'last_name' => $validatedData['last_name'],
            'email' => $validatedData['email'],
            'password_hash' => Hash::make($validatedData['password']), // Hash the password correctly
            'phone_number' => $request->phone_number,
        ]);

        // Load the user types
        $user->load('userTypes');

        // Generate the API token using Passport
        $token = $user->createToken('Personal Access Token')->accessToken;

        return response()->json(['token' => $token, 'user' => $user], 201);
    }

    /**
     * Login user and return the token.
     */
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        // Log credentials for debugging
        Log::info('Login attempt with credentials: ', $credentials);

        // Attempt authentication
        if (!Auth::attempt($credentials)) {
            Log::error('Invalid credentials: ', $credentials);
            return response()->json(['message' => 'Invalid credentials'], 401);
        }

        // Retrieve the authenticated user
        $user = Auth::user();
        $user->load('userTypes'); // Eager load user types

        // Log successful authentication
        Log::info('User authenticated: ', ['user_id' => $user->user_id]);

        // Generate a token for the authenticated user
        $token = $user->createToken('Personal Access Token')->accessToken;

        return response()->json(['user' => $user, 'accessToken' => $token], 200);
    }

    /**
     * Logout user (revoke the token).
     */
    public function logout(Request $request)
    {
        // Revoke the user's token
        $request->user()->token()->revoke();

        return response()->json(['message' => 'Successfully logged out'], 200);
    }

    /**
     * Get the authenticated user's details.
     */
    public function authorize(Request $request)
    {
        $user = $request->user();
        $user->load('userTypes'); // Eager load user types

        // Return the authenticated user's information
        return response()->json($user);
    }

    /**
     * Get the authenticated user's details.
     */
    public function user(Request $request)
    {
        $user = $request->user();
        $user->load('userTypes'); // Eager load user types

        // Return the authenticated user's information
        return response()->json($user);
    }

    /**
     * Admin-specific access.
     */
    public function admin()
    {
        return response()->json(['message' => 'Admin Access']);
    }

    /**
     * Vet-specific access.
     */
    public function vet()
    {
        return response()->json(['message' => 'Vet Access']);
    }

    /**
     * Owner-specific access.
     */
    public function owner()
    {
        return response()->json(['message' => 'Owner Access']);
    }
}
