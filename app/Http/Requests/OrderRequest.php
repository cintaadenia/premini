<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
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
                'food_id' => 'nullable|array',
                'drink_id' => 'nullable|array',
                'dimsum_id' => 'nullable|array',
                'jumlah_food' => 'nullable|array',
                'jumlah_drink' => 'nullable|array',
                'jumlah_dimsum' => 'nullable|array|min:1',
                'catatan' => 'nullable|string',

            ];
    }
}
