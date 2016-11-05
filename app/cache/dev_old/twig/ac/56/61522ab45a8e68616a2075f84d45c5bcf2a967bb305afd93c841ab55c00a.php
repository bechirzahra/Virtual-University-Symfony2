<?php

/* MyAppMailBundle:Default:formMail.html.twig */
class __TwigTemplate_ac5661522ab45a8e68616a2075f84d45c5bcf2a967bb305afd93c841ab55c00a extends Twig_Template
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

    // line 4
    public function block_Erasebody($context, array $blocks = array())
    {
        // line 5
        echo "  
 <html>
    
    <head> <title> Formulaire Mail</title>
    </head>
    
    <form action=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("my_app_mail_sendMail");
        echo "\" method=\"POST\" >
        <h1> Votre Boite Mail </h1>
        <br/>
         <br/>
         <br/>
         <h2>
         Sujet :       
         </h2>
         <input type=\"text\" name=\"Subject\">
          <br/>
          <h2>
          Email :
          </h2>
        <input type=\"text\" name=\"email\">
          <br/>
         <h2>
         Texte :
          </h2>
          <textarea name=\"message\" ></textarea> 
        <input type=\"submit\" name=\"send\"/>
          
    </form>  
 
</html>
";
    }

    public function getTemplateName()
    {
        return "MyAppMailBundle:Default:formMail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 11,  39 => 5,  36 => 4,  11 => 2,);
    }
}
