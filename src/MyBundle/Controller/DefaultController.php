<?php

namespace MyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $productos = array(
            array(
            'tipo'        => 'consola XBOX',
            'precio'      => 4500,
            'stock'       => 10,
            'procedencia' => 'USA'),
            array(
                'tipo'        => 'consola PS4',
                'precio'      => 5000,
                'stock'       => 8,
                'procedencia' => 'China'),
            array(
                'tipo'        => 'consola 3DS',
                'precio'      => 1500,
                'stock'       => 6,
                'procedencia' => 'Corea'),
            array(
                'tipo'        => 'consola Wii',
                'precio'      => 2500,
                'stock'       => 12,
                'procedencia' => 'China'),
        );
        $fruta = array(
            'tipo'  => 'manzana',
            'color' => 'amarilla'
        );
        return $this->
        render('MyBundle:Default:index.html.twig',
            compact('productos', 'fruta')
        );
    }
}
