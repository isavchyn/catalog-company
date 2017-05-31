<?php

/* :about:index.html.twig */
class __TwigTemplate_1515fcbc2f8c9f5dcae747330a0b17e6c4c4875c51bf984d58568c8359b061e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":about:index.html.twig", 1);
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
        echo "About us";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        echo " 
\t\t<div class=\"content-block\"> 
\t\t<h1 id=\"tuitle\">&nbsp;&nbsp;SoftGroup (IT company)</h1><br>
\t<!--\t\t<pre>
\t\t\t\t
<p>Современные Хай-Тек офисы в центре: в Ровно, Тернополе, Луцке и др.
Возможна работа удалённо
Возможен гибкий график работы
Прямые USA \\ Europe — заказчики, интересные проекты
Большой-большой коллектив
Бесплатные IT курсы с дальнейшим трудоустройством <a href=\"http://www.academy.softgroup.ua\">www.academy.softgroup.ua</a>

Soft-Group является одним из значимых участников украинского рынка IT-услуг. Мы являемся надежным партнером, обеспечивающим успешную реализацию любых, в том числе 
и самых сложных или масштабных проектов. Не секрет, что в условиях современного рынка именно надежность является одним из основных критериев выбора партнера, работающего
в IT-сфере.

Для того, чтобы обеспечивать качественную поддержку, способствовать динамичному развитию клиентского бизнеса, IT-компания должна обладать такими качествами, как гибкость в
сотрудничестве, стабильность, способность обеспечивать высокое качество каждого процесса в разработке заказного ПО. Разумеется, также необходимым требованием является высокая
квалификация задействованных в реализации конкретных проектов IT- специалистов.

Компания Soft-Group была основана в 2012 году. Успешная реализация множества масштабных и сложных решений, сотрудничество с заказчиками не только из Украины, но и из других
стран, позволяет компании Soft-Group оставаться одним из сильных игроков в таких сферах, как:
- выполнение разработки, тестирования, поддержки и сопровождения заказного ПО, а также бизнес-приложений;
\t- организация центров компетенции, тестирования, контроля качества, выделенных центров разработки ПО;
\t- консультирование по IT-решением, учитывающее отраслевую и иную специфику конкретного бизнеса.

