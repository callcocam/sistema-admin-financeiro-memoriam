<?php
/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace App\Http\Livewire\Permissions;

use App\Models\Permission;
use SIGA\Form\FormComponent;
use Illuminate\Database\Eloquent\Builder;

class CreateComponent extends FormComponent
{

        protected $route = "permissions";


        public function mount(Permission $model=null)
        {
           $this->setFormProperties($model);
        }

        /**
        * @return array
        */
        public function fields()
        {
            return [];
        }
}
