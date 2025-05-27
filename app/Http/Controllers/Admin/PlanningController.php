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
        Planning::create($request->only([
        'year', 'management_id', 'user_id', 'action_id',
        'budget', 'initiative', 'goal', 'steps',
        'indicator_quantitative', 'indicator_qualitative',
    ]));

        return view('auth.admin.planning.index');
    }

    public function edit(string $id)
    {
        $planning = Planning::findOrFail($id);

        // Aqui você pode passar também os dados relacionados, se necessário (para dropdowns, etc)
        $managements = Management::all();
        $users = User::all();
        $actions = Action::all();

        return view('auth.admin.planning.edit', compact('planning', 'managements', 'users', 'actions'));
    }

    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'year' => 'required|integer',
            'management_id' => 'required|exists:managements,id',
            'user_id' => 'required|exists:users,id',
            'action_id' => 'required|exists:actions,id',
            'budget' => 'nullable|string',
            'initiative' => 'nullable|string',
            'goal' => 'nullable|string',
            'steps' => 'nullable|string',
            'indicator_quantitative' => 'nullable|string',
            'indicator_qualitative' => 'nullable|string',
        ]);

        $planning = Planning::findOrFail($id);
        $planning->update($validated);

        return redirect()->route('planning.index')->with('success', 'Planejamento atualizado com sucesso!');
    }

    public function destroy(string $id)
    {
        Planning::findOrFail($id)->delete();
        return redirect()->route('planning.index')->with('success', 'Planejamento excluído com sucesso!');
    }
}
