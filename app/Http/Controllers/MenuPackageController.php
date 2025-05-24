<?php

namespace App\Http\Controllers;

use App\Models\MenuPackage;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class MenuPackageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return MenuPackage::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
        ]);

        $menuPackage = MenuPackage::create($request->all());

        return response($menuPackage, Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return MenuPackage::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MenuPackage $menuPackage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $menuPackage = MenuPackage::findOrFail($id);

        $request->validate([
            'name' => 'sometimes|required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'sometimes|required|numeric|min:0',
        ]);

        $menuPackage->update($request->all());

        return response($menuPackage, Response::HTTP_ACCEPTED);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        MenuPackage::destroy($id);

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
