<?php

/* office/index.html.twig */
class __TwigTemplate_d7970058e062484eba66001f5874c4d18dca9ac62d1ef9fb6d86316a61dacc4e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "office/index.html.twig", 1);
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
        echo "Office list";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "         
        <div class=\"content-block\"> 

            <div class=\"text-right\"><a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("office_new");
        echo "\">Створити офіс</a>
</div>
          

            ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["offices"]) ? $context["offices"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["office"]) {
            // line 16
            echo "             
             Company name: ";
            // line 17
            echo twig_escape_filter($this->env, $context["office"], "html", null, true);
            echo "<br>
             Address: ";
            // line 18
            echo twig_escape_filter($this->env, $context["office"], "html", null, true);
            echo "<br>

             <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("office_show", array("id" => $this->getAttribute($context["office"], "id", array()))), "html", null, true);
            echo "\">Більше</a><br>

             <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("office_edit", array("id" => $this->getAttribute($context["office"], "id", array()))), "html", null, true);
            echo "\">Редагувати</a><br>
             <hr>
         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['office'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "
         
     </div>  
 ";
    }

    public function getTemplateName()
    {
        return "office/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 25,  71 => 22,  66 => 20,  61 => 18,  57 => 17,  54 => 16,  50 => 15,  43 => 11,  38 => 8,  35 => 7,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "office/index.html.twig", "/var/www/php-1-10/data/www/php-1-10.host-panel.net/symfony/app/Resources/views/office/index.html.twig");
    }
}
