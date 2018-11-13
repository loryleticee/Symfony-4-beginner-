<?php

/* note/index.html.twig */
class __TwigTemplate_88da99dcf31a72a1f0f846b9134705c9fe0da2ffe5e5cdcc6ba5dd4b877b1179 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "note/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "note/index.html.twig"));

        // line 1
        $this->loadTemplate("./base.html.twig", "note/index.html.twig", 1)->display($context);
        // line 2
        echo "
<html>
    <div class=\"jumbotron \" >
    <center>Liste de note </center>
    
        <div class=\"list-group\">
            ";
        // line 8
        if ((isset($context["notes"]) || array_key_exists("notes", $context) ? $context["notes"] : (function () { throw new Twig_Error_Runtime('Variable "notes" does not exist.', 8, $this->source); })())) {
            // line 9
            echo "        <ul>
                ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["notes"]) || array_key_exists("notes", $context) ? $context["notes"] : (function () { throw new Twig_Error_Runtime('Variable "notes" does not exist.', 10, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["note"]) {
                // line 11
                echo "               <li>
                    ";
                // line 12
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["note"], "nom", array()), "html", null, true);
                echo "
                    <a href= \"";
                // line 13
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_note");
                echo " \">x</a>
                </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['note'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "           
            ";
        }
        // line 18
        echo "        </ul>
        </div>
        
        
    </div>
    <div class=\"jumbotron\">
    <center>
        <label> Ajouter note</label> 
    ";
        // line 26
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 26, $this->source); })()), 'form_start', array("action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_note")));
        echo "
    ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->source); })()), "nom", array()), 'row');
        echo "
    <button type=\"submit\" class=\"btn btn-primary btn-lg btn-block\">Enregistrer</button>
    ";
        // line 29
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 29, $this->source); })()), 'form_end');
        echo "
    </center>
    </div>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "note/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 29,  82 => 27,  78 => 26,  68 => 18,  64 => 16,  55 => 13,  51 => 12,  48 => 11,  44 => 10,  41 => 9,  39 => 8,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include './base.html.twig' %}

<html>
    <div class=\"jumbotron \" >
    <center>Liste de note </center>
    
        <div class=\"list-group\">
            {%  if notes %}
        <ul>
                {% for note in notes %}
               <li>
                    {{ note.nom }}
                    <a href= \"{{ path('delete_note') }} \">x</a>
                </li>
                {% endfor %}
           
            {% endif %}
        </ul>
        </div>
        
        
    </div>
    <div class=\"jumbotron\">
    <center>
        <label> Ajouter note</label> 
    {{form_start(form,{'action': path('add_note')}) }}
    {{form_row(form.nom)}}
    <button type=\"submit\" class=\"btn btn-primary btn-lg btn-block\">Enregistrer</button>
    {{form_end(form)}}
    </center>
    </div>

</html>", "note/index.html.twig", "/Users/loryleticee/Symfony-4-beginner-/templates/note/index.html.twig");
    }
}
