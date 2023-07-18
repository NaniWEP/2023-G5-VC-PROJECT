<?php

namespace App\Http\Controllers;

use App\Models\UniversityPost;
use Illuminate\Http\Request;
use Carbon\Carbon;
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
         ], Response::HTTP_CREATED);//201
    }

    public function getUnivertiesPostExprired() {
        // use Carbon\Carbon;
        $currentDate = Carbon::today();
        UniversityPost::whereDate('date', '<', $currentDate)->where('status', '=', 1)->update(['status' => 0]);// set post to expire
        $expiredUnivetyPost = UniversityPost::where('status', '=', 0)->get();
        return response()->json([
            'message' => 'This is all university posts expired',
            'data' => $expiredUnivetyPost
        ],Response::HTTP_OK);//200
    }

    public function getMajoePost(){
        $majorPosts = universityPost::all();
        return response()->json([
            'success' => true,
            'massage' => 'Get major posts successfully',
            'data' => $majorPosts
        ],Response::HTTP_OK);//200
    }

    public function getMajoePostById($id){
        $majorPost = universityPost::find($id);
        return response()->json([
            'success' => true,
            'massage' => 'Get major posts successfully',
            'data' => $majorPost
        ],Response::HTTP_OK);//200
    }
}
