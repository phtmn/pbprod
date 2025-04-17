<?php

namespace App\Http\Controllers\UserAI;

use App\Http\Controllers\Controller;
use App\Models\UserAI\Prompt;
use App\Models\UserAI\PromptSpace;
use App\Models\UserAI\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PromptsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::User();
        $prompt = Prompt::all()->where('user_id', $user->id);
        $tags = Tag::all()->where('user_id', $user->id);
        $promptSpace = PromptSpace::all();
        $sidebar = PromptSpace::all()->where('user_id', $user->id);
        $sideTag = DB::table('prompt_tag')->get();
        return view('auth.userAI.prompts.index', compact('prompt', 'user', 'tags', 'promptSpace', 'sidebar', 'sideTag'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = Auth::User();
        $tag = Tag::all()->where('user_id', $user->id);
        $promptSpace = PromptSpace::all()->where('user_id', $user->id);
        $sidebar = PromptSpace::all()->where('user_id', $user->id);
        return view('auth.userAI.prompts.create', compact('user', 'tag', 'promptSpace', 'sidebar'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $prompt = Prompt::create([
            'user_id' => $request->user_id,
            'title' => $request->title,
            'public' => $request->public,
            'description' => $request->description
        ]);

        $id = $prompt->id;

        if ($request->tag) {
            DB::table('prompt_tag')
                ->insert([
                    'prompt_id' => $id,
                    'tag_id' => $request->tag
                ]);
        } else {
            return redirect()->route('prompts.index')->with('error', 'Prompt criado');
        }
        return redirect()->route('prompts.index')->with('error', 'Prompt criado');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $user = Auth::User();
        $prompt = Prompt::findOrFail($id);
        $tag = Tag::all()->where('user_id', $user->id);

        $sidebar = PromptSpace::all()->where('user_id', $user->id);

        $prompt_tag = DB::table('prompt_tag')->where('prompt_id', $prompt->id)->get();

        return view('auth.userAI.prompts.edit', compact('user', 'prompt', 'tag', 'sidebar', 'prompt_tag'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $prompt = Prompt::findOrFail($id);
        $prompt->update([
            'title' => $request->title,
            'public' => $request->public,
            'description' => $request->description
        ]);

        if ($request->tag_id) {
            $promptTag = DB::table('prompt_tag')->where('prompt_id', $id)->get();
            if (count($promptTag) > 0) {
                DB::table('prompt_tag')->where('prompt_id', $id)->update([
                    'tag_id' => $request->tag_id
                ]);
            } else {
                DB::table('prompt_tag')->where('prompt_id', $id)->insert([
                    'prompt_id' => $id,
                    'tag_id' => $request->tag_id
                ]);
            }
        } else {
            return redirect()->route('prompts.index')->with('error', 'Prompt atualizado');
        }

        return redirect()->route('prompts.index')->with('error', 'Prompt atualizado');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Prompt::findOrFail($id)->delete();

        return redirect()->route('prompts.index')->with('error', 'Prompt removido');
    }
}
