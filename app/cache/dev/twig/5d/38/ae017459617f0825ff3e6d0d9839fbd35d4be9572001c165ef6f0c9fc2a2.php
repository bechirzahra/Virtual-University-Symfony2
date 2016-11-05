<?php

/* MyAppUlearnBundle:Stage:listStagePdf.html.twig */
class __TwigTemplate_5d38ae017459617f0825ff3e6d0d9839fbd35d4be9572001c165ef6f0c9fc2a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "listStagePdf.html.twig

</br></br></br></br></br></br>

<h1>La liste des Stages</h1>
</br></br></br>
<table border=\"1\" width=\"100%\">
    <tr>
        <td> id </td>
        <td> Enreprise </td>
        <td> Duree </td>
        <td>Domaine</td>
        <td> Date </td>
        <td> Description </td>
       
         ";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stages"]) ? $context["stages"] : $this->getContext($context, "stages")));
        foreach ($context['_seq'] as $context["_key"] => $context["stage"]) {
            // line 17
            echo "        <tr>
            <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["stage"], "idstage", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["stage"], "nomentreprise", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["stage"], "duree", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["stage"], "domaine", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["stage"], "date", array()), "D/M/Y"), "html", null, true);
            echo "</td>
            <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["stage"], "description", array()), "html", null, true);
            echo "</td>
            
         

        </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "</tr>
</table>
<!DOCTYPE html>
<html>
<head>
<style>

h1 {
    color: firebrick;
    text-align: center;
    font-size: 50px;
    
}

td {
    font-family: \"Times New Roman\";
    font-size: 20px;
}

</style>
</head>
</html>";
    }

    public function getTemplateName()
    {
        return "MyAppUlearnBundle:Stage:listStagePdf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 29,  63 => 23,  59 => 22,  55 => 21,  51 => 20,  47 => 19,  43 => 18,  40 => 17,  36 => 16,  19 => 1,);
    }
}
