<?php
/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace App\Http\Livewire\Incomes;

use App\Models\Client;
use App\Models\Income;
use SIGA\Form\Fields\Radio;
use SIGA\Form\Fields\Select;
use SIGA\Form\Fields\Text;
use SIGA\Form\Fields\Textarea;
use SIGA\Form\FormComponent;

class EditComponent extends FormComponent
{

    protected $route = "incomes";

    public function mount(Income $income)
    {
        $this->setFormProperties($income);

        if ($income->finance) {
            $this->form_data['value'] = form_read($income->finance->value);
            $this->form_data['due_at'] = $income->finance->due_at;
            $this->form_data['status'] = $income->finance->status;
            $this->form_data['description'] = $income->finance->description;
        }
    }

    /**
     * @return array
     */
    public function fields()
    {
        return [
            Select::make('client_id')->target(Client::query()->orderBy('name'), $this->isSingleSelectSearch('client_id')),
            Text::make('Cliente', 'name')->attribute('readonly', true),
            Text::make('Valor', 'value'),
            Text::make('Data de Vencimento', 'due_at')->type('date'),
            Textarea::make('Description'),
            Radio::make('status')->options(['published', 'draft'])
        ];
    }

    public function success()
    {
        if (parent::success()) {
            $finance = $this->model->finance;
            if ($finance) {
                $finance->update([
                    'value' => form_w($this->form_data['value']),
                    'status' => $this->form_data['status'],
                    'due_at' => $this->form_data['due_at']
                ]);
            }
        }
    }

    public function title()
    {
        if ($this->model->exists)
            return sprintf('Editar receita: %s', $this->model->client->name);

        return parent::title();
    }
}
