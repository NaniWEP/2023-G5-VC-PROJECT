<?php

namespace App\Http\Controllers;

use App\Models\Role;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Event\ResponseEvent;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $roles = Role::all();

        return response()->json([
            'success' => true,
            'data' => $roles
        ], Response::HTTP_OK);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $role = Role::store($request);
        return response()->json([
           'success' => true,
           'meassage' => 'Create roles successfully',
           'data' => $role 
        ], Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $roles = Role::find($id);

        return response()->json([
            'success' => true,
            'data' => $roles
        ], Response::HTTP_OK);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Role $role)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role)
    {
        //
    }
}
