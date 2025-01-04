<?php

namespace App\Http\Controllers;

use App\Models\Etape;
use App\Models\Media;
use App\Models\Voyage;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

class VoyageController extends Controller
{
    use AuthorizesRequests;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $voyages = Voyage::all();
        return view('voyage.index', ['voyages' => $voyages]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('voyage.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'titre' => 'required',
            'description' => 'required',
            'resume' => 'required',
            'continent' => 'required',
            'visuel' => 'required',
            'public' => 'required',
        ]);

        $voyage = new Voyage();
        $voyage->titre = $request->titre;
        $voyage->description = $request->description;
        $voyage->resume = $request->resume;
        $voyage->continent = $request->continent;
        $voyage->user_id = auth()->id();
        $voyage->en_ligne = $request->public;
        if ($request->hasFile('visuel') && $request->file('visuel')->isValid()) {
            $file = $request->file('visuel');
            $path = $file->store('visuels', 'public');
            $voyage->visuel = $path;
        }

        $voyage->save();

        return redirect()->route('voyage.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $voyage = Voyage::findOrFail($id);
        $user = User::findOrFail($id);
        $etapes = Etape::where('voyage_id', $id)->with('medias')->get();

        return view('voyage.show', ['voyage' => $voyage, 'user' => $user, 'etapes' => $etapes]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $voyage = Voyage::findOrFail($id);
        $this->authorize('update', $voyage);

        return view('voyage.edit', ['voyage' => $voyage]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'titre' => 'required',
            'description' => 'required',
            'resume' => 'required',
            'continent' => 'required',
            'visuel' => 'required',
            'public' => 'required',
        ]);

        $voyage = Voyage::findOrFail($id);

        $voyage->titre = $request->titre;
        $voyage->description = $request->description;
        $voyage->resume = $request->resume;
        $voyage->continent = $request->continent;
        if ($request->hasFile('visuel') && $request->file('visuel')->isValid()) {
            $file = $request->file('visuel');
            $path = $file->store('visuels', 'public');
            $voyage->visuel = $path;
        }
        $voyage->en_ligne = $request->public;
        $voyage->save();

        return redirect()->route('voyage.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $voyage = Voyage::findOrFail($id);
        $this->authorize('delete', $voyage);

        $voyage->delete();

        return redirect()->route('voyage.index');
    }

    public function like($id)
    {
        $user = User::findOrFail(auth()->id());
        $voyage = Voyage::findOrFail($id);

        if ($voyage->likes()->where('user_id', $user->id)->exists()) {
            $voyage->likes()->detach($user->id);
        } else {
            $voyage->likes()->attach($user->id);
        }

        return redirect()->route('voyage.index', ['voyage' => $voyage->id]);
    }
}
