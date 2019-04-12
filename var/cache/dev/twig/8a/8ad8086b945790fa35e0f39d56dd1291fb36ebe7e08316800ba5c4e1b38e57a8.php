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

/* @tbbGsbVisiteur/Connexion/pageAccueil.html.twig */
class __TwigTemplate_6aa9ae6df904579d3a984b87a2187cf3d3a38d1210b3e3ed0a7bc8cac114efeb extends \Twig\Template
{
    private $source;

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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@tbbGsbVisiteur/Connexion/pageAccueil.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@tbbGsbVisiteur/Connexion/pageAccueil.html.twig"));

        // line 1
        echo "

";
        // line 3
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 3, $this->source); })()), "session", []), "get", [0 => "idVisiConnecte"], "method") != null)) {
            // line 4
            echo "    ";
            $this->loadTemplate("base.html.twig", "@tbbGsbVisiteur/Connexion/pageAccueil.html.twig", 4)->display($context);
            // line 5
            echo "    <div id=\"recap\">
        Bonjour <br/>

        votre identifiant : ";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "session", []), "get", [0 => "idVisiConnecte"], "method"), "html", null, true);
            echo "
        
        <br/>

        VOUS ETES CONNECTE EN TANT QUE VISITEUR
        <br/>
        <a href=\"..\\app_dev.php\\deconnexion\"><button>deconnexion</button></a>
    </div>
    <div id=\"callToActions\">
        <br/>
        <a href=\"..\\app_dev.php\\renseignerFiche\"><button id=\"btnMenu\">Renseigner une fiche de frais</button></a>
        <br/>
        <a href=\"..\\app_dev.php\\consulterFiche\"><button id=\"btnMenu\">Voir mes fiches de frais</button></a>
        <br/>
    </div>

";
        } else {
            // line 25
            echo "    <meta http-equiv=\"refresh\" content=\"0; url=..\\app_dev.php\\visiteur\" />
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@tbbGsbVisiteur/Connexion/pageAccueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 25,  55 => 8,  50 => 5,  47 => 4,  45 => 3,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("

{% if app.session.get('idVisiConnecte') != null %}
    {% include ('base.html.twig') %}
    <div id=\"recap\">
        Bonjour <br/>

        votre identifiant : {{ app.session.get('idVisiConnecte') }}
        
        <br/>

        VOUS ETES CONNECTE EN TANT QUE VISITEUR
        <br/>
        <a href=\"..\\app_dev.php\\deconnexion\"><button>deconnexion</button></a>
    </div>
    <div id=\"callToActions\">
        <br/>
        <a href=\"..\\app_dev.php\\renseignerFiche\"><button id=\"btnMenu\">Renseigner une fiche de frais</button></a>
        <br/>
        <a href=\"..\\app_dev.php\\consulterFiche\"><button id=\"btnMenu\">Voir mes fiches de frais</button></a>
        <br/>
    </div>

{%else %}
    <meta http-equiv=\"refresh\" content=\"0; url=..\\app_dev.php\\visiteur\" />
{% endif%}", "@tbbGsbVisiteur/Connexion/pageAccueil.html.twig", "/var/www/html/gsbVisiteur/src/tbbGsbVisiteurBundle/Resources/views/Connexion/pageAccueil.html.twig");
    }
}
