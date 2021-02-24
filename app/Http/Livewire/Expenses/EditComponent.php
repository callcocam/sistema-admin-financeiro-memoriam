<?php
/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace App\Http\Livewire\Expenses;

use App\Models\Expense;
use SIGA\Form\Fields\Radio;
use SIGA\Form\Fields\Select;
use SIGA\Form\Fields\Text;
use SIGA\Form\Fields\Textarea;
use SIGA\Form\FormComponent;

class EditComponent extends FormComponent
{

        protected $route = "expenses";

        public function mount(Expense $expense)
        {
           $this->setFormProperties($expense);

            if ($expense->finance){
                $this->form_data['value'] = form_read($expense->finance->value);
                $this->form_data['due_at'] = $expense->finance->due_at;
                $this->form_data['status'] = $expense->finance->status;
                $this->form_data['description'] = $expense->finance->description;
            }
        }

        /**
        * @return array
        */
        public function fields()
        {
            return [
                Text::make('Fornecedor','name')->attribute('readonly',true)->default($this->model->provider->name),
                Text::make('Valor','value'),
                Text::make('Data de Vencimento','due_at')->type('date'),
                Textarea::make('Description'),
                Radio::make('status')->options(['published','draft'])
            ];
        }

    public function success()
    {
        if (parent::success()){
            $finance = $this->model->finance;
            if($finance){
                $finance->update([
                    'value'=>form_w($this->form_data['value']),
                    'due_at'=>$this->form_data['due_at'],
                    'status'=>$this->form_data['status'],
                ]);
            }
        }
    }

    public function title()
    {
        if($this->model->exists)
            return sprintf('Editar Despesa de: %s', $this->model->provider->name);

        return parent::title();
    }
}
