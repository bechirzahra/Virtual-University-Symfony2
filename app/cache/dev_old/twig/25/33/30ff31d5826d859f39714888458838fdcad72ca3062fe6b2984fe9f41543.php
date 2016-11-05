<?php

/* MyAppUlearnBundle:Qcm:testC.html.twig */
class __TwigTemplate_253330ff31d5826d859f39714888458838fdcad72ca3062fe6b2984fe9f41543 extends Twig_Template
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
        echo "   <html><head><centre>
           <font color=\"#010001\"> <h4>____________Test 4____________</h4></font>
<script language=\"JavaScript\">
function getScore() {
var score; score = 0;
var numQues=2;
if (document.quizz.question1[0].checked == true) score++;
if (document.quizz.question2[1].checked == true) score++;

window.alert(\"score : \"+ score*100/numQues + \"%\"); }
</script> </head>
<body>
<p><font color=\"#010001\"><h3>Ceci est un test &agrave; choix multiples. En fin de .... Bonne chance !!</h3></font></p>
<form name= \"quizz\"> 
<table border=\"3\" Bgcolor=\"White\">
        <tr><td>
                <table><tr><td>
                            <div><img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(""), "html", null, true);
        echo "\" width=\"150\" height=\"100\" alt=\"\" /></td></div>
                        <td>
                            <font color=\"#6D0075\"><strong>   1. Que signifie TCP ?:<br></strong></font>
                    <li><input type=\"radio\" name=\"question1\" value=\"1\"> Traduction Controlée Protocolaire</li>
                    <li><input type=\"radio\" name=\"question1\" value=\"2\"> Transmission Control Protocol</li>
                    <li><input type=\"radio\" name=\"question1\" value=\"3\"> Transmission Cellulaire Partagé</li></font>
<br>
</td></tr></table>
                <table><tr><td>
                            <div><img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(""), "html", null, true);
        echo "\" width=\"150\" height=\"100\" alt=\"\" /></div></td>
                        <td>
                            <font color=\"#6D0075\"><strong>2.Que signifie IP ? :<br></strong></font>
                    <li><input type=\"radio\" name=\"question2\" value=\"1\"> Internet Protocol</li>
                    <li><input type=\"radio\" name=\"question2\" value=\"2\"> Intranet Protocol</li>
<li><input type=\"radio\" name=\"question2\" value=\"3\"> Inter-réseau Protocol</li>

<br></td></tr></table>
                <table><tr><td>
                            <div><img src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/c4.PNG"), "html", null, true);
        echo "\" width=\"150\" height=\"100\" alt=\"\" /></div></td>
                        <td>
                            <font color=\"#6D0075\"><strong>3.L’éco-conduite a des effets positifs, en terme de sécurité routière:</strong></font><br>
<li><input type=\"radio\" name=\"question3\" value=\"1\"> oui</li>
<li><input type=\"radio\" name=\"question3\" value=\"2\"> non</li>

<br></td></tr></table>
                <table><tr><td>
                            <div><img src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/d4.PNG"), "html", null, true);
        echo "\" width=\"150\" height=\"100\" alt=\"\" /></div></td>
                        <td>
                            <font color=\"#6D0075\"><strong>4. Je peux m'engager dans cette rue:</strong></font><br>
<li><input type=\"radio\" name=\"question4\" value=\"1\"> oui</li>
<li><input type=\"radio\" name=\"question4\" value=\"2\"> non</li>

<li><br></td></tr></table>
                <table><tr><td>
                            <div><img src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/e4.PNG"), "html", null, true);
        echo "\" width=\"150\" height=\"100\" alt=\"\" /></div></td>
                        <td>
                            <font color=\"#6D0075\"><strong>5. Je peux aller tout droit:</strong></font><br>
<li><input type=\"radio\" name=\"question5\" value=\"1\"> oui</li>
<li><input type=\"radio\" name=\"question5\" value=\"2\"> non</li>

<br></td></tr></table>
                <table><tr><td>
                            <div><img src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/f4.PNG"), "html", null, true);
        echo "\" width=\"150\" height=\"100\" alt=\"\" /></div></td>
                        <td>
                            <font color=\"#6D0075\"><strong>6.Le covoiturage permet de:</strong></font><br>
                <li><input type=\"radio\" name=\"question6\" value=\"1\"> réduire le risque d'accident</li>
                <li><input type=\"radio\" name=\"question6\" value=\"2\"> réduire les rejets de CO2</li>
                <li><input type=\"radio\" name=\"question6\" value=\"3\"> réduire les nuisances sonores </li>
                <br></td></tr></table>
                <table><tr><td>
                            <div><img src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/g4.PNG"), "html", null, true);
        echo "\" width=\"150\" height=\"100\" alt=\"\" /></div></td>
                        <td>
                <font color=\"#6D0075\"><strong>7.J'ai suivi la formation conduite accompagnée à 15 ans, je pourrai conduire seul:</strong></font><br>
                <li><input type=\"radio\" name=\"question7\" value=\"1\"> à 17 ans</li>
                <li><input type=\"radio\" name=\"question7\" value=\"2\"> à 17 ans et demi</li>
                <li><input type=\"radio\" name=\"question7\" value=\"3\"> à 18 ans</li>
                <br></td></tr></table>
                <table><tr><td>
                            <div><img src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/h4.PNG"), "html", null, true);
        echo "\" width=\"150\" height=\"100\" alt=\"\" /></div></td>
                        <td>
                <font color=\"#6D0075\"><strong>8.Le premier panneau indique:</strong></font><br>
               <li> <input type=\"radio\" name=\"question8\" value=\"1\">  un pont sur la chaussée</li>
                <li><input type=\"radio\" name=\"question8\" value=\"2\">  une voie de chemin de fer</li>
                <li><input type=\"radio\" name=\"question8\" value=\"3\"> un tunnel</li>
               <li> <input type=\"radio\" name=\"question8\" value=\"4\"> une obligation d'allumer les feux de croisement</li>
                <br></td></tr></table>
                <table><tr><td>
                            <div><img src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/i4.PNG"), "html", null, true);
        echo "\" width=\"150\" height=\"100\" alt=\"\" /></div></td>
                        <td>
                <font color=\"#6D0075\"><strong>9.Sur un véhicule, les systèmes ABS (système d'antiblocage des roues) et AFU (aide au freinage d'urgence) sont utiles:</strong></font><br>
               <li> <input type=\"radio\" name=\"question9\" value=\"1\">en cas de freinage d'urgence</li>
                <li><input type=\"radio\" name=\"question9\" value=\"2\"> pour conserver une bonne trajectoire</li>
                <li><input type=\"radio\" name=\"question9\" value=\"3\"> lors de tous les freinages</li>
                <br></td></tr></table>
          
<p align=\"center\"> 
<INPUT type=\"button\" value=\"Score obtenu\" onClick=\"getScore(this.form)\">
</p>

</form>    </body></html>
";
    }

    public function getTemplateName()
    {
        return "MyAppUlearnBundle:Qcm:testC.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 87,  137 => 78,  126 => 70,  115 => 62,  104 => 54,  93 => 46,  82 => 38,  70 => 29,  58 => 20,  39 => 3,  36 => 2,  11 => 1,);
    }
}
