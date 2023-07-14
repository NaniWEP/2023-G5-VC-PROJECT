<?php

namespace App\Http\Controllers;

use App\Models\UniversityPost;
use Illuminate\Http\Request;

class UniversityPostController extends Controller
{
    public function getUnivertiesPostExprired(){
        $expiredUnivetyPost = UniversityPost::WHERE('status', '=', 0)->GET();
        return response()->json(['massage'=>'This is all university post expired', 'data' => $expiredUnivetyPost]);
    }
}
