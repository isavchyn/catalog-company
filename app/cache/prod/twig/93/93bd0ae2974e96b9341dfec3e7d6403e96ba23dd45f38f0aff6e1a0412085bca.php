<?php

/* office/index.html.twig */
class __TwigTemplate_d06ce6807674b2e1a10471ab612414be421f5d05ac49c844bfc198e01aee189a extends Twig_Template
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
        echo "Office list ";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "       <div id=\"meg\" class=\"text-right\"></div> 
       ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, (isset($context["offices"]) ? $context["offices"] : null)));
        foreach ($context['_seq'] as $context["_key"] => $context["office"]) {
            // line 7
            echo "<div class=\"col-sm-6 col-md-4\">
        <div class=\"content-block\"> 
                
            <div class=\"text-left\"><img class=\"profile-img\" src=\"http://events.cleantech.com/wp-content/uploads/2014/12/BGAB_icon_211x211.png\" alt=\"\"></div>
\t\t
        
        Телефон:    ";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["office"], "phone", array()), "html", null, true);
            echo " <br>
        Офіс:    ";
            // line 14
            echo twig_escape_filter($this->env, $context["office"], "html", null, true);
            echo " <br>   
\tКомпанія: ";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["office"], "company", array()), "html", null, true);
            echo " <br>  
\t\t <div class=\"text-rightt\">
                <a class=\"text-right\" href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("office_edit", array("id" => $this->getAttribute($context["office"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-pencil-square-o\" aria-hidden=\"true\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"edit\">Редагувати</i></a>  
            </div>   
        </div>
\t</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['office'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo " 
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
        return array (  77 => 21,  66 => 17,  61 => 15,  57 => 14,  53 => 13,  45 => 7,  41 => 6,  38 => 5,  35 => 4,  29 => 3,  11 => 1,);
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
