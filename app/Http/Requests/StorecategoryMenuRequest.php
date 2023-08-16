<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorecategoryMenuRequest extends FormRequest
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
        $currentMethodController = $this->route()->getActionMethod();
        switch ($this->method()) {
            case "POST":
                switch ($currentMethodController){
                    case 'store':
                        $rules = [
                            'name' => 'required|unique:tb_category_menus',
                            'status' => 'required'
                        ];
                        break;
                }
            break;
        }
        return $rules;
    }
}
