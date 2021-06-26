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
class __TwigTemplate_2779592dd4db9f2f3bd3a72c03da592a2587ed2e2d730da37f6cfd378ca2266f extends Template
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
        return array (  58 => 9,  52 => 7,  49 => 6,  43 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "partials/navbar.html.twig", "C:\\Users\\Utilisateur\\Desktop\\projet-maman-getion-eleve\\templates\\partials\\navbar.html.twig");
    }
}
