<?php

/* @tbbGsbVisiteur/Connexion/validConnexion.html.twig */
class __TwigTemplate_fd41a331a91408ca2d4c20e1e4bd4ab88bc51f0cfc372bb3c59f77e33a703734 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@tbbGsbVisiteur/Connexion/validConnexion.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@tbbGsbVisiteur/Connexion/validConnexion.html.twig"));

        // line 1
        echo "
";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["infoConnexion"]) || array_key_exists("infoConnexion", $context) ? $context["infoConnexion"] : (function () { throw new Twig_Error_Runtime('Variable "infoConnexion" does not exist.', 2, $this->source); })()), "NomDUtilisateur", array()), "html", null, true);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@tbbGsbVisiteur/Connexion/validConnexion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{{ infoConnexion.NomDUtilisateur }}", "@tbbGsbVisiteur/Connexion/validConnexion.html.twig", "/var/www/html/gsbVisiteur/src/tbbGsbVisiteurBundle/Resources/views/Connexion/validConnexion.html.twig");
    }
}
