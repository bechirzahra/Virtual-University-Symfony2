<?php

/* MyAppUlearnBundle:Evaluation:ajouterEvaluation.html.twig */
class __TwigTemplate_f0a83abf13444297e5fe76169e38d654d3300f24a20e2d0ea86c301bf67ca460 extends Twig_Template
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

    // line 7
    public function block_espace($context, array $blocks = array())
    {
        // line 8
        echo "<div class=\"gwlogo clearfix\">
";
        // line 9
        if ( !(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()))) {
            // line 10
            echo "    <div class=\"field field-name-field-logo field-type-image field-label-hidden\"><div class=\"field-items\"><div class=\"field-item even\"><img typeof=\"foaf:Image\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/EspaceEt.png"), "html", null, true);
            echo "\" width=\"323\" height=\"90\" alt=\"ULearn\" title=\"Ulearn\" /></div> </div></div>

";
        }
        // line 13
        echo "</div>
   ";
    }

    // line 16
    public function block_nav($context, array $blocks = array())
    {
        // line 17
        echo " <div class=\"panel-panel panel-col-top\">
      <div class=\"inside\"><div class=\"panel-pane pane-gwu-primary-navigation\" >
  
      
  
  <div class=\"pane-content\">
    <div id=\"menu-wrapper\"><div id=\"menu-top\"><div class=\"menu-block-wrapper menu-block-2 menu-name-menu-division-menu parent-mlid-0 menu-level-1\">
  <ul class=\"menu\">
      ";
        // line 25
        if ( !(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()))) {
            // line 26
            echo "<li class=\"first leaf has-children menu-mlid-784\"><span title=\"\"><a href=\"";
            echo $this->env->getExtension('routing')->getPath("homeEt");
            echo "\">Acceuil</a></span></li>
<li class=\"leaf has-children menu-mlid-785\"><span title=\"\"><a href=\"";
            // line 27
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
            echo "\">Profil</a></span></li>
<li class=\"leaf has-children menu-mlid-786\"><span title=\"\"><a href=\"";
            // line 28
            echo $this->env->getExtension('routing')->getPath("my_app_cours_homepage");
            echo "\">Cours</a></span></li>
<li class=\"leaf has-children menu-mlid-787\"><span title=\"\"><a href=\"";
            // line 29
            echo $this->env->getExtension('routing')->getPath("testA");
            echo "\">Examen</a></span></li>
<li class=\"last leaf has-children menu-mlid-1594\"><span title=\"\"><a href=\"";
            // line 30
            echo $this->env->getExtension('routing')->getPath("listStageEt");
            echo "\">Stage</a></span></li>
<li class=\"last leaf has-children menu-mlid-1598\"><span title=\"\"><a href=\"";
            // line 31
            echo $this->env->getExtension('routing')->getPath("listC");
            echo "\">Evaluation</a></span></li>



  
      ";
        }
        // line 37
        echo "
</ul>
            </div>

</div></div>  </div>

  
  </div>
</div>
    </div>

";
    }

    // line 50
    public function block_Erasebody($context, array $blocks = array())
    {
        // line 51
        echo "
<style>
.buttonOK {
background: #2ecc71;
color: #FFF;
padding: .9em 3em;
display: inline-block;
text-transform: uppercase;
transition: 0.5s all;
-webkit-transition: 0.5s all;
-moz-transition: 0.5s all;
-o-transition: 0.5s all;
border-radius: 0.3em;
-webkit-border-radius: 0.3em;
-moz-border-radius: 0.3em;
-o-border-radius: 0.3em;
font-size: 0.875em;
border-top: none;
border-right: none;
border-left: none;
border-bottom: 4px solid #2A323A;
outline: none;
cursor: pointer;
font-family: 'Open Sans', sans-serif;
}
</style>
<script src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/etoiles.js"), "html", null, true);
        echo "\"></script>
<link rel=\"stylesheet\" href=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/etoiles.css"), "html", null, true);
        echo "\" type=\"text/css\" />
