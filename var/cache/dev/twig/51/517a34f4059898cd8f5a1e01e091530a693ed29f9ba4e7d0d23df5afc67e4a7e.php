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
        echo "<center>
    <div class = \"jumbotron\" style=\"max-width: 60rem;\" align=\"center\">
        <h1 class=\"display-3\">CREATE CHORDS</h1>
        <div class=\"\" >  
        <form action =\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("administrer");
        echo "\" method=\"POST\">
            ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formNote"]) || array_key_exists("formNote", $context) ? $context["formNote"] : (function () { throw new Twig_Error_Runtime('Variable "formNote" does not exist.', 10, $this->source); })()), 'form_start');
        echo "
            ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formGenre"]) || array_key_exists("formGenre", $context) ? $context["formGenre"] : (function () { throw new Twig_Error_Runtime('Variable "formGenre" does not exist.', 11, $this->source); })()), 'form_start');
        echo "
        <h3>Notes</h3>
            <div class=\"custom-control custom-checkbox\">
                ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formNote"]) || array_key_exists("formNote", $context) ? $context["formNote"] : (function () { throw new Twig_Error_Runtime('Variable "formNote" does not exist.', 14, $this->source); })()), "nom", array()), 'widget', array("attr" => array("class" => "", "required" => "required")));
        echo "
            </div>
        </div>
        
        ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formGenre"]) || array_key_exists("formGenre", $context) ? $context["formGenre"] : (function () { throw new Twig_Error_Runtime('Variable "formGenre" does not exist.', 18, $this->source); })()), "nom", array()), 'widget');
        echo "
        <button type=\"submit\" class=\"btn btn-primary btn-lg btn-block\">Enregistrer</button>
        ";
        // line 20
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formNote"]) || array_key_exists("formNote", $context) ? $context["formNote"] : (function () { throw new Twig_Error_Runtime('Variable "formNote" does not exist.', 20, $this->source); })()), 'form_end');
        echo "
        ";
        // line 21
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formGenre"]) || array_key_exists("formGenre", $context) ? $context["formGenre"] : (function () { throw new Twig_Error_Runtime('Variable "formGenre" does not exist.', 21, $this->source); })()), 'form_end');
        echo " 
    
        </form>
    </div>
    
    ";
        // line 26
        if ((isset($context["NewChord"]) || array_key_exists("NewChord", $context))) {
            // line 27
            echo "    <div class=\"col-lg-4\" align=\"center\">
        <div class=\"card text-white bg-second mb-3\" style=\"max-width: 65rem;\">
            <div class=\"card-header\">
                CHORDS
            </div>
            <div class=\"list-group\">
                <ul>
                    ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["NewChord"]) || array_key_exists("NewChord", $context) ? $context["NewChord"] : (function () { throw new Twig_Error_Runtime('Variable "NewChord" does not exist.', 34, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 35
                echo "                        <li class=\"list-group-item list-group-item-action\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "nom", array()), "html", null, true);
                echo "</li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "                </ul>
            </div>
        </div>
    </div>

    ";
        }
        // line 43
        echo "
</center>
<div class = \"jumbotron\" style=\"max-width: 20rem;\" align=\"left\">
    Ajouter note 
    ";
        // line 47
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formGenre"]) || array_key_exists("formGenre", $context) ? $context["formGenre"] : (function () { throw new Twig_Error_Runtime('Variable "formGenre" does not exist.', 47, $this->source); })()), 'form_start');
        echo "
    ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formGenre"]) || array_key_exists("formGenre", $context) ? $context["formGenre"] : (function () { throw new Twig_Error_Runtime('Variable "formGenre" does not exist.', 48, $this->source); })()), "nom", array()), 'row');
        echo "
    ";
        // line 49
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formGenre"]) || array_key_exists("formGenre", $context) ? $context["formGenre"] : (function () { throw new Twig_Error_Runtime('Variable "formGenre" does not exist.', 49, $this->source); })()), 'form_end');
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
        return array (  143 => 49,  139 => 48,  135 => 47,  129 => 43,  121 => 37,  112 => 35,  108 => 34,  99 => 27,  97 => 26,  89 => 21,  85 => 20,  80 => 18,  73 => 14,  67 => 11,  63 => 10,  59 => 9,  53 => 5,  44 => 4,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}


{% block body %}
<center>
    <div class = \"jumbotron\" style=\"max-width: 60rem;\" align=\"center\">
        <h1 class=\"display-3\">CREATE CHORDS</h1>
        <div class=\"\" >  
        <form action =\"{{ path('administrer') }}\" method=\"POST\">
            {{form_start(formNote)}}
            {{form_start(formGenre)}}
        <h3>Notes</h3>
            <div class=\"custom-control custom-checkbox\">
                {{form_widget(formNote.nom,{'attr':{'class':'','required':'required'}}  ) }}
            </div>
        </div>
        
        {{form_widget(formGenre.nom)}}
        <button type=\"submit\" class=\"btn btn-primary btn-lg btn-block\">Enregistrer</button>
        {{form_end(formNote)}}
        {{form_end(formGenre)}} 
    
        </form>
    </div>
    
    {% if NewChord is defined %}
    <div class=\"col-lg-4\" align=\"center\">
        <div class=\"card text-white bg-second mb-3\" style=\"max-width: 65rem;\">
            <div class=\"card-header\">
                CHORDS
            </div>
            <div class=\"list-group\">
                <ul>
                    {% for item in NewChord %}
                        <li class=\"list-group-item list-group-item-action\">{{item.nom}}</li>
                    {% endfor %}
                </ul>
            </div>
        </div>
    </div>

    {% endif %}

</center>
<div class = \"jumbotron\" style=\"max-width: 20rem;\" align=\"left\">
    Ajouter note 
    {{form_start(formGenre)}}
    {{form_row(formGenre.nom)}}
    {{form_end(formGenre)}}
</div>
{% endblock %}
", "gamme/ajout.html.twig", "/Users/loryleticee/Symfony-4-beginner-/templates/gamme/ajout.html.twig");
    }
}
