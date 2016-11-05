<?php

/* MyAppUlearnBundle:ChefEntreprise:homeCh.html.twig */
class __TwigTemplate_3308b6ca0cd379795df7628e12a8d103c9287dcc3824ca71fe24f131ac6d2b6e extends Twig_Template
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
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/EspaceCh.png"), "html", null, true);
            echo "\" width=\"392\" height=\"90\" alt=\"ULearn\" title=\"Ulearn\" /></div> </div></div>

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
        echo "
      <div class=\"panel-panel panel-col-top\">
      <div class=\"inside\"><div class=\"panel-pane pane-gwu-primary-navigation\" >
  
      
  
  <div class=\"pane-content\">
    <div id=\"menu-wrapper\"><div id=\"menu-top\"><div class=\"menu-block-wrapper menu-block-2 menu-name-menu-division-menu parent-mlid-0 menu-level-1\">
  <ul class=\"menu\">
      ";
        // line 23
        if ( !(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()))) {
            // line 24
            echo "<li class=\"first leaf has-children menu-mlid-784\"><span title=\"\"><a href=\"";
            echo $this->env->getExtension('routing')->getPath("homeCh");
            echo "\">Acceuil</a></span></li>
<li class=\"leaf has-children menu-mlid-785\"><span title=\"\"><a href=\"";
            // line 25
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
            echo "\">Profil</a></span></li>
<li class=\"leaf has-children menu-mlid-786\"><span title=\"\"><a href=\"";
            // line 26
            echo $this->env->getExtension('routing')->getPath("Home");
            echo "\">Cours</a></span></li>
<li class=\"leaf has-children menu-mlid-787\"><span title=\"\"><a href=\"";
            // line 27
            echo $this->env->getExtension('routing')->getPath("faq_lisetudiant");
            echo "\">Faq</a></span></li>
<li class=\"leaf has-children menu-mlid-1594\"><span title=\"\"><a href=\"";
            // line 28
            echo $this->env->getExtension('routing')->getPath("homestat");
            echo "\">Statistiques</a></span></li>
<li class=\"last leaf has-children menu-mlid-1598\"><span title=\"\"><a href=\"";
            // line 29
            echo $this->env->getExtension('routing')->getPath("listStage");
            echo "\">Stage</a></span></li>

  
      ";
        }
        // line 33
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
        return "MyAppUlearnBundle:ChefEntreprise:homeCh.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 33,  94 => 29,  90 => 28,  86 => 27,  82 => 26,  78 => 25,  73 => 24,  71 => 23,  60 => 14,  57 => 13,  52 => 10,  45 => 7,  43 => 6,  40 => 5,  37 => 4,  11 => 2,);
    }
}
