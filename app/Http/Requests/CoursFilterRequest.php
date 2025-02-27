<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CoursFilterRequest extends FormRequest
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
            'code' => ['required'],
            'intitule' => ['required'],
            'unite_ens_id' => ['required|exists:unite_ens,id'],
            'coeff' => ['required'],
            'coursMagistral' => ['required'],
            'tDiriges' => ['required'],
            'tPratiques' => ['required'],
            'tPersEtudiant' => ['required'],
            'volmHoraireTPers' => ['required'],
        ];
    }
}
