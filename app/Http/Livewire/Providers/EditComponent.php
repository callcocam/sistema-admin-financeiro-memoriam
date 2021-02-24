<?php
/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace App\Http\Livewire\Providers;

use App\Models\Provider;
use SIGA\Form\Fields\Text;
use SIGA\Form\Fields\Textarea;
use SIGA\Form\FormComponent;

class EditComponent extends FormComponent
{

        protected $route = "providers";

        public function mount(Provider $provider)
        {
           $this->setFormProperties($provider);
        }

        /**
        * @return array
        */
        public function fields()
        {
            return [
                Text::make('Name'),
                Text::make('Email'),
                Text::make('Phone'),
                Textarea::make('Description'),
            ];
        }
}
