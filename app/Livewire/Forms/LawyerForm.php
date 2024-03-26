<?php

namespace App\Livewire\Forms;

use App\Models\Lawyer;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;
use Livewire\Form;

class LawyerForm extends Form
{
    public ?Lawyer $lawyer;

    #[Validate('required')]
    public string $codigo = '';

    #[Validate('required|numeric|digits:8')]
    public String $dni = '';

    #[Validate('nullable|max:50')]
    public String $paterno = '';

    #[Validate('nullable|max:50')]
    public String $materno = '';

    #[Validate('nullable|max:50')]
    public String $nombres = '';

    #[Validate('file|mimes:pdf|max:102400')] // 100MB Max
    public $escaneado = null;

    public int $user_id;

    public int $id;

    public function store():void
    {
        $this->validate();
        $this->user_id = Auth::id();
        $this->escaneado->storeAs(path: 'pdf',name: $this->codigo.'.'.$this->escaneado->extension());
        Lawyer::create($this->all());
        $this->reset(['codigo','dni','paterno','materno','nombres','escaneado']);
    }
    public function setData(Lawyer $lawyer):void
    {
        $this->lawyer = $lawyer;
        $this->id = $lawyer->id;
        $this->codigo = $lawyer->codigo;
        $this->dni = $lawyer->dni;
        $this->paterno = $lawyer->paterno;
        $this->materno = $lawyer->materno;
        $this->nombres = $lawyer->nombres;
    }
    public function update():void
    {
        $rules = [
            'codigo' => 'required|min:5|unique:lawyers,codigo,'.$this->lawyer->id, // unique:lawyers,codigo,{$this->lawyer->id}
            'dni' => 'required|numeric|digits:8|unique:lawyers,dni,'.$this->lawyer->id,
            'paterno' => 'nullable|max:50',
            'materno' => 'nullable|max:50',
            'nombres' => 'nullable|max:50',
        ];
        $this->validate($rules);
        $this->user_id = Auth::id();
        $this->lawyer->update($this->all());
        $this->reset();
    }

}
