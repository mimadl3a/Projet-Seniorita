<?php

/* ProjetAdminBundle:Layout:base.html.twig */
class __TwigTemplate_923e1cc5a80260f291b9c24bbf17566ab7d38b27a9fe13fecfd85d61cf0396d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'files' => array($this, 'block_files'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "        
        ";
        // line 11
        $this->displayBlock('files', $context, $blocks);
        // line 31
        echo "                
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 35
        $this->displayBlock('body', $context, $blocks);
        // line 71
        echo "        
        ";
        // line 72
        $this->displayBlock('javascripts', $context, $blocks);
        // line 136
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Administration";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "        \t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        \t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
        ";
    }

    // line 11
    public function block_files($context, array $blocks = array())
    {
        // line 12
        echo "        
        
        \t<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js\"></script>
        \t<script type=\"text/javascript\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.tablesorter.min.js"), "html", null, true);
        echo "\"></script>
        \t<script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
        \t
        \t
        \t<link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css\">
        \t<script src=\"//code.jquery.com/ui/1.10.4/jquery-ui.js\"></script>
        \t
        \t<link rel=\"stylesheet\" type=\"text/css\" href=\"http://waxolunist.github.io/bootstrap3-wysihtml5-bower/dist/bootstrap3-wysihtml5.min.css\"></link>
        \t
        \t
\t\t\t<script src=\"http://waxolunist.github.io/bootstrap3-wysihtml5-bower/components/wysihtml5/dist/wysihtml5-0.3.0.min.js\"></script>
\t\t\t<script src=\"http://waxolunist.github.io/bootstrap3-wysihtml5-bower/components/handlebars/handlebars.runtime.min.js\"></script>
\t\t\t<script src=\"http://waxolunist.github.io/bootstrap3-wysihtml5-bower/dist/bootstrap3-wysihtml5.min.js\"></script>
\t\t\t
\t\t\t
        ";
    }

    // line 35
    public function block_body($context, array $blocks = array())
    {
        // line 36
        echo "        \t<div class=\"navbar navbar-default\">
        \t\t<div class=\"container-fluid\">
        \t\t\t<div class=\"navbar-header\">        \t\t\t\t
        \t\t\t\t<a class=\"navbar-brand\" href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("Admin_home");
        echo "\">Accueil</a>
        \t\t\t</div>
        \t\t\t<div class=\"navbar-inner\">
        \t\t\t\t<ul class=\"nav navbar-nav\">
        \t\t\t\t\t<li ";
        // line 43
        if (((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "_route"), "method") == "Liste_produit") || ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "_route"), "method") == "Ajout_produit")) || ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "_route"), "method") == "Maj_produit"))) {
            // line 45
            echo " class=\"active\" ";
        }
        echo ">
        \t\t\t\t\t\t<a href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("Liste_produit");
        echo "\">Produit</a>
        \t\t\t\t\t</li>
        \t\t\t\t\t<li ";
        // line 48
        if (((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "_route"), "method") == "Liste_categorie") || ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "_route"), "method") == "Ajout_categorie")) || ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "_route"), "method") == "Maj_categorie"))) {
            // line 50
            echo " class=\"active\" ";
        }
        echo ">
        \t\t\t\t\t\t<a href=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("Liste_categorie");
        echo "\">Categorie</a>
        \t\t\t\t\t</li>
        \t\t\t\t</ul>
        \t\t\t\t
        \t\t\t\t<ul class=\"nav navbar-nav navbar-right\">
\t\t\t\t\t        <li class=\"dropdown\">
\t\t\t\t\t          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Connect&eacute; en tant que : ";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "security"), "getToken", array(), "method"), "getUser", array(), "method"), "getUsername", array(), "method"), "html", null, true);
        echo "<b class=\"caret\"></b></a>
