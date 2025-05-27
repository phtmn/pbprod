<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Admin\Management;
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
        $managements = Management::all();
        return view('auth.admin.users.create', compact('managements'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'whatsapp' => 'nullable|string|max:20',
            'registration' => 'nullable|string|max:50',
            'usertype' => 'required|in:SAdmin,Colaborador,Gerente',
            'management' => 'nullable|exists:managements,id',
            'password' => 'required|string|min:8',
        ]);

        User::create([
            'name' => $request->name,
            'whatsapp' => $request->whatsapp,
            'registration' => $request->registration,
            'email' => $request->email,
            'usertype' => $request->usertype,
            'management_id' => $request->management,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('users.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        $managements = Management::all();
        return view('auth.admin.users.edit', compact('user', 'managements'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::findOrFail($id);

        // Validação (opcional mas recomendado)
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'usertype' => 'required|in:SAdmin,Colaborador,Gerente',
            'whatsapp' => 'nullable|string|max:20',            
            'created_at' => 'nullable|date_format:d/m/Y'
        ]);

        // Atualização direta no objeto
        $user->name = $request->name;
        $user->email = $request->email;
        $user->usertype = $request->usertype;        
        $user->whatsapp = $request->whatsapp;      

        if ($request->filled('created_at')) {
            $user->created_at = \Carbon\Carbon::createFromFormat('d/m/Y', $request->created_at)->format('Y-m-d H:i:s');
        }

        // Se desejar alterar a senha no futuro:
        // if ($request->filled('password')) {
        //     $user->password = Hash::make($request->password);
        // }

        $user->save();

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
