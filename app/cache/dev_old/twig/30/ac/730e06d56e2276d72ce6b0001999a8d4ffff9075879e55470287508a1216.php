<?php

/* MyAppUlearnBundle:Admin:inscription.html.twig */
class __TwigTemplate_30ac730e06d56e2276d72ce6b0001999a8d4ffff9075879e55470287508a1216 extends Twig_Template
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

    // line 8
    public function block_Erasebody($context, array $blocks = array())
    {
        // line 9
        echo "

       ";
        // line 18
        echo "  
  
   <h3> Inscription </h3>
<form  method=\"POST\" action=\"\" >
   Nom : <input type=\"text\" name=\"nom\"/>
   Prenom: <input type=\"text\" name=\"prenom\"/>
   Sexe: <input type=\"text\" name=\"sexe\"/>
    <input type=\"submit\" value=\"Ajouter\">
</form>
   
   
";
    }

    public function getTemplateName()
    {
        return "MyAppUlearnBundle:Admin:inscription.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 18,  39 => 9,  36 => 8,  11 => 2,);
    }
}
