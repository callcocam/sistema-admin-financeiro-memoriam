<?php
/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */
return [
    'theme'=>'tailwind',
    'views' => [
        'container' => 'flash::container',
        'message' => 'flash::tailwind.message',
        'overlay' => 'flash::tailwind.overlay',
    ],
    'styles' => [
        'info' => [
            'color' => 'blue',
            'icon' => 'fas fa-info-circle',
        ],
        'success' => [
            'color' => 'green',
            'icon' => 'fas fa-info-circle',
        ],
        'warning' => [
            'color' => 'yellow',
            'icon' => 'fas fa-info-circle',
        ],
        'danger' => [
            'color' => 'red',
            'icon' => 'fas fa-info-circle',
        ],
        'overlay' => [
            'color' => 'red',
            'icon' => 'fas fa-info-circle',
        ],
    ]
];
