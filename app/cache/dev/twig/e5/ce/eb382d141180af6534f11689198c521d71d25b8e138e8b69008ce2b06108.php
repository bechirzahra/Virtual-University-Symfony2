<?php

/* MyAppUlearnBundle:Stage:listStageEt.html.twig */
class __TwigTemplate_e5ceeb382d141180af6534f11689198c521d71d25b8e138e8b69008ce2b06108 extends Twig_Template
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
            'footer' => array($this, 'block_footer'),
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

    // line 47
    public function block_Erasebody($context, array $blocks = array())
    {
        // line 48
        echo "<h3>Rechercher </h3>
<form  method=\"POST\" action=\"\" >
    domaine : <input type=\"text\" name=\"domaine\"/>
    <input type=\"submit\" value=\"Chercher\">
</form>
<h1>La liste des Stages</h1>
<table border=\"\">
    <tr>
        <td> Enreprise </td>
        <td> Duree </td>
        <td>Domaine</td>
        <td> Date </td>
        <td> Description </td>
       
        
        ";
        // line 65
        echo "        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stages"]) ? $context["stages"] : $this->getContext($context, "stages")));
        foreach ($context['_seq'] as $context["_key"] => $context["stage"]) {
            // line 66
            echo "        <tr>
            <td>";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($context["stage"], "nomentreprise", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($context["stage"], "duree", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($context["stage"], "domaine", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 70
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["stage"], "date", array()), "D/M/Y"), "html", null, true);
            echo "</td>
            <td>";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($context["stage"], "description", array()), "html", null, true);
            echo "</td>
            
           

        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "</tr>
</table>
<a   target=\"_blank\"  href=\"";
        // line 79
        echo $this->env->getExtension('routing')->getPath("listeStagePdf");
        echo "\" class=\"small-box-footer\">
                    Liste Des Stage <i class=\"glyphicon glyphicon-print\"></i>
       ";
    }

    // line 86
    public function block_footer($context, array $blocks = array())
    {
        // line 87
        echo "
  ";
    }

    public function getTemplateName()
    {
        return "MyAppUlearnBundle:Stage:listStageEt.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 87,  186 => 86,  179 => 79,  175 => 77,  163 => 71,  159 => 70,  155 => 69,  151 => 68,  147 => 67,  144 => 66,  139 => 65,  122 => 48,  119 => 47,  104 => 34,  95 => 28,  91 => 27,  87 => 26,  83 => 25,  79 => 24,  74 => 23,  72 => 22,  62 => 14,  59 => 13,  54 => 10,  47 => 7,  45 => 6,  42 => 5,  39 => 4,  11 => 2,);
    }
}
