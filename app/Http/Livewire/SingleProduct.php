<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SingleProduct extends Component
{
    public function render()
    {
        return view('livewire.frontend.single-product')->layout("layouts.app");
    }
}
