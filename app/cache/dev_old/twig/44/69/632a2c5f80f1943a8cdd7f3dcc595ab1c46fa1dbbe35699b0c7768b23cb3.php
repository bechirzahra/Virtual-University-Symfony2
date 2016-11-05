<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_4469632a2c5f80f1943a8cdd7f3dcc595ab1c46fa1dbbe35699b0c7768b23cb3 extends Twig_Template
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

    // line 36
    public function block_nav($context, array $blocks = array())
    {
        // line 37
        echo "       ";
        if ($this->env->getExtension('security')->isGranted("ROLE_CHEFENTREPRISE")) {
            // line 38
            echo "
      <div class=\"panel-panel panel-col-top\">
      <div class=\"inside\"><div class=\"panel-pane pane-gwu-primary-navigation\" >
  
      
  
  <div class=\"pane-content\">
    <div id=\"menu-wrapper\"><div id=\"menu-top\"><div class=\"menu-block-wrapper menu-block-2 menu-name-menu-division-menu parent-mlid-0 menu-level-1\">
  <ul class=\"menu\">
      ";
            // line 47
            if ( !(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()))) {
                // line 48
                echo "<li class=\"first leaf has-children menu-mlid-784\"><span title=\"\"><a href=\"";
                echo $this->env->getExtension('routing')->getPath("homeCh");
                echo "\">Acceuil</a></span></li>
<li class=\"leaf has-children menu-mlid-785\"><span title=\"\"><a href=\"";
                // line 49
                echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
                echo "\">Profil</a></span></li>
<li class=\"leaf has-children menu-mlid-786\"><span title=\"\"><a href=\"";
                // line 50
                echo $this->env->getExtension('routing')->getPath("Home");
                echo "\">Cours</a></span></li>
<li class=\"leaf has-children menu-mlid-787\"><span title=\"\"><a href=\"";
                // line 51
                echo $this->env->getExtension('routing')->getPath("faq_lisetudiant");
                echo "\">Faq</a></span></li>
<li class=\"leaf has-children menu-mlid-1594\"><span title=\"\"><a href=\"";
                // line 52
                echo $this->env->getExtension('routing')->getPath("homestat");
                echo "\">Statistiques</a></span></li>
<li class=\"last leaf has-children menu-mlid-1598\"><span title=\"\"><a href=\"";
                // line 53
                echo $this->env->getExtension('routing')->getPath("listStage");
                echo "\">Stage</a></span></li>

  
      ";
            }
            // line 57
            echo "
</ul>
            </div>

</div></div>  </div>

  
  </div>
</div>
    </div>
      ";
        }
        // line 68
        echo "   ";
        if ($this->env->getExtension('security')->isGranted("ROLE_ETUDIANT")) {
            // line 69
            echo "<div class=\"panel-panel panel-col-top\">
      <div class=\"inside\"><div class=\"panel-pane pane-gwu-primary-navigation\" >
  
      
  
  <div class=\"pane-content\">
    <div id=\"menu-wrapper\"><div id=\"menu-top\"><div class=\"menu-block-wrapper menu-block-2 menu-name-menu-division-menu parent-mlid-0 menu-level-1\">
  <ul class=\"menu\">
      ";
            // line 77
            if ( !(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()))) {
                // line 78
                echo "<li class=\"first leaf has-children menu-mlid-784\"><span title=\"\"><a href=\"";
                echo $this->env->getExtension('routing')->getPath("homeEt");
                echo "\">Acceuil</a></span></li>
<li class=\"leaf has-children menu-mlid-785\"><span title=\"\"><a href=\"";
                // line 79
                echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
                echo "\">Profil</a></span></li>
<li class=\"leaf has-children menu-mlid-786\"><span title=\"\"><a href=\"";
                // line 80
                echo $this->env->getExtension('routing')->getPath("Home");
                echo "\">Cours</a></span></li>
<li class=\"leaf has-children menu-mlid-1594\"><span title=\"\"><a href=\"\">Examen</a></span></li>
<li class=\"last leaf has-children menu-mlid-1598\"><span title=\"\"><a href=\"";
                // line 82
                echo $this->env->getExtension('routing')->getPath("listStageEt");
                echo "\">Stage</a></span></li>


  
      ";
            }
            // line 87
            echo "
</ul>
            </div>

</div></div>  </div>
  </div>
