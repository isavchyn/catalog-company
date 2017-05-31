<?php

/* person/index.html.twig */
class __TwigTemplate_d416f760d9b12ddbb95e6ccfaf7e751e5ac69b4b4c9983d41e8b1c9bf554ab2a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "person/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Persons list";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    <div id=\"meg\" class=\"text-right\"></div>    
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, (isset($context["people"]) ? $context["people"] : null)));
        foreach ($context['_seq'] as $context["_key"] => $context["person"]) {
            // line 8
            echo "\t<div class=\"col-sm-6 col-md-4\">      
\t<div class=\"content-block\"> 

        
        <div class=\"text-left\"><img class=\"profile-img\" src=\"https://www.iconsfind.com/wp-content/uploads/2015/11/20151112_5643f331cf8c4-210x210.png\" alt=\"\"></div>

        ";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["person"], "name", array()), "html", null, true);
            echo "&nbsp;&nbsp;<br>
       
        
        Телефон:    ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["person"], "phone", array()), "html", null, true);
            echo " <br>
        Офіс:    ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["person"], "office", array()), "html", null, true);
            echo " <br>   
\tКомпанія: ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["person"], "company", array()), "html", null, true);
            echo " <br>  
        
      </div>
\t\t\t
\t\t<div class=\"text-rightt\">
          <a class=\"text-right\" href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("person_edit", array("id" => $this->getAttribute($context["person"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-pencil-square-o\" aria-hidden=\"true\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"edit\">Редагувати</i></a>  
        </div>
\t</div>


    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['person'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "    
  ";
    }

    public function getTemplateName()
    {
        return "person/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 29,  75 => 24,  67 => 19,  63 => 18,  59 => 17,  53 => 14,  45 => 8,  41 => 7,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "person/index.html.twig", "/var/www/php-1-10/data/www/php-1-10.host-panel.net/symfony/app/Resources/views/person/index.html.twig");
    }
}
