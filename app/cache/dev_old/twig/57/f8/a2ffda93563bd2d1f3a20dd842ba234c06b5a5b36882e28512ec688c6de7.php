<?php

/* SymfMyBundle:Faq:modifier.html.twig */
class __TwigTemplate_57f8a2ffda93563bd2d1f3a20dd842ba234c06b5a5b36882e28512ec688c6de7 extends Twig_Template
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
        echo "


\t<!--  start page-heading -->
\t<div id=\"page-heading\">
\t\t<h1>Modifiez</h1>
\t</div>

\t<table border=\"0\" width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" id=\"content-table\">
\t<tbody><tr>
\t\t<th rowspan=\"3\" class=\"sized\"><img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/faq/images/shared/side_shadowleft.jpg"), "html", null, true);
        echo "\" width=\"20\" height=\"300\" alt=\"\"></th>
\t\t<th class=\"topleft\"></th>
\t\t<td id=\"tbl-border-top\">&nbsp;</td>
\t\t<th class=\"topright\"></th>
\t\t<th rowspan=\"3\" class=\"sized\"><img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/faq/images/shared/side_shadowright.jpg"), "html", null, true);
        echo "\" width=\"20\" height=\"300\" alt=\"\"></th>
\t</tr>
\t<tr>
\t\t<td id=\"tbl-border-left\"></td>
\t\t<td>
\t\t<!--  start content-table-inner -->
\t\t<div id=\"content-table-inner\">
\t\t
\t\t<table border=\"0\" width=\"100%\" cellpadding=\"0\" cellspacing=\"0\">
\t\t<tbody><tr valign=\"top\">
\t\t<td>
\t\t
\t\t
\t\t\t<!--  start step-holder -->
\t\t\t
\t\t\t<!--  end step-holder -->
\t\t
\t\t\t<!-- start id-form -->
\t\t\t<form action=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("faq_modifier", array("id" => $this->getAttribute((isset($context["faq"]) ? $context["faq"] : $this->getContext($context, "faq")), "idFaq", array()))), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\">
\t\t\t
\t\t\t";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t\t";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "
\t\t\t<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"id-form\">
\t\t\t<tbody><tr>
\t\t\t\t<th valign=\"top\">";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "objet", array()), 'label');
        echo "</th>
\t\t\t\t<td>";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "objet", array()), 'widget', array("attr" => array("class" => "inp-form")));
        echo "</td>
\t\t\t\t<td></td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th valign=\"top\">";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contenu", array()), 'label');
        echo "</th>
\t\t\t\t<td>";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contenu", array()), 'widget', array("attr" => array("class" => "inp-form")));
        echo "</td>
\t\t\t\t
\t\t\t</tr>
\t\t\t
\t\t<tr>
\t\t\t<th>&nbsp;</th>
\t\t\t<td valign=\"top\">
\t\t\t\t<div>
\t\t\t\t\t<input type=\"submit\" value=\"Modifier\"/>
\t\t\t\t</div>
\t\t\t</td>
\t\t\t<td></td>
\t\t</tr>
\t\t</tbody>
\t\t</table>
\t\t
\t</form>

\t</td>
\t<td>

\t

\t</td>
</tr>
<tr>
<td>
<br/><br/><br/>
<a href=\"";
        // line 73
        echo $this->env->getExtension('routing')->getPath("faq_list");
        echo "\">retour à la liste</a>
<img src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/faq/images/shared/blank.gif"), "html", null, true);
        echo "\" width=\"695\" height=\"1\" alt=\"blank\"></td>
<td>
</td>
</tr>
</tbody></table>
 
<div class=\"clear\"></div>
 

</div>
<!--  end content-table-inner  -->
</td>
<td id=\"tbl-border-right\"></td>
</tr>
<tr>
\t<th class=\"sized bottomleft\"></th>
\t<td id=\"tbl-border-bottom\">&nbsp;</td>
\t<th class=\"sized bottomright\"></th>
</tr>
</tbody>
</table>
<div class=\"clear\">&nbsp;</div>

</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "SymfMyBundle:Faq:modifier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 74,  122 => 73,  91 => 45,  87 => 44,  80 => 40,  76 => 39,  70 => 36,  66 => 35,  59 => 33,  38 => 15,  31 => 11,  19 => 1,);
    }
}
