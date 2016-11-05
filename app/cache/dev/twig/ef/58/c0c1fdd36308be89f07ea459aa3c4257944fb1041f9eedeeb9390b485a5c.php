<?php

/* MyAppUlearnBundle:Module:index.html.twig */
class __TwigTemplate_ef58c0c1fdd36308be89f07ea459aa3c4257944fb1041f9eedeeb9390b485a5c extends Twig_Template
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
        echo "<div class=\"gwlogo clearfix\">
";
        // line 5
        if ( !(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()))) {
            // line 6
            echo "    <div class=\"field field-name-field-logo field-type-image field-label-hidden\"><div class=\"field-items\"><div class=\"field-item even\"><img typeof=\"foaf:Image\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/EspaceAd.png"), "html", null, true);
            echo "\" width=\"392\" height=\"90\" alt=\"ULearn\" title=\"Ulearn\" /></div> </div></div>

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
        echo "
      <div class=\"panel-panel panel-col-top\">
      <div class=\"inside\"><div class=\"panel-pane pane-gwu-primary-navigation\" >
  
      
  
  <div class=\"pane-content\">
    <div id=\"menu-wrapper\"><div id=\"menu-top\"><div class=\"menu-block-wrapper menu-block-2 menu-name-menu-division-menu parent-mlid-0 menu-level-1\">
  <ul class=\"menu\">
      ";
        // line 22
        if ( !(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()))) {
            // line 23
            echo "<li class=\"first leaf has-children menu-mlid-784\"><span title=\"\"><a href=\"";
            echo $this->env->getExtension('routing')->getPath("homeAd");
            echo "\">Acceuil</a></span></li>
<li class=\"leaf has-children menu-mlid-785\"><span title=\"\"><a href=\"";
            // line 24
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
            echo "\">Profil</a></span></li>
<li class=\"leaf has-children menu-mlid-787\"><span title=\"\"><a href=\"";
            // line 25
            echo $this->env->getExtension('routing')->getPath("CERT");
            echo "\">Certification</a></span></li>
<li class=\"leaf has-children menu-mlid-1594\"><span title=\"\"><a href=\"";
            // line 26
            echo $this->env->getExtension('routing')->getPath("Module");
            echo "\">Module</a></span></li>
<li class=\"last leaf has-children menu-mlid-1598\"><span title=\"\"><a href=\"";
            // line 27
            echo $this->env->getExtension('routing')->getPath("listUser");
            echo "\">Demande d'inscription</a></span></li>

  
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

    // line 43
    public function block_Erasebody($context, array $blocks = array())
    {
        // line 44
        echo "    <h1>Liste Module</h1>
   
<head>
<style>
table, td, th {
    border: 1px solid #357AB7;
}
    
th {
    background-color: #357AB7;
    color: white;
}
table {
    width: 100%;
}

th {
    height: 50px;
}
</style>
</head>
    <table class=\"records_list\">
        <thead>
            <tr>
                <th>Id Module</th>
                <th>Nom Module</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 74
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 75
            echo "            <tr>
                <td><a href=\"";
            // line 76
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Module_show", array("id" => $this->getAttribute($context["entity"], "idmodule", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "idmodule", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nommodule", array()), "html", null, true);
            echo "</td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 81
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Module_show", array("id" => $this->getAttribute($context["entity"], "idmodule", array()))), "html", null, true);
            echo "\">Afficher</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Module_edit", array("id" => $this->getAttribute($context["entity"], "idmodule", array()))), "html", null, true);
            echo "\">Modifier</a>
                    </li>
                    
                </ul>
                         </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "        </tbody>
    </table>

        <ul>
        <li>
            <a href=\"";
        // line 97
        echo $this->env->getExtension('routing')->getPath("Module_new");
        echo "\">
                Ajouter un nouveau module
            </a>
        </li>
    </ul>
    ";
    }

    public function getTemplateName()
    {
        return "MyAppUlearnBundle:Module:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 97,  187 => 92,  173 => 84,  167 => 81,  160 => 77,  154 => 76,  151 => 75,  147 => 74,  115 => 44,  112 => 43,  98 => 31,  91 => 27,  87 => 26,  83 => 25,  79 => 24,  74 => 23,  72 => 22,  61 => 13,  58 => 12,  53 => 9,  46 => 6,  44 => 5,  41 => 4,  38 => 3,  11 => 1,);
    }
}
