<?php

namespace App\Http\Controllers;

use App\Models\WorshopRegistration;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\{Validator,Auth};


class WorshopRegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $userId = Auth::user()->id;
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'phone_number' => 'required',
            'gender' => 'required',
            'workshop_post_id' => 'required'
        ]);
        if($validator->fails()) {
            return $validator->errors();
        }
        $WorkshopRegister = WorshopRegistration::create([
            "name" => $request."name",
            "email" => $request."email",
            "phone_number" => $request."phone_number",
            "gender" => $request."gender",
            "user_id" => $userId,
            "workshop_post_id" => $request."workshop_post_id"
        ]);
        return response()->json([
            'success' => true,
            'message' => 'Workshop register successfully created',
            'data' => $WorkshopRegister], Response::HTTP_OK);//200
    }

    /**
     * Display the specified resource.
     */
    public function show(WorshopRegistration $worshopRegistration)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(WorshopRegistration $worshopRegistration)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update( $request, WorshopRegistration $worshopRegistration)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(WorshopRegistration $worshopRegistration)
    {
        //
    }
}
