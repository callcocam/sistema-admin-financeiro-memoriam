<?php

namespace App\Http\Livewire\Roles;


use SIGA\Form\FormComponent;
use App\Models\Role;
use App\Models\Permission;
use SIGA\Form\Fields\Text;
use SIGA\Form\Fields\Checkbox;
use SIGA\Form\Fields\Radio;
use SIGA\Form\Fields\Select;
use SIGA\Form\Fields\MultiSelect;
class EditComponent extends FormComponent
{
    protected $route = "roles";

    public function mount(Role $role){
        $role->append('access');
        $this->setFormProperties($role);
    }
    
    /**
     * @return array
     */
    public function fields()
    {
        return [
            Text::make('name')->span(4)->placeholder('Is the car insurable?'),
            Select::make('special')->span(2)->options(['no-access' => 'no-access', 'all-access' => 'all-access', 'no-defined' => 'no-defined']),
            MultiSelect::make('access')
                ->target(Permission::query(), $this->isMultSelectSearch('access'))->inline()         
        ];
    }

    
    public function success()
    {
        if ($result = parent::success()) {
            $this->model->permissions()->sync(array_keys(array_filter($this->MultselectSelected)));
        }

        return $result;
    }
}
