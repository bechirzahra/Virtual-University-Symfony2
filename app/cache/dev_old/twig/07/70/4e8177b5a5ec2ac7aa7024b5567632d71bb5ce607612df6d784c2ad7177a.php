<?php

/* SymfMyBundle:Faq:list.html.twig */
class __TwigTemplate_07704e8177b5a5ec2ac7aa7024b5567632d71bb5ce607612df6d784c2ad7177a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("MyAppUlearnBundle::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'Erasebody' => array($this, 'block_Erasebody'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MyAppUlearnBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_Erasebody($context, array $blocks = array())
    {
        // line 3
        echo "<body><fieldset>
    
\t
\t  <head>
    <style>
        
table, td, th {
    border: 1px solid #357AB7;
}

table {
    width: 100%;
}

th {
    height: 40px;
    background-color: #357AB7;
}
</style>
</head>
\t\t<!--  start content-table-inner ...................................................................... START -->
<h1>FAQ</h1>
<table border=\"\">
    <tr>
        <td> Questions </td>
        <td> Réponses </td>
        
        
        ";
        // line 33
        echo "        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["faqs"]) ? $context["faqs"] : $this->getContext($context, "faqs")));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 34
            echo "        <tr>
            <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "objet", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "contenu", array()), "html", null, true);
            echo "</td>
            
           
          

        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "     
</tr>
</table>
    <td>           <a href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("faq_ajouter");
        echo "\">Ajouter</a>
</td>

  </fieldset>
</body>
";
    }

    public function getTemplateName()
    {
        return "SymfMyBundle:Faq:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 46,  94 => 43,  81 => 36,  77 => 35,  74 => 34,  69 => 33,  39 => 3,  36 => 2,  11 => 1,);
    }
}
