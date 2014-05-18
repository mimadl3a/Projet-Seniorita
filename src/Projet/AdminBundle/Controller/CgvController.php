<?php

namespace Projet\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class CgvController extends Controller{
	public function indexAction(){
		$em = $this->getDoctrine()->getManager()->getRepository("ProjetAdminBundle:Cgv");
		$liste = $em->findAll();
		
		return $this->render("ProjetAdminBundle:Cgv:index.html.twig",array(
			'liste' => $liste,
		));
		
	}
	
}