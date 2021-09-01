<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'phone'      => 'nullable|min:9|max:15|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'photo'      => 'nullable|image|mimes:jpeg,png,jpg',
            'birth_date' => 'date|nullable|date_format:Y-m-d|before:today|after:1900-01-01',
            'linkedin'   => 'url|nullable',
            'github'     => 'url|nullable',
            'resume'     => 'max:500|nullable',
        ];
    }
}
