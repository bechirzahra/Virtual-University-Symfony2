<?php

/* MyAppUlearnBundle:Default:ContactUs.html.twig */
class __TwigTemplate_a614fb7d14f0a6d9e83221998ead4f6fcb9de9f78e0cef4aa2d2126ea9fcd5cd extends Twig_Template
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
            'title' => array($this, 'block_title'),
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
    public function block_title($context, array $blocks = array())
    {
        echo " <title>Cours ULearn</title>";
    }

    // line 5
    public function block_nav($context, array $blocks = array())
    {
        // line 6
        echo "
      <div class=\"panel-panel panel-col-top\">
      <div class=\"inside\"><div class=\"panel-pane pane-gwu-primary-navigation\" >
  
      
  
  <div class=\"pane-content\">
    <div id=\"menu-wrapper\"><div id=\"menu-top\"><div class=\"menu-block-wrapper menu-block-2 menu-name-menu-division-menu parent-mlid-0 menu-level-1\">
  <ul class=\"menu\"><li class=\"first leaf has-children menu-mlid-784\"><span title=\"\"><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("Home");
        echo "\">Acceuil</a></span></li>
<li class=\"leaf has-children menu-mlid-785\"><span title=\"\"><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("Home");
        echo "\">Cours</a></span></li>
<li class=\"leaf has-children menu-mlid-786\"><span title=\"\"><a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("faq_lisetudiant");
        echo "\">Faq</a></span></li>
<li class=\"leaf has-children menu-mlid-787\"><span title=\"\"><a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("homestat");
        echo "\">Statistiques</a></span></li>
<li class=\"leaf has-children menu-mlid-1594\"><span title=\"\"><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("my_app_cours_ContactUs");
        echo "\">Contact</a></span></li>
</ul></div>

</div></div>  </div>

  
  </div>
</div>
    </div>
         ";
    }

    // line 29
    public function block_Erasebody($context, array $blocks = array())
    {
        echo " 
    
    <br><br>
<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\" />
    <title>Contact Us</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
<script src=\"http://maps.google.com/maps/api/js?sensor=false\"></script>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" />

    <script type=\"text/javascript\" src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.10.2.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
</head>
<body>

<div class=\"container\">

<!-- Contact with Map - START -->
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-6\">
            <div class=\"well well-sm\">
                <form class=\"form-horizontal\" method=\"post\">
                    <fieldset>
                        <legend class=\"text-center header\">Contact us</legend>
                        <div class=\"form-group\">
                            <div class=\"col-md-10 col-md-offset-1\">
                                <input id=\"fname\" name=\"name\" type=\"text\" placeholder=\"First Name\" class=\"form-control\">
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <div class=\"col-md-10 col-md-offset-1\">
                                <input id=\"lname\" name=\"name\" type=\"text\" placeholder=\"Last Name\" class=\"form-control\">
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <div class=\"col-md-10 col-md-offset-1\">
                                <input id=\"email\" name=\"email\" type=\"text\" placeholder=\"Email Address\" class=\"form-control\">
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <div class=\"col-md-10 col-md-offset-1\">
                                <input id=\"phone\" name=\"phone\" type=\"text\" placeholder=\"Phone\" class=\"form-control\">
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <div class=\"col-md-10 col-md-offset-1\">
                                <textarea class=\"form-control\" id=\"message\" name=\"message\" placeholder=\"Enter your massage for us here. We will get back to you within 2 business days.\" rows=\"7\"></textarea>
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <div class=\"col-md-12 text-center\">
                                <button type=\"submit\" class=\"btn btn-primary btn-lg\">Submit</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
        <div class=\"col-md-6\">
            <div>
\t\t\t
                <div class=\"panel panel-default\">
                    <div class=\"text-center header\">Our Office</div>
                    <div class=\"panel-body text-center\">
                        <h4>Address</h4>
                        <div>
                        Z.I. Chotrana II - B.P. 160 <br />
                        - 2083 Pole Technologique - El Ghazala<br />
                        (+216) 70 68 56 85. Fax : (+216) 70 68 54 54<br />
                       <br />
                        </div>
                        <hr />
                        <div id=\"map1\" class=\"map\">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<script type=\"text/javascript\">
    jQuery(function (\$) {
        function init_map1() {
            var myLocation = new google.maps.LatLng(36.86283, 10.19554);
            var mapOptions = {
                center: myLocation,
                zoom: 16
            };
            var marker = new google.maps.Marker({
                position: myLocation,
                title: \"Property Location\"
            });
            var map = new google.maps.Map(document.getElementById(\"map1\"),
                mapOptions);
            marker.setMap(map);
        }
        init_map1();
    });
</script>

<style>
    .map {
        min-width: 300px;
        min-height: 300px;
        width: 100%;
        height: 100%;
    }

    
</style>

<!-- Contact with Map - END -->

</div>

</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "MyAppUlearnBundle:Default:ContactUs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 43,  110 => 42,  105 => 40,  101 => 39,  87 => 29,  73 => 18,  69 => 17,  65 => 16,  61 => 15,  57 => 14,  47 => 6,  44 => 5,  38 => 3,  11 => 2,);
    }
}
