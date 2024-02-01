<?php

namespace App\Livewire\Admin;

use App\Livewire\Forms\UsuariosForm;
use App\Models\User;
use Livewire\Component;

class LiveAdminUsuarios extends Component
{
    public UsuariosForm $form;
    public $cantidad=0;
    public $showCreate = true;
    public $showEdit = false;
    public function render()
    {
        $this->cantidad = User::count();
        return view('livewire.admin.live-admin-usuarios',[
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
    public function delete($id)
    {
        User::destroy($id);
    }
    public function edit($id)
    {
        $this->form->setData(User::find($id));
        $this->showCreate = false;
        $this->showEdit = true;
        $this->dispatch('goTop');
    }
    public function getLista()
    {
        return User::where('name','<>','Admin')->orderBy('id','desc')->get();
    }
}
