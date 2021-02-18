<?php
/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace App\Http\Livewire\Companies;

use SIGA\App\Company;
use SIGA\Form\FormComponent;
use Illuminate\Database\Eloquent\Builder;

class EditComponent extends FormComponent
{

        protected $route = "companies";

        public function mount(Company $company)
        {
           $this->setFormProperties($company);
        }

        /**
        * @return array
        */
        public function fields()
        {
            return [];
        }
}
