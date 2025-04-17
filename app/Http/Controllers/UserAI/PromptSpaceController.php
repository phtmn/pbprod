<?php

namespace App\Http\Controllers\UserAI;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserAI\Prompt;
use App\Models\UserAI\PromptSpace;
use App\Models\UserAI\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PromptSpaceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::User();
        $tags = Tag::all()->where('user_id', $user->id);
        $sidebar = PromptSpace::all()->where('user_id', $user->id);     


        return view('auth.userAI.prompt-spaces.index', compact('sidebar', 'user', 'tags'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = Auth::User();
        $users = User::all();
        $promptSpaces = PromptSpace::all()->where('user_id', $user->id);
        $tags = Tag::all()->where('user_id', $user->id);
        $sidebar = PromptSpace::all()->where('user_id', $user->id);
        return view('auth.userAI.prompt-spaces.create', compact('sidebar', 'user', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        PromptSpace::create([
            'user_id' => $request->user_id,
            'name' => $request->name,
            'public' => $request->public
        ]);
        
        return redirect()->route('prompt-spaces.index')->with('error', 'Prompt Space criado');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = Auth::User();
        $promptSpaces = PromptSpace::findOrFail($id);
        $sidebar = PromptSpace::all()->where('user_id', $user->id);
        $tags = Tag::all()->where('user_id', $user->id);
        $prompt = Prompt::all()->where('user_id', $user->id);
        $sideTag = DB::table('prompt_spaces_tag')->get();
        return view('auth.userAI.prompt-spaces.show', compact('sidebar', 'promptSpaces', 'prompt', 'sideTag', 'user', 'tags'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = Auth::User();
        $users = User::all();
        $promptSpaces = PromptSpace::findOrFail($id);
        $sidebar = PromptSpace::all()->where('user_id', $user->id);
        return view('auth.userAI.prompt-spaces.edit', compact('sidebar', 'users', 'promptSpaces', 'user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        $promptSpaces = PromptSpace::findOrFail($id);
        $validatedData = $request->validate([

            'name' => 'required',
            'public' => 'required',
        ]);
        $promptSpaces->update($validatedData);

        return redirect()->route('prompt-spaces.index')->with('error', 'Prompt Space atualizado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        PromptSpace::findOrFail($id)->delete();

        return redirect()->route('prompt-spaces.index')->with('error', 'Prompt Space removido');
    }
}
