<?php

/* MyAppUlearnBundle:QuizReponse:new.html.twig */
class __TwigTemplate_23a27000c7c63efb358fd3473a6719a0ebc4535958e4838780fee997a6e2cfb0 extends Twig_Template
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
            'body' => array($this, 'block_body'),
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
        echo "<div class=\"gwlogo clearfix\">
";
        // line 5
        if ( !(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()))) {
            // line 6
            echo "    <div class=\"field field-name-field-logo field-type-image field-label-hidden\"><div class=\"field-items\"><div class=\"field-item even\"><img typeof=\"foaf:Image\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/ulearn1.png"), "html", null, true);
            echo "\" width=\"323\" height=\"90\" alt=\"ULearn\" title=\"Ulearn\" /></div> </div></div>

";
        }
        // line 9
        echo "</div>
   ";
    }

    // line 12
    public function block_nav($context, array $blocks = array())
    {
        // line 13
        echo " <div class=\"panel-panel panel-col-top\">
      <div class=\"inside\"><div class=\"panel-pane pane-gwu-primary-navigation\" >
  
      
  
  <div class=\"pane-content\">
    <div id=\"menu-wrapper\"><div id=\"menu-top\"><div class=\"menu-block-wrapper menu-block-2 menu-name-menu-division-menu parent-mlid-0 menu-level-1\">
  <ul class=\"menu\">
      ";
        // line 21
        if ( !(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()))) {
            // line 22
            echo "<li class=\"first leaf has-children menu-mlid-784\"><span title=\"\"><a href=\"";
            echo $this->env->getExtension('routing')->getPath("homeEns");
            echo "\">Acceuil</a></span></li>
<li class=\"leaf has-children menu-mlid-785\"><span title=\"\"><a href=\"";
            // line 23
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
            echo "\">Profil</a></span></li>
<li class=\"leaf has-children menu-mlid-786\"><span title=\"\"><a href=\"";
            // line 24
            echo $this->env->getExtension('routing')->getPath("Home");
            echo "\">Cours</a></span></li>
<li class=\"leaf has-children menu-mlid-787\"><span title=\"\"><a href=\"";
            // line 25
            echo $this->env->getExtension('routing')->getPath("quizquestion");
            echo "\">Examen</a></span></li>



  
      ";
        }
        // line 31
        echo "
</ul>
            </div>

</div></div>  </div>

  
  </div>
</div>
    </div>

";
    }

    // line 45
    public function block_Erasebody($context, array $blocks = array())
    {
        // line 46
        $this->displayBlock('body', $context, $blocks);
    }

    public function block_body($context, array $blocks = array())
    {
        // line 47
        echo "<h1>QuizReponse creation</h1>

    ";
        // line 49
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("quizreponse");
        echo "\">
            Back to the list
        </a>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "MyAppUlearnBundle:QuizReponse:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 53,  124 => 49,  120 => 47,  114 => 46,  111 => 45,  96 => 31,  87 => 25,  83 => 24,  79 => 23,  74 => 22,  72 => 21,  62 => 13,  59 => 12,  54 => 9,  47 => 6,  45 => 5,  42 => 4,  39 => 3,  11 => 1,);
    }
}
