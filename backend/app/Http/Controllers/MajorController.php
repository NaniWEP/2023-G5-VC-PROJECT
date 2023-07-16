<?php

namespace App\Http\Controllers;

use App\Models\Major;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class MajorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function major(Request $request){
        $major = Major::major($request);
        return response()->json([
            'success' => true,
            'meassage' => 'Create major successfully',
            'data' => $major 
         ], Response::HTTP_CREATED);//200
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
