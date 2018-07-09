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
            'adresas' => 'required|max:255',
            'kaina' => 'required|min:1',
            'vardas' => 'required|max:100',
            'tel' => 'required|regex:/\+370[0-9]{8}/',
            'gimimas' => 'required|date',
            'plotas' => 'required|integer'
            // more to be added when form pages are done
        ];

        switch($this->input('nuosavybes_tipas'))
        {
            case 'butas':
                $rules['kambariu_skaicius'] =  'required|integer|min:1';
                $rules['aukstas'] = 'required|integer|min:1';
                $rules['aukstu_skaicius'] = 'required|integer|min:1';
                break;

            case 'namas':
                $rules['kambariu_skaicius'] = 'required|integer|min:1';
                $rules['sklypo_plotas'] = 'required|integer';
                $rules['aukstu_skaicius'] = 'required|integer|min:1';
                break;

            case 'patalpos':
                $rules['aukstas'] = 'required|integer|min:0';
                break;

            case 'garazas':
                $rules['talpa'] = 'required|integer|min:0';
                break;

            default:
                break;
        }

        return $rules;
    }
}
