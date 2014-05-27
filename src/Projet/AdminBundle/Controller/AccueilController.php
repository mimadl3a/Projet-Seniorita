<?php

namespace Projet\AdminBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Projet\AdminBundle\Entity\Utilisateur;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Translation\IdentityTranslator;
class AccueilController extends Controller{
	
	public function indexAction(){
		//$this->us();
		return $this->render("ProjetAdminBundle:Default:accueil.html.twig");
	}
	public function us(){
		// Les noms d'utilisateurs � cr�er
		$noms = array('winzou', 'John', 'Talus');
		$roles = array('ROLE_ADMIN','ROLE_USER');
		
		$manager = $this->getDoctrine()->getManager();
		
		foreach ($noms as $i => $nom) {
			// On cr�e l'utilisateur
			$users[$i] = new Utilisateur($roles);
		
			// Le nom d'utilisateur et le mot de passe sont identiques
			$users[$i]->setUsername($nom);
			
			
			// Le sel et les r�les sont vides pour l'instant
			$users[$i]->setSalt(substr(md5(time()), 0, 10));
			
			$factory = $this->get('security.encoder_factory');
			$encoder = $factory->getEncoder($users[$i]);
			$password = $encoder->encodePassword($nom, $users[$i]->getSalt());
			
			$users[$i]->setPassword($password);
		
		
			// On le persiste
			$manager->persist($users[$i]);
		}
		
		// On d�clenche l'enregistrement
		$manager->flush();
	}
	
	public function indexenAction($_locale)
	{
		/*
		$this->get('translator')->setLocale($_locale);
		
		$t = "Symfony2 is great";
		if($this->get('translator')->getLocale()=="fr")
	    	$t = $this->get('translator')->trans("Symfony2 is great");
	
	    return new Response($t);
	    */
		
		return $this->render("ProjetAdminBundle:Test:index.html.twig");
	}
	
}
