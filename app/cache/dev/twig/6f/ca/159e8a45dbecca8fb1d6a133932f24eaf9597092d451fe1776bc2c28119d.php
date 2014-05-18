<?php

/* ProjetAdminBundle:Default:login.html.twig */
class __TwigTemplate_6fca159e8a45dbecca8fb1d6a133932f24eaf9597092d451fe1776bc2c28119d extends Twig_Template
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

    // line 1
    public function block_body($context, array $blocks = array())
    {
        // line 2
        echo "<div class=\"container\">
\t";
        // line 3
        echo " ";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 5
            echo "\t<div class=\"alert\">
\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t\t<strong>";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message"), "html", null, true);
            echo ".</strong>
\t</div>
\t";
        }
        // line 10
        echo "</div>

<div class=\"container\">
\t<br>
\t<div class=\"row\">
\t<form action=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\"
\t\tclass=\"form-horizontal\">
\t\t<div class=\"form-group\">
\t\t\t<div class=\"control-group\">
\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"inputText\">Login:</label>
\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t<input type=\"text\" id=\"username\" name=\"_username\"
\t\t\t\t\t\tvalue=\"";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"true\" placeholder=\"Username\"
\t\t\t\t\t\tclass=\"col-lg-4\" />
\t\t\t\t</div>
\t\t\t\t<p class=\"help-block col-sm-10\">Login ou adresse email.</p>
\t\t\t</div>
\t\t\t<div class=\"control-group\">
\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"inputText\">Mot de passe:</label>
\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t<input type=\"password\" id=\"password\" name=\"_password\" 
\t\t\t\t\t\trequired=\"true\" placeholder=\"Password\" class=\"col-lg-4\" />
\t\t\t\t</div>
\t\t\t\t<p class=\"help-block col-sm-10\">Votre mot de passe.</p>
\t\t\t</div>
\t\t\t<div class=\"control-group\">
\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"inputText\">Keep me logged in</label>
\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t<input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" checked />
\t\t\t\t\tSe souvenir de moi.
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"control-group\">
\t\t\t\t<div class=\"col-sm-4 control-label\">
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Se connecter..</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<input type=\"hidden\" name=\"_csrf_token\"\tvalue=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">

\t\t</div>


\t</form>
\t</div>

</div>
";
    }

    public function getTemplateName()
    {
        return "ProjetAdminBundle:Default:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 48,  64 => 22,  54 => 15,  47 => 10,  41 => 7,  37 => 5,  34 => 3,  31 => 2,  28 => 1,);
    }
}
