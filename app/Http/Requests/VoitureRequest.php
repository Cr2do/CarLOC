<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VoitureRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'immatriculation' => 'required|string',
            'image' => 'required',
            'puissance' =>'required|numeric',
            'etat' => 'required|string',
            'poids_vide' =>'required|numeric',
            'places' =>'required|numeric',
            'daily_price' => 'required|numeric'

        ];
    }
}
