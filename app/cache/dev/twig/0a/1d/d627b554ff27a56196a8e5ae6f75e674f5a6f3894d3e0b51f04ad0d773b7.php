<?php

/* MyAppUlearnBundle::layout.html.twig */
class __TwigTemplate_0a1dd627b554ff27a56196a8e5ae6f75e674f5a6f3894d3e0b51f04ad0d773b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'espace' => array($this, 'block_espace'),
            'nav' => array($this, 'block_nav'),
            'Erasebody' => array($this, 'block_Erasebody'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML+RDFa 1.0//EN\"   \"http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"en\" version=\"XHTML+RDFa 1.0\" dir=\"ltr\">

<head profile=\"http://www.w3.org/1999/xhtml/vocab\">
  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
<meta name=\"description\" content=\"Located in Washington, D.C., the George Washington University offers undergraduate, graduate and professional programs through its 10 colleges and schools.\" />
<link rel=\"canonical\" href=\"http://localhost/2013/TEO/\" />
<meta name=\"keywords\" content=\"George washington university, gwu, gw, gw university, george washington, dc universities, dc colleges, education, higher education\" />
<meta content=\"width=device-width, maximum-scale=5\" name=\"viewport\" />
  <title>My Virtual University U Learn</title>

<link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style1.css"), "html", null, true);
        echo "\" media=\"all\" />
<link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style2.css"), "html", null, true);
        echo "\" media=\"all\" />
<link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style3.css"), "html", null, true);
        echo "\" media=\"screen\" />
<link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style4.css"), "html", null, true);
        echo "\" media=\"only screen and (max-width: 540px)\" />

<script type=\"text/javascript\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/js1.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/js2.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/js3.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/webvator-file.js"), "html", null, true);
        echo "\"></script>
<link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dcsrating/css/rating.css"), "html", null, true);
        echo "\" />
<script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dcsrating/js/rating.js"), "html", null, true);
        echo "\"></script>
</head>
<script type=\"text/javascript\">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-37631291-1']);
  _gaq.push(['_setDomainName', 'webvator.com']);
  _gaq.push(['_setAllowLinker', true]);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<body class=\"html front not-logged-in no-sidebars page-frontpage tao\" >
  <div id=\"skip-link\">
    <a href=\"#main-content\" class=\"element-invisible element-focusable\">Passer au contenu principal</a>
  </div>
    ";
        // line 43
        $this->displayBlock('head', $context, $blocks);
        // line 115
        echo "
<!--<div id='branding'><div class='limiter clearfix'>
  <h1 class='site-name'></h1></div></div>-->

<!--<div id='navigation'><div class='limiter clearfix'>
                </div></div>-->


<div id='page'>
    
        
        <div class='limiter clearfix'>
    
        <div>


</div>
           
  
  <div id='main-content' class='clearfix'>
    
    
                <div id='content' class='clearfix'>  <div class=\"region region-content\">
    <div class=\"panel-display panel-front-page clearfix\" >
\t

  \t      ";
        // line 141
        $this->displayBlock('nav', $context, $blocks);
        // line 164
        echo "
              ";
        // line 165
        $this->displayBlock('Erasebody', $context, $blocks);
        // line 589
        echo "  </div>

  
</div>
    </div>

  
  ";
        // line 596
        $this->displayBlock('footer', $context, $blocks);
        // line 641
        echo "</body>
