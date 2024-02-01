<?php

namespace App\Livewire\Forms;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Validate;
use Livewire\Form;

class UsuariosForm extends Form
{
    public ?User $user;

    #[Validate('required')]
    public $name = '';

    #[Validate('required')]
    public $username = '';

    #[Validate('required|email|unique:users')]
    public $email = '';

    public $password = null;
    public $role = 'others';
    public $id;

    public function store()
    {
        $this->validate();
        User::create($this->all())->assignRole($this->role);
        $this->reset();
    }
    public function setData(User $user)
    {
        $this->user = $user;
        $this->id = $user->id;
        $this->name = $user->name;
        $this->username = $user->username;
        $this->email = $user->email;
    }
    public function update()
    {
        $rules = [
            'name' => 'required',
            'username' => 'required',
            'email' => 'required|email|unique:users,email,'.$this->id,
        ];
        $this->validate($rules);
        $data = [
            'name' => $this->name,
            'username' => $this->username,
            'email' => $this->email,
        ];
        if (!empty($this->password)) {
            $this->password = Hash::make($this->password);
            $data['password'] = $this->password;
        }

        $this->user->update($data);
        $this->reset();
    }
}
