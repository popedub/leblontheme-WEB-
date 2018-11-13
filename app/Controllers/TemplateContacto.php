<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class TemplateContacto extends Controller
{
    public function galeria() {
        $data = [];
        $images = get_field('galeria');
        foreach ($images as $image) {
         $this_foto = (object) array(
             'foto' => wp_get_attachment_image( $image['ID'], 'full', false, array('class' => 'img-fluid mx-auto d-block') ),
             'caption' => $image ['caption'],
             'url' => $image['url'],
         );
           array_push($data, $this_foto);
        }
        return $data;

    }
    public function box()
    {
        return (object) array(
            'box1' => get_field('box_1'),
            'box2' => get_field('box_2'),
            'box3' => get_field('box_3'),

        );
    }
}