\t\t\t\t\t          <ul class=\"dropdown-menu\">
\t\t\t\t\t            <li><a href=\"";
        // line 59
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\">Se deconnecter</a></li>
\t\t\t\t\t            <li><a href=\"#\">Another action</a></li>
\t\t\t\t\t            <li><a href=\"#\">Something else here</a></li>
\t\t\t\t\t            <li class=\"divider\"></li>
\t\t\t\t\t            <li><a href=\"#\">Separated link</a></li>
\t\t\t\t\t          </ul>
\t\t\t\t\t        </li>
\t\t\t\t\t    </ul>
        \t\t\t</div>
        \t\t</div>
        \t</div>
        ";
    }

    // line 72
    public function block_javascripts($context, array $blocks = array())
    {
        // line 73
        echo "        \t
        \t<script>
\t\t\t\t\$(document).ready(function(){
\t\t\t\t\t\$(function(){
\t\t\t\t\t\t\$(\"#liste_cat\").tablesorter();
\t\t\t\t\t});
\t\t\t\t});
\t\t\t\t
\t\t\t\t\$( \"#search\" ).keyup(function() {
\t\t\t\t\t\$.ajax({
\t\t\t\t\t\ttype: \"POST\",
\t\t\t\t\t\turl: \"";
        // line 84
        echo $this->env->getExtension('routing')->getPath("Liste_produit_ajax");
        echo "\",
\t\t\t\t\t\tdata: { variable: \$( \"#search\" ).val() },
\t\t\t\t\t\tsuccess: function(data){
\t\t\t\t\t\t\t\$( \"#contenu\" ).html( data );
\t\t\t\t\t\t\t\$(\"#liste_prd\").tablesorter();
\t\t\t\t\t\t\t\$( \"#search\" ).blur();
\t\t\t\t\t\t},
\t\t\t\t\t\tdataType: \"html\"
\t\t\t\t\t});
\t\t\t\t});
\t\t\t\t\$( \"#search-cat\" ).keyup(function() {
\t\t\t\t\t\$.ajax({
\t\t\t\t\t\ttype: \"POST\",
\t\t\t\t\t\turl: \"";
        // line 97
        echo $this->env->getExtension('routing')->getPath("Liste_categorie_ajax");
        echo "\",
\t\t\t\t\t\tdata: { variable: \$( \"#search-cat\" ).val() },
\t\t\t\t\t\tsuccess: function(data){
\t\t\t\t\t\t\t\$( \"#contenu-cat\" ).html( data );
\t\t\t\t\t\t\t\$(\"#liste_cat\").tablesorter();
\t\t\t\t\t\t\t\$( \"#search-cat\" ).blur();
\t\t\t\t\t\t},
\t\t\t\t\t\tdataType: \"html\"
\t\t\t\t\t});
\t\t\t\t});
\t\t\t\t
\t\t\t\t\$(\".alert\").delay(3000).toggle( \"blind\" );

\t\t\t\t function spr(route) {
\t\t\t\t\t \$( \"#dialog-confirm\" ).dialog({
\t\t\t\t\t\t resizable: false,
\t\t\t\t\t\t height:140,
\t\t\t\t\t\t modal: true,
\t\t\t\t\t\t buttons: {
\t\t\t\t\t\t \"Confirmer\": function() {
\t\t\t\t\t\t\t \$( this ).dialog( \"close\" );
\t\t\t\t\t\t\t \tdocument.location.href=route;
\t\t\t\t\t\t\t },
\t\t\t\t\t\t \t\"Annuler\": function() {
\t\t\t\t\t\t \t\t\$( this ).dialog( \"close\" );
\t\t\t\t\t\t \t}
\t\t\t\t\t\t }
\t\t\t\t\t});
\t\t\t\t};
\t\t\t</script>
\t\t\t
\t\t\t<script>
\t\t\t  \$('#projet_adminbundle_texte_contenu').wysihtml5();
\t\t\t</script>
\t\t\t
        \t<div id=\"dialog-confirm\" title=\"Empty the recycle bin?\" style=\"display: none;font-size:12px\">
\t\t\t\t<p><span class=\"ui-icon ui-icon-alert\" style=\"float:left; margin:0 7px 20px 0;\"></span>Etes-vous sure?</p>
\t\t\t</div>
        ";
    }

    public function getTemplateName()
    {
        return "ProjetAdminBundle:Layout:base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 97,  192 => 84,  179 => 73,  176 => 72,  160 => 59,  155 => 57,  146 => 51,  141 => 50,  139 => 48,  134 => 46,  129 => 45,  127 => 43,  120 => 39,  115 => 36,  112 => 35,  93 => 16,  89 => 15,  84 => 12,  81 => 11,  75 => 8,  72 => 7,  69 => 6,  63 => 5,  57 => 136,  55 => 72,  52 => 71,  44 => 32,  41 => 31,  36 => 10,  34 => 6,  30 => 5,  24 => 1,  98 => 37,  94 => 36,  88 => 33,  82 => 30,  76 => 27,  67 => 21,  61 => 18,  54 => 14,  50 => 35,  43 => 9,  39 => 11,  31 => 4,  28 => 3,);
    }
}
