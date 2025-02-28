<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NoteFilterRequest extends FormRequest
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
            //
            'note'  => ['required'],
            'typeControl'  => ['required'],
            'dateControl'  => ['required'],
            'appreciation'  => ['required'],
            'etudiant_id'  => ['required','exists:etudiants,id'],
            'cours_id'  => ['required','exists:cours,id'],
            'enseignant_id'  => ['required','exists:enseignants,id']
        ];
    }
}
