<?php

/* base.html.twig */
class __TwigTemplate_ac5e6622b34c088ac7ffc98219755bd00766df9f901baff6a347f0a1a0580645 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 38
        echo "
</head>
<body>
    <span id=\"more\"></span>

 <!--<div class=\"preloader\">
        <div class=\"loader\"></div>
    </div> -->

    
    <!-- Fixed navbar -->   
    <nav class=\"navbar navbar-default navbar-fixed-top\">
      <div class=\"container\">
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
        </button>
        
    </div>
    <div id=\"navbar\" class=\"navbar-collapse collapse\">
      <ul class=\"nav navbar-nav\">       
       <li class=\"active\"><a href=\"";
        // line 62
        echo "default";
        echo "\">Головна</a></li>
       <li><a href=\"";
        // line 63
        echo "company";
        echo "\">Компанії</a></li>        
       <li><a href=\"";
        // line 64
        echo "office";
        echo "\">Офіси</a></li>
       <li><a href=\"";
        // line 65
        echo "person";
        echo "\">Персонал</a></li>      
       <li><a href=\"";
        // line 66
        echo "category";
        echo "\">Категорії</a></li>
       <li><a href=\"";
        // line 67
        echo "news";
        echo "\">Новини</a></li>
       <li><a href=\"";
        // line 68
        echo "about";
        echo "\">Про нас</a></li>
       <li><a href=\"";
        // line 69
        echo "contact";
        echo "\">Контакти</a></li>
       <li><a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Створити&nbsp;<span class=\"caret\"></span></a>
              <ul class=\"dropdown-menu\">
                <li><a href=\"";
        // line 72
        echo "company_new";
        echo "\">Компанію</a></li>
                <li><a href=\"";
        // line 73
        echo "office_new";
        echo "\">Адресу офісу</a></li> 
                <li><a href=\"";
        // line 74
        echo "person_new";
        echo "\">Контактну персону</a></li>
                <li><a href=\"";
        // line 75
        echo "category_new";
        echo "\">Категорію компанії</a></li>
            </ul>
        </li> 

   </ul>

   <ul class=\"nav navbar-nav navbar-right\">       
    <li>
        ";
        // line 83
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            echo "              
            <a href=\"";
            // line 84
            echo "fos_user_security_logout";
            echo "\"><i class=\"fa fa-sign-out\" aria-hidden=\"true\"></i>
                ";
            // line 85
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
            </a>
        ";
        } else {
            // line 88
            echo "            <a href=\"";
            echo "fos_user_security_login";
            echo "\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i>
                ";
            // line 89
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Увійти", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
            ";
        }
        // line 90
        echo "       

            <li class=\"dropdown\">
                     

    </ul>
</div><!--/.nav-collapse -->
</div>
</nav>

<div class=\"container\">
    ";
        // line 101
        $this->displayBlock('body', $context, $blocks);
        // line 104
        echo "
    <div class=\"up\">
        <a href=\"javascript://void(0)\" onclick=\"slowScroll('#more')\"></a>
    </div>    
</div>
";
        // line 109
        $this->displayBlock('javascripts', $context, $blocks);
        // line 166
        echo "</body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

       <link type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"> 

       <link type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <link href=\"https://fonts.googleapis.com/css?family=Arsenal|Play\" rel=\"stylesheet\">
        <link href=\"https://fonts.googleapis.com/css?family=Reenie+Beanie\" rel=\"stylesheet\">
        <link href=\"https://fonts.googleapis.com/css?family=Roboto+Condensed\" rel=\"stylesheet\">
        <link href=\"https://fonts.googleapis.com/css?family=Abel|Gloria+Hallelujah\" rel=\"stylesheet\">


        <link href=\"https://fonts.googleapis.com/css?family=Dancing+Script\" rel=\"stylesheet\">
        <!-- Website Font style -->
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css\">
        <!-- Latest compiled and minified CSS -->
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">

        <!-- Optional theme -->
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css\" integrity=\"sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp\" crossorigin=\"anonymous\">
\t\t
\t<style>
\t body { padding-top: 70px;} 
\t body { 
\t      background: url(\"http://shooltz.ru/wp-content/uploads/2012/01/texture1.png\") no-repeat;
\t      background-size: 100%;
\t      background-attachment: fixed; } 
\t </style>

    ";
    }

    // line 101
    public function block_body($context, array $blocks = array())
    {
        // line 102
        echo "
    ";
    }

    // line 109
    public function block_javascripts($context, array $blocks = array())
    {
        // line 110
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("jquery-3.2.0.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js\"></script>﻿
    <!-- Latest compiled and minified JavaScript -->
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>

    <script>
        function slowScroll (id) {
            var offset = 0;
            \$('html, body').animate ({
                scrollTop: \$(id).offset ().top - offset
            }, 1000);
            return false;
        }
    </script>

    <script>
        \$(document).ready(function() {
          \$('li.active').removeClass('active');
          \$('a[href=\"' + location.pathname + '\"]').closest('li').addClass('active'); 
      });
    </script>

    <script>
        \$(document).ready(function(){
            \$('[data-toggle=\"tooltip\"]').tooltip(); 
        });
    </script>


    <script>
      jQuery(document).ready(function(\$) {

        \$('#myCarousel').carousel({
            interval: 10000
        });
        

        \$('#carousel-text').html(\$('#slide-content-0').html());

        //Handles the carousel thumbnails
        \$('[id^=carousel-selector-]').click( function(){
            var id = this.id.substr(this.id.lastIndexOf(\"-\") + 1);
            var id = parseInt(id);
            \$('#myCarousel').carousel(id);
        });


        // When the carousel slides, auto update the text
        \$('#myCarousel').on('slid.bs.carousel', function (e) {
         var id = \$('.item.active').data('slide-number');
         \$('#carousel-text').html(\$('#slide-content-'+id).html());
     });
    });
  </script>

";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 110,  230 => 109,  225 => 102,  222 => 101,  192 => 12,  187 => 10,  181 => 8,  178 => 7,  173 => 6,  167 => 166,  165 => 109,  158 => 104,  156 => 101,  143 => 90,  138 => 89,  133 => 88,  127 => 85,  123 => 84,  119 => 83,  108 => 75,  104 => 74,  100 => 73,  96 => 72,  90 => 69,  86 => 68,  82 => 67,  78 => 66,  74 => 65,  70 => 64,  66 => 63,  62 => 62,  36 => 38,  34 => 7,  30 => 6,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "base.html.twig", "/var/www/php-1-10/data/www/php-1-10.host-panel.net/symfony/app/Resources/views/base.html.twig");
    }
}
