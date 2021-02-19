<?php
/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace App\Http\Livewire\Users;

use SIGA\Form\FormComponent;
use App\Models\User;
use SIGA\Form\Fields\Text;
use SIGA\Form\Fields\Checkbox;
use SIGA\Form\Fields\Radio;
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
            Text::make('email')->span(4)->help('Please select a brand.'),
            Checkbox::make('Terms')->placeholder('Is the car insurable?'),
            Radio::make('Fuel Type')->span(3)->options(['Gas', 'Diesel', 'Electric'])
            ->placeholder('These are delivered via SMS to your mobile phone.')
            ->default('Diesel'),
            Checkbox::make('Features')->span(3)
            ->checkboxs(['Stereo', 'Bluetooth', 'Navigation'])->placeholder('These are delivered via SMS to your mobile phone.')
        ];
    }
}
