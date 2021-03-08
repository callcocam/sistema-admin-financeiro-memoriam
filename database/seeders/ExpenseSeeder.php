<?php

namespace Database\Seeders;


use App\Models\Expense;
use App\Models\Provider;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ExpenseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $provider=   Provider::query()->where('name', 'teste')->first();
        if (!$provider) {
           $result = Provider::factory()->create([
                'name' => 'teste'
            ]);
        }
        $provider = Provider::query()->where('name', 'teste')->first();
        Expense::query()->forceDelete();
        $expenses = json_decode(File::get(storage_path('data/app_expenses.json')));
        foreach ($expenses as $expens) {
            $this->add($provider,
                $expens->id,
                $expens->description,
                $expens->provider,
                $expens->due_at,
                $expens->value,
                $expens->status,
                $expens->created_at,
                $expens->updated_at,
            );
       }
    }

    protected function add($provider,$id, $description, $name, $due_at, $value, $status, $created_at, $updated_at)
    {

        if($provider){
            //Provider::query()->where('name', $name)->forceDelete();
            Expense::factory(1)->create([
                'provider_id' => $provider->id,
                'name' => $name,
                'ordering' => $id,
                'status' => ['draft', 'published'][$status]
            ])->each(function ($expence) use ( $description, $due_at, $value, $status, $created_at, $updated_at) {
                $expence->finance()->create([
                    'description' => $description,
                    'status' => ['draft', 'published'][$status],
                    'value' => $value,
                    'due_at' => $due_at,
                    'created_at' => $updated_at,
                    'updated_at' => $updated_at,
                ]);
            });
        }



    }
}
