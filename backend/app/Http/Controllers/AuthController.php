<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthLoginRequest;
use App\Http\Requests\AuthRegisterRequest;
<<<<<<< HEAD
=======
use App\Http\Resources\GetUserResource;
use App\Models\SchoolManager;
>>>>>>> 89264386a5213f321a0e9672e002216d38252cc0
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Response;

class AuthController extends Controller
{

    public function register(AuthRegisterRequest $request)
    {
        $user = User::create([
           'first_name' => $request -> first_name, 
           'last_name' => $request -> last_name,
           'email' => $request -> email,
           'password' => Hash::make($request -> password), 
           'date_of_birth' => $request -> date_of_birth,
           'province' => $request -> province,
           'role_id' => $request -> role_id,
        ]);

        $token = $user->createToken('API TOKEN', ['select', 'create', 'update'])->plainTextToken;
        $user = new GetUserResource($user);
        return response()->json([
            'succes' => true,
            'message' => 'Create user successful',
            'data' => $user,
            'token' => $token
        ]);
    }

    public function login(AuthLoginRequest $request)
    {
        
        $userEmail = User::where('email', $request->email)->first();
        $credential = $request->only('email', 'password');

        if(!$userEmail)
        {
            return response()->json([
                'success' => false,
               'message' => 'Incorrect email!',

            ], Response::HTTP_UNAUTHORIZED);// 401
        }
        elseif(!Auth::attempt($credential))
        {
            return response()->json([
                'success' => false,
               'message' => 'Incorrect password!',

            ], Response::HTTP_UNAUTHORIZED);// 401
        }
        if(Auth::attempt($credential))
        {
            $user = Auth::user();
            $user = new GetUserResource($user);
            $token = $user->createToken('API TOKEN', ['select', 'create', 'update', 'delete'])->plainTextToken;
            
            return response()->json([
                'success' => true,
                'user' => $user,
                'token' => $token,
                'message' => 'Login successfully',
            ], Response::HTTP_OK); //200
        }
    }

    public function logout(Request $request)
    {
        $request->user()->tokens()->delete();
        return response()->json([
            'message' => 'Logout successfully'
        ], Response::HTTP_OK); //200
    }
}
