<?php

namespace SH\BackBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SHBackBundle:Default:index.html.twig');
    }
}
