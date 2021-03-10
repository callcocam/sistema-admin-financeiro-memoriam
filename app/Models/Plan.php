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

class Plan extends AbstractModel
{
    use HasFactory,UuidGenerate;
     /**
     * The attributes that are fillable via mass assignment.
     *
     * @var array
     */
    protected $fillable = ['name', 'slug', 'description', 'interval', 'repeats', 'status'];

    public function signature(){

        return $this->belongsToMany(Client::class)->using(ClientPlan::class);
    }
}
