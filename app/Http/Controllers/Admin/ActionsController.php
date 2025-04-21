<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Action;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ActionsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('auth.admin.actions.index', [
            'user' => Auth::User(),
            'actions' => Action::where('deleted_at', null)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth.admin.actions.create', [
            'user' => Auth::User()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Action::create([
            'number' => $request->number,
            'title' => $request->title
        ]);

        return redirect()->route('actions.index');
    }

     

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('auth.admin.tools.edit', [
            'user' => Auth::User(),
            'tool' => Action::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Action::where('id', $id)
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

        return redirect()->route('actions.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Action::find($id)->delete();
        return redirect()->route('actions.index');
    }
}
