<?php

/* ProjetAdminBundle:Produit:Modifier.html.twig */
class __TwigTemplate_e5b753da9343cbe8ae1366254c7638642da3d04b62592011fcee645905d79375 extends Twig_Template
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
\t\t\t<h2>Modifier produit</h2>
\t\t\t";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "erreur"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 8
            echo "\t\t\t    <div class=\"alert bg-warning\" id=\"alert-div\">
\t\t\t      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t\t\t      <strong>";
            // line 10
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "</strong>
\t\t\t    </div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "
\t        ";
        // line 14
        if ((!$this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars"), "valid"))) {
            // line 15
            echo "\t\t\t<div class=\"alert alert-warning alert-dismissable\">
\t\t\t  <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
\t\t\t  <strong>
\t\t\t  \t";
            // line 18
            if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prixHt"), 'errors')) {
                // line 19
                echo "\t              \tLe prix ht est invalide.<br />
\t            ";
            }
            // line 21
            echo "\t\t\t  \t";
            if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prixTtc"), 'errors')) {
                // line 22
                echo "\t              \tLe prix ttc est invalide.<br />
\t            ";
            }
            // line 24
            echo "\t\t\t  \t";
            if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lien"), 'errors')) {
                // line 25
                echo "\t              \tUrl invalide.<br />
\t            ";
            }
            // line 27
            echo "
\t\t\t  </strong>
\t\t\t</div>
\t\t\t";
        }
        // line 31
        echo "\t\t
\t</div>
\t
\t<div class=\"container\">\t
\t\t<form action=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Maj_produit", array("id" => $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "id"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " class=\"form\">
\t\t<div class=\"form-group\">
\t\t
\t\t\t<div class=\"control-group\">
\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"inputText\">";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "libelle"), 'label', array("label" => "Entrez le libelle: "));
        echo "</label>
\t\t\t\t<div class=\"col-sm-10\">";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "libelle"), 'widget', array("attr" => array("class" => "col-lg-4")));
        echo "</div>
\t\t\t\t<p class=\"help-block col-sm-10\">Entrez le libelle du produit.</p>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"control-group\">
\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"inputText\">";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prixHt"), 'label', array("label" => "Entrez le prix ht: "));
        echo "</label>
\t\t\t\t<div class=\"col-sm-10\">";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prixHt"), 'widget', array("attr" => array("class" => "col-lg-4")));
        echo "</div>
\t\t\t\t<p class=\"help-block col-sm-10\">Entrez le prix ht du produit.</p>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"control-group\">
\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"inputText\">";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prixTtc"), 'label', array("label" => "Entrez le prix ttc: "));
        echo "</label>
\t\t\t\t<div class=\"col-sm-10\">";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prixTtc"), 'widget', array("attr" => array("class" => "col-lg-4")));
        echo "</div>
\t\t\t\t<p class=\"help-block col-sm-10\">Entrez le prix ttc du produit.</p>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"control-group\">
\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"inputText\">";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description"), 'label', array("label" => "Entrez la description: "));
        echo "</label>
\t\t\t\t<div class=\"col-sm-10\">";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description"), 'widget', array("attr" => array("class" => "col-lg-4")));
        echo "</div>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"control-group\">
\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"inputText\">";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "metaKeywords"), 'label', array("label" => "Entrez la metaKeywords: "));
        echo "</label>
\t\t\t\t<div class=\"col-sm-10\">";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "metaKeywords"), 'widget', array("attr" => array("class" => "col-lg-4")));
        echo "</div>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"control-group\">
\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"inputText\">";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "metaDescription"), 'label', array("label" => "Entrez la metaDescription: "));
        echo "</label>
\t\t\t\t<div class=\"col-sm-10\">";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "metaDescription"), 'widget', array("attr" => array("class" => "col-lg-4")));
        echo "</div>
\t\t\t</div>
\t\t\t
\t\t\t
\t\t\t<div class=\"control-group\">
\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"inputText\">";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "reference"), 'label', array("label" => "Entrez la reference: "));
        echo "</label>
\t\t\t\t<div class=\"col-sm-10\">";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "reference"), 'widget', array("attr" => array("class" => "col-lg-4")));
        echo "</div>
\t\t\t\t<p class=\"help-block col-sm-10\">Entrez la reference du produit.</p>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"control-group\">
\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"inputText\">";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "photoPrincipale"), 'label', array("label" => "Entrez la photo principale: "));
        echo "</label>
\t\t\t\t<div class=\"col-sm-10\">";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "photoPrincipale"), 'widget', array("attr" => array("class" => "col-lg-4")));
        echo "</div>
\t\t\t\t
\t\t\t\t<p class=\"help-block col-sm-10\">
\t\t\t\t<img width=\"100\" height=\"100\" src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((("upload/" . $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "id")) . "/small/") . $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "photoPrincipale"))), "html", null, true);
        echo "\" alt=\"\" class=\"img-thumbnail\" />
\t\t\t\t
\t\t\t\tEntrez la photo principale du produit.<small>( Optionelle )</small></p>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"control-group\">
\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"inputText\">";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lien"), 'label', array("label" => "Entrez le lien: "));
        echo "</label>
\t\t\t\t<div class=\"col-sm-10\">";
        // line 90
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lien"), 'widget', array("attr" => array("class" => "col-lg-4")));
        echo "</div>
\t\t\t\t<p class=\"help-block col-sm-10\">Entrez le lien du produit.</p>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"control-group\">
\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"inputText\">";
        // line 95
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "disponible"), 'label', array("label" => "Entrez la disponibilite: "));
        echo "</label>
\t\t\t\t<div class=\"col-sm-1\">";
        // line 96
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "disponible"), 'widget', array("attr" => array("class" => "col-lg-4")));
        echo " Oui</div>
\t\t\t\t<p class=\"help-block col-sm-10\">Disponible?</p>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"control-group\">
\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"inputText\">";
        // line 101
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categorie"), 'label');
        echo "</label>
\t\t\t\t<div class=\"col-sm-10\">";
        // line 102
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categorie"), 'widget', array("attr" => array("class" => "col-lg-4")));
        echo "</div>
\t\t\t\t
\t\t\t</div>
\t\t\t";
        // line 105
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token"), 'widget');
        echo "
\t\t\t";
        // line 106
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
        return "ProjetAdminBundle:Produit:Modifier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 106,  241 => 105,  235 => 102,  231 => 101,  223 => 96,  219 => 95,  211 => 90,  207 => 89,  198 => 83,  192 => 80,  188 => 79,  180 => 74,  176 => 73,  168 => 68,  164 => 67,  157 => 63,  153 => 62,  146 => 58,  142 => 57,  134 => 52,  130 => 51,  122 => 46,  118 => 45,  110 => 40,  106 => 39,  97 => 35,  91 => 31,  85 => 27,  81 => 25,  78 => 24,  74 => 22,  71 => 21,  67 => 19,  65 => 18,  60 => 15,  58 => 14,  55 => 13,  46 => 10,  42 => 8,  38 => 7,  31 => 4,  28 => 3,);
    }
}
