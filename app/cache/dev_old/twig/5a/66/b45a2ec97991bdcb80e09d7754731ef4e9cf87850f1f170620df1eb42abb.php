<?php

/* EguliasQuizBundle:Question:quizQuestionForm.html.twig */
class __TwigTemplate_5a66b45a2ec97991bdcb80e09d7754731ef4e9cf87850f1f170620df1eb42abb extends Twig_Template
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
        echo "<tr>
  <td>
    <h5>";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("New Question", array(), "Quiz"), "html", null, true);
        echo "</h5>
    <div class=\"clearfix\">
    ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["questionForm"]) ? $context["questionForm"] : $this->getContext($context, "questionForm")), "question", array()), 'label');
        echo "
    ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["questionForm"]) ? $context["questionForm"] : $this->getContext($context, "questionForm")), "question", array()), 'errors');
        echo "
    ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["questionForm"]) ? $context["questionForm"] : $this->getContext($context, "questionForm")), "question", array()), 'widget');
        echo "
    </div>
    <div class=\"clearfix\">
    ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["questionForm"]) ? $context["questionForm"] : $this->getContext($context, "questionForm")), "quiz", array()), 'label');
        echo "
    ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["questionForm"]) ? $context["questionForm"] : $this->getContext($context, "questionForm")), "quiz", array()), 'errors');
        echo "
    ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["questionForm"]) ? $context["questionForm"] : $this->getContext($context, "questionForm")), "quiz", array()), 'widget');
        echo "
    </div>
    <div class=\"clearfix\">
    ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["questionForm"]) ? $context["questionForm"] : $this->getContext($context, "questionForm")), "delete", array()), 'label');
        echo "
    ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["questionForm"]) ? $context["questionForm"] : $this->getContext($context, "questionForm")), "delete", array()), 'errors');
        echo "
    ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["questionForm"]) ? $context["questionForm"] : $this->getContext($context, "questionForm")), "delete", array()), 'widget');
        echo "
    </div>
    ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["questionForm"]) ? $context["questionForm"] : $this->getContext($context, "questionForm")), 'widget');
        echo "
  </td>
</tr>
";
    }

    public function getTemplateName()
    {
        return "EguliasQuizBundle:Question:quizQuestionForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 19,  64 => 17,  60 => 16,  56 => 15,  50 => 12,  46 => 11,  42 => 10,  36 => 7,  32 => 6,  28 => 5,  23 => 3,  19 => 1,);
    }
}
