<?php

/* MyAppUlearnBundle:Default:UploadCours.html.twig */
class __TwigTemplate_4e55f815f65e4a07802a3f422da1c8c5e03c0025eda25adbaf1451be6f32a3ea extends Twig_Template
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
            'nav' => array($this, 'block_nav'),
            'title' => array($this, 'block_title'),
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

    // line 5
    public function block_nav($context, array $blocks = array())
    {
        // line 6
        echo " <div class=\"panel-panel panel-col-top\">
      <div class=\"inside\"><div class=\"panel-pane pane-gwu-primary-navigation\" >
  
      
  
  <div class=\"pane-content\">
    <div id=\"menu-wrapper\"><div id=\"menu-top\"><div class=\"menu-block-wrapper menu-block-2 menu-name-menu-division-menu parent-mlid-0 menu-level-1\">
  <ul class=\"menu\">
      ";
        // line 14
        if ( !(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()))) {
            // line 15
            echo "<li class=\"first leaf has-children menu-mlid-784\"><span title=\"\"><a href=\"";
            echo $this->env->getExtension('routing')->getPath("homeEns");
            echo "\">Acceuil</a></span></li>
<li class=\"leaf has-children menu-mlid-785\"><span title=\"\"><a href=\"";
            // line 16
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
            echo "\">Profil</a></span></li>
<li class=\"leaf has-children menu-mlid-786\"><span title=\"\"><a href=\"";
            // line 17
            echo $this->env->getExtension('routing')->getPath("my_app_cours_UploadCours");
            echo "\">Cours</a></span></li>
<li class=\"leaf has-children menu-mlid-787\"><span title=\"\"><a href=\"";
            // line 18
            echo $this->env->getExtension('routing')->getPath("ListeExamens");
            echo "\">Examen</a></span></li>



  
      ";
        }
        // line 24
        echo "
</ul>
            </div>

</div></div>  </div>

  
  </div>
</div>
    </div>

";
    }

    // line 40
    public function block_title($context, array $blocks = array())
    {
        echo " <title>Upload Cours ULearn</title>";
    }

    // line 41
    public function block_Erasebody($context, array $blocks = array())
    {
        // line 42
        echo "    <br><br><br><br><br>
<link rel=\"stylesheet\" href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/s2.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/u1.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/jquery.fileupload.css"), "html", null, true);
        echo "\">
<script type=\"text/javascript\" src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/u2.js"), "html", null, true);
        echo "\"></script>
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<script type=\"text/javascript\" src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/u3.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/u4.js"), "html", null, true);
        echo "\"></script>
 
<form method=\"POST\" enctype=\"multipart/form-data\" action=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("my_app_cours_Upload");
        echo "\">
          <span class=\"btn btn-success fileinput-button\">
                    <i class=\"glyphicon glyphicon-plus\"></i>
                    <span>Add files...</span>
                    <input type=\"file\" name=\"file\">
                </span>
    <!-- Search box Start -->
    <div class=\"well carousel-search hidden-sm\">
        <div class=\"btn-group\"> <a class=\"btn btn-default dropdown-toggle btn-select\" data-toggle=\"dropdown\" href=\"#\">Sélectionner un module <span class=\"caret\"></span></a>
            <ul class=\"dropdown-menu\">
                ";
        // line 61
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["modules"]) ? $context["modules"] : $this->getContext($context, "modules")));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 62
            echo "                <li name=\"nomModule\"><a href=\"#\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["module"], "nomModule", array()), "html", null, true);
            echo "</a></li>
                
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "            </ul>
        </div>
        <textarea id=\"textarea\" class=\"input-xlarge\" rows=\"1\" name=\"nomCours\">Nom Cours</textarea>
        <script type=\"text/javascript\" src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/u2.js"), "html", null, true);
        echo "\"></script>
    </div>
     <button type=\"submit\" class=\"btn btn-primary\">Add Cours</button>
</form>

    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
";
    }

    public function getTemplateName()
    {
        return "MyAppUlearnBundle:Default:UploadCours.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 68,  155 => 65,  145 => 62,  141 => 61,  128 => 51,  123 => 49,  119 => 48,  114 => 46,  110 => 45,  106 => 44,  102 => 43,  99 => 42,  96 => 41,  90 => 40,  75 => 24,  66 => 18,  62 => 17,  58 => 16,  53 => 15,  51 => 14,  41 => 6,  38 => 5,  11 => 1,);
    }
}
