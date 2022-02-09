<?php

namespace App\Http\Livewire\Firm;

use Livewire\Component;

class Card extends Component
{

    public $firm;

    protected $refreshed = false;

    public  $listeners = [];
    public $bgColor = "bg-white";

    public function mount($firm){
       $this->listeners = ["firm-update-".$firm->id => "firmUpdate"];
    }

    public function render()
    {
        if ($this->refreshed) {
            error_log($this->firm->id . ' is rendering');
            $this->refreshed = false;
        }
        return view('livewire.firm.card');
    }

    public function firmUpdate(){
        // should trigger a render just by coming here?
        // next line is just for error_log
        error_log('updated');
        $this->bgColor = "bg-red-500";
        $this->refreshed = true;
    }
}
