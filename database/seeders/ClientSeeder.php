<?php

namespace Database\Seeders;

use App\Models\Client;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Client::query()->forceDelete();

        $this->add('1', 'cpf', 'Sistema Memoriam', 'sistema-memoriam', NULL, 'draft', NULL, NULL, '2021-02-24 18:07:32', '2021-02-24 18:07:32', NULL);
        $this->add('11', 'cpf', 'FUNERARIA UNIÃO LTDA', 'funeraria-uniao-ltda', NULL, 'draft', NULL, NULL, '2021-02-24 18:07:32', '2021-02-24 18:07:32', NULL);
        $this->add('112', 'cpf', 'Funerária 3 Poderes', 'funeraria-3-poderes', NULL, 'draft', NULL, NULL, '2021-02-24 18:07:33', '2021-02-24 18:07:33', NULL);
        $this->add('12', 'cpf', 'funeraria santa Isabel', 'funeraria-santa-isabel', NULL, 'draft', NULL, NULL, '2021-02-24 18:07:32', '2021-02-24 18:07:32', NULL);
        $this->add('129', 'cpf', 'Grupo Angelus - São Borja', 'grupo-angelus-sao-borja', NULL, 'draft', NULL, NULL, '2021-02-24 18:07:33', '2021-02-24 18:07:33', NULL);
        $this->add('13', 'cpf', 'FUNERARIA ZAPELINI', 'funeraria-zapelini', NULL, 'draft', NULL, NULL, '2021-02-24 18:07:32', '2021-02-24 18:07:32', NULL);
        $this->add('130', 'cpf', 'Adam e Cia Ltda', 'adam-e-cia-ltda', NULL, 'draft', NULL, NULL, '2021-02-24 18:07:33', '2021-02-24 18:07:33', NULL);
        $this->add('132', 'cpf', 'grupo gabetta', 'grupo-gabetta', NULL, 'draft', NULL, NULL, '2021-02-24 18:07:33', '2021-02-24 18:07:33', NULL);
        $this->add('133', 'cpf', 'Grupo Mariano', 'grupo-mariano', NULL, 'draft', NULL, NULL, '2021-02-24 18:07:33', '2021-02-24 18:07:33', NULL);
        $this->add('134', 'cpf', 'SAFPE BRASIL', 'safpe-brasil', NULL, 'draft', NULL, NULL, '2021-02-24 18:07:33', '2021-02-24 18:07:33', NULL);
        $this->add('135', 'cpf', 'Serviço Funerario de Pinhalzinho s.p', 'servico-funerario-de-pinhalzinho-sp', NULL, 'draft', NULL, NULL, '2021-02-24 18:07:33', '2021-02-24 18:07:33', NULL);
        $this->add('136', 'cpf', 'Funerária Central de Barueri', 'funeraria-central-de-barueri', NULL, 'draft', NULL, NULL, '2021-02-24 18:07:33', '2021-02-24 18:07:33', NULL);
        $this->add('137', 'cpf', 'Grupo Zelo', 'grupo-zelo', NULL, 'draft', NULL, NULL, '2021-02-24 18:07:33', '2021-02-24 18:07:33', NULL);
        $this->add('138', 'cpf', 'Funerária Halmenschlager', 'funeraria-halmenschlager', NULL, 'draft', NULL, NULL, '2021-02-24 18:07:33', '2021-02-24 18:07:33', NULL);
        $this->add('139', 'cpf', 'Santo Antônio Funerária e Assistencial', 'santo-antonio-funeraria-e-assistencial', NULL, 'draft', NULL, NULL, '2021-02-24 18:07:33', '2021-02-24 18:07:33', NULL);
        $this->add('141', 'cpf', 'Funerária Santa Cruz', 'funeraria-santa-cruz', NULL, 'draft', NULL, NULL, '2021-02-24 18:07:33', '2021-02-24 18:07:33', NULL);
        $this->add('142', 'cpf', 'Funerária Santa clara', 'funeraria-santa-clara', NULL, 'draft', NULL, NULL, '2021-02-24 18:07:33', '2021-02-24 18:07:33', NULL);
        $this->add('144', 'cpf', 'Funerária santa helena', 'funeraria-santa-helena', NULL, 'draft', NULL, NULL, '2021-02-24 18:07:33', '2021-02-24 18:07:33', NULL);
        $this->add('145', 'cpf', 'Funerarias santa catarina.', 'funerarias-santa-catarina', NULL, 'draft', NULL, NULL, '2021-02-24 18:07:33', '2021-02-24 18:07:33', NULL);
        $this->add('146', 'cpf', 'Funerária Memoriam', 'funeraria-memoriam', NULL, 'draft', NULL, NULL, '2021-02-24 18:07:33', '2021-02-24 18:07:33', NULL);
        $this->add('149', 'cpf', 'Angelus – Cacequi', 'angelus-cacequi', NULL, 'draft', NULL, NULL, '2021-02-24 18:07:33', '2021-02-24 18:07:33', NULL);
        $this->add('15', 'cpf', 'Serviço Funerário Unissel', 'servico-funerario-unissel', NULL, 'draft', NULL, NULL, '2021-02-24 18:07:32', '2021-02-24 18:07:32', NULL);
        $this->add('150', 'cpf', 'CREMATÓRIO DOM JOSÉ', 'crematorio-dom-jose', NULL, 'draft', NULL, NULL, '2021-02-24 18:07:33', '2021-02-24 18:07:33', NULL);
        $this->add('151', 'cpf', 'Grupo Angelus – Itaqui', 'grupo-angelus-itaqui', NULL, 'draft', NULL, NULL, '2021-02-24 18:07:33', '2021-02-24 18:07:33', NULL);
        $this->add('158', 'cpf', 'Ana televendas', 'ana-televendas', NULL, 'draft', NULL, NULL, '2021-02-24 18:07:33', '2021-02-24 18:07:33', NULL);
        $this->add('159', 'cpf', 'Nadine Serpa', 'nadine-serpa', NULL, 'draft', NULL, NULL, '2021-02-24 18:07:33', '2021-02-24 18:07:33', NULL);
        $this->add('16', 'cpf', 'Funeraria Berti Ltda', 'funeraria-berti-ltda', NULL, 'draft', NULL, NULL, '2021-02-24 18:07:32', '2021-02-24 18:07:32', NULL);
        $this->add('160', 'cpf', 'Grupo Angelus - Cruz Alta', 'grupo-angelus-cruz-alta', NULL, 'draft', NULL, NULL, '2021-02-24 18:07:33', '2021-02-24 18:07:33', NULL);
        $this->add('162', 'cpf', 'Funeraria Silveira', 'funeraria-silveira', NULL, 'draft', NULL, NULL, '2021-02-24 18:07:33', '2021-02-24 18:07:33', NULL);
        $this->add('164', 'cpf', 'Associação Jardim da Saudade', 'associacao-jardim-da-saudade', NULL, 'draft', NULL, NULL, '2021-02-24 18:07:33', '2021-02-24 18:07:33', NULL);
        $this->add('166', 'cpf', 'Celebram', 'celebram', NULL, 'draft', NULL, NULL, '2021-02-24 18:07:33', '2021-02-24 18:07:33', NULL);
        $this->add('167', 'cpf', 'MENTAL Somática', 'mental-somatica', NULL, 'draft', NULL, NULL, '2021-02-24 18:07:33', '2021-02-24 18:07:33', NULL);
        $this->add('17', 'cpf', 'Grupo Sinsef', 'grupo-sinsef', NULL, 'draft', NULL, NULL, '2021-02-24 18:07:32', '2021-02-24 18:07:32', NULL);
        $this->add('18', 'cpf', 'FUNERÁRIA CRISTO RESSUSCITADO', 'funeraria-cristo-ressuscitado', NULL, 'draft', NULL, NULL, '2021-02-24 18:07:32', '2021-02-24 18:07:32', NULL);
        $this->add('19', 'cpf', 'Funerária São Judas Tadeu', 'funeraria-sao-judas-tadeu', NULL, 'draft', NULL, NULL, '2021-02-24 18:07:32', '2021-02-24 18:07:32', NULL);
        $this->add('20', 'cpf', 'Dione Teresinha Pertille Andreola', 'dione-teresinha-pertille-andreola', NULL, 'draft', NULL, NULL, '2021-02-24 18:07:32', '2021-02-24 18:07:32', NULL);
        $this->add('21', 'cpf', 'Funeraria Mayer', 'funeraria-mayer', NULL, 'draft', NULL, NULL, '2021-02-24 18:07:32', '2021-02-24 18:07:32', NULL);
        $this->add('23', 'cpf', 'FUNERÁRIA RECH', 'funeraria-rech', NULL, 'draft', NULL, NULL, '2021-02-24 18:07:32', '2021-02-24 18:07:32', NULL);
        $this->add('24', 'cpf', 'Miguel Luiz Santana-ME   ( Pax Peabiru)', 'miguel-luiz-santana-me-pax-peabiru', NULL, 'draft', NULL, NULL, '2021-02-24 18:07:32', '2021-02-24 18:07:32', NULL);
        $this->add('25', 'cpf', 'Grupo  Fonseca', 'grupo-fonseca', NULL, 'draft', NULL, NULL, '2021-02-24 18:07:32', '2021-02-24 18:07:32', NULL);
        $this->add('26', 'cpf', 'SINSEF SAO CARLOS LTDA ME', 'sinsef-sao-carlos-ltda-me', NULL, 'draft', NULL, NULL, '2021-02-24 18:07:32', '2021-02-24 18:07:32', NULL);
        $this->add('28', 'cpf', 'Funerária Abelardense Ltda ME (Funerária Bom Pastor)', 'funeraria-abelardense-ltda-me-funeraria-bom-pastor', NULL, 'draft', NULL, NULL, '2021-02-24 18:07:32', '2021-02-24 18:07:32', NULL);
        $this->add('29', 'cpf', 'Funerária São Benedito', 'funeraria-sao-benedito', NULL, 'draft', NULL, NULL, '2021-02-24 18:07:32', '2021-02-24 18:07:32', NULL);
        $this->add('3', 'cpf', 'Organização Campo das Oliveiras', 'organizacao-campo-das-oliveiras', NULL, 'draft', NULL, NULL, '2021-02-24 18:07:32', '2021-02-24 18:07:32', NULL);
        $this->add('30', 'cpf', 'Funeraria Pratense', 'funeraria-pratense', NULL, 'draft', NULL, NULL, '2021-02-24 18:07:32', '2021-02-24 18:07:32', NULL);
        $this->add('31', 'cpf', 'Funerária Jardim', 'funeraria-jardim', NULL, 'draft', NULL, NULL, '2021-02-24 18:07:32', '2021-02-24 18:07:32', NULL);
        $this->add('32', 'cpf', 'Grupo Uniplan', 'grupo-uniplan', NULL, 'draft', NULL, NULL, '2021-02-24 18:07:32', '2021-02-24 18:07:32', NULL);
        $this->add('34', 'cpf', 'FUNERARIA TRÊS DE MAIO LTDA', 'funeraria-tres-de-maio-ltda', NULL, 'draft', NULL, NULL, '2021-02-24 18:07:32', '2021-02-24 18:07:32', NULL);
        $this->add('35', 'cpf', 'Funeraria Santa Catarina Ltda', 'funeraria-santa-catarina-ltda', NULL, 'draft', NULL, NULL, '2021-02-24 18:07:32', '2021-02-24 18:07:32', NULL);
        $this->add('36', 'cpf', 'Casa Funerária Santa Luzia', 'casa-funeraria-santa-luzia', NULL, 'draft', NULL, NULL, '2021-02-24 18:07:32', '2021-02-24 18:07:32', NULL);
        $this->add('37', 'cpf', 'Grupo Angelus - Uruguaiana', 'grupo-angelus-uruguaiana', NULL, 'draft', NULL, NULL, '2021-02-24 18:07:32', '2021-02-24 18:07:32', NULL);
        $this->add('38', 'cpf', 'Plano de assistência à funeral Renascer', 'plano-de-assistencia-a-funeral-renascer', NULL, 'draft', NULL, NULL, '2021-02-24 18:07:32', '2021-02-24 18:07:32', NULL);
        $this->add('39', 'cpf', 'Funerária São Pedro', 'funeraria-sao-pedro', NULL, 'draft', NULL, NULL, '2021-02-24 18:07:32', '2021-02-24 18:07:32', NULL);
        $this->add('4', 'cpf', 'Monte Rios Cerimonial de Luto', 'monte-rios-cerimonial-de-luto', NULL, 'draft', NULL, NULL, '2021-02-24 18:07:32', '2021-02-24 18:07:32', NULL);
        $this->add('40', 'cpf', 'Funerária Nossa Senhora Aparecida', 'funeraria-nossa-senhora-aparecida', NULL, 'draft', NULL, NULL, '2021-02-24 18:07:32', '2021-02-24 18:07:32', NULL);
        $this->add('41', 'cpf', 'Funerária Orsolu', 'funeraria-orsolu', NULL, 'draft', NULL, NULL, '2021-02-24 18:07:32', '2021-02-24 18:07:32', NULL);
        $this->add('42', 'cpf', 'FUNERARIA DE ITABIRITO', 'funeraria-de-itabirito', NULL, 'draft', NULL, NULL, '2021-02-24 18:07:32', '2021-02-24 18:07:32', NULL);
        $this->add('43', 'cpf', 'funeraria sagrada familia', 'funeraria-sagrada-familia', NULL, 'draft', NULL, NULL, '2021-02-24 18:07:32', '2021-02-24 18:07:32', NULL);
        $this->add('44', 'cpf', 'Funerária PAX Bom Jesus', 'funeraria-pax-bom-jesus', NULL, 'draft', NULL, NULL, '2021-02-24 18:07:32', '2021-02-24 18:07:32', NULL);
        $this->add('45', 'cpf', 'Memorial House Homenagens Póstumas', 'memorial-house-homenagens-postumas', NULL, 'draft', NULL, NULL, '2021-02-24 18:07:32', '2021-02-24 18:07:32', NULL);
        $this->add('46', 'cpf', 'Memorial Nelson Karling Funerária', 'memorial-nelson-karling-funeraria', NULL, 'draft', NULL, NULL, '2021-02-24 18:07:32', '2021-02-24 18:07:32', NULL);
        $this->add('48', 'cpf', 'Funerária Marauense', 'funeraria-marauense', NULL, 'draft', NULL, NULL, '2021-02-24 18:07:32', '2021-02-24 18:07:32', NULL);
        $this->add('49', 'cpf', 'Funeraria Oliveria', 'funeraria-oliveria', NULL, 'draft', NULL, NULL, '2021-02-24 18:07:32', '2021-02-24 18:07:32', NULL);
        $this->add('50', 'cpf', 'Funerária Canaã', 'funeraria-canaa', NULL, 'draft', NULL, NULL, '2021-02-24 18:07:32', '2021-02-24 18:07:32', NULL);
        $this->add('51', 'cpf', 'FUNERÁRIA ÂNGELO CUNHA LTDA', 'funeraria-angelo-cunha-ltda', NULL, 'draft', NULL, NULL, '2021-02-24 18:07:32', '2021-02-24 18:07:32', NULL);
        $this->add('52', 'cpf', 'Funerária São Paulo', 'funeraria-sao-paulo', NULL, 'draft', NULL, NULL, '2021-02-24 18:07:32', '2021-02-24 18:07:32', NULL);
        $this->add('53', 'cpf', 'Sociedade Mutuária Frutalense', 'sociedade-mutuaria-frutalense', NULL, 'draft', NULL, NULL, '2021-02-24 18:07:32', '2021-02-24 18:07:32', NULL);
        $this->add('54', 'cpf', 'Funerária Lohmann', 'funeraria-lohmann', NULL, 'draft', NULL, NULL, '2021-02-24 18:07:32', '2021-02-24 18:07:32', NULL);
        $this->add('55', 'cpf', 'Funerária Ressureição', 'funeraria-ressureicao', NULL, 'draft', NULL, NULL, '2021-02-24 18:07:32', '2021-02-24 18:07:32', NULL);
        $this->add('56', 'cpf', 'Conforplan', 'conforplan', NULL, 'draft', NULL, NULL, '2021-02-24 18:07:32', '2021-02-24 18:07:32', NULL);
        $this->add('57', 'cpf', 'FUNERARIA CCR', 'funeraria-ccr', NULL, 'draft', NULL, NULL, '2021-02-24 18:07:32', '2021-02-24 18:07:32', NULL);
        $this->add('58', 'cpf', 'Funerária Caridade', 'funeraria-caridade', NULL, 'draft', NULL, NULL, '2021-02-24 18:07:32', '2021-02-24 18:07:32', NULL);
        $this->add('59', 'cpf', 'Santa Rita Serviços Funerários', 'santa-rita-servicos-funerarios', NULL, 'draft', NULL, NULL, '2021-02-24 18:07:32', '2021-02-24 18:07:32', NULL);
        $this->add('60', 'cpf', 'Funerária São José', 'funeraria-sao-jose', NULL, 'draft', NULL, NULL, '2021-02-24 18:07:32', '2021-02-24 18:07:32', NULL);
        $this->add('61', 'cpf', 'Funerária Golemba', 'funeraria-golemba', NULL, 'draft', NULL, NULL, '2021-02-24 18:07:32', '2021-02-24 18:07:32', NULL);
        $this->add('62', 'cpf', 'Funerária Zillmer', 'funeraria-zillmer', NULL, 'draft', NULL, NULL, '2021-02-24 18:07:32', '2021-02-24 18:07:32', NULL);
        $this->add('63', 'cpf', 'VIECILLI SERVIÇOS FUNERÁRIOS', 'viecilli-servicos-funerarios', NULL, 'draft', NULL, NULL, '2021-02-24 18:07:32', '2021-02-24 18:07:32', NULL);
        $this->add('64', 'cpf', 'Funerária e Memorial Luz e Vida', 'funeraria-e-memorial-luz-e-vida', NULL, 'draft', NULL, NULL, '2021-02-24 18:07:32', '2021-02-24 18:07:32', NULL);
        $this->add('66', 'cpf', 'Funerária Vera Bastian', 'funeraria-vera-bastian', NULL, 'draft', NULL, NULL, '2021-02-24 18:07:32', '2021-02-24 18:07:32', NULL);
        $this->add('67', 'cpf', 'MEMORIAL PAX ERVÁLIA', 'memorial-pax-ervalia', NULL, 'draft', NULL, NULL, '2021-02-24 18:07:32', '2021-02-24 18:07:32', NULL);
        $this->add('68', 'cpf', 'Viana Viana Eventos Fúnebres', 'viana-viana-eventos-funebres', NULL, 'draft', NULL, NULL, '2021-02-24 18:07:32', '2021-02-24 18:07:32', NULL);
        $this->add('69', 'cpf', 'FUNERARIA ETERNIZA', 'funeraria-eterniza', NULL, 'draft', NULL, NULL, '2021-02-24 18:07:33', '2021-02-24 18:07:33', NULL);
        $this->add('70', 'cpf', 'São Pedro Funerária e Capelas', 'sao-pedro-funeraria-e-capelas', NULL, 'draft', NULL, NULL, '2021-02-24 18:07:33', '2021-02-24 18:07:33', NULL);
        $this->add('71', 'cpf', 'Funerária São Pelegrino', 'funeraria-sao-pelegrino', NULL, 'draft', NULL, NULL, '2021-02-24 18:07:33', '2021-02-24 18:07:33', NULL);
        $this->add('72', 'cpf', 'PLANO HARTMANN', 'plano-hartmann', NULL, 'draft', NULL, NULL, '2021-02-24 18:07:33', '2021-02-24 18:07:33', NULL);
        $this->add('73', 'cpf', 'FUNERARIA PHOENIX', 'funeraria-phoenix', NULL, 'draft', NULL, NULL, '2021-02-24 18:07:33', '2021-02-24 18:07:33', NULL);
        $this->add('74', 'cpf', 'Funerária Conselvan', 'funeraria-conselvan', NULL, 'draft', NULL, NULL, '2021-02-24 18:07:33', '2021-02-24 18:07:33', NULL);
        $this->add('75', 'cpf', 'Funerária Guaporense', 'funeraria-guaporense', NULL, 'draft', NULL, NULL, '2021-02-24 18:07:33', '2021-02-24 18:07:33', NULL);
        $this->add('77', 'cpf', 'Funerária Bom Samaritano', 'funeraria-bom-samaritano', NULL, 'draft', NULL, NULL, '2021-02-24 18:07:33', '2021-02-24 18:07:33', NULL);
        $this->add('78', 'cpf', 'Pirâmide Tupaciguara', 'piramide-tupaciguara', NULL, 'draft', NULL, NULL, '2021-02-24 18:07:33', '2021-02-24 18:07:33', NULL);
        $this->add('79', 'cpf', 'Piramide Monte Alegre', 'piramide-monte-alegre', NULL, 'draft', NULL, NULL, '2021-02-24 18:07:33', '2021-02-24 18:07:33', NULL);
        $this->add('80', 'cpf', 'FUNERÁRIA PIRÂMIDE ARAGUARI', 'funeraria-piramide-araguari', NULL, 'draft', NULL, NULL, '2021-02-24 18:07:33', '2021-02-24 18:07:33', NULL);
        $this->add('82', 'cpf', 'Funerárias Wenceslau Braz Ltda Me', 'funerarias-wenceslau-braz-ltda-me', NULL, 'draft', NULL, NULL, '2021-02-24 18:07:33', '2021-02-24 18:07:33', NULL);
        $this->add('83', 'cpf', 'Grupo Angelus - Rosário do Sul', 'grupo-angelus-rosario-do-sul', NULL, 'draft', NULL, NULL, '2021-02-24 18:07:33', '2021-02-24 18:07:33', NULL);
        $this->add('84', 'cpf', 'Grupo Angelus - Alegrete', 'grupo-angelus-alegrete', NULL, 'draft', NULL, NULL, '2021-02-24 18:07:33', '2021-02-24 18:07:33', NULL);
        $this->add('85', 'cpf', 'Grupo Angelus - Santa Maria', 'grupo-angelus-santa-maria', NULL, 'draft', NULL, NULL, '2021-02-24 18:07:33', '2021-02-24 18:07:33', NULL);
        $this->add('87', 'cpf', 'Funerária Monte Alto', 'funeraria-monte-alto', NULL, 'draft', NULL, NULL, '2021-02-24 18:07:33', '2021-02-24 18:07:33', NULL);
        $this->add('88', 'cpf', 'Grupo Angelus - Santana do Livramento', 'grupo-angelus-santana-do-livramento', NULL, 'draft', NULL, NULL, '2021-02-24 18:07:33', '2021-02-24 18:07:33', NULL);
        $this->add('89', 'cpf', 'Grupo Stein', 'grupo-stein', NULL, 'draft', NULL, NULL, '2021-02-24 18:07:33', '2021-02-24 18:07:33', NULL);
        $this->add('90', 'cpf', 'FUNERÁRIA LOVATO LTDA', 'funeraria-lovato-ltda', NULL, 'draft', NULL, NULL, '2021-02-24 18:07:33', '2021-02-24 18:07:33', NULL);
        $this->add('91', 'cpf', 'Funerária São Rafael', 'funeraria-sao-rafael', NULL, 'draft', NULL, NULL, '2021-02-24 18:07:33', '2021-02-24 18:07:33', NULL);
        $this->add('92', 'cpf', 'Funerária Cocal do Sul', 'funeraria-cocal-do-sul', NULL, 'draft', NULL, NULL, '2021-02-24 18:07:33', '2021-02-24 18:07:33', NULL);
    }

    protected function add($id, $type, $name, $slug, $description, $status, $created_by, $updated_by, $created_at, $updated_at)
    {

        $client = Client::query()->where('slug', $slug)->first();

        if (!$client) {
            Client::factory(1)->create([
                'id' => $id,
                'name' => $name,
                'slug' => $slug,
                'type' => $type,
                'description' => $description,
                'status' => $status,
                'created_by' => $created_by,
                'updated_by' => $updated_by,
                'created_at' => $created_at,
                'updated_at' => $updated_at
            ]);
        }
    }
}
