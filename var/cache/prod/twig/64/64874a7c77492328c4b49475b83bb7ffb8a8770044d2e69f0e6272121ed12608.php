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

/* student/index.html.twig */
class __TwigTemplate_6cc201f78f1843507a96e4efbdadb231f187c428be42747f45319cb0c77f6040 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "student/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Liste d'élèves";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<div class=\"container-fluid\">
    <h1 class=\"mt-5\">Liste d'élèves de la classe : ";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["group"] ?? null), "name", [], "any", false, false, false, 7), "html", null, true);
        echo "</h1>
    <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("student_new", ["id" => twig_get_attribute($this->env, $this->source, ($context["group"] ?? null), "id", [], "any", false, false, false, 8)]), "html", null, true);
        echo "\" class=\"btn btn-primary mt-3\"><i class=\"bi bi-plus-circle\"></i> Ajouter un élève</a>
    <table class=\"table table-striped table-hover mt-3\">
        <thead>
            <tr>
                <th></th>
                <th>Nom</th>
                <th>Prénom</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["students"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["student"]) {
            // line 20
            echo "            <tr>
                <td>
                    <span style=\"border-radius:50%; width:100%;\" ";
            // line 22
            if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["student"], "punishments", [], "any", false, false, false, 22)), 1))) {
                echo " class=\"text-warning\"";
            }
            // line 23
            echo "                        ";
            if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["student"], "punishments", [], "any", false, false, false, 23)), 2))) {
                echo " class=\"text-danger\"";
            }
            echo "><i class=\"bi bi-circle-fill\"></i>
                    </span>
                </td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["student"], "name", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["student"], "lastName", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                <td class=\"text-end\">
                <div class=\"btn-group\">
                    <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("punishment_index", ["id" => twig_get_attribute($this->env, $this->source, $context["student"], "id", [], "any", false, false, false, 30)]), "html", null, true);
            echo "\" class=\"btn btn-success btn-sm\"><i class=\"bi bi-emoji-angry-fill\"></i> Sanctions</a>
                    <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("abscence_index", ["id" => twig_get_attribute($this->env, $this->source, $context["student"], "id", [], "any", false, false, false, 31)]), "html", null, true);
            echo "\" class=\"btn btn-warning btn-sm\"><i class=\"bi bi-calendar-x\"></i> Abscences</a>
                    <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("student_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["student"], "id", [], "any", false, false, false, 32)]), "html", null, true);
            echo "\" class=\"btn btn-primary btn-sm\"><i class=\"bi bi-pencil\"></i> Éditer</a>
                    ";
            // line 33
            echo twig_include($this->env, $context, "student/_delete_form.html.twig");
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
            // line 38
            echo "            <tr>
                <td colspan=\"4\">Pas d'élèves trouvés</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['student'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "        </tbody>
    </table>

    <h3 class=\"mt-5\">Sanctions de la classe : ";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["group"] ?? null), "name", [], "any", false, false, false, 45), "html", null, true);
        echo "</h3>
    <table class=\"table table-striped table-hover\">
        <thead>
            <tr>
                <th></th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Libellé</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["punishments"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["punishment"]) {
            // line 58
            echo "            <tr>
                <td>
                    <span style=\"border-radius:50%; width:100%;\" ";
            // line 60
            if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["punishment"], "student", [], "any", false, false, false, 60), "punishments", [], "any", false, false, false, 60)), 1))) {
                echo " class=\"text-warning\"";
            }
            // line 61
            echo "                        ";
            if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["punishment"], "student", [], "any", false, false, false, 61), "punishments", [], "any", false, false, false, 61)), 2))) {
                echo " class=\"text-danger\"";
            }
            echo "><i class=\"bi bi-circle-fill\"></i>
                    </span>
                </td>
                <td>";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["punishment"], "student", [], "any", false, false, false, 64), "name", [], "any", false, false, false, 64), "html", null, true);
            echo "</td>
                <td>";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["punishment"], "student", [], "any", false, false, false, 65), "lastName", [], "any", false, false, false, 65), "html", null, true);
            echo "</td>
                <td>";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["punishment"], "wording", [], "any", false, false, false, 66), "html", null, true);
            echo "</td>
                <td>";
            // line 67
            ((twig_get_attribute($this->env, $this->source, $context["punishment"], "date", [], "any", false, false, false, 67)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["punishment"], "date", [], "any", false, false, false, 67), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
            echo "</td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 70
            echo "            <tr>
                <td colspan=\"4\">Pas de sanctions dans cette classe</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['punishment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "        </tbody>
    </table>

    <h3 class=\"mt-5\">Abscences de la classe : ";
        // line 77
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["group"] ?? null), "name", [], "any", false, false, false, 77), "html", null, true);
        echo "</h3>
    <table class=\"table table-striped table-hover\">
        <thead>
            <tr>
                <th></th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Libellé</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 89
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["abscences"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["abscence"]) {
            // line 90
            echo "            <tr>
                <td>
                    <span style=\"border-radius:50%; width:100%;\" ";
            // line 92
            if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["abscence"], "student", [], "any", false, false, false, 92), "punishments", [], "any", false, false, false, 92)), 1))) {
                echo " class=\"text-warning\"";
            }
            // line 93
            echo "                        ";
            if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["abscence"], "student", [], "any", false, false, false, 93), "punishments", [], "any", false, false, false, 93)), 2))) {
                echo " class=\"text-danger\"";
            }
            echo "><i class=\"bi bi-circle-fill\"></i>
                    </span>
                </td>
                <td>";
            // line 96
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["abscence"], "student", [], "any", false, false, false, 96), "name", [], "any", false, false, false, 96), "html", null, true);
            echo "</td>
                <td>";
            // line 97
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["abscence"], "student", [], "any", false, false, false, 97), "lastName", [], "any", false, false, false, 97), "html", null, true);
            echo "</td>
                <td>";
            // line 98
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["abscence"], "reason", [], "any", false, false, false, 98), "html", null, true);
            echo "</td>
                <td>";
            // line 99
            ((twig_get_attribute($this->env, $this->source, $context["abscence"], "date", [], "any", false, false, false, 99)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["abscence"], "date", [], "any", false, false, false, 99), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
            echo "</td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 102
            echo "            <tr>
                <td colspan=\"4\">Pas d'abscences dans cette classe</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['abscence'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "        </tbody>
    </table>
<a href=\"";
        // line 108
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("group_index");
        echo "\" class=\"btn btn-danger\"><i class=\"bi bi-arrow-left mt-3\"></i> Retour</a>
</div>
";
    }

    public function getTemplateName()
    {
        return "student/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  309 => 108,  305 => 106,  296 => 102,  288 => 99,  284 => 98,  280 => 97,  276 => 96,  267 => 93,  263 => 92,  259 => 90,  254 => 89,  239 => 77,  234 => 74,  225 => 70,  217 => 67,  213 => 66,  209 => 65,  205 => 64,  196 => 61,  192 => 60,  188 => 58,  183 => 57,  168 => 45,  163 => 42,  154 => 38,  136 => 33,  132 => 32,  128 => 31,  124 => 30,  118 => 27,  114 => 26,  105 => 23,  101 => 22,  97 => 20,  79 => 19,  65 => 8,  61 => 7,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "student/index.html.twig", "C:\\Users\\Utilisateur\\Desktop\\projet-maman-getion-eleve\\templates\\student\\index.html.twig");
    }
}
