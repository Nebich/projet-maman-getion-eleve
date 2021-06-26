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
class __TwigTemplate_bd86e2f0e267e81710fd35480b05fe5f3bfd98f2ad5887d117900a2ed7728bbb extends Template
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
        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
    ";
        // line 2
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
    <label>Classe :</label>
    <select class=\"form-select mt-3\" style=\"width: 10%\">
        ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 6
            echo "        <option ";
            if (twig_get_attribute($this->env, $this->source, ($context["student"] ?? null), "studentGroup", [], "any", false, false, false, 6)) {
                echo " ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["group"], "Name", [], "any", false, false, false, 6), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["student"] ?? null), "studentGroup", [], "any", false, false, false, 6), "Name", [], "any", false, false, false, 6)))) {
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
        if (twig_get_attribute($this->env, $this->source, ($context["student"] ?? null), "studentGroup", [], "any", false, false, false, 10)) {
            // line 11
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("student_index", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["student"] ?? null), "studentGroup", [], "any", false, false, false, 11), "id", [], "any", false, false, false, 11)]), "html", null, true);
            echo "\" class=\"btn btn-danger \"><i class=\"bi bi-arrow-left\"></i> Retour</a>
    ";
        } else {
            // line 13
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("student_index", ["id" => twig_get_attribute($this->env, $this->source, ($context["group"] ?? null), "id", [], "any", false, false, false, 13)]), "html", null, true);
            echo "\" class=\"btn btn-danger \"><i class=\"bi bi-arrow-left\"></i> Retour</a>
    ";
        }
        // line 15
        echo "        <button class=\"btn btn-primary\">";
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter(($context["button_label"] ?? null), "Enregistrer")) : ("Enregistrer")), "html", null, true);
        echo "</button>
    </div>
";
        // line 17
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
";
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
        return array (  91 => 17,  85 => 15,  79 => 13,  73 => 11,  71 => 10,  67 => 8,  51 => 6,  47 => 5,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "student/_form.html.twig", "C:\\Users\\Utilisateur\\Desktop\\projet-maman-getion-eleve\\templates\\student\\_form.html.twig");
    }
}
