<?php

namespace App\Livewire\Admin;

use App\Livewire\Forms\LawyerForm;
use App\Models\Lawyer;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class LiveAdminFicha extends Component
{
    use WithFileUploads;
    public LawyerForm $form;
    public int $cantidad=0;
    public bool $showCreate = true;
    public bool $showEdit = false;

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
    public function save():void
    {
        if($this->showCreate) {
            $this->form->store();
            $this->dispatch('alert', params: [
                'icon'   => 'success',
                'message' => 'Se ha guardado el registro correctamente.',
            ]);
        }
        else {
            $this->form->update();
            $this->showCreate = true;
            $this->showEdit = false;

        }
    }
    public function getLista()
    {
        return (Auth::user()->hasRole(['admin', 'systems']))
            ?Lawyer::orderBy('id','desc')->take(20)->get()
            :Lawyer::where('user_id', Auth::id())->orderBy('id','desc')->take(20)->get();
    }
    public function delete($id):void
    {
        Lawyer::destroy($id);
    }
    public function edit($id):void
    {
        $this->form->setData(Lawyer::find($id));
        $this->showCreate = false;
        $this->showEdit = true;
        $this->dispatch('goTop');
    }
}
