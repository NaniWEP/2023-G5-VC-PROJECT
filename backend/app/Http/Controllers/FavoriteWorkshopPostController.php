<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;


use App\Models\FavoriteWorkshopPost;
use Illuminate\Http\Request;

class FavoriteWorkshopPostController extends Controller
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
        //
        //reference https://poe.com/
        $userId = Auth::user()->id;
        $workshopPostId = $request->workshop_post_id;
        $favorite = FavoriteWorkshopPost::create([
            'user_id' => $userId,
            'workshop_post_id' => $workshopPostId,
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
        //
    }
    public function getFavorite(){
        $userId = Auth::user()->id;
        $myFavorite = FavoriteWorkshopPost::where('user_id' === $userId);
        response()->json([
            "success" => true,
            "data" => $myFavorite
        ],200);
    }
}
