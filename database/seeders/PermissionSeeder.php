<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;
use SIGA\Acl\Helpers\LoadRouterHelper;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        $routes = LoadRouterHelper::make();
        if ($routes):
            foreach ($routes as $route):
                if (!Permission::query()->where('slug', $route)->count()):
                    $explode = explode(".", $route);
                    $last = last($explode);
                    $name = str_replace(".", " ", \Illuminate\Support\Str::title($route));
                    Permission::factory()->create([
                        'name' => $name,
                        'slug' => $route,
                        'grupo' => $last,
                        'description' => $name
                    ]);
                endif;
            endforeach;
        endif;
    }
}
