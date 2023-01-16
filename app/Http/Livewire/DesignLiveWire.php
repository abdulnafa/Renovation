<?php

namespace App\Http\Livewire;

use App\Models\Design;
use Livewire\Component;

class DesignLiveWire extends Component
{
    public function render()
    {
        $alldesign=Design::all();
        $kitchendesign=Design::where('servicename','=','kitchen')->get();
        $bathroomdesign=Design::where('servicename','=','bathroom')->get();
        return view('livewire.design-live-wire',compact('alldesign','kitchendesign','bathroomdesign'));
    }
}
