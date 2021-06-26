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

/* student/_form.html.twig */
class __TwigTemplate_dab31af8ae0bdcbd79351be4ca27c4007afaf2ee3f715c59c288254dbe87de97 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "student/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "student/_form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start');
        echo "
    ";
        // line 2
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), 'widget');
        echo "
    <label>Classe :</label>
    <select class=\"form-select mt-3\" style=\"width: 10%\">
        ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) || array_key_exists("groups", $context) ? $context["groups"] : (function () { throw new RuntimeError('Variable "groups" does not exist.', 5, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 6
            echo "        <option ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["student"]) || array_key_exists("student", $context) ? $context["student"] : (function () { throw new RuntimeError('Variable "student" does not exist.', 6, $this->source); })()), "studentGroup", [], "any", false, false, false, 6)) {
                echo " ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["group"], "Name", [], "any", false, false, false, 6), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["student"]) || array_key_exists("student", $context) ? $context["student"] : (function () { throw new RuntimeError('Variable "student" does not exist.', 6, $this->source); })()), "studentGroup", [], "any", false, false, false, 6), "Name", [], "any", false, false, false, 6)))) {
                    echo " selected ";
                }
            }
            echo "> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["group"], "Name", [], "any", false, false, false, 6), "html", null, true);
            echo " </option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "    </select>
    <div class=\"btn-group mt-3\">
    ";
        // line 10
        if (twig_get_attribute($this->env, $this->source, (isset($context["student"]) || array_key_exists("student", $context) ? $context["student"] : (function () { throw new RuntimeError('Variable "student" does not exist.', 10, $this->source); })()), "studentGroup", [], "any", false, false, false, 10)) {
            // line 11
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("student_index", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["student"]) || array_key_exists("student", $context) ? $context["student"] : (function () { throw new RuntimeError('Variable "student" does not exist.', 11, $this->source); })()), "studentGroup", [], "any", false, false, false, 11), "id", [], "any", false, false, false, 11)]), "html", null, true);
            echo "\" class=\"btn btn-danger \"><i class=\"bi bi-arrow-left\"></i> Retour</a>
    ";
        } else {
            // line 13
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("student_index", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["group"]) || array_key_exists("group", $context) ? $context["group"] : (function () { throw new RuntimeError('Variable "group" does not exist.', 13, $this->source); })()), "id", [], "any", false, false, false, 13)]), "html", null, true);
            echo "\" class=\"btn btn-danger \"><i class=\"bi bi-arrow-left\"></i> Retour</a>
    ";
        }
        // line 15
        echo "        <button class=\"btn btn-primary\">";
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 15, $this->source); })()), "Enregistrer")) : ("Enregistrer")), "html", null, true);
        echo "</button>
    </div>
";
        // line 17
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "student/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 17,  91 => 15,  85 => 13,  79 => 11,  77 => 10,  73 => 8,  57 => 6,  53 => 5,  47 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form) }}
    {{ form_widget(form) }}
    <label>Classe :</label>
    <select class=\"form-select mt-3\" style=\"width: 10%\">
        {% for group in groups %}
        <option {% if student.studentGroup %} {% if group.Name == student.studentGroup.Name %} selected {% endif %}{% endif %}> {{group.Name}} </option>
        {% endfor %}
    </select>
    <div class=\"btn-group mt-3\">
    {% if student.studentGroup %}
        <a href=\"{{ path('student_index', {\"id\": student.studentGroup.id}) }}\" class=\"btn btn-danger \"><i class=\"bi bi-arrow-left\"></i> Retour</a>
    {% else %}
        <a href=\"{{ path('student_index', {\"id\": group.id}) }}\" class=\"btn btn-danger \"><i class=\"bi bi-arrow-left\"></i> Retour</a>
    {% endif %}
        <button class=\"btn btn-primary\">{{ button_label|default('Enregistrer') }}</button>
    </div>
{{ form_end(form) }}
", "student/_form.html.twig", "C:\\Users\\Utilisateur\\Desktop\\projet-maman-getion-eleve\\templates\\student\\_form.html.twig");
    }
}
