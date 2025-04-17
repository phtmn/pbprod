<?php

namespace App\Http\Controllers\UserAI;

use App\Http\Controllers\Controller;
use App\Models\UserAI\PromptSpace;
use App\Models\UserAI\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::User();
        $sidebar = PromptSpace::all()->where('user_id', $user->id);
        $tags = Tag::all()->where('user_id', $user->id);

        return view ('auth.userAI.dashboard.index', compact('user', 'sidebar', 'tags'));
    }
}
