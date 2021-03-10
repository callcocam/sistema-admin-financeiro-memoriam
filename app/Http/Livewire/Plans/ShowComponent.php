<?php
/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace App\Http\Livewire\Plans;

use App\Models\Client;
use App\Models\Plan;
use SIGA\Show\ShowComponent as AbstractShowComponent;

class ShowComponent extends AbstractShowComponent
{

    protected $route = "plans";

    public $idSelected;
    public $nameSelected;
    public $search;
    public $signatures;

    public function mount(Plan $plan)
    {
        $this->setFormProperties($plan);

        $this->signatures = $this->model->signature;
    }


    public function addSignature()
    {
        try {
            $this->model->signature()->attach([$this->idSelected=> ['status' => 'published']]);
            flash('Asinatura realizada com suceeso', 'success')->dismissable()->livewire($this);
            $this->search= null;
            $this->idSelected= null;
            $this->nameSelected= null;
            $this->signatures = Plan::find($this->model->id)->signature;
        } catch (\Exception $exception) {
            flash($exception->getMessage(), 'danger')->dismissable()->livewire($this);
        }
    }

    public function removeSignature($signature)
    {
        try {
            $this->model->signature()->detach([$signature]);
            $this->search= null;
            $this->idSelected= null;
            $this->nameSelected= null;
            $this->signatures = Plan::find($this->model->id)->signature;
            flash('Asinatura removida com suceeso', 'success')->dismissable()->livewire($this);
        } catch (\Exception $exception) {
            flash($exception->getMessage(), 'danger')->dismissable()->livewire($this);
        }

    }

    /**
     * @return string
     */
    public function formView()
    {
        return 'livewire.plans.show-component';
    }

    /**
     * @return string
     */
    public function isSingleSelected($value, $selected = false)
    {
        if ($this->idSelected == $value) {
            return $selected;
        }
    }

    /**
     * @return string
     */
    public function setSingleSelectValue($value, $label)
    {
        $this->idSelected = $value;
        $this->nameSelected = $label;
    }

    public function getOptionsProperty()
    {
        $clientsIds = $this->model->signature->map(function ($model){
            return $model->pivot->client_id;
        });
        $client = Client::query();
        if($clientsIds->count()){
            $client->whereNotIn('id', array_values($clientsIds->all()));
        }

        if ($this->search) {
            $client->where('name', 'LIKE', "%{$this->search}%");
        }
        return $client->pluck('name', 'id');
    }

}
