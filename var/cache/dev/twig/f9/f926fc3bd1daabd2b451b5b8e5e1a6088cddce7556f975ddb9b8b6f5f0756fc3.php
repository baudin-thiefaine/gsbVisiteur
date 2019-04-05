<?php

/* @tbbGsbVisiteur/RenseignerFiche/pageTest.html.twig */
class __TwigTemplate_f47116b9e0949d8bfaa18de4fdb404f719c59d4d4c722c37cf374c14fb5c9f11 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@tbbGsbVisiteur/RenseignerFiche/pageTest.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@tbbGsbVisiteur/RenseignerFiche/pageTest.html.twig"));

        // line 1
        echo "<h1>Fiche de ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new Twig_Error_Runtime('Variable "fiche" does not exist.', 1, $this->source); })()), "mois", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new Twig_Error_Runtime('Variable "fiche" does not exist.', 1, $this->source); })()), "annee", array()), "html", null, true);
        echo ".</h1>

<h2>Recapitulatif de votre fiche: </h2>

nombre de justificatifs : ";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fiche"]) || array_key_exists("fiche", $context) ? $context["fiche"] : (function () { throw new Twig_Error_Runtime('Variable "fiche" does not exist.', 5, $this->source); })()), "nbjustificatifs", array()), "html", null, true);
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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["unFraisForfait"], "idFraisForfait", array()), "id", array()), "html", null, true);
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
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fraisHorsForfait"]) || array_key_exists("fraisHorsForfait", $context) ? $context["fraisHorsForfait"] : (function () { throw new Twig_Error_Runtime('Variable "fraisHorsForfait" does not exist.', 35, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["unFrais"]) {
            // line 36
            echo "    <tr>
    <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["unFrais"], "libelle", array()), "html", null, true);
            echo " </td><td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["unFrais"], "montant", array()), "html", null, true);
            echo "</td><td>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["unFrais"], "date", array()), "Y-m-d"), "html", null, true);
            echo "</td>
    </tr>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 40
            echo "        Vous n'avez aucun frais hors forfait.
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unFrais'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "

";
        // line 44
        if ( !twig_test_empty((isset($context["fraisHorsForfait"]) || array_key_exists("fraisHorsForfait", $context) ? $context["fraisHorsForfait"] : (function () { throw new Twig_Error_Runtime('Variable "fraisHorsForfait" does not exist.', 44, $this->source); })()))) {
            // line 45
            echo "    </table>
";
        }
        // line 47
        echo "


<h2>Ajouter des frais forfait</h2>
";
        // line 52
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formFraisForfait"]) || array_key_exists("formFraisForfait", $context) ? $context["formFraisForfait"] : (function () { throw new Twig_Error_Runtime('Variable "formFraisForfait" does not exist.', 52, $this->source); })()), 'form');
        echo " 



<h2>Ajouter des frais hors forfait</h2>
";
        // line 58
        echo "
";
        // line 59
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formFraisHorsForfait"]) || array_key_exists("formFraisHorsForfait", $context) ? $context["formFraisHorsForfait"] : (function () { throw new Twig_Error_Runtime('Variable "formFraisHorsForfait" does not exist.', 59, $this->source); })()), 'form');
        echo "
<br/>
<a href=\"..\\app_dev.php\\index\">Retour à l'accueil</a>



";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@tbbGsbVisiteur/RenseignerFiche/pageTest.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 59,  156 => 58,  148 => 52,  142 => 47,  138 => 45,  136 => 44,  132 => 42,  125 => 40,  113 => 37,  110 => 36,  105 => 35,  101 => 33,  96 => 30,  94 => 29,  87 => 24,  83 => 22,  81 => 21,  74 => 19,  64 => 16,  61 => 15,  56 => 14,  53 => 13,  48 => 10,  46 => 9,  39 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1>Fiche de {{ fiche.mois }} {{ fiche.annee }}.</h1>

<h2>Recapitulatif de votre fiche: </h2>

nombre de justificatifs : {{fiche.nbjustificatifs}}

<br/><br/>############### PARTIE DU RECAP DES FRAIS FORFAIT ##################################<br/><br/>

{%if fraisForfait is not empty %}
<table>
    <tr><td>type de frais</td><td>quantite</td></tr>
{%endif%}

{% for unFraisForfait in fraisForfait %}
    <tr>
    <td>{{ unFraisForfait.idFraisForfait.id }} </td><td>{{ unFraisForfait.quantite }}</td>
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
    <td>{{ unFrais.libelle }} </td><td>{{ unFrais.montant }}</td><td>{{ unFrais.date | date('Y-m-d') }}</td>
    </tr>
    {%else%}
        Vous n'avez aucun frais hors forfait.
{%endfor%}


{%if fraisHorsForfait is not empty %}
    </table>
{%endif%}



<h2>Ajouter des frais forfait</h2>
{# ajouter formulaire de saisie d'un frais forfait. Ce form devra renvoyer sur cette page apres traitement #}
{{form(formFraisForfait)}} 



<h2>Ajouter des frais hors forfait</h2>
{# ajouter formulaire de saisie d'un frais hors forfait. Ce form devra renvoyer sur cette page apres traitement #}

{{form(formFraisHorsForfait)}}
<br/>
<a href=\"..\\app_dev.php\\index\">Retour à l'accueil</a>



", "@tbbGsbVisiteur/RenseignerFiche/pageTest.html.twig", "/var/www/html/gsbVisiteur/src/tbbGsbVisiteurBundle/Resources/views/RenseignerFiche/pageTest.html.twig");
    }
}
