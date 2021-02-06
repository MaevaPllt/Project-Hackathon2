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

/* about_us.html.twig */
class __TwigTemplate_261a49734da30f9173f1c49582848ad0af466f3e5aeb27018bc54542629f41bb extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'navbar' => [$this, 'block_navbar'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "about_us.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "about_us.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "about_us.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        // line 4
        echo "    ";
        $this->loadTemplate("include/_navbar_secondary.html.twig", "about_us.html.twig", 4)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<section class=\"container-fluid\">
    <div class=\"title-background mt-5\">
        <h1 class=\"w-100 my-3 text-center\">A propos de nous</h1>
        <div class=\"text-center w-100\">
            <img class=\"green-paint\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/vert3.png"), "html", null, true);
        echo "\" alt=\"\">
        </div>
    </div>

    <div class=\"title-background mt-5\">
        <h2 class=\"w-100 my-3 ml-3\">Notre histoire</h2>
        <div class=\"w-100\">
            <img class=\"grey-paint\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/gris.png"), "html", null, true);
        echo "\" alt=\"\">
        </div>
    </div>
    <p class=\"p-lg-5 p-2 mb-0\">
        A la suite de leurs candidatures dans une émission que tous les français et utilisateurs connaissent,
        mettant en lien l'agriculture et l'amour, ces 4 agriculteurs ont bien trouvé l'amour. Après un épanouissement personnel
        dans leurs vies privées et amoureuses respectives, car ils ont trouvé leur moitié, leur dulcinée, nos 4 agriculteurs
        ont décidé d'aller encore plus loin et de rendre l'amour et l'opportunité qu'ils ont reçus.
        <br><br>
        Mettant en commun leurs ressources, leurs réseaux, leurs connaissances mais surtout leur amour pour l'agriculture
        ils ont construit cette application au couleur de leur métier dans le but de créer des liens entre les
        agriculteurs de la France entière avec des acheteurs potentiels.
        <br><br>
    </p>

    <div class=\"title-background\">
        <h2 class=\"w-100 my-3 ml-3\">Notre équipe</h2>
        <div class=\"w-100\">
            <img class=\"grey-paint\" src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/gris.png"), "html", null, true);
        echo "\" alt=\"\">
        </div>
    </div>
    <div class=\"group-img container-fluid row group-wild-farmers d-flex justify-content-center justify-content-lg-around my-3 mx-0 p-0\">
        <img class=\"wild-farmers col-5 col-sm-3 col-lg-2 px-0 m-2\" src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/agri1.png"), "html", null, true);
        echo "\" alt=\"\">
        <img class=\"wild-farmers col-5 col-sm-3 col-lg-2 px-0 m-2\" src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/agri2.png"), "html", null, true);
        echo "\" alt=\"\">
        <img class=\"wild-farmers col-5 col-sm-3 col-lg-2 px-0 m-2\" src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/agri3.png"), "html", null, true);
        echo "\" alt=\"\">
        <img class=\"wild-farmers col-5 col-sm-3 col-lg-2 px-0 m-2\" src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/agri4.png"), "html", null, true);
        echo "\" alt=\"\">
    </div>

</section>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "about_us.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 44,  142 => 43,  138 => 42,  134 => 41,  127 => 37,  106 => 19,  96 => 12,  90 => 8,  80 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block navbar %}
    {% include 'include/_navbar_secondary.html.twig' %}
{% endblock %}

{% block body %}
<section class=\"container-fluid\">
    <div class=\"title-background mt-5\">
        <h1 class=\"w-100 my-3 text-center\">A propos de nous</h1>
        <div class=\"text-center w-100\">
            <img class=\"green-paint\" src=\"{{ asset('build/images/vert3.png') }}\" alt=\"\">
        </div>
    </div>

    <div class=\"title-background mt-5\">
        <h2 class=\"w-100 my-3 ml-3\">Notre histoire</h2>
        <div class=\"w-100\">
            <img class=\"grey-paint\" src=\"{{ asset('build/images/gris.png') }}\" alt=\"\">
        </div>
    </div>
    <p class=\"p-lg-5 p-2 mb-0\">
        A la suite de leurs candidatures dans une émission que tous les français et utilisateurs connaissent,
        mettant en lien l'agriculture et l'amour, ces 4 agriculteurs ont bien trouvé l'amour. Après un épanouissement personnel
        dans leurs vies privées et amoureuses respectives, car ils ont trouvé leur moitié, leur dulcinée, nos 4 agriculteurs
        ont décidé d'aller encore plus loin et de rendre l'amour et l'opportunité qu'ils ont reçus.
        <br><br>
        Mettant en commun leurs ressources, leurs réseaux, leurs connaissances mais surtout leur amour pour l'agriculture
        ils ont construit cette application au couleur de leur métier dans le but de créer des liens entre les
        agriculteurs de la France entière avec des acheteurs potentiels.
        <br><br>
    </p>

    <div class=\"title-background\">
        <h2 class=\"w-100 my-3 ml-3\">Notre équipe</h2>
        <div class=\"w-100\">
            <img class=\"grey-paint\" src=\"{{ asset('build/images/gris.png') }}\" alt=\"\">
        </div>
    </div>
    <div class=\"group-img container-fluid row group-wild-farmers d-flex justify-content-center justify-content-lg-around my-3 mx-0 p-0\">
        <img class=\"wild-farmers col-5 col-sm-3 col-lg-2 px-0 m-2\" src=\"{{ asset('build/images/agri1.png') }}\" alt=\"\">
        <img class=\"wild-farmers col-5 col-sm-3 col-lg-2 px-0 m-2\" src=\"{{ asset('build/images/agri2.png') }}\" alt=\"\">
        <img class=\"wild-farmers col-5 col-sm-3 col-lg-2 px-0 m-2\" src=\"{{ asset('build/images/agri3.png') }}\" alt=\"\">
        <img class=\"wild-farmers col-5 col-sm-3 col-lg-2 px-0 m-2\" src=\"{{ asset('build/images/agri4.png') }}\" alt=\"\">
    </div>

</section>

{% endblock %}
", "about_us.html.twig", "/home/maeva/hackaton2_comparateuragricole/templates/about_us.html.twig");
    }
}
