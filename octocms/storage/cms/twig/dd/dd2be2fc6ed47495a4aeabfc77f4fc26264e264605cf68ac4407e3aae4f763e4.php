<?php

/* E:\xampp\htdocs\octocms/themes/kenshin-kenshinschool/partials/sidebar_left.htm */
class __TwigTemplate_eb1267debf6594ce170594fa14cdc08065b7ebc988f5bc636b508c4d4c4fd29f extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-3 pull-left\">
    <aside id=\"tg-sidebar\" class=\"tg-sidebar\">
        <div class=\"tg-widget tg-widgetsearchcourse\">
            <div class=\"tg-widgettitle\">
                <h3>Search</h3>
            </div>
            <div class=\"tg-widgetcontent\">
                <form class=\"tg-formtheme tg-formsearchcourse\">
                    <fieldset>
                        <div class=\"tg-inputwithicon\">
                            <i class=\"icon-book\"></i>
                            <input type=\"search\" name=\"keyword\" class=\"form-control\" placeholder=\"Keyword\">
                        </div>
                        <button type=\"submit\" class=\"tg-btn\">search now</button>
                    </fieldset>
                </form>
            </div>
        </div>
       
    </aside>
</div>";
    }

    public function getTemplateName()
    {
        return "E:\\xampp\\htdocs\\octocms/themes/kenshin-kenshinschool/partials/sidebar_left.htm";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-3 pull-left\">
    <aside id=\"tg-sidebar\" class=\"tg-sidebar\">
        <div class=\"tg-widget tg-widgetsearchcourse\">
            <div class=\"tg-widgettitle\">
                <h3>Search</h3>
            </div>
            <div class=\"tg-widgetcontent\">
                <form class=\"tg-formtheme tg-formsearchcourse\">
                    <fieldset>
                        <div class=\"tg-inputwithicon\">
                            <i class=\"icon-book\"></i>
                            <input type=\"search\" name=\"keyword\" class=\"form-control\" placeholder=\"Keyword\">
                        </div>
                        <button type=\"submit\" class=\"tg-btn\">search now</button>
                    </fieldset>
                </form>
            </div>
        </div>
       
    </aside>
</div>", "E:\\xampp\\htdocs\\octocms/themes/kenshin-kenshinschool/partials/sidebar_left.htm", "");
    }
}
