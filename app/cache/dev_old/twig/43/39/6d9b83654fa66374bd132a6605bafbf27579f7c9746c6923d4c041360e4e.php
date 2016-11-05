<?php

/* MyAppUlearnBundle:Examen:ListeExamens.html.twig */
class __TwigTemplate_43396d9b83654fa66374bd132a6605bafbf27579f7c9746c6923d4c041360e4e extends Twig_Template
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
            echo $this->env->getExtension('routing')->getPath("my_app_cours_UploadCours");
            echo "\">Cours</a></span></li>
<li class=\"leaf has-children menu-mlid-787\"><span title=\"\"><a href=\"";
            // line 25
            echo $this->env->getExtension('routing')->getPath("ListeExamens");
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

    // line 46
    public function block_Erasebody($context, array $blocks = array())
    {
        // line 47
        echo "           <h3>Rechercher </h3>
     <form  method=\"POST\" action=\"\" >
   Examen : <input type=\"text\" name=\"search\"/>
    <input type=\"submit\" value=\"Chercher un examen\">
     </form>
        <h3>Liste Des Examens </h3>
<table border=\"1\" method=\"POST\">
    <tr>
        <th>ID</th>
        <th>Date</th>
        <th>Durée</th>
         <th>Module</th>
        <!-- <th>Enseignant</th>-->
         <th> Modifier </th>
        <th> Supprimer </th>

        </tr>
";
        // line 64
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["examen"]) ? $context["examen"] : $this->getContext($context, "examen")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 65
            echo "        <tr>
             <th>";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "idExamen", array()), "html", null, true);
            echo "</th>
            <td>";
            // line 67
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["p"], "date", array()), "d/m/Y"), "html", null, true);
            echo "</td>
            <td>";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "duree", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "idmodule", array()), "nommodule", array()), "html", null, true);
            echo "</td>
            <td><a href=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("updateExamen", array("idExamen" => $this->getAttribute($context["p"], "idExamen", array()))), "html", null, true);
            echo "\"> Modifier </a></td>
            <td><a href=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("deleteExamen", array("idExamen" => $this->getAttribute($context["p"], "idExamen", array()))), "html", null, true);
            echo "\"> Suprimer </a></td>   
        </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo " 

</table>
<a href=\"";
        // line 76
        echo $this->env->getExtension('routing')->getPath("quizquestion");
        echo "\"><h2>Ajouter</h2></a>
";
    }

    public function getTemplateName()
    {
        return "MyAppUlearnBundle:Examen:ListeExamens.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 76,  168 => 73,  159 => 71,  155 => 70,  151 => 69,  147 => 68,  143 => 67,  139 => 66,  136 => 65,  132 => 64,  113 => 47,  110 => 46,  95 => 31,  86 => 25,  82 => 24,  78 => 23,  73 => 22,  71 => 21,  61 => 13,  58 => 12,  53 => 9,  46 => 6,  44 => 5,  41 => 4,  38 => 3,  11 => 2,);
    }
}
