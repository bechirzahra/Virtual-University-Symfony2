<?php

/* MyAppUlearnBundle:Module:index.html.twig */
class __TwigTemplate_ef58c0c1fdd36308be89f07ea459aa3c4257944fb1041f9eedeeb9390b485a5c extends Twig_Template
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

    // line 3
    public function block_Erasebody($context, array $blocks = array())
    {
        // line 4
        echo "    <h1>Liste Module</h1>
   
<head>
<style>
table, td, th {
    border: 1px solid #357AB7;
}
    
th {
    background-color: #357AB7;
    color: white;
}
table {
    width: 100%;
}

th {
    height: 50px;
}
</style>
</head>
    <table class=\"records_list\">
        <thead>
            <tr>
                <th>Id Module</th>
                <th>Nom Module</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 34
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 35
            echo "            <tr>
                <td><a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Module_show", array("id" => $this->getAttribute($context["entity"], "idmodule", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "idmodule", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nommodule", array()), "html", null, true);
            echo "</td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Module_show", array("id" => $this->getAttribute($context["entity"], "idmodule", array()))), "html", null, true);
            echo "\">Afficher</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Module_edit", array("id" => $this->getAttribute($context["entity"], "idmodule", array()))), "html", null, true);
            echo "\">Modifier</a>
                    </li>
                    
                </ul>
                         </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "        </tbody>
    </table>

        <ul>
        <li>
            <a href=\"";
        // line 57
        echo $this->env->getExtension('routing')->getPath("Module_new");
        echo "\">
                Ajouter un nouveau module
            </a>
        </li>
    </ul>
    ";
    }

    public function getTemplateName()
    {
        return "MyAppUlearnBundle:Module:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 57,  111 => 52,  97 => 44,  91 => 41,  84 => 37,  78 => 36,  75 => 35,  71 => 34,  39 => 4,  36 => 3,  11 => 1,);
    }
}
