<?php

namespace App\Http\Livewire;
use App\Models\Gallery;
use Livewire\Component;

class GalleryLiveWire extends Component
{
  
public $alldata;
public $kitchen;
public $bathroom;

    public function designSelect(){
        $this->alldata='';
        if(!empty($this->kitchen)){
            $this->alldata=Gallery::where("service","=",$this->kitchen)->get();
         
        }

        if(!empty($this->bathroom)){
            $this->alldata=Gallery::where("service","=",$this->bathroom)->get();
           
        }
        if(!empty($this->kitchen) && !empty($this->bathroom)){
 $this->alldata=Gallery::all();

        }

        if(empty($this->kitchen) && empty($this->bathroom)){
            $this->alldata=Gallery::all();
           
                   }
      
 
    
    }
    public function mount(){
        $this->alldata=Gallery::all();
    }

    public function render()
    {
        
        // $this->alldata=Gallery::all();
        return view('livewire.gallery-live-wire');
    }
}
