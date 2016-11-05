<?php

/* EguliasQuizBundle::layout.html.twig */
class __TwigTemplate_22c94425c2fe1b59eeaad39c93a535e45d1192f16b69058484d09b0e275186e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'extra_css' => array($this, 'block_extra_css'),
            'quiz_bundle_title' => array($this, 'block_quiz_bundle_title'),
            'extra_js' => array($this, 'block_extra_js'),
            'navigation' => array($this, 'block_navigation'),
            'quiz_bundle_breadcrumb' => array($this, 'block_quiz_bundle_breadcrumb'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/eguliasquiz/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
        <script type=\"text/css\">
          body {padding-top: 60px;}
        </script>
        ";
        // line 9
        $this->displayBlock('extra_css', $context, $blocks);
        // line 10
        echo "        <title>";
        $this->displayBlock('quiz_bundle_title', $context, $blocks);
        echo "</title>
        <link rel=\"shortcut icon\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js\"></script>
        <script>
            window.jQuery || document.write('<script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("components/jquery/jquery.min.js"), "html", null, true);
        echo "\"><\\/script>')
        </script>

        ";
        // line 17
        $this->displayBlock('extra_js', $context, $blocks);
        // line 18
        echo "    </head>
    <body>
        <div id=\"quiz-wrapper\" class=\"container-fluid\">
          ";
        // line 21
        $this->displayBlock('navigation', $context, $blocks);
        // line 28
        echo "          <div class=\"content\">
            ";
        // line 29
        $this->displayBlock('quiz_bundle_breadcrumb', $context, $blocks);
        // line 31
        echo "            ";
        $this->displayBlock('content', $context, $blocks);
        // line 32
        echo "          </div>
        </div>
    </body>
</html>
";
    }

    // line 9
    public function block_extra_css($context, array $blocks = array())
    {
    }

    // line 10
    public function block_quiz_bundle_title($context, array $blocks = array())
    {
        echo "Quiz Bundle";
    }

    // line 17
    public function block_extra_js($context, array $blocks = array())
    {
    }

    // line 21
    public function block_navigation($context, array $blocks = array())
    {
        // line 22
        echo "          <div class=\"sidebar\">
            <p><a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("egulias_quiz_question");
        echo "\">Questions</a></p>
            <p><a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("egulias_quiz_panel");
        echo "\">Quizes</a></p>
            <p><a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("egulias_quiz_answers");
        echo "\">Answers List</a></p>
          </div>
          ";
    }

    // line 29
    public function block_quiz_bundle_breadcrumb($context, array $blocks = array())
    {
        // line 30
        echo "            ";
    }

    // line 31
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "EguliasQuizBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 31,  122 => 30,  119 => 29,  112 => 25,  108 => 24,  104 => 23,  101 => 22,  98 => 21,  93 => 17,  87 => 10,  82 => 9,  74 => 32,  71 => 31,  69 => 29,  66 => 28,  64 => 21,  59 => 18,  57 => 17,  51 => 14,  45 => 11,  40 => 10,  38 => 9,  31 => 5,  25 => 1,);
    }
}
