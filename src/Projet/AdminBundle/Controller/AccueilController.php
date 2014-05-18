<?php

namespace Projet\AdminBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
class AccueilController extends Controller{
	
	public function indexAction(){
		return $this->render("ProjetAdminBundle:Default:accueil.html.twig");
	}
	
}
