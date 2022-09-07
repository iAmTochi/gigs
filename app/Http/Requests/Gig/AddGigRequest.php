<?php

namespace App\Http\Requests\Gig;

use Illuminate\Foundation\Http\FormRequest;

class AddGigRequest extends FormRequest
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
            'role'      => 'required',
            'company'   => 'required',
            'country'   => 'required',
            'state'     => 'required',
            'tag'       => 'required',
            'address'   => 'required|string',
            'min'       => 'required|numeric',
            'max'       => 'required|numeric',

        ];
    }
}
