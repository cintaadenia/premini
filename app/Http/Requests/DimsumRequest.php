<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FoodRequest extends FormRequest
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
            'dimsum' => 'required|unique:dimsum,dimsum,',
            'deskripsi' => 'required|string|max:255 ',
            'price' => 'required|numeric|min:1',
            'stock' => 'required|numeric|min:1',
            'image' => 'required|mimes:jpg,png,jpeg',

        ];
    }

    public function messages(): array
    {
        return [
            'dimsum.required' => 'Silahkan Isi Dimsum Terlebih Dahulu',
            'deskripsi.required' => 'Silahkan Isi Deskripsi Terlebih Dahulu',
            'price.required' => 'Silahkan Isi Price Terlebih Dahulu',
            'stock.required' => 'Silahkan Isi Stock Terlebih Dahulu',
            'image.required' => 'Silahkan Isi Image Terlebih Dahulu',
            'image.image' => 'gambar tidak valid',
        ];
    }
}
