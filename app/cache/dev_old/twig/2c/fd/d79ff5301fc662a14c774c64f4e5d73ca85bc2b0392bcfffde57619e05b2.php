<?php

/* EguliasQuizBundle:Quiz:take_quiz.html.twig */
class __TwigTemplate_2cfdd79ff5301fc662a14c774c64f4e5d73ca85bc2b0392bcfffde57619e05b2 extends Twig_Template
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
            'content' => array($this, 'block_content'),
            'form_action' => array($this, 'block_form_action'),
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
    public function block_content($context, array $blocks = array())
    {
        // line 4
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "hasFlash", array(0 => "error"), "method")) {
            // line 5
            echo "    <div class=\"text-error\">
        ";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flash", array(0 => "error"), "method"), "html", null, true);
            echo "
    </div>
";
        }
        // line 9
        echo "<h2>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Do the Quiz", array(), "Quiz"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quiz"]) ? $context["quiz"] : $this->getContext($context, "quiz")), "name", array()), "html", null, true);
        echo "</h2>
<form action=\"";
        // line 10
        $this->displayBlock('form_action', $context, $blocks);
        echo "\" method=\"POST\" ";
        echo         // line 11
$this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["quizForm"]) ? $context["quizForm"] : $this->getContext($context, "quizForm")), 'enctype');
        echo " class=\"form-stacked\" >
    <input class=\"span3\" type=\"email\" name=\"email\" required placeholder=\"E-mail\">
    <div class=\"clearfix\">
    ";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["quizForm"]) ? $context["quizForm"] : $this->getContext($context, "quizForm")), "questions", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["quizquestion"]) {
            // line 15
            echo "        <h5>";
            echo $this->env->getExtension('translator')->getTranslator()->trans("Question nº", array(), "messages");
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "</h5>
        <h3>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["quizquestion"], "vars", array()), "value", array()), "question", array()), "name", array()), "html", null, true);
            echo "</h3>
        <p>
            ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["quizquestion"], "vars", array()), "value", array()), "question", array()), "text", array()), "html", null, true);
            echo "
        </p>

        ";
            // line 21
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["quizquestion"], "answer", array()), 'errors');
            echo "
        ";
            // line 22
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["quizquestion"], "answer", array()), 'widget');
            echo "
        ";
            // line 23
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["quizquestion"], 'widget');
            echo "
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quizquestion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "    </div>
    ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["quizForm"]) ? $context["quizForm"] : $this->getContext($context, "quizForm")), "_token", array()), 'widget');
        echo "
<button type='submit' class=\"btn primary\">";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Save Response", array(), "Quiz"), "html", null, true);
        echo "</button>
</form>
";
    }

    // line 10
    public function block_form_action($context, array $blocks = array())
    {
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("egulias_quiz_save_response", array("id" => $this->getAttribute((isset($context["quiz"]) ? $context["quiz"] : $this->getContext($context, "quiz")), "id", array()))), "html", null, true);
        echo " ";
    }

    public function getTemplateName()
    {
        return "EguliasQuizBundle:Quiz:take_quiz.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 10,  132 => 27,  128 => 26,  125 => 25,  109 => 23,  105 => 22,  101 => 21,  95 => 18,  90 => 16,  84 => 15,  67 => 14,  61 => 11,  58 => 10,  51 => 9,  45 => 6,  42 => 5,  40 => 4,  37 => 3,  11 => 1,);
    }
}
