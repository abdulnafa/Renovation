<?php

namespace App\Http\Livewire;

use App\Models\Design;
use Livewire\Component;

class DesignLiveWire extends Component
{
    public function render()
    {
        $alldesign=Design::all();
        return view('livewire.design-live-wire',compact('alldesign'));
    }
}
