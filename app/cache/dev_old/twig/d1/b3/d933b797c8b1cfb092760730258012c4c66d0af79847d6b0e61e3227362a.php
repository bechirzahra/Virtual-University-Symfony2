<?php

/* EguliasQuizBundle:Quiz:add_quiz.html.twig */
class __TwigTemplate_d1b3d933b797c8b1cfb092760730258012c4c66d0af79847d6b0e61e3227362a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("EguliasQuizBundle::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'extra_js' => array($this, 'block_extra_js'),
            'content' => array($this, 'block_content'),
            'quiz_form_header' => array($this, 'block_quiz_form_header'),
            'form_action' => array($this, 'block_form_action'),
            'question_url' => array($this, 'block_question_url'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EguliasQuizBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_extra_js($context, array $blocks = array())
    {
        // line 5
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eguliasquiz/js/quiz_control.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        echo "        <h1>";
        $this->displayBlock('quiz_form_header', $context, $blocks);
        echo "</h1>
<form action=\"";
        // line 10
        $this->displayBlock('form_action', $context, $blocks);
        echo "\" method=\"POST\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " class = \"form-stacked\" >

    <div class=\"clearfix\">
      ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'label');
        echo "
      ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'errors');
        echo "
      ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget');
        echo "
      <span class=\"help-block\"><strong>";
        // line 16
        echo $this->env->getExtension('translator')->getTranslator()->trans("Note:", array(), "messages");
        echo "</strong>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("The name of the Quiz", array(), "Quiz"), "html", null, true);
        echo "</span>
    </div>

    <div class=\"clearfix\">
      ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "questions", array()), 'label');
        echo "
      <span class=\"help-block\"><a href=\"";
        // line 21
        $this->displayBlock('question_url', $context, $blocks);
        echo "\"
      class='addQuestion' >Add a Question</a></span>
      ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "questions", array()), 'errors');
        echo "
      ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "questions", array()), 'widget');
        echo "
      <span class=\"help-block\"><strong>";
        // line 25
        echo $this->env->getExtension('translator')->getTranslator()->trans("Note:", array(), "messages");
        echo "</strong>";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Use the link above to add new questions to the quiz", array(), "messages");
        echo "</span>
    </div>

    ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "

    <table id='questions_table'></table>
    <button type='submit' class=\"btn primary\">";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Save Quiz", array(), "Quiz"), "html", null, true);
        echo "</button>
</form>
";
    }

    // line 9
    public function block_quiz_form_header($context, array $blocks = array())
    {
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("New Quiz"), "html", null, true);
    }

    // line 10
    public function block_form_action($context, array $blocks = array())
    {
        echo " ";
        echo $this->env->getExtension('routing')->getPath("egulias_quiz_save");
        echo " ";
    }

    // line 21
    public function block_question_url($context, array $blocks = array())
    {
        echo $this->env->getExtension('routing')->getPath("egulias_quiz_add_question");
    }

    public function getTemplateName()
    {
        return "EguliasQuizBundle:Quiz:add_quiz.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 21,  132 => 10,  125 => 9,  118 => 31,  112 => 28,  104 => 25,  100 => 24,  96 => 23,  91 => 21,  87 => 20,  78 => 16,  74 => 15,  70 => 14,  66 => 13,  58 => 10,  53 => 9,  50 => 8,  43 => 5,  40 => 4,  11 => 1,);
    }
}
