<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class PruebasController extends Controller
{

    public function indexAction(Request $request, $name, $page)
    {
//        return $this->redirect($request->getBaseUrl() .'/hello-world?hola=true');
        var_dump($request->get('pruebas'));
        var_dump($request->get('key'));
        die();
        return $this->render('AppBundle:pruebas:index.html.twig', [
            'texto' => $name.'-'.$page
        ]);
    }
}
