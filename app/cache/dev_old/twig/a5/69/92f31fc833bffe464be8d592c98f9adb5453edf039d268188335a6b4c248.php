<?php

/* MyAppUlearnBundle:Etudiant:homeEt.html.twig */
class __TwigTemplate_a56992f31fc833bffe464be8d592c98f9adb5453edf039d268188335a6b4c248 extends Twig_Template
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
    public function block_espace($context, array $blocks = array())
    {
        // line 5
        echo "<div class=\"gwlogo clearfix\">
";
        // line 6
        if ( !(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()))) {
            // line 7
            echo "    <div class=\"field field-name-field-logo field-type-image field-label-hidden\"><div class=\"field-items\"><div class=\"field-item even\"><img typeof=\"foaf:Image\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/EspaceEt.png"), "html", null, true);
            echo "\" width=\"323\" height=\"90\" alt=\"ULearn\" title=\"Ulearn\" /></div> </div></div>

";
        }
        // line 10
        echo "</div>
   ";
    }

    // line 13
    public function block_nav($context, array $blocks = array())
    {
        // line 14
        echo " <div class=\"panel-panel panel-col-top\">
      <div class=\"inside\"><div class=\"panel-pane pane-gwu-primary-navigation\" >
  
      
  
  <div class=\"pane-content\">
    <div id=\"menu-wrapper\"><div id=\"menu-top\"><div class=\"menu-block-wrapper menu-block-2 menu-name-menu-division-menu parent-mlid-0 menu-level-1\">
  <ul class=\"menu\">
      ";
        // line 22
        if ( !(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()))) {
            // line 23
            echo "<li class=\"first leaf has-children menu-mlid-784\"><span title=\"\"><a href=\"";
            echo $this->env->getExtension('routing')->getPath("homeEt");
            echo "\">Acceuil</a></span></li>
<li class=\"leaf has-children menu-mlid-785\"><span title=\"\"><a href=\"";
            // line 24
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
            echo "\">Profil</a></span></li>
<li class=\"leaf has-children menu-mlid-786\"><span title=\"\"><a href=\"";
            // line 25
            echo $this->env->getExtension('routing')->getPath("my_app_cours_homepage");
            echo "\">Cours</a></span></li>
<li class=\"leaf has-children menu-mlid-787\"><span title=\"\"><a href=\"";
            // line 26
            echo $this->env->getExtension('routing')->getPath("testA");
            echo "\">Examen</a></span></li>
<li class=\"last leaf has-children menu-mlid-1594\"><span title=\"\"><a href=\"";
            // line 27
            echo $this->env->getExtension('routing')->getPath("listStageEt");
            echo "\">Stage</a></span></li>
<li class=\"last leaf has-children menu-mlid-1598\"><span title=\"\"><a href=\"";
            // line 28
            echo $this->env->getExtension('routing')->getPath("listC");
            echo "\">Evaluation</a></span></li>



  
      ";
        }
        // line 34
        echo "
</ul>
            </div>

</div></div>  </div>

  
  </div>
</div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "MyAppUlearnBundle:Etudiant:homeEt.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 34,  93 => 28,  89 => 27,  85 => 26,  81 => 25,  77 => 24,  72 => 23,  70 => 22,  60 => 14,  57 => 13,  52 => 10,  45 => 7,  43 => 6,  40 => 5,  37 => 4,  11 => 2,);
    }
}
