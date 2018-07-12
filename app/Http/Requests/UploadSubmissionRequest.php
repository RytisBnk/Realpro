<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UploadSubmissionRequest extends FormRequest
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
        $rules = array();
        $files = $this->allfiles();
        $count = count($files);
        foreach (range(0, $count) as $index)
        {
            $rules['images.' . $index] = 'image|mimes:jpeg,jpg,bmp,png|max:5000';
        }
        return $rules;
    }
}
