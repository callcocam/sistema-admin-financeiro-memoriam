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

    protected $fillable = ['client_id'];


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
}