Компания Soft-Group располагает большими ресурсами, что позволяет нам предлагать полный ряд услуг, связанных с разработкой корпоративных информационных систем. В числе наших
преимуществ:
\t- штат талантливых, высококвалифицированных программистов;
\t- концентрация компании на развитии отраслевой и технологической экспертизы, которая обеспечивает возможность наиболее полно учитывать специфику клиентсбизнеса;
\t- наличие четко работающих процессов разработки ПО и других видов обслуживания;
\t- прозрачность, стабильность в сотрудничестве с клиентом;
\t- гарантированная эффективность использования материальных, а также временных ресурсов клиента.</p>
\t\t\t\t<div class=\"text-right\"><img src=\"https://s.dou.ua/CACHE/images/img/static/companies/sg/e8fde520e0d65d05484f7daa5eec0014.png\"></div>
\t\t\t</pre> -->
<div class=\"container\">
        <div id=\"main_area\">
                <!-- Slider -->
                <div class=\"row\">
                    <div class=\"col-xs-12\" id=\"slider\">
                        <!-- Top part of the slider -->
                        <div class=\"row\">
                            <div class=\"col-sm-11\" id=\"carousel-bounding-box\">
                                <div class=\"carousel slide\" id=\"myCarousel\">
                                    <!-- Carousel items -->
                                    <div class=\"carousel-inner\">
                                        <div class=\"active item\" data-slide-number=\"0\">
                                        <img src=\"http://placehold.it/1045x360&text=one\"></div>

                                        <div class=\"item\" data-slide-number=\"1\">
                                        <img src=\"http://placehold.it/1045x360&text=two\"></div>

                                        <div class=\"item\" data-slide-number=\"2\">
                                        <img src=\"http://placehold.it/1045x360&text=three\"></div>

                                        <div class=\"item\" data-slide-number=\"3\">
                                        <img src=\"http://placehold.it/1045x360&text=four\"></div>

                                        <div class=\"item\" data-slide-number=\"4\">
                                        <img src=\"http://placehold.it/1045x360&text=five\"></div>

                                        <div class=\"item\" data-slide-number=\"5\">
                                        <img src=\"http://placehold.it/1045x360&text=six\"></div>
                                    </div><!-- Carousel nav -->
                                    <a class=\"left carousel-control\" href=\"#myCarousel\" role=\"button\" data-slide=\"prev\">
                                        <span class=\"glyphicon glyphicon-chevron-left\"></span>                                       
                                    </a>
                                    <a class=\"right carousel-control\" href=\"#myCarousel\" role=\"button\" data-slide=\"next\">
                                        <span class=\"glyphicon glyphicon-chevron-right\"></span>
                                    </a>                                
                                    </div>
                            </div>

                            <div class=\"col-sm-11\" id=\"carousel-text\"></div>

                            <div id=\"slide-content\" style=\"display: none;\">
                                <div id=\"slide-content-0\">
                                    <h2>Slider One</h2>
                                    <p class=\"doit\">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue.</p>
                                    <p class=\"sub-text\">October 24 2014 - <a href=\"#\">Read more</a></p>
                                </div>

                                <div id=\"slide-content-1\">
                                    <h2>Slider Two</h2>
                                    <p class=\"doit\">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc, quis gravida magna mi a libero. Fusce vulputate eleifend sapien. Vestibulum purus quam, scelerisque ut, mollis sed, nonummy id, metus. Nullam accumsan lorem in dui. Cras ultricies mi eu turpis hendrerit fringilla. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In ac dui quis mi consectetuer lacinia. Nam pretium turpis et arcu. Duis arcu tortor, suscipit eget, imperdiet nec, imperdiet iaculis, ipsum. Sed aliquam ultrices mauris. Integer ante arcu, accumsan a, consectetuer eget, posuere ut, mauris. Praesent adipiscing. </p>
                                    <p class=\"sub-text\">October 24 2014 - <a href=\"#\">Read more</a></p>
                                </div>

                                <div id=\"slide-content-2\">
                                    <h2>Slider Three</h2>
                                    <p class=\"doit\">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue.</p>
                                    <p class=\"sub-text\">October 24 2014 - <a href=\"#\">Read more</a></p>
                                </div>

                                <div id=\"slide-content-3\">
                                    <h2>Slider Four</h2>
                                    <p class=\"doit\">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc, quis gravida magna mi a libero. Fusce vulputate eleifend sapien. Vestibulum purus quam, scelerisque ut, mollis sed, nonummy id, metus. Nullam accumsan lorem in dui. Cras ultricies mi eu turpis hendrerit fringilla. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In ac dui quis mi consectetuer lacinia. Nam pretium turpis et arcu. Duis arcu tortor, suscipit eget, imperdiet nec, imperdiet iaculis, ipsum. Sed aliquam ultrices mauris. Integer ante arcu, accumsan a, consectetuer eget, posuere ut, mauris. Praesent adipiscing. </p>
                                    <p class=\"sub-text\">October 24 2014 - <a href=\"#\">Read more</a></p>
                                </div>

                                <div id=\"slide-content-4\">
                                    <h2>Slider Five</h2>
                                    <p class=\"doit\">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue.</p>
                                    <p class=\"sub-text\">October 24 2014 - <a href=\"#\">Read more</a></p>
                                </div>

                                <div id=\"slide-content-5\">
                                    <h2>Slider Six</h2>
                                    <p class=\"doit\">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc, quis gravida magna mi a libero. Fusce vulputate eleifend sapien. Vestibulum purus quam, scelerisque ut, mollis sed, nonummy id, metus. Nullam accumsan lorem in dui. Cras ultricies mi eu turpis hendrerit fringilla. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In ac dui quis mi consectetuer lacinia. Nam pretium turpis et arcu. Duis arcu tortor, suscipit eget, imperdiet nec, imperdiet iaculis, ipsum. Sed aliquam ultrices mauris. Integer ante arcu, accumsan a, consectetuer eget, posuere ut, mauris. Praesent adipiscing. </p>
                                    <p class=\"sub-text\">October 24 2014 - <a href=\"#\">Read more</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/Slider-->

              
        </div>
</div>




















\t\t</div> 
\t\t
";
    }

    public function getTemplateName()
    {
        return ":about:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 3,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":about:index.html.twig", "/var/www/php-1-10/data/www/php-1-10.host-panel.net/symfony/app/Resources/views/about/index.html.twig");
    }
}
