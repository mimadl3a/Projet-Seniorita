<?php

namespace Projet\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\DBAL\DBALException;
use Projet\AdminBundle\Entity\Texte;
use Projet\AdminBundle\Form\TexteType;
use Symfony\Component\HttpFoundation\Request;

class CalendarController extends Controller{
	
	public function indexAction(){
		$data = "";	
		return $this->render("ProjetAdminBundle:Calendar:index.html.twig",array(
			'data' => $data,
		));
	}
}