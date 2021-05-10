<?php

namespace App\Http\Livewire;
use App\Facades\Cart;
use App\Models\Product;
use Livewire\Component;

class ProductIndex extends Component
{
    public $search;
    protected $updatesQueryString = ['search'];
    public function render()
    {
        
        return view('livewire.product-index', [
            'products' => $this->search === null ? Product::paginate(6) : Product::where('name', 'like', '%'
        . $this->search . '%')->paginate(6),
        ]);

    }

    public function addToCart(int $productId){
        Cart::add(Product::where('product_id', $productId)->first());
        $this->emit('cartAdded');
    }
}
