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

/* map/map_index.html.twig */
class __TwigTemplate_a88a55b1d75148b04731a7fccc4a9d0f1f0f062f4c8f3022f81269b27c8d8d2d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'navbar' => [$this, 'block_navbar'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "map/map_index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "map/map_index.html.twig"));

        // line 2
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["formComment"]) || array_key_exists("formComment", $context) ? $context["formComment"] : (function () { throw new RuntimeError('Variable "formComment" does not exist.', 2, $this->source); })()), [0 => "bootstrap_4_layout.html.twig"], true);
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "map/map_index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.7.1/dist/leaflet.css\"
          integrity=\"sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==\"
          crossorigin=\"\"/>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        // line 11
        echo "        ";
        $this->loadTemplate("include/_navbar.html.twig", "map/map_index.html.twig", 11)->display($context);
        // line 12
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 13
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "
        <div id=\"position\"></div>
        <div id=\"map\" class=\"map\"></div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 20
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 21
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"https://unpkg.com/leaflet@1.7.1/dist/leaflet.js\"
            integrity=\"sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==\"
            crossorigin=\"\"></script>
    <script> let map = L.map('map').setView([49.157376, 0.47716], 13);

        function initMap() {
            L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
                attribution: 'données © <a href=\"//osm.org/copyright\">OpenStreetMap</a>/ODbL - rendu <a href=\"//openstreetmap.fr\">OSM France</a>',
                minZoom: 5,
                maxZoom: 18
            }).addTo(map);
        }

        window.onload = function () {
            initMap();
        };
    </script>

    <script>
        function geolocation(position) {
            let userIcon = L.icon({
                iconUrl: '";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/marker/geolocation.png"), "html", null, true);
        echo "',
                //shadowUrl: '";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/marker/geolocation.png"), "html", null, true);
        echo "',
                iconSize: [41, 41],
                //shadowSize:   [50, 64],
                iconAnchor: [20, 41],
                //shadowAnchor: [32, 64],
                popupAnchor: [0, -40]
            });
            let userGeolocation = L.marker([position.coords.latitude, position.coords.longitude], {icon: userIcon})
                .addTo(map);
            userGeolocation.bindPopup(\"<p class=\\\"city-name text-center\\\">Vous êtes ici</p>\");
        }

        if(navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(geolocation);
            map.locate({setView: false, watch: true, maxZoom: 16});
        }

        let farmerIcon = L.icon({
            iconUrl: '";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/marker/farmer.png"), "html", null, true);
        echo "',
            //shadowUrl: '";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/marker/farmer.png"), "html", null, true);
        echo "',
            iconSize: [41, 41],
            //shadowSize:   [50, 64],
            iconAnchor: [20, 41],
            //shadowAnchor: [32, 64],
            popupAnchor: [0, -40]
        });

        let barnIcon = L.icon({
            iconUrl: '";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/marker/barn.png"), "html", null, true);
        echo "',
            //shadowUrl: '";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/marker/barn.png"), "html", null, true);
        echo "',
            iconSize: [41, 41],
            //shadowSize:   [50, 64],
            iconAnchor: [20, 41],
            //shadowAnchor: [32, 64],
            popupAnchor: [0, -40]
        });

        let coordinates = [];
        let categories = [];
        let category = '';
        let cityFarmers = [];
        let farmerPerCity = 0;
        let categoryList = '';
        let cityName = '';
        let farmSize = 0;
        ";
        // line 89
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["farmers"]) || array_key_exists("farmers", $context) ? $context["farmers"] : (function () { throw new RuntimeError('Variable "farmers" does not exist.', 89, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["farmer"]) {
            // line 90
            echo "        cityFarmers = [];
        categories = [];
        categoryList = '';
        farmerPerCity = 0;
        farmSize = 0;
        cityName = '';
        coordinates = [";
            // line 96
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["farmer"], "city", [], "any", false, false, false, 96), "latitude", [], "any", false, false, false, 96), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["farmer"], "city", [], "any", false, false, false, 96), "longitude", [], "any", false, false, false, 96), "html", null, true);
            echo "];
        if (typeof ";
            // line 97
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["farmer"], "city", [], "any", false, false, false, 97), "slug", [], "any", false, false, false, 97), "html", null, true);
            echo " == 'undefined') {
            let ";
            // line 98
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["farmer"], "city", [], "any", false, false, false, 98), "slug", [], "any", false, false, false, 98), "html", null, true);
            echo " = L.marker(coordinates, {icon: farmerIcon})
                .addTo(map);
            map.setView([46.3630104, 2.9846608], 6);

            ";
            // line 102
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["cities"]) || array_key_exists("cities", $context) ? $context["cities"] : (function () { throw new RuntimeError('Variable "cities" does not exist.', 102, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["city"]) {
                // line 103
                echo "                ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["city"], "slug", [], "any", false, false, false, 103), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["farmer"], "city", [], "any", false, false, false, 103), "slug", [], "any", false, false, false, 103)))) {
                    // line 104
                    echo "            cityName = \"";
                    echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["city"], "city", [], "any", false, false, false, 104)), "html", null, true);
                    echo "\";
                    ";
                    // line 105
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["city"], "farmers", [], "any", false, false, false, 105));
                    foreach ($context['_seq'] as $context["_key"] => $context["farmer"]) {
                        // line 106
                        echo "                        farmerPerCity++
                        farmSize += ";
                        // line 107
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["farmer"], "farmSize", [], "any", false, false, false, 107), "html", null, true);
                        echo ";
                        ";
                        // line 108
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["farmer"], "transactions", [], "any", false, false, false, 108));
                        foreach ($context['_seq'] as $context["_key"] => $context["transaction"]) {
                            // line 109
                            echo "                            if (categories.indexOf('";
                            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["transaction"], "product", [], "any", false, false, false, 109), "category", [], "any", false, false, false, 109), "name", [], "any", false, false, false, 109)), "html", null, true);
                            echo "') === -1)
                                categories.push(\"";
                            // line 110
                            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["transaction"], "product", [], "any", false, false, false, 110), "category", [], "any", false, false, false, 110), "name", [], "any", false, false, false, 110)), "html", null, true);
                            echo "\");
                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['transaction'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 112
                        echo "                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['farmer'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 113
                    echo "                ";
                }
                // line 114
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['city'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 115
            echo "
            category = categories.join(', ');

            if (category !== '') {
                categoryList = \"<img class=\\\"mr-1\\\" src=\\\"";
            // line 119
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/agronomy.png"), "html", null, true);
            echo "\\\">\" + category;
            }

            ";
            // line 122
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["farmer"], "city", [], "any", false, false, false, 122), "slug", [], "any", false, false, false, 122), "html", null, true);
            echo ".bindPopup(
                \"<p class=\\\"city-name text-center\\\">\" + cityName + \"</p>\" +
                \"<p><img class=\\\"text-light mr-1\\\" src=\\\"";
            // line 124
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/farmer.png"), "html", null, true);
            echo "\\\"> \" + farmerPerCity + \"</p>\" +
                \"<p><img class=\\\"mr-1\\\" src=\\\"";
            // line 125
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/farm.png"), "html", null, true);
            echo "\\\"> \" + farmSize/farmerPerCity + \" ha</p>\" +
                \"<p>\" + categoryList + \"</p>\"
            );
        }
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['farmer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 130
        echo "
        ";
        // line 131
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["buyers"]) || array_key_exists("buyers", $context) ? $context["buyers"] : (function () { throw new RuntimeError('Variable "buyers" does not exist.', 131, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["buyer"]) {
            // line 132
            echo "        coordinates = [";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["buyer"], "city", [], "any", false, false, false, 132), "latitude", [], "any", false, false, false, 132), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["buyer"], "city", [], "any", false, false, false, 132), "longitude", [], "any", false, false, false, 132), "html", null, true);
            echo "];

        let buyer";
            // line 134
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["buyer"], "id", [], "any", false, false, false, 134), "html", null, true);
            echo " = L.marker(coordinates, {icon: barnIcon})
            .addTo(map);

        buyer";
            // line 137
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["buyer"], "id", [], "any", false, false, false, 137), "html", null, true);
            echo ".bindPopup(
            \"<p class=\\\"city-name text-center\\\">\" + \"";
            // line 138
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["buyer"], "city", [], "any", false, false, false, 138), "city", [], "any", false, false, false, 138)), "html", null, true);
            echo "\" + \"</p>\" +
            \"<p><img class=\\\"mr-1\\\" src=\\\"";
            // line 139
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/barn.png"), "html", null, true);
            echo "\\\"> \" + \"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["buyer"], "type", [], "any", false, false, false, 139), "html", null, true);
            echo "\" + \"</p>\"
        );
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['buyer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 142
        echo "    </script>
    <script>
        const Esri_WorldImagery = L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}', {
            attribution: 'Tiles &copy; Esri &mdash; Source: Esri, i-cubed, USDA, USGS, AEX, GeoEye, Getmapping, Aerogrid, IGN, IGP, UPR-EGP, and the GIS User Community'
        });

        const OpenStreetMap_France = L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
            maxZoom: 20,
            attribution: '&copy; Openstreetmap France | &copy; <a href=\"https://www.openstreetmap.org/copyright\">OpenStreetMap</a> contributors'
        });

        const Stadia_Outdoors = L.tileLayer('https://tiles.stadiamaps.com/tiles/outdoors/{z}/{x}/{y}{r}.png', {
            maxZoom: 20,
            attribution: '&copy; <a href=\"https://stadiamaps.com/\">Stadia Maps</a>, &copy; <a href=\"https://openmaptiles.org/\">OpenMapTiles</a> &copy; <a href=\"http://openstreetmap.org\">OpenStreetMap</a> contributors'
        });

        const Stadia_AlidadeSmoothDark = L.tileLayer('https://tiles.stadiamaps.com/tiles/alidade_smooth_dark/{z}/{x}/{y}{r}.png', {
            maxZoom: 20,
            attribution: '&copy; <a href=\"https://stadiamaps.com/\">Stadia Maps</a>, &copy; <a href=\"https://openmaptiles.org/\">OpenMapTiles</a> &copy; <a href=\"http://openstreetmap.org\">OpenStreetMap</a> contributors'
        });

        let position1 = L.marker([47.878264, 2.9258559]);




        let basemaps = {
            \"Standard\": OpenStreetMap_France,
            \"Stadia\": Stadia_Outdoors,
            \"Sombre\": Stadia_AlidadeSmoothDark,
            \"Satellite\": Esri_WorldImagery,

        };

        let overlays = {
            // \"Layer1\": position1,

        }

        L.control.layers(basemaps,overlays,{collapsed:true}).addTo(map);

        //position1.on(\"add\",function(){
        //    position2.addTo(map);
        //});
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "map/map_index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  393 => 142,  382 => 139,  378 => 138,  374 => 137,  368 => 134,  360 => 132,  356 => 131,  353 => 130,  342 => 125,  338 => 124,  333 => 122,  327 => 119,  321 => 115,  315 => 114,  312 => 113,  306 => 112,  298 => 110,  293 => 109,  289 => 108,  285 => 107,  282 => 106,  278 => 105,  273 => 104,  270 => 103,  266 => 102,  259 => 98,  255 => 97,  249 => 96,  241 => 90,  237 => 89,  218 => 73,  214 => 72,  202 => 63,  198 => 62,  177 => 44,  173 => 43,  147 => 21,  137 => 20,  123 => 14,  113 => 13,  103 => 12,  100 => 11,  90 => 10,  74 => 5,  64 => 4,  53 => 1,  51 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% form_theme formComment 'bootstrap_4_layout.html.twig' %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.7.1/dist/leaflet.css\"
          integrity=\"sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==\"
          crossorigin=\"\"/>
{% endblock %}
    {% block navbar %}
        {% include 'include/_navbar.html.twig' %}
    {% endblock %}
{% block body %}

        <div id=\"position\"></div>
        <div id=\"map\" class=\"map\"></div>

