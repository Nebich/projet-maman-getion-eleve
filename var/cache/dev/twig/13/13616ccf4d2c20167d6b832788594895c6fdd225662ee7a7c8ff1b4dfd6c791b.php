<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* abscence/_form.html.twig */
class __TwigTemplate_7d0e784a9e1a87c32bc0a1c5f6c81c3d6f154571e3b45d31ae4bcc1482a985ff extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "abscence/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "abscence/_form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start');
        echo "
    ";
        // line 2
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), 'widget');
        echo "
    <div class=\"btn-group\">
    ";
        // line 4
        if (twig_get_attribute($this->env, $this->source, (isset($context["abscence"]) || array_key_exists("abscence", $context) ? $context["abscence"] : (function () { throw new RuntimeError('Variable "abscence" does not exist.', 4, $this->source); })()), "student", [], "any", false, false, false, 4)) {
            // line 5
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("abscence_index", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["abscence"]) || array_key_exists("abscence", $context) ? $context["abscence"] : (function () { throw new RuntimeError('Variable "abscence" does not exist.', 5, $this->source); })()), "student", [], "any", false, false, false, 5), "id", [], "any", false, false, false, 5)]), "html", null, true);
            echo "\" class=\"btn btn-danger\"><i class=\"bi bi-arrow-left\"></i> Retour</a>
    ";
        } else {
            // line 7
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("abscence_index", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["student"]) || array_key_exists("student", $context) ? $context["student"] : (function () { throw new RuntimeError('Variable "student" does not exist.', 7, $this->source); })()), "id", [], "any", false, false, false, 7)]), "html", null, true);
            echo "\" class=\"btn btn-danger\"><i class=\"bi bi-arrow-left\"></i> Retour</a>
    ";
        }
        // line 9
        echo "        <button class=\"btn btn-primary\">";
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 9, $this->source); })()), "Enregistrer")) : ("Enregistrer")), "html", null, true);
        echo "</button>
    </div>
";
        // line 11
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "abscence/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 11,  66 => 9,  60 => 7,  54 => 5,  52 => 4,  47 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form) }}
    {{ form_widget(form) }}
    <div class=\"btn-group\">
    {% if abscence.student %}
        <a href=\"{{ path('abscence_index', {'id': abscence.student.id}) }}\" class=\"btn btn-danger\"><i class=\"bi bi-arrow-left\"></i> Retour</a>
    {% else %}
        <a href=\"{{ path('abscence_index', {\"id\": student.id}) }}\" class=\"btn btn-danger\"><i class=\"bi bi-arrow-left\"></i> Retour</a>
    {% endif %}
        <button class=\"btn btn-primary\">{{ button_label|default('Enregistrer') }}</button>
    </div>
{{ form_end(form) }}
", "abscence/_form.html.twig", "C:\\Users\\Utilisateur\\Desktop\\projet-maman-getion-eleve\\templates\\abscence\\_form.html.twig");
    }
}
