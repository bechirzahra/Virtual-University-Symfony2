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
        echo "    ";
        if ($this->env->getExtension('security')->isGranted("ROLE_ENSEIGNANT")) {
            // line 4
            echo "    <div class=\"gwlogo clearfix\">
    <div class=\"field field-name-field-logo field-type-image field-label-hidden\"><div class=\"field-items\"><div class=\"field-item even\"><img typeof=\"foaf:Image\" src=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/ulearn1.png"), "html", null, true);
            echo "\" width=\"323\" height=\"90\" alt=\"ULearn\" title=\"ULearn\" /></div></div>  

  </div>
    </div>
    ";
        }
        // line 10
        echo "
    ";
        // line 11
        if ($this->env->getExtension('security')->isGranted("ROLE_ETUDIANT")) {
            // line 12
            echo "    <div class=\"gwlogo clearfix\">
    <div class=\"field field-name-field-logo field-type-image field-label-hidden\"><div class=\"field-items\"><div class=\"field-item even\"><img typeof=\"foaf:Image\" src=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/EspaceEt.png"), "html", null, true);
            echo "\" width=\"323\" height=\"90\" alt=\"ULearn\" title=\"ULearn\" /></div></div>  

  </div>
    </div>
    ";
        }
        // line 18
        echo "    
    ";
        // line 19
        if ($this->env->getExtension('security')->isGranted("ROLE_CHEFENTREPRISE")) {
            // line 20
            echo "    <div class=\"gwlogo clearfix\">
    <div class=\"field field-name-field-logo field-type-image field-label-hidden\"><div class=\"field-items\"><div class=\"field-item even\"><img typeof=\"foaf:Image\" src=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/EspaceCh.png"), "html", null, true);
            echo "\" width=\"392\" height=\"90\" alt=\"ULearn\" title=\"Ulearn\" /></div></div>  

  </div>
    </div>
    ";
        }
        // line 26
        echo "    
     ";
        // line 27
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 28
            echo "    <div class=\"gwlogo clearfix\">
    <div class=\"field field-name-field-logo field-type-image field-label-hidden\"><div class=\"field-items\"><div class=\"field-item even\"><img typeof=\"foaf:Image\" src=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/EspaceAd.png"), "html", null, true);
            echo "\" width=\"323\" height=\"90\" alt=\"ULearn\" title=\"ULearn\" /></div></div>  

  </div>
    </div>
    ";
        }
    }

    // line 37
    public function block_nav($context, array $blocks = array())
    {
        // line 38
        if ($this->env->getExtension('security')->isGranted("ROLE_CHEFENTREPRISE")) {
            // line 39
            echo "      <div class=\"panel-panel panel-col-top\">
      <div class=\"inside\"><div class=\"panel-pane pane-gwu-primary-navigation\" >
  
      
  
  <div class=\"pane-content\">
    <div id=\"menu-wrapper\"><div id=\"menu-top\"><div class=\"menu-block-wrapper menu-block-2 menu-name-menu-division-menu parent-mlid-0 menu-level-1\">
  <ul class=\"menu\"><li class=\"first leaf has-children menu-mlid-784\"><span title=\"\"><a href=\"";
            // line 46
            echo $this->env->getExtension('routing')->getPath("homeCh");
            echo "\">Acceuil</a></span></li>
<li class=\"leaf has-children menu-mlid-785\"><span title=\"\"><a href=\"";
            // line 47
            echo $this->env->getExtension('routing')->getPath("symf_graphe_Pie");
            echo "\">Utilisateur</a></span></li>
<li class=\"leaf has-children menu-mlid-786\"><span title=\"\"><a href=\"";
            // line 48
            echo $this->env->getExtension('routing')->getPath("_grapheHistogramme");
            echo "\">Notes</a></span></li>
<li class=\"leaf has-children menu-mlid-787\"><span title=\"\"><a href=\"";
            // line 49
            echo $this->env->getExtension('routing')->getPath("Statistiques_sexe");
            echo "\">Homme/Femme</a></span></li>

</ul></div>

</div></div>  </div>

  
  </div>
</div>
    </div>
    ";
        }
        // line 60
        echo "
         ";
    }

    // line 63
    public function block_Erasebody($context, array $blocks = array())
    {
        // line 64
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>  
<script src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/highcharts.js"), "html", null, true);
        echo "\"></script> <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/exporting.js"), "html", null, true);
        echo "\"></script> <script type=\"text/javascript\">     ";
        echo $this->env->getExtension('highcharts_extension')->chart((isset($context["chart"]) ? $context["chart"] : $this->getContext($context, "chart")));
        echo " </script>  
<div id=\"piechart\" style=\"min-width: 400px; height: 400px; margin: 0 auto\"></div>";
        // line 66
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
        return array (  166 => 66,  158 => 65,  153 => 64,  150 => 63,  145 => 60,  131 => 49,  127 => 48,  123 => 47,  119 => 46,  110 => 39,  108 => 38,  105 => 37,  95 => 29,  92 => 28,  90 => 27,  87 => 26,  79 => 21,  76 => 20,  74 => 19,  71 => 18,  63 => 13,  60 => 12,  58 => 11,  55 => 10,  47 => 5,  44 => 4,  41 => 3,  38 => 2,  11 => 1,);
    }
}
