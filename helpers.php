<?php
/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

if (!function_exists('form_read')) {
    /**
     * Get the configuration path.
     *
     * @param  string $path
     * @return string
     */
    function form_read($post)
    {
        if (is_numeric($post)) :
            return @number_format($post, 2, ",", ".");
        endif;
        return $post;
    }
}




if (!function_exists('form_w')) {
    /**
     * Get the configuration path.
     *
     * @param  string $path
     * @return string
     */
    function form_w($post)
    {
        $source = array('.', ',');
        $replace = array('', '.');
        $valor = str_replace($source, $replace, $post); //remove os pontos e substitui a virgula pelo ponto
        return $valor; //retorna o valor formatado para gravar no banco
    }
}
