<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormValidationRequest extends FormRequest
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
        $rules = [
            'tipas' => 'required',
            'adresas' => 'required',
            'kaina' => 'required'
        ];
        $files = $this->allFiles();
        $images = count($files);
        foreach (range(0, $images) as $index)
        {
            $rules['images.'.$index] = 'image|mimes:jpeg,jpg,bmp,png|max:2000';
        }
        return $rules;
    }
}
