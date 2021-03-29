<?php
/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace App\Http\Livewire\Clients;

use App\Models\Client;
use SIGA\Table\TableComponent;
use Illuminate\Database\Eloquent\Builder;
use SIGA\Table\Views\Column;

class ListComponent extends TableComponent
{

    public function query(): Builder
    {
      return Client::query();
    }

    public function columns(): array
    {
       return [
           Column::make('name')->sortable()->searchable(),
           Column::make('action')->actions($this->route())
       ];
    }

    public function layout(): string
    {
        return 'layouts.app';
    }

    public function route()
    {
        return "clients";
    }


    public function createLink()
    {
        return view(table_includes($this->create_view_button()))->with('route', 'admin.load-clients.api');

    }
}
