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

    protected $listeners = [
        "close_modal"
    ];
    /**
     * Sorting.
     */

    /**
     * The initial field to be sorting by.
     *
     * @var string
     */
    public $field = 'ordering';

    /**
     * The initial direction to sort.
     *
     * @var bool
     */
    public $direction = 'desc';

    public function query(): Builder
    {
      return Income::query();
    }

    public function columns(): array
    {
       return [
           Column::make('name')->format(function ($model){
               return $model->client ? $model->client->name:'--';
           }),
           Column::make('value')->format(function ($model){
               return $model->finance? form_read($model->finance->value): '0,0';
           }),
           Column::make('due_at')->format(function ($model){
               return $model->finance? date_create($model->finance->due_at)->format('d/m/Y'): '---';
           }),
           Column::make('status')->view('status'),
           //
           Column::make('action')->queryString(request()->query())->actions($this->route(), null, 'actions-modal')
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

    public function open_editor($id){
        $this->data = $this->query()->find($id);
    }
    public function render_modal(){
        return 'incomes.edit-component';
    }

    public function render_model(){
        return [
            'income' =>$this->data
        ];
    }

    public function close_modal()
    {
        $this->data = null;
    }
}
