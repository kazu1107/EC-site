<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'product_description' => 'required|max:255',
            'product_name' => 'required|max:40'
        ];
    }

    public function product0(): string
    {
        return $this->input('product_name');
    }

    public function product(): string
    {
        return $this->input('product_description');
    }

    public function id(): int
    {
        return (int) $this->route('productId');
    }
}
