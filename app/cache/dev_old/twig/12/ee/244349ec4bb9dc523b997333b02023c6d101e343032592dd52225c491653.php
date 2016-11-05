<?php

/* SymfGrapheBundle:Graphe:LineChart.html.twig */
class __TwigTemplate_12ee244349ec4bb9dc523b997333b02023c6d101e343032592dd52225c491653 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("MyAppUlearnBundle::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'Erasebody' => array($this, 'block_Erasebody'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MyAppUlearnBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_Erasebody($context, array $blocks = array())
    {
        // line 3
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>  
<script src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/highcharts.js"), "html", null, true);
        echo "\"></script> <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/exporting.js"), "html", null, true);
        echo "\"></script> <script type=\"text/javascript\">     ";
        echo $this->env->getExtension('highcharts_extension')->chart((isset($context["chart"]) ? $context["chart"] : $this->getContext($context, "chart")));
        echo " </script>  
<div id=\"linechart\" style=\"min-width: 400px; height: 400px; margin: 0 auto\"></div>

<script src=http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js 
type=\"text/javascript\"></script> 
<script src=\"//code.highcharts.com/4.0.1/highcharts.js\"></script> 
<script src=\"//code.highcharts.com/4.0.1/modules/exporting.js\"></script> 
";
    }

    public function getTemplateName()
    {
        return "SymfGrapheBundle:Graphe:LineChart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 4,  39 => 3,  36 => 2,  11 => 1,);
    }
}
