<?php

/* :company:index.html.twig */
class __TwigTemplate_b615106ccc7f543ec7ccc739eab80d513546ceff2861a74ddd7614c158652dac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":company:index.html.twig", 1);
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
        echo "Company list";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        echo "   
\t\t

\t\t<!--<div class=\"just\">Companies list</div> -->

\t\t<div id=\"meg\" class=\"text-right\"></div> 

\t\t";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, (isset($context["companies"]) ? $context["companies"] : null)));
        foreach ($context['_seq'] as $context["_key"] => $context["company"]) {
            // line 13
            echo "
\t\t\t<div class=\"content-block\"> 

\t\t\t\t
\t\t\t\t<h2 class=\"disabled_style\"> <a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("company_show", array("id" => $this->getAttribute($context["company"], "id", array()))), "html", null, true);
            echo "\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"press for more info\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["company"], "name", array()), "html", null, true);
            echo "</a></h2>

\t\t\t\t<p class=\"text-right\">";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["company"], "site", array()), "html", null, true);
            echo "</p>
\t\t\t\t<p class=\"text-justify\">";
            // line 20
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($context["company"], "description", array()), 0, 1200), "html", null, true);
            echo "...</p>
\t\t\t\t<div class=\"text-rightt\">
\t\t\t\t\t<a class=\"text-right\" href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("company_edit", array("id" => $this->getAttribute($context["company"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-pencil-square-o\" aria-hidden=\"true\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Редагувати\">Редагувати</i></a>    
\t\t\t\t\t<!-- <a class=\"text-right\" href=\"#\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i></a>  -->
\t\t\t\t 
\t\t\t\t</div>
\t

\t\t\t</div><br>

\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['company'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "  
\t";
    }

    public function getTemplateName()
    {
        return ":company:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 30,  72 => 22,  67 => 20,  63 => 19,  56 => 17,  50 => 13,  46 => 12,  35 => 5,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":company:index.html.twig", "/var/www/php-1-10/data/www/php-1-10.host-panel.net/symfony/app/Resources/views/company/index.html.twig");
    }
}
