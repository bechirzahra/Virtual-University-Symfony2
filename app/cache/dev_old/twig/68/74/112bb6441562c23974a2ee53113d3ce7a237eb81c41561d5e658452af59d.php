<?php

/* DCSRatingBundle:Rating:control.html.twig */
class __TwigTemplate_6874112bb6441562c23974a2ee53113d3ce7a237eb81c41561d5e658452af59d extends Twig_Template
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
        $context["securityRole"] = ((array_key_exists("role", $context)) ? (_twig_default_filter((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), $this->env->getExtension('rating_extension')->getDefaultSecurityRoleFunction())) : ($this->env->getExtension('rating_extension')->getDefaultSecurityRoleFunction()));
        // line 2
        $context["permalink"] = ((array_key_exists("permalink", $context)) ? (_twig_default_filter((isset($context["permalink"]) ? $context["permalink"] : $this->getContext($context, "permalink")), $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uri", array()))) : ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uri", array())));
        // line 3
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("DCSRatingBundle:Rating:control", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "permalink" => (isset($context["permalink"]) ? $context["permalink"] : $this->getContext($context, "permalink")), "securityRole" => (isset($context["securityRole"]) ? $context["securityRole"] : $this->getContext($context, "securityRole")), "params" => ((array_key_exists("params", $context)) ? (_twig_default_filter((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), array())) : (array())))));
    }

    public function getTemplateName()
    {
        return "DCSRatingBundle:Rating:control.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  21 => 2,  19 => 1,);
    }
}
