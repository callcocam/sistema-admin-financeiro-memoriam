<?php
/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace App\Http\Livewire\Auth;

use Livewire\Component;

class AbstractAuth extends Component
{
    
    protected function pageConfig(){

        return [
                'page'=>[
                    'production' => false,
                    'baseUrl' => '',
                    'title' => 'Dashboard',
                    'description' => 'Dashboard template built with tailwindcss 🛩',
                    'collections' => [],
                ]
            ];
    }
}