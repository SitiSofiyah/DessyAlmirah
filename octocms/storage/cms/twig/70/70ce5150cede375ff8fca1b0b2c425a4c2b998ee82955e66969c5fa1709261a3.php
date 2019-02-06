<?php

/* E:\xampp\htdocs\octocms/themes/kenshin-kenshinschool/partials/slider.htm */
class __TwigTemplate_996745d2eb7de2e992f365af738cb27bb0de9cbbebd64088242d2abea0b6648c extends Twig_Template
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
        echo "<!--************************************
\t\t\t\tHome Slider Start
\t\t*************************************-->
<div class=\"clearfix\"></div>
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
            <div class=\"item\" align=\"center\">
                <figure>
                    <img src=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/isea.jpg");
        echo "\" alt=\"image description\" width=\"800px\" height=\"300px\">
                </figure>
        </div>
        </div>
    </div>
</div>
<!--************************************
        Home Slider End
*************************************-->";
    }

    public function getTemplateName()
    {
        return "E:\\xampp\\htdocs\\octocms/themes/kenshin-kenshinschool/partials/slider.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 10,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!--************************************
\t\t\t\tHome Slider Start
\t\t*************************************-->
<div class=\"clearfix\"></div>
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
            <div class=\"item\" align=\"center\">
                <figure>
                    <img src=\"{{ 'assets/images/isea.jpg'|theme}}\" alt=\"image description\" width=\"800px\" height=\"300px\">
                </figure>
        </div>
        </div>
    </div>
</div>
<!--************************************
        Home Slider End
*************************************-->", "E:\\xampp\\htdocs\\octocms/themes/kenshin-kenshinschool/partials/slider.htm", "");
    }
}