</html>
";
    }

    // line 43
    public function block_head($context, array $blocks = array())
    {
        // line 44
        echo "    <div id=\"header\">
<div id=\"header-wrapper\">

\t\t<a id=\"mobile-nav\" href=\"#\">
\t  \t<span class=\"icon-bar\"></span>
\t    <span class=\"icon-bar\"></span>
\t    <span class=\"icon-bar\"></span>
\t  </a>
<div class=\"view view-main-header view-id-main_header view-display-id-main_header_panel_pane view-dom-id-3af75297e8d9c0cb75674b84fce2d69e\">
        
  
  
      <div class=\"view-content\">
        <div class=\"views-row views-row-1 views-row-odd views-row-first views-row-last\">
    
";
        // line 59
        $this->displayBlock('espace', $context, $blocks);
        // line 68
        echo "   
<div class=\"right clearfix\">
<div class=\"social-links clearfix\">
        <ul>
                          <li>
                  ";
        // line 73
        echo $this->env->getExtension('nomaya_social_bar')->getSocialButtons();
        echo "
                 
                </li>
                          
                  </ul>
</div>

<div class=\"clearfix\">
<form method=\"get\" action=\"javascript:void(0)\" id=\"search\">
    <div id=\"search-holder\">
     
            <span class=\"search-title\">Chercher</span>
      <input type=\"text\" name=\"q\" id=\"searchInput\">
      <button type=\"submit\">Chercher</button>

    </div>
  </form>
</div>

<div class=\"links clearfix\">
    ";
        // line 93
        if ((null === $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()))) {
            // line 94
            echo "                    <a href=\"";
            echo $this->env->getExtension('routing')->getPath("Home");
            echo "\" >Acceuil</a>          |            <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\" >Login</a>          |            <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\" >Inscription</a>          |            <a href=\"javascript:void(0)\">Site Map</a>          
 ";
        }
        // line 96
        echo "                    ";
        if ( !(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()))) {
            // line 97
            echo "                                                         
                  <a > Connecté en tant que ";
            // line 98
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</a>  |  <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">déconnexion</a> 
                                                       ";
        }
        // line 100
        echo "</div>
  
                    
</div>
                                                       

  </div>
    </div>
  
  
</div>
    \t
                                                </div>
</div>          
                                                       ";
    }

    // line 59
    public function block_espace($context, array $blocks = array())
    {
        // line 60
        echo "<div class=\"gwlogo clearfix\">

  <div class=\"field field-name-field-logo field-type-image field-label-hidden\"><div class=\"field-items\"><div class=\"field-item even\"><img typeof=\"foaf:Image\" src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/ulearn.png"), "html", null, true);
        echo "\" width=\"100\" height=\"90\" alt=\"ULearn\" title=\"ULearn\" /></div></div>  

  </div>

</div>
   ";
    }

    // line 141
    public function block_nav($context, array $blocks = array())
    {
        // line 142
        echo "
      <div class=\"panel-panel panel-col-top\">
      <div class=\"inside\"><div class=\"panel-pane pane-gwu-primary-navigation\" >
  
      
  
  <div class=\"pane-content\">
    <div id=\"menu-wrapper\"><div id=\"menu-top\"><div class=\"menu-block-wrapper menu-block-2 menu-name-menu-division-menu parent-mlid-0 menu-level-1\">
  <ul class=\"menu\"><li class=\"first leaf has-children menu-mlid-784\"><span title=\"\"><a href=\"";
        // line 150
        echo $this->env->getExtension('routing')->getPath("Home");
        echo "\">Acceuil</a></span></li>
<li class=\"leaf has-children menu-mlid-785\"><span title=\"\"><a href=\"";
        // line 151
        echo $this->env->getExtension('routing')->getPath("Home");
        echo "\">Cours</a></span></li>
<li class=\"leaf has-children menu-mlid-786\"><span title=\"\"><a href=\"";
        // line 152
        echo $this->env->getExtension('routing')->getPath("faq_lisetudiant");
        echo "\">Faq</a></span></li>
<li class=\"leaf has-children menu-mlid-787\"><span title=\"\"><a href=\"";
        // line 153
        echo $this->env->getExtension('routing')->getPath("homestat");
        echo "\">Statistiques</a></span></li>
<li class=\"leaf has-children menu-mlid-1594\"><span title=\"\"><a href=\"";
        // line 154
        echo $this->env->getExtension('routing')->getPath("my_app_cours_ContactUs");
        echo "\">Contact</a></span></li>
</ul></div>

</div></div>  </div>

  
  </div>
</div>
    </div>
         ";
    }

    // line 165
    public function block_Erasebody($context, array $blocks = array())
    {
        // line 166
        echo "
        \t  \t\t<div class=\"hero-wrapper\">\t
    \t\t<div class=\"panel-panel panel-hero\">
      \t\t\t<div class=\"inside\"><div class=\"panel-pane pane-views-panes pane-gw-main-site-hero-rotator-panel-pane-1\" >
  
      
  
  <div class=\"pane-content\">
    <div class=\"view view-gw-main-site-hero-rotator view-id-gw_main_site_hero_rotator view-display-id-panel_pane_1 view-dom-id-d58c7f6586e6d226256e157a6320e2c0\">
        
  
  
      <div class=\"view-content\">
        <div class=\"views-row views-row-1 views-row-odd views-row-first views-row-last\">
 
  <div class=\"rotating-large-hero\">
 
      <ul class=\"responsive-slider\">
  
\t\t\t  \t\t
  \t\t\t\t      \t\t\t<li class=\"image\">
          \t\t              <a href=\"#\">


<div class=\"image\">
\t<img typeof=\"foaf:Image\" src=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/slide3.jpg"), "html", null, true);
        echo "\" width=\"940\" height=\"378\"  /></div>






