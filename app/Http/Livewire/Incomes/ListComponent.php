<?php
/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace App\Http\Livewire\Incomes;

use App\Models\Income;
use SIGA\Table\TableComponent;
use Illuminate\Database\Eloquent\Builder;
use SIGA\Table\Views\Column;

class ListComponent extends TableComponent
{

    public function query(): Builder
    {
      return Income::query();
    }

    public function columns(): array
    {
       return [
           Column::make('name')->format(function ($model){
               return $model->client->name;
           }),
           Column::make('value')->format(function ($model){
               return $model->finance? form_read($model->finance->value): '0,0';
           }),
           Column::make('status')->view('status'),
           //
           Column::make('action')->actions($this->route())
       ];
    }

    public function layout(): string
    {
        return 'layouts.app';
    }

    public function route()
    {
        return "incomes";
    }
}
