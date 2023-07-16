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

    public function getUnivertiesPostExprired() {
        // use Carbon\Carbon;
        $currentDate = Carbon::today();
        UniversityPost::whereDate('date', '<', $currentDate)->where('status', '=', 1)->update(['status' => 0]);// set post to expire
        $expiredUnivetyPost = UniversityPost::where('status', '=', 0)->get();
        return response()->json(['message' => 'This is all university posts expired', 'data' => $expiredUnivetyPost]);
    }
}

