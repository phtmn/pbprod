<?php

namespace App\Http\Controllers\SAdmin;

use App\Http\Controllers\Controller;
use App\Models\SAdmin\Tool;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ToolsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('auth.sadmin.tools.index', [
            'user' => Auth::User(),
            'tools' => Tool::where('deleted_at', null)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth.sadmin.tools.create', [
            'user' => Auth::User()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Tool::create([
            'name' => $request->name,
            'site' => $request->site,
            'description' => $request->description,
            'tiktok' => $request->tiktok,
            'youtube' => $request->youtube,
            'facebook' => $request->facebook,
            'instagram' => $request->instagram,
            'twitter' => $request->twitter,
            'linkedin' => $request->linkedin
        ]);

        return redirect()->route('tools.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $tool = Tool::findOrFail($id);

        //return view('auth.sadmin.tools.show', compact('tool'));
        return view('auth.userAI.tools.show', compact('tool'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('auth.sadmin.tools.edit', [
            'user' => Auth::User(),
            'tool' => Tool::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Tool::where('id', $id)
            ->update([
                'name' => $request->name,
                'site' => $request->site,
                'description' => $request->description,
                'tiktok' => $request->tiktok,
                'youtube' => $request->youtube,
                'facebook' => $request->facebook,
                'instagram' => $request->instagram,
                'twitter' => $request->twitter,
                'linkedin' => $request->linkedin
            ]);

        return redirect()->route('tools.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Tool::find($id)->delete();
        return redirect()->route('tools.index');
    }
}
