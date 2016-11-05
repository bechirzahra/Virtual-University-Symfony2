<?php

/* MyAppUlearnBundle:Stage:addStage.html.twig */
class __TwigTemplate_f7147a9347a88c5afc4bd0711cfe9b12cf2b99886f47179a8922af66d8ab0dbc extends Twig_Template
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

    // line 14
    public function block_Erasebody($context, array $blocks = array())
    {
        // line 15
        echo "<h1>Ajout d'un Stage</h1> 
        <br/>
        <form action=\"\" method=\"POST\">
            <table >
             
                <tr>
                    <td>";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "nomentreprise", array()), 'label', array("label" => "Entreprise: "));
        echo "</td>
                    <td>";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "nomentreprise", array()), 'widget');
        echo "</td>
                </tr>
                <tr>
                    <td>";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "duree", array()), 'label', array("label" => "Duree: "));
        echo "</td>
                    <td>";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "duree", array()), 'widget');
        echo "</td>
                </tr>
                <tr> 
                    <td> ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "domaine", array()), 'label', array("label" => "Domaine: "));
        echo "</td>
                    <td>";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "domaine", array()), 'widget');
        echo "</td>
                </tr>
                <tr> 
                    <td> ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "date", array()), 'label', array("label" => "Dtae: "));
        echo "</td>
                    <td>";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "date", array()), 'widget');
        echo "</td>
                </tr>
                <tr> 
                    <td> ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "description", array()), 'label', array("label" => "Desc: "));
        echo "</td>
                    <td>";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "description", array()), 'widget');
        echo "</td>
                </tr>
                
                <tr><td>";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "Valider", array()), 'widget');
        echo "</td></tr>
                ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), 'rest');
        echo "
            </table>
        </form>
            
       ";
    }

    public function getTemplateName()
    {
        return "MyAppUlearnBundle:Stage:addStage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 42,  118 => 41,  112 => 38,  108 => 37,  102 => 34,  98 => 33,  92 => 30,  88 => 29,  82 => 26,  78 => 25,  72 => 22,  68 => 21,  60 => 15,  57 => 14,  52 => 10,  45 => 7,  43 => 6,  40 => 5,  37 => 4,  11 => 2,);
    }
}
