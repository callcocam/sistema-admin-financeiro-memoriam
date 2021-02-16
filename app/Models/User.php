<?php
/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */
namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use SIGA\Models\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use SIGA\Scopes\UuidGenerate;
use SIGA\Acl\Concerns\HasRolesAndPermissions;

class User extends Authenticatable
{
    use HasFactory, Notifiable, UuidGenerate, HasRolesAndPermissions;
}
