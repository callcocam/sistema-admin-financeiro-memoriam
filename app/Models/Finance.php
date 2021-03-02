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

class Finance extends AbstractModel
{
    use HasFactory, UuidGenerate;

    protected $guarded = ['id'];

    public function financeable()
    {
        return $this->morphTo();
    }


    protected  function slugTo()
    {
        return false;
    }

    public function field_date_name()
    {

        return 'due_at';
    }

}
