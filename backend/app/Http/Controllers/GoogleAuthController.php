<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Resources\GetUserResource;
use Error;

class GoogleAuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function googleLogin(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        try{
            if($user == null){
                $user = User::create([
                    'first_name' => $request->first_name,
                    'last_name' => $request->last_name,
                    'email' => $request->email,
                    'profile_image' => $request->profile,
                    'role_id' => $request->role_id,
                ]);
                $token = $user->createToken('API TOKEN', ['select', 'create', 'update'])->plainTextToken;
                $user = new GetUserResource($user);
                return response()->json([
                    'success' => true,
                    'message' => 'Create user successful',
                    'data' => $user,
                    'token' => $token
                ], Response::HTTP_CREATED); // 201
            }else
            {
                $user = new GetUserResource($user);
                $token = $user->createToken('API TOKEN', ['select', 'create', 'update', 'delete'])->plainTextToken;
                return response()->json([
                    'success' => true,
                    'data' => $user,
                    'token' => $token,
                    'message' => 'Login successfully',
                ], Response::HTTP_OK); //200
            }
        }catch(Error){
            return response()->json([
                'success' => false,
                'message' => 'Login Error',
            ], Response::HTTP_FORBIDDEN); //403
        };
    }
}
