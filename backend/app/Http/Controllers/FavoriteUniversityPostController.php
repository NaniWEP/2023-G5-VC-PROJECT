<?php

namespace App\Http\Controllers;

use App\Models\FavoriteUniversityPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavoriteUniversityPostController extends Controller
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
        $userId = Auth::user()->id;
        $universityPostId = $request->university_post_id;
        $favorite = FavoriteUniversityPost::create([
            'user_id' => $userId,
            'university_post_id' => $universityPostId,
        ]);
        return response()->json([
            'success' => true,
            'data' => $favorite,
            'message' => 'Favorite saved'
        ]);
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
        $favoritePostUniversity = FavoriteUniversityPost::find($id);
        $favoritePostUniversity->delete();
    }
}
