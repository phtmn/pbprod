<?php

namespace App\Http\Controllers\UserAI;

use App\Http\Controllers\Controller;
use App\Models\UserAI\FeedFavorites;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FeedFavoriteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        $user = Auth::User();
        $favorite = FeedFavorites::where('user_id', $user->id)->where('feed_id', $request->feed_id)->first();
        if(!$favorite){
            FeedFavorites::create([
                'user_id' => $user->id,
                'feed_id' => $request->feed_id
            ]);
        } else {
            $favorite->delete();

        }

        return redirect()->route('favorites.index');
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
        FeedFavorites::findOrFail($id)->delete();

        return redirect()->route('favorites.index');
    }
}
