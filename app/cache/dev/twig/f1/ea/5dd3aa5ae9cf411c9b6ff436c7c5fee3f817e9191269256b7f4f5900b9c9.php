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
        echo "     ";
        if ((null === $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()))) {
            // line 5
            echo "    <div class=\"gwlogo clearfix\">
    <div class=\"field field-name-field-logo field-type-image field-label-hidden\"><div class=\"field-items\"><div class=\"field-item even\"><img typeof=\"foaf:Image\" src=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/ulearn.png"), "html", null, true);
            echo "\" width=\"100\" height=\"90\" alt=\"ULearn\" title=\"ULearn\" /></div></div>  

  </div>
    </div>
    ";
        }
        // line 11
        echo "    ";
        if ($this->env->getExtension('security')->isGranted("ROLE_ENSEIGNANT")) {
            // line 12
            echo "    <div class=\"gwlogo clearfix\">
    <div class=\"field field-name-field-logo field-type-image field-label-hidden\"><div class=\"field-items\"><div class=\"field-item even\"><img typeof=\"foaf:Image\" src=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/ulearn1.png"), "html", null, true);
            echo "\" width=\"323\" height=\"90\" alt=\"ULearn\" title=\"ULearn\" /></div></div>  

  </div>
    </div>
    ";
        }
        // line 18
        echo "
    ";
        // line 19
        if ($this->env->getExtension('security')->isGranted("ROLE_ETUDIANT")) {
            // line 20
            echo "    <div class=\"gwlogo clearfix\">
    <div class=\"field field-name-field-logo field-type-image field-label-hidden\"><div class=\"field-items\"><div class=\"field-item even\"><img typeof=\"foaf:Image\" src=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/EspaceEt.png"), "html", null, true);
            echo "\" width=\"323\" height=\"90\" alt=\"ULearn\" title=\"ULearn\" /></div></div>  

  </div>
    </div>
    ";
        }
        // line 26
        echo "    
    ";
        // line 27
        if ($this->env->getExtension('security')->isGranted("ROLE_CHEFENTREPRISE")) {
            // line 28
            echo "    <div class=\"gwlogo clearfix\">
    <div class=\"field field-name-field-logo field-type-image field-label-hidden\"><div class=\"field-items\"><div class=\"field-item even\"><img typeof=\"foaf:Image\" src=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/EspaceCh.png"), "html", null, true);
            echo "\" width=\"392\" height=\"90\" alt=\"ULearn\" title=\"Ulearn\" /></div></div>  

  </div>
    </div>
    ";
        }
        // line 34
        echo "    
     ";
        // line 35
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 36
            echo "    <div class=\"gwlogo clearfix\">
    <div class=\"field field-name-field-logo field-type-image field-label-hidden\"><div class=\"field-items\"><div class=\"field-item even\"><img typeof=\"foaf:Image\" src=\"";
            // line 37
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
        echo "    ";
        if ((null === $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()))) {
            // line 48
            echo "     <div class=\"panel-panel panel-col-top\">
      <div class=\"inside\"><div class=\"panel-pane pane-gwu-primary-navigation\" >
  
      
  
  <div class=\"pane-content\">
    <div id=\"menu-wrapper\"><div id=\"menu-top\"><div class=\"menu-block-wrapper menu-block-2 menu-name-menu-division-menu parent-mlid-0 menu-level-1\">
  <ul class=\"menu\"><li class=\"first leaf has-children menu-mlid-784\"><span title=\"\"><a href=\"";
            // line 55
            echo $this->env->getExtension('routing')->getPath("Home");
            echo "\">Acceuil</a></span></li>
<li class=\"leaf has-children menu-mlid-785\"><span title=\"\"><a href=\"";
            // line 56
            echo $this->env->getExtension('routing')->getPath("symf_graphe_Pie");
            echo "\">Utilisateur</a></span></li>
<li class=\"leaf has-children menu-mlid-786\"><span title=\"\"><a href=\"";
            // line 57
            echo $this->env->getExtension('routing')->getPath("_grapheHistogramme");
            echo "\">Notes</a></span></li>
<li class=\"leaf has-children menu-mlid-787\"><span title=\"\"><a href=\"";
            // line 58
            echo $this->env->getExtension('routing')->getPath("Statistiques_sexe");
            echo "\">Homme/Femme</a></span></li>

</ul></div>

</div></div>  </div>

  
  </div>
</div>
    </div>
    ";
        }
        // line 69
        echo "    ";
        if ($this->env->getExtension('security')->isGranted("ROLE_CHEFENTREPRISE")) {
            // line 70
            echo "
      <div class=\"panel-panel panel-col-top\">
      <div class=\"inside\"><div class=\"panel-pane pane-gwu-primary-navigation\" >
  
      
  
  <div class=\"pane-content\">
    <div id=\"menu-wrapper\"><div id=\"menu-top\"><div class=\"menu-block-wrapper menu-block-2 menu-name-menu-division-menu parent-mlid-0 menu-level-1\">
  <ul class=\"menu\"><li class=\"first leaf has-children menu-mlid-784\"><span title=\"\"><a href=\"";
            // line 78
            echo $this->env->getExtension('routing')->getPath("homeCh");
            echo "\">Acceuil</a></span></li>
<li class=\"leaf has-children menu-mlid-785\"><span title=\"\"><a href=\"";
            // line 79
            echo $this->env->getExtension('routing')->getPath("symf_graphe_Pie");
            echo "\">Utilisateur</a></span></li>
<li class=\"leaf has-children menu-mlid-786\"><span title=\"\"><a href=\"";
            // line 80
            echo $this->env->getExtension('routing')->getPath("_grapheHistogramme");
            echo "\">Notes</a></span></li>
<li class=\"leaf has-children menu-mlid-787\"><span title=\"\"><a href=\"";
            // line 81
            echo $this->env->getExtension('routing')->getPath("Statistiques_sexe");
            echo "\">Homme/Femme</a></span></li>

</ul></div>

</div></div>  </div>

  
  </div>
</div>
    </div>
    ";
        }
        // line 92
        echo "
         ";
    }

    // line 95
    public function block_Erasebody($context, array $blocks = array())
    {
        // line 96
        echo "    
    <div class=\"image\">
        <center><img typeof=\"foaf:Image\" src=\"";
        // line 98
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
        return array (  211 => 98,  207 => 96,  204 => 95,  199 => 92,  185 => 81,  181 => 80,  177 => 79,  173 => 78,  163 => 70,  160 => 69,  146 => 58,  142 => 57,  138 => 56,  134 => 55,  125 => 48,  122 => 47,  119 => 46,  109 => 37,  106 => 36,  104 => 35,  101 => 34,  93 => 29,  90 => 28,  88 => 27,  85 => 26,  77 => 21,  74 => 20,  72 => 19,  69 => 18,  61 => 13,  58 => 12,  55 => 11,  47 => 6,  44 => 5,  41 => 4,  38 => 3,  11 => 2,);
    }
}
