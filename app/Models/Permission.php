<?php
/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use SIGA\Acl\Models\AbstractPermission;
use SIGA\Scopes\UuidGenerate;

class Permission extends AbstractPermission
{
    use HasFactory, UuidGenerate;
}
