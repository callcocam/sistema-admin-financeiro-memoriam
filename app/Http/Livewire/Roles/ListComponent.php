<?php
/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace App\Http\Livewire\Roles;

use SIGA\Table\TableComponent;
use App\Models\Role;
use Illuminate\Database\Eloquent\Builder;
use SIGA\Table\Views\Column;

class ListComponent extends TableComponent
{
    /**
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(): Builder{
        return Role::query();
    }

      /**
     * @return array
     */
    public function columns(): array{
        return [
            Column::make('name')->sortable()->searchable(),
            Column::make('action')->actions('users')
 
        ];;
    }

    /**
     * @return array
     */
    public function layout(): string{
        return 'layouts.app';
    }

    
    public function route()
    {
        return 'roles';
    }
}
