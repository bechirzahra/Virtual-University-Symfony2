<?php

/* EguliasQuizBundle:Quiz:index.html.twig */
class __TwigTemplate_55af2b4e92344a943477b93ba84f0b2f7a8d1e793ea243a2f27791ce36966add extends Twig_Template
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

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Available Quizes", array(), "Quiz"), "html", null, true);
        echo "</h1>
";
        // line 5
        if ((twig_length_filter($this->env, (isset($context["quizes"]) ? $context["quizes"] : $this->getContext($context, "quizes"))) == 0)) {
            // line 6
            echo "    <a class=\"btn\" href=\"";
            echo $this->env->getExtension('routing')->getPath("egulias_quiz_add");
            echo "\">Add Quiz</a>
";
        }
        // line 8
        echo "<table>
  <thead>
    <th>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Quiz Name", array(), "Quiz"), "html", null, true);
        echo "</th>
    <th>";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Questions", array(), "Quiz"), "html", null, true);
        echo "</th>
    <th>";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Actions", array(), "Quiz"), "html", null, true);
        echo "</th>
  </thead>
  <tbody>
  ";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["quizes"]) ? $context["quizes"] : $this->getContext($context, "quizes")));
        foreach ($context['_seq'] as $context["_key"] => $context["quiz"]) {
            // line 16
            echo "    <tr>
      <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["quiz"], "name", array()), "html", null, true);
            echo "</td>
      <td>
      ";
            // line 19
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["quiz"], "questions", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
                // line 20
                echo "        ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["question"], "question", array()), "name", array()), "html", null, true);
                echo ",
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "      </td>
      <td>
        <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("egulias_quiz_edit", array("id" => $this->getAttribute($context["quiz"], "id", array()))), "html", null, true);
            echo "\">Modify</a> |
        <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("egulias_quiz_take", array("id" => $this->getAttribute($context["quiz"], "id", array()))), "html", null, true);
            echo "\">Take</a>   |
        <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("egulias_selected_quiz_answers", array("id" => $this->getAttribute($context["quiz"], "id", array()))), "html", null, true);
            echo "\">See them</a>
      </td>
    </tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quiz'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "  </tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "EguliasQuizBundle:Quiz:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 30,  107 => 26,  103 => 25,  99 => 24,  95 => 22,  86 => 20,  82 => 19,  77 => 17,  74 => 16,  70 => 15,  64 => 12,  60 => 11,  56 => 10,  52 => 8,  46 => 6,  44 => 5,  39 => 4,  36 => 3,  11 => 1,);
    }
}