</a><!-- end items -->
  \t\t\t\t                  </li>
          \t\t\t  \t\t
  \t\t\t\t      \t\t\t<li class=\"image\">
          \t\t              <a href=\"\">


<div class=\"image\">
\t<img typeof=\"foaf:Image\" src=\"";
        // line 206
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/slide22.jpg"), "html", null, true);
        echo "\" width=\"940\" height=\"378\"  /></div>






</a><!-- end items -->
  \t\t\t\t                  </li>
          \t\t\t  \t\t
  \t\t\t\t      \t\t\t<li class=\"image\">
          \t\t              <a href=\"\">


<div class=\"image\">
\t<img typeof=\"foaf:Image\" src=\"";
        // line 221
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/slide33.jpg"), "html", null, true);
        echo "\" width=\"940\" height=\"378\" /></div>






</a><!-- end items -->
  \t\t\t\t                  </li>
          \t\t\t  \t\t
  \t\t\t\t      \t\t\t
          \t\t\t
\t\t\t
  \t\t</ul><!-- end responsive-slider -->
\t\t\t<div class=\"navigation-wrapper\"><div class=\"navi\"></div></div>
 \t\t\t</div><!-- rotating large hero -->
\t\t\t  </div>
    </div>
  
  
  
  
  
  
</div>  </div>

  
  </div>
</div>
    \t\t</div>
\t\t</div>
  
      <div class=\"panel-panel panel-col-left\">
      <div class=\"inside\"><div class=\"panel-pane pane-views-panes pane-featured-spotlight-ad-panel-pane-1\" >
  
      
  
  <div class=\"pane-content\">
    <div class=\"view view-featured-spotlight-ad view-id-featured_spotlight_ad view-display-id-panel_pane_1 view-dom-id-7e174e97826b626dff73b9961b5c375e\">
        
  
  
      <div class=\"view-content\">
        <div class=\"views-row views-row-1 views-row-odd views-row-first views-row-last\">
    
<div class='all-purpose-sidebar node node-promotion'  about=\"/gw-today-logo\" typeof=\"sioc:Item foaf:Document\" id=\"node-1302\">
      <div class='image' >
              <a href=\"javascript:void(0)\">


<div class=\"image\">
\t<img typeof=\"foaf:Image\" src=\"";
        // line 272
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/img5.jpg"), "html", null, true);
        echo "\" width=\"130\" height=\"181\" /></div>






</a>
          </div>
    <p></p>
</div>
  </div>
    </div>
  
  
  
  
  
  
</div>  </div>

  
  </div>
</div>
    </div>
  
      <div class=\"panel-panel panel-col-middle\">
      <div class=\"inside\"><div class=\"panel-pane pane-views-panes pane-feature-spotlight-stacked-panel-pane-1\" >
  
      
  
  <div class=\"pane-content\">
    <div class=\"view view-feature-spotlight-stacked view-id-feature_spotlight_stacked view-display-id-panel_pane_1 view-dom-id-d79020ada23e620e27293b391f8db16d\">
        
  
  
      <div class=\"view-content\">
        <div class=\"views-row views-row-1 views-row-odd views-row-first views-row-last\">
    

\t\t\t\t\t\t\t\t\t\t

  
<div class=\"feature-spotlight-stacked\">
\t
       \t<div class=\"items\">
          <div><div class=\"\">
\t\t\t\t\t<a href=\"javascript:void(0)\">
\t\t\t\t\t


