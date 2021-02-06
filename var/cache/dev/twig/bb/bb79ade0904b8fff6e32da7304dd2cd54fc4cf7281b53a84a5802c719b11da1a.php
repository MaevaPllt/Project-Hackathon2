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

/* include/_navbar.html.twig */
class __TwigTemplate_48a61c2fa9fade22ef3a4ef53a59f29e2bfe427ae91d15d14d49dc8452a6e5b3 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "include/_navbar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "include/_navbar.html.twig"));

        // line 1
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["formComment"]) || array_key_exists("formComment", $context) ? $context["formComment"] : (function () { throw new RuntimeError('Variable "formComment" does not exist.', 1, $this->source); })()), [0 => "bootstrap_4_layout.html.twig"], true);
        // line 2
        echo "
<nav class=\"navbar navbar-light navbar-hight d-flex justify-content-between\" style=\"background-color: #5a9449;\">
    <a class=\"navbar-brand text-white\" href=\"";
        // line 4
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("map");
        echo "\">
        <span>ComparateurAgricole.com</span>
    </a>
";
        // line 13
        echo "        <p class=\"text-light m-0 d-none d-md-block\">Bienvenue !</p>
";
        // line 15
        echo "</nav>


<nav class=\"navbar navbar-light navbar-down d-flex justify-content-between\" style=\"background-color: #346F32;\">

    <div id=\"mySidebar\" class=\"sidebar\">
        <a href=\"javascript:void(0)\" class=\"closebtn\" onclick=\"closeNav()\">×</a>
        <div class=\"accordion\" id=\"accordionExample\">
            <div class=\"card\">
                <div class=\"card-header\" id=\"headingOne\">
                    <h2 class=\"m-2\">
                        <button class=\"btn btn-link btn-block text-left text-uppercase\" type=\"button\" data-toggle=\"collapse\"
                                data-target=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
                            Filtrer par emplacement
                        </button>
                    </h2>
                </div>

                <div id=\"collapseOne\" class=\"collapse show\" aria-labelledby=\"headingOne\"
                     data-parent=\"#accordionExample\">
                    <div class=\"card-body\">
                        <div class=\"input-group mb-3\">
                            <div class=\"input-group-append\">
                                ";
        // line 38
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formCity"]) || array_key_exists("formCity", $context) ? $context["formCity"] : (function () { throw new RuntimeError('Variable "formCity" does not exist.', 38, $this->source); })()), 'form_start');
        echo "
                                <span class=\"input-group-text text-primary mt-3\"
                                      id=\"basic-addon2\">";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["formCity"]) || array_key_exists("formCity", $context) ? $context["formCity"] : (function () { throw new RuntimeError('Variable "formCity" does not exist.', 40, $this->source); })()), 'widget');
        echo "</span>
                            </div>
                        </div>
                        <button class=\"btn-form-city btn btn-primary mb-3\">
                            <img class=\"img-form-city\" src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/loupe.svg"), "html", null, true);
        echo "\">
                        </button>
                        ";
        // line 46
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formCity"]) || array_key_exists("formCity", $context) ? $context["formCity"] : (function () { throw new RuntimeError('Variable "formCity" does not exist.', 46, $this->source); })()), 'form_end');
        echo "
                    </div>
                    <div class=\"card-body\">
                        <div class=\"input-group mb-3 w-100\">
                            <div class=\"input-group-append\">
                                ";
        // line 51
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formDepartment"]) || array_key_exists("formDepartment", $context) ? $context["formDepartment"] : (function () { throw new RuntimeError('Variable "formDepartment" does not exist.', 51, $this->source); })()), 'form_start');
        echo "
                                <span class=\"input-group-text text-primary mt-3\" id=\"basic-addon2\">
                                    ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["formDepartment"]) || array_key_exists("formDepartment", $context) ? $context["formDepartment"] : (function () { throw new RuntimeError('Variable "formDepartment" does not exist.', 53, $this->source); })()), 'widget');
        echo "
                                </span>
                            </div>
                        </div>
                        <button class=\"btn-form-city btn btn-primary p-0 my-3\">
                            <img class=\"img-form-city\" src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/loupe.svg"), "html", null, true);
        echo "\">
                        </button>
                        ";
        // line 60
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formDepartment"]) || array_key_exists("formDepartment", $context) ? $context["formDepartment"] : (function () { throw new RuntimeError('Variable "formDepartment" does not exist.', 60, $this->source); })()), 'form_end');
        echo "
                    </div>
                </div>
            </div>
        </div>
        <div class=\"card\">
            <div class=\"card-header\" id=\"headingTwo\">
                <h2 class=\"m-2\">
                    <button class=\"btn btn-link btn-block text-left text-uppercase\" type=\"button\" data-toggle=\"collapse\"
                            data-target=\"#collapseTwo\" aria-expanded=\"false\" aria-controls=\"collapseTwo\">
                        Filtrer par ressources
                    </button>
                </h2>
            </div>
            <div id=\"collapseTwo\" class=\"collapse\" aria-labelledby=\"headingTwo\" data-parent=\"#accordionExample\">
                <div class=\"card-body\">
                    <div class=\"input-group mb-3\">
                        <div class=\"input-group-append\">
                    ";
        // line 78
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formByProduct"]) || array_key_exists("formByProduct", $context) ? $context["formByProduct"] : (function () { throw new RuntimeError('Variable "formByProduct" does not exist.', 78, $this->source); })()), 'form_start');
        echo "
                            <span class=\"input-group-text text-primary my-3\" id=\"basic-addon2\">
                                ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["formByProduct"]) || array_key_exists("formByProduct", $context) ? $context["formByProduct"] : (function () { throw new RuntimeError('Variable "formByProduct" does not exist.', 80, $this->source); })()), 'widget');
        echo " </span>
                        </div>
                    </div>
                    <button class=\"btn-form-city btn btn-primary p-0 align-items-center mb-3\">
                        <img class=\"img-form-city\" src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/loupe.svg"), "html", null, true);
        echo "\">
                    </button>
                    ";
        // line 86
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formByProduct"]) || array_key_exists("formByProduct", $context) ? $context["formByProduct"] : (function () { throw new RuntimeError('Variable "formByProduct" does not exist.', 86, $this->source); })()), 'form_end');
        echo "
                </div>
            </div>
        </div>
        <div class=\"my-4 col-lg-12 col-sm-8\">
            ";
        // line 91
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 91, $this->source); })()), "user", [], "any", false, false, false, 91)) {
            // line 92
            echo "                <div class=\"text-white mt-5 mb-5\">
                    ";
            // line 93
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formComment"]) || array_key_exists("formComment", $context) ? $context["formComment"] : (function () { throw new RuntimeError('Variable "formComment" does not exist.', 93, $this->source); })()), 'form_start');
            echo "
                    <div class=\"my-3 text-center\">
                        ";
            // line 95
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formComment"]) || array_key_exists("formComment", $context) ? $context["formComment"] : (function () { throw new RuntimeError('Variable "formComment" does not exist.', 95, $this->source); })()), "commentText", [], "any", false, false, false, 95), 'label', ["label" => "Votre commentaire"]);
            echo "
                        ";
            // line 96
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formComment"]) || array_key_exists("formComment", $context) ? $context["formComment"] : (function () { throw new RuntimeError('Variable "formComment" does not exist.', 96, $this->source); })()), "commentText", [], "any", false, false, false, 96), 'widget');
            echo "
                    </div>
                    <div class=\"my-3 text-center\">
                        ";
            // line 99
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formComment"]) || array_key_exists("formComment", $context) ? $context["formComment"] : (function () { throw new RuntimeError('Variable "formComment" does not exist.', 99, $this->source); })()), "rate", [], "any", false, false, false, 99), 'label', ["label" => "Votre note"]);
            echo "
                        ";
            // line 100
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formComment"]) || array_key_exists("formComment", $context) ? $context["formComment"] : (function () { throw new RuntimeError('Variable "formComment" does not exist.', 100, $this->source); })()), "rate", [], "any", false, false, false, 100), 'widget');
            echo "
                    </div>
                    <button class=\"btn btn-success mt-3 ml-5\">
                        ";
            // line 103
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Enregistrer"), "html", null, true);
            echo "</button>
                    ";
            // line 104
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formComment"]) || array_key_exists("formComment", $context) ? $context["formComment"] : (function () { throw new RuntimeError('Variable "formComment" does not exist.', 104, $this->source); })()), 'form_end');
            echo "
                </div>
            ";
        }
        // line 107
        echo "
            <div class=\"row d-flex justify-content-center\">
                ";
        // line 109
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new RuntimeError('Variable "comments" does not exist.', 109, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 110
            echo "                    <div class=\"comment d-flex flex-column m-2 \">
                        <p class=\"mb-0\">De :
                            <strong>";
            // line 112
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "author", [], "any", false, false, false, 112), "firstname", [], "any", false, false, false, 112), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "author", [], "any", false, false, false, 112), "lastname", [], "any", false, false, false, 112), "html", null, true);
            echo "</strong></p>
                        <p class=\"mb-0\">Note :
                            ";
            // line 114
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, $context["comment"], "rate", [], "any", false, false, false, 114)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 115
                echo "                                <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/star.svg"), "html", null, true);
                echo "\" class=\"stars-rate\" alt=\"\">
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 117
            echo "                        </p>
                        <p class=\"mb-0\">Commentaires : ";
            // line 118
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "commentText", [], "any", false, false, false, 118), "html", null, true);
            echo "</p>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 121
        echo "            </div>
        </div>
    </div>

    <div class=\"navbar\">
        <div id=\"main\">
            <button class=\"openbtn\" onclick=\"openNav()\">☰</button>
        </div>
    </div>

    <div>
        <h1 class=\"d-none d-md-inline\">Les <a href=\"";
        // line 132
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("about_us");
        echo "\" class=\"wilders text-danger font-weight-bold text-decoration-none\"> wilders</a>
            sont dans le <strong class=\"pré text-success\">pré </strong>!

        </h1>
    </div>

    <div class=\"m-2\">
        ";
        // line 139
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 139, $this->source); })()), "user", [], "any", false, false, false, 139)) {
            // line 140
            echo "            <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\" class=\"btn btn-outline-success text-white\"> Se déconnecter</a>
        ";
        } else {
            // line 142
            echo "            <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\" class=\"btn btn-outline-success text-white \"> Se connecter</a>
        ";
        }
        // line 144
        echo "    </div>


