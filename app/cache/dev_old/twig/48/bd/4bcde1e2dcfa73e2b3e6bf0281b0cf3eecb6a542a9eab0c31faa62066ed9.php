<?php

/* MyAppUlearnBundle:Cours:listC.html.twig */
class __TwigTemplate_48bd4bcde1e2dcfa73e2b3e6bf0281b0cf3eecb6a542a9eab0c31faa62066ed9 extends Twig_Template
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
        echo "  <div class=\"gwlogo clearfix\">
    <div class=\"field field-name-field-logo field-type-image field-label-hidden\"><div class=\"field-items\"><div class=\"field-item even\"><img typeof=\"foaf:Image\" src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/EspaceEt.png"), "html", null, true);
        echo "\" width=\"323\" height=\"90\" alt=\"ULearn\" title=\"ULearn\" /></div></div>  

  </div>
    </div>
    ";
    }

    // line 10
    public function block_nav($context, array $blocks = array())
    {
        // line 11
        echo "              <div class=\"bottom clearfix\">
    <div class=\"target-audience\">
\t\t\t<ul class=\"flexy-menu thick orange\">
                                      ";
        // line 17
        echo "\t\t     ";
        if ( !(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()))) {
            // line 18
            echo "                                                        
                    <li><a href=\"";
            // line 19
            echo $this->env->getExtension('routing')->getPath("Home");
            echo "\">ACCEUIL</a>  <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
            echo "\">Profil</a>   <a href=\"";
            echo $this->env->getExtension('routing')->getPath("listC");
            echo "\">Cours</a></li> 

                     ";
        }
        // line 22
        echo "                         </ul>
    </div>
</div>

";
    }

    // line 29
    public function block_Erasebody($context, array $blocks = array())
    {
        // line 30
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
     <th> Supprimer </th>
     
        </tr>
";
        // line 47
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
            // line 48
            echo "        <tr>
            <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "idCours", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "nomCours", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 51
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["c"], "date", array()), "d/m/Y"), "html", null, true);
            echo "</td>      
            <td>";
            // line 52
            $this->env->loadTemplate("DCSRatingBundle:Rating:control.html.twig")->display(array_merge($context, array("id" => "c.idCours")));
            echo "</td>
            
            <td><a href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Evaluation_ajouter", array("id" => $this->getAttribute($context["c"], "idCours", array()))), "html", null, true);
            echo "\"> Evaluer </a></td>
         ";
            // line 57
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
        // line 59
        echo " 

</table>
  
";
    }

    public function getTemplateName()
    {
        return "MyAppUlearnBundle:Cours:listC.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 59,  148 => 57,  144 => 54,  139 => 52,  135 => 51,  131 => 50,  127 => 49,  124 => 48,  107 => 47,  88 => 30,  85 => 29,  77 => 22,  67 => 19,  64 => 18,  61 => 17,  56 => 11,  53 => 10,  44 => 4,  41 => 3,  38 => 2,  11 => 1,);
    }
}
