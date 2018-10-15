<?php  // src/Controller/DefaultController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     *
     */
    public function index()
    {
        return $this->render('index.html.twig');
    }


    /**
     * @Route("/home", name="secondhome")
     *
     */
    public function home()
    {
        return $this->render('home.html.twig');
    }

    /**
     * @Route("/base", name="base")
     *
     */
    public function base()
    {
        return $this->render('base.html.twig');
    }
}