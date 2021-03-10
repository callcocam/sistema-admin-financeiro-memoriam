<?php
/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace App\Http\Livewire\Expenses;

use App\Models\Expense;
use App\Models\Provider;
use SIGA\Form\Fields\Hidden;
use SIGA\Form\Fields\Radio;
use SIGA\Form\Fields\Select;
use SIGA\Form\Fields\Text;
use SIGA\Form\Fields\Textarea;
use SIGA\Form\FormComponent;

class CreateComponent extends FormComponent
{

    protected $route = "expenses";


    public function mount(Expense $expense)
    {
        $this->setFormProperties($expense);
    }

    /**
     * @return array
     */
    public function fields()
    {
        return [
            Hidden::make('ordering')->default(Expense::query()->max('ordering')+1),
            Select::make('provider_id')->target(Provider::query()),
            Text::make('Value')->attribute('autocomplete', 'off'),
            Text::make('due_at')->type('date'),
            Textarea::make('Description'),
            Radio::make('status')->options(['published', 'draft'])->default('published')
        ];
    }


    public function success()
    {
        if (parent::success()) {
            $this->model->finance()->create([
                'value' => form_w($this->form_data['value']),
                'due_at' => $this->form_data['due_at'],
                'description' => $this->form_data['description'],
                'status' => $this->form_data['status'],
            ]);
            return true;
        }
        return false;
    }
}
