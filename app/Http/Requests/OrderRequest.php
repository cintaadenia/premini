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
                'noTelepon' => 'required|string|max:10',
                'makanan' => 'required|string|min:1',
                'minuman' => 'required|string|min:1',
                'dimsum' => 'required|string|min:1',
                'catatan' => 'required|string|min:1',
            ];
    }
}
