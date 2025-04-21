<?php

namespace App\Http\Controllers\UserAI;

use App\Http\Controllers\Controller;
use App\Models\UserAI\PromptSpace;
use App\Models\UserAI\Activity;
use App\Models\UserAI\Prompt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ActivitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::User();
     // $activity = Activity::where('user_id', $user->id)->get(); --}}

        return view('auth.userAI.activity.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = Auth::User();
      //  $promptSpace = PromptSpace::all()->where('user_id', $user->id);
       // $sidebar = PromptSpace::all()->where('user_id', $user->id);
       // $tags = Tag::all()->where('user_id', $user->id);
      //  return view('auth.userAI.tags.create', compact('user', 'promptSpace', 'sidebar', 'tags'));
        return view('auth.userAI.activity.create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $tag = Tag::create([
            'user_id' => $request->user_id,
            'name' => $request->name
        ]);
        $id = $tag->id;


        if ($request->promptSpace_id) {
         

            DB::table('prompt_spaces_tag')
                ->insert([
                    'tag_id' => $id,
                    'prompt_spaces_id' => $request->promptSpace_id                   
                ]);
        } else {
            return redirect()->route('tags.index')->with('error', 'Tag criada');
        }


        return redirect()->route('tags.index')->with('error', 'Tag criada');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = Auth::User();
        $tags = Tag::findOrFail($id);
        $promptSpace = PromptSpace::all()->where('user_id', $user->id);
        $sidebar = PromptSpace::all()->where('user_id', $user->id);

        $prompt_spaces_tag = DB::table('prompt_spaces_tag')->where('tag_id', $tags->id)->get();
        $prompt_tag = DB::table('prompt_tag')->where('tag_id', $tags->id)->get();
        $prompts = Prompt::all()->where('user_id', $user->id);

        return view('auth.userAI.tags.show', compact('user', 'tags', 'promptSpace', 'sidebar', 'prompt_spaces_tag', 'prompt_tag', 'prompts'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = Auth::User();
        $tags = Tag::findOrFail($id);
        $promptSpace = PromptSpace::all()->where('user_id', $user->id);
        $sidebar = PromptSpace::all()->where('user_id', $user->id);

        $prompt_spaces_tag = DB::table('prompt_spaces_tag')->where('tag_id', $tags->id)->get();

        return view('auth.userAI.tags.edit', compact('user', 'tags', 'promptSpace', 'sidebar', 'prompt_spaces_tag'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $tag = Tag::findOrFail($id);
        $tag->update([
            'name' => $request->name
        ]);

        $id = $tag->id;

        if ($request->promptSpace_id) {
            $promptSpaceTag = DB::table('prompt_spaces_tag')->where('tag_id', $id)->get();
            if (count($promptSpaceTag) > 0) {
                DB::table('prompt_spaces_tag')->where('tag_id', $id)->update([
                    'prompt_spaces_id' => $request->promptSpace_id
                ]);
            } else {
                DB::table('prompt_spaces_tag')
                    ->insert([
                        'prompt_spaces_id' => $request->promptSpace_id,
                        'tag_id' => $id
                    ]);
            }
        } else {
            return redirect()->route('tags.index')->with('error', 'Tag atualizada');
        }

        return redirect()->route('tags.index')->with('error', 'Tag atualizada');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Tag::findOrFail($id)->delete();

        return redirect()->route('tags.index')->with('error', 'Tag removida');;;
    }
}
