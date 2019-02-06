<?php

/* C:\xampp\htdocs\octocms/themes/jtherczeg-multi/partials/nav.htm */
class __TwigTemplate_950edb806f0d4020f917dabda5ceb202bad8b8c048ef2bc544ee0a9e3705f327 extends Twig_Template
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
        echo "<nav id=\"main-menu\" class=\"navbar navbar-default navbar-fixed-top\" role=\"banner\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"#home\"><img src=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo.png");
        echo "\" alt=\"logo\"></a>
                </div>
\t\t\t\t
                <div class=\"collapse navbar-collapse navbar-right\">
                    <ul class=\"nav navbar-nav\">
                        <li class=\"scroll active\"><a href=\"#home\">Home</a></li>
                        <li class=\"scroll\"><a href=\"#profile\">Company Profile</a></li>
                        <li class=\"scroll\"><a href=\"#product\">Products</a></li>
                        <li class=\"scroll\"><a href=\"#blog\">Article</a></li>
                       <!--  <li class=\"scroll\"><a href=\"#about\">About</a></li>
                       <li class=\"scroll\"><a href=\"#meet-team\">Team</a></li>
                       <li class=\"scroll\"><a href=\"#pricing\">Pricing</a></li>
                       <li class=\"scroll\"><a href=\"#blog\">Blog</a></li> -->
                       <li class=\"scroll\"><a href=\"#get-in-touch\">Contact</a></li>                     
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\octocms/themes/jtherczeg-multi/partials/nav.htm";
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
        return new Twig_Source("<nav id=\"main-menu\" class=\"navbar navbar-default navbar-fixed-top\" role=\"banner\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"#home\"><img src=\"{{ 'assets/images/logo.png'|theme }}\" alt=\"logo\"></a>
                </div>
\t\t\t\t
                <div class=\"collapse navbar-collapse navbar-right\">
                    <ul class=\"nav navbar-nav\">
                        <li class=\"scroll active\"><a href=\"#home\">Home</a></li>
                        <li class=\"scroll\"><a href=\"#profile\">Company Profile</a></li>
                        <li class=\"scroll\"><a href=\"#product\">Products</a></li>
                        <li class=\"scroll\"><a href=\"#blog\">Article</a></li>
                       <!--  <li class=\"scroll\"><a href=\"#about\">About</a></li>
                       <li class=\"scroll\"><a href=\"#meet-team\">Team</a></li>
                       <li class=\"scroll\"><a href=\"#pricing\">Pricing</a></li>
                       <li class=\"scroll\"><a href=\"#blog\">Blog</a></li> -->
                       <li class=\"scroll\"><a href=\"#get-in-touch\">Contact</a></li>                     
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->", "C:\\xampp\\htdocs\\octocms/themes/jtherczeg-multi/partials/nav.htm", "");
    }
}
