<?php

namespace App\Http\Livewire\Admin;

use App\Models\Admin\CategoryInvoice;
use App\Models\Admin\Income;
use Livewire\Component;
use Livewire\WithPagination;
//use Manny\Manny;

class Incomes extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $income_id,$description,$provider,$status;
    public $createMode = false;
    public $searchTerm;
    public $updateMode = false;
    public $orderBy = 'id';
    public $orderAsc = false;
    public $perPage = 10;
    public $due_at;
    public $value;

//    public function updated($field)
//    {
//     if ($field == 'due_at')
//        {
//            $this->due_at = Manny::mask($this->due_at, "11/11/1111");
//        }
//
//    }

    public function render()
    {
        $incomes = Income::search($this->searchTerm)
            ->orderBy($this->orderBy, $this->orderAsc ? 'asc' : 'desc')
            ->paginate($this->perPage);
        return view('livewire.admin.incomes.index', compact('incomes'))->layout('admin.layout')->extends('admin.layout')->section('content');
    }

    public function pay($id){
       if($income = Income::find($id)){
           $income->status = 1;
           $income->update();
       }
    }

    public function unpay($id){
        if($income = Income::find($id)){
            $income->status = 0;
            $income->update();
        }
    }

    public function create()
    {
        $this->createMode = true;
    }

    public function store(){
        $validatedDate = $this->validate([
            'description' => 'required',
            'provider' => 'required',
            'value' => 'required',
            'due_at' => 'required',
        ]);

        $validatedDate['due_at'] = \Carbon\Carbon::parse($validatedDate['due_at'])->format('Y-m-d');
        Income::create($validatedDate);
        session()->flash('message', 'Item Criado com Sucesso.');
        $this->resetInputFields();
        $this->createMode = false;
    }

    public function edit($id)
    {
        $this->updateMode = true;
        $income = Income::findOrFail($id);
        $this->income_id = $id;
        $this->description = $income->description;
        $this->provider = $income->provider;
        $this->value = $income->value;
        $this->due_at = \Carbon\Carbon::parse($income->due_at)->format('Y-m-d');
   }

    public function update($id){
        $income = Income::findOrFail($id);
        $data['description']= $this->description;
        $data['provider']= $this->provider;
        $data['value']= $this->value;
        $data['due_at']= \Carbon\Carbon::parse($this->due_at)->format('Y-m-d');
        $income->update($data);

        session()->flash('message', 'Item Aualizado com Sucesso.');
        $this->resetInputFields();
        $this->updateMode = false;
    }

    public function delete($id){
        $income = Income::findOrFail($id);
        $income->delete();
    }

    private function resetInputFields()
    {
        $this->income_id = '';
        $this->description = '';
        $this->provider = '';
        $this->value = '';
        $this->due_at = '';
    }

}
