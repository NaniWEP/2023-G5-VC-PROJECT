<?php

namespace App\Http\Controllers;

use App\Http\Resources\MajorResource;
use App\Models\Major;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\Request;

class MajorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $majors = Major::all();
        $majors = MajorResource::collection($majors);
        return response()->json([
           'success' => true,
           'data' => $majors
        ], Response::HTTP_OK);
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
