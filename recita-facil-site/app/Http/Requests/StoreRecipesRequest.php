<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRecipesRequest extends FormRequest
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
            'name' => 'required|string|max:100|min:3',
            'difficulty' => 'required|string|max:50',
            'ingredients' => 'required|string|min:3',
            'preparation' => 'required|string|min:3',
            'preparation_time' => 'required|string|min:3',
            'portions' => 'required|string|min:3|max:20',
            'image' => 'file|mimes:jpeg,jpg,png,jfif',
        ];

        return $rules;
    }
}
