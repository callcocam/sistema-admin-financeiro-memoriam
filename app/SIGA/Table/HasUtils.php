<?php
/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace SIGA\Table;


use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

trait HasUtils
{

    public function views_table($view): string
    {
        return sprintf('laravel-livewire-tables::%s.%s', config('laravel-livewire-tables.theme'), $view);
    }

    public function views_include_table($view): string
    {
        return $this->views_table(sprintf(".includes.%s", $view));
    }

    public function actionLink($model, $action,$query=[])
    {
        if ($this->permission($action)) {
            if (Route::has(sprintf('admin.%s.%s', $this->route(), $action))) {
                return route(sprintf('admin.%s.%s', $this->route(), $action), array_merge(
                    [$this->getRouteKeyName() => $model], request()->query(),$query
                ));
            }
        }
        return null;
    }


    public function createLink()
    {
       return view(table_includes($this->create_view_button()))->with('route', sprintf('admin.%s.create', $this->route()));

    }

    public function reloadLink()
    {
        return view(table_includes($this->reload_view_button()))->with('route', sprintf('admin.%s.index', $this->route()));
    }

    public function permission($action)
    {
        return sprintf('admin.%s.%s', $this->route(), $action);
    }

    public function getRouteKeyName()
    {
        return Str::singular(Str::replaceFirst('-', '', $this->route()));
    }

    protected function create_view_button()
    {
       return 'actions.create';
    }

    protected function reload_view_button()
    {
        return 'actions.reload';
    }



    public function actions_table(){
        return [];
    }

    public function isShowLabel(){
        return trans('strings.show');
    }

    public function isEditLabel(){
        return trans('strings.edit');
    }

    public function isDeleteLabel(){
        return trans('strings.delete');
    }
    public function isConfirmLabel(){
        return trans('strings.confirm');
    }

}
