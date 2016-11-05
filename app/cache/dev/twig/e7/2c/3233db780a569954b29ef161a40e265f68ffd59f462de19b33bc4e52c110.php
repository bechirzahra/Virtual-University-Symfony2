<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_e72c3233db780a569954b29ef161a40e265f68ffd59f462de19b33bc4e52c110 extends Twig_Template
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
        // line 2
        echo "

<div class=\"content_center\">
<div class=\"profile\">

<div class=\"fos_user_user_show\" align='center'>
    
    
    <table class='styleTable' >
       
        <tr>
            <th>
                Mon PROFIL
                </th>
            </tr>
        
        <tr>
    <td><p>";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p></td>
           </tr>
        <tr>

  <td>  <p>";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p> </td>
             </tr>
        <tr>

    <td><p>Sexe: ";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "sexe", array()), "html", null, true);
        echo "</p></td>
        </tr>
<tr>
    <td><p>Nom: ";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nom", array()), "html", null, true);
        echo "</p></td>
        
    </tr>
    <tr>
        

    <td><p>Prénom: ";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "prenom", array()), "html", null, true);
        echo "</p> </td>
            </tr>
        <tr>

    <td><p>date de naissance: ";
        // line 40
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "naissance", array()), "d/m/Y"), "html", null, true);
        echo "</p> </td>
        </tr>
\t
\t
\t<br/>
\t<br/>

     </table>   
        
        <a href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
        echo "\">Modifier mes informations</a>
\t<br/>
\t<br/>
\t<a href=\"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
        echo "\">Modifier le mot de passe</a>
</div>

</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 52,  90 => 49,  78 => 40,  71 => 36,  62 => 30,  56 => 27,  47 => 23,  38 => 19,  19 => 2,);
    }
}
