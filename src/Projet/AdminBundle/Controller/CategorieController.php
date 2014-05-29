<?php

namespace Projet\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Projet\AdminBundle\Entity\CategorieProduit;
use Projet\AdminBundle\Form\CategorieProduitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;

class CategorieController extends Controller
{
	public function listAction()
	{
		$em    = $this->get('doctrine.orm.entity_manager');
		$dql   = "SELECT a FROM ProjetAdminBundle:CategorieProduit a";
		$query = $em->createQuery($dql);
	
		$paginator  = $this->get('knp_paginator');
		$pagination = $paginator->paginate(
				$query,
				$this->get('request')->query->get('page', 1)/*page number*/,
				5/*limit per page*/
		);
	
		// parameters to template
		$pagination->setTemplate('ProjetAdminBundle:Layout:pagination.html.twig');
		return $pagination;
	}
	public function listAjax($libelle)
	{
		$em    = $this->get('doctrine.orm.entity_manager');
		$dql   = "SELECT a FROM ProjetAdminBundle:CategorieProduit a WHERE a.libelle like '%".$libelle."%'";
		$query = $em->createQuery($dql);
	
		$paginator  = $this->get('knp_paginator');
		$pagination = $paginator->paginate(
				$query,
				$this->get('request')->query->get('page', 1)/*page number*/,
				5/*limit per page*/
		);
	
		// parameters to template
		$pagination->setTemplate('ProjetAdminBundle:Layout:pagination.html.twig');
		return $pagination;
	}
    public function indexAction(){
    	$em = $this->getDoctrine()->getManager()->getRepository("ProjetAdminBundle:CategorieProduit");
    	$liste = $em->findAll();
        return $this->render('ProjetAdminBundle:Categorie:ListeCategories.html.twig', 
        	array(
				"liste" => $liste,
        		'pagination' =>$this->listAction(),
        		'var'=>75
        	)
		);
    }    
    public function index_ajaxAction(Request $req){
    	return $this->render('ProjetAdminBundle:Categorie:ListeCategoriesAjax.html.twig',
    		array(
    			'pagination' =>$this->listAjax($req->get("variable")),
    		)
    	);
    }
    public function ajoutAction(Request $request){
    	
    	$CategorieProduit = new CategorieProduit();
    	$form = $this->createForm(new CategorieProduitType(), $CategorieProduit);
    	
    	$form->handleRequest($request);
    	if($form->isValid()){
    		$CategorieProduit = $form->getData();
    		$em = $this->getDoctrine()->getManager()->getRepository("ProjetAdminBundle:CategorieProduit");
    		
    		$tmp = $em->findByLibelle($CategorieProduit->getLibelle());
    		if($tmp){
    			$this->get("session")->getFlashBag()->add("erreur", "Erreur, categorie deja inseree !");
    			return $this->redirect($this->generateUrl("Ajout_categorie"));
    		}else{
    			$em = $this->getDoctrine()->getManager();
    			$em->persist($CategorieProduit);
	    		$em->flush();
	    		return $this->redirect($this->generateUrl("Liste_categorie"));
    		}
    		
    		
    	}else{    		
	    	return $this->render('ProjetAdminBundle:Categorie:Ajout.html.twig',
	    		array(
	    			"form"  => $form->createView(),
	    		)
	    	);
    	}
    	
    }
    
    //SUPPRESSION DES CATEGORIES PRODUIT
    public function supprimerAction($id){
    	
    	$tme = $this->getDoctrine()->getRepository("ProjetAdminBundle:CategorieProduit");
    	$tmp = $tme->findOneById($id);
    	if($tmp){
    		try{
    			$em = $this->getDoctrine()->getManager();
    			$em->remove($tmp);
    			$em->flush();
    		}catch(\Exception $e){
    			$this->get("session")
    			->getFlashBag()
    			->add("dbal-erreur", "Erreur, impossible de supprimer la categorie <strong>".$tmp->getLibelle()."</strong>!");
    		}
	    	
	    	return $this->redirect($this->generateUrl("Liste_categorie"));
    	}else{
    		$this->get("session")->getFlashBag()->add("erreur", "Erreur, Categorie introuvable !");
    		return $this->redirect($this->generateUrl("Liste_categorie"));
    	}
    }
    
    //MAJ DES CATEGORIES PRODUIT
    public function modifierAction($id, Request $request){
    	
    	$tme = $this->getDoctrine()->getRepository("ProjetAdminBundle:CategorieProduit");
    	$tmp0 = $tme->findOneById($id);
    	if($tmp0){
	    	$form = $this->createForm(new CategorieProduitType(),$tmp0);
	    	
	    	$form->handleRequest($request);
	    	if($form->isValid()){
	
	    		$cat = $form->getData();
	    		$tmp = $tme->findByLibelle($cat->getLibelle());
	    		if($tmp){
	    			$this->get("session")->getFlashBag()->add("erreur", "Erreur, Categorie deja presente !");
	    		}else{
	    			$em = $this->getDoctrine()->getManager();
	    			$em->persist($tmp0);
	    			$em->flush();
	    		}
		    		
	    	}
	    	
	    	return $this->render('ProjetAdminBundle:Categorie:Modifier.html.twig',
		    	array(
		    		"form"  	=> $form->createView(),
		    		"categorie" => $tmp0,
		    	)
		    );
    	}else{
    		$this->get("session")->getFlashBag()->add("erreur", "Erreur, Categorie introuvable !");
    		return $this->redirect($this->generateUrl("Liste_categorie"));
    	}
    }
}
