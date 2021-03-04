<?php
/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace App\Http\Livewire\Translations;

use App\Models\Translation;
use SIGA\Form\Fields\Text;
use SIGA\Form\Fields\Textarea;
use SIGA\Form\FormComponent;

class EditComponent extends FormComponent
{

        protected $route = "translations";

        public function mount(Translation $translation)
        {
           $this->setFormProperties($translation);
        }

        /**
        * @return array
        */
        public function fields()
        {
            return [
                Text::make('language')->attribute('readonly', true),
                Text::make('group'),
                Text::make('key'),
                Textarea::make('text'),
            ];
        }
}
