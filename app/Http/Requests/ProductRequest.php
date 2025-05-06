<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'brand' => 'required|string|max:255',
            'description' => 'required|string',
            'size'   => 'required|array', // Ensure size is an array
            'size.*' => 'string|in:xs,s,m,xl,xxl,xxxl', // Validate each selected size

            'color'   => 'required|array', // Ensure color is an array
            'color.*' => 'string|in:dark,yellow,white,red,green,blue,sky,gray', // Validate each selected color
            'material' => 'required|string',
            'discount' => 'required|numeric',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|numeric|min:0',
            'images'   => 'required|array',
            'images.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:5048',
            'category_id' => 'required|exists:categories,id',
            'subcategory_id' => 'required|exists:subcategories,id',
        ];
    }
}
