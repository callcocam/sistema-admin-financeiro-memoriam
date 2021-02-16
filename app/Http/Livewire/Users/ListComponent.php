<?php

namespace App\Http\Livewire\Users;

use SIGA\Table\TableComponent;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use SIGA\Table\Views\Column;

class ListComponent extends TableComponent
{
   
     /**
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(): Builder{
        return User::query();
    }

      /**
     * @return array
     */
    public function columns(): array{
        return [
            // Column::make('Cover')->format(function(User $model) {
            //     return $this->image($model->profile_photo_url, $model->name, ['class' => 'h-10 w-10 rounded-full']);
            // }),
            Column::make('profile_photo_url')->format(function(User $model) {
                return view('vendor.laravel-livewire-table.image', compact('model'));
            }),
            Column::make('name')->sortable()->searchable(),
            Column::make('action')->actions('users')
 
        ];;
    }

    /**
     * @return array
     */
    public function layout(): string{
        return 'layouts.app';
    }

    
    public function route()
    {

        return 'users';

    }
}
