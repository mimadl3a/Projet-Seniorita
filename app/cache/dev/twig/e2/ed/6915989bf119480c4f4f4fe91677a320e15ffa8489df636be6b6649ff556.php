<?php

/* ProjetAdminBundle:Produit:ListeProduits.html.twig */
class __TwigTemplate_e2ed6915989bf119480c4f4f4fe91677a320e15ffa8489df636be6b6649ff556 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("ProjetAdminBundle:Layout:base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ProjetAdminBundle:Layout:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "\t";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
\t<div class=\"container\">
\t\t<h2>Liste des Produits,<small> Nombre egal a: ";
        // line 6
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["liste"]) ? $context["liste"] : $this->getContext($context, "liste"))), "html", null, true);
        echo "</small></h2>
\t\t<a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("Ajout_produit");
        echo "\" class=\"btn btn-info\">Ajouter nouveau produit</a>
\t\t
\t\t";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "erreur"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 10
            echo "\t\t    <div class=\"alert bg-warning\">
\t\t      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t\t      <strong>";
            // line 12
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "</strong>
\t\t    </div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "\t\t
\t</div>
\t<div class=\"container\">
\t\t<br/>
\t\t
\t\tFiltrer par libelle du produit: <input type='text' id='search'>
\t\t<br />
\t\t<br />
\t\t<div class=\"panel panel-default\">
\t\t  <!-- Default panel contents -->
\t\t  <div class=\"panel-heading\">Liste des produits</div>
\t\t  <div class=\"panel-body\">
\t\t    <p>Veuillez voir le tableau ci-dessous, et utiliser les controles a cote de chaque produit.</p>
\t\t  </div>
\t\t
\t\t<div id=\"contenu\">\t\t\t
\t\t\t<table class=\"table table-striped sortable\" id=\"liste_prd\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td><strong>#</strong></td>
\t\t\t\t\t\t<td><strong>Image</strong></td>
\t\t\t\t\t\t<td><strong>Libelle</strong></td>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t";
        // line 40
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 41
            echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "id"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<img width=\"100\" height=\"100\" src=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((("upload/" . $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "id")) . "/small/") . $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "photoPrincipale"))), "html", null, true);
            echo "\" alt=\"\" class=\"img-thumbnail\" />
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "libelle"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-2\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Maj_produit", array("id" => $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "id"))), "html", null, true);
            echo "\">Modifier</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-2\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Info_supp_produit", array("id" => $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "id"))), "html", null, true);
            echo "\">Info supp.</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-2\">
\t\t\t\t\t\t\t\t\t\t<a onclick=\"spr('";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Spr_produit", array("id" => $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "id"))), "html", null, true);
            echo "')\">Supprimer</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "\t\t\t\t</tbody>
\t\t\t</table>
\t\t</div>
\t\t</div>
\t\t<div>
\t\t    ";
        // line 69
        echo $this->env->getExtension('knp_pagination')->render((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
\t\t</div>
\t\t
\t</div>
\t";
    }

    public function getTemplateName()
    {
        return "ProjetAdminBundle:Produit:ListeProduits.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 69,  140 => 64,  128 => 58,  122 => 55,  116 => 52,  110 => 49,  102 => 44,  97 => 42,  94 => 41,  90 => 40,  63 => 15,  54 => 12,  50 => 10,  46 => 9,  41 => 7,  37 => 6,  31 => 4,  28 => 3,);
    }
}
