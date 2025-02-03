<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
            'title' => 'required|min:10',
            'subtitle' => 'required|min:5',
            'body' => 'required|min:20',
            'img' => 'required|image',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Titolo obbligatorio.',
            'title.min' => 'Il titolo deve essere lungo almeno 10 caratteri.',
            'subtitle.required' => 'Sottotitolo obbligatorio.',
            'subtitle.min' => 'Il titolo deve essere lungo almeno 5 caratteri.',
            'body.required' => "Devi inserire il corpo dell'articolo.",
            'body.min' => "L'articolo deve essere lungo almeno 20 caratteri.",
            'img.required' => "L'immagine è obbligatoria.",
            'img.image' => 'Il file deve essere di tipo immagine.',
        ];
    }
}
