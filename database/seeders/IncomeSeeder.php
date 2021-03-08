<?php

namespace Database\Seeders;

use App\Models\Client;
use App\Models\Income;
use Illuminate\Database\Seeder;

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

        Income::query()->where('client_id',$client->id)->forceDelete();

        $this->add(1, 'Recebimento de cobrança', 'PIRÂMIDE ADMINISTRAÇÃO E ASSESSORIA LTDA', '2020-08-15 03:00:00', '543.72', 1, NULL, '2021-02-01 19:29:03',$client);
        $this->add(2, 'Recebimento de cobrança', 'Ilmacc Comercio e Servicos Postumos LTDA', '2020-08-18 03:00:00', '499.00', 1, NULL, '2021-02-01 19:29:02',$client);
        $this->add(3, 'Recebimento de cobrança', 'ALEXANDRE BARROS PEREIRA', '2020-08-18 03:00:00', '471.00', 1, NULL, '2021-02-01 19:29:02',$client);
        $this->add(4, 'Recebimento de cobrança', 'VENOLO SERVICOS FUNERARIOS LTDA', '2020-08-19 03:00:00', '441.00', 1, NULL, '2021-02-01 19:29:01',$client);
        $this->add(5, 'Recebimento de cobrança', 'FUNERARIA LOPES E LOPES LTDA', '2020-08-22 03:00:00', '150.00', 1, NULL, '2021-02-01 19:29:00',$client);
        $this->add(6, 'Recebimento de cobrança', 'FUNERARIA GARCIA E LOPES LTDA', '2020-08-25 03:00:00', '150.00', 1, NULL, '2021-02-01 19:28:59',$client);
        $this->add(7, 'Recebimento de cobrança', 'Funerária Garcia e Lopes Ltda', '2020-08-25 03:00:00', '150.00', 1, NULL, '2021-02-01 19:28:58',$client);
        $this->add(8, 'Recebimento de cobrança', 'SAGRADA FAMILIA ASSISTENCIA FUNERARIA EIRELI', '2020-08-27 03:00:00', '147.00', 1, NULL, '2021-02-01 19:28:55',$client);
        $this->add(9, 'Recebimento de cobrança', 'FUNERARIA GUAPORENSE EIRELI', '2020-08-29 03:00:00', '147.00', 1, NULL, '2021-02-01 19:28:57',$client);
        $this->add(10, 'Recebimento de cobrança', 'Anderson Batista Moreira', '2020-09-09 03:00:00', '294.00', 1, NULL, '2021-02-01 19:28:53',$client);
        $this->add(11, 'Recebimento de cobrança', 'Funerária Nossa Senhora Aparecida', '2020-09-10 03:00:00', '147.00', 1, NULL, '2021-02-01 19:28:53',$client);
        $this->add(12, 'Transferência', 'Entrada de capital', '2020-09-10 03:00:00', '911.02', 1, NULL, '2021-02-01 19:28:52',$client);
        $this->add(13, 'Recebimento de cobrança', 'SAGRADA FAMILIA ASSISTENCIA FUNERARIA EIRELI', '2020-09-15 03:00:00', '147.00', 1, NULL, '2021-01-23 13:34:11',$client);
        $this->add(14, 'Recebimento de cobrança', 'PIRÂMIDE ADMINISTRAÇÃO E ASSESSORIA LTDA', '2020-09-16 03:00:00', '543.72', 1, NULL, '2021-01-23 13:34:10',$client);
        $this->add(15, 'Recebimento de cobrança', 'FUNERARIA SANTAMARIENSE LTDA', '2020-09-18 03:00:00', '150.00', 1, NULL, '2021-02-01 19:28:51',$client);
        $this->add(16, 'Recebimento de cobrança', 'ANGELUS SANTANA DO LIVRAMENTO', '2020-09-18 03:00:00', '150.00', 1, NULL, '2021-02-01 19:28:50',$client);
        $this->add(17, 'Recebimento de cobrança', 'Angelus Uruguaiana', '2020-09-18 03:00:00', '150.00', 1, NULL, '2021-02-01 19:28:50',$client);
        $this->add(18, 'Recebimento de cobrança', 'SAGRADA FAMILIA ASSISTENCIA FUNERARIA EIRELI', '2020-09-22 03:00:00', '147.00', 1, NULL, '2021-02-01 19:28:49',$client);
        $this->add(19, 'Recebimento de cobrança', 'VENOLO SERVICOS FUNERARIOS LTDA', '2020-09-25 03:00:00', '441.00', 1, NULL, '2021-02-01 19:28:48',$client);
        $this->add(20, 'Recebimento de cobrança', 'Angelus Alegrete', '2020-09-26 03:00:00', '70.00', 1, NULL, '2021-02-01 19:28:47',$client);
        $this->add(21, 'Recebimento de cobrança', 'Funerária Aerplan', '2020-09-29 03:00:00', '197.00', 1, NULL, '2021-02-01 19:28:45',$client);
        $this->add(22, 'Transferência', 'Entrada de capital', '2020-10-02 03:00:00', '911.02', 1, NULL, '2021-02-01 19:28:45',$client);
        $this->add(23, 'Recebimento de cobrança', 'FUNERARIA UNIÃO LTDA', '2020-10-08 03:00:00', '294.00', 1, NULL, '2021-02-01 19:28:44',$client);
        $this->add(24, 'Recebimento de cobrança', 'FUNERARIA GUAPORENSE EIRELI', '2020-10-08 03:00:00', '147.00', 1, NULL, '2021-02-01 19:28:42',$client);
        $this->add(25, 'Recebimento de cobrança', 'SAO RAFAEL SERVICOS FUNERARIOS LTDA', '2020-10-14 03:00:00', '197.00', 1, NULL, '2021-02-01 19:28:42',$client);
        $this->add(26, 'Recebimento de cobrança', 'SAGRADA FAMILIA ASSISTENCIA FUNERARIA EIRELI', '2020-10-16 03:00:00', '147.00', 1, NULL, '2021-02-01 19:28:40',$client);
        $this->add(27, 'Recebimento de cobrança', 'PIRÂMIDE ADMINISTRAÇÃO E ASSESSORIA LTDA', '2020-10-16 03:00:00', '543.72', 1, NULL, '2021-02-01 19:28:39',$client);
        $this->add(28, 'Recebimento de cobrança', 'Funeraria Pratense', '2020-10-20 03:00:00', '314.00', 1, NULL, '2021-02-01 19:28:39',$client);
        $this->add(29, 'Recebimento de cobrança', 'FUNERARIA SANTAMARIENSE LTDA', '2020-10-20 03:00:00', '137.90', 1, NULL, '2021-02-01 19:28:38',$client);
        $this->add(30, 'Recebimento de cobrança', 'FUNERARIA LOPES E LOPES LTDA', '2020-10-20 03:00:00', '137.90', 1, NULL, '2021-02-01 19:28:38',$client);
        $this->add(31, 'Recebimento de cobrança', 'FUNERARIA GARCIA E LOPES LTDA', '2020-10-20 03:00:00', '137.90', 1, NULL, '2021-02-01 19:28:36',$client);
        $this->add(32, 'Recebimento de cobrança', 'Centro Oeste de serviços Funebres', '2020-10-20 03:00:00', '137.90', 1, NULL, '2021-02-01 19:28:35',$client);
        $this->add(33, 'Recebimento de cobrança', 'FUNERARIA VENOLO', '2020-10-28 03:00:00', '441.00', 1, NULL, '2021-02-01 19:28:34',$client);
        $this->add(34, 'Recebimento de cobrança', 'ADAM & CIA LTDA', '2020-11-06 03:00:00', '197.00', 1, NULL, '2021-02-01 19:28:33',$client);
        $this->add(35, 'Recebimento de cobrança', 'WANDER SERVICOS FUNERARIOS EIRELI', '2020-11-06 03:00:00', '360.00', 1, NULL, '2021-02-01 19:28:32',$client);
        $this->add(36, 'Recebimento de cobrança', 'FUNERARIA GUAPORENSE EIRELI', '2020-11-10 03:00:00', '147.00', 1, NULL, '2021-02-01 19:28:30',$client);
        $this->add(37, 'Recebimento de cobrança', 'Anderson Batista Moreira', '2020-11-10 03:00:00', '294.00', 1, NULL, '2021-02-01 19:28:30',$client);
        $this->add(38, 'Recebimento de cobrança', 'Funerária Zapelin', '2020-11-11 03:00:00', '942.00', 1, NULL, '2021-02-01 19:28:29',$client);
        $this->add(39, 'Recebimento de cobrança', 'Funeraria Fonseca', '2020-11-16 03:00:00', '471.00', 1, NULL, '2021-02-01 19:28:28',$client);
        $this->add(40, 'Recebimento de cobrança', 'SAGRADA FAMILIA ASSISTENCIA FUNERARIA EIRELI', '2020-11-17 03:00:00', '147.00', 1, NULL, '2021-02-01 19:28:28',$client);
        $this->add(41, 'Recebimento de cobrança', 'Grupo Fonseca', '2020-11-17 03:00:00', '471.00', 1, NULL, '2021-02-01 19:28:27',$client);
        $this->add(42, 'Recebimento de cobrança', 'PIRÂMIDE ADMINISTRAÇÃO E ASSESSORIA LTDA', '2020-11-17 03:00:00', '543.72', 1, NULL, '2021-02-01 19:28:25',$client);
        $this->add(43, 'Recebimento de cobrança', 'Angelus urugaiana', '2020-11-18 03:00:00', '137.90', 1, NULL, '2021-02-01 19:28:24',$client);
        $this->add(44, 'Recebimento de cobrança', 'Angelus Alegrete', '2020-11-18 03:00:00', '137.90', 1, NULL, '2021-02-01 19:28:23',$client);
        $this->add(45, 'Recebimento de cobrança', 'Angelus Livramento', '2020-11-18 03:00:00', '137.90', 1, NULL, '2021-02-01 19:28:22',$client);
        $this->add(46, 'Recebimento de cobrança', 'Angelus Santa Maria', '2020-11-18 03:00:00', '137.90', 1, NULL, '2021-02-01 19:28:21',$client);
        $this->add(47, 'Recebimento de cobrança', 'Funeraria Pratense', '2020-11-18 03:00:00', '314.00', 1, NULL, '2021-02-01 19:28:21',$client);
        $this->add(48, 'Recebimento de cobrança', 'SAO RAFAEL SERVICOS FUNERARIOS LTDA', '2020-11-20 03:00:00', '197.00', 1, NULL, '2021-02-01 19:28:19',$client);
        $this->add(49, 'Recebimento de cobrança', 'VENOLO SERVICOS FUNERARIOS LTDA', '2020-11-27 03:00:00', '441.00', 1, NULL, '2021-02-01 19:28:19',$client);
        $this->add(50, 'Rsarcimento despesas e % COD', '', '2020-12-03 03:00:00', '1.04', 1, NULL, '2021-02-01 19:28:18',$client);
        $this->add(51, 'Recebimento de cobrança', 'Funerária Canaã', '2020-12-04 03:00:00', '499.00', 1, NULL, '2021-02-01 19:28:17',$client);
        $this->add(52, 'Recebimento de cobrança', 'FUNERARIA GUAPORENSE EIRELI', '2020-12-08 03:00:00', '147.00', 1, NULL, '2021-02-01 19:28:16',$client);
        $this->add(53, 'Recebimento de cobrança', 'Funeraria Luto Santa Rita', '2020-12-08 03:00:00', '471.00', 1, NULL, '2021-01-23 13:34:33',$client);
        $this->add(54, 'Recebimento de cobrança', 'ADAM E CIA LTDA', '2020-12-08 03:00:00', '197.00', 1, NULL, '2021-01-23 13:34:32',$client);
        $this->add(55, 'Recebimento de cobrança', 'FUNERARIA LOPES E LOPES LTDA', '2020-12-08 03:00:00', '45.96', 1, NULL, '2021-01-23 13:34:31',$client);
        $this->add(56, 'Recebimento de cobrança', 'Funerária Garcia e Lopes Ltda ', '2020-12-16 03:00:00', '137.90', 1, NULL, '2021-01-23 13:34:30',$client);
        $this->add(57, 'Recebimento de cobrança', 'CENTRO OESTE SERVIÇOS FÚNEBRES LTDA ', '2020-12-16 03:00:00', '137.90', 1, NULL, '2021-01-23 13:34:29',$client);
        $this->add(58, 'Recebimento de cobrança', 'FUNERARIA LOPES E LOPES LTDA - ROSÁRIO', '2020-12-16 03:00:00', '137.90', 1, NULL, '2021-01-23 13:34:28',$client);
        $this->add(59, 'Recebimento de cobrança', 'Funerária Santamariense Ltda', '2020-12-16 03:00:00', '137.90', 1, NULL, '2021-01-23 13:34:27',$client);
        $this->add(60, 'Recebimento de cobrança', 'FUNERARIA LOPES E LOPES LTDA', '2020-12-16 03:00:00', '137.90', 1, NULL, '2021-01-23 13:34:24',$client);
        $this->add(61, 'Recebimento de cobrança', 'FUNERARIA GARCIA E LOPES LTDA', '2020-12-16 03:00:00', '137.90', 1, NULL, '2021-01-23 13:34:22',$client);
        $this->add(62, 'Recebimento de cobrança', 'PIRÂMIDE ADMINISTRAÇÃO E ASSESSORIA LTDA ', '2020-12-16 03:00:00', '543.72', 1, NULL, '2021-01-23 13:34:21',$client);
        $this->add(63, 'Recebimento de cobrança', 'Funeraria Pratense', '2020-12-17 03:00:00', '314.00', 1, NULL, '2021-01-23 13:34:20',$client);
        $this->add(64, 'Recebimento de cobrança', 'SAGRADA FAMILIA ASSISTENCIA FUNERARIA EIRELI', '2020-12-19 03:00:00', '147.00', 1, NULL, '2021-01-23 13:34:19',$client);
        $this->add(72, 'teste', 'teste', '2021-02-01 03:00:00', '451.00', 1, '2021-02-01 19:50:46', '2021-02-01 19:50:46',$client);
    }

    public function add($id, $description, $name, $due_at, $value, $status, $created_at, $updated_at,$client)
    {


        $income = Income::factory()->create([
            'client_id' => $client->id,
            'name' => $name,
            'ordering' => $id,
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
