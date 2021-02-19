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
use SIGA\Form\Fields\Text;

class EditComponent extends FormComponent
{

        protected $route = "permissions";

        public function mount(Permission $permission)
        {
           $this->setFormProperties($permission);
        }

        /**
        * @return array
        */
        public function fields()
        {
            return [
                Text::make('Name')->placeholder('Is the car insurable?'),
            ];
        }
}
