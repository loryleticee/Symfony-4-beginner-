<?php

/* security/login.html.twig */
class __TwigTemplate_205c3ccff8dcf4511822ae03ff7b05765e924638b8efa8f2250db316be3ede11 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1 align = \"center\">BIENTOT DU PARALAXE et VUE.js...</h1>
    <form action = \"";
        // line 5
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("secure_login");
        echo "\" method = \"POST\">
        <div class = \"jumbotron\">
              <legend>Alliance</legend>
            <div class = \"form-group\">
                <input type=\"hidden\" name=\"action\" value=\"users/forgotPassword\">
                <input type=\"hidden\" name=\"redirect\" value=\"\">
            
                
                <input class =\"form-control form-control-sm\" placeholder = \"Tape your email....dupont@gmail.com\" type=\"text\" name =\"_username\" required />

                
                <input class =\"form-control form-control-sm\" placeholder = \"Tape your password ********\" type=\"password\" name=\"_password\" required>
            
                </br>
                <input class=\"btn btn-primary btn-lg btn-block\" type=\"submit\" value = \"\" />
            </div>
        </div>
    </form>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 5,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1 align = \"center\">BIENTOT DU PARALAXE et VUE.js...</h1>
    <form action = \"{{ path('secure_login') }}\" method = \"POST\">
        <div class = \"jumbotron\">
              <legend>Alliance</legend>
            <div class = \"form-group\">
                <input type=\"hidden\" name=\"action\" value=\"users/forgotPassword\">
                <input type=\"hidden\" name=\"redirect\" value=\"\">
            
                
                <input class =\"form-control form-control-sm\" placeholder = \"Tape your email....dupont@gmail.com\" type=\"text\" name =\"_username\" required />

                
                <input class =\"form-control form-control-sm\" placeholder = \"Tape your password ********\" type=\"password\" name=\"_password\" required>
            
                </br>
                <input class=\"btn btn-primary btn-lg btn-block\" type=\"submit\" value = \"\" />
            </div>
        </div>
    </form>

{% endblock %}", "security/login.html.twig", "/Users/loryleticee/Symfony-4-beginner-/templates/security/login.html.twig");
    }
}