<div class=\"image\">
\t<img typeof=\"foaf:Image\" src=\"";
        // line 324
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/security.jpg"), "html", null, true);
        echo "\" width=\"355\" height=\"270\"  /></div>






</a></div></div><div><div class=\"\">
\t\t\t\t\t<a href=\"javascript:void(0)\" >
\t\t\t\t\t


<div class=\"image\">
\t<img typeof=\"foaf:Image\" src=\"";
        // line 337
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/prog.jpg"), "html", null, true);
        echo "\" width=\"355\" height=\"270\" /></div>






</a></div></div><div><div class=\"\">
<a href=\"javascript:void(0)\">

<div class=\"image\">
\t<img typeof=\"foaf:Image\" src=\"";
        // line 348
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/algo.jpg"), "html", null, true);
        echo "\" width=\"355\" height=\"270\"  /></div>






</a></div></div> \t\t\t\t</div>
    
\t\t\t\t<div class=\"tabs\">
\t\t\t\t\t<div class=\"tab\"><h5><a href=\"\">Sécurité du matériel informatique</a></h5></div><div class=\"tab\"><h5><a href=\"\"> Se lancer à la programmation de jeux avec C#</a></h5></div><div class=\"tab\"><h5><a href=\"\">Algorithmes : design et analyse, partie 2 </a></h5></div>\t\t\t\t</div>
\t\t\t\t
</div><!-- end slide container -->

  </div>
    </div>
  
  
  
  
  
  
</div>  </div>

  
  </div>
</div>
    </div>
  
      <div class=\"panel-panel panel-col-right\">
      <div class=\"inside\"><div class=\"panel-pane pane-views-panes pane-featured-icons-panel-pane-1\" >
  
      
  
  <div class=\"pane-content\">
    <div class=\"view view-featured-icons view-id-featured_icons view-display-id-panel_pane_1 view-dom-id-0c14785a17b6571904ae3e56efab03d8\">
        
  
  
      <div class=\"view-content\">
        <div class=\"views-row views-row-1 views-row-odd views-row-first\">
    
\t<div class=\"featured-icons\">
\t\t\t\t<ul>
\t\t\t\t\t 
\t\t\t\t\t  \t\t\t\t\t\t\t<li>
  \t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" title=\"Calendar Icon\">
  \t\t\t\t\t<div class=\"icon\"><img src=\"";
        // line 395
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/calandar.png"), "html", null, true);
        echo "\" alt=\"Calendar Icon\" title=\"University Calendar\" /></div>

<br />
  \t\t\t\t\t\t\t<span class=\"icon-title\">\t\tCalendrier</span>
  \t\t\t\t\t\t\t\t</a>
  \t\t\t\t\t\t\t</li>
\t\t\t\t\t 
\t\t\t\t\t  \t\t\t\t\t\t\t<li>
  \t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" title=\"Pin Icon\">
  \t\t\t\t\t<div class=\"icon\"><img src=\"";
        // line 404
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/campusmaps.png"), "html", null, true);
        echo "\"  title=\"Campus Maps\" /></div>

<br />
  \t\t\t\t\t\t\t<span class=\"icon-title\">\t\tCampus Maps</span>
  \t\t\t\t\t\t\t\t</a>
  \t\t\t\t\t\t\t</li>
\t\t\t\t\t 
\t\t\t\t\t  \t\t\t\t\t\t
\t\t\t\t\t 
\t\t\t\t\t  \t\t\t\t\t\t\t
\t\t\t\t\t  \t\t\t\t\t\t\t<li>
  \t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" title=\"Play button icon\">
  \t\t\t\t\t<div class=\"icon\"><img src=\"";
        // line 416
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/multimedia.png"), "html", null, true);
        echo "\"  /></div>

<br />
  \t\t\t\t\t\t\t<span class=\"icon-title\">\t\tVideos</span>
  \t\t\t\t\t\t\t\t</a>
  \t\t\t\t\t\t\t</li>
\t\t\t\t\t 
\t\t\t\t\t  \t\t\t\t\t\t\t<li>
  \t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">
  \t\t\t\t\t<div class=\"icon\"><img src=\"";
        // line 425
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/TrendingLinks_.png"), "html", null, true);
        echo "\"/></div>

