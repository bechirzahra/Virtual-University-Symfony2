<?php

/* MyAppUlearnBundle:Admin:listUser.html.twig */
class __TwigTemplate_13b83588c6b14cf303764c6091d712ccee03247155ae64d6f8cec463d2c62006 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        try {
            $this->parent = $this->env->loadTemplate("MyAppUlearnBundle::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(4);

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

    // line 6
    public function block_espace($context, array $blocks = array())
    {
        // line 7
        echo "<div class=\"gwlogo clearfix\">
";
        // line 8
        if ( !(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()))) {
            // line 9
            echo "    <div class=\"field field-name-field-logo field-type-image field-label-hidden\"><div class=\"field-items\"><div class=\"field-item even\"><img typeof=\"foaf:Image\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/EspaceAd.png"), "html", null, true);
            echo "\" width=\"392\" height=\"90\" alt=\"ULearn\" title=\"Ulearn\" /></div> </div></div>

";
        }
        // line 12
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
            echo $this->env->getExtension('routing')->getPath("homeAd");
            echo "\">Acceuil</a></span></li>
<li class=\"leaf has-children menu-mlid-785\"><span title=\"\"><a href=\"";
            // line 27
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
            echo "\">Profil</a></span></li>
<li class=\"leaf has-children menu-mlid-787\"><span title=\"\"><a href=\"";
            // line 28
            echo $this->env->getExtension('routing')->getPath("CERT");
            echo "\">Certification</a></span></li>
<li class=\"leaf has-children menu-mlid-1594\"><span title=\"\"><a href=\"";
            // line 29
            echo $this->env->getExtension('routing')->getPath("Module");
            echo "\">Module</a></span></li>
<li class=\"last leaf has-children menu-mlid-1598\"><span title=\"\"><a href=\"";
            // line 30
            echo $this->env->getExtension('routing')->getPath("listUser");
            echo "\">Demande d'inscription</a></span></li>

  
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
        echo "
  <h3>Rechercher</h3>
<form  method=\"POST\" action=\"\" >
    Nom : <input type=\"text\" name=\"nom\"/>
    <input type=\"submit\" value=\"Chercher\">
</form>
        <h3>Liste Des utilisateurs </h3>
<table border=\"1\">
    <tr>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Accepter</th>
        <th>Supprimer</th>

      
    </tr>
    ";
        // line 64
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")));
        foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
            // line 65
            echo "        <tr>
            <td>";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "nom", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "prenom", array()), "html", null, true);
            echo "</td>

            <td><a href=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("accepter", array("id" => $this->getAttribute($context["u"], "id", array()))), "html", null, true);
            echo "\">Accepter </a></td>
            <td><a href=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("deleteUser", array("id" => $this->getAttribute($context["u"], "id", array()))), "html", null, true);
            echo "\">Supprimer </a></td>

           ";
            // line 75
            echo "        </tr>
        
   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo " 

</table>
";
    }

    public function getTemplateName()
    {
        return "MyAppUlearnBundle:Admin:listUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 77,  158 => 75,  153 => 70,  149 => 69,  144 => 67,  140 => 66,  137 => 65,  133 => 64,  115 => 48,  112 => 47,  98 => 34,  91 => 30,  87 => 29,  83 => 28,  79 => 27,  74 => 26,  72 => 25,  61 => 16,  58 => 15,  53 => 12,  46 => 9,  44 => 8,  41 => 7,  38 => 6,  11 => 4,);
    }
}
