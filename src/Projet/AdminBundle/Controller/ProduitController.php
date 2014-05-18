<?php

namespace Projet\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Projet\AdminBundle\Entity\Produit;
use Projet\AdminBundle\Form\ProduitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ProduitController extends Controller
{
	public function listAction()
	{
		$em    = $this->get('doctrine.orm.entity_manager');
		$dql   = "SELECT a FROM ProjetAdminBundle:Produit a";
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
		$dql   = "SELECT a FROM ProjetAdminBundle:Produit a WHERE a.libelle LIKE '%".$libelle."%'";
		$query = $em->createQuery($dql);
	
		$paginator  = $this->get('knp_paginator');
		$pagination = $paginator->paginate(
				$query,
				$this->get('request')->query->get('page', 1)/*page number*/,
				5/*limit per page*/
		);
	
		$pagination->setTemplate('ProjetAdminBundle:Layout:pagination.html.twig');
		return $pagination;
	}
    public function indexAction(){    	
        $em = $this->getDoctrine()->getManager()->getRepository("ProjetAdminBundle:Produit");
    	$liste = $em->findAll();
        return $this->render('ProjetAdminBundle:Produit:ListeProduits.html.twig', 
        	array(
        		"liste" => $liste,
        		'pagination' =>$this->listAction(),
        	)
        );
    }
    public function index_ajaxAction(Request $req){
    	return $this->render('ProjetAdminBundle:Produit:ListeProduitsAjax.html.twig',
    		array(
    			'pagination' =>$this->listAjax($req->get("variable")),
    		)
    	);
    }
    
    public function ajoutAction(Request $request){
    	 
    	$Produit = new Produit();
    	$form = $this->createForm(new ProduitType(), $Produit);
    	$form->add('categorie','entity',array(
    			'empty_value' => 'Choisissez une categorie.',
    			'required'    => true,
    			'class' => 'ProjetAdminBundle:CategorieProduit',
    			'property' => 'libelle'
    	));
    	
    	$form->handleRequest($request);
    	if($form->isValid()){
    		$Produit = $form->getData();
    		$em = $this->getDoctrine()->getManager()->getRepository("ProjetAdminBundle:Produit");
    
    		$tmp = $em->findByLibelle($Produit->getLibelle());
    		if($tmp){
    			$this->get("session")->getFlashBag()->add("erreur", "Erreur, produit deja insere !");
    			return $this->redirect($this->generateUrl("Ajout_produit"));
    		}else{
    			$em = $this->getDoctrine()->getManager();
    			$em->persist($Produit);
    			$em->flush();
    			return $this->redirect($this->generateUrl("Liste_produit"));
    		}
    
    
    	}else{
    		return $this->render('ProjetAdminBundle:Produit:Ajout.html.twig',
    			array(
    				"form"  => $form->createView(),
    			)
    		);
    	}
    	 
    }
    

    //SUPPRESSION DES CATEGORIES PRODUIT
    public function supprimerAction($id){
    	 
    	$tme = $this->getDoctrine()->getRepository("ProjetAdminBundle:Produit");
    	$tmp = $tme->findOneById($id);
    	if($tmp){
    		try{
    			$em = $this->getDoctrine()->getManager();
    			$em->remove($tmp);
    			$em->flush();
    		}catch(\Exception $e){
    			$this->get("session")
    			->getFlashBag()
    			->add("dbal-erreur", "Erreur, impossible de supprimer le produit <strong>".$tmp->getLibelle()."</strong>!");
    		}
    
    		return $this->redirect($this->generateUrl("Liste_categorie"));
    	}else{
    		$this->get("session")->getFlashBag()->add("erreur", "Erreur, Categorie introuvable !");
    		return $this->redirect($this->generateUrl("Liste_produit"));
    	}
    }

    //MAJ DES CATEGORIES PRODUIT
    public function modifierAction($id, Request $request){
    	$erreur = "";
    	$tme = $this->getDoctrine()->getRepository("ProjetAdminBundle:Produit");
    	$tmp0 = $tme->findOneById($id);
    	if($tmp0){
    		$form = $this->createForm(new ProduitType(),$tmp0);
    		$form->add('categorie','entity',array(
    				'empty_value' => 'Choisissez une categorie.',
    				'required'    => true,
    				'class' => 'ProjetAdminBundle:CategorieProduit',
    				'property' => 'libelle'
    		));
    		
    		$form->add('old_libelle','hidden',array('attr'=>array('value'=>$tmp0->getLibelle())));
    
    		$form->handleRequest($request);
    		if($form->isValid()){
    			
    			$prd = $form->getData();
    			
    			if($prd->getLibelle() != $prd->getOldLibelle()){
    				
    				$tp = $tme->findByLibelle($prd->getLibelle());
    				if($tp){
    					$this->get('session')->getFlashBag()->add("erreur", "Erreur, Produit deja present !");
    				}else{
    					$em = $this->getDoctrine()->getManager();
    					$em->persist($prd);
    					$em->flush();
    				}
    			}else{
    				$em = $this->getDoctrine()->getManager();
    				$em->persist($prd);
    				$em->flush();
    			}
    			
    			return $this->redirect($this->generateUrl("Maj_produit",array('id'=>$prd->getId())));
    		}else{
    			$erreur = $this->getErrorMessages($form);
    		}
    
    		return $this->render('ProjetAdminBundle:Produit:Modifier.html.twig',
    			array(
    				"form" => $form->createView(),
    				"produit" => $tmp0,
    				"erreurs" => $erreur,
    			)
    		);
    	}else{
    		$this->get("session")->getFlashBag()->add("erreur", "Erreur, Produit introuvable !");
    		return $this->redirect($this->generateUrl("Liste_produit"));
    	}
    }
    
    public function infoSuppAction($id){
    	return new Response("Info supp."); 
    }
    
    
    private function getErrorMessages(\Symfony\Component\Form\Form $form) {
    	$errors = array();
    
    	foreach ($form->getErrors() as $key => $error) {
    		$errors[] = $error->getMessage();
    	}
    
    	foreach ($form->all() as $child) {
    		if (!$child->isValid()) {
    			$errors[$child->getName()] = $this->getErrorMessages($child);
    		}
    	}
    
    	return $errors;
    }
}
