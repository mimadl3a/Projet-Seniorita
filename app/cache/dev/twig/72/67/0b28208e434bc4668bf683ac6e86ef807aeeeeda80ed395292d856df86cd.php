<?php

/* ProjetAdminBundle:Default:accueil.html.twig */
class __TwigTemplate_72670b28208e434bc4668bf683ac6e86ef807aeeeeda80ed395292d856df86cd extends Twig_Template
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
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-3\">
\t\t\t\t<a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("Maj_texte", array("texte" => "bienvenue"));
        echo "\">
\t\t\t\t\t<img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/btn-admin/b1.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"col-md-3\">
\t\t\t\t<a href='";
        // line 13
        echo $this->env->getExtension('routing')->getPath("Liste_cgv");
        echo "'>
\t\t\t\t\t<img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/btn-admin/b2.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"col-md-3\">
\t\t\t\t<img src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/btn-admin/b3.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t</div>
\t\t\t<div class=\"col-md-3\">
\t\t\t\t<img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/btn-admin/b4.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t</div>
\t\t\t<div class=\"col-md-12\">
\t\t\t\t&nbsp;
\t\t\t</div>
\t\t\t<div class=\"col-md-3\">
\t\t\t\t<img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/btn-admin/b5.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t</div>
\t\t\t<div class=\"col-md-3\">
\t\t\t\t<img src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/btn-admin/b6.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t</div>
\t\t\t<div class=\"col-md-3\">
\t\t\t\t<img src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/btn-admin/b7.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t</div>
\t\t\t<div class=\"col-md-3\">
\t\t\t\t<a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("Liste_produit");
        echo "\">
\t\t\t\t\t<img src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/btn-admin/b12.png"), "html", null, true);
        echo "\" alt=\"\" border=0>
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "ProjetAdminBundle:Default:accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 37,  94 => 36,  88 => 33,  82 => 30,  76 => 27,  67 => 21,  61 => 18,  54 => 14,  50 => 13,  43 => 9,  39 => 8,  31 => 4,  28 => 3,);
    }
}
