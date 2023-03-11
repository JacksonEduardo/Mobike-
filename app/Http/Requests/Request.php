<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Request extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
       return [];
    }
}

// public function rules(): array
//     {
//         return [
//             'name' => 'required|min:1|max:30',
//             'price' => 'required',
//             'cover' => 'required|image',
//             'description' => 'required|min:5|max:120',
//         ];
//     }

//     public function messages(): array 
//     {
//         return [
//             'name.required' => 'Il nome è obbligatorio',
//             'name.min' => 'Il nome deve avere almeno 1 carattere',
//             'name.max' => 'Il nome può avere al massimo 30 caratteri',
//             'price.required' => 'Il prezzo è obbligatorio',
//             'cover.required' => "L'immagine è obbligatoria",
//             'cover.image' => "Il formato dev'essere una foto",
//             'description.required' => "E' necessario inserire la descrizione",
//             'description.min' => "Il descrizione dev'essere lungo almeno 3 caratteri",
//             'description.max' => "Il descrizione non deve superare i 120 caratteri",
//         ];
//     }
