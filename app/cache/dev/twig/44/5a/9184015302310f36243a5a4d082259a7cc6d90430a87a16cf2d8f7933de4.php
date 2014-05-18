<?php

/* ProjetAdminBundle:Categorie:Ajout.html.twig */
class __TwigTemplate_445a9184015302310f36243a5a4d082259a7cc6d90430a87a16cf2d8f7933de4 extends Twig_Template
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
\t\t<h2>Ajout nouvelle categorie</h2>
\t\t";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "erreur"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 8
            echo "\t\t    <div class=\"alert bg-warning\">
\t\t      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t\t      <strong>";
            // line 10
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "</strong>
\t\t    </div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "\t
\t</div>
\t
\t<div class=\"container\">\t
\t\t<form action=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("Ajout_categorie");
        echo "\" method=\"post\"";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " class=\"form\">
\t\t<div class=\"form-group\">
\t\t\t<div class=\"control-group\">
\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"inputText\">";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "libelle"), 'label', array("label" => "Entrez le libelle: "));
        echo "</label>
\t\t\t\t<div class=\"col-sm-10\">";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "libelle"), 'widget', array("attr" => array("class" => "col-lg-4")));
        echo "</div>
\t\t\t\t<p class=\"help-block col-sm-10\">Entrez le libelle de la categorie.</p>
\t\t\t</div>
\t\t\t";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t\t";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t\t\t<div class=\"form-group\">
\t\t\t    <div class=\"col-sm-offset-2 col-sm-10\">
\t\t\t      <input type=\"submit\" class=\"btn btn-primary\" />
\t\t\t    </div>
\t\t\t  </div>
\t\t\t
\t\t</div>
\t\t</form>
\t</div>
\t
";
    }

    public function getTemplateName()
    {
        return "ProjetAdminBundle:Categorie:Ajout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 25,  79 => 24,  73 => 21,  69 => 20,  61 => 17,  55 => 13,  46 => 10,  42 => 8,  38 => 7,  31 => 4,  28 => 3,);
    }
}
