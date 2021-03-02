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

class Expense extends AbstractModel
{
    use HasFactory, UuidGenerate;

    protected $fillable = ['provider_id'];

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

        $curretExpences= $this->LastMonth()->get()->map(function ($expence){
            return $expence->finance->value;
        });
        $total = 0;
        if ($curretExpences){

            foreach ($curretExpences as $curretExpence) {
                $total = Calcular($total , $curretExpence, '+');
            }
        }
        return $total;
    }

    public function _nextMonths(){

        $curretExpences= $this->NextMonths()->get()->map(function ($expence){
            return $expence->finance->value;
        });
        $total = 0;
        if ($curretExpences){

            foreach ($curretExpences as $curretExpence) {
                $total = Calcular($total , $curretExpence, '+');
            }
        }
        return $total;
    }
}
