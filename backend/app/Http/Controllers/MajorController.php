<?php

namespace App\Http\Controllers;

use App\Models\Major;
use Illuminate\Http\Request;
use App\Http\Resources\MajorResource;

class MajorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $majors = Major::all();
        $majors = MajorResource::collection($majors);
        return response()->json([
            'success' => true,
            'massage' => 'Get major successfully',
            'data' => $majors
        ],Respone::HTTP_OK);//200
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
    public function show(Major $major)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Major $major)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Major $major)
    {
        //
    }
}
