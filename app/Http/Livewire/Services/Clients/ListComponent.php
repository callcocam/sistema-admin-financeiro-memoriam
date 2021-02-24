<?php
/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace App\Http\Livewire\Services\Clients;

use App\Services\ClientService;
use SIGA\Table\TableComponent;
use SIGA\Table\Views\Column;

class ListComponent extends TableComponent
{


   protected $client;
    /**
     * @param ClientService $client
     */
    public function mount(ClientService $client){

      $this->client = $client;

    }

    public function columns(): array
    {
       return [
           Column::make('name')
       ];
    }

    public function layout(): string
    {
        return 'layouts.app';
    }

    public function query()
    {
        // TODO: Implement query() method.
    }

    public function models()
    {
        return $this->client;
    }
}
