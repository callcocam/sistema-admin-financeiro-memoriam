<?php
/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace App\Http\Livewire\Plans;

use App\Models\Plan;
use SIGA\Table\TableComponent;
use Illuminate\Database\Eloquent\Builder;
use SIGA\Table\Views\Column;

class ListComponent extends TableComponent
{

    public function query(): Builder
    {
      return Plan::query();
    }

    public function columns(): array
    {
       return [
           Column::make('name')->sortable()->searchable(),
           Column::make('interval')->sortable(),
           Column::make('Assinaturas')->format(function ($model){
               return $model->signature ? $model->signature->count():0;
           }),
           Column::make('action')->actions($this->route())
       ];
    }

    public function layout(): string
    {
        return 'layouts.app';
    }

    public function route()
    {
        return "plans";
    }


    public function isShowLabel(){
        return "Assinaturas";
    }
}
