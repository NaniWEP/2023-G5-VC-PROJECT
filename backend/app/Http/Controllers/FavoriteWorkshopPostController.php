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
        $userId = Auth::user()->id;
        $workshopPostId = $request->workshop_post_id;
        $allow = FavoriteWorkshopPost::where('user_id', $userId)->where('workshop_post_id', $workshopPostId)->first();
        if (!$allow) {
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
        $workshopPostId = $request->workshop_post_id;
        $favoriteWorkshopPost = FavoriteWorkshopPost::where('workshop_post_id', $workshopPostId)->where('user_id', $userId)->first();
        if ($favoriteWorkshopPost) {
            $favoriteWorkshopPost->delete();
        }
        return response()->json([
            "success"=>true,
            'message'=>"Post removed from favorites",
            "data"=> $favoriteWorkshopPost
        ]);
    }
    public function getListOfFavorite(){
        $userId = Auth::user()->id;
        $favoriteWorkshopPost = FavoriteWorkshopPost::where('user_id', $userId)->get();
        return response()->json([
            'success' => true,
            "data"=> $favoriteWorkshopPost,
        ],200);
    }
}
