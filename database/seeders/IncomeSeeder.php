<?php

namespace Database\Seeders;

use App\Models\Client;
use App\Models\Income;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class IncomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $client = Client::query()->where('name', 'teste')->first();
        if (!$client) {
            Client::factory()->create([
                'name' => 'teste'
            ]);
        }
        $client = Client::query()->where('name', 'teste')->first();
        Income::query()->forceDelete();
        $expenses = json_decode(File::get(storage_path('data/app_incomes.json')));
        foreach ($expenses as $expens) {
            $this->add($client,
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

    public function add($client, $id, $description, $name, $due_at, $value, $status, $created_at, $updated_at)
    {


        $income = Income::factory()->create([
            'client_id' => $client->id,
            'name' => $name,
            'ordering' => $id,
            'status' => ['draft', 'published'][$status],
        ]);
        $income->finance()->create([
            'description' => $description,
            'status' => ['draft', 'published'][$status],
            'value' => $value,
            'due_at' => $due_at,
            'created_at' => $updated_at,
            'updated_at' => $updated_at,
        ]);
    }
}
