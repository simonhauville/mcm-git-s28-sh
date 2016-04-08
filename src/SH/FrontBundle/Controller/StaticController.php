<?php

// src/SH/FrontBundle/Controller/StaticController.php

namespace SH\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class StaticController extends Controller
{
    public function homepageAction()
	  {
	    $content = $this->get('templating')->render('SHFrontBundle:Static:homepage.html.twig');
	    return new Response($content);
	  }
}