<?php

namespace App\Http\Livewire\Firm;

use App\Models\Firm;
use Livewire\Component;

class Index extends Component
{
    public $firms;

    public function render()
    {
        $this->firms = Firm::all();
        return view('livewire.firm.index');
    }
}
