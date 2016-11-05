<?php

/* SymfMyBundle:Faq:ajouter.html.twig */
class __TwigTemplate_5c475ba7de572744eb419bb0178355b53dcfb3d427361d4e1b1b62e28e92a591 extends Twig_Template
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
\t\t\t
\t\t\t<form action=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("faq_ajouter");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\">
\t\t\t";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t\t";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "
\t\t\t<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"id-form\">
\t\t\t<tbody><tr>
\t\t\t\t<th valign=\"top\">";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "objet", array()), 'label');
        echo "</th>
\t\t\t\t<td>";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "objet", array()), 'widget', array("attr" => array("class" => "inp-form")));
        echo "</td>
\t\t\t\t<td></td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th valign=\"top\">";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contenu", array()), 'label');
        echo "</th>
\t\t\t\t<td>";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contenu", array()), 'widget', array("attr" => array("class" => "inp-form")));
        echo "</td>
\t\t\t\t
\t\t\t</tr>
\t\t\t
\t\t<tr>
\t\t\t<th>&nbsp;</th>
\t\t\t<td valign=\"top\">
\t\t\t\t<div>
\t\t\t\t\t<input type=\"submit\" value=\"Ajouter\"/>
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
</td>
</tr>
<tr>
<td>
<br/><br/><br/>
<a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("faq_list");
        echo "\">retour à la liste</a>
<img src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/faq/images/shared/blank.gif"), "html", null, true);
        echo "\" width=\"695\" height=\"1\" alt=\"blank\"></td>
<td></td>
</tr>
</tbody></table>
 
<div class=\"clear\"></div>
 

</div>

<!--  end content-table-inner  -->
";
    }

    public function getTemplateName()
    {
        return "SymfMyBundle:Faq:ajouter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 40,  82 => 39,  54 => 14,  50 => 13,  43 => 9,  39 => 8,  33 => 5,  29 => 4,  23 => 3,  19 => 1,);
    }
}
