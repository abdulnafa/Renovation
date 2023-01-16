<?php

namespace App\Http\Livewire;
use App\Models\Gallery;
use Livewire\Component;

class GalleryLiveWire extends Component
{
  
public $alldata;
public $mydata;

    public function ChangeGallery($val){
        
        $this->alldata=Gallery::where('service','=',$val)->get();
        return $this->alldata;
        
        
    
    }

    public function render()
    {
        
        $this->alldata=Gallery::all();
        return view('livewire.gallery-live-wire');
    }
}
