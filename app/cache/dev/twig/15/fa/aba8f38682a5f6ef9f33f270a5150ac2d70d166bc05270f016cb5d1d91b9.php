<?php

/* ProjetAdminBundle:Categorie:ListeCategories.html.twig */
class __TwigTemplate_15faaba8f38682a5f6ef9f33f270a5150ac2d70d166bc05270f016cb5d1d91b9 extends Twig_Template
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
\t\t<h2>Liste des Categories,<small> Nombre egal a: ";
        // line 6
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["liste"]) ? $context["liste"] : $this->getContext($context, "liste"))), "html", null, true);
        echo "</small></h2>
\t\t<a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("Ajout_categorie");
        echo "\" class=\"btn btn-info\">Ajouter nouvelle categorie</a>
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
\t\t";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "dbal-erreur"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["DbalflashMessage"]) {
            // line 17
            echo "\t\t    <div class=\"alert bg-warning\">
\t\t      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t\t      ";
            // line 19
            echo (isset($context["DbalflashMessage"]) ? $context["DbalflashMessage"] : $this->getContext($context, "DbalflashMessage"));
            echo "
\t\t    </div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['DbalflashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "\t\t
\t</div>
\t<div class=\"container\">
\t\t<br/>
\t\tFiltrer par libelle du produit: <input type='text' id='search-cat'>
\t\t<br />
\t\t<br />
\t\t<div id=\"contenu-cat\">
\t\t\t<table class=\"table table-bordered table-hover table-striped sortable\" id=\"liste_cat\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td><strong>#</strong></td>
\t\t\t\t\t\t<td><strong>Libelle</strong></td>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t";
        // line 38
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 39
            echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "id"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t\t\t\t";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "libelle"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-2\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Maj_categorie", array("id" => $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "id"))), "html", null, true);
            echo "\">Modifier</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-2\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Spr_categorie", array("id" => $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "id"))), "html", null, true);
            echo "\">Supprimer</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "\t\t\t\t</tbody>
\t\t\t</table>
\t\t\t<div>
\t\t\t    ";
        // line 59
        echo $this->env->getExtension('knp_pagination')->render((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
\t\t\t</div>
\t\t</div>
\t\t
\t\t
\t</div>
\t";
    }

    public function getTemplateName()
    {
        return "ProjetAdminBundle:Categorie:ListeCategories.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 59,  139 => 56,  127 => 50,  121 => 47,  115 => 44,  108 => 40,  105 => 39,  101 => 38,  83 => 22,  74 => 19,  70 => 17,  66 => 16,  63 => 15,  54 => 12,  50 => 10,  46 => 9,  41 => 7,  37 => 6,  31 => 4,  28 => 3,);
    }
}
