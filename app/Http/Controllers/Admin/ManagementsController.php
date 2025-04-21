<?php

namespace App\Http\Controllers\SAdmin;

use App\Http\Controllers\Controller;
use App\Models\SAdmin\Management;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ManagementsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        

        return view('auth.sadmin.managements.index', [
            'user' => Auth::User(),
            'managements' => Management::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth.sadmin.managements.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Management::create([
            'title' => $request->title,
            'name' => $request->name,
            'description' => $request->description                        
        ]);

        return view('auth.sadmin.managements.index');

    }
     
    public function edit(string $id)
    {
        $managements = Management::findOrFail($id);
        return view('managements.edit', compact('managements'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $managements = Management::findOrFail($id);
        $managements->update($validated);

        return redirect()->route('superadmin.management.index')->with('success', 'Atualizado com sucesso.');
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