</div>  </div>
      ";
        }
        // line 95
        echo "
         ";
        // line 96
        if ($this->env->getExtension('security')->isGranted("ROLE_ENSEIGNANT")) {
            // line 97
            echo "             <div class=\"panel-panel panel-col-top\">
      <div class=\"inside\"><div class=\"panel-pane pane-gwu-primary-navigation\" >
  
      
  
  <div class=\"pane-content\">
    <div id=\"menu-wrapper\"><div id=\"menu-top\"><div class=\"menu-block-wrapper menu-block-2 menu-name-menu-division-menu parent-mlid-0 menu-level-1\">
  <ul class=\"menu\">
      ";
            // line 105
            if ( !(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()))) {
                // line 106
                echo "<li class=\"first leaf has-children menu-mlid-784\"><span title=\"\"><a href=\"";
                echo $this->env->getExtension('routing')->getPath("homeEns");
                echo "\">Acceuil</a></span></li>
<li class=\"leaf has-children menu-mlid-785\"><span title=\"\"><a href=\"";
                // line 107
                echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
                echo "\">Profil</a></span></li>
<li class=\"leaf has-children menu-mlid-786\"><span title=\"\"><a href=\"";
                // line 108
                echo $this->env->getExtension('routing')->getPath("my_app_cours_UploadCours");
                echo "\">Cours</a></span></li>
<li class=\"leaf has-children menu-mlid-787\"><span title=\"\"><a href=\"";
                // line 109
                echo $this->env->getExtension('routing')->getPath("ListeExamens");
                echo "\">Examen</a></span></li>



  
      ";
            }
            // line 115
            echo "
</ul>
            </div>

</div></div>  </div>

  
  </div>
</div>
    </div>

             
      ";
        }
        // line 128
        echo "      
     ";
        // line 129
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 130
            echo "         <div class=\"panel-panel panel-col-top\">
      <div class=\"inside\"><div class=\"panel-pane pane-gwu-primary-navigation\" >
  
      
  
  <div class=\"pane-content\">
    <div id=\"menu-wrapper\"><div id=\"menu-top\"><div class=\"menu-block-wrapper menu-block-2 menu-name-menu-division-menu parent-mlid-0 menu-level-1\">
  <ul class=\"menu\">
      ";
            // line 138
            if ( !(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()))) {
                // line 139
                echo "<li class=\"first leaf has-children menu-mlid-784\"><span title=\"\"><a href=\"";
                echo $this->env->getExtension('routing')->getPath("homeAd");
                echo "\">Acceuil</a></span></li>
<li class=\"leaf has-children menu-mlid-785\"><span title=\"\"><a href=\"";
                // line 140
                echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
                echo "\">Profil</a></span></li>
<li class=\"leaf has-children menu-mlid-787\"><span title=\"\"><a href=\"";
                // line 141
                echo $this->env->getExtension('routing')->getPath("faq_lisetudiant");
                echo "\">Faq</a></span></li>
<li class=\"leaf has-children menu-mlid-1594\"><span title=\"\"><a href=\"";
                // line 142
                echo $this->env->getExtension('routing')->getPath("homestat");
                echo "\">Statistiques</a></span></li>
<li class=\"last leaf has-children menu-mlid-1598\"><span title=\"\"><a href=\"";
                // line 143
                echo $this->env->getExtension('routing')->getPath("listUser");
                echo "\">Demande d'inscription</a></span></li>

  
      ";
            }
            // line 147
            echo "
</ul>
            </div>

</div></div>  </div>

  
  </div>
</div>
    </div>
      ";
        }
        // line 158
        echo "
      
";
    }

    // line 162
    public function block_Erasebody($context, array $blocks = array())
    {
        // line 163
        $this->env->loadTemplate("FOSUserBundle:Profile:show_content.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  329 => 163,  326 => 162,  320 => 158,  307 => 147,  300 => 143,  296 => 142,  292 => 141,  288 => 140,  283 => 139,  281 => 138,  271 => 130,  269 => 129,  266 => 128,  251 => 115,  242 => 109,  238 => 108,  234 => 107,  229 => 106,  227 => 105,  217 => 97,  215 => 96,  212 => 95,  202 => 87,  194 => 82,  189 => 80,  185 => 79,  180 => 78,  178 => 77,  168 => 69,  165 => 68,  152 => 57,  145 => 53,  141 => 52,  137 => 51,  133 => 50,  129 => 49,  124 => 48,  122 => 47,  111 => 38,  108 => 37,  105 => 36,  95 => 29,  92 => 28,  90 => 27,  87 => 26,  79 => 21,  76 => 20,  74 => 19,  71 => 18,  63 => 13,  60 => 12,  58 => 11,  55 => 10,  47 => 5,  44 => 4,  41 => 3,  38 => 2,  11 => 1,);
    }
}
