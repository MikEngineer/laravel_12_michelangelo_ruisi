<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|min:3',
            'description' => 'required',
            'price' => 'required|numeric',
            'img' => 'image',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Devi inserire il nome.',
            'name.min' => 'Il nome deve essere lungo almeno 3 lettere.',
            'description.required' => 'Devi inserire la descrizione.',
            'price.required' => 'Devi inserire il prezzo.',
            'img.image' => 'Il file deve essere di tipo immagine.',
        ];
    }
}
