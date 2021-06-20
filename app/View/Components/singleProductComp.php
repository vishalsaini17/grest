<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Product;

class singleProductComp extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $type;

    public function __construct($type)
    {
        $this->type = $type;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $product =Product::where('status','active')->orderBy('id','DESC')->limit(8)->get();

        return view('components.single-product-comp')->with('product_lists', $product);
    }
}
