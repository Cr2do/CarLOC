<?php

namespace App\Http\Controllers;

use App\Models\Location;
use App\Models\Marque;
use App\Models\User;
use App\Models\Voiture;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;


class UserController extends Controller
{
    public function espaceMembre(){
        $user_id=auth()->user()->id;
        $location= Location::all()->where('user_id',$user_id)->first();
        $user=User::all()->where('id',$user_id)->first();
        $voiture='';
        if(!isset($location->voiture_id)){
            return view('dash-user',compact('voiture', 'location','user'));
            die();
        }else{
            $voiture = Voiture::all()->where('id', $location->voiture_id)->first();
        }
        return view('dash-user',compact('voiture', 'location','user'));
    }

    public function welcome(){
        $marques = Marque::all();
        $voitures = Voiture::all();
        $active="active";
        return view('welcome', compact('marques','voitures', 'active'));
    }

    public function cars(){
        $voitures = Voiture::with(['modele' => function ($query){
            $query->with(['marque']);
        }])->paginate(3);
        return view('nos-voitures', compact('voitures'));
    }

    public function rentFirstProcess(Voiture $voiture){
//        dump(asset(''));
//        dump(public_path());
//        die();
        if(auth()->check() == false){
            Session::flash('warning', 'Vous devez vous inscrire');
            return redirect()->back();
        }else{
            $car=Voiture::with(['modele' => function ($query){
                $query->with(['marque']);
            }])->where('id',$voiture->id)->first();
            return view('rent-car', compact('car'));
        }
    }

    public function rentSecondProcess(Voiture $voiture, Request $request){
        $ck=(Location::with('users')->where('voiture_id','=', $voiture->id)
                                                ->where('date_end','>=',$request->date_start))->exists();
        if($ck == false){
            $location = new Location();
            $location->user_id=auth()->user()->id;
            $location->voiture_id=$voiture->id;
            $location->date_start=$request->date_start;
            $location->date_end = $request->date_end;
            $location->save();
            Session::flash('success', 'Demande envoyée avec succes. Vous aurez confirmation d\'ici peu!');
            return redirect()->back();
        }else{
            Session::flash('sorry', 'La voiture a déja été louée: Veuillez quelques jours !');
            return redirect()->back();
        }
    }


}
