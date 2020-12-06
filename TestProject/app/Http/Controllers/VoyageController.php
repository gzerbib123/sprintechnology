<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Voyage;
use App\Models\Etape;

class VoyageController extends Controller
{
    public function home() {
        $first = Voyage::first(); // on récupère le premier voyage
        // on récupère les étapes du premier voyage, order by la date de depart
        $etapes = Etape::where('voyage_id', $first->id)->orderBy('departure_date', 'asc')->get();
        // on return la view home avec différentes variable
        return view('home', [
            'voyages' => Voyage::all(),
            'select_id' => $first->id,
            'etapes' => $etapes 
        ]);
    }

    public function vol($id) {
        // on récupère les étapes du voyage placer en paramètre, order by la date de depart
        $etapes = Etape::where('voyage_id', $id)->orderBy('departure_date', 'asc')->get();
        // on return la view home avec différentes variables
        return view('home', [
            'voyages' => Voyage::all(),
            'select_id' => $id,
            'etapes' => $etapes 
        ]);
    }

    public function addFlight(Request $req) {
        // on récupère le nom dans l'input "name"
        $name = $req->input('name');
        // on créer le voyage
        $voy = Voyage::create([
            'name' => $name,
        ]);
        // on redirige vers la page du voyage créé
        return redirect("vol/{$voy->id}");
    }

    public function addStepView($id) {
        // on récupère le voyage placé en paramètre
        $voy = Voyage::where('id', $id)->first();
        // on return la view "addStep" avec différentes variables
        return view('addStep', ["voyage_id" => $id, "voyage_name" => $voy->name]);
    }

    public function addStep(Request $req) {
        // on créer la nouvelle étape avec les différents input reçu
        Etape::create([
            "type" => $req->input('type'),
            "number" => $req->input('number'),
            "departure" => $req->input('departure'),
            "arrival" => $req->input('arrival'),
            "departure_date" => $req->input('departure_date'),
            "arrival_date" => $req->input('arrival_date'),
            "voyage_id" => $req->input('voyage_id'),
            "seat" => $req->input('seat'),
            "gate" => $req->input('gate'),
            "baggage_drop" => $req->input('baggage_drop'),
        ]);

        // on redirige vers la page du voyage de l'étape
        return redirect("vol/{$req->input('voyage_id')}");
    }

}
