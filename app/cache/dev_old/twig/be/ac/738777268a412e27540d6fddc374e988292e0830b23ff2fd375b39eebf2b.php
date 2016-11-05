<?php

/* MyAppUlearnBundle:Qcm:testB.html.twig */
class __TwigTemplate_beac738777268a412e27540d6fddc374e988292e0830b23ff2fd375b39eebf2b extends Twig_Template
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
           <font color=\"#010001\"> <h4>Examen Session Rattrapage 2010</h4></font>
           
<script language=\"JavaScript\">
function getScore() {
var score; score = 0;
var numQues=6;
if (document.quizz.question1[2].checked == true) score++;
if (document.quizz.question2[1].checked == true) score++;
if (document.quizz.question3[1].checked == true) score++;
if (document.quizz.question4[1].checked == true) score++;
if (document.quizz.question5[3].checked == true)score++;
if (document.quizz.question6[1].checked == true) score++;

window.alert(\"score : \"+ score*100/numQues + \"%\"); }
</script> </head>
<body>
<p><font color=\"#010001\"><h3>Ceci est un test &agrave; choix multiples</h3></font></p>
<form name= \"quizz\"> 
<table border=\"3\" Bgcolor=\"White\">
        <tr><td>
                <table><tr><td>
                          
                        <td>
                            <font color=\"#6D0075\"><strong>   1. On considére la fonction f(x) = (2x–3)²–16 Après développement on obtient ::<br></strong></font>
                    <li><input type=\"radio\" name=\"question1\" value=\"1\"> f(x) = 4x²–25</li>
                    <li><input type=\"radio\" name=\"question1\" value=\"2\"> f(x) = 2x²–12x–7</li>
                    <li><input type=\"radio\" name=\"question1\" value=\"3\"> f(x) = 4x²–12x–7</li></font>
<br>
</td></tr></table>
                <table><tr><td>
                           
                        <td>
                            <font color=\"#6D0075\"><strong>2.On considére la fonction f(x) = (2x–3)²–16:Après factorisation on obtient ::<br></strong></font>
                    <li><input type=\"radio\" name=\"question2\" value=\"1\"> f(x) = (2x–7)(2x+1)</li>
                    <li><input type=\"radio\" name=\"question2\" value=\"2\">  f(x) = (2x–19)(2x+13)</li>
<li><input type=\"radio\" name=\"question2\" value=\"3\"> f(x) = (2x–19)²</li>

<br></td></tr></table>
                <table><tr><td>
                            
                        <td>
                            <font color=\"#6D0075\"><strong>3.On considére la fonction f(x) = (2x–3)²–16:L'image de 0 par f est :</strong></font><br>
<li><input type=\"radio\" name=\"question3\" value=\"1\"> 16 </li>
<li><input type=\"radio\" name=\"question3\" value=\"2\"> –7</li>
<li><input type=\"radio\" name=\"question3\" value=\"2\"> –15</li>
<br></td></tr></table>
                <table><tr><td>
                           
                        <td>
                            <font color=\"#6D0075\"><strong>4.On considére la fonction f(x) = (2x–3)²–16: L'image de 1 par f est :</strong></font><br>
<li><input type=\"radio\" name=\"question4\" value=\"1\"> –13</li>
<li><input type=\"radio\" name=\"question4\" value=\"2\"> -14</li>
<li><input type=\"radio\" name=\"question4\" value=\"2\"> -15</li>

<br></td></tr></table>
                <table><tr><td>
                            
                        <td>
                            <font color=\"#6D0075\"><strong>5. f(x) = (2x–3)²–16:</strong></font><br>
<li><input type=\"radio\" name=\"question5\" value=\"1\"> 1</li>
<li><input type=\"radio\" name=\"question5\" value=\"2\"> 33</li>
<li><input type=\"radio\" name=\"question5\" value=\"2\"> -47</li>

<br></td></tr></table>
                <table><tr><td>
                           
                        <td>
                            <font color=\"#6D0075\"><strong>6.Les antécédents de 0 par f sont:</strong></font><br>
 <li><input type=\"radio\" name=\"question6\" value=\"1\"> –1/2 et 7/2</li>
 <li><input type=\"radio\" name=\"question6\" value=\"2\">–1/3 et 7/3</li>
 <li><input type=\"radio\" name=\"question6\" value=\"3\">   –2/5 et 5/6 </li>
 <br></td></tr></table>
              

<p align=\"center\"> 
<INPUT type=\"button\" value=\"Score obtenu\" onClick=\"getScore(this.form)\">
</p>

</form>    </body></html>
";
    }

    public function getTemplateName()
    {
        return "MyAppUlearnBundle:Qcm:testB.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 3,  36 => 2,  11 => 1,);
    }
}
