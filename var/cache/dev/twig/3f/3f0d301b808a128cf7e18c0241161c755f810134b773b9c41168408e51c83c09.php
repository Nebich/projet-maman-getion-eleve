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

/* partials/navbar.html.twig */
class __TwigTemplate_40bc708a9a0805be201369fb1bcb364061eb4d7de214685fecdbe35f67463290 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/navbar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/navbar.html.twig"));

        // line 1
        echo "<header class=\"bg-dark p-3\">
    <nav class=\" d-flex justify-content-around w-100\">
        ";
        // line 3
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 4
            echo "        <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_index");
            echo "\" class=\"nav-item text-decoration-none text-white fs-5\">Liste des utilisateurs</a>
        ";
        }
        // line 6
        echo "        ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 7
            echo "        <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("group_index");
            echo "\" class=\"nav-item text-decoration-none text-white fs-5\">Liste des classes</a>
        ";
        }
        // line 9
        echo "        <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\" class=\"btn btn-danger\"><i class=\"bi bi-door-open-fill\"></i> Déconnexion</a>
    </nav>
</header>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "partials/navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 9,  58 => 7,  55 => 6,  49 => 4,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header class=\"bg-dark p-3\">
    <nav class=\" d-flex justify-content-around w-100\">
        {% if is_granted( 'ROLE_ADMIN' ) %}
        <a href=\"{{path('user_index')}}\" class=\"nav-item text-decoration-none text-white fs-5\">Liste des utilisateurs</a>
        {% endif %}
        {% if is_granted( 'IS_AUTHENTICATED_FULLY' ) %}
        <a href=\"{{path('group_index')}}\" class=\"nav-item text-decoration-none text-white fs-5\">Liste des classes</a>
        {% endif %}
        <a href=\"{{ path('app_logout') }}\" class=\"btn btn-danger\"><i class=\"bi bi-door-open-fill\"></i> Déconnexion</a>
    </nav>
</header>", "partials/navbar.html.twig", "C:\\Users\\Utilisateur\\Desktop\\projet-maman-getion-eleve\\templates\\partials\\navbar.html.twig");
    }
}
