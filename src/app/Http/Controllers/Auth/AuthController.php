<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login', 'register']]);
    }

    /**
     * Get a JWT via given credentials.
     */
    public function login(Request $request): JsonResponse
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:6',
        ]);

        if (!$token = Auth::attempt($credentials)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        return $this->createNewToken($token);
    }

    /**
     * Get the token array structure.
     */
    protected function createNewToken(string $token): JsonResponse
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => Auth::factory()->getTTL() * 60,
        ]);
    }

    /**
     * User registration
     */
    public function register(Request $request): JsonResponse
    {
        $validation = $request->validate([
            'name' => 'required|string|between:2,100',
            'email' => 'required|string|email|max:100|unique:users',
            'password' => 'required|string|confirmed|min:6',
        ]);

        $user = User::create(array_merge(
            $validation,
            ['password' => Hash::make($request->password)]
        ));

        return response()->json(['message' => 'User successfully registered', 'user' => $user], 201);
    }


    /**
     * Log the user out (Invalidate the token).
     */
    public function logout(): JsonResponse
    {
        Auth::logout();
        return response()->json(['message' => 'Successfully logged out']);
    }

    /**
     * Refresh a token.

     */
    public function refresh(): JsonResponse
    {
        return $this->createNewToken(Auth::refresh());
    }

    /**
     * Get the authenticated User.
     */
    public function user(): JsonResponse
    {
        return response()->json(auth()->user());
    }
}
