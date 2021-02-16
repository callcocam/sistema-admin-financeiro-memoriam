<?php

namespace App\Http\Livewire\Users;

use SIGA\Form\FormComponent;
use App\Models\User;
use SIGA\Form\Fields\Text;
use SIGA\Form\Fields\Checkbox;
class EditComponent extends FormComponent
{
       
    protected $route = "users";

    public function mount(User $user){

        $this->setFormProperties($user);
    }
    
    /**
     * @return array
     */
    public function fields()
    {
        return [
            Text::make('name')->span(2)->placeholder('Is the car insurable?'),
            Text::make('email')->help('Please select a brand.'),
            Checkbox::make('Features')->options(['Stereo', 'Bluetooth', 'Navigation'])
        ];
    }
}
