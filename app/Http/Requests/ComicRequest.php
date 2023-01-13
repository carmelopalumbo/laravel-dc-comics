<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComicRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {

        // default is false
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|min:5|max:100',
            'description' => 'min:10',
            'price' => 'required|min:0.1',
            'series' => 'min:5|max:50',
            'sale_date' => 'required|date',
            'type' => 'min:2|max:50'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Campo obbligatorio.',
            'title.min' => 'Il titolo deve avere un minimo di :min caratteri',
            'title.max' => 'Il titolo deve avere un massimo di :max caratteri',

            'description.min' => 'La descrizione deve avere un minimo di :min caratteri',

            'price.required' => 'Campo obbligatorio.',
            'price.min' => 'Prezzo minimo: :min',

            'series.min' => 'Minimo :min caratteri.',
            'series.max' => 'Massimo :max caratteri.',

            'sale_date.required' => 'Data di uscita obbligatoria.',
            'sale_date.date' => 'Data non valida. Inserisci data in formato internazionale.',

            'type.min' => 'Minimo :min caratteri.',
            'type.max' => 'Massimo :max caratteri.',
        ];
    }
}
