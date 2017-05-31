<?php

/* company/show.html.twig */
class __TwigTemplate_34537c4ab4c021f34667fc0f2871f8cdf4063a3ed1565e1cbd3b64abdb299d89 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "company/show.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : null), "name", array()), "html", null, true);
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"content-block\"> 

      <div class=\"text-left\">
        <a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("company_index");
        echo "\"><i class=\"fa fa-reply\" aria-hidden=\"true\"></i></a>         
      </div> 

      <div class=\"text-right\">
       

        ";
        // line 15
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form_start');
        echo "
        <button class=\"btn btn-link\" type=\"submit\"><i class=\"fa fa-times fa-lg\" aria-hidden=\"true\"></i></button>
        ";
        // line 17
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form_end');
        echo "   
         <a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("company_edit", array("id" => $this->getAttribute((isset($context["company"]) ? $context["company"] : null), "id", array()))), "html", null, true);
        echo "\"><i class=\"fa fa-pencil-square-o\" aria-hidden=\"true\"></i></a>     

      </div>

      <div class=\"text-center\">
        <h1>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : null), "name", array()), "html", null, true);
        echo "</h1>
        Дата створення: ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : null), "date", array()), "html", null, true);
        echo "<br>
      </div>

     
      <p class=\"text-right\">";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : null), "site", array()), "html", null, true);
        echo "</p><br>

      <h4>Description: </h4>
      <p class=\"text-justify\"> ";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : null), "description", array()), "html", null, true);
        echo "</p><br>
      


    </div>
  ";
    }

    public function getTemplateName()
    {
        return "company/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 31,  80 => 28,  73 => 24,  69 => 23,  61 => 18,  57 => 17,  52 => 15,  43 => 9,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "company/show.html.twig", "/var/www/php-1-10/data/www/php-1-10.host-panel.net/symfony/app/Resources/views/company/show.html.twig");
    }
}