<br />
  \t\t\t\t\t\t\t<span class=\"icon-title\">\t\tTrending Links</span>
  \t\t\t\t\t\t\t\t</a>
  \t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t</div>
  </div>
  <div class=\"views-row views-row-2 views-row-even views-row-last\">
    
\t<div class=\"featured-icons\">
\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t</div>
  </div>
    </div>
  
  
  
  
  
  
</div>  </div>

  
  </div>
</div>
    </div>
  
  \t  <div id=\"top-footer\" class=\"pane clearfix\">
\t  \t<div class=\"panel-pane pane-views-panes pane-rotating-image-teaser-panel-pane-1\" >
  
        <h2 class=\"pane-title\">Les Plus Populaires</h2>
    
  
  <div class=\"pane-content\">
    <div class=\"view view-rotating-image-teaser view-id-rotating_image_teaser view-display-id-panel_pane_1 view-dom-id-473cf0c426b66ee3a8d905c0c7c22cbb\">
        
  
  
      <div class=\"view-content\">
        <div class=\"views-row views-row-1 views-row-odd views-row-first views-row-last\">
    
\t
\t\t
\t
\t
\t
\t
\t

  <div class=\"rotating-teaser\">
    <div>
      \t
\t\t\t\t\t\t\t<a class=\"prev browse left\">Previous</a>
\t\t\t\t  
\t\t\t\t<div class=\"slides-container clearfix scrollable-circular\">
        \t<div class=\"items\">
          \t<div><div class=\"slide\">
\t\t\t\t<a href=\"javascript:void(0)\">
\t\t\t\t


<div class=\"image\">
\t<img typeof=\"foaf:Image\" src=\"";
        // line 490
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/android.jpg"), "html", null, true);
        echo "\" width=\"247\" height=\"130\"  /></div>






</a>  <h5><a href=\"javascript:void(0)\">Programming Mobile Applications for Android Handheld Systems</a></h5></div><div class=\"slide\">
\t\t\t\t<a href=\"javascript:void(0)\" >
\t\t\t\t


<div class=\"image\">
\t<img typeof=\"foaf:Image\" src=\"";
        // line 503
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/applicationweb.jpg"), "html", null, true);
        echo "\" width=\"247\" height=\"130\"  /></div>






</a>  <h5><a href=\"javascript:void(0)\" \ttarget=\"_blank\">Architecture de l'application web</a></h5></div><div class=\"slide\">
\t\t\t\t<a href=\"javascript:void(0)\">
\t\t\t\t


<div class=\"image\">
\t<img typeof=\"foaf:Image\" src=\"";
        // line 516
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/java.jpg"), "html", null, true);
        echo "\" width=\"247\" height=\"130\" /></div>






</a>  <h5><a href=\"javascript:void(0)\" \ttarget=\"_blank\">Apprendre à programmer en java</a></h5></div></div><div><div class=\"slide overlay\">
\t\t\t\t<a href=\"\" >
\t\t\t\t


<div class=\"image\">
\t<img typeof=\"foaf:Image\" src=\"";
        // line 529
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/jeuc.jpg"), "html", null, true);
        echo "\" width=\"247\" height=\"130\"  /></div>






</a>  <h5><a href=\"\" \t>Se lancer à la programmation de jeux.</a></h5><a style=\"width:px;\" class=\"video\" href=\"javascript:void(0)\" rel=\"Wach video\"></a></div><div class=\"slide overlay\">
\t\t\t\t<a href=\"\" >
\t\t\t\t


<div class=\"image\">
\t<img typeof=\"foaf:Image\" src=\"";
        // line 542
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/python.jpg"), "html", null, true);
        echo "\" width=\"247\" height=\"130\" /></div>






</a>  <h5><a href=\"\" > La programmation pour tous(Python) </a></h5><a style=\"width:px;\" class=\"video\" href=\"javascript:void(0)\" rel=\"Canada MI Video\"></a></div><div class=\"slide\">
\t\t\t\t<a href=\"javascript:void(0)\" >
\t\t\t\t


<div class=\"image\">
\t<img typeof=\"foaf:Image\" src=\"";
        // line 555
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logique.jpg"), "html", null, true);
        echo "\" width=\"247\" height=\"130\" alt=\"\" /></div>






