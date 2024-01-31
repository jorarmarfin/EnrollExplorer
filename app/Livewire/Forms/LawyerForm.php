<?php

namespace App\Livewire\Forms;

use App\Models\Lawyer;
use Livewire\Attributes\Validate;
use Livewire\Form;

class LawyerForm extends Form
{
    public ?Lawyer $lawyer;

    #[Validate('required|min:5')]
    public $codigo = '';

    #[Validate('required|numeric|digits:8')]
    public $dni = '';

    #[Validate('nullable|max:50')]
    public $paterno = '';

    #[Validate('nullable|max:50')]
    public $materno = '';

    #[Validate('nullable|max:50')]
    public $nombres = '';

    public function store()
    {
        $this->validate();
        Lawyer::create($this->all());
    }
    public function setData(Lawyer $lawyer)
    {
        $this->lawyer = $lawyer;
        $this->codigo = $lawyer->codigo;
        $this->dni = $lawyer->dni;
        $this->paterno = $lawyer->paterno;
        $this->materno = $lawyer->materno;
        $this->nombres = $lawyer->nombres;
    }
    public function update()
    {
        $this->validate();
        $this->lawyer->update($this->all());
        $this->reset();
    }

}
