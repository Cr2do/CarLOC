<?php

namespace App\Http\Controllers;

use App\Http\Requests\VoitureRequest;
use App\Models\Marque;
use App\Models\Modele;
use App\Models\Voiture;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class VoitureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $value=$request->only('immatriculation','puissance','etat','poids','places','daily_price');
        $modele = Modele::all()->where('name',$request->input('modele'))->first()->id;

        if($modele){
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('image/upload/posted'), $imageName);
            $actualPath = 'image/upload/posted/'.$imageName;

            $voiture = new Voiture();

            $voiture->immatriculation = $request->immatriculation;
            $voiture->modele_id = $modele;
            $voiture->image = $actualPath;
            $voiture->puissance = $request->puissance;
            $voiture->etat = $request->etat;
            $voiture->poids_vide = $request->poids_vide;
            $voiture->places = $request->places;
            $voiture->daily_price = $request->daily_price;

            $voiture->save();

            return redirect()->back();
        }else{
            dd('Error  occured');
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Voiture  $voiture
     * @return \Illuminate\Http\Response
     */
    public function show(Voiture $voiture)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Voiture  $voiture
     * @return \Illuminate\Http\Response
     */
    public function edit(Voiture $voiture)
    {
        //        $car = Voiture::where('id', $voiture);
        //        dd($car);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Voiture  $voiture
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Voiture $voiture)
    {
        $voiture->update($request->all());
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Voiture  $voiture
     * @return \Illuminate\Http\Response
     */
    public function destroy(Voiture $voiture)
    {
        $voiture->delete();
        return redirect()->back();
    }
}
