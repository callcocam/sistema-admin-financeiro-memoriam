<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;
use SIGA\Scopes\UuidGenerate;

class ClientPlan extends Pivot
{
    use UuidGenerate;
    public $incrementing = false;
    protected $keyType = 'string';
}
