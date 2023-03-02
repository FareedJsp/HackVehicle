<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthApiController extends Controller
{

public function login(Request $request)
{
    $credentials = $request->only('email', 'password');

    $authResult = $this->authenticate($credentials);
    $loginResult = $this->loginUser($request);

    if ($authResult !== null && $loginResult !== null) {
        // Both authentication and login were attempted
        // Combine both results into a single array and return it as a JSON response
        $response = [
            'authResult' => $authResult->getData(),
            'loginResult' => $loginResult->getData()
        ];

        return response()->json($response);
    } elseif ($authResult !== null) {
        // Only authentication was attempted
        return $authResult;
    } elseif ($loginResult !== null) {
        // Only login was attempted
        return $loginResult;
    }
}

private function authenticate($credentials)
{
    if (Auth::attempt($credentials)) {
        $user = Auth::user();
        $token = $user->createToken('GTag')->accessToken;
        return response()->json(['token' => $token], 200);
    } else {
        return response()->json(['error' => 'Unauthorized'], 401);
    }
}

private function loginUser(Request $request)
{
    $fields = $request->validate([
        'email' => 'required|string',
        'password' => 'required|string'
    ]);

    $user = User::where('email', $fields['email'])->first();

    if (!$user || !Hash::check($fields['password'], $user->password)) {
        return response()->json(['error' => 'Unauthorized'], 401);
    } else {
        $data = [
            'id' => $user->id,
            'email' => $user->email,
            'name' => $user->name
        ];

        return response()->json([
            'status' => true,
            'message' => 'Login successfully',
            'data' => $data
        ], 200);
    }
}

}
