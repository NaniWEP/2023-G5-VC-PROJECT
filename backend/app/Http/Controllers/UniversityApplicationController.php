<?php

namespace App\Http\Controllers;

use App\Http\Resources\UniversityApplicationResource;
use App\Models\UniversityApplication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class UniversityApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $applications = UniversityApplication::all();

        return response()->json([
           'success' => true,
           'data' => UniversityApplicationResource::collection($applications),
           'message' => 'Request all application successful' 
        ], Response::HTTP_OK); //200
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $userId = Auth::user()->id;
        $application = UniversityApplication::create([
            'first_name' => $request -> first_name,
            'last_name' => $request -> last_name,
            'email' => $request -> email,
            'phone_number' => $request -> phone_number,
            'gender' => $request -> gender,
            'degree' => $request -> degree,
            'origin_location' => $request -> origin_location,
            'residence_location' => $request -> residence_location,
            'user_id' => $userId,
            'university_post_id' => $request -> university_post_id,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Store application successful',
            'data' => new UniversityApplicationResource($application)
        ], Response::HTTP_CREATED); //201
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
}
