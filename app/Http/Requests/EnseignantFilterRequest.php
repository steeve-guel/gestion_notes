<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EnseignantFilterRequest extends FormRequest
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
            'code' =>['required'],
            'nom' =>['required'],
            'prenom' =>['required'],
            'email' =>['required'],
            'telephone' =>['required'],
            'grade' =>['required'],
            'formations' => ['array','exists:formations,id', 'required'],
            'cours' => ['array','exists:cours,id', 'required']
        ];
    }
}
