<?php

/* security/signup.html.twig */
class __TwigTemplate_48e08cb1f7e91f385ae95154f100e7538051b6cf9d4238cb48369c2a38591b9c extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "security/signup.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/signup.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/signup.html.twig"));

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
        echo "   <div class=\"jumbotron\">
       <div class=\"form-group\">
    <h4 align = \"center\">Je ralie la cause </h4>
        ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 7, $this->source); })()), 'form_start');
        echo "
        ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 8, $this->source); })()), "civilite", array()), 'row', array("label" => "Civilité", "attr" => array("class" => "form-control form-control-sm", "id" => "inputSmall", "placeholder" => "75001")));
        echo "
        ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 9, $this->source); })()), "username", array()), 'row', array("label" => "Nom", "attr" => array("class" => "form-control form-control-sm", "id" => "inputSmall", "placeholder" => "Family name")));
        echo "
        ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 10, $this->source); })()), "username_first", array()), 'row', array("label" => "Prénom", "attr" => array("class" => "form-control form-control-sm", "id" => "inputSmall", "placeholder" => "First name")));
        echo "
        ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 11, $this->source); })()), "email", array()), 'row', array("label" => "Email", "attr" => array("class" => "form-control form-control-sm", "id" => "inputSmall", "placeholder" => "dupont@gmail.com")));
        echo "
        ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 12, $this->source); })()), "password", array()), 'row', array("label" => "Mot de passe", "attr" => array("class" => "form-control form-control-sm", "id" => "inputSmall", "placeholder" => "ZOh3dyt8z/za")));
        echo "
        ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 13, $this->source); })()), "confirm_password", array()), 'row', array("label" => "Confirmation du mot de passe", "attr" => array("class" => "form-control form-control-sm", "id" => "inputSmall", "placeholder" => "repeat your password")));
        echo "
        ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 14, $this->source); })()), "country", array()), 'row', array("label" => "Pays", "attr" => array("class" => "form-control form-control-sm", "id" => "inputSmall", "placeholder" => "France")));
        echo "
        ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 15, $this->source); })()), "cp", array()), 'row', array("label" => "Code Postal", "attr" => array("class" => "form-control form-control-sm", "id" => "inputSmall", "placeholder" => "75001")));
        echo "
        ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 16, $this->source); })()), "adress", array()), 'row', array("label" => "Adresse", "attr" => array("class" => "form-control form-control-sm", "id" => "inputSmall", "placeholder" => "2 rue du Marais ")));
        echo "
        </br>
        <button type=\"submit\" class=\"btn btn-primary btn-lg btn-block\"></button>
        ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 19, $this->source); })()), 'form_end');
        echo "
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "security/signup.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 19,  94 => 16,  90 => 15,  86 => 14,  82 => 13,  78 => 12,  74 => 11,  70 => 10,  66 => 9,  62 => 8,  58 => 7,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block body %}
   <div class=\"jumbotron\">
       <div class=\"form-group\">
    <h4 align = \"center\">Je ralie la cause </h4>
        {{ form_start( formUser ) }}
        {{ form_row( formUser.civilite ,{'label':'Civilité','attr':{'class':'form-control form-control-sm','id':'inputSmall','placeholder':'75001'}} ) }}
        {{ form_row( formUser.username,{'label':'Nom','attr':{'class':'form-control form-control-sm','id':'inputSmall','placeholder':'Family name'}} ) }}
        {{ form_row( formUser.username_first,{'label':'Prénom','attr':{'class':'form-control form-control-sm','id':'inputSmall','placeholder':'First name'}} ) }}
        {{ form_row( formUser.email,{'label':'Email','attr':{'class':'form-control form-control-sm','id':'inputSmall','placeholder':'dupont@gmail.com'}} ) }}
        {{ form_row( formUser.password,{'label':'Mot de passe','attr':{'class':'form-control form-control-sm','id':'inputSmall','placeholder':'ZOh3dyt8z/za'}} ) }}
        {{ form_row( formUser.confirm_password,{'label':'Confirmation du mot de passe','attr':{'class':'form-control form-control-sm','id':'inputSmall','placeholder':'repeat your password'}} ) }}
        {{ form_row( formUser.country ,{'label':'Pays','attr':{'class':'form-control form-control-sm','id':'inputSmall','placeholder':'France'}} ) }}
        {{ form_row( formUser.cp ,{'label':'Code Postal','attr':{'class':'form-control form-control-sm','id':'inputSmall','placeholder':'75001'}} ) }}
        {{ form_row( formUser.adress ,{'label':'Adresse','attr':{'class':'form-control form-control-sm','id':'inputSmall','placeholder':'2 rue du Marais '}} ) }}
        </br>
        <button type=\"submit\" class=\"btn btn-primary btn-lg btn-block\"></button>
        {{ form_end(formUser ) }}
        </div>
    </div>
{% endblock %}", "security/signup.html.twig", "/Users/loryleticee/Symfony-4-beginner-/templates/security/signup.html.twig");
    }
}
