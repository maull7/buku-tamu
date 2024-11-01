<?php

namespace App\Livewire\Tamu;

use App\Models\Tamu;
use Livewire\Component;

class Create extends Component
{

    public string $nama = '';


    public string $no_tel = '';


    public string $tujuan = '';



    public function save()
    {

        $this->validate([
            'nama' => 'required',
            'no_tel' => 'required',
            'tujuan' => 'required'
        ]); // Hapus variabel $rules yang tidak digunakan


        Tamu::create($this->all());
        session()->put('nama', $this->nama);

        session()->flash('message', 'Tamu berhasil ditambahkan!');
        $this->redirectRoute('page');
    }

    public function render()
    {


        return view('livewire.tamu.create');
    }
}
