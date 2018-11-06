<?php

/* gamme/ajout.html.twig */
class __TwigTemplate_db9c105c5a99755aacd9e1a50eb81c71c102d2ff6dcfa9cf04baf115be12781b extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "gamme/ajout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gamme/ajout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gamme/ajout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<div class = \"jumbotron\">
    <h1 class=\"display-3\">New CHORDS</h1>
    <div class=\"\" >    
        ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formNote"]) || array_key_exists("formNote", $context) ? $context["formNote"] : (function () { throw new Twig_Error_Runtime('Variable "formNote" does not exist.', 8, $this->source); })()), 'form_start');
        echo "

        <div class=\"\">
            ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formNote"]) || array_key_exists("formNote", $context) ? $context["formNote"] : (function () { throw new Twig_Error_Runtime('Variable "formNote" does not exist.', 11, $this->source); })()), "nom", array()), 'widget', array("attr" => array("class" => "")));
        echo "

        </div>
    </div>
    ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formNote"]) || array_key_exists("formNote", $context) ? $context["formNote"] : (function () { throw new Twig_Error_Runtime('Variable "formNote" does not exist.', 15, $this->source); })()), 'form_end');
        echo "

    ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formGenre"]) || array_key_exists("formGenre", $context) ? $context["formGenre"] : (function () { throw new Twig_Error_Runtime('Variable "formGenre" does not exist.', 17, $this->source); })()), 'form_start');
        echo "
    ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formGenre"]) || array_key_exists("formGenre", $context) ? $context["formGenre"] : (function () { throw new Twig_Error_Runtime('Variable "formGenre" does not exist.', 18, $this->source); })()), "nom", array()), 'widget');
        echo "

    ";
        // line 20
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formGenre"]) || array_key_exists("formGenre", $context) ? $context["formGenre"] : (function () { throw new Twig_Error_Runtime('Variable "formGenre" does not exist.', 20, $this->source); })()), 'form_end');
        echo " 

</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "gamme/ajout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 20,  80 => 18,  76 => 17,  71 => 15,  64 => 11,  58 => 8,  53 => 5,  44 => 4,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}


{% block body %}
<div class = \"jumbotron\">
    <h1 class=\"display-3\">New CHORDS</h1>
    <div class=\"\" >    
        {{form_start(formNote)}}

        <div class=\"\">
            {{form_widget(formNote.nom,{'attr':{'class':''}} ) }}

        </div>
    </div>
    {{form_end(formNote)}}

    {{form_start(formGenre)}}
    {{form_widget(formGenre.nom)}}

    {{form_end(formGenre)}} 

</div>
{% endblock %}
", "gamme/ajout.html.twig", "/Users/loryleticee/Symfony-4-beginner-/templates/gamme/ajout.html.twig");
    }
}
