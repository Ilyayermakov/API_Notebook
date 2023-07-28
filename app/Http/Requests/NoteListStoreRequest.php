<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NoteListStoreRequest extends FormRequest
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
            'note_id' => 'required|numeric',
            'company' => 'nullable|string|max:255',
            'telephone' => 'required|string|regex:/^[0-9()+\- ]+$/i|max:255',
            'email' => 'required|email|max:255',
        ];
    }
}
