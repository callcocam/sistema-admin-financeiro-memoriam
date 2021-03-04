<?php
/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace SIGA;


use Illuminate\Support\ServiceProvider;
use SIGA\Console\Commands\CreateCommand;
use SIGA\Console\Commands\EditCommand;
use SIGA\Console\Commands\LivewireCommand;
use SIGA\Console\Commands\ShowCommand;
use SIGA\Console\Commands\TableCommand;
use SIGA\Console\Commands\DefaultCommand;
use SIGA\Acl\AclServiceProvider;
use SIGA\Flash\FlashServiceProvider;
use SIGA\Table\LivewireTablesServiceProvide;
use SIGA\Form\FormServiceProvider;
use SIGA\Translations\TranslationServiceProvider;

class SigaLivewireServiceProvider extends ServiceProvider
{

    public function register()
    {
      $this->app->register(TranslationServiceProvider::class);
      $this->app->register(AclServiceProvider::class);
      $this->app->register(FlashServiceProvider::class);
      $this->app->register(LivewireTablesServiceProvide::class);
      $this->app->register(FormServiceProvider::class);
    }

    public function boot(){

      include __DIR__.'/helpers.php';
       if ($this->app->runningInConsole()){

           $this->commands([
               LivewireCommand::class,
               TableCommand::class,
               CreateCommand::class,
               EditCommand::class,
               ShowCommand::class,
               DefaultCommand::class,
           ]);
       }

    }
}
