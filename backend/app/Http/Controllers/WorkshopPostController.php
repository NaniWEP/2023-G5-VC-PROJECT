<?php

namespace App\Http\Controllers;

use App\Models\WorkshopPost;
use Illuminate\Http\Request;

class WorkshopPostController extends Controller
{
    public function getWorkshopExprired(){
        $expiredWorkshop = WorkshopPost::where('status', '=', 1)->get();
        return response()->json(['massage'=>'This is workshop not expired', 'data' => $expiredWorkshop]);
    }
}
