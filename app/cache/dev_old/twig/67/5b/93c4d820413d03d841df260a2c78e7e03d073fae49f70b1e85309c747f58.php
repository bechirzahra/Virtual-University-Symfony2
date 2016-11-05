<?php

/* DCSRatingBundle:Rating:rating.html.twig */
class __TwigTemplate_675b93c4d820413d03d841df260a2c78e7e03d073fae49f70b1e85309c747f58 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("DCSRatingBundle:Rating:showRate", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))));
    }

    public function getTemplateName()
    {
        return "DCSRatingBundle:Rating:rating.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
