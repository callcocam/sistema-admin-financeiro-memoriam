<?php
/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace App\Http\Livewire\Plans;

use App\Models\Plan;
use SIGA\Form\FormComponent;
use Illuminate\Database\Eloquent\Builder;
use SIGA\Form\Fields\Text;
use SIGA\Form\Fields\Textarea;

class CreateComponent extends FormComponent
{

        protected $route = "plans";


        public function mount(Plan $plan)
        {
           $this->setFormProperties($plan);
        }

        /**
        * @return array
        */
        public function fields()
        {
            return [
                Text::make('Nome do plano','name'),
                Text::make('Interval'),
                Text::make('Repeats'),
                Textarea::make('Description'),
            ];
        }
}
