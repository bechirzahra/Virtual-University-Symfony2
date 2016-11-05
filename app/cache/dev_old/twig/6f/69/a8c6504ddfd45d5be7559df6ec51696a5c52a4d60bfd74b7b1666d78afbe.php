<?php

/* EguliasQuizBundle:Quiz:update_quiz.html.twig */
class __TwigTemplate_6f69a8c6504ddfd45d5be7559df6ec51696a5c52a4d60bfd74b7b1666d78afbe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("EguliasQuizBundle:Quiz:add_quiz.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'quiz_form_header' => array($this, 'block_quiz_form_header'),
            'form_action' => array($this, 'block_form_action'),
            'question_url' => array($this, 'block_question_url'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EguliasQuizBundle:Quiz:add_quiz.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_quiz_form_header($context, array $blocks = array())
    {
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Edit Quiz"), "html", null, true);
    }

    // line 4
    public function block_form_action($context, array $blocks = array())
    {
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("egulias_quiz_update", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo " ";
    }

    // line 5
    public function block_question_url($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("egulias_quiz_add_question", array("quiz" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
    }

    public function getTemplateName()
    {
        return "EguliasQuizBundle:Quiz:update_quiz.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 5,  45 => 4,  38 => 3,  11 => 1,);
    }
}
