<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
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
            'product_name' => 'required|max:40',
            'images' => 'array|max:4',
            'images.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ];
    }

    public function userId(): int
    {
        return $this->user()->id;
    }

    public function product(): string
    {
        return $this->input('product_description'); //productではないかもしれない
    }

    public function name(): string
    {
        return $this->input('product_name');
    }

    public function images(): array
    {
        return $this->file('images', []);
    }
}
