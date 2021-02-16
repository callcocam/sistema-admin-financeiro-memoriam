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

    public function actionLink($model, $action)
    {
        if ($this->permission($action)) {
            if (Route::has(sprintf('admin.%s.%s', $this->route(), $action))) {
                return route(sprintf('admin.%s.%s', $this->route(), $action), array_merge(
                    [$this->getRouteKeyName() => $model], request()->query()
                ));
            }
        }
        return null;
    }


    public function createLink()
    {
        if ($this->permission('create')) {
            if ($this->route()) {
                if (Route::has(sprintf('admin.%s.create', $this->route()))) {
                    return route(sprintf('admin.%s.create', $this->route()), request()->query());
                }
            }
        }
        return null;

    }

    public function reloadLink()
    {
        if ($this->permission('index')) {
            if ($this->route()) {
                if (Route::has(sprintf('admin.%s.index', $this->route()))) {
                    return route(sprintf('admin.%s.index', $this->route()));
                }
            }
        }

        return null;

    }

    public function permission($action)
    {
        return sprintf('admin.%s.%s', $this->route(), $action);
    }

    public function getRouteKeyName(){
        return Str::singular(Str::replaceFirst('-','',$this->route()));
    }

}
