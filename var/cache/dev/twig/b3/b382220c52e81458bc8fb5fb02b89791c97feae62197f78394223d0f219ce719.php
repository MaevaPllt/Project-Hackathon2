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

/* include/_navbar_secondary.html.twig */
class __TwigTemplate_45361c1e7a8bd35645dbac6cd03fbd330ffb7833b583a2358d049f6adc6b530a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "include/_navbar_secondary.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "include/_navbar_secondary.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-light navbar-hight d-flex justify-content-between\" style=\"background-color: #5a9449;\">
    <a class=\"navbar-brand text-white\" href=\"";
        // line 2
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("map");
        echo "\">
        <span>ComparateurAgricole.com</span>
    </a>
";
        // line 10
        echo "        <p class=\"text-light m-0\">Bienvenue !</p>
";
        // line 12
        echo "</nav>


<nav class=\"navbar navbar-light navbar-down d-flex justify-content-between\" style=\"background-color: #346F32;\">

    <div class=\"m-2\">
        <a href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\" class=\"btn btn-outline-success text-white\"> Créer son compte</a>
    </div>

";
        // line 26
        echo "
    <div class=\"m-2\">
        ";
        // line 28
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "user", [], "any", false, false, false, 28)) {
            // line 29
            echo "            <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\" class=\"btn btn-outline-success text-white\"> Se déconnecter</a>
        ";
        } else {
            // line 31
            echo "            <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\" class=\"btn btn-outline-success text-white \"> Se connecter</a>
        ";
        }
        // line 33
        echo "    </div>

</nav>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "include/_navbar_secondary.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 33,  81 => 31,  75 => 29,  73 => 28,  69 => 26,  63 => 18,  55 => 12,  52 => 10,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-light navbar-hight d-flex justify-content-between\" style=\"background-color: #5a9449;\">
    <a class=\"navbar-brand text-white\" href=\"{{ path('map') }}\">
        <span>ComparateurAgricole.com</span>
    </a>
{#    {% if app.user %}#}
{#        <p class=\"text-light m-0\">Bienvenue Mme/Mr <strong>{{ app.user.lastname }}</strong>, vous êtes connecté en tant que#}
{#            <strong>{{ app.user.email }}</strong>#}
{#        </p>#}
{#    {% else %}#}
        <p class=\"text-light m-0\">Bienvenue !</p>
{#    {% endif %}#}
</nav>


<nav class=\"navbar navbar-light navbar-down d-flex justify-content-between\" style=\"background-color: #346F32;\">

    <div class=\"m-2\">
        <a href=\"{{ path('app_register') }}\" class=\"btn btn-outline-success text-white\"> Créer son compte</a>
    </div>

{#    <div>#}
{#        <h1>Les <a href=\"{{ path('about_us') }}\" class=\"wilders text-danger font-weight-bold text-decoration-none\"> wilders</a>#}
{#           sont dans le <strong class=\"pré text-success\">pré </strong>!#}
{#        </h1>#}
{#    </div>#}

    <div class=\"m-2\">
        {% if app.user %}
            <a href=\"{{ path('app_logout') }}\" class=\"btn btn-outline-success text-white\"> Se déconnecter</a>
        {% else %}
            <a href=\"{{ path('app_login') }}\" class=\"btn btn-outline-success text-white \"> Se connecter</a>
        {% endif %}
    </div>

</nav>
", "include/_navbar_secondary.html.twig", "/home/maeva/hackaton2_comparateuragricole/templates/include/_navbar_secondary.html.twig");
    }
}
