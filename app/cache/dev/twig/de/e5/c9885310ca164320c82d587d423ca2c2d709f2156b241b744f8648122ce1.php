<?php

/* SymfMyBundle:Faq:listetudiant.html.twig */
class __TwigTemplate_dee5c9885310ca164320c82d587d423ca2c2d709f2156b241b744f8648122ce1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        try {
            $this->parent = $this->env->loadTemplate("MyAppUlearnBundle::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(2);

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

    // line 4
    public function block_Erasebody($context, array $blocks = array())
    {
        // line 5
        echo "    <h1>FAQ </h1>

        
    
    
    <head>
    <style>
        
table, td, th {
    border: 1px solid #357AB7;
}

table {
    width: 100%;
}

th {
    height: 40px;
}
</style>
</head>
        
        
         <table border=\"1\"width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" id=\"product-table\">
                                    
\t\t\t\t<tbody><tr>
                                        
\t\t\t\t\t<th class=\"table-header-repeat line-left\"><a>Questions</a></th>
\t\t\t\t\t<th class=\"table-header-repeat line-left\"><a>Reponses</a></th>
\t\t\t\t\t
\t\t\t\t</tr>
\t\t\t\t";
        // line 36
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["faqs"]) ? $context["faqs"] : $this->getContext($context, "faqs")));
        foreach ($context['_seq'] as $context["_key"] => $context["faq"]) {
            // line 37
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["faq"], "objet", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["faq"], "contenu", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t
                                </tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['faq'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "                               </tbody>
\t\t\t\t</table>
\t\t\t\t<!--  end product-table................................... --> 
\t\t\t\t</form>
\t\t\t</div>
\t\t\t<!--  end content-table  -->
\t\t
\t\t\t
\t\t\t<div class=\"clear\"></div>
\t\t 
\t\t</div>
\t\t<!--  end content-table-inner ............................................END  -->
\t\t</td>
\t\t<td id=\"tbl-border-right\"></td>
\t</tr>
\t<tr>
\t\t<th class=\"sized bottomleft\"></th>
\t\t<td id=\"tbl-border-bottom\">&nbsp;</td>
\t\t<th class=\"sized bottomright\"></th>
\t</tr>
\t</tbody></table>
\t<div class=\"clear\">&nbsp;</div>

</div>
<!--  end content -->
<div class=\"clear\">&nbsp;</div>
</div>
 ";
    }

    public function getTemplateName()
    {
        return "SymfMyBundle:Faq:listetudiant.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 43,  83 => 39,  79 => 38,  76 => 37,  72 => 36,  39 => 5,  36 => 4,  11 => 2,);
    }
}
