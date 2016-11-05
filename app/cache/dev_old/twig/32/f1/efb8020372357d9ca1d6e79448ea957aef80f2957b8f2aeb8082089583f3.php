<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_32f1efb8020372357d9ca1d6e79448ea957aef80f2957b8f2aeb8082089583f3 extends Twig_Template
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
        echo "    ";
        if ($this->env->getExtension('security')->isGranted("ROLE_ENSEIGNANT")) {
            // line 4
            echo "    <div class=\"gwlogo clearfix\">
    <div class=\"field field-name-field-logo field-type-image field-label-hidden\"><div class=\"field-items\"><div class=\"field-item even\"><img typeof=\"foaf:Image\" src=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/ulearn1.png"), "html", null, true);
            echo "\" width=\"323\" height=\"90\" alt=\"ULearn\" title=\"ULearn\" /></div></div>  

  </div>
    </div>
    ";
        }
        // line 10
        echo "
    ";
        // line 11
        if ($this->env->getExtension('security')->isGranted("ROLE_ETUDIANT")) {
            // line 12
            echo "    <div class=\"gwlogo clearfix\">
    <div class=\"field field-name-field-logo field-type-image field-label-hidden\"><div class=\"field-items\"><div class=\"field-item even\"><img typeof=\"foaf:Image\" src=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/EspaceEt.png"), "html", null, true);
            echo "\" width=\"323\" height=\"90\" alt=\"ULearn\" title=\"ULearn\" /></div></div>  

  </div>
    </div>
    ";
        }
        // line 18
        echo "    
    ";
        // line 19
        if ($this->env->getExtension('security')->isGranted("ROLE_CHEFENTREPRISE")) {
            // line 20
            echo "    <div class=\"gwlogo clearfix\">
    <div class=\"field field-name-field-logo field-type-image field-label-hidden\"><div class=\"field-items\"><div class=\"field-item even\"><img typeof=\"foaf:Image\" src=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/EspaceCh.png"), "html", null, true);
            echo "\" width=\"323\" height=\"90\" alt=\"ULearn\" title=\"ULearn\" /></div></div>  

  </div>
    </div>
    ";
        }
        // line 26
        echo "    
    ";
        // line 27
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 28
            echo "    <div class=\"gwlogo clearfix\">
    <div class=\"field field-name-field-logo field-type-image field-label-hidden\"><div class=\"field-items\"><div class=\"field-item even\"><img typeof=\"foaf:Image\" src=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/EspaceAd.png"), "html", null, true);
            echo "\" width=\"323\" height=\"90\" alt=\"ULearn\" title=\"ULearn\" /></div></div>  

  </div>
    </div>
    ";
        }
    }

    // line 37
    public function block_Erasebody($context, array $blocks = array())
    {
        // line 38
        $this->env->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 38,  104 => 37,  94 => 29,  91 => 28,  89 => 27,  86 => 26,  78 => 21,  75 => 20,  73 => 19,  70 => 18,  62 => 13,  59 => 12,  57 => 11,  54 => 10,  46 => 5,  43 => 4,  40 => 3,  37 => 2,  11 => 1,);
    }
}
