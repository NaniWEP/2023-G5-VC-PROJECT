<?php

namespace App\Http\Controllers;

use App\Models\UniversityPost;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UniversityPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function universityPost(Request $request){
        $universityPost = UniversityPost::universityPost($request);
        return response()->json([
            'success' => true,
            'meassage' => 'Create universityPost successfully',
            'data' => $universityPost 
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
