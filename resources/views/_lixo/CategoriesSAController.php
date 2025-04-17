<?php

namespace App\Http\Controllers\SAdmin;

use App\Http\Controllers\Controller;
use App\Models\sadmins\Categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoriesSAController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorie = Categorie::all();

        return view('auth.sadmin.categories.index', compact('categorie'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth.sadmin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $categorie = new Categorie;

        $categorie->name = $request->name;
        $categorie->description = $request->description;
          
        $categorie->save();

        return redirect()->route('categoriesSA.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Offer $offer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $offer = Categorie::findOrFail($id);

        return view('auth.sadmin.offers.edit', compact('offer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $offer = Categorie::findOrFail($id);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $new_filename = str_replace(' ', '', $filename);
            $file->move(public_path('assets/img/offer-image'), $new_filename);
            $offer['image'] = $new_filename;
        }

        $offer->title = $request->title;
        $offer->description = $request->description;
        $offer->links = $request->links;
        $offer->rules = $request->rules;
        $offer->comission = $request->comission;
        $offer->cashback = $request->cashback;

        $offer->save();

        return redirect()->route('offerSA.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Categorie::findOrFail($id)->delete();

        return redirect()->route('offerSA.index');
    }
}
