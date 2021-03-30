<?php
/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace App\Http\Livewire;

use Carbon\Carbon;

class DashboardComponent extends AbstractComponent
{


    protected $cacheValue;
    protected $expense = 0;
    protected $income = 0;

    protected function view()
    {
        return 'livewire.dashboard';
    }

    public function getCashValueProperty()
    {

        $income = $this->sumIncome(
            Carbon::now()->subYears(20),
            Carbon::now()->addYears(10),
            ['published']
        );

        $expense = $this->sumExpenses(
            Carbon::now()->subYears(20),
            Carbon::now()->addYears(10),
            ['published']
        );

        return Calcular($income, $expense, '-');

    }

    public function getTotalExpensesProperty()
    {

    }

    public function getIncomesMonthProperty()
    {
        $this->income = $this->sumIncome(
            Carbon::now()->startOfMonth(),
            Carbon::now()
        );
        return $this->income;
    }

    public function getExpensesMonthProperty()
    {
        $this->expense = $this->sumExpenses(Carbon::now()->startOfMonth(),
            Carbon::now());
        return $this->expense;
    }

    public function getExpensesFutureProperty()
    {
        return $this->sumExpenses(Carbon::now(),
            Carbon::now()->addYears(20),['draft']);
    }

    public function getOverdueExpensesProperty()
    {
        return $this->sumExpenses(Carbon::now()->subYears(10),
            Carbon::now(),['draft']);
    }

    public function getIncomesFutureProperty()
    {
        return $this->sumIncome(Carbon::now(),
            Carbon::now()->addYears(20),['draft']);
    }

    public function getOverdueIncomesProperty()
    {
        return $this->sumIncome(Carbon::now()->subYears(10),
            Carbon::now(),['draft']);
    }

    protected function sumExpenses($start, $end, $status=['draft','published'], $field = 'due_at')
    {

        $expenses = \App\Models\Expense::query()->whereIn('status',$status)->get();
        $total = 0;
        foreach ($expenses as $expense) {

            $finance = $expense->finance()->whereIn('status',$status)->whereBetween($field, [
                $start,
                $end
            ])->first();

            if ($finance) {
                $total = Calcular($total, form_read($finance->value), '+');
            }
        }
        return $total;
    }

    protected function sumIncome($start, $end, $status=['draft','published'], $field = 'due_at')
    {

        $incomes = \App\Models\Income::query()->whereIn('status',$status)->get();
        $total = 0;
        foreach ($incomes as $income) {
            $finance = $income->finance()->whereIn('status',$status)->whereBetween($field, [
                $start,
                $end
            ])->first();

            if ($finance) {
                $total = Calcular($total, form_read($finance->value), '+');
            }
        }
        return $total;
    }
}
