<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_d5133063e4208574057df7d6d5efba73173a3f2c10bbe385fb58badc16a49bc9 extends Twig_Template
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

    // line 3
    public function block_espace($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if ($this->env->getExtension('security')->isGranted("ROLE_ENSEIGNANT")) {
            // line 5
            echo "    <div class=\"gwlogo clearfix\">
    <div class=\"field field-name-field-logo field-type-image field-label-hidden\"><div class=\"field-items\"><div class=\"field-item even\"><img typeof=\"foaf:Image\" src=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/ulearn1.png"), "html", null, true);
            echo "\" width=\"323\" height=\"90\" alt=\"ULearn\" title=\"ULearn\" /></div></div>  

  </div>
    </div>
    ";
        }
        // line 11
        echo "
    ";
        // line 12
        if ($this->env->getExtension('security')->isGranted("ROLE_ETUDIANT")) {
            // line 13
            echo "    <div class=\"gwlogo clearfix\">
    <div class=\"field field-name-field-logo field-type-image field-label-hidden\"><div class=\"field-items\"><div class=\"field-item even\"><img typeof=\"foaf:Image\" src=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/EspaceEt.png"), "html", null, true);
            echo "\" width=\"323\" height=\"90\" alt=\"ULearn\" title=\"ULearn\" /></div></div>  

  </div>
    </div>
    ";
        }
        // line 19
        echo "    
    ";
        // line 20
        if ($this->env->getExtension('security')->isGranted("ROLE_CHEFENTREPRISE")) {
            // line 21
            echo "    <div class=\"gwlogo clearfix\">
    <div class=\"field field-name-field-logo field-type-image field-label-hidden\"><div class=\"field-items\"><div class=\"field-item even\"><img typeof=\"foaf:Image\" src=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/EspaceCh.png"), "html", null, true);
            echo "\" width=\"392\" height=\"90\" alt=\"ULearn\" title=\"Ulearn\" /></div></div>  

  </div>
    </div>
    ";
        }
        // line 27
        echo "    
     ";
        // line 28
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 29
            echo "    <div class=\"gwlogo clearfix\">
    <div class=\"field field-name-field-logo field-type-image field-label-hidden\"><div class=\"field-items\"><div class=\"field-item even\"><img typeof=\"foaf:Image\" src=\"";
            // line 30
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
        echo "       ";
        if ($this->env->getExtension('security')->isGranted("ROLE_CHEFENTREPRISE")) {
            // line 39
            echo "
      <div class=\"panel-panel panel-col-top\">
      <div class=\"inside\"><div class=\"panel-pane pane-gwu-primary-navigation\" >
  
      
  
  <div class=\"pane-content\">
    <div id=\"menu-wrapper\"><div id=\"menu-top\"><div class=\"menu-block-wrapper menu-block-2 menu-name-menu-division-menu parent-mlid-0 menu-level-1\">
  <ul class=\"menu\">
      ";
            // line 48
            if ( !(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()))) {
                // line 49
                echo "<li class=\"first leaf has-children menu-mlid-784\"><span title=\"\"><a href=\"";
                echo $this->env->getExtension('routing')->getPath("homeCh");
                echo "\">Acceuil</a></span></li>
<li class=\"leaf has-children menu-mlid-785\"><span title=\"\"><a href=\"";
                // line 50
                echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
                echo "\">Profil</a></span></li>
<li class=\"leaf has-children menu-mlid-786\"><span title=\"\"><a href=\"";
                // line 51
                echo $this->env->getExtension('routing')->getPath("Home");
                echo "\">Cours</a></span></li>
<li class=\"leaf has-children menu-mlid-787\"><span title=\"\"><a href=\"";
                // line 52
                echo $this->env->getExtension('routing')->getPath("faq_lisetudiant");
                echo "\">Faq</a></span></li>
<li class=\"leaf has-children menu-mlid-1594\"><span title=\"\"><a href=\"";
                // line 53
                echo $this->env->getExtension('routing')->getPath("homestat");
                echo "\">Statistiques</a></span></li>
<li class=\"last leaf has-children menu-mlid-1598\"><span title=\"\"><a href=\"";
                // line 54
                echo $this->env->getExtension('routing')->getPath("listStage");
                echo "\">Stage</a></span></li>

  
      ";
            }
            // line 58
            echo "
</ul>
            </div>

</div></div>  </div>

  
  </div>
</div>
    </div>
      ";
        }
        // line 69
        echo "   ";
        if ($this->env->getExtension('security')->isGranted("ROLE_ETUDIANT")) {
            // line 70
            echo "<div class=\"panel-panel panel-col-top\">
      <div class=\"inside\"><div class=\"panel-pane pane-gwu-primary-navigation\" >
  
      
  
  <div class=\"pane-content\">
    <div id=\"menu-wrapper\"><div id=\"menu-top\"><div class=\"menu-block-wrapper menu-block-2 menu-name-menu-division-menu parent-mlid-0 menu-level-1\">
  <ul class=\"menu\">
      ";
            // line 78
            if ( !(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()))) {
                // line 79
                echo "<li class=\"first leaf has-children menu-mlid-784\"><span title=\"\"><a href=\"";
                echo $this->env->getExtension('routing')->getPath("homeEt");
                echo "\">Acceuil</a></span></li>
<li class=\"leaf has-children menu-mlid-785\"><span title=\"\"><a href=\"";
                // line 80
                echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
                echo "\">Profil</a></span></li>
<li class=\"leaf has-children menu-mlid-786\"><span title=\"\"><a href=\"";
                // line 81
                echo $this->env->getExtension('routing')->getPath("my_app_cours_homepage");
                echo "\">Cours</a></span></li>
<li class=\"leaf has-children menu-mlid-787\"><span title=\"\"><a href=\"";
                // line 82
                echo $this->env->getExtension('routing')->getPath("testA");
                echo "\">Examen</a></span></li>
<li class=\"last leaf has-children menu-mlid-1594\"><span title=\"\"><a href=\"";
                // line 83
                echo $this->env->getExtension('routing')->getPath("listStageEt");
                echo "\">Stage</a></span></li>
<li class=\"last leaf has-children menu-mlid-1598\"><span title=\"\"><a href=\"";
                // line 84
                echo $this->env->getExtension('routing')->getPath("listC");
                echo "\">Evaluation</a></span></li>
  
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

    // line 163
    public function block_Erasebody($context, array $blocks = array())
    {
        // line 164
        $this->env->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  334 => 164,  331 => 163,  325 => 158,  312 => 147,  305 => 143,  301 => 142,  297 => 141,  293 => 140,  288 => 139,  286 => 138,  276 => 130,  274 => 129,  271 => 128,  256 => 115,  247 => 109,  243 => 108,  239 => 107,  234 => 106,  232 => 105,  222 => 97,  220 => 96,  217 => 95,  207 => 87,  201 => 84,  197 => 83,  193 => 82,  189 => 81,  185 => 80,  180 => 79,  178 => 78,  168 => 70,  165 => 69,  152 => 58,  145 => 54,  141 => 53,  137 => 52,  133 => 51,  129 => 50,  124 => 49,  122 => 48,  111 => 39,  108 => 38,  105 => 37,  95 => 30,  92 => 29,  90 => 28,  87 => 27,  79 => 22,  76 => 21,  74 => 20,  71 => 19,  63 => 14,  60 => 13,  58 => 12,  55 => 11,  47 => 6,  44 => 5,  41 => 4,  38 => 3,  11 => 1,);
    }
}
