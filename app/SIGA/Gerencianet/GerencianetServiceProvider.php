<?php
/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace SIGA\Gerencianet;


use Illuminate\Support\ServiceProvider;

class GerencianetServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->mergeConfigFrom(__DIR__ . '/config/gerencianet.php','gerencianet');
        $this->publishes([__DIR__ . '/config/gerencianet.php' => config_path('gerencianet.php')]);
    }

    public function register()
    {
        $this->app->bind('SIGA\Gerencianet\Gerencianet', function () {
            return new Gerencianet([
                'client_id' => config('gerencianet.client_id'),
                'client_secret' => config('gerencianet.client_secret'),
                'sandbox' => config('gerencianet.sandbox')
            ]);
        });
    }
}
