<?php

/* DCSRatingBundle:Rating:star.html.twig */
class __TwigTemplate_33f14a65e90a7dd0f3622fd1e4b08979df75005b3ee2c071753e9c0e7b3987c9 extends Twig_Template
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
        ob_start();
        // line 2
        echo "    <div class=\"dcs-rating-container\">
        ";
        // line 3
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range((isset($context["maxValue"]) ? $context["maxValue"] : $this->getContext($context, "maxValue")), 1));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 4
            echo "            ";
            $context["style"] = "";
            // line 5
            echo "            ";
            if (($context["i"] <= (isset($context["rate"]) ? $context["rate"] : $this->getContext($context, "rate")))) {
                // line 6
                echo "                ";
                $context["style"] = "full";
                // line 7
                echo "            ";
            } else {
                // line 8
                echo "                ";
                $context["style"] = (($this->env->getExtension('rating_extension')->isHalfStarFilter((isset($context["rate"]) ? $context["rate"] : $this->getContext($context, "rate")), $context["i"])) ? ("half") : (""));
                // line 9
                echo "            ";
            }
            // line 10
            echo "            <span class=\"star ";
            echo twig_escape_filter($this->env, (isset($context["style"]) ? $context["style"] : $this->getContext($context, "style")), "html", null, true);
            echo "\">☆</span>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "DCSRatingBundle:Rating:star.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 12,  46 => 10,  43 => 9,  40 => 8,  37 => 7,  34 => 6,  31 => 5,  28 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
