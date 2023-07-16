<?php

namespace App\Http\Controllers;

use App\Models\UniversityPost;
use Illuminate\Http\Request;
use Carbon\Carbon;

class UniversityPostController extends Controller
{
    public function getUnivertiesPostExprired() {
        $currentDate = Carbon::today();
        UniversityPost::whereDate('date', '<', $currentDate)->where('status', '=', 1)->update(['status' => 0]);// set post to expire
        $expiredUnivetyPost = UniversityPost::where('status', '=', 0)->get();
        return response()->json(['message' => 'This is all university posts expired', 'data' => $expiredUnivetyPost]);
    }
}
