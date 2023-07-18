<?php

namespace App\Http\Controllers;

use App\Http\Requests\UniversityRequest;
use App\Http\Resources\UniversityResource;
use Illuminate\Http\Request;
use App\Models\University;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class UniversityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Universities = University::all();
        return response()->json(['message' => 'Here all the university.', 'data' => $Universities], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UniversityRequest $request)
    {
        if (Auth::user()->role->role_type === 'manager') {
            $university = University::store($request);
            return response()->json([
                'success' => true,
                'message' => 'Create universities successfully',
                'data' => $university
            ], Response::HTTP_CREATED); //201
        }
        return response()->json([
            'message' => 'No Permission to create university!'
        ], Response::HTTP_FORBIDDEN);

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $University = University::find($id);
        return response()->json(['message' => 'Here all the university.', 'data' => $University], 200);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if (Auth::user()->role->role_type === 'manager') {
            $university = University::store($request, $id);
            return response()->json([
                'success' => true,
                'meassage' => 'Update universities successfully',
                'data' => $university
            ], Response::HTTP_CREATED); //201
        }
        return response()->json([
            'message' => 'No Permission to update university!'
        ], Response::HTTP_FORBIDDEN);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(University $university)
    {
        //
    }

    public function showMyUniversity()
    {
        if (Auth::user()->role->role_type === 'manager')
        {
            $userId = Auth::user()->id;
            $universities = University::where('user_id', $userId)->get();
            $universities = UniversityResource::collection($universities);

            return response()->json([
                'success' => true,
                'data' => $universities
            ], 200);
        }
        return response()->json([
            'success' => false,
            'message' => 'No Permission to show university!'
        ], Response::HTTP_FORBIDDEN);
    }
}
