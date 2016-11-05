<?php

/* EguliasQuizBundle:Answer:index.html.twig */
class __TwigTemplate_21c94e5035a88cefddda9678f966e134751f8348b493a19d93d63abb6e9fb4be extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Answered Results", array(), "Quiz"), "html", null, true);
        echo "</h1>
<table>
  <thead>
    <th>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Quiz Instance UUID", array(), "Quiz"), "html", null, true);
        echo "</th>
    <th>";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Quiz Name", array(), "Quiz"), "html", null, true);
        echo "</th>
    <th>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Question", array(), "Quiz"), "html", null, true);
        echo "</th>
    <th>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Answer", array(), "Quiz"), "html", null, true);
        echo "</th>
    <th>";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Answer Date", array(), "Quiz"), "html", null, true);
        echo "</th>
  </thead>
  <tbody>
  ";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["answers"]) ? $context["answers"] : $this->getContext($context, "answers")));
        foreach ($context['_seq'] as $context["_key"] => $context["answer"]) {
            // line 15
            echo "    <tr>
      <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["answer"], "getquizuuid", array()), "html", null, true);
            echo "</td>
      <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["answer"], "getquizquestion", array()), "getquiz", array()), "name", array()), "html", null, true);
            echo "</td>
      <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["answer"], "getquizquestion", array()), "getquestion", array()), "text", array()), "html", null, true);
            echo "</td>
      <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["answer"], "getresponse", array()), "gettext", array()), "html", null, true);
            echo "</td>
      <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["answer"], "created", array()), "format", array(0 => "d/m/Y - h:i:s"), "method"), "html", null, true);
            echo "</td>
    </tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['answer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "  </tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "EguliasQuizBundle:Answer:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 23,  91 => 20,  87 => 19,  83 => 18,  79 => 17,  75 => 16,  72 => 15,  68 => 14,  62 => 11,  58 => 10,  54 => 9,  50 => 8,  46 => 7,  39 => 4,  36 => 3,  11 => 1,);
    }
}
