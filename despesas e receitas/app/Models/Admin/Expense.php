<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    use HasFactory;
    protected $table = 'app_expenses';
    protected $fillable = [
        'description','provider','value','due_at','status','provider_id'
    ];
    protected $dates = ['due_at'];
    public static function search($search)
    {
        return empty($search) ? static::query()
            : static::query()->where('description', 'like', '%'.$search.'%')
                ->orWhere('value', 'like', '%'.$search.'%');
    }
}
