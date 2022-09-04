<?php

namespace App\View\Components\Product;

use Illuminate\View\Component;

class Options extends Component
{
    private int $productId;
    private int $userId;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(int $productId, int $userId)
    {
        $this->productId = $productId;
        $this->userId = $userId;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.product.options')
            ->with('productId', $this->productId)
            ->with('myProduct', \Illuminate\Support\Facades\Auth::id() ===
            $this->userId);
    }
}
