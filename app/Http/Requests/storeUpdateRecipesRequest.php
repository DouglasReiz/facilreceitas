<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class storeUpdateRecipesRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        $rules = [
            'name' => 'required|string|max:100|min:3',
            'ingredients' => 'required|string|min:3',
            'preparation' => 'required|string|min:3',
            'preparation_second' => 'string|min:3',
            'preparation_time' => 'required|string|min:3',
            'portions' => 'required|string|min:3|max:20',
            'image' => 'nullable|file|mimes:jpeg,jpg,png,svg',
        ];

        if ($this->method() == 'PUT') {
            $rules = [
                'name' => 'string|max:100|min:3',
                'ingredients' => 'string|min:3',
                'preparation' => 'string|min:3',
                'preparation_second' => 'string|min:3',
                'preparation_time' => 'string|min:3',
                'portions' => 'string|min:3|max:20',
                'image' => 'file|mimes:jpeg,jpg,png,svg',
            ];
        }

        return $rules;
    }
}
