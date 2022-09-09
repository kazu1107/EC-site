<?php

namespace App\View\Components\Product;

use Illuminate\View\Component;

class Options extends Component
{
    private int $productId;
    private int $userId;

    public function __construct(int $productId, int $userId)
    {
        $this->productId = $productId;
        $this->userId = $userId;
    }

    public function render()
    {
        return view('components.product.options')
            ->with('productId', $this->productId)
            ->with('myProduct', \Illuminate\Support\Facades\Auth::id() ===
            $this->userId);
    }
}
