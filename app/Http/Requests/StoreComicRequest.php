<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
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
            'title' => 'required|string|max:100',
            'description' => 'required|string',
            'thumb' => 'required|string',
            'price' => 'required|numeric|max:9999999',
            'series' => 'required|string|max:50',
            'sale_date' => 'required|date|after:1934-1-1',
            'type' => 'required|string|max:50',
            'artists' => 'required|string',
            'writers' => 'required|string',
        ];
    }
}
