<?php
namespace App\Http\Controllers;

use App\Models\Etape;
use App\Models\Media;
use App\Models\Voyage;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;

class EtapeController extends Controller
{
    use AuthorizesRequests;

    public function index(){
        $etapes = Etape::all();
        return view('etape.index', compact('etapes'));
    }

    public function create($voyage_id){
        $voyage = Voyage::find($voyage_id);
        return view('etape.create', compact('voyage'));
    }

    public function store(Request $request, $voyage_id){
        $request->validate([
            'titre' => 'required|string|max:255',
            'description' => 'required|string',
            'resume' => 'required|string',
            'debut' => 'required|date',
            'fin' => 'required|date',
            'media_url' => 'required|url',
        ]);


        $etape = new Etape();
        $etape->titre = $request->titre;
        $etape->description = $request->description;
        $etape->resume = $request->resume;
        $etape->debut = $request->debut;
        $etape->fin = $request->fin;
        $etape->voyage_id = $voyage_id;
        $etape->save();



        $media = new Media();
        $media->titre = $request->titre;
        $media->url = $request->media_url;
        $media->format = 'image';
        $media->etape_id = $etape->id;
        $media->save();

        return redirect()->route('voyage.show', $etape->voyage_id);
    }

    public function show(Etape $etape){
        $media=Media::where('etape_id', $etape->id)->first();
        return view('etape.show', compact('etape', 'media'));
    }

    public function edit(Etape $etape){
        return view('etape.edit', compact('etape'));
    }

    public function update(Request $request, $etape_id){

        $request->validate([
            'titre' => 'required|string|max:255',
            'description' => 'required|string',
            'media_url' => 'required|url',
        ]);

        $etape = Etape::find($etape_id);
        $etape->titre = $request->titre;
        $etape->description = $request->description;
        $etape->save();

        $media = Media::where('etape_id', $etape->id)->first();
        $media->url = $request->media_url;
        $media->save();

        return redirect()->route('etape.show', $etape);
    }

    public function destroy(Etape $etape){
        $etape->delete();
        return redirect()->route('voyage.show' , $etape->voyage_id);
    }
}
