<?php
/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace App\Http\Livewire\Credentials;

use App\Models\Credential;
use SIGA\Form\Fields\Select;
use SIGA\Form\Fields\Text;
use SIGA\Form\Fields\Textarea;
use SIGA\Form\FormComponent;

class EditComponent extends FormComponent
{

        protected $route = "credentials";

        public function mount(Credential $credential)
        {
           $this->setFormProperties($credential);
        }

        /**
        * @return array
        */
        public function fields()
        {
            return [
                Text::make('name'),
                Text::make('endpoint'),
                Select::make('grant_type')->options([
                    'client_credentials','client-id','authorization_code','password'
                ]),
                Text::make('client_id'),
                Text::make('client_secret'),
                Text::make('scope'),
                Text::make('redirect'),
                Text::make('token'),
                Textarea::make('access_token'),
            ];
        }
}
