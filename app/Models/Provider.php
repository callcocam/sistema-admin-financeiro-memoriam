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

class Provider extends AbstractModel
{
    use HasFactory, UuidGenerate;

    protected $fillable = [
       'type','name','slug','email','phone','description','status', 'created_by','updated_by'
    ];

}
