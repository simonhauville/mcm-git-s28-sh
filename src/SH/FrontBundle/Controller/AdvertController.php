<?php

// src/SH/FrontBundle/Controller/AdvertController.php

namespace SH\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class AdvertController extends Controller
{
    public function indexAction()
	  {
	    $content = $this->get('templating')->render('SHFrontBundle:Advert:index.html.twig', array('nom' => 'Simon'));
	    return new Response($content);
	  }

	public function addAction()
	  {
	    $content = $this->get('templating')->render('SHFrontBundle:Advert:add.html.twig', array('nom' => 'Simon'));
	    return new Response($content);
	  }

	public function viewAction($id)
	  {
	    $content = $this->get('templating')->render('SHFrontBundle:Advert:view.html.twig', array('id' => $id));
	    return new Response($content);
	  }
}