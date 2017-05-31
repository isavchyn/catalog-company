<?php

/* CompaniesBundle:Default:index.html.twig */
class __TwigTemplate_6be279fa61e50fd8184737bf9dcd18074002e1ace2557519f52e6c0f391bfe85 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "CompaniesBundle:Default:index.html.twig", 1);
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
        echo "Home page";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        echo " 
\t<div class=\"content-block\"> 
\t\t<div>Welcome to the website</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "CompaniesBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 4,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "CompaniesBundle:Default:index.html.twig", "/var/www/php-1-10/data/www/php-1-10.host-panel.net/symfony/src/CompaniesBundle/Resources/views/Default/index.html.twig");
    }
}
