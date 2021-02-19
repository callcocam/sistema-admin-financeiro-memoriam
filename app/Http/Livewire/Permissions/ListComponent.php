<?php
/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace App\Http\Livewire\Permissions;

use App\Models\Permission;
use SIGA\Table\TableComponent;
use Illuminate\Database\Eloquent\Builder;
use SIGA\Table\Views\Column;

class ListComponent extends TableComponent
{

    public function query(): Builder
    {
        return Permission::query();
    }

    public function columns(): array
    {
       return [
        Column::make('name')->sortable()->searchable(),
        Column::make('action')->actions('users')
       ];
    }

    public function layout(): string
    {
        return 'layouts.app';
    }

    public function route()
    {
        return "permissions";
    }
}
