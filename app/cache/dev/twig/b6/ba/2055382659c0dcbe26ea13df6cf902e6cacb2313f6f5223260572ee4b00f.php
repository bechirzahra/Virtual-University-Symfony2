<?php

/* SymfGrapheBundle:Graphe:pie.html.twig */
class __TwigTemplate_b6ba2055382659c0dcbe26ea13df6cf902e6cacb2313f6f5223260572ee4b00f extends Twig_Template
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
            'espace' => array($this, 'block_espace'),
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

    // line 2
    public function block_espace($context, array $blocks = array())
    {
        // line 3
        echo "             ";
        if ((null === $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()))) {
            // line 4
            echo "
     <div class=\"gwlogo clearfix\">
    <div class=\"field field-name-field-logo field-type-image field-label-hidden\"><div class=\"field-items\"><div class=\"field-item even\"><img typeof=\"foaf:Image\" src=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/ulearn.png"), "html", null, true);
            echo "\" width=\"100\" height=\"90\" alt=\"ULearn\" title=\"ULearn\" /></div></div>  

  </div>
    </div>
        ";
        }
        // line 11
        echo "
    ";
        // line 12
        if ($this->env->getExtension('security')->isGranted("ROLE_ENSEIGNANT")) {
            // line 13
            echo "    <div class=\"gwlogo clearfix\">
    <div class=\"field field-name-field-logo field-type-image field-label-hidden\"><div class=\"field-items\"><div class=\"field-item even\"><img typeof=\"foaf:Image\" src=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/ulearn1.png"), "html", null, true);
            echo "\" width=\"323\" height=\"90\" alt=\"ULearn\" title=\"ULearn\" /></div></div>  

  </div>
    </div>
    ";
        }
        // line 19
        echo "
    ";
        // line 20
        if ($this->env->getExtension('security')->isGranted("ROLE_ETUDIANT")) {
            // line 21
            echo "    <div class=\"gwlogo clearfix\">
    <div class=\"field field-name-field-logo field-type-image field-label-hidden\"><div class=\"field-items\"><div class=\"field-item even\"><img typeof=\"foaf:Image\" src=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/EspaceEt.png"), "html", null, true);
            echo "\" width=\"323\" height=\"90\" alt=\"ULearn\" title=\"ULearn\" /></div></div>  

  </div>
    </div>
    ";
        }
        // line 27
        echo "    
    ";
        // line 28
        if ($this->env->getExtension('security')->isGranted("ROLE_CHEFENTREPRISE")) {
            // line 29
            echo "    <div class=\"gwlogo clearfix\">
    <div class=\"field field-name-field-logo field-type-image field-label-hidden\"><div class=\"field-items\"><div class=\"field-item even\"><img typeof=\"foaf:Image\" src=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/EspaceCh.png"), "html", null, true);
            echo "\" width=\"392\" height=\"90\" alt=\"ULearn\" title=\"Ulearn\" /></div></div>  

  </div>
    </div>
    ";
        }
        // line 35
        echo "    
     ";
        // line 36
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 37
            echo "    <div class=\"gwlogo clearfix\">
    <div class=\"field field-name-field-logo field-type-image field-label-hidden\"><div class=\"field-items\"><div class=\"field-item even\"><img typeof=\"foaf:Image\" src=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/EspaceAd.png"), "html", null, true);
            echo "\" width=\"323\" height=\"90\" alt=\"ULearn\" title=\"ULearn\" /></div></div>  

  </div>
    </div>
    ";
        }
    }

    // line 46
    public function block_nav($context, array $blocks = array())
    {
        // line 47
        echo "             ";
        if ((null === $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()))) {
            // line 48
            echo "
     <div class=\"panel-panel panel-col-top\">
      <div class=\"inside\"><div class=\"panel-pane pane-gwu-primary-navigation\" >
  
      
  
  <div class=\"pane-content\">
    <div id=\"menu-wrapper\"><div id=\"menu-top\"><div class=\"menu-block-wrapper menu-block-2 menu-name-menu-division-menu parent-mlid-0 menu-level-1\">
  <ul class=\"menu\"><li class=\"first leaf has-children menu-mlid-784\"><span title=\"\"><a href=\"";
            // line 56
            echo $this->env->getExtension('routing')->getPath("Home");
            echo "\">Acceuil</a></span></li>
<li class=\"leaf has-children menu-mlid-785\"><span title=\"\"><a href=\"";
            // line 57
            echo $this->env->getExtension('routing')->getPath("symf_graphe_Pie");
            echo "\">Utilisateur</a></span></li>
<li class=\"leaf has-children menu-mlid-786\"><span title=\"\"><a href=\"";
            // line 58
            echo $this->env->getExtension('routing')->getPath("_grapheHistogramme");
            echo "\">Notes</a></span></li>
<li class=\"leaf has-children menu-mlid-787\"><span title=\"\"><a href=\"";
            // line 59
            echo $this->env->getExtension('routing')->getPath("Statistiques_sexe");
            echo "\">Homme/Femme</a></span></li>

</ul></div>

</div></div>  </div>

  
  </div>
</div>
    </div>
        ";
        }
        // line 70
        echo "
