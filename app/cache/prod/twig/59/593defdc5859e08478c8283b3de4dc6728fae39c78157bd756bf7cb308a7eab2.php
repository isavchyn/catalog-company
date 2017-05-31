<?php

/* contact/index.html.twig */
class __TwigTemplate_559e70b3b690e60230c0be2008ba4a7713e73b284503f5a1d63ca00815ce04be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "contact/index.html.twig", 1);
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
        echo "Contact page";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        echo " 
\t<div class=\"content-block\"> 
\t\t<!--<div>";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["text"]) ? $context["text"] : null), "html", null, true);
        echo "</div> -->

\t\t
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-8\">
            <div class=\"well well-sm\">
                <form>
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <label for=\"name\">
                                Ім'я</label>
                            <input type=\"text\" class=\"form-control\" id=\"name\" placeholder=\"Enter name\" required=\"required\" />
                        </div>
                        <div class=\"form-group\">
                            <label for=\"email\">
                                Email Address</label>
                            <div class=\"input-group\">
                                <span class=\"input-group-addon\"><span class=\"glyphicon glyphicon-envelope\"></span>
                                </span>
                                <input type=\"email\" class=\"form-control\" id=\"email\" placeholder=\"Enter email\" required=\"required\" /></div>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"subject\">
                                Subject</label>
                            <select id=\"subject\" name=\"subject\" class=\"form-control\" required=\"required\">
                                <option value=\"na\" selected=\"\">Choose One:</option>
                                <option value=\"service\">General Customer Service</option>
                                <option value=\"suggestions\">Suggestions</option>
                                <option value=\"product\">Product Support</option>
                            </select>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <label for=\"name\">
                                Message</label>
                            <textarea name=\"message\" id=\"Повідомлення\" class=\"form-control\" rows=\"9\" cols=\"25\" required=\"required\"
                                placeholder=\"Message\"></textarea>
                        </div>
                    </div>
                    <div class=\"col-md-12\">
                        <button type=\"submit\" class=\"btn btn-primary pull-right\" id=\"btnContactUs\">
                            Send Message</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
        <div class=\"col-md-4\">
            <form>
            <legend><span class=\"glyphicon glyphicon-globe\"></span> Наш офіс</legend>
            <address>
                <strong>Twitter, Inc.</strong><br>
                795 Folsom Ave, Suite 600<br>
                San Francisco, CA 94107<br>
                <abbr title=\"Phone\">
                    P:</abbr>
                (123) 456-7890
            </address>
            <address>
                <strong>Full Name</strong><br>
                <a href=\"mailto:#\">@gmail.com</a>
            </address>
            </form>
        </div>
    </div>
</div>

\t</div>
";
    }

    public function getTemplateName()
    {
        return "contact/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 6,  35 => 4,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "contact/index.html.twig", "/var/www/php-1-10/data/www/php-1-10.host-panel.net/symfony/app/Resources/views/contact/index.html.twig");
    }
}
