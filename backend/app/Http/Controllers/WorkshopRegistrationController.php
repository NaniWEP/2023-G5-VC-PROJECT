<?php

namespace App\Http\Controllers;

use App\Models\WorkshopRegistrations;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\{Validator,Auth};


class WorkshopRegistrationController extends Controller
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
        //get value from request
        $userId = Auth::user()->id;
        $name = $request->input('name');
        $email = $request->input('email');
        $phone_number = $request->input('phone_number');
        $gender = $request->input('gender');
        $age = $request->input('age');
        $workshop_id = $request->input('workshop_id');
        //validation
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'phone_number' => 'required',
            'age' => 'required',
            'gender' => 'required',
            'workshop_id' => 'required'
        ]);
        if($validator->fails()) {
            return $validator->errors();
        }
            $WorkshopRegister = WorkshopRegistrations::create([
                "name" => $name,
                "email" => $email,
                "phone_number" => $phone_number,
                "gender" => $gender,
                "age" => $age,
                "user_id" => $userId,
                "workshop_id" => $workshop_id
            ]);
            return response()->json([
                'success' => true,
                'message' => 'Workshop register successfully created',
                'data' => $WorkshopRegister], Response::HTTP_OK);//200
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $workshop = WorkshopRegistrations::find($id);
        return response()->json([
            'success' => true,
            'massage' => 'Get workshop apply successfully',
            'data' => $workshop
        ],Response::HTTP_OK);//200
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(WorkshopRegistration $worshopRegistration)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update( $request, WorkshopRegistration $worshopRegistration)
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
