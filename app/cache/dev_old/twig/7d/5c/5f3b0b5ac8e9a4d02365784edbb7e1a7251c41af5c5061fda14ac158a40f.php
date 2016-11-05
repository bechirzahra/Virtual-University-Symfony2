<?php

/* MyAppUlearnBundle:Qcm:testA.html.twig */
class __TwigTemplate_7d5c5f3b0b5ac8e9a4d02365784edbb7e1a7251c41af5c5061fda14ac158a40f extends Twig_Template
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
            'espace' => array($this, 'block_espace'),
            'nav' => array($this, 'block_nav'),
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
    public function block_espace($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"gwlogo clearfix\">
";
        // line 5
        if ( !(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()))) {
            // line 6
            echo "    <div class=\"field field-name-field-logo field-type-image field-label-hidden\"><div class=\"field-items\"><div class=\"field-item even\"><img typeof=\"foaf:Image\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/EspaceEt.png"), "html", null, true);
            echo "\" width=\"323\" height=\"90\" alt=\"ULearn\" title=\"Ulearn\" /></div> </div></div>

";
        }
        // line 9
        echo "</div>
   ";
    }

    // line 12
    public function block_nav($context, array $blocks = array())
    {
        // line 13
        echo " <div class=\"panel-panel panel-col-top\">
      <div class=\"inside\"><div class=\"panel-pane pane-gwu-primary-navigation\" >
  
      
  
  <div class=\"pane-content\">
    <div id=\"menu-wrapper\"><div id=\"menu-top\"><div class=\"menu-block-wrapper menu-block-2 menu-name-menu-division-menu parent-mlid-0 menu-level-1\">
  <ul class=\"menu\">
      ";
        // line 21
        if ( !(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()))) {
            // line 22
            echo "<li class=\"first leaf has-children menu-mlid-784\"><span title=\"\"><a href=\"";
            echo $this->env->getExtension('routing')->getPath("homeEt");
            echo "\">Acceuil</a></span></li>
<li class=\"leaf has-children menu-mlid-785\"><span title=\"\"><a href=\"";
            // line 23
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
            echo "\">Profil</a></span></li>
<li class=\"leaf has-children menu-mlid-786\"><span title=\"\"><a href=\"";
            // line 24
            echo $this->env->getExtension('routing')->getPath("my_app_cours_homepage");
            echo "\">Cours</a></span></li>
<li class=\"leaf has-children menu-mlid-787\"><span title=\"\"><a href=\"";
            // line 25
            echo $this->env->getExtension('routing')->getPath("testA");
            echo "\">Examen</a></span></li>
<li class=\"last leaf has-children menu-mlid-1594\"><span title=\"\"><a href=\"";
            // line 26
            echo $this->env->getExtension('routing')->getPath("listStageEt");
            echo "\">Stage</a></span></li>
<li class=\"last leaf has-children menu-mlid-1598\"><span title=\"\"><a href=\"";
            // line 27
            echo $this->env->getExtension('routing')->getPath("listC");
            echo "\">Evaluation</a></span></li>



  
      ";
        }
        // line 33
        echo "
</ul>
            </div>

</div></div>  </div>

  
  </div>
</div>
    </div>

";
    }

    // line 46
    public function block_Erasebody($context, array $blocks = array())
    {
        // line 47
        echo " 
   <html><head><centre>
           <font color=\"#010001\"> <h4>Examen Session principal 2010</h4></font>
           
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
                            <font color=\"#6D0075\"><strong>   1. Java est un langage:<br></strong></font>
                    <li><input type=\"radio\" name=\"question1\" value=\"1\">  Compilé </li>
                    <li><input type=\"radio\" name=\"question1\" value=\"2\">  Interprété </li>
                    <li><input type=\"radio\" name=\"question1\" value=\"3\"> Compilé et interprété</li></font>
<br>
</td></tr></table>
                <table><tr><td>
                         
                        <td>
                            <font color=\"#6D0075\"><strong>2.Java est un langage dévéloppé par:<br></strong></font>
                    <li><input type=\"radio\" name=\"question2\" value=\"1\"> Hewlett-Packard</li>
                    <li><input type=\"radio\" name=\"question2\" value=\"2\"> Sun Microsystems</li>
                   <li><input type=\"radio\" name=\"question2\" value=\"3\"> Oracle</li>

<br></td></tr></table>
                <table><tr><td>
                          
                        <td>
                            <font color=\"#6D0075\"><strong>3. Pour la classe B d´efinie comme suit:
class B {
public B(){System.out.print(”Ciao”);};
public B(int i) {this(); System.out.println(”Bonjour ”+i);};
}
qu’affichera l’instruction suivante?
B monB=new B(2003);:</strong></font><br>
<li><input type=\"radio\" name=\"question3\" value=\"1\"> erreur de compilation</li>
<li><input type=\"radio\" name=\"question3\" value=\"2\"> nonCiaoBonjour 2003<br></td></tr></table>
                <table><tr><td>
                      
                        <td>
                            <font color=\"#6D0075\"><strong>4. La liaison tardive est essentielle pour assurer:</strong></font><br>
<li><input type=\"radio\" name=\"question4\" value=\"1\">l’encapsulation</li>
<li><input type=\"radio\" name=\"question4\" value=\"2\"> le polymorphisme</li>
<li><input type=\"radio\" name=\"question4\" value=\"2\"> l’héritage</li>
<li><input type=\"radio\" name=\"question4\" value=\"2\"> la marginalisation</li>
<li><br></td></tr></table>
                <table><tr><td>
                            
                        <td>
                            <font color=\"#6D0075\"><strong>5. JPour spécifier que la valeur d'une variable ne peut changer, on la déclare comme une constante avec le mot réservé ::</strong></font><br>
<li><input type=\"radio\" name=\"question5\" value=\"1\"> finalize</li>
<li><input type=\"radio\" name=\"question5\" value=\"2\"> const</li>
<li><input type=\"radio\" name=\"question5\" value=\"1\"> define</li>
<li><input type=\"radio\" name=\"question5\" value=\"2\"> final</li>
<br></td></tr></table>
                <table><tr><td>
                          
                        <td>
                            <font color=\"#6D0075\"><strong>6.De quel type primitif est le littéral 25.5F ?:</strong></font><br>
                <li><input type=\"radio\" name=\"question6\" value=\"1\"> double</li>
                <li><input type=\"radio\" name=\"question6\" value=\"2\"> float</li>
                <li><input type=\"radio\" name=\"question6\" value=\"3\"> long </li>
                <br></td></tr></table> 
              

<p align=\"center\"> 
<INPUT type=\"button\" value=\"Score obtenu\" onClick=\"getScore(this.form)\">
</p>

</form>    </body></html>
";
    }

    public function getTemplateName()
    {
        return "MyAppUlearnBundle:Qcm:testA.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 47,  118 => 46,  103 => 33,  94 => 27,  90 => 26,  86 => 25,  82 => 24,  78 => 23,  73 => 22,  71 => 21,  61 => 13,  58 => 12,  53 => 9,  46 => 6,  44 => 5,  41 => 4,  38 => 3,  11 => 1,);
    }
}
