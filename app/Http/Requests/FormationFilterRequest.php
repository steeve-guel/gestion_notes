<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormationFilterRequest extends FormRequest
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
            'code' => ['required','min:8'],
            'domaine' => ['required'],
            'mention' => ['required'],
            'description' => ['required'],
            'grade' => ['required'],
            'specialite' =>['required'],
        ];
    }
}
