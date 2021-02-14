<?php

namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
class IndexController extends  AbstractController
{
    public function Index()
    {
//        return new Response(
//            '<html><body>Lucky number</body></html>'
//        );


        return $this->render('base.html.twig');
    }
}