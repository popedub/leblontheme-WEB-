<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class Home extends Controller
{
    public function banner()
    {
        return (object) array(
            'foto' => get_field('foto'),
            'texto' => get_field('texto'),

        );
    }
    public function promo()
    {
        return (object) array(
            'frase' => get_field('frase'),
            'textopromo' => get_field('texto_promocion'),
            'fecha_ini' => get_field('fecha_inicio'),
            'fecha_fin' => get_field('fecha_final'),

        );
    }

}
