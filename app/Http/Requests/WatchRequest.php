<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WatchRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:20|unique:watches,name',
            'description' => 'required|string|max:100',                          
            'price' => 'required|numeric|min:1|max:5000000',
            'purchase_date' => 'required|date',
            'color' => 'required|string|max:20',
            'brand' => 'required|string|max:20',
            'material' => 'required|string|max:20',
            'movement' => 'required|string|max:20',
                        
            
        ];
    }


    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'name.required' => 'A name is required',
            'description.required' => 'A description is required',
            'price.required' => 'A price is required',
            'purchase_date.required' => 'A purchase date is required',
            'color.required' => 'A color is required',
            'brand.required' => 'A brand is required',
            'material.required' => 'A material is required',
            'movement.required' => 'A movement is required',
            
            


        ];
    }
}
