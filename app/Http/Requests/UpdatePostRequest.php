<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePostRequest extends FormRequest
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
        return [
            'title' => [
                'required',
                Rule::unique('posts')->ignore($this->posts),
                'max:150',
                'min:3'
            ],
            
            'slug' => 'required|unique:posts|max:255',
            'image' => 'nullable',
            'description' => 'nullable',
            'programming_language' => 'nullable',
            'difficulty' => 'nullable',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'il titolo è obbligatorio',

        ];
    }
}