</nav>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "include/_navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  293 => 144,  287 => 142,  281 => 140,  279 => 139,  269 => 132,  256 => 121,  247 => 118,  244 => 117,  235 => 115,  231 => 114,  224 => 112,  220 => 110,  216 => 109,  212 => 107,  206 => 104,  202 => 103,  196 => 100,  192 => 99,  186 => 96,  182 => 95,  177 => 93,  174 => 92,  172 => 91,  164 => 86,  159 => 84,  152 => 80,  147 => 78,  126 => 60,  121 => 58,  113 => 53,  108 => 51,  100 => 46,  95 => 44,  88 => 40,  83 => 38,  58 => 15,  55 => 13,  49 => 4,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% form_theme formComment 'bootstrap_4_layout.html.twig' %}

<nav class=\"navbar navbar-light navbar-hight d-flex justify-content-between\" style=\"background-color: #5a9449;\">
    <a class=\"navbar-brand text-white\" href=\"{{ path('map') }}\">
        <span>ComparateurAgricole.com</span>
    </a>
{#    {% if app.user %}#}
{#        <p class=\"text-light m-0\">Bienvenue Mme/Mr <strong>{{ app.user.lastname }}</strong>, vous êtes connecté en tant#}
{#            que#}
{#            <strong>{{ app.user.email }}</strong>#}
{#        </p>#}
{#    {% else %}#}
        <p class=\"text-light m-0 d-none d-md-block\">Bienvenue !</p>
{#    {% endif %}#}
</nav>


<nav class=\"navbar navbar-light navbar-down d-flex justify-content-between\" style=\"background-color: #346F32;\">

    <div id=\"mySidebar\" class=\"sidebar\">
        <a href=\"javascript:void(0)\" class=\"closebtn\" onclick=\"closeNav()\">×</a>
        <div class=\"accordion\" id=\"accordionExample\">
            <div class=\"card\">
                <div class=\"card-header\" id=\"headingOne\">
                    <h2 class=\"m-2\">
                        <button class=\"btn btn-link btn-block text-left text-uppercase\" type=\"button\" data-toggle=\"collapse\"
                                data-target=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
                            Filtrer par emplacement
                        </button>
                    </h2>
                </div>

                <div id=\"collapseOne\" class=\"collapse show\" aria-labelledby=\"headingOne\"
                     data-parent=\"#accordionExample\">
                    <div class=\"card-body\">
                        <div class=\"input-group mb-3\">
                            <div class=\"input-group-append\">
                                {{ form_start(formCity) }}
                                <span class=\"input-group-text text-primary mt-3\"
                                      id=\"basic-addon2\">{{ form_widget(formCity) }}</span>
                            </div>
                        </div>
                        <button class=\"btn-form-city btn btn-primary mb-3\">
                            <img class=\"img-form-city\" src=\"{{ asset('build/images/loupe.svg') }}\">
                        </button>
                        {{ form_end(formCity) }}
                    </div>
                    <div class=\"card-body\">
                        <div class=\"input-group mb-3 w-100\">
                            <div class=\"input-group-append\">
                                {{ form_start(formDepartment) }}
                                <span class=\"input-group-text text-primary mt-3\" id=\"basic-addon2\">
                                    {{ form_widget(formDepartment) }}
                                </span>
                            </div>
                        </div>
                        <button class=\"btn-form-city btn btn-primary p-0 my-3\">
                            <img class=\"img-form-city\" src=\"{{ asset('build/images/loupe.svg') }}\">
                        </button>
                        {{ form_end(formDepartment) }}
                    </div>
                </div>
            </div>
        </div>
        <div class=\"card\">
            <div class=\"card-header\" id=\"headingTwo\">
                <h2 class=\"m-2\">
                    <button class=\"btn btn-link btn-block text-left text-uppercase\" type=\"button\" data-toggle=\"collapse\"
                            data-target=\"#collapseTwo\" aria-expanded=\"false\" aria-controls=\"collapseTwo\">
                        Filtrer par ressources
                    </button>
                </h2>
            </div>
            <div id=\"collapseTwo\" class=\"collapse\" aria-labelledby=\"headingTwo\" data-parent=\"#accordionExample\">
                <div class=\"card-body\">
                    <div class=\"input-group mb-3\">
                        <div class=\"input-group-append\">
                    {{ form_start(formByProduct) }}
                            <span class=\"input-group-text text-primary my-3\" id=\"basic-addon2\">
                                {{ form_widget(formByProduct) }} </span>
                        </div>
                    </div>
                    <button class=\"btn-form-city btn btn-primary p-0 align-items-center mb-3\">
                        <img class=\"img-form-city\" src=\"{{ asset('build/images/loupe.svg') }}\">
                    </button>
                    {{ form_end(formByProduct) }}
                </div>
            </div>
        </div>
        <div class=\"my-4 col-lg-12 col-sm-8\">
            {% if app.user %}
                <div class=\"text-white mt-5 mb-5\">
                    {{ form_start(formComment) }}
                    <div class=\"my-3 text-center\">
                        {{ form_label(formComment.commentText, 'Votre commentaire') }}
                        {{ form_widget(formComment.commentText) }}
                    </div>
                    <div class=\"my-3 text-center\">
                        {{ form_label(formComment.rate, 'Votre note') }}
                        {{ form_widget(formComment.rate) }}
                    </div>
                    <button class=\"btn btn-success mt-3 ml-5\">
                        {{ 'Enregistrer'|trans }}</button>
                    {{ form_end(formComment) }}
                </div>
            {% endif %}

            <div class=\"row d-flex justify-content-center\">
                {% for comment in comments %}
                    <div class=\"comment d-flex flex-column m-2 \">
                        <p class=\"mb-0\">De :
                            <strong>{{ comment.author.firstname }} {{ comment.author.lastname }}</strong></p>
                        <p class=\"mb-0\">Note :
                            {% for i in 1..comment.rate %}
                                <img src=\"{{ asset('build/images/star.svg') }}\" class=\"stars-rate\" alt=\"\">
                            {% endfor %}
                        </p>
                        <p class=\"mb-0\">Commentaires : {{ comment.commentText }}</p>
                    </div>
                {% endfor %}
            </div>
        </div>
    </div>

    <div class=\"navbar\">
        <div id=\"main\">
            <button class=\"openbtn\" onclick=\"openNav()\">☰</button>
        </div>
    </div>

    <div>
        <h1 class=\"d-none d-md-inline\">Les <a href=\"{{ path('about_us') }}\" class=\"wilders text-danger font-weight-bold text-decoration-none\"> wilders</a>
            sont dans le <strong class=\"pré text-success\">pré </strong>!

        </h1>
    </div>

    <div class=\"m-2\">
        {% if app.user %}
            <a href=\"{{ path('app_logout') }}\" class=\"btn btn-outline-success text-white\"> Se déconnecter</a>
        {% else %}
            <a href=\"{{ path('app_login') }}\" class=\"btn btn-outline-success text-white \"> Se connecter</a>
        {% endif %}
    </div>


</nav>
", "include/_navbar.html.twig", "/home/maeva/hackaton2_comparateuragricole/templates/include/_navbar.html.twig");
    }
}
