<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Order;

class ordersComp extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    //  $orders = Order::where('id', )->get();
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.orders-comp');
    }
}
