<?php

/* SymfGrapheBundle:Graphe:histogramme.html.twig */
class __TwigTemplate_13d0a526b5ef6958ace2fce149e3a3373814c1831136f23d296053557b7bbc30 extends Twig_Template
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
            'nav' => array($this, 'block_nav'),
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

    // line 3
    public function block_nav($context, array $blocks = array())
    {
        // line 4
        echo "
      <div class=\"panel-panel panel-col-top\">
      <div class=\"inside\"><div class=\"panel-pane pane-gwu-primary-navigation\" >
  
      
  
  <div class=\"pane-content\">
    <div id=\"menu-wrapper\"><div id=\"menu-top\"><div class=\"menu-block-wrapper menu-block-2 menu-name-menu-division-menu parent-mlid-0 menu-level-1\">
  <ul class=\"menu\"><li class=\"first leaf has-children menu-mlid-784\"><span title=\"\"><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("Home");
        echo "\">Acceuil</a></span></li>
<li class=\"leaf has-children menu-mlid-785\"><span title=\"\"><a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("symf_graphe_Pie");
        echo "\">Utilisateur</a></span></li>
<li class=\"leaf has-children menu-mlid-786\"><span title=\"\"><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("_grapheHistogramme");
        echo "\">Notes</a></span></li>
<li class=\"leaf has-children menu-mlid-787\"><span title=\"\"><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("Statistiques_sexe");
        echo "\">Homme/Femme</a></span></li>

</ul></div>

</div></div>  </div>

  
  </div>
</div>
    </div>
         ";
    }

    // line 27
    public function block_Erasebody($context, array $blocks = array())
    {
        // line 28
        echo "   
<script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/highcharts.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/exporting.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">
";
        // line 33
        echo $this->env->getExtension('highcharts_extension')->chart((isset($context["chart"]) ? $context["chart"] : $this->getContext($context, "chart")));
        echo "
</script>
<div id=\"faded\">
    
    <div id=\"container\"style=\"min-width: 400px; height: 400px; margin: 0 auto\"></div>
</div> 
        
";
    }

    public function getTemplateName()
    {
        return "SymfGrapheBundle:Graphe:histogramme.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 33,  91 => 31,  87 => 30,  83 => 29,  80 => 28,  77 => 27,  62 => 15,  58 => 14,  54 => 13,  50 => 12,  40 => 4,  37 => 3,  11 => 1,);
    }
}
