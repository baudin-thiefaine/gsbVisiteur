<?php

/* @tbbGsbVisiteur/ConsultationFiche/ConsultationFicheSelectionner.html.twig */
class __TwigTemplate_d4f6d659d3fd0f7232ce93e88eea4c0bd62aa7d717f0e700aa28f37451383dc9 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@tbbGsbVisiteur/ConsultationFiche/ConsultationFicheSelectionner.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@tbbGsbVisiteur/ConsultationFiche/ConsultationFicheSelectionner.html.twig"));

        // line 1
        echo "<h1>Fiche de ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new Twig_Error_Runtime('Variable "fiche" does not exist.', 1, $this->source); })()), "fiche", array()), "mois", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new Twig_Error_Runtime('Variable "fiche" does not exist.', 1, $this->source); })()), "fiche", array()), "annee", array()), "html", null, true);
        echo ".</h1>

<h2>Recapitulatif de votre fiche: </h2>

nombre de justificatifs : ";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new Twig_Error_Runtime('Variable "fiche" does not exist.', 5, $this->source); })()), "fiche", array()), "nbjustificatifs", array()), "html", null, true);
        echo "

<br/><br/>############### PARTIE DU RECAP DES FRAIS FORFAIT ##################################<br/><br/>

";
        // line 9
        if ( !twig_test_empty((isset($context["fraisForfait"]) || array_key_exists("fraisForfait", $context) ? $context["fraisForfait"] : (function () { throw new Twig_Error_Runtime('Variable "fraisForfait" does not exist.', 9, $this->source); })()))) {
            // line 10
            echo "<table>
    <tr><td>type de frais</td><td>quantite</td></tr>
";
        }
        // line 13
        echo "
";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fraisForfait"]) || array_key_exists("fraisForfait", $context) ? $context["fraisForfait"] : (function () { throw new Twig_Error_Runtime('Variable "fraisForfait" does not exist.', 14, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["unFraisForfait"]) {
            // line 15
            echo "    <tr>
    <td>";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new Twig_Error_Runtime('Variable "fiche" does not exist.', 16, $this->source); })()), "unFraisForfait", array()), "idFraisForfait", array()), "id", array()), "html", null, true);
            echo " </td><td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["unFraisForfait"], "quantite", array()), "html", null, true);
            echo "</td>
    </tr>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 19
            echo "        Vous n'avez aucun frais forfait.
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unFraisForfait'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        if ( !twig_test_empty((isset($context["fraisForfait"]) || array_key_exists("fraisForfait", $context) ? $context["fraisForfait"] : (function () { throw new Twig_Error_Runtime('Variable "fraisForfait" does not exist.', 21, $this->source); })()))) {
            // line 22
            echo "    </table>
";
        }
        // line 24
        echo "


<br/><br/>############### PARTIE DU RECAP DES FRAIS HORS FORFAIT ##########################<br/><br/>

";
        // line 29
        if ( !twig_test_empty((isset($context["fraisHorsForfait"]) || array_key_exists("fraisHorsForfait", $context) ? $context["fraisHorsForfait"] : (function () { throw new Twig_Error_Runtime('Variable "fraisHorsForfait" does not exist.', 29, $this->source); })()))) {
            // line 30
            echo "<table>
    <tr><td>libelle</td><td>montant</td><td>date</td></tr>
";
        }
        // line 33
        echo "
";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fraisHorsForfait"]) || array_key_exists("fraisHorsForfait", $context) ? $context["fraisHorsForfait"] : (function () { throw new Twig_Error_Runtime('Variable "fraisHorsForfait" does not exist.', 34, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["unFrais"]) {
            // line 35
            echo "    <tr>
    <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new Twig_Error_Runtime('Variable "fiche" does not exist.', 36, $this->source); })()), "unFrais", array()), "libelle", array()), "html", null, true);
            echo " </td><td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new Twig_Error_Runtime('Variable "fiche" does not exist.', 36, $this->source); })()), "unFrais", array()), "montant", array()), "html", null, true);
            echo "</td><td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new Twig_Error_Runtime('Variable "fiche" does not exist.', 36, $this->source); })()), "unFrais", array()), "date", array()), "html", null, true);
            echo "</td>
    </tr>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 39
            echo "        Vous n'avez aucun frais hors forfait.
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unFrais'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "

";
        // line 43
        if ( !twig_test_empty((isset($context["fraisHorsForfait"]) || array_key_exists("fraisHorsForfait", $context) ? $context["fraisHorsForfait"] : (function () { throw new Twig_Error_Runtime('Variable "fraisHorsForfait" does not exist.', 43, $this->source); })()))) {
            // line 44
            echo "    </table>
";
        }
        // line 46
        echo "<br/>
<a href=\"..\\app_dev.php\\index\">Retour à l'accueil</a>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@tbbGsbVisiteur/ConsultationFiche/ConsultationFicheSelectionner.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 46,  137 => 44,  135 => 43,  131 => 41,  124 => 39,  112 => 36,  109 => 35,  104 => 34,  101 => 33,  96 => 30,  94 => 29,  87 => 24,  83 => 22,  81 => 21,  74 => 19,  64 => 16,  61 => 15,  56 => 14,  53 => 13,  48 => 10,  46 => 9,  39 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1>Fiche de {{ fiche.fiche.mois }} {{ fiche.fiche.annee }}.</h1>

<h2>Recapitulatif de votre fiche: </h2>

nombre de justificatifs : {{fiche.fiche.nbjustificatifs}}

<br/><br/>############### PARTIE DU RECAP DES FRAIS FORFAIT ##################################<br/><br/>

{%if fraisForfait is not empty %}
<table>
    <tr><td>type de frais</td><td>quantite</td></tr>
{%endif%}

{% for unFraisForfait in fraisForfait %}
    <tr>
    <td>{{ fiche.unFraisForfait.idFraisForfait.id }} </td><td>{{ unFraisForfait.quantite }}</td>
    </tr>
    {%else%}
        Vous n'avez aucun frais forfait.
{%endfor%}
{%if fraisForfait is not empty %}
    </table>
{%endif%}



<br/><br/>############### PARTIE DU RECAP DES FRAIS HORS FORFAIT ##########################<br/><br/>

{%if fraisHorsForfait is not empty %}
<table>
    <tr><td>libelle</td><td>montant</td><td>date</td></tr>
{%endif%}

{% for unFrais in fraisHorsForfait %}
    <tr>
    <td>{{ fiche.unFrais.libelle }} </td><td>{{ fiche.unFrais.montant }}</td><td>{{ fiche.unFrais.date }}</td>
    </tr>
    {%else%}
        Vous n'avez aucun frais hors forfait.
{%endfor%}


{%if fraisHorsForfait is not empty %}
    </table>
{%endif%}
<br/>
<a href=\"..\\app_dev.php\\index\">Retour à l'accueil</a>", "@tbbGsbVisiteur/ConsultationFiche/ConsultationFicheSelectionner.html.twig", "/var/www/html/gsbVisiteur/src/tbbGsbVisiteurBundle/Resources/views/ConsultationFiche/ConsultationFicheSelectionner.html.twig");
    }
}
