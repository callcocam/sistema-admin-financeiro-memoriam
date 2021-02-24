<?php
/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace SIGA\Scopes;


use Ramsey\Uuid\Uuid;

trait UuidGenerate
{


    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            if (is_null($model->id)):
                $model->id = Uuid::uuid4();
            endif;
        });
    }
}
