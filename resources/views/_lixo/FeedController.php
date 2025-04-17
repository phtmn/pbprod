<?php

namespace App\Http\Controllers\UserAI;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\UserAI\Feed;
use App\Models\sadmins\Tool;
use App\Models\User;
use App\Models\UserAI\FeedTag;
use App\Models\UserAI\FeedTool;
use App\Models\UserAI\Tag;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FeedController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::User();
        $users = User::all();
        $feeds = Feed::all();

        return view('auth.userAI.feeds.index', compact('feeds', 'user', 'users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = Auth::User();
        $tools = Tool::where('deleted_at', null)->get();
        $tags = Tag::where('deleted_at', null)->get();

        return view('auth.userAI.feeds.create', compact('user', 'tools', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = Auth::User();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $new_filename = str_replace(' ', '', $filename);
            $file->move(public_path('assets/img/feeds-image'), $new_filename);
            $image = $new_filename;
        }

        $feeds = Feed::create([
            'user_id' => $user->id,
            'title' => $request->title,
            'image' => $image,
            'description' => $request->description,
            'link' => $request->link
        ]);

        if ($feeds) {
            if ($request->tools == null) {
                FeedTool::where('feed_id', $feeds->id)->delete();
            } else {
                foreach ($request->tools as $tool) {
                    FeedTool::create(['feed_id' => $feeds->id, 'tool_id' => $tool]);
                }
            }
            if ($request->tags == null) {
                FeedTag::where('feed_id', $feeds->id)->delete();
            } else{
                foreach ($request->tags as $tag) {
                    FeedTag::create(['feed_id' => $feeds->id, 'tag_id' => $tag]);
                }
            }
        }

        return redirect()->route('feeds.index')->with('error', 'Feed criado com sucesso');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = Auth::User();
        $feeds = Feed::findOrFail($id);

        return view('auth.userAI.feeds.show', compact('user', 'feeds'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = Auth::User();
        $feed = Feed::findOrFail($id);
        $tools = Tool::where('deleted_at', null)->get();
        $tags = Tag::where('deleted_at', null)->get();

        return view('auth.userAI.feeds.edit', compact('user', 'feed', 'tools', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $feeds = Feed::findOrFail($id);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $new_filename = str_replace(' ', '', $filename);
            $file->move(public_path('assets/img/feeds-image'), $new_filename);
            $image = $new_filename;
            $feeds->update([
                'image' => $image
            ]);
        }

        $feeds->update([
            'title' => $request->title,
            'description' => $request->description,
            'link' => $request->link
        ]);

        if ($request->tools == null) {
            FeedTool::where('feed_id', $id)->delete();
        } else {
            foreach ($request->tools as $tool) {
                FeedTool::create(['feed_id' => $id, 'tool_id' => $tool]);
            }
        }
        if ($request->tags == null) {
            FeedTag::where('feed_id', $id)->delete();
        } else{
            foreach ($request->tags as $tag) {
                FeedTag::create(['feed_id' => $id, 'tag_id' => $tag]);
            }
        }
        return redirect()->route('feeds.index')->with('error', 'Feed atualizado e associado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Feed::findOrFail($id)->delete();

        return redirect()->route('feeds.index')->with('error', 'Feed removido com sucesso');
    }
}
