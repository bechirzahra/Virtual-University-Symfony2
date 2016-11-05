<?php

/* SymfMyBundle:Faq:list_adh.html.twig */
class __TwigTemplate_4f32c004bf4bf602ced9bf69f35eabc86ae0a5aff72216204c20811b1a761d25 extends Twig_Template
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
        echo "\t<!--  start page-heading -->
\t<div id=\"page-heading\">
\t\t<h1>Comment faire ?</h1>
\t</div>
\t<!-- end page-heading -->
\t
\t";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["faqs"]) ? $context["faqs"] : $this->getContext($context, "faqs")));
        foreach ($context['_seq'] as $context["_key"] => $context["faq"]) {
            // line 8
            echo "\t\t<h2>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["faq"], "objet", array()), "html", null, true);
            echo "</h2>
\t\t<div>";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["faq"], "contenu", array()), "html", null, true);
            echo "</div>
\t\t<br/>
\t\t<br/>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['faq'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "
</div>
<!--  end content -->
<div class=\"clear\">&nbsp;</div>";
    }

    public function getTemplateName()
    {
        return "SymfMyBundle:Faq:list_adh.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 13,  36 => 9,  31 => 8,  27 => 7,  19 => 1,);
    }
}
