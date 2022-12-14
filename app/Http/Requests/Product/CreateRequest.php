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
            'price' => 'required|max:100000',
            'images' => 'array|max:4',
            'postage' => 'required',
            'buying_id' => 'required',
            /* 'images.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048' */ // 10/26ここ消して処理できた
        ];
    }

    public function userId(): int
    {
        return $this->user()->id;
    }

    public function product_description(): string //_description追記
    {
        return $this->input('product_description'); //productではないかもしれない
    }

    public function name(): string
    {
        return $this->input('product_name');
    }

    public function price(): int
    {
        return (int) $this->input('price');
    }

    public function postage(): string
    {
        return $this->input('postage');
    }

    public function images(): array
    {
        return $this->file('images', []);
    }

    public function buying_id(): int
    {
        return (int) $this->input('buying_id');
    }
}
