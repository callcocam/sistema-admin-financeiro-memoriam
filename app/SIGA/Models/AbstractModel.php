<?php
/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace SIGA\Models;


use Illuminate\Database\Eloquent\Model;
use SIGA\Scopes\DateRange;
use SIGA\Sluggable\HasSlug;
use SIGA\Sluggable\SlugOptions;

class AbstractModel extends Model
{

    use HasSlug, DateRange;

   public $incrementing = false;

   protected $keyType = "string";

    const DELETED = "deleted";
    const DRAFT = "draft";
    const REVISION = "revision";
    const PUBLISHED = "published";

    protected  function slugTo()
    {
        return "slug";
    }

    protected  function slugFrom()
    {
        return 'name';
    }


    public function getSlugOptions()
    {
        if (is_string($this->slugTo())) {
            return SlugOptions::create()
                ->generateSlugsFrom($this->slugFrom())
                ->saveSlugsTo($this->slugTo());
        }
    }

}