</a>  <h5><a href=\"javascript:void(0)\">Introduction à la logique</a></h5></div></div>        \t</div>
      \t</div><!-- end slide container -->
      

\t\t\t\t\t\t\t<a class=\"next browse right\">Next</a>
\t\t\t      \t\t
    </div>
  </div><!-- end div-->
  </div>
    </div>
  
  
  
  
  
  
</div>  </div>

  
  </div>
\t  </div>
        
  </div>
  </div>
        
\t</div>
        ";
    }

    // line 596
    public function block_footer($context, array $blocks = array())
    {
        // line 597
        echo "<div id=\"footer\">
\t<div id=\"footer-wrapper\">

<div class=\"view view-main-footer view-id-main_footer view-display-id-main_footer_panel_pane view-dom-id-5a0318ceefb9acc947ed87b008e71452\">
        
  
  
      <div class=\"view-content\">
        <div class=\"views-row views-row-1 views-row-odd views-row-first views-row-last\">
    <div class=\"footer-wrapper clearfix\">
<div class=\"footer-left clearfix\">
<div class=\"footer-logo clearfix\">
\t\t<a href=\"./\" title=\"Canada MI\"><div class=\"field field-name-field-logo field-type-image field-label-hidden\"><div class=\"field-items\"><div class=\"field-item even\"><img typeof=\"foaf:Image\" src=\"";
        // line 609
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/foot.png"), "html", null, true);
        echo "\" width=\"53\" height=\"39\"  title=\"Canada MI University\" /></div></div></div></a>
</div>

<div class=\"footer-address clearfix\">

\t\t\t    


  \t\t\t<span class=\"address\">ULearn University</span><br>  \t\t\t<span class=\"address\">Pôle Technologique - El Ghazala, TUNISIA</span><br>\t\t\t  \t\t\t<span class=\"address\">Z.I. Chotrana II - B.P. 160 - 2083</span><br>  \t\t\t  \t\t\t  \t\t\t<span class=\"phone\">Phone: (000) 000-1000</span>  \t\t\t  \t\t\t\t
</div>
</div>
<div class=\"footer-right clearfix\">
<div class=\"row-one clearfix\"><ul>
\t\t\t\t\t\t\t\t\t<li>\t<a href=\"javascript:void(0)\">ULearn University</a></li>
\t\t\t\t\t\t\t\t\t\t<li>\t<a href=\"javascript:void(0)\" target=\"_blank\">Cours</a></li>
\t\t\t\t\t\t\t\t\t\t<li>\t<a href=\"javascript:void(0)\" target=\"_blank\">Examen</a></li>
\t\t\t\t\t\t\t\t\t\t<li>\t<a href=\"javascript:void(0)\">Contacter Nous</a></li>
\t\t\t\t\t\t\t\t</ul></div>\t


</div>
</div>  </div>
    </div>
  
  
  
  
  
  
</div></div>
</div> 
  ";
    }

    public function getTemplateName()
    {
        return "MyAppUlearnBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  804 => 609,  790 => 597,  787 => 596,  749 => 555,  733 => 542,  717 => 529,  701 => 516,  685 => 503,  669 => 490,  601 => 425,  589 => 416,  574 => 404,  562 => 395,  512 => 348,  498 => 337,  482 => 324,  427 => 272,  373 => 221,  355 => 206,  337 => 191,  310 => 166,  307 => 165,  293 => 154,  289 => 153,  285 => 152,  281 => 151,  277 => 150,  267 => 142,  264 => 141,  254 => 62,  250 => 60,  247 => 59,  229 => 100,  222 => 98,  219 => 97,  216 => 96,  206 => 94,  204 => 93,  181 => 73,  174 => 68,  172 => 59,  155 => 44,  152 => 43,  146 => 641,  144 => 596,  135 => 589,  133 => 165,  130 => 164,  128 => 141,  100 => 115,  98 => 43,  74 => 22,  70 => 21,  66 => 20,  62 => 19,  58 => 18,  54 => 17,  49 => 15,  45 => 14,  41 => 13,  37 => 12,  24 => 1,);
    }
}
