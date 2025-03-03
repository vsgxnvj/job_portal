<?php

namespace App\Http\Requests\Frontend;

use Illuminate\Foundation\Http\FormRequest;

class CompanyFoundingInfoUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'industry_type' => 'required|integer',
            'organization_type' => 'required|integer',
            'team_size' => 'required|integer',
            'establishment_date' => 'required|date',
            'website' => 'nullable',
            'email' => 'required|email',
            'phone' => 'required',

            'country' => 'required|integer',
            'state' => 'nullable|integer',
            'city' => 'nullable|integer',

            'address' => 'string|max:255',
            'map_link' => 'nullable',
        ];
    }
}