<div class=\"content_center\">
";
        // line 80
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()) && $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()))) {
            // line 81
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array()));
            foreach ($context['_seq'] as $context["label"] => $context["flashes"]) {
                // line 82
                echo "    ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($context["flashes"]);
                foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
                    // line 83
                    echo "        <li class=\"alert alert-";
                    echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                    echo " alert-dismissable\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
            ";
                    // line 85
                    echo twig_escape_filter($this->env, $context["flash"], "html", null, true);
                    echo "
        </li>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['label'], $context['flashes'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 90
        echo "
<form action=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Evaluation_ajouter", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\"  method=\"POST\">
    ";
        // line 92
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_evaluation"]) ? $context["form_evaluation"] : $this->getContext($context, "form_evaluation")), "_token", array()), 'widget');
        echo "
\tNote
\t<br/><br/>
\t<ul class=\"notes-echelle js\">
\t\t\t<li class=\"\">
\t\t\t\t<label for=\"note01\" title=\"Note : 1 sur 20\">1</label>
\t\t\t\t<input type=\"radio\" name=\"note\" id=\"note01\" value=\"1\">
\t\t\t</li>
\t\t\t<li class=\"\">
\t\t\t\t<label for=\"note02\" title=\"Note : 2 sur 20\">2</label>
\t\t\t\t<input type=\"radio\" name=\"note\" id=\"note02\" value=\"2\">
\t\t\t</li>
\t\t\t<li class=\"\">
\t\t\t\t<label for=\"note03\" title=\"Note : 3 sur 20\">3</label>
\t\t\t\t<input type=\"radio\" name=\"note\" id=\"note03\" value=\"3\">
\t\t\t</li>
\t\t\t<li class=\"\">
\t\t\t\t<label for=\"note04\" title=\"Note : 4 sur 20\">4</label>
\t\t\t\t<input type=\"radio\" name=\"note\" id=\"note04\" value=\"4\">
\t\t\t</li>
\t\t\t<li class=\"\">
\t\t\t\t<label for=\"note05\" title=\"Note : 5 sur 20\">5</label>
\t\t\t\t<input type=\"radio\" name=\"note\" id=\"note05\" value=\"5\">
\t\t\t</li>
\t\t\t<li class=\"\">
\t\t\t\t<label for=\"note06\" title=\"Note : 6 sur 20\">6</label>
\t\t\t\t<input type=\"radio\" name=\"note\" id=\"note06\" value=\"6\">
\t\t\t</li>
\t\t\t<li class=\"\">
\t\t\t\t<label for=\"note07\" title=\"Note : 7 sur 20\">7</label>
\t\t\t\t<input type=\"radio\" name=\"note\" id=\"note07\" value=\"7\">
\t\t\t</li>
\t\t\t<li class=\"\">
\t\t\t\t<label for=\"note08\" title=\"Note : 8 sur 20\">8</label>
\t\t\t\t<input type=\"radio\" name=\"note\" id=\"note08\" value=\"8\">
\t\t\t</li>
\t\t\t<li class=\"note-checked\">
\t\t\t\t<label for=\"note09\" title=\"Note : 9 sur 20\">9</label>
\t\t\t\t<input type=\"radio\" name=\"note\" id=\"note09\" value=\"9\">
\t\t\t</li>
\t\t\t<li class=\"note-off\">
\t\t\t\t<label for=\"note10\" title=\"Note : 10 sur 20\">10</label>
\t\t\t\t<input type=\"radio\" name=\"note\" id=\"note10\" value=\"10\">
\t\t\t</li>
\t\t\t<li class=\"note-off\">
\t\t\t\t<label for=\"note11\" title=\"Note : 11 sur 20\">11</label>
\t\t\t\t<input type=\"radio\" name=\"note\" id=\"note11\" value=\"11\">
\t\t\t</li>
\t\t\t<li class=\"note-off\">
\t\t\t\t<label for=\"note12\" title=\"Note : 12 sur 20\">12</label>
\t\t\t\t<input type=\"radio\" name=\"note\" id=\"note12\" value=\"12\">
\t\t\t</li>
\t\t\t<li class=\"note-off\">
\t\t\t\t<label for=\"note13\" title=\"Note : 15 sur 20\">13</label>
\t\t\t\t<input type=\"radio\" name=\"note\" id=\"note13\" value=\"13\">
\t\t\t</li>
\t\t\t<li class=\"note-off\">
\t\t\t\t<label for=\"note14\" title=\"Note : 14 sur 20\">14</label>
\t\t\t\t<input type=\"radio\" name=\"note\" id=\"note14\" value=\"14\">
\t\t\t</li>
\t\t\t<li class=\"note-off\">
\t\t\t\t<label for=\"note015\" title=\"Note : 15 sur 20\">15</label>
\t\t\t\t<input type=\"radio\" name=\"note\" id=\"note015\" value=\"15\">
\t\t\t</li>
\t\t\t<li class=\"note-off\">
\t\t\t\t<label for=\"note16\" title=\"Note : 16 sur 20\">16</label>
\t\t\t\t<input type=\"radio\" name=\"note\" id=\"note16\" value=\"16\">
\t\t\t</li>
\t\t\t<li class=\"note-off\">
\t\t\t\t<label for=\"note17\" title=\"Note : 17 sur 20\">17</label>
\t\t\t\t<input type=\"radio\" name=\"note\" id=\"note17\" value=\"17\">
\t\t\t</li>
\t\t\t<li class=\"note-off\">
\t\t\t\t<label for=\"note18\" title=\"Note : 18 sur 20\">18</label>
\t\t\t\t<input type=\"radio\" name=\"note\" id=\"note18\" value=\"18\">
\t\t\t</li>
\t\t\t<li class=\"note-off\">
\t\t\t\t<label for=\"note19\" title=\"Note : 19 sur 20\">19</label>
\t\t\t\t<input type=\"radio\" name=\"note\" id=\"note19\" value=\"19\">
\t\t\t</li>
\t\t\t<li class=\"note-off\">
\t\t\t\t<label for=\"note20\" title=\"Note : 20 sur 20\">20</label>
\t\t\t\t<input type=\"radio\" name=\"note\" id=\"note20\" value=\"20\">
\t\t\t</li>
\t\t</ul>
\t\t<br/><br/>
\t\t";
        // line 178
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_evaluation"]) ? $context["form_evaluation"] : $this->getContext($context, "form_evaluation")), "commentaire", array()), 'label');
        echo "
\t\t<br/>
\t\t";
        // line 180
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_evaluation"]) ? $context["form_evaluation"] : $this->getContext($context, "form_evaluation")), "commentaire", array()), 'widget');
        echo "
    <div>
        <input class=\"buttonOK\" type=\"submit\" value=\"Evaluer\" />
    </div>
</form>
</div>
";
    }

    public function getTemplateName()
    {
        return "MyAppUlearnBundle:Evaluation:ajouterEvaluation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  290 => 180,  285 => 178,  196 => 92,  192 => 91,  189 => 90,  175 => 85,  169 => 83,  164 => 82,  160 => 81,  158 => 80,  153 => 78,  149 => 77,  121 => 51,  118 => 50,  103 => 37,  94 => 31,  90 => 30,  86 => 29,  82 => 28,  78 => 27,  73 => 26,  71 => 25,  61 => 17,  58 => 16,  53 => 13,  46 => 10,  44 => 9,  41 => 8,  38 => 7,  11 => 4,);
    }
}
