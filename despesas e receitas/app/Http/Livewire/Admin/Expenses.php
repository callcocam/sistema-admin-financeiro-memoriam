<?php

namespace App\Http\Livewire\Admin;

use App\Models\Admin\Expense;
use App\Models\Admin\Provider;
use Livewire\Component;
use Livewire\WithPagination;

class Expenses extends Component
{

    use WithPagination;
        protected $paginationTheme = 'bootstrap';
        public $expense_id,$description,$provider,$value,$due_at,$status, $createMode = false;
        public $id_expense;
        public $searchTerm;
        public $provider_id;
        public $providers;
        public $updateMode = false;
        public $orderBy = 'id';
        public $orderAsc = false;
        public $perPage = 10;

    public function render()
    {
        $this->providers = Provider::all();
//        dd($providers);
        $expenses = Expense::search($this->searchTerm)
            ->orderBy($this->orderBy, $this->orderAsc ? 'asc' : 'desc')
            ->paginate($this->perPage);
        return view('livewire.admin.expenses.index', compact('expenses'))->layout('admin.layout')->extends('admin.layout')->section('content');
    }
    public function addIncome(){
        $this->addform = true;
    }

    public function pay($id){
        if($expense = Expense::find($id)){
            $expense->status = 1;
            $expense->update();
        }
    }
    public function unpay($id){
        if($expense = Expense::find($id)){
            $expense->status = 0;
            $expense->update();
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
        Expense::create($validatedDate);
        session()->flash('message', 'Item Criado com Sucesso.');
        $this->resetInputFields();
        $this->createMode = false;
    }



    public function edit($id)
    {
        $this->updateMode = true;
        $expense = Expense::findOrFail($id);
        $this->expense_id = $id;
        $this->description = $expense->description;
        $this->provider = $expense->provider;
        $this->value = $expense->value;
        $this->due_at = \Carbon\Carbon::parse($expense->due_at)->format('Y-m-d');
    }
    public function update($id){
        $expense = Expense::findOrFail($id);
        $data['description']= $this->description;
        $data['provider']= $this->provider;
        $data['value']= $this->value;
        $data['due_at']= \Carbon\Carbon::parse($this->due_at)->format('Y-m-d');
        $expense->update($data);

        session()->flash('message', 'Item Aualizado com Sucesso.');
        $this->resetInputFields();
        $this->updateMode = false;
    }

    public function delete($id){
        $expense = Expense::findOrFail($id);
        $expense->delete();
    }

    private function resetInputFields()
    {
        $this->expense_id = '';
        $this->description = '';
        $this->provider = '';
        $this->value = '';
        $this->due_at = '';
        $this->provider_id = '';
    }
    public function updateProvider($expense_id){
//        dd($this->provider_id[$expense_id]);
        $expense = Expense::find($expense_id);

        $data['provider_id']= $this->provider_id[$expense_id];

        $expense->update($data);
        session()->flash('message', 'feito.');
        $this->resetInputFields();
        $this->id_expense = $expense_id;
    }

}
