<?php

/* SymfGrapheBundle:Graphe:StatistiquesAdherents.html.twig */
class __TwigTemplate_6013859850411b120a1692bc0afa50d052fd835f0ccae94449eb5e64d3080118 extends Twig_Template
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

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        // line 5
        echo "
      <div class=\"panel-panel panel-col-top\">
      <div class=\"inside\"><div class=\"panel-pane pane-gwu-primary-navigation\" >
  
      
  
  <div class=\"pane-content\">
    <div id=\"menu-wrapper\"><div id=\"menu-top\"><div class=\"menu-block-wrapper menu-block-2 menu-name-menu-division-menu parent-mlid-0 menu-level-1\">
  <ul class=\"menu\"><li class=\"first leaf has-children menu-mlid-784\"><span title=\"\"><a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("Home");
        echo "\">Acceuil</a></span></li>
<li class=\"leaf has-children menu-mlid-785\"><span title=\"\"><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("symf_graphe_Pie");
        echo "\">Utilisateur</a></span></li>
<li class=\"leaf has-children menu-mlid-786\"><span title=\"\"><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("_grapheHistogramme");
        echo "\">Notes</a></span></li>
<li class=\"leaf has-children menu-mlid-787\"><span title=\"\"><a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("Statistiques_sexe");
        echo "\">Homme/Femme</a></span></li>

</ul></div>

</div></div>  </div>

  
  </div>
</div>
    </div>
         ";
    }

    // line 28
    public function block_Erasebody($context, array $blocks = array())
    {
        // line 29
        echo "
<script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/Chart.js"), "html", null, true);
        echo "\"></script>
<div>
<canvas id=\"canvas\" height=\"450\" width=\"450\"> </canvas>
<div id=\"lbl\" Style=\"float: left; width: 50%; padding-top: 40px;\">
\t<label Style=\"background:#1DD2AF; font-size: 10px ;\"for=\"inp\">&nbsp;&nbsp;&nbsp </label>&nbsp;&nbsp
\t<span>Le nombre de Femmes est :</span> &nbsp;&nbsp";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sadh"]) ? $context["sadh"] : $this->getContext($context, "sadh")), "sex", array()), "html", null, true);
        echo "<br><br>
\t
\t<label Style=\"background:#2C3E50; font-size: 10px ;\"for=\"inp\">&nbsp;&nbsp;&nbsp </label>&nbsp;&nbsp
\t<span> Le nombre d'hommes est :</span> &nbsp;&nbsp;";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["shadh"]) ? $context["shadh"] : $this->getContext($context, "shadh")), "sex", array()), "html", null, true);
        echo "
</div>\t
</div>
    
    <script>

\t\tvar pieData = [
\t\t
\t\t\t\t\t{
\t\t\t\t\t\tvalue: ";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sadh"]) ? $context["sadh"] : $this->getContext($context, "sadh")), "sex", array()), "html", null, true);
        echo ",
\t\t\t\t\t\tcolor:\"#1DD2AF\"
\t\t\t\t\t},
\t\t\t\t\t{
\t\t\t\t\t\tvalue: ";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["shadh"]) ? $context["shadh"] : $this->getContext($context, "shadh")), "sex", array()), "html", null, true);
        echo ",
\t\t\t\t\t\tcolor:\"#2C3E50\"
\t\t\t\t\t}
\t\t\t
\t\t\t];

\tvar myPie = new Chart(document.getElementById(\"canvas\").getContext(\"2d\")).Pie(pieData);
\t
\t</script>
        
        
        
\t
\t\t

 
<button onclick=\"history.back()\" class=\"back_button\">Retour</button>
    

";
    }

    public function getTemplateName()
    {
        return "SymfGrapheBundle:Graphe:StatistiquesAdherents.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 51,  109 => 47,  97 => 38,  91 => 35,  83 => 30,  80 => 29,  77 => 28,  62 => 16,  58 => 15,  54 => 14,  50 => 13,  40 => 5,  37 => 4,  11 => 1,);
    }
}
