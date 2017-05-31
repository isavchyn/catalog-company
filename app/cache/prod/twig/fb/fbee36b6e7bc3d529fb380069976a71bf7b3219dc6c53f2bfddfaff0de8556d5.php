<?php

/* :category:index.html.twig */
class __TwigTemplate_2e46fa9a60ba61ed049aa7ad234c888ce572dd9b11db313801256e2b7f775b72 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":category:index.html.twig", 1);
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

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Categories";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        echo "  
   <div id=\"meg\" class=\"text-right\">Categories list</div>
   ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, (isset($context["categories"]) ? $context["categories"] : null)));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 6
            echo "     <div class=\"content-block\"> 
        <div class=\"text-rightt\">
          <a class=\"text-right\" href=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category_edit", array("id" => $this->getAttribute($context["category"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-pencil-square-o\" aria-hidden=\"true\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"edit\"></i></a>  
      </div>
      <h2>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "&nbsp;<small><i class=\"fa fa-tag\" aria-hidden=\"true\"></i></small></h2>
      <h4>Parent category: ";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "parent", array()), "html", null, true);
            echo "</h4>
      <i class=\"fa fa-clock-o\" aria-hidden=\"true\"></i> Created at:&nbsp; ";
            // line 12
            if ($this->getAttribute($context["category"], "createdAt", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["category"], "createdAt", array()), "H:i:s d-m-Y"), "html", null, true);
            }
            echo "<br>
      <i class=\"fa fa-clock-o\" aria-hidden=\"true\"></i> Last updated at: &nbsp;";
            // line 13
            if ($this->getAttribute($context["category"], "updatedAt", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["category"], "updatedAt", array()), "H:i:s d-m-Y"), "html", null, true);
            }
            echo "<br>
  </div><br>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return ":category:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 16,  68 => 13,  62 => 12,  58 => 11,  54 => 10,  49 => 8,  45 => 6,  41 => 5,  35 => 3,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":category:index.html.twig", "/var/www/php-1-10/data/www/php-1-10.host-panel.net/symfony/app/Resources/views/category/index.html.twig");
    }
}
