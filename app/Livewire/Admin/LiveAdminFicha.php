<?php

namespace App\Livewire\Admin;

use App\Livewire\Forms\LawyerForm;
use App\Models\Lawyer;
use Livewire\Component;

class LiveAdminFicha extends Component
{
    public LawyerForm $form;
    public $cantidad=0;
    public $showCreate = true;
    public $showEdit = false;
    public function render()
    {
        $this->cantidad = Lawyer::count();
        return view('livewire.admin.live-admin-ficha',[
            'lista'=>$this->getLista()
        ])
            ->extends('layouts.base')
            ->section('content')
            ;
    }
    public function save()
    {
        if($this->showCreate)$this->form->store();
        else {
            $this->form->update();
            $this->showCreate = true;
            $this->showEdit = false;

        }
    }
    public function getLista()
    {
        return Lawyer::orderBy('id','desc')->take(20)->get();
    }
    public function delete($id)
    {
        Lawyer::destroy($id);
    }
    public function edit($id)
    {
        $this->form->setData(Lawyer::find($id));
        $this->showCreate = false;
        $this->showEdit = true;
        $this->dispatch('goTop');
    }
}
