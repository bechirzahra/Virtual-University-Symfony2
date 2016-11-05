<?php

/* EguliasQuizBundle:Question:questionForm.html.twig */
class __TwigTemplate_30f6cc66acd4e9b156768bc47a174fbd2d14ad0727058dce10b62c26b601f6e3 extends Twig_Template
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
            'extra_css' => array($this, 'block_extra_css'),
            'extra_js' => array($this, 'block_extra_js'),
            'content' => array($this, 'block_content'),
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

    // line 3
    public function block_extra_css($context, array $blocks = array())
    {
        // line 4
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eguliasquiz/css/questions.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
    }

    // line 7
    public function block_extra_js($context, array $blocks = array())
    {
        // line 8
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eguliasquiz/js/questions.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        // line 12
        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("New Question ", array(), "Quiz"), "html", null, true);
        echo "
<form action=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("egulias_question_save");
        echo "\" method=\"POST\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " class=\"form-stacked\">
    <div class=\"clearfix\">
      ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'label');
        echo "
      ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'errors');
        echo "
      ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget');
        echo "
      <span class=\"help-block\">
          <strong>";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Note:", array(), "Quiz"), "html", null, true);
        echo "</strong>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("The name of the Question that will be shown when creating a new Quiz", array(), "Quiz"), "html", null, true);
        echo "
      </span>
    </div>
    <div class=\"clearfix\">
      ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "text", array()), 'label');
        echo "
      ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "text", array()), 'errors');
        echo "
      ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "text", array()), 'widget');
        echo "
      <span class=\"help-block\">
          <strong>";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Note:", array(), "Quiz"), "html", null, true);
        echo "</strong>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("The question itself. This is what will be shown when taking a quiz.", array(), "Quiz"), "html", null, true);
        echo "
      </span>
    </div>

    <input type=\"hidden\" name=\"question[type]\" value=\"choice\" />
    <input type=\"hidden\" name=\"question[choices][config]\" value=\"radio\">

    <div class=\"add_options\" >
        <div class=\"clearfix\">
            <div class=\"question_options\">
                <!-- <input type=\"hidden\" name=\"question[choices][1][label]\" value=\"a\"> -->
                <input type=\"text\" name=\"question[choices][1][value]\" class=\"choice_value\" required=\"true\" placeholder=\"Choice A\">
            </div>
            <div class=\"question_options\">
                <!-- <input type=\"hidden\" name=\"question[choices][2][label]\" value=\"b\"> -->
                <input type=\"text\" name=\"question[choices][2][value]\" class=\"choice_value\" required=\"true\" placeholder=\"Choice B\">
            </div>
            <div class=\"question_options\">
                <!-- <input type=\"hidden\" name=\"question[choices][3][label]\" value=\"c\"> -->
                <input type=\"text\" name=\"question[choices][3][value]\" class=\"choice_value\" required=\"true\" placeholder=\"Choice C\">
            </div>
            <div class=\"question_options\">
                <!-- <input type=\"hidden\" name=\"question[choices][4][label]\" value=\"d\"> -->
                <input type=\"text\" name=\"question[choices][4][value]\" class=\"choice_value\" required=\"true\" placeholder=\"Choice D\">
            </div>
        </div>
<!--
        <div class=\"clearfix\">
          <a href=\"#\">Add choice</a>
          <div class=\"question_options hidden\">
            <input type=\"text\" name=\"options[label]\" class=\"choice_label\"/>
            <span class=\"help-block\">
                <strong>";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Note:", array(), "Quiz"), "html", null, true);
        echo "</strong>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("This will be the label displayed for the option ", array(), "Quiz"), "html", null, true);
        echo "
            </span>
            <input type=\"text\" name=\"options[value]\" class=\"choice_value\"/>
            <span class=\"help-block\">
                <strong>";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Note:", array(), "Quiz"), "html", null, true);
        echo "</strong>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("This will be the value for the option ", array(), "Quiz"), "html", null, true);
        echo "
            </span>
          </div>
        </div>
-->
    </div>
";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "
<button type='submit' class=\"btn primary\">";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Save Question", array(), "Quiz"), "html", null, true);
        echo "</button>
</form>
";
    }

    public function getTemplateName()
    {
        return "EguliasQuizBundle:Question:questionForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 70,  165 => 69,  154 => 63,  145 => 59,  108 => 27,  103 => 25,  99 => 24,  95 => 23,  86 => 19,  81 => 17,  77 => 16,  73 => 15,  66 => 13,  61 => 12,  58 => 11,  51 => 8,  48 => 7,  41 => 4,  38 => 3,  11 => 1,);
    }
}
