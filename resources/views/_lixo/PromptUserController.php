<?php

namespace App\Http\Controllers\UserAI;

use App\Http\Controllers\Controller;
use App\Models\UserAI\PromptsUser;
use App\Models\UserAI\TagsUser;
use App\Models\UserAI\PromptSpacesUser;
use App\Models\User;
use App\Models\UserAI\Prompt;
use App\Models\UserAI\PromptSpace;
use App\Models\UserAI\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PromptUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::User();

        return view('auth.userAI.prompt-users.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = Auth::User();
        $users = User::all();
        $promptSpaces = PromptSpace::all();
        $tags = Tag::all();
        $prompts = Prompt::all();
        return view('auth.userAI.prompt-users.create', compact('promptSpaces', 'tags', 'promptSpaces', 'prompts', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $exists = DB::table('users')
            ->where('email', $request->email)
            ->exists();

        $userId = DB::table('users')
            ->where('email', $request->email)
            ->first();

        if ($exists) {
            if ($request->prompt_space_id) {
                foreach ($request->prompt_space_id as $prompt_space_id) {
                    PromptSpacesUser::create([
                        'user_id' => $userId->id,
                        'permission' => $request->permission,
                        'prompt_space_id' => $prompt_space_id
                    ]);
                }
            }
            if ($request->prompt_id) {
                foreach ($request->prompt_id as $prompt_id) {
                    PromptsUser::create([
                        'user_id' => $userId->id,
                        'permission' => $request->permission,
                        'prompt_id' => $prompt_id
                    ]);
                }
            }
            if ($request->tag_id) {
                foreach ($request->tag_id as $tag_id) {
                    TagsUser::create([
                        'user_id' => $userId->id,
                        'permission' => $request->permission,
                        'tag_id' => $tag_id
                    ]);
                }
            }
            return redirect()->route('prompt-users.index')->with('error', 'Prompt User criado com sucesso');
        }
        return redirect()->route('prompt-users.create')->with('error', 'E-mail não encontrado');
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
        $sidePrompt = DB::table('prompt_spaces_prompt')->get();
        return view('auth.userAI.prompt-spaces.show', compact('sidebar', 'promptSpaces', 'prompt', 'sideTag', 'sidePrompt', 'user', 'tags'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::findOrFail($id);
        $users = User::all();

        $promptSpacesUser = PromptSpacesUser::where('user_id', $id)->get();
        $promptsUser = PromptsUser::where('user_id', $id)->get();
        $tagsUser = TagsUser::where('user_id', $id)->get();

        $promptSpaces = PromptSpace::all();
        $tags = Tag::all();
        $prompts = Prompt::all();
        return view('auth.userAI.prompt-users.edit', compact('promptSpacesUser', 'promptsUser', 'tagsUser', 'tags', 'prompts', 'users', 'promptSpaces', 'user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //Por questão de segurança acho melhor deixar o email inalterável
        $space = PromptSpacesUser::where('user_id', $id)->pluck('prompt_space_id')->toArray();
        $prompt = PromptsUser::where('user_id', $id)->pluck('prompt_id')->toArray();
        $tag = TagsUser::where('user_id', $id)->pluck('tag_id')->toArray();

        DB::update("
            UPDATE prompt_spaces_users
            INNER JOIN prompts_users ON prompt_spaces_users.user_id = prompts_users.user_id
            INNER JOIN tags_users ON prompt_spaces_users.user_id = tags_users.user_id
            SET prompt_spaces_users.PERMISSION = 'Editor', prompts_users.PERMISSION = 'Editor', tags_users.PERMISSION = 'Editor'
            WHERE prompt_spaces_users.PERMISSION = 'Admin'
        ");
        //verifica se existe prompt_space_id no banco, se sim mantém, se não insere, se não estiver marcado irá deletar
        if ($request->prompt_space_id) {
            foreach ($request->prompt_space_id as $prompt_space_id) {
                if (!in_array($prompt_space_id, $space)) {
                    PromptSpacesUser::create([
                        'user_id' => $id,
                        'permission' => $request->permission,
                        'prompt_space_id' => $prompt_space_id
                    ]);
                }
                $valuesToDelete = array_diff($space, $request->prompt_space_id);
                DB::table('prompt_spaces_users')
                    ->whereIn('prompt_space_id', $valuesToDelete)
                    ->delete();
            }
        } else {
            $valuesToDelete = array_diff($space, $request->prompt_space_id);
            DB::table('prompt_spaces_users')
                ->whereIn('prompt_space_id', $valuesToDelete)
                ->delete();
        }
        //verifica se existe prompt_id no banco, se sim mantém, se não insere, se não estiver marcado irá deletar
        if ($request->prompt_id) {
            foreach ($request->prompt_id as $prompt_id) {
                if (!in_array($prompt_id, $prompt)) {
                    PromptsUser::create([
                        'user_id' => $id,
                        'permission' => $request->permission,
                        'prompt_id' => $prompt_id
                    ]);
                }
                $valuesToDelete = array_diff($prompt, $request->prompt_id);
                DB::table('prompts_users')
                    ->whereIn('prompt_id', $valuesToDelete)
                    ->delete();
            }
        } else {
            $valuesToDelete = array_diff($prompt, $request->prompt_id);
            DB::table('prompts_users')
                ->whereIn('prompt_id', $valuesToDelete)
                ->delete();
        }
        //verifica se existe tag_space_id no banco, se sim mantém, se não insere, se não estiver marcado irá deletar
        if ($request->tag_id) {
            foreach ($request->tag_id as $tag_id) {
                if (!in_array($tag_id, $tag)) {
                    TagsUser::create([
                        'user_id' => $id,
                        'permission' => $request->permission,
                        'tag_id' => $tag_id
                    ]);
                }
                $valuesToDelete = array_diff($tag, $request->tag_id);
                DB::table('tags_users')
                    ->whereIn('tag_id', $valuesToDelete)
                    ->delete();
            }
        } else {
            $valuesToDelete = array_diff($tag, $request->tag_id);
            DB::table('tags_users')
                ->whereIn('tag_id', $valuesToDelete)
                ->delete();
        }
        return redirect()->route('prompt-users.index')->with('error', 'Prompt User alterado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('tags_users')
            ->where('user_id', $id)
            ->delete();

        DB::table('prompts_users')
            ->where('user_id', $id)
            ->delete();

        DB::table('prompt_spaces_users')
            ->where('user_id', $id)
            ->delete();

        return redirect()->route('prompt-users.index')->with('error', 'Prompt Space removido com sucesso');
    }
}
