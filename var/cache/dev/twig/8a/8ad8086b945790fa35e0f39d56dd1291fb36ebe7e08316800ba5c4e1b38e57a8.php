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
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1, $this->source); })()), "session", []), "get", [0 => "idVisiConnecte"], "method") != null)) {
            // line 2
            echo "Bonjour <br/>


votre identifiant : ";
            // line 5
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 5, $this->source); })()), "session", []), "get", [0 => "idVisiConnecte"], "method"), "html", null, true);
            echo "

<br/>

VOUS ETES CONNECTE EN TANT QUE VISITEUR

<br/>
<a href=\"..\\app_dev.php\\renseignerFiche\">Renseigner une fiche de frais</a>
<br/>
<a href=\"..\\app_dev.php\\consulterFiche\">Voir mes fiches de frais</a>
<br/>

<a href=\"..\\app_dev.php\\deconnexion\">deconnexion</a>



";
        } else {
            // line 22
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
        return array (  68 => 22,  48 => 5,  43 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if app.session.get('idVisiConnecte') != null %}
Bonjour <br/>


votre identifiant : {{ app.session.get('idVisiConnecte') }}

<br/>

VOUS ETES CONNECTE EN TANT QUE VISITEUR

<br/>
<a href=\"..\\app_dev.php\\renseignerFiche\">Renseigner une fiche de frais</a>
<br/>
<a href=\"..\\app_dev.php\\consulterFiche\">Voir mes fiches de frais</a>
<br/>

<a href=\"..\\app_dev.php\\deconnexion\">deconnexion</a>



{%else %}
    <meta http-equiv=\"refresh\" content=\"0; url=..\\app_dev.php\\visiteur\" />
{% endif%}", "@tbbGsbVisiteur/Connexion/pageAccueil.html.twig", "/var/www/html/gsbVisiteur/src/tbbGsbVisiteurBundle/Resources/views/Connexion/pageAccueil.html.twig");
    }
}
