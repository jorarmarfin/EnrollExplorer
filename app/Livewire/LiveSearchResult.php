<?php

namespace App\Livewire;

use App\Models\Lawyer;
use Livewire\Component;
use Livewire\Attributes\On;
class LiveSearchResult extends Component
{
    public $lista = [];
    public function render()
    {
        return view('livewire.live-search-result',[
            'lista'=>$this->lista
        ]);
    }
    #[On('search-registration-form')]
    public function buscarFicha($frase)
    {
        $this->lista = Lawyer::orWhere('codigo','like','%'. mb_strtoupper($frase) .'%')
            ->orWhere('dni','like','%'. mb_strtoupper($frase) .'%')
            ->OrwhereRaw("UPPER(CONCAT(paterno, ' ', materno, ' ', nombres)) LIKE '%".mb_strtoupper($frase)."%'")
            ->get();
    }
}
