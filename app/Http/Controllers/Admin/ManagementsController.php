<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Management;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ManagementsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('auth.admin.managements.index', [
            'user' => Auth::User(),
            'managements' => Management::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth.admin.managements.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Management::create([
            'acronym' => $request->acronym,
            'name' => $request->name             
        ]);

        return redirect()->route('managements.index');
    }


    public function edit(string $id)
    {
        return view('auth.admin.managements.edit', [
            'user' => Auth::User(),
            'managements' => Management::find($id)
        ]);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'acronym' => 'nullable',
            'name' => 'required|string|max:255'
        ]);
    
        $management = Management::findOrFail($id);
        $management->update($validated);

        return redirect()->route('managements.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Management::find($id)->delete();
        return redirect()->route('managements.index');
    }
}
