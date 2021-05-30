<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Address;



class Addresses extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $title;
    public $address;
    public function __construct($title)
    {
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $this->address = Address::all()->where('user_id', auth()->user()->id);
        
        return view('components.addresses');
    }
}
