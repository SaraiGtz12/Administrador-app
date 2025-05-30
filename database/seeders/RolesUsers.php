<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RolesUsers extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('roles')->insert([
            [
                'Rol' => 'Administrador'
            ],
            [
                'Rol' => 'Muestreador'
            ],
            [
                'Rol' => 'Coordinador'
            ]
        ]);

        DB::table('users')->insert([
            'EmailUser' => 'fventura@videsa.com.mx',
            'Password' => Hash::make('test01'),
            'RolId' => 1
        ]);
    }
}
