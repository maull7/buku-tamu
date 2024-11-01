<?php

namespace App\Livewire\Tamu;

use Log;
use App\Models\Tamu;
use Livewire\Component;
use Illuminate\Support\Facades\Session;

class Index extends Component
{

    public function render()
    {
        return view('livewire.tamu.index'); // Pastikan nama view sesuai dengan file
    }
}
