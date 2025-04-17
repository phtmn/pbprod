<?php

namespace App\Http\Controllers\UserAI;

use App\Http\Controllers\Controller;
use App\Models\SAdmin\Tool;
use App\Models\User;
use App\Models\UserAI\Prompt;
use App\Models\UserAI\PromptFavorite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\UserAI\PromptSpace;
use App\Models\UserAI\Tag;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $sidebar = PromptSpace::all()->where('user_id', $user->id);
        $search = request('search');
        $category = request('category');
        $tag = Tag::all();
        $users = User::all();
        $tools = Tool::all();
        $prompts = Prompt::all();
        $promptspaces = PromptSpace::all();

        if ($search && request('category') == "PromptSpaces") {
            $promptSpace = PromptSpace::join('users', 'prompt_spaces.user_id', '=', 'users.id')
                ->where(function ($query) use ($search) {
                    $query->where('prompt_spaces.name', 'like', '%' . $search . '%')
                        ->orWhere('prompt_spaces.public', 'like', '%' . $search . '%');
                })
                ->select([
                    'prompt_spaces.id',
                    'prompt_spaces.user_id',
                    'prompt_spaces.name',
                    'prompt_spaces.public',
                    'users.name as user_name'
                ])
                ->paginate(25);

            if (!count($promptSpace)) {
                $noResults = "Nenhum resultado encontrado!";
                return view('auth.userAI.search.index', compact('user', 'sidebar', 'noResults', 'tag', 'promptspaces', 'prompts', 'users', 'tools'));
            }

            return view('auth.userAI.search.index', compact('user', 'sidebar', 'promptSpace', 'tag', 'promptspaces', 'prompts', 'users', 'tools'));
        } else if (!$search && request('category') == "PromptSpaces") {
            $promptSpace = PromptSpace::paginate(25);
            return view('auth.userAI.search.index', compact('user', 'sidebar', 'promptSpace', 'tag', 'promptspaces', 'prompts', 'users', 'tools'));
        }


        if ($search && request('category') == "Prompt") {            
            $prompt = Prompt::where('title', 'like', '%' . $search . '%')
                ->orWhere('description', 'like', '%' . $search . '%')
                ->paginate(25);

            $prompts = Prompt::join('users', 'prompts.user_id', '=', 'users.id')
                ->where(function ($query) use ($search) {
                    $query->where('prompts.title', 'like', '%' . $search . '%')
                        ->orWhere('prompts.description', 'like', '%' . $search . '%');
                })
                ->select([
                    'prompts.id',
                    'prompts.user_id',
                    'prompts.title',
                    'prompts.description',
                    'users.name as user_name'
                ])
                ->paginate(25);


            if (!count($prompt)) {
                $noResults = "Nenhum resultado encontrado!";
                return view('auth.userAI.search.index', compact('user', 'sidebar', 'noResults', 'tag', 'promptspaces', 'prompts', 'users', 'tools'));
            }
            // $favorite = PromptFavorite::where('user_id', $user->id);
            // return view('auth.userAI.search.index', compact('user', 'favorite', 'sidebar', 'prompt', 'tag', 'promptspaces', 'prompts', 'users', 'tools'));
        } else if (!$search && request('category') == "Prompt") {
            $prompt = Prompt::paginate(25);
            // $favorite = PromptFavorite::where('user_id', $user->id);
            // return view('auth.userAI.search.index', compact('user', 'favorite', 'sidebar', 'prompt', 'tag', 'promptspaces', 'prompts', 'users', 'tools'));
        }

        if ($search && request('category') == "PromptEngineering") {
            $prompt_engineering = User::where('name', 'like', '%' . $search . '%')
                ->orWhere('email', 'like', '%' . $search . '%')
                ->withCount('prompts')
                ->orderBy('prompts_count', 'desc')
                ->paginate(10);

            if (!count($prompt_engineering)) {
                $noResults = "Nenhum resultado encontrado!";
                return view('auth.userAI.search.index', compact('user', 'sidebar', 'noResults', 'tag', 'promptspaces', 'prompts', 'users', 'tools'));
            }
            // $favorite = PromptFavorite::where('user_id', $user->id);
            return view('auth.userAI.search.index', compact('user', 'prompt_engineering', 'sidebar', 'tag', 'promptspaces', 'prompts', 'users', 'tools'));
        } else if (!$search && request('category') == "PromptEngineering") {
            $prompt_engineering = User::withCount('prompts')
                ->orderBy('prompts_count', 'desc')
                ->paginate(10);
            // $favorite = PromptFavorite::where('user_id', $user->id);
            return view('auth.userAI.search.index', compact('user', 'prompt_engineering', 'sidebar', 'tag', 'promptspaces', 'prompts', 'users', 'tools'));
        }

        if ($search && request('category') == "Tools") {
            $tool = Tool::where('name', 'like', '%' . $search . '%')
                ->orWhere('description', 'like', '%' . $search . '%')
                ->orderBy('name', 'asc')
                ->paginate(25);

            if (!count($tool)) {
                $noResults = "Nenhum resultado encontrado!";
                return view('auth.userAI.search.index', compact('user', 'sidebar', 'noResults', 'tag', 'promptspaces', 'prompts', 'users', 'tools'));
            }
            // $favorite = PromptFavorite::where('user_id', $user->id);
            return view('auth.userAI.search.index', compact('user', 'tool', 'sidebar', 'tag', 'promptspaces', 'prompts', 'users', 'tools'));
        } else if (!$search && request('category') == "Tools") {
            $tool = Tool::paginate(25);
            // $favorite = PromptFavorite::where('user_id', $user->id);
            return view('auth.userAI.search.index', compact('user', 'tool', 'sidebar', 'tag', 'promptspaces', 'prompts', 'users', 'tools'));
        }       
        return view('auth.userAI.search.index', compact('user', 'sidebar', 'tag', 'promptspaces', 'prompts', 'users', 'tools'));
    }
}
