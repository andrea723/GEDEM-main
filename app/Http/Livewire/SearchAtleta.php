<?php

namespace App\Http\Livewire;

use App\Models\InscripcionAtleta;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class SearchAtleta extends Component
{
    use LivewireAlert;
    
    public $inputSearch;

    public function render()
    {
        return view('livewire.search-atleta');
    }

    public function submitSearch()
    {
        if ( InscripcionAtleta::where([ 'identification' => $this->inputSearch ])->doesntExist() )
            return $this->alert('warning', 'No se encontro ningun participante.');

        return redirect()->route('guest-pending', ['id' => $this->inputSearch ]);
    }
}
