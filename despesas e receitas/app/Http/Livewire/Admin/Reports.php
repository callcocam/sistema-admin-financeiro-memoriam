<?php

namespace App\Http\Livewire\Admin;

use App\Models\Admin\Expense;
use App\Models\Admin\Income;
use Livewire\Component;

class Reports extends Component
{
    public $cashValue;
    public $totalExpenses;
    public $incomesMonth;
    public $expensesMonth;
    public $expensesFuture;
    public $overdueExpenses;
    public function render()
    {
        $month = date("m");
        $year = date("Y");
        $thismont = $year.'-'.$month.'-01';
        $incomes = Income::all();
        $totalIncomes = $incomes->where('status','1')->sum('value');
        $this->incomesMonth = $incomes->where('status','1')->where('due_at','>=',$thismont)->sum('value');

        $expenses = Expense::all();
        $this->expensesMonth = $expenses->where('status','1')->where('due_at','>=',$thismont)->sum('value');
        $this->expensesFuture = $expenses->where('due_at','>=',now())->sum('value');
        $this->overdueExpenses = $expenses->where('status','0')->where('due_at','<=',now())->sum('value');
        $totalExpenses = $expenses->where('status','1')->sum('value');
        $this->cashValue = $totalIncomes - $totalExpenses;
        return view('livewire.admin.reports')->layout('admin.layout')->extends('admin.layout')->section('content');
    }
}
