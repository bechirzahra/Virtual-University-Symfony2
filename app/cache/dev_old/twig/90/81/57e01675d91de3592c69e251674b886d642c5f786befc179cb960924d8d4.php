<?php

/* MyAppUlearnBundle:Stage:listStage.html.twig */
class __TwigTemplate_908157e01675d91de3592c69e251674b886d642c5f786befc179cb960924d8d4 extends Twig_Template
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

    // line 48
    public function block_Erasebody($context, array $blocks = array())
    {
        // line 49
        echo "<h3>Rechercher </h3>
<form  method=\"POST\" action=\"\" >
    domaine : <input type=\"text\" name=\"domaine\"/>
    <input type=\"submit\" value=\"Chercher\">
</form>
<h1>La liste des Stages</h1>
<table border=\"\">
    <tr>
        <td> id </td>
        <td> Enreprise </td>
        <td> Duree </td>
        <td>Domaine</td>
        <td> Date </td>
        <td> Description </td>
        <td> Modifier </td>
        <td> Supprimer </td>
        
        ";
        // line 68
        echo "        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stages"]) ? $context["stages"] : $this->getContext($context, "stages")));
        foreach ($context['_seq'] as $context["_key"] => $context["stage"]) {
            // line 69
            echo "        <tr>
            <td>";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($context["stage"], "idstage", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($context["stage"], "nomentreprise", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($context["stage"], "duree", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute($context["stage"], "domaine", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 74
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["stage"], "date", array()), "D/M/Y"), "html", null, true);
            echo "</td>
            <td>";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute($context["stage"], "description", array()), "html", null, true);
            echo "</td>
            
            <td><a href=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("updateStage", array("id" => $this->getAttribute($context["stage"], "idStage", array()))), "html", null, true);
            echo "\">Mise à jour</a></td>
          <td><a href=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("deleteStage", array("id" => $this->getAttribute($context["stage"], "idStage", array()))), "html", null, true);
            echo "\">Suppression</a></td>

        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "</tr>
</table>
       ";
    }

    // line 89
    public function block_footer($context, array $blocks = array())
    {
        // line 90
        echo "
  ";
    }

    public function getTemplateName()
    {
        return "MyAppUlearnBundle:Stage:listStage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 90,  192 => 89,  186 => 82,  176 => 78,  172 => 77,  167 => 75,  163 => 74,  159 => 73,  155 => 72,  151 => 71,  147 => 70,  144 => 69,  139 => 68,  120 => 49,  117 => 48,  103 => 35,  96 => 31,  92 => 30,  88 => 29,  84 => 28,  80 => 27,  75 => 26,  73 => 25,  62 => 16,  59 => 15,  54 => 10,  47 => 7,  45 => 6,  42 => 5,  39 => 4,  11 => 2,);
    }
}
