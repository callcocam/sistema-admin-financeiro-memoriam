<?php
/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use SIGA\Models\AbstractModel;
use SIGA\Scopes\UuidGenerate;

class Income extends AbstractModel
{
    use HasFactory, UuidGenerate;

    protected $guarded = ['id'];


    public function finance()
    {
        return $this->morphOne(Finance::class, 'financeable');
    }

    public function client(){
        return $this->belongsTo(Client::class);
    }

    protected  function slugTo()
    {
        return false;
    }

    public function getStatusAttribute(){
        return $this->finance->status;
    }


    public function _lastMonths(){

        $curretIncomes= $this->LastMonth()->get()->map(function ($expence){
            return $expence->finance->value;
        });
        $total = 0;
        if ($curretIncomes){

            foreach ($curretIncomes as $curretIncome) {
                $total = Calcular($total , $curretIncome, '+');
            }
        }
        return $total;
    }

    public function _nextMonths(){

        $curretIncomes= $this->NextMonths()->get()->map(function ($expence){
            return $expence->finance->value;
        });
        $total = 0;
        if ($curretIncomes){

            foreach ($curretIncomes as $curretIncome) {
                $total = Calcular($total , $curretIncome, '+');
            }
        }
        return $total;
    }
}
