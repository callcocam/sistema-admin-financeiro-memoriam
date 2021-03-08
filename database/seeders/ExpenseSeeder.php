<?php

namespace Database\Seeders;


use App\Models\Expense;
use App\Models\Provider;
use Illuminate\Database\Seeder;

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
            Provider::factory()->create([
                'name' => 'teste'
            ]);
        }
        $provider = Provider::query()->where('name', 'teste')->first();
        Expense::query()->forceDelete();
        $this->add($provider,1, NULL, 'Tarifa boleto', 'Ilmacc Comercio e Servicos Postumos LTDA', '2020-08-29', '2.99', '1', NULL, '2021-01-21 12:14:29');
        $this->add($provider,2, NULL, 'Tarifa boleto', 'VENOLO SERVICOS FUNERARIOS LTDA', '2020-08-27', '2.99', '1', NULL, '2021-01-21 12:14:28');
        $this->add($provider,3, NULL, 'Tarifa boleto', 'FUNERARIA LOPES E LOPES LTDA', '2020-08-25', '2.99', '1', NULL, '2021-01-21 12:14:26');
        $this->add($provider,4, NULL, 'Tarifa boleto', 'FUNERARIA GARCIA E LOPES LTDA', '2020-08-25', '2.99', '1', NULL, '2021-01-21 12:14:25');
        $this->add($provider,5, NULL, 'Tarifa boleto', 'SAGRADA FAMILIA ASSISTENCIA FUNERARIA EIRELI', '2020-08-22', '2.99', '1', NULL, '2021-01-21 12:14:23');
        $this->add($provider,6, NULL, 'Transferência', '', '2020-08-21', '508.82', '1', NULL, '2021-01-21 12:14:22');
        $this->add($provider,7, NULL, 'Tarifa boleto', 'ALEXANDRE BARROS PEREIRA', '2020-08-19', '2.99', '1', NULL, '2021-01-21 12:14:19');
        $this->add($provider,8, NULL, 'Tarifa boleto', 'PIRÂMIDE ADMINISTRAÇÃO E ASSESSORIA LTDA', '2020-08-18', '2.99', '1', NULL, '2021-01-21 12:14:17');
        $this->add($provider,9, NULL, 'Tarifa boleto', 'Funerária Garcia e Lopes Ltda', '2020-08-18', '2.99', '1', NULL, '2021-01-21 12:14:16');
        $this->add($provider,10, NULL, 'Tarifa boleto', 'FUNERARIA GUAPORENSE EIRELI', '2020-08-15', '2.99', '1', NULL, '2021-01-21 12:14:15');
        $this->add($provider,11, NULL, 'Pagamento Contabilidade', 'Contabilidade Invoice', '2020-09-03', '250.00', '1', NULL, '2021-01-21 12:14:14');
        $this->add($provider,12, NULL, 'Pagamento Salário', 'Dionantan', '2020-09-08', '1.78', '1', NULL, '2021-01-21 12:14:12');
        $this->add($provider,13, NULL, 'Tarifa boleto', 'Anderson Batista Moreira', '2020-09-09', '2.99', '1', NULL, '2021-01-21 12:14:11');
        $this->add($provider,14, NULL, 'Tarifa boleto', 'Funerária Nossa Senhora Aparecida', '2020-09-10', '2.99', '1', NULL, '2021-01-21 12:14:10');
        $this->add($provider,15, NULL, 'Tarifa boleto', 'SAGRADA FAMILIA ASSISTENCIA FUNERARIA EIRELI', '2020-09-15', '2.99', '1', NULL, '2021-01-21 12:14:09');
        $this->add($provider,16, NULL, 'Guia Simples ', 'Tributos', '2020-09-16', '161.92', '1', NULL, '2021-01-21 12:14:08');
        $this->add($provider,17, NULL, 'Tarifa boleto', 'PIRÂMIDE ADMINISTRAÇÃO E ASSESSORIA LTDA', '2020-09-16', '2.99', '1', NULL, '2021-01-21 12:14:07');
        $this->add($provider,18, NULL, 'Tarifa boleto', 'FUNERARIA SANTAMARIENSE LTDA', '2020-09-18', '2.99', '1', NULL, '2021-01-21 12:14:05');
        $this->add($provider,19, NULL, 'Tarifa boleto', 'ANGELUS SANTANA DO LIVRAMENTO', '2020-09-18', '2.99', '1', NULL, '2021-01-21 12:14:04');
        $this->add($provider,20, NULL, 'Tarifa boleto', 'Angelus Uruguaiana', '2020-09-18', '2.99', '1', NULL, '2021-01-21 12:14:03');
        $this->add($provider,21, NULL, 'Tarifa boleto', 'FUNERÁRIA GUAPORENSE', '2020-09-22', '2.99', '1', NULL, '2021-01-21 12:14:01');
        $this->add($provider,22, NULL, 'Tarifa boleto', 'VENOLO SERVICOS FUNERARIOS LTDA', '2020-09-25', '2.99', '1', NULL, '2021-01-21 12:14:00');
        $this->add($provider,23, NULL, 'Conta Telefone', 'Operadora', '2020-09-25', '56.33', '1', NULL, '2021-01-21 12:13:59');
        $this->add($provider,24, NULL, 'Tarifa boleto', 'Angelus Alegrete', '2020-09-26', '2.99', '1', NULL, '2021-01-21 12:13:58');
        $this->add($provider,25, NULL, 'Hospedagem', 'Hostoo', '2020-09-29', '60.00', '1', NULL, '2021-01-21 12:13:57');
        $this->add($provider,26, NULL, 'Pagamento Contabilidade', 'Contabilidade Invoice', '2020-09-29', '346.00', '1', NULL, '2021-01-21 12:13:56');
        $this->add($provider,27, NULL, 'Tarifa boleto', 'Funerária Aerplan', '2020-09-29', '2.99', '1', NULL, '2021-01-21 12:13:54');
        $this->add($provider,28, NULL, 'Hospedagem', 'Hostoo', '2020-09-30', '40.00', '1', NULL, '2021-01-21 12:13:53');
        $this->add($provider,29, NULL, 'Designer', 'RENATA TONIN', '2020-09-30', '220.00', '1', NULL, '2021-01-21 12:13:51');
        $this->add($provider,30, NULL, 'Tarifa Transferência', 'RENATA TONIN', '2020-09-30', '5.00', '1', NULL, '2021-01-21 12:13:50');
        $this->add($provider,31, NULL, 'Pagamento Salário', 'Dionantan', '2020-10-02', '1.78', '1', NULL, '2021-01-21 12:13:49');
        $this->add($provider,32, NULL, 'Pagamento Salário', 'Edemarcos', '2020-10-02', '460.00', '1', NULL, '2021-01-21 12:13:47');
        $this->add($provider,33, NULL, 'Tarifa Transferência', 'transferencia salário', '2020-10-02', '5.00', '1', NULL, '2021-01-21 12:13:45');
        $this->add($provider,34, NULL, 'Tarifa boleto', 'FUNERARIA UNIÃO LTDA', '2020-10-08', '2.99', '1', NULL, '2021-01-21 12:13:44');
        $this->add($provider,35, NULL, 'Tarifa boleto', 'FUNERARIA GUAPORENSE EIRELI', '2020-10-08', '2.99', '1', NULL, '2021-01-21 12:13:43');
        $this->add($provider,36, NULL, 'Tarifa boleto', 'SAO RAFAEL SERVICOS FUNERARIOS LTDA', '2020-10-14', '2.99', '1', NULL, '2021-01-21 12:13:41');
        $this->add($provider,37, NULL, 'Guia GPS', 'INSS Salário', '2020-10-14', '220.00', '1', NULL, '2021-01-21 12:13:40');
        $this->add($provider,38, NULL, 'Guia Simples', 'Tributos', '2020-10-15', '146.20', '1', NULL, '2021-01-21 12:13:39');
        $this->add($provider,39, NULL, 'Tarifa boleto', 'SAGRADA FAMILIA ASSISTENCIA FUNERARIA EIRELI', '2020-10-16', '2.99', '1', NULL, '2021-01-21 12:13:38');
        $this->add($provider,40, NULL, 'Tarifa boleto', 'PIRÂMIDE ADMINISTRAÇÃO E ASSESSORIA LTDA', '2020-10-16', '2.99', '1', NULL, '2021-01-21 12:13:37');
        $this->add($provider,41, NULL, 'Hospedagem', 'Hostoo', '2020-10-19', '50.00', '1', NULL, '2021-01-21 12:13:36');
        $this->add($provider,42, NULL, 'Tarifa boleto', 'Funeraria Pratense', '2020-10-20', '2.99', '1', NULL, '2021-01-21 12:13:34');
        $this->add($provider,43, NULL, 'Tarifa boleto', 'FUNERARIA SANTAMARIENSE LTDA', '2020-10-20', '2.99', '1', NULL, '2021-01-21 12:13:33');
        $this->add($provider,44, NULL, 'Tarifa boleto', 'FUNERARIA LOPES E LOPES LTDA', '2020-10-20', '2.99', '1', NULL, '2021-01-21 12:13:31');
        $this->add($provider,45, NULL, 'Tarifa boleto', 'FUNERARIA GARCIA E LOPES LTDA', '2020-10-20', '2.99', '1', NULL, '2021-01-21 12:13:30');
        $this->add($provider,46, NULL, 'Tarifa boleto', 'Centro Oeste de serviços Funebres', '2020-10-20', '2.99', '1', NULL, '2021-01-21 12:13:29');
        $this->add($provider,47, NULL, 'Registro dominio', 'Registro', '2020-10-20', '69.90', '1', NULL, '2021-01-21 12:13:27');
        $this->add($provider,48, NULL, 'Hospedagem', 'Cloud Weis', '2020-10-26', '145.00', '1', NULL, '2021-01-21 12:13:26');
        $this->add($provider,49, NULL, 'Tarifa Transferência', '', '2020-10-26', '5.00', '1', NULL, '2021-01-21 12:13:25');
        $this->add($provider,50, NULL, 'Hospedagem', 'hostoo', '2020-10-26', '60.00', '1', NULL, '2021-01-21 12:13:24');
        $this->add($provider,51, NULL, 'Tarifa Transferência', '', '2020-10-26', '5.00', '1', NULL, '2021-01-21 12:13:23');
        $this->add($provider,52, NULL, 'Conta Telefone', 'operadora', '2020-10-26', '42.00', '1', NULL, '2021-01-21 12:13:21');
        $this->add($provider,53, NULL, 'Tarifa Transferência', '', '2020-10-26', '5.00', '1', NULL, '2021-01-21 12:13:20');
        $this->add($provider,54, NULL, 'Tarifa boleto', 'FUNERARIA VENOLO', '2020-10-28', '2.99', '1', NULL, '2021-01-21 12:13:19');
        $this->add($provider,55, NULL, 'Pagamento Contabilidade', 'Invoice', '2020-10-29', '260.75', '1', NULL, '2021-01-21 12:13:18');
        $this->add($provider,56, NULL, 'Pagamento GPS', 'INSS Salário', '2020-11-04', '220.00', '1', NULL, '2021-01-21 12:13:16');
        $this->add($provider,57, NULL, 'Pagamento DARE', '', '2020-11-04', '109.23', '1', NULL, '2021-01-21 12:13:15');
        $this->add($provider,58, NULL, 'Pagamento Salário', 'Dionatan', '2020-11-04', '1.78', '1', NULL, '2021-01-21 12:13:14');
        $this->add($provider,59, NULL, 'Pagamento Salário', 'Edemarcos', '2020-11-04', '600.00', '1', NULL, '2021-01-21 12:13:13');
        $this->add($provider,60, NULL, 'Tarifa Transferência', '', '2020-11-04', '5.00', '1', NULL, '2021-01-21 12:13:12');
        $this->add($provider,61, NULL, 'Tarifa boleto', 'ADAM & CIA LTDA', '2020-11-06', '2.99', '1', NULL, '2021-01-21 12:13:11');
        $this->add($provider,62, NULL, 'Tarifa boleto', 'WANDER SERVICOS FUNERARIOS EIRELI', '2020-11-06', '2.99', '1', NULL, '2021-01-21 12:13:10');
        $this->add($provider,63, NULL, 'Guia DAS', 'Simples Nacional', '2020-11-10', '158.11', '1', NULL, '2021-01-21 12:13:08');
        $this->add($provider,64, NULL, 'Tarifa boleto', 'FUNERARIA GUAPORENSE EIRELI', '2020-11-10', '2.99', '1', NULL, '2021-01-21 12:13:07');
        $this->add($provider,65, NULL, 'Tarifa boleto', 'Anderson Batista Moreira', '2020-11-10', '2.99', '1', NULL, '2021-01-21 12:13:06');
        $this->add($provider,66, NULL, 'Tarifa boleto', 'Funerária Zapelin', '2020-11-11', '2.99', '1', NULL, '2021-01-21 12:13:05');
        $this->add($provider,67, NULL, 'Hospedagem', 'Hostoo', '2020-11-12', '50.00', '1', NULL, '2021-01-21 12:12:46');
        $this->add($provider,68, NULL, 'Transferência', 'Banco linker', '2020-11-12', '50.00', '1', NULL, '2021-01-21 12:12:45');
        $this->add($provider,69, NULL, 'Tarifa Transferência', '', '2020-11-12', '5.00', '1', NULL, '2021-01-21 12:12:44');
        $this->add($provider,70, NULL, 'Tarifa boleto', 'Funeraria Fonseca', '2020-11-16', '2.99', '1', NULL, '2021-01-21 12:12:42');
        $this->add($provider,71, NULL, 'Tarifa boleto', 'SAGRADA FAMILIA ASSISTENCIA FUNERARIA EIRELI', '2020-11-17', '2.99', '1', NULL, '2021-01-21 12:12:41');
        $this->add($provider,72, NULL, 'Tarifa boleto', 'Grupo Fonseca', '2020-11-17', '2.99', '1', NULL, '2021-01-21 12:12:40');
        $this->add($provider,73, NULL, 'Tarifa boleto', 'PIRÂMIDE ADMINISTRAÇÃO E ASSESSORIA LTDA', '2020-11-17', '2.99', '1', NULL, '2021-01-21 12:12:38');
        $this->add($provider,74, NULL, 'Tarifa boleto', 'Angelus urugaiana', '2020-11-18', '2.99', '1', NULL, '2021-01-21 12:12:37');
        $this->add($provider,75, NULL, 'Tarifa boleto', 'Angelus Alegrete', '2020-11-18', '2.99', '1', NULL, '2021-01-21 12:12:36');
        $this->add($provider,76, NULL, 'Tarifa boleto', 'Angelus Livramento', '2020-11-18', '2.99', '1', NULL, '2021-01-21 12:12:35');
        $this->add($provider,77, NULL, 'Tarifa boleto', 'Angelus Santa Maria', '2020-11-18', '2.99', '1', NULL, '2021-01-21 12:12:31');
        $this->add($provider,78, NULL, 'Tarifa boleto', 'funeraria pratense', '2020-11-18', '2.99', '1', NULL, '2021-01-21 12:12:30');
        $this->add($provider,79, NULL, 'Tarifa boleto', 'SAO RAFAEL SERVICOS FUNERARIOS LTDA', '2020-11-20', '2.99', '1', NULL, '2021-01-21 12:12:28');
        $this->add($provider,80, NULL, 'Tarifa boleto', 'VENOLO SERVICOS FUNERARIOS LTDA', '2020-11-27', '2.99', '1', NULL, '2021-01-21 12:12:27');
        $this->add($provider,81, NULL, 'Transferência', 'Pagamento de adiantamento Dionatan', '2020-11-30', '572.00', '1', NULL, '2021-01-21 12:12:26');
        $this->add($provider,82, NULL, 'Transferência', 'Banco linker', '2020-11-30', '180.00', '1', NULL, '2021-01-21 12:12:25');
        $this->add($provider,83, NULL, 'Tarifa Transferência', 'Banco linker', '2020-11-30', '5.00', '1', NULL, '2021-01-21 12:12:22');
        $this->add($provider,84, NULL, 'Pagamento Contabilidade', 'Invoice', '2020-12-01', '312.49', '1', NULL, '2021-01-21 12:12:21');
        $this->add($provider,85, NULL, 'Pagamento Salário', 'Dionatan', '2020-12-02', '1.78', '1', NULL, '2021-01-21 12:12:20');
        $this->add($provider,86, NULL, 'Pagamento Salário', 'Edemarcos', '2020-12-02', '600.00', '1', NULL, '2021-01-21 12:12:19');
        $this->add($provider,87, NULL, 'Tarifa Transferência', 'Pagamento Edemarcos', '2020-12-02', '5.00', '1', NULL, '2021-01-21 12:12:14');
        $this->add($provider,88, NULL, 'Pagamento GPS', 'INSS Salário', '2020-12-02', '220.00', '1', NULL, '2021-01-21 12:12:06');
        $this->add($provider,89, NULL, 'Pagamento comissão leandro', '', '2020-12-15', '240.49', '0', NULL, '2021-01-21 12:12:04');
        $this->add($provider,90, NULL, 'Tarifa boleto', 'Funerária Canaã', '2020-12-04', '2.99', '1', NULL, '2021-01-21 12:12:01');
        $this->add($provider,91, NULL, 'Guia Simples', 'Tributos', '2020-12-08', '367.52', '1', NULL, '2021-01-21 12:12:00');
        $this->add($provider,92, NULL, 'Tarifa boleto', 'FUNERARIA GUAPORENSE EIRELI', '2020-12-08', '2.99', '1', NULL, '2021-01-21 12:11:59');
        $this->add($provider,93, NULL, 'Tarifa boleto', 'Funeraria Luto Santa Rita', '2020-12-08', '2.99', '1', NULL, '2021-01-21 12:11:58');
        $this->add($provider,94, NULL, 'Tarifa boleto', 'ADAM E CIA LTDA', '2020-12-08', '2.99', '1', NULL, '2021-01-21 12:11:56');
        $this->add($provider,95, NULL, 'Tarifa boleto', 'FUNERARIA LOPES E LOPES LTDA', '2020-12-08', '2.99', '1', NULL, '2021-01-21 12:11:55');
        $this->add($provider,96, NULL, 'Tarifa boleto', 'Funerária Garcia e Lopes Ltda ', '2020-12-16', '2.99', '1', NULL, '2021-01-21 12:11:53');
        $this->add($provider,97, NULL, 'Tarifa boleto', 'CENTRO OESTE SERVIÇOS FÚNEBRES LTDA ', '2020-12-16', '2.99', '1', NULL, '2021-01-21 12:11:47');
        $this->add($provider,98, NULL, 'Tarifa boleto', 'FUNERARIA LOPES E LOPES LTDA   ROSÁRIO', '2020-12-16', '2.99', '1', NULL, '2021-01-21 12:11:46');
        $this->add($provider,99, NULL, 'Tarifa boleto', 'Funerária Santamariense Ltda', '2020-12-16', '2.99', '1', NULL, '2021-01-21 12:11:44');
        $this->add($provider,100, NULL, 'Tarifa boleto', 'FUNERARIA LOPES E LOPES LTDA', '2020-12-16', '2.99', '1', NULL, '2021-01-21 12:11:43');
        $this->add($provider,101, NULL, 'Tarifa boleto', 'FUNERARIA GARCIA E LOPES LTDA', '2020-12-16', '2.99', '1', NULL, '2021-01-21 12:11:42');
        $this->add($provider,102, NULL, 'Tarifa boleto', 'PIRÂMIDE ADMINISTRAÇÃO E ASSESSORIA LTDA ', '2020-12-16', '2.99', '1', NULL, '2021-01-21 12:11:41');
        $this->add($provider,103, NULL, 'Tarifa boleto', 'Funeraria Pratense', '2020-12-17', '2.99', '1', NULL, '2021-01-21 12:11:39');
        $this->add($provider,104, NULL, 'Tarifa boleto', 'SAGRADA FAMILIA ASSISTENCIA FUNERARIA EIRELI', '2020-12-19', '2.99', '1', NULL, '2021-01-21 12:11:38');
        $this->add($provider,105, 0, 'Conta Telefone', 'Pagamento conta telefone Novembro e Dezembro Memoriam', '2020-12-29', '102.20', '1', NULL, '2021-02-08 21:03:08');
        $this->add($provider,106, NULL, 'Tarifa Transferência', 'Pagamento conta telefone Novembro e Dezembro Memoriam', '2020-12-29', '5.00', '1', NULL, '2021-01-21 12:11:33');
        $this->add($provider,110, 3, 'testando', 'sss', '2021-02-10 00:00:00', '35.45', '1', '2021-02-01 19:52:33', '2021-02-08 21:05:22');
    }

    protected function add($provider,$id, $provider_id, $description, $name, $due_at, $value, $status, $created_at, $updated_at)
    {

        Provider::query()->where('name', $name)->forceDelete();
        Expense::factory(1)->create([
            'provider_id' => $provider->id,
            'name' => $name,
            'ordering' => $id,
            'status' => ['draft', 'published'][$status]
        ])->each(function ($expence) use ($id, $provider_id, $description, $due_at, $value, $status, $created_at, $updated_at) {
            $expence->finance(1)->create([
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
