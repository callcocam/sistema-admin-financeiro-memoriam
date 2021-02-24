<?php
/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace App\Http\Livewire\Clients;

use App\Models\Client;
use SIGA\Form\FormComponent;

class CreateComponent extends FormComponent
{

        protected $route = "clients";


        public function mount(Client $client)
        {
           $this->setFormProperties($client);
        }

        /**
        * @return array
        */
        public function fields()
        {
            return [];
        }
}