";
        // line 71
        if ($this->env->getExtension('security')->isGranted("ROLE_CHEFENTREPRISE")) {
            // line 72
            echo "      <div class=\"panel-panel panel-col-top\">
      <div class=\"inside\"><div class=\"panel-pane pane-gwu-primary-navigation\" >
  
      
  
  <div class=\"pane-content\">
    <div id=\"menu-wrapper\"><div id=\"menu-top\"><div class=\"menu-block-wrapper menu-block-2 menu-name-menu-division-menu parent-mlid-0 menu-level-1\">
  <ul class=\"menu\"><li class=\"first leaf has-children menu-mlid-784\"><span title=\"\"><a href=\"";
            // line 79
            echo $this->env->getExtension('routing')->getPath("homeCh");
            echo "\">Acceuil</a></span></li>
<li class=\"leaf has-children menu-mlid-785\"><span title=\"\"><a href=\"";
            // line 80
            echo $this->env->getExtension('routing')->getPath("symf_graphe_Pie");
            echo "\">Utilisateur</a></span></li>
<li class=\"leaf has-children menu-mlid-786\"><span title=\"\"><a href=\"";
            // line 81
            echo $this->env->getExtension('routing')->getPath("_grapheHistogramme");
            echo "\">Notes</a></span></li>
<li class=\"leaf has-children menu-mlid-787\"><span title=\"\"><a href=\"";
            // line 82
            echo $this->env->getExtension('routing')->getPath("Statistiques_sexe");
            echo "\">Homme/Femme</a></span></li>

</ul></div>

</div></div>  </div>

  
  </div>
</div>
    </div>
    ";
        }
        // line 93
        echo "
         ";
    }

    // line 96
    public function block_Erasebody($context, array $blocks = array())
    {
        // line 97
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>  
<script src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/highcharts.js"), "html", null, true);
        echo "\"></script> <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/exporting.js"), "html", null, true);
        echo "\"></script> <script type=\"text/javascript\">     ";
        echo $this->env->getExtension('highcharts_extension')->chart((isset($context["chart"]) ? $context["chart"] : $this->getContext($context, "chart")));
        echo " </script>  
<div id=\"piechart\" style=\"min-width: 400px; height: 400px; margin: 0 auto\"></div>";
        // line 99
        echo " 
<script src=http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js 
type=\"text/javascript\"></script> 
<script src=\"//code.highcharts.com/4.0.1/highcharts.js\"></script> 
<script src=\"//code.highcharts.com/4.0.1/modules/exporting.js\"></script> 
";
    }

    public function getTemplateName()
    {
        return "SymfGrapheBundle:Graphe:pie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 99,  217 => 98,  212 => 97,  209 => 96,  204 => 93,  190 => 82,  186 => 81,  182 => 80,  178 => 79,  169 => 72,  167 => 71,  164 => 70,  150 => 59,  146 => 58,  142 => 57,  138 => 56,  128 => 48,  125 => 47,  122 => 46,  112 => 38,  109 => 37,  107 => 36,  104 => 35,  96 => 30,  93 => 29,  91 => 28,  88 => 27,  80 => 22,  77 => 21,  75 => 20,  72 => 19,  64 => 14,  61 => 13,  59 => 12,  56 => 11,  48 => 6,  44 => 4,  41 => 3,  38 => 2,  11 => 1,);
    }
}
