<?php
/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace App\Http\Livewire\Companies;

use App\Models\Company;
use SIGA\Table\TableComponent;
use Illuminate\Database\Eloquent\Builder;
use SIGA\Table\Views\Column;

class ListComponent extends TableComponent
{

    public function query(): Builder
    {
      return Company::query();
    }

    public function columns(): array
    {
       return [
           Column::make('id')
       ];
    }

    public function layout(): string
    {
        return 'admin::layouts.app';
    }

    public function route()
    {
        return "companies";
    }
}
