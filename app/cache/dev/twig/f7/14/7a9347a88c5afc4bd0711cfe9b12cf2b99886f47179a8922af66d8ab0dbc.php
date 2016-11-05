<?php

/* MyAppUlearnBundle:Stage:addStage.html.twig */
class __TwigTemplate_f7147a9347a88c5afc4bd0711cfe9b12cf2b99886f47179a8922af66d8ab0dbc extends Twig_Template
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

    // line 15
    public function block_nav($context, array $blocks = array())
    {
        // line 16
        echo "
      <div class=\"panel-panel panel-col-top\">
      <div class=\"inside\"><div class=\"panel-pane pane-gwu-primary-navigation\" >
  
      
  
  <div class=\"pane-content\">
    <div id=\"menu-wrapper\"><div id=\"menu-top\"><div class=\"menu-block-wrapper menu-block-2 menu-name-menu-division-menu parent-mlid-0 menu-level-1\">
  <ul class=\"menu\">
      ";
        // line 25
        if ( !(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()))) {
            // line 26
            echo "<li class=\"first leaf has-children menu-mlid-784\"><span title=\"\"><a href=\"";
            echo $this->env->getExtension('routing')->getPath("homeCh");
            echo "\">Acceuil</a></span></li>
<li class=\"leaf has-children menu-mlid-785\"><span title=\"\"><a href=\"";
            // line 27
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
            echo "\">Profil</a></span></li>
<li class=\"leaf has-children menu-mlid-786\"><span title=\"\"><a href=\"";
            // line 28
            echo $this->env->getExtension('routing')->getPath("Home");
            echo "\">Cours</a></span></li>
<li class=\"leaf has-children menu-mlid-787\"><span title=\"\"><a href=\"";
            // line 29
            echo $this->env->getExtension('routing')->getPath("faq_lisetudiant");
            echo "\">Faq</a></span></li>
<li class=\"leaf has-children menu-mlid-1594\"><span title=\"\"><a href=\"";
            // line 30
            echo $this->env->getExtension('routing')->getPath("homestat");
            echo "\">Statistiques</a></span></li>
<li class=\"last leaf has-children menu-mlid-1598\"><span title=\"\"><a href=\"";
            // line 31
            echo $this->env->getExtension('routing')->getPath("listStage");
            echo "\">Stage</a></span></li>

  
      ";
        }
        // line 35
        echo "
</ul>
            </div>

</div></div>  </div>

  
  </div>
</div>
    </div>
         ";
    }

    // line 46
    public function block_Erasebody($context, array $blocks = array())
    {
        // line 47
        echo "<h1>Ajout d'un Stage</h1> 
        <br/>
        <form action=\"\" method=\"POST\">
            <table >
             
                <tr>
                    <td>";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "nomEntreprise", array()), 'label', array("label" => "Entreprise: "));
        echo "</td>
                    <td>";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "nomEntreprise", array()), 'widget');
        echo "</td>
                </tr>
                <tr>
                    <td>";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "duree", array()), 'label', array("label" => "Duree: "));
        echo "</td>
                    <td>";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "duree", array()), 'widget');
        echo "</td>
                </tr>
                <tr> 
                    <td> ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "domaine", array()), 'label', array("label" => "Domaine: "));
        echo "</td>
                    <td>";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "domaine", array()), 'widget');
        echo "</td>
                </tr>
                <tr> 
                    <td> ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "date", array()), 'label', array("label" => "Dtae: "));
        echo "</td>
                    <td>";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "date", array()), 'widget');
        echo "</td>
                </tr>
                <tr> 
                    <td> ";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "description", array()), 'label', array("label" => "Desc: "));
        echo "</td>
                    <td>";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "description", array()), 'widget');
        echo "</td>
                </tr>
                
                ";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), 'rest');
        echo "
            </table>
            <div>
        <input class=\"buttonOK\" type=\"submit\" value=\"Ajouter\" />
    </div>
        </form>
            
       ";
    }

    public function getTemplateName()
    {
        return "MyAppUlearnBundle:Stage:addStage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 73,  171 => 70,  167 => 69,  161 => 66,  157 => 65,  151 => 62,  147 => 61,  141 => 58,  137 => 57,  131 => 54,  127 => 53,  119 => 47,  116 => 46,  102 => 35,  95 => 31,  91 => 30,  87 => 29,  83 => 28,  79 => 27,  74 => 26,  72 => 25,  61 => 16,  58 => 15,  53 => 10,  46 => 7,  44 => 6,  41 => 5,  38 => 4,  11 => 2,);
    }
}
