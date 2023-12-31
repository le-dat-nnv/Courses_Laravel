<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateaboutRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        $rules = [];
        switch ($this->method()){
            case 'POST' :
                switch ($this->route()->getActionMethod()) {
                    case 'update' :
                        $rules = [
                            'name' => 'required',
                            'summary' => 'required',
                            'iframe' => 'required'
                        ];
                        break;
                }
                break;
        }
        return $rules;
    }
}
