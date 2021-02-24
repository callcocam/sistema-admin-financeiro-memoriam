<?php
/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace App\Http\Livewire\Providers;

use App\Models\Provider;
use SIGA\Table\TableComponent;
use Illuminate\Database\Eloquent\Builder;
use SIGA\Table\Views\Column;

class ListComponent extends TableComponent
{

    public function query(): Builder
    {
      return Provider::query();
    }

    public function columns(): array
    {
       return [
           Column::make('Name')->sortable()->searchable(),
           Column::make('Email')->sortable()->searchable(),
           Column::make('action')->actions($this->route())
       ];
    }

    public function layout(): string
    {
        return 'layouts.app';
    }

    public function route()
    {
        return "providers";
    }
}
