<?php

/* EguliasQuizBundle:Question:list.html.twig */
class __TwigTemplate_23df9b61049777205451180c1c76f59e4891a3f38dc36d1f9b32a331cbc89d76 extends Twig_Template
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

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Available Questions", array(), "Quiz"), "html", null, true);
        echo "</h1>
<a class=\"btn\" href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("egulias_quiz_question_add");
        echo "\">Add Question</a>
<table>
  <thead>
    <th>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Question Name", array(), "Quiz"), "html", null, true);
        echo "</th>
    <th>";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Question", array(), "Quiz"), "html", null, true);
        echo "</th>
    <th>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Question Type", array(), "Quiz"), "html", null, true);
        echo "</th>
    <th>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Actions", array(), "Quiz"), "html", null, true);
        echo "</th>
  </thead>
  <tbody>
  ";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["questions"]) ? $context["questions"] : $this->getContext($context, "questions")));
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 14
            echo "    <tr>
      <td>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "name", array()), "html", null, true);
            echo "</td>
      <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "text", array()), "html", null, true);
            echo "</td>
      <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "type", array()), "html", null, true);
            echo "</td>
      <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("egulias_quiz_question_edit", array("id" => $this->getAttribute($context["question"], "id", array()))), "html", null, true);
            echo "\">edit</a></td>
    </tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "  </tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "EguliasQuizBundle:Question:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 21,  87 => 18,  83 => 17,  79 => 16,  75 => 15,  72 => 14,  68 => 13,  62 => 10,  58 => 9,  54 => 8,  50 => 7,  44 => 4,  39 => 3,  36 => 2,  11 => 1,);
    }
}
