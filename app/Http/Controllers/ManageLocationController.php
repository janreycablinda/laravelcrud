<?php

namespace App\Http\Controllers;

use App\Models\BusinessLocation;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class ManageLocationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $business_location = BusinessLocation::paginate(5);

        return view('manage_location.index', compact('business_location'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('manage_location.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
        ]);

        $business_location = BusinessLocation::create([
            'name' => $request->name,
        ]);

        return redirect()->route('manage_location.index')->with('status', 'Business Location Added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $business_location = BusinessLocation::findOrFail($id);

        return view('manage_location.edit', compact('business_location'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|max:255',
        ]);
    
        $business = BusinessLocation::findOrFail($id);
        $business->update($request->all());

        return redirect()->route('manage_location.index')->with('status', 'Business Location Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $business = BusinessLocation::findOrFail($id);
        $business->delete();

        return redirect()->route('manage_location.index')->with('status', 'Business Location deleted successfully');
    }
}
