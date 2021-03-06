<?php
/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\DB;
use SIGA\Models\AbstractModel;
use SIGA\Scopes\UuidGenerate;

class Expense extends AbstractModel
{
    use HasFactory, UuidGenerate;

    protected $guarded = ['id'];

    public function finance()
    {
        return $this->morphOne(Finance::class, 'financeable');
    }

    public function finances()
    {
        return $this->morphMany(Finance::class, 'financeable');
    }

    public function provider(){
        return $this->belongsTo(Provider::class);
    }

    protected  function slugTo()
    {
        return false;
    }


    public function getStatusAttribute(){
        return $this->finance->status;
    }

    public function _lastMonths(){


         $curretExpences= $this->get()->map(function ($expence){
            return $expence->finance->LastMonth()->first();
        });
        $total = 0;

        if ($curretExpences){

            foreach ($curretExpences as $curretExpence) {
                $total = Calcular($total , $curretExpence->value, '+');
            }
        }
        return $total;
    }

    public function _nextMonths(){

        $curretExpences= $this->finance->NextMonths()->sun('value');
        $total = 0;
        if ($curretExpences){

            foreach ($curretExpences as $curretExpence) {
                $total = Calcular($total , $curretExpence, '+');
            }
        }
        return $total;
    }


    public function field_date_name(){
        return 'due_at';
    }
}
