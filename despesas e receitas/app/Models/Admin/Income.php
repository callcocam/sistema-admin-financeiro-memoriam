<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
    use HasFactory;
    protected $table = 'app_incomes';
    protected $fillable = [
'description','value','provider','due_at','status'
    ];
    protected $dates = ['due_at'];
    public static function search($search)
    {
        return empty($search) ? static::query()
            : static::query()->where('description', 'like', '%'.$search.'%')
                ->orWhere('value', 'like', '%'.$search.'%');
    }
}
