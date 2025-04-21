<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::orderBy('id')->get();
        return view('auth.admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth.admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'usertype' => $request->usertype,
            'whatsapp' => $request->whatsapp,
            'bio' => $request->bio,
            'password' => Hash::make($request->password),            
        ]);

        return redirect()->route('users.index');
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
    public function edit($id)
    {
        $user = User::findOrFail($id);

        return view('auth.admin.users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        

        $user = User::findOrFail($id);

        $user::where('id', $id)
            ->update([
                'name' => $request->name,
                'email' => $request->email,
                'usertype' => $request->usertype,
                'whatsapp' => $request->whatsapp,
                'created_at' => \Carbon\Carbon::createFromFormat('d/m/Y', $request->created_at)->format('Y-m-d H:i:s'),
                'bio' => $request->bio
                //'password' => Hash::make($request->password),             
            ]);

        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        User::findOrFail($id)->delete();

        return redirect()->route('users.index');
    }
}
