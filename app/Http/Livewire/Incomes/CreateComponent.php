<?php
/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace App\Http\Livewire\Incomes;

use App\Models\Client;
use App\Models\Income;
use SIGA\Form\Fields\Hidden;
use SIGA\Form\Fields\Radio;
use SIGA\Form\Fields\Select;
use SIGA\Form\Fields\Text;
use SIGA\Form\Fields\Textarea;
use SIGA\Form\FormComponent;

class CreateComponent extends FormComponent
{

    protected $route = "incomes";


    public function mount(Income $income)
    {
        $this->setFormProperties($income);

    }

    public function success()
    {
        if (parent::success()) {
            $this->model->finance()->create([
                'value' => form_w($this->form_data['value']),
                'due_at' => $this->form_data['due_at'],
                'status' => $this->form_data['status'],
                'description' => $this->form_data['description'],
            ]);
            return true;
        }
        return false;
    }

    /**
     * @return array
     */
    public function fields()
    {
        return [
            Hidden::make('ordering')->default(Income::query()->max('ordering')+1),
            Select::make('client_id')->target(Client::query(), $this->isSingleSelectSearch('client_id')),
            Text::make('Value')->attribute('autocomplete', 'off'),
            Text::make('due_at')->type('date'),
            Textarea::make('Description'),
            Radio::make('status')->options(['draft', 'published'])->default('published')
        ];
    }
}
