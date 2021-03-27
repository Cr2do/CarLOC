<?php

namespace App\Http\Controllers;

use App\Models\Location;
use App\Models\Marque;
use App\Models\Modele;
use App\Models\User;
use App\Models\Voiture;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dash(){
        $voitures = Voiture::with(['modele' => function ($query){
            $query->with(['marque']);
        }])->get();
        $compte=1;
        $marques = Marque::with('modeles')->get();
        return view('dashboard', compact('voitures','compte','marques'));
    }

    public function demandeLocation(){
        $location= Location::all()->where('statut','=','traitement')->last();
        $voiture='';
        $modele='';
        $user='';
        if($location != null){
            $voiture = Voiture::all()->where('id', $location->voiture_id)->first();
            $modele = Modele::with('marque')->where('id',$voiture->modele_id)->first();
            $user = User::all()->where('id',$location->user_id)->first();
            return view('demande-location',compact('voiture', 'location','user','modele'));
        }else{
            return view('demande-location',compact('voiture', 'location','user','modele'));
        }
    }

    public function accepterLocation($id){

        $location = Location::all()->where('id',$id)->first();
        $location->statut = env('ACCEPTED');
        $location->save();
        return redirect()->back();
    }

    public function rejeterLocation($id){

        $location = Location::all()->where('id',$id)->first();
        $location->statut = env('REJETED');
        $location->save();
        return redirect()->back();
    }
}
