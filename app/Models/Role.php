<?php
/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use SIGA\Acl\Models\AbstractRole;
use SIGA\Scopes\UuidGenerate;

class Role extends AbstractRole
{
    use HasFactory, UuidGenerate;
}
