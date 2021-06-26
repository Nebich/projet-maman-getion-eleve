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

/* group/index.html.twig */
class __TwigTemplate_746efdeefa348591d37cb26bcef965b323e41df9cb8c7b10149ee4325cb33d04 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "group/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Liste des classes";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<div class=\"container-fluid\">
    <h1>Liste des classes</h1>
    <a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("group_new");
        echo "\" class=\"btn btn-primary\"><i class=\"bi bi-plus-circle\"></i> Ajouter une classe</a>
    <table class=\"table table-striped table-hover\">
        <thead>
            <tr>
                <th class=\"text-center\"><i class=\"bi bi-people-fill\"></i> Classe</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["groups"] ?? null));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 18
            echo "            <tr>
                <td class=\"text-center\"><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("student_index", ["id" => twig_get_attribute($this->env, $this->source, $context["group"], "id", [], "any", false, false, false, 19)]), "html", null, true);
            echo "\" class=\"text-decoration-none\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["group"], "Name", [], "any", false, false, false, 19), "html", null, true);
            echo "</a></td>
                <td class=\"text-end\">
                    <div class=\"btn-group\">
                        <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("group_show", ["id" => twig_get_attribute($this->env, $this->source, $context["group"], "id", [], "any", false, false, false, 22)]), "html", null, true);
            echo "\" class=\"btn btn-info btn-sm\"><i class=\"bi bi-eye-fill\"></i> Voir</a>
                        <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("group_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["group"], "id", [], "any", false, false, false, 23)]), "html", null, true);
            echo "\" class=\"btn btn-primary btn-sm \"><i class=\"bi bi-pencil\"></i> Modifier</a>
                        ";
            // line 24
            echo twig_include($this->env, $context, "group/_delete_form.html.twig");
            echo "
                    </div>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 29
            echo "            <tr>
                <td colspan=\"3\">Vous n'avez pas de classe</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>
</div>
";
    }

    public function getTemplateName()
    {
        return "group/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  129 => 29,  111 => 24,  107 => 23,  103 => 22,  95 => 19,  92 => 18,  74 => 17,  62 => 8,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "group/index.html.twig", "C:\\Users\\Utilisateur\\Desktop\\projet-maman-getion-eleve\\templates\\group\\index.html.twig");
    }
}
