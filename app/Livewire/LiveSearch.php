<?php

namespace App\Livewire;

use Livewire\Component;

class LiveSearch extends Component
{
    public $search;
    public function render()
    {
        return view('livewire.live-search');
    }
    public function buscar()
    {
        $this->validate([
            'search' => 'required|min:3',
        ]);
        $this->dispatch('search-registration-form',$this->search)->to(LiveSearchResult::class);
    }
}
