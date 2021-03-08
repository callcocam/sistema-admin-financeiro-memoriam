<?php
/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

if (!function_exists('is_active')){

    function is_active($route){
        return request()->routeIs($route) ? ' bg-gray-700 bg-opacity-25 text-gray-100 ':' text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100 ';
    }
}

if (!function_exists('view_admin')){

    function view_admin($view){
        return sprintf("admin::livewire.%s", $view);
    }
}
if (!function_exists('call_migration_generate_path')){

    function call_migration_generate_path($route){
        return $route;
    }
}
if ( ! function_exists('get_tenant_id'))
{
    /**
     * Get the configuration path.
     *
     * @param  string $path
     * @return string
     */
    function get_tenant_id($tenant = 'company_id')
    {
        $tenantId = \SIGA\Tenant\Facades\Tenant::getTenantId($tenant);
        return $tenantId;
    }
}

if ( ! function_exists('get_tenant'))
{
    /**
     * Get the configuration path.
     *
     * @param  string $path
     * @return string
     */
    function get_tenant()
    {
        return app('currentCompany');
    }
}

if ( ! function_exists('status'))
{
    /**
     * Get the configuration path.
     *
     * @param $key
     * @return string
     */
    function status($key)
    {
        return ['draft','published'][$key];
    }
}

if ( ! function_exists('_translate'))
{
    /**
     * Get the configuration path.
     *
     * @param $key
     * @param $default
     * @return string
     */
    function _translate($key, $default): string
    {
        if(app(\Illuminate\Translation\Translator::class)->has($key)){
            return trans($key);
        }
        return $default;
    }
}

if(!function_exists('date_carbom_format')){

    function date_carbom_format($date, $format="d/m/Y H:i:s"){

        $date = explode(" ", str_replace(["-","/",":"]," ",$date));

        if(!isset($date[0])){
            $date[0]= null;
        }
        if(!isset($date[1])){
            $date[1]= null;
        }
        if(!isset($date[2])){
            $date[2]= null;
        }
        if(!isset($date[3])){
            $date[3]= null;
        }
        if(!isset($date[4])){
            $date[4]= null;
        }
        if(!isset($date[5])){
            $date[5]= null;
        }
        list($y,$m,$d,$h,$i,$s) = $date;

        //$carbon = \Carbon\Carbon::now();
        $carbon = \Illuminate\Support\Facades\Date::now();
        $carbon->locale('pt');
        if(strlen($date[0]) == 4){
//            echo  $carbon->create($y,$m,$d,$h,$i,$s)->toDateTimeLocalString().PHP_EOL;
//            echo  $carbon->create($y,$m,$d,$h,$i,$s)->toDayDateTimeString().PHP_EOL;
//            echo  $carbon->create($y,$m,$d,$h,$i,$s)->toLongDateString().PHP_EOL;
//            echo  $carbon->create($y,$m,$d,$h,$i,$s)->toFullDateString().PHP_EOL;
//
//            echo  $carbon->create($y,$m,$d,$h,$i,$s)->toShortTimeString().PHP_EOL;
//            echo  $carbon->create($y,$m,$d,$h,$i,$s)->toMediumTimeString().PHP_EOL;
//            echo  $carbon->create($y,$m,$d,$h,$i,$s)->toLongTimeString().PHP_EOL;
//            echo  $carbon->create($y,$m,$d,$h,$i,$s)->toFullTimeString().PHP_EOL;
//
//            echo  $carbon->create($y,$m,$d,$h,$i,$s)->toShortDatetimeString().PHP_EOL;
//            echo  $carbon->create($y,$m,$d,$h,$i,$s)->toMediumDatetimeString().PHP_EOL;
//            echo  $carbon->create($y,$m,$d,$h,$i,$s)->toLongDatetimeString().PHP_EOL;
//            echo  $carbon->create($y,$m,$d,$h,$i,$s)->toFullDatetimeString().PHP_EOL;
            return $carbon->create($y,$m,$d,$h,$i,$s);

        }
        if($y && $m && $d ){
            return $carbon->create($d,$m,$y,$h,$i,$s);
        }
        return $carbon->create(null,null,null,null,null,null);

    }
}
