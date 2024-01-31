<?php

namespace App\Livewire;

use App\Models\Lawyer;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\Attributes\On;
class LiveSearchResult extends Component
{
    public $lista = [];
    public $msj;
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
        if($this->lista->count() == 0)$this->msj = 'No se encontraron resultados';
        else $this->msj = '';
    }
    public function download($number)
    {
        $filename = $number . '.pdf';
        $path = storage_path('app/pdf/' . $filename);

        if (!Storage::disk('local')->exists('pdf/' . $filename)) {
            session()->flash('error', 'Archivo no encontrado.');
            return;
        }

        return Response::download($path, $filename);
    }
}
