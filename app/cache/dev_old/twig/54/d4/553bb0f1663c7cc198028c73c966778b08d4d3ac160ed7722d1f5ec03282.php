<?php

/* MyAppUlearnBundle:Default:cours.html.twig */
class __TwigTemplate_54d4553bb0f1663c7cc198028c73c966778b08d4d3ac160ed7722d1f5ec03282 extends Twig_Template
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
            'title' => array($this, 'block_title'),
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
    public function block_title($context, array $blocks = array())
    {
        echo " <title>Cours ULearn</title>";
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

    // line 46
    public function block_Erasebody($context, array $blocks = array())
    {
        echo " 
    <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/s1.css"), "html", null, true);
        echo "\" media=\"all\" />
    <script type=\"text/javascript\" src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jb2.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jb1.js"), "html", null, true);
        echo "\"></script>
    <h1><center>Catégories de cours</center></h1>
<div class=\"tree well\">
    <ul>
        ";
        // line 53
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["modules"]) ? $context["modules"] : $this->getContext($context, "modules")));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 54
            echo "        <li>
            <span><i class=\"icon-folder-open\"></i> ";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["module"], "nomModule", array()), "html", null, true);
            echo "</span>
            <ul>
                ";
            // line 57
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["cours"]) ? $context["cours"] : $this->getContext($context, "cours")));
            foreach ($context['_seq'] as $context["_key"] => $context["cour"]) {
                echo " 
                    ";
                // line 58
                if (($this->getAttribute($context["cour"], "__toString", array(), "method") == $this->getAttribute($context["module"], "__toString", array(), "method"))) {
                    echo " 
                <li>
                \t<a href=\"";
                    // line 60
                    echo twig_escape_filter($this->env, $this->getAttribute($context["cour"], "cheminCours", array()), "html", null, true);
                    echo "\"><span><i class=\"icon-minus-sign\"></i>  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["cour"], "nomCours", array()), "html", null, true);
                    echo " </span></a>
                </li>
                 ";
                }
                // line 63
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cour'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "            </ul>
        </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "        
    </ul>
</div>
   ";
        // line 71
        echo "    


";
    }

    public function getTemplateName()
    {
        return "MyAppUlearnBundle:Default:cours.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 71,  190 => 67,  182 => 64,  176 => 63,  168 => 60,  163 => 58,  157 => 57,  152 => 55,  149 => 54,  145 => 53,  138 => 49,  134 => 48,  130 => 47,  125 => 46,  110 => 34,  101 => 28,  97 => 27,  93 => 26,  89 => 25,  85 => 24,  80 => 23,  78 => 22,  68 => 14,  65 => 13,  60 => 10,  53 => 7,  51 => 6,  48 => 5,  45 => 4,  39 => 3,  11 => 2,);
    }
}
