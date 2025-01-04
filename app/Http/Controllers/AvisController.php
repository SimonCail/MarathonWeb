<?php

namespace App\Http\Controllers;

use App\Models\Avis;
use App\Models\User;
use App\Models\Voyage;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class AvisController extends Controller
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
    public function create($voyageId, $userId): Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
    {
        $voyage = Voyage::findOrFail($voyageId);
        $user = User::findOrFail($userId);
        return view('avis.create', compact('voyage', 'user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $voyageId, $userId): RedirectResponse
    {
        $request->validate([
            'contenu' => 'required|string|max:255',
        ]);

        $avis = new Avis();
        $avis->contenu = $request->contenu;
        $avis->user_id = $userId;
        $avis->voyage_id = $voyageId;
        $avis->save();

        return redirect()->route('voyage.show', $voyageId);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function edit($id)
    {
        $avis = Avis::findOrFail($id);
        $voyage = $avis->voyage;
        return view('avis.edit', ['voyage' => $voyage, 'avis' => $avis]);
    }

    public function update(Request $request, $voyageId, $avisId)
    {
        $request->validate([
            'contenu' => 'required|string|max:255',
        ]);

        $avis = Avis::findOrFail($avisId);
        $avis->contenu = $request->contenu;
        $avis->save();

        return redirect()->route('voyage.show', $voyageId)->with('success', 'Avis mis à jour avec succès');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($voyageId, $avisId): RedirectResponse
    {
        $avis = Avis::findOrFail($avisId);
        $avis->delete();

        return redirect()->route('voyage.show', $voyageId)->with('success', 'Avis supprimé avec succès');
    }
}
