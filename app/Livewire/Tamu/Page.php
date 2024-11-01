<?php

namespace App\Livewire\Tamu;

use App\Models\Back;
use Livewire\Component;

class Page extends Component
{
    public $showForm = false;

    public string $nama = '';
    public string $nik = '';

    public function toggleForm()
    {
        $this->showForm = !$this->showForm; // Toggle state form
    }
    public function submitForm()
    {
        $this->validate([
            'nama' => 'required',
            'nik' => 'required'
        ]);
        Back::create($this->all());
        $this->showForm = false;
        session()->forget('nama');
        $this->redirectRoute('home');
    }
    public function render()
    {
        if (!session()->has('nama')) {
            $this->redirectRoute('home'); // Ganti dengan nama route yang sesuai
        }
        return view('livewire.tamu.page');
    }
}
