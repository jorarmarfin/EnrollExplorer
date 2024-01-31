<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create(['name' => 'admin']);
        $systems = Role::create(['name' => 'systems']);
        $others = Role::create(['name' => 'Others']);

        Permission::create(['name' => 'Buscar ficha'])->syncRoles([$systems,$others]);
        Permission::create(['name' => 'Crear ficha'])->syncRoles([$systems]);
        Permission::create(['name' => 'Editar ficha'])->syncRoles([$systems]);
        Permission::create(['name' => 'Eliminar ficha'])->syncRoles([$systems]);
    }
}
