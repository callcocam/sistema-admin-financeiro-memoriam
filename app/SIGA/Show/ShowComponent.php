<?php
/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace SIGA\Show;


use Livewire\Component;

class ShowComponent extends Component
{

    public $model;
    public $form_data;
    /**
     * @var mixed
     */

    public function layout(): string
    {
        return "layouts.app";
    }

    /**
     * @param null $model
     * @param null $callback
     */
    public function setFormProperties($model = null)
    {
        $this->model = $model;
        if ($model) {
            $this->form_data = $model->toArray();
        }
    }

    /**
     * @return mixed
     */
    public function render()
    {

        $ThemeConfig = [
            'page'=>[
                'production' => false,
                'baseUrl' => '',
                'title' => 'Dashboard',
                'description' => 'Dashboard template built with tailwindcss 🛩',
                'collections' => [],
            ]
        ];
        return view($this->formView())
            ->with('model', $this->model)
            ->with($this->form_data)
            ->layout($this->layout(), $ThemeConfig);
    }

    /**
     * @return string
     */
    public function formView()
    {
        return 'laravel-livewire-show::show';
    }

}
