<?php
/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace App\SIGA\Gerencianet\Facades;


use Illuminate\Support\Facades\Facade;

class Gerencianet extends Facade
{

 protected static function getFacadeAccessor()
 {
     return "SIGA\Gerencianet\Gerencianet";
 }
}
