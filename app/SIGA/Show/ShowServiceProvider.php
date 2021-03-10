<?php
/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace SIGA\Show;


use Illuminate\Support\ServiceProvider;

class ShowServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->mergeConfigFrom(sprintf('%s/config/laravel-livewire-show.php', __DIR__),'laravel-livewire-show');
        $this->loadViewsFrom(sprintf('%s/resources/views', __DIR__), 'laravel-livewire-show');
        $this->loadRoutesFrom(sprintf('%s/routes/show.php', __DIR__));
    }

    public function register()
    {

    }
}
