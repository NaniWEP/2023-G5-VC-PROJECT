<?php

namespace App\Http\Controllers;

use App\Http\Resources\FavoriteUniversityResource;
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
         $allow = FavoriteUniversityPost::where('university_post_id', $universityPostId)->where('user_id', $userId)->first();
         if (!$allow) {
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
         else {
             $this->destroy($request);
             return response()->json([
                 'success' => false,
                 'message' => 'Post removed from favorites'
             ]);
         }
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
    public function destroy(Request $request)
    {
        $userId = Auth::user()->id;
        $universityPostId = $request->university_post_id;
        $favoritePostUniversity = FavoriteUniversityPost::where('university_post_id', $universityPostId)->where('user_id', $userId)->first();
        $favoritePostUniversity = FavoriteUniversityPost::where('id', $universityPostId)->where('user_id', $userId)->first();
        if ($favoritePostUniversity) {
            $favoritePostUniversity->delete();
        }
        return response()->json([
            "success"=>true,
            "data"=> $favoritePostUniversity
        ]);
    }
    public function getListOfFavorite(){
        $userId = Auth::user()->id;
        $favoritePostUniversity = FavoriteUniversityPost::where('user_id', $userId)->get();
        $favoritePostUniversity = FavoriteUniversityResource::collection($favoritePostUniversity);
        return response()->json([
            'success' => true,
            "data"=> $favoritePostUniversity,
        ],200);
    }
}
