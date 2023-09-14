<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ArchiveProduct extends Component
{
    public function render()
    {
        return view('livewire.archive-product')->layout("layouts.app");
    }
}