{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"https://unpkg.com/leaflet@1.7.1/dist/leaflet.js\"
            integrity=\"sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==\"
            crossorigin=\"\"></script>
    <script> let map = L.map('map').setView([49.157376, 0.47716], 13);

        function initMap() {
            L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
                attribution: 'données © <a href=\"//osm.org/copyright\">OpenStreetMap</a>/ODbL - rendu <a href=\"//openstreetmap.fr\">OSM France</a>',
                minZoom: 5,
                maxZoom: 18
            }).addTo(map);
        }

        window.onload = function () {
            initMap();
        };
    </script>

    <script>
        function geolocation(position) {
            let userIcon = L.icon({
                iconUrl: '{{ asset('build/images/marker/geolocation.png') }}',
                //shadowUrl: '{{ asset('build/images/marker/geolocation.png') }}',
                iconSize: [41, 41],
                //shadowSize:   [50, 64],
                iconAnchor: [20, 41],
                //shadowAnchor: [32, 64],
                popupAnchor: [0, -40]
            });
            let userGeolocation = L.marker([position.coords.latitude, position.coords.longitude], {icon: userIcon})
                .addTo(map);
            userGeolocation.bindPopup(\"<p class=\\\"city-name text-center\\\">Vous êtes ici</p>\");
        }

        if(navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(geolocation);
            map.locate({setView: false, watch: true, maxZoom: 16});
        }

        let farmerIcon = L.icon({
            iconUrl: '{{ asset('build/images/marker/farmer.png') }}',
            //shadowUrl: '{{ asset('build/images/marker/farmer.png') }}',
            iconSize: [41, 41],
            //shadowSize:   [50, 64],
            iconAnchor: [20, 41],
            //shadowAnchor: [32, 64],
            popupAnchor: [0, -40]
        });

        let barnIcon = L.icon({
            iconUrl: '{{ asset('build/images/marker/barn.png') }}',
            //shadowUrl: '{{ asset('build/images/marker/barn.png') }}',
            iconSize: [41, 41],
            //shadowSize:   [50, 64],
            iconAnchor: [20, 41],
            //shadowAnchor: [32, 64],
            popupAnchor: [0, -40]
        });

        let coordinates = [];
        let categories = [];
        let category = '';
        let cityFarmers = [];
        let farmerPerCity = 0;
        let categoryList = '';
        let cityName = '';
        let farmSize = 0;
        {% for farmer in farmers %}
        cityFarmers = [];
        categories = [];
        categoryList = '';
        farmerPerCity = 0;
        farmSize = 0;
        cityName = '';
        coordinates = [{{ farmer.city.latitude }}, {{ farmer.city.longitude }}];
        if (typeof {{ farmer.city.slug }} == 'undefined') {
            let {{ farmer.city.slug }} = L.marker(coordinates, {icon: farmerIcon})
                .addTo(map);
            map.setView([46.3630104, 2.9846608], 6);

            {% for city in cities %}
                {% if city.slug == farmer.city.slug %}
            cityName = \"{{ city.city|title }}\";
                    {% for farmer in city.farmers %}
                        farmerPerCity++
                        farmSize += {{ farmer.farmSize }};
                        {% for transaction in farmer.transactions %}
                            if (categories.indexOf('{{ transaction.product.category.name|title }}') === -1)
                                categories.push(\"{{ transaction.product.category.name|title }}\");
                        {% endfor %}
                    {% endfor %}
                {% endif %}
            {% endfor %}

            category = categories.join(', ');

            if (category !== '') {
                categoryList = \"<img class=\\\"mr-1\\\" src=\\\"{{ asset('build/images/agronomy.png') }}\\\">\" + category;
            }

            {{ farmer.city.slug }}.bindPopup(
                \"<p class=\\\"city-name text-center\\\">\" + cityName + \"</p>\" +
                \"<p><img class=\\\"text-light mr-1\\\" src=\\\"{{ asset('build/images/farmer.png') }}\\\"> \" + farmerPerCity + \"</p>\" +
                \"<p><img class=\\\"mr-1\\\" src=\\\"{{ asset('build/images/farm.png') }}\\\"> \" + farmSize/farmerPerCity + \" ha</p>\" +
                \"<p>\" + categoryList + \"</p>\"
            );
        }
        {% endfor %}

        {% for buyer in buyers %}
        coordinates = [{{ buyer.city.latitude }}, {{ buyer.city.longitude }}];

        let buyer{{ buyer.id }} = L.marker(coordinates, {icon: barnIcon})
            .addTo(map);

        buyer{{ buyer.id }}.bindPopup(
            \"<p class=\\\"city-name text-center\\\">\" + \"{{ buyer.city.city|title }}\" + \"</p>\" +
            \"<p><img class=\\\"mr-1\\\" src=\\\"{{ asset('build/images/barn.png') }}\\\"> \" + \"{{ buyer.type }}\" + \"</p>\"
        );
        {% endfor %}
    </script>
    <script>
        const Esri_WorldImagery = L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}', {
            attribution: 'Tiles &copy; Esri &mdash; Source: Esri, i-cubed, USDA, USGS, AEX, GeoEye, Getmapping, Aerogrid, IGN, IGP, UPR-EGP, and the GIS User Community'
        });

        const OpenStreetMap_France = L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
            maxZoom: 20,
            attribution: '&copy; Openstreetmap France | &copy; <a href=\"https://www.openstreetmap.org/copyright\">OpenStreetMap</a> contributors'
        });

        const Stadia_Outdoors = L.tileLayer('https://tiles.stadiamaps.com/tiles/outdoors/{z}/{x}/{y}{r}.png', {
            maxZoom: 20,
            attribution: '&copy; <a href=\"https://stadiamaps.com/\">Stadia Maps</a>, &copy; <a href=\"https://openmaptiles.org/\">OpenMapTiles</a> &copy; <a href=\"http://openstreetmap.org\">OpenStreetMap</a> contributors'
        });

        const Stadia_AlidadeSmoothDark = L.tileLayer('https://tiles.stadiamaps.com/tiles/alidade_smooth_dark/{z}/{x}/{y}{r}.png', {
            maxZoom: 20,
            attribution: '&copy; <a href=\"https://stadiamaps.com/\">Stadia Maps</a>, &copy; <a href=\"https://openmaptiles.org/\">OpenMapTiles</a> &copy; <a href=\"http://openstreetmap.org\">OpenStreetMap</a> contributors'
        });

        let position1 = L.marker([47.878264, 2.9258559]);




        let basemaps = {
            \"Standard\": OpenStreetMap_France,
            \"Stadia\": Stadia_Outdoors,
            \"Sombre\": Stadia_AlidadeSmoothDark,
            \"Satellite\": Esri_WorldImagery,

        };

        let overlays = {
            // \"Layer1\": position1,

        }

        L.control.layers(basemaps,overlays,{collapsed:true}).addTo(map);

        //position1.on(\"add\",function(){
        //    position2.addTo(map);
        //});
    </script>
{% endblock %}
", "map/map_index.html.twig", "/home/maeva/hackaton2_comparateuragricole/templates/map/map_index.html.twig");
    }
}
