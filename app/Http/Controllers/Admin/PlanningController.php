<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Planning;
use App\Models\Admin\Action;
use App\Models\Admin\Management;
use App\Models\User;
use App\Models\User as ModelsUser;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PlanningController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('auth.admin.planning.index', [
            'plannings' => Planning::with(['user', 'management', 'action'])->get()
        ]);
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $actions = Action::all();
        $users = User::all();
        $managements = Management::all();
        return view('auth.admin.planning.create', compact('actions', 'users', 'managements'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Planning::create([
            'year' => $request->year,
            'management_id' => $request->management_id,
            'user_id' => $request->user_id,
            'action_id' => $request->action_id,
            'budget' => $request->budget,
            'initiative' => $request->initiative,
            'goal' => $request->goal,
            'steps' => $request->steps,
            'indicator_quantitative' => $request->indicator_quantitative,
            'indicator_qualitative' => $request->indicator_qualitative,
        ]);
        
        return view('auth.admin.planning.index');

    }
     
    public function edit(string $id)
    {
        $managements = Planning::findOrFail($id);
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

        $managements = Planning::findOrFail($id);
        $managements->update($validated);

        return redirect()->route('superadmin.management.index')->with('success', 'Atualizado com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       
        Planning::find($id)->delete();
        return redirect()->route('managements.index');
        
    }
}