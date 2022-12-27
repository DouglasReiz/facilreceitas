<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRecipesRequest extends FormRequest
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
        $rules = [
            'name' => 'string|max:100|min:3',
            'difficulty' => 'string|max:50',
            'ingredients' => 'string|min:3',
            'preparation' => 'string|min:3',
            'preparation_second' => 'string|min:3',
            'preparation_time' => 'string|min:3',
            'portions' => 'string|min:3|max:20',
            'image' => 'file|mimes:jpeg,jpg,png,svg',
        ];

        if ($this->method() == 'PUT') {
            
        }

        return $rules;
    }
}
