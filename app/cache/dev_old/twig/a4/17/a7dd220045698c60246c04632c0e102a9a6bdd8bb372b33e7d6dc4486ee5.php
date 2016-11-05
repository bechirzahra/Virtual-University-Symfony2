<?php

/* MyAppUlearnBundle:Cours:ListC.html.twig */
class __TwigTemplate_a417a7dd220045698c60246c04632c0e102a9a6bdd8bb372b33e7d6dc4486ee5 extends Twig_Template
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
        echo "<div class=\"gwlogo clearfix\">
";
        // line 4
        if ( !(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()))) {
            // line 5
            echo "    <div class=\"field field-name-field-logo field-type-image field-label-hidden\"><div class=\"field-items\"><div class=\"field-item even\"><img typeof=\"foaf:Image\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/EspaceEt.png"), "html", null, true);
            echo "\" width=\"323\" height=\"90\" alt=\"ULearn\" title=\"Ulearn\" /></div> </div></div>

";
        }
        // line 8
        echo "</div>
   ";
    }

    // line 11
    public function block_nav($context, array $blocks = array())
    {
        // line 12
        echo " <div class=\"panel-panel panel-col-top\">
      <div class=\"inside\"><div class=\"panel-pane pane-gwu-primary-navigation\" >
  
      
  
  <div class=\"pane-content\">
    <div id=\"menu-wrapper\"><div id=\"menu-top\"><div class=\"menu-block-wrapper menu-block-2 menu-name-menu-division-menu parent-mlid-0 menu-level-1\">
  <ul class=\"menu\">
      ";
        // line 20
        if ( !(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()))) {
            // line 21
            echo "<li class=\"first leaf has-children menu-mlid-784\"><span title=\"\"><a href=\"";
            echo $this->env->getExtension('routing')->getPath("homeEt");
            echo "\">Acceuil</a></span></li>
<li class=\"leaf has-children menu-mlid-785\"><span title=\"\"><a href=\"";
            // line 22
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
            echo "\">Profil</a></span></li>
<li class=\"leaf has-children menu-mlid-786\"><span title=\"\"><a href=\"";
            // line 23
            echo $this->env->getExtension('routing')->getPath("my_app_cours_homepage");
            echo "\">Cours</a></span></li>
<li class=\"leaf has-children menu-mlid-787\"><span title=\"\"><a href=\"";
            // line 24
            echo $this->env->getExtension('routing')->getPath("testA");
            echo "\">Examen</a></span></li>
<li class=\"last leaf has-children menu-mlid-1594\"><span title=\"\"><a href=\"";
            // line 25
            echo $this->env->getExtension('routing')->getPath("listStageEt");
            echo "\">Stage</a></span></li>
<li class=\"last leaf has-children menu-mlid-1598\"><span title=\"\"><a href=\"";
            // line 26
            echo $this->env->getExtension('routing')->getPath("listC");
            echo "\">Evaluation</a></span></li>



  
      ";
        }
        // line 32
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
        echo "        
       
            <h3>Rechercher </h3>
<form  method=\"POST\" action=\"\" >
    nom : <input type=\"text\" name=\"nomCours\"/>
    <input type=\"submit\" value=\"Chercher\">
</form>
        <h3>Liste Des Cours </h3>
<table border=\"1\" method=\"POST\">
    <tr><th>ID</th>
        <th>nom</th>
        <th>date</th>
        <th>Vote</th>
    <th> Evaluer </th>
     
        </tr>
";
        // line 62
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cours"]) ? $context["cours"] : $this->getContext($context, "cours")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 63
            echo "        <tr>
            <td>";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "idCours", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "nomCours", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 66
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["c"], "date", array()), "d/m/Y"), "html", null, true);
            echo "</td>      
            <td>";
            // line 67
            $this->env->loadTemplate("DCSRatingBundle:Rating:control.html.twig")->display(array_merge($context, array("id" => "c.idCours")));
            echo "</td>
            
            <td><a href=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Evaluation_ajouter", array("id" => $this->getAttribute($context["c"], "idCours", array()))), "html", null, true);
            echo "\"> Evaluer </a></td>
         ";
            // line 72
            echo "            
        </tr>
";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo " 

</table>
  
";
    }

    public function getTemplateName()
    {
        return "MyAppUlearnBundle:Cours:ListC.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 74,  180 => 72,  176 => 69,  171 => 67,  167 => 66,  163 => 65,  159 => 64,  156 => 63,  139 => 62,  121 => 46,  118 => 45,  103 => 32,  94 => 26,  90 => 25,  86 => 24,  82 => 23,  78 => 22,  73 => 21,  71 => 20,  61 => 12,  58 => 11,  53 => 8,  46 => 5,  44 => 4,  41 => 3,  38 => 2,  11 => 1,);
    }
}
