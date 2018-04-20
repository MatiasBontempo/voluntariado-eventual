<?php

use Illuminate\Database\Seeder;
use \Spatie\Permission\Models\Permission as Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create(['name' => 'crear_actividad']);
        Permission::create(['name' => 'editar_actividad']);
        Permission::create(['name' => 'borrar_actividad']);
        Permission::create(['name' => 'tomar_asistencia']);
        Permission::create(['name' => 'control_pagos']);
    }
}
