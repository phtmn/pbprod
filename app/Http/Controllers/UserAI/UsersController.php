<?php

namespace App\Http\Controllers\UserAI;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserAI\Feed;
use App\Models\UserAI\Prompt;
use App\Models\UserAI\PromptSpace;
use App\Models\UserAI\Tag;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        $promptspaces = PromptSpace::all();
        $tags = Tag::all();
        $prompts = Prompt::all();
        $feeds = Feed::all();

        return view('auth.userAI.users.index', compact('users', 'promptspaces', 'tags', 'prompts', 'feeds'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
