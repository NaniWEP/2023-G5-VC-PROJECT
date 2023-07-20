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
        $user = auth()->user();
        $favorite = new FavoriteWorkshopPost();
        $favorite->user_id = $user->id;
        $favorite->workshop_post_id = $request->input('workshop_post_id');
        $favorite->save();
        return response()->json([
            'success' => true
        ],201);
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
