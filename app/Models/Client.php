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

class Client extends AbstractModel
{
    use HasFactory, UuidGenerate;

    protected $guarded = ['id'];

}
