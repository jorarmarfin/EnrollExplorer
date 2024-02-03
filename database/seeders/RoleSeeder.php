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
        $viewer = Role::create(['name' => 'viewer']);
        $editor = Role::create(['name' => 'editor']);

        Permission::create(['name' => 'Ver menu'])->syncRoles([$systems,$editor]);

        Permission::create(['name' => 'Buscar fichas'])->syncRoles([$systems,$viewer]);
        Permission::create(['name' => 'Gestionar ficha'])->syncRoles([$systems,$editor]);
        Permission::create(['name' => 'Crear ficha'])->syncRoles([$systems,$editor]);
        Permission::create(['name' => 'Editar ficha'])->syncRoles([$systems,$editor]);
        Permission::create(['name' => 'Eliminar ficha'])->syncRoles([$systems,$editor]);

        Permission::create(['name' => 'Gestionar usuarios'])->syncRoles([$systems]);
        Permission::create(['name' => 'Crear usuario'])->syncRoles([$systems]);
        Permission::create(['name' => 'Editar usuario'])->syncRoles([$systems]);
        Permission::create(['name' => 'Eliminar usuario'])->syncRoles([$systems]);
    }
}
