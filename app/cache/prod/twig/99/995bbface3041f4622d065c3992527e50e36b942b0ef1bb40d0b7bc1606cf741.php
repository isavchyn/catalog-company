<?php

/* news/index.html.twig */
class __TwigTemplate_3d1c8b787af62756fcaaf96735c1cc1a34b25f0b5c309a50c03e360181e599dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "news/index.html.twig", 1);
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
        echo "News";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        echo " 
\t<div class=\"content-block\"> 
\t\t<div><h1>";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["text"]) ? $context["text"] : null), "html", null, true);
        echo "</h1></div><br>
\t\t<div class=\"row\">
  <div class=\"col-sm-6 col-md-4\">
    <div class=\"thumbnail\">
      <img src=\"http://fakeimg.pl/333x200/?text=333x200\" alt=\"...\">
      <div class=\"caption\">
        <h3>Thumbnail label</h3>    
        <p>";
        // line 12
        echo twig_escape_filter($this->env, twig_slice($this->env, "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.", 0, 500), "html", null, true);
        echo "... </p>
        <p>
          <a href=\"#\" class=\"btn btn-primary\" role=\"button\">Button</a> 
          <a href=\"#\" class=\"btn btn-default\" role=\"button\">Button</a>
        </p>
      </div>
    </div>
  </div>
  <div class=\"col-sm-6 col-md-4\">
    <div class=\"thumbnail\">
      <img src=\"http://fakeimg.pl/333x200\" alt=\"...\">
      <div class=\"caption\">
        <h3>Thumbnail label</h3>
        <p>";
        // line 25
        echo twig_escape_filter($this->env, twig_slice($this->env, "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.", 0, 500), "html", null, true);
        echo "... </p>
        <p><a href=\"#\" class=\"btn btn-primary\" role=\"button\">Button</a> <a href=\"#\" class=\"btn btn-default\" role=\"button\">Button</a></p>
      </div>
    </div>
  </div>
  <div class=\"col-sm-6 col-md-4\">
    <div class=\"thumbnail\">
      <img src=\"http://fakeimg.pl/333x200/?text=333x200&font=Roboto\" alt=\"...\">
      <div class=\"caption\">
        <h3>Thumbnail label</h3>
        <p>";
        // line 35
        echo twig_escape_filter($this->env, twig_slice($this->env, "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.", 0, 500), "html", null, true);
        echo "... </p>
        <p><a href=\"#\" class=\"btn btn-primary\" role=\"button\">Button</a> <a href=\"#\" class=\"btn btn-default\" role=\"button\">Button</a></p>
      </div>
    </div>
  </div>
    <div class=\"col-sm-6 col-md-4\">
    <div class=\"thumbnail\">
      <img src=\"http://fakeimg.pl/333x200\" alt=\"...\">
      <div class=\"caption\">
        <h3>Thumbnail label</h3>
        <p>";
        // line 45
        echo twig_escape_filter($this->env, twig_slice($this->env, "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.", 0, 500), "html", null, true);
        echo "... </p>
        <p><a href=\"#\" class=\"btn btn-primary\" role=\"button\">Button</a> <a href=\"#\" class=\"btn btn-default\" role=\"button\">Button</a></p>
      </div>
    </div>
  </div>
</div>


\t</div>
";
    }

    public function getTemplateName()
    {
        return "news/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 45,  80 => 35,  67 => 25,  51 => 12,  41 => 5,  35 => 3,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "news/index.html.twig", "/var/www/php-1-10/data/www/php-1-10.host-panel.net/symfony/app/Resources/views/news/index.html.twig");
    }
}
