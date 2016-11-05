<?php

/* MyAppUlearnBundle:Default:homestat.html.twig */
class __TwigTemplate_f1ea5dd3aa5ae9cf411c9b6ff436c7c5fee3f817e9191269256b7f4f5900b9c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        try {
            $this->parent = $this->env->loadTemplate("MyAppUlearnBundle::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(2);

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

    // line 3
    public function block_espace($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"gwlogo clearfix\">
    <div class=\"field field-name-field-logo field-type-image field-label-hidden\"><div class=\"field-items\"><div class=\"field-item even\"><img typeof=\"foaf:Image\" src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/ulearn.png"), "html", null, true);
        echo "\" width=\"100\" height=\"90\" alt=\"ULearn\" title=\"ULearn\" /></div></div>  

  </div>
    </div>
    ";
        // line 9
        if ($this->env->getExtension('security')->isGranted("ROLE_ENSEIGNANT")) {
            // line 10
            echo "    <div class=\"gwlogo clearfix\">
    <div class=\"field field-name-field-logo field-type-image field-label-hidden\"><div class=\"field-items\"><div class=\"field-item even\"><img typeof=\"foaf:Image\" src=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/ulearn1.png"), "html", null, true);
            echo "\" width=\"323\" height=\"90\" alt=\"ULearn\" title=\"ULearn\" /></div></div>  

  </div>
    </div>
    ";
        }
        // line 16
        echo "
    ";
        // line 17
        if ($this->env->getExtension('security')->isGranted("ROLE_ETUDIANT")) {
            // line 18
            echo "    <div class=\"gwlogo clearfix\">
    <div class=\"field field-name-field-logo field-type-image field-label-hidden\"><div class=\"field-items\"><div class=\"field-item even\"><img typeof=\"foaf:Image\" src=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/EspaceEt.png"), "html", null, true);
            echo "\" width=\"323\" height=\"90\" alt=\"ULearn\" title=\"ULearn\" /></div></div>  

  </div>
    </div>
    ";
        }
        // line 24
        echo "    
    ";
        // line 25
        if ($this->env->getExtension('security')->isGranted("ROLE_CHEFENTREPRISE")) {
            // line 26
            echo "    <div class=\"gwlogo clearfix\">
    <div class=\"field field-name-field-logo field-type-image field-label-hidden\"><div class=\"field-items\"><div class=\"field-item even\"><img typeof=\"foaf:Image\" src=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/EspaceCh.png"), "html", null, true);
            echo "\" width=\"392\" height=\"90\" alt=\"ULearn\" title=\"Ulearn\" /></div></div>  

  </div>
    </div>
    ";
        }
        // line 32
        echo "    
     ";
        // line 33
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 34
            echo "    <div class=\"gwlogo clearfix\">
    <div class=\"field field-name-field-logo field-type-image field-label-hidden\"><div class=\"field-items\"><div class=\"field-item even\"><img typeof=\"foaf:Image\" src=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/EspaceAd.png"), "html", null, true);
            echo "\" width=\"323\" height=\"90\" alt=\"ULearn\" title=\"ULearn\" /></div></div>  

  </div>
    </div>
    ";
        }
    }

    // line 44
    public function block_nav($context, array $blocks = array())
    {
        // line 45
        echo "     <div class=\"panel-panel panel-col-top\">
      <div class=\"inside\"><div class=\"panel-pane pane-gwu-primary-navigation\" >
  
      
  
  <div class=\"pane-content\">
    <div id=\"menu-wrapper\"><div id=\"menu-top\"><div class=\"menu-block-wrapper menu-block-2 menu-name-menu-division-menu parent-mlid-0 menu-level-1\">
  <ul class=\"menu\"><li class=\"first leaf has-children menu-mlid-784\"><span title=\"\"><a href=\"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("Home");
        echo "\">Acceuil</a></span></li>
<li class=\"leaf has-children menu-mlid-785\"><span title=\"\"><a href=\"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("symf_graphe_Pie");
        echo "\">Utilisateur</a></span></li>
<li class=\"leaf has-children menu-mlid-786\"><span title=\"\"><a href=\"";
        // line 54
        echo $this->env->getExtension('routing')->getPath("_grapheHistogramme");
        echo "\">Notes</a></span></li>
<li class=\"leaf has-children menu-mlid-787\"><span title=\"\"><a href=\"";
        // line 55
        echo $this->env->getExtension('routing')->getPath("Statistiques_sexe");
        echo "\">Homme/Femme</a></span></li>

</ul></div>

</div></div>  </div>

  
  </div>
</div>
    </div>
    
    ";
        // line 66
        if ($this->env->getExtension('security')->isGranted("ROLE_CHEFENTREPRISE")) {
            // line 67
            echo "
      <div class=\"panel-panel panel-col-top\">
      <div class=\"inside\"><div class=\"panel-pane pane-gwu-primary-navigation\" >
  
      
  
  <div class=\"pane-content\">
    <div id=\"menu-wrapper\"><div id=\"menu-top\"><div class=\"menu-block-wrapper menu-block-2 menu-name-menu-division-menu parent-mlid-0 menu-level-1\">
  <ul class=\"menu\"><li class=\"first leaf has-children menu-mlid-784\"><span title=\"\"><a href=\"";
            // line 75
            echo $this->env->getExtension('routing')->getPath("homeCh");
            echo "\">Acceuil</a></span></li>
<li class=\"leaf has-children menu-mlid-785\"><span title=\"\"><a href=\"";
            // line 76
            echo $this->env->getExtension('routing')->getPath("symf_graphe_Pie");
            echo "\">Utilisateur</a></span></li>
<li class=\"leaf has-children menu-mlid-786\"><span title=\"\"><a href=\"";
            // line 77
            echo $this->env->getExtension('routing')->getPath("_grapheHistogramme");
            echo "\">Notes</a></span></li>
<li class=\"leaf has-children menu-mlid-787\"><span title=\"\"><a href=\"";
            // line 78
            echo $this->env->getExtension('routing')->getPath("Statistiques_sexe");
            echo "\">Homme/Femme</a></span></li>

</ul></div>

</div></div>  </div>

  
  </div>
</div>
    </div>
    ";
        }
        // line 89
        echo "
         ";
    }

    // line 92
    public function block_Erasebody($context, array $blocks = array())
    {
        // line 93
        echo "    
    <div class=\"image\">
        <center><img typeof=\"foaf:Image\" src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/stat.png"), "html", null, true);
        echo "\" width=\"700\" height=\"378\"  /></center></div>


";
    }

    public function getTemplateName()
    {
        return "MyAppUlearnBundle:Default:homestat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 95,  198 => 93,  195 => 92,  190 => 89,  176 => 78,  172 => 77,  168 => 76,  164 => 75,  154 => 67,  152 => 66,  138 => 55,  134 => 54,  130 => 53,  126 => 52,  117 => 45,  114 => 44,  104 => 35,  101 => 34,  99 => 33,  96 => 32,  88 => 27,  85 => 26,  83 => 25,  80 => 24,  72 => 19,  69 => 18,  67 => 17,  64 => 16,  56 => 11,  53 => 10,  51 => 9,  44 => 5,  41 => 4,  38 => 3,  11 => 2,);
    }
}
