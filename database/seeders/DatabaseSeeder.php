<?php

namespace Database\Seeders;

use App\Models\Client;
use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::query()->delete();
        Permission::query()->delete();
        Role::query()->delete();
//
        $this->call(RoleSeeder::class);
        //$this->call(ClientSeeder::class);
        $this->call(ExpenseSeeder::class);
        $this->call(IncomeSeeder::class);
      // \App\Models\User::factory(500)->create();
    }
}
