<?php

namespace App\Http\Controllers\UserAI;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
 
use App\Models\UserAI\PromptSpace;
use App\Models\UserAI\Tag;
use App\Models\UserAI\Prompt;

//use App\Models\{Home, User, Good};


class HomeController extends Controller
{

    public function index()
    {
        $user = Auth::User();
        $users = User::all();
        $sidebar = PromptSpace::all()->where('user_id', $user->id);
        $tags = Tag::all()->where('user_id', $user->id);
        $prompts = Prompt::all()->where('user_id', $user->id);
        $promptspaces = PromptSpace::all()->where('user_id', $user->id);
         

        return view ('auth.userAI.home.index', compact('user', 'users','sidebar', 'tags', 'prompts', 'promptspaces'));
    }

    public function show($id)
    {
        $user = Auth::User();
        $userShow = User::findOrFail($id);
        $users = User::all();
        $sidebar = PromptSpace::all()->where('user_id', $id);
        $tags = Tag::all()->where('user_id', $id);
        $prompts = Prompt::all()->where('user_id', $id);
        $promptspaces = PromptSpace::all()->where('user_id', $id);
        

        return view ('auth.userAI.home.show', compact('user', 'userShow', 'users','sidebar', 'tags', 'prompts', 'promptspaces'));
    }
}
