<?php

namespace App\Http\Controllers;

use App\Models\WorkshopPost;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Symfony\Component\HttpFoundation\Response;

class WorkshopPostController extends Controller
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
    public function workshopPost()
    {
        $workshop = WorkshopPost::all();
        return response()->json([
            'success' => true,
            'meassage' => 'get workshopPost successfully',
            'data' => $workshop 
         ], Response::HTTP_OK);//200
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
    public function getWorkshopPostExprired(){
        $currentDate = Carbon::today();
        WorkshopPost::whereDate('date', '<', $currentDate)->where('status', '=', 1)->update(['status' => 0]);// set post to expire
        $expiredWorkshopPost = WorkshopPost::WHERE('status', '=', 0)->GET();
        return response()->json([
            'success'=>true,
            'massage'=>'This is all workshop post expired',
             'data' => $expiredWorkshopPost
            ],200);
    }
}
