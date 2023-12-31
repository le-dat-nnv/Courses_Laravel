<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreModulesRequest extends FormRequest
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
        $currentMethodAction = $this->route()->getActionMethod();
        switch ($this->method()){
            case 'POST':
                switch ($currentMethodAction){
                    case 'store':
                        $rules = [
                            'name' => 'required|unique:tb_modules',
                            'summary' => 'required',
                            'module' => 'required',
                            'id_categories' => 'required'
                        ];
                        break;
                }
                break;
        }
        return $rules;
    }
}
