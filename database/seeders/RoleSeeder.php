<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\User;
class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roleSuper =  Role::factory( )->create([
            'name'=>"Super Admin", 'slug'=>"super-admin", 'description'=>"Controle Geral Do Sistema", 'special'=>"all-access"
        ]);

        $roleAdmin =  Role::factory()->create([
           'name'=>"Administrador", 'slug'=>"administrador", 'description'=>"Controle Parcial Do Sistema", 'special'=>null
        ]);

        $mail = sprintf("super-admin@%s", request()->getHost());
        $userSuper =  User::factory()->create([
            'type'=>"cpf",'name'=>"Super Admin",'email'=>$mail
        ])->first();

        $mail = sprintf("admin@%s", request()->getHost());
        $userAdmin =  User::factory()->create([
           'type'=>"cpf",'name'=>"Administrador",'email'=>$mail
        ])->first();

        $userSuper->roles()->sync($roleSuper->id->toString());
        $userAdmin->roles()->sync($roleAdmin->id->toString());
    }
}
