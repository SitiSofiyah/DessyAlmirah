<?php

/* C:\xampp\htdocs\octocms/themes/jtherczeg-multi/partials/product.htm */
class __TwigTemplate_7abc0d75a353215bf690f79176660e060630247a7df4e2a7bba7512a671f9297 extends Twig_Template
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
        echo "<div class=\"container\">
            <div class=\"section-header\">
                <h2 class=\"section-title text-center wow fadeInDown\">Our Products</h2>
                <p class=\"text-center wow fadeInDown\"> ";
        // line 4
        $context["records"] = twig_get_attribute($this->env, $this->source, ($context["builderList2"] ?? null), "records", array());
        // line 5
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderList2"] ?? null), "displayColumn", array());
        // line 6
        $context["noRecordsMessage"] = twig_get_attribute($this->env, $this->source, ($context["builderList2"] ?? null), "noRecordsMessage", array());
        // line 7
        $context["detailsPage"] = twig_get_attribute($this->env, $this->source, ($context["builderList2"] ?? null), "detailsPage", array());
        // line 8
        $context["detailsKeyColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderList2"] ?? null), "detailsKeyColumn", array());
        // line 9
        $context["detailsUrlParameter"] = twig_get_attribute($this->env, $this->source, ($context["builderList2"] ?? null), "detailsUrlParameter", array());
        // line 10
        echo "
<ul class=\"record-list\">
    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 13
            echo "       
            ";
            // line 15
            echo "            ";
            ob_start();
            // line 16
            echo "                ";
            if (($context["detailsPage"] ?? null)) {
                // line 17
                echo "                    <a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(($context["detailsPage"] ?? null), array(($context["detailsUrlParameter"] ?? null) => twig_get_attribute($this->env, $this->source, $context["record"], ($context["detailsKeyColumn"] ?? null))));
                echo "\">
                ";
            }
            // line 19
            echo "
                ";
            // line 20
            echo twig_get_attribute($this->env, $this->source, $context["record"], "product", array());
            echo "

                ";
            // line 22
            if (($context["detailsPage"] ?? null)) {
                // line 23
                echo "                    </a>
                ";
            }
            // line 25
            echo "            ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 26
            echo "       
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 28
            echo "        <li class=\"no-data\">";
            echo twig_escape_filter($this->env, ($context["noRecordsMessage"] ?? null), "html", null, true);
            echo "</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "</ul>

";
        // line 32
        if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", array()) > 1)) {
            // line 33
            echo "    <ul class=\"pagination\">
        ";
            // line 34
            if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", array()) > 1)) {
                // line 35
                echo "            <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "baseFileName", array()), array(($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", array()) - 1)));
                echo "\">&larr; Prev</a></li>
        ";
            }
            // line 37
            echo "
        ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", array())));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 39
                echo "            <li class=\"";
                echo (((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", array()) == $context["page"])) ? ("active") : (null));
                echo "\">
                <a href=\"";
                // line 40
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "baseFileName", array()), array(($context["pageParam"] ?? null) => $context["page"]));
                echo "\">";
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo "</a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "
        ";
            // line 44
            if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", array()) > twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", array()))) {
                // line 45
                echo "            <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "baseFileName", array()), array(($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", array()) + 1)));
                echo "\">Next &rarr;</a></li>
        ";
            }
            // line 47
            echo "    </ul>
";
        }
        // line 48
        echo "</p>
            </div>

            <div class=\"text-center\">
                <ul class=\"portfolio-filter\">
                    <li><a class=\"active\" href=\"#\" data-filter=\"*\">All Product</a></li>
                    <li><a href=\"#\" data-filter=\".polar\">POLAR 115 E Th. 2004</a></li>
                    <li><a href=\"#\" data-filter=\".sors\">SORS Th. 95 </a></li>
                    <li><a href=\"#\" data-filter=\".sorm\">SORM Th. 95</a></li>
                    <li><a href=\"#\" data-filter=\".polar2\">POLAR 115 EMC Th. 95</a></li>
                </ul><!--/#portfolio-filter-->
            </div>

            <div class=\"portfolio-items\">
                <div class=\"portfolio-item polar\">
                    <div class=\"portfolio-item-inner\">
                        <img width='125%' class=\"img-responsive\" src=\"";
        // line 64
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/1.png");
        echo "\" alt=\"\">
                        <div class=\"portfolio-info\">
                            <h3>Portfolio Item 1</h3>
                            Lorem Ipsum Dolor Sit
                            <a class=\"preview\" href=\"";
        // line 68
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/f1.png");
        echo "\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class=\"portfolio-item polar\">
                    <div class=\"portfolio-item-inner\">
                        <img width='125%' class=\"img-responsive\" src=\"";
        // line 75
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/2.png");
        echo "\" alt=\"\">
                        <div class=\"portfolio-info\">
                            <h3>Portfolio Item 2</h3>
                            Lorem Ipsum Dolor Sit
                            <a class=\"preview\" href=\"";
        // line 79
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/f2.png");
        echo "\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class=\"portfolio-item sors\">
                    <div class=\"portfolio-item-inner\">
                        <img width='125%' class=\"img-responsive\" src=\"";
        // line 86
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/3.jpg");
        echo "\" alt=\"\">
                        <div class=\"portfolio-info\">
                            <h3>Portfolio Item 3</h3>
                            Lorem Ipsum Dolor Sit
                            <a class=\"preview\" href=\"";
        // line 90
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/f3.jpg");
        echo "\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class=\"portfolio-item sors\">
                    <div class=\"portfolio-item-inner\">
                        <img width='125%' class=\"img-responsive\" src=\"";
        // line 97
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/4.jpg");
        echo "\" alt=\"\">
                        <div class=\"portfolio-info\">
                            <h3>Portfolio Item 4</h3>
                            Lorem Ipsum Dolor Sit
                            <a class=\"preview\" href=\"";
        // line 101
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/f4.jpg");
        echo "\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class=\"portfolio-item sorm\">
                    <div class=\"portfolio-item-inner\">
                        <img width='125%' class=\"img-responsive\" src=\"";
        // line 108
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/5.jpg");
        echo "\" alt=\"\">
                        <div class=\"portfolio-info\">
                            <h3>Portfolio Item 5</h3>
                            Lorem Ipsum Dolor Sit
                            <a class=\"preview\" href=\"";
        // line 112
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/f5.jpg");
        echo "\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class=\"portfolio-item sorm\">
                    <div class=\"portfolio-item-inner\">
                        <img width='125%' class=\"img-responsive\" src=\"";
        // line 119
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/6.jpg");
        echo "\" alt=\"\">
                        <div class=\"portfolio-info\">
                            <h3>Portfolio Item 5</h3>
                            Lorem Ipsum Dolor Sit
                            <a class=\"preview\" href=\"";
        // line 123
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/f6.jpg");
        echo "\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class=\"portfolio-item sorm\">
                    <div class=\"portfolio-item-inner\">
                        <img width='125%' class=\"img-responsive\" src=\"";
        // line 130
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/7.jpg");
        echo "\" alt=\"\">
                        <div class=\"portfolio-info\">
                            <h3>Portfolio Item 7</h3>
                            Lorem Ipsum Dolor Sit
                            <a class=\"preview\" href=\"";
        // line 134
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/f7.jpg");
        echo "\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class=\"portfolio-item polar2\">
                    <div class=\"portfolio-item-inner\">
                        <img width='125%' class=\"img-responsive\" src=\"";
        // line 141
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/8.jpg");
        echo "\" alt=\"\">
                        <div class=\"portfolio-info\">
                            <h3>Portfolio Item 8</h3>
                            Lorem Ipsum Dolor Sit
                            <a class=\"preview\" href=\"";
        // line 145
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/f8.jpg");
        echo "\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->
                
                <div class=\"portfolio-item polar2\">
                    <div class=\"portfolio-item-inner\">
                        <img width='125%' class=\"img-responsive\" src=\"";
        // line 152
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/9.jpg");
        echo "\" alt=\"\">
                        <div class=\"portfolio-info\">
                            <h3>Portfolio Item 8</h3>
                            Lorem Ipsum Dolor Sit
                            <a class=\"preview\" href=\"";
        // line 156
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/f9.jpg");
        echo "\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->
                
                <div class=\"portfolio-item polar2\">
                    <div class=\"portfolio-item-inner\">
                        <img width='125%' class=\"img-responsive\" src=\"";
        // line 163
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/10.jpg");
        echo "\" alt=\"\">
                        <div class=\"portfolio-info\">
                            <h3>Portfolio Item 8</h3>
                            Lorem Ipsum Dolor Sit
                            <a class=\"preview\" href=\"";
        // line 167
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/f10.jpg");
        echo "\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->
                
                <div class=\"portfolio-item polar2\">
                    <div class=\"portfolio-item-inner\">
                        <img width='125%' class=\"img-responsive\" src=\"";
        // line 174
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/11.jpg");
        echo "\" alt=\"\">
                        <div class=\"portfolio-info\">
                            <h3>Portfolio Item 8</h3>
                            Lorem Ipsum Dolor Sit
                            <a class=\"preview\" href=\"";
        // line 178
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/f11.jpg");
        echo "\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->
                
                <div class=\"portfolio-item polar2\">
                    <div class=\"portfolio-item-inner\">
                        <img width='125%' class=\"img-responsive\" src=\"";
        // line 185
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/12.jpg");
        echo "\" alt=\"\">
                        <div class=\"portfolio-info\">
                            <h3>Portfolio Item 8</h3>
                            Lorem Ipsum Dolor Sit
                            <a class=\"preview\" href=\"";
        // line 189
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/f12.jpg");
        echo "\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->
            </div>
        </div><!--/.container-->";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\octocms/themes/jtherczeg-multi/partials/product.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  363 => 189,  356 => 185,  346 => 178,  339 => 174,  329 => 167,  322 => 163,  312 => 156,  305 => 152,  295 => 145,  288 => 141,  278 => 134,  271 => 130,  261 => 123,  254 => 119,  244 => 112,  237 => 108,  227 => 101,  220 => 97,  210 => 90,  203 => 86,  193 => 79,  186 => 75,  176 => 68,  169 => 64,  151 => 48,  147 => 47,  141 => 45,  139 => 44,  136 => 43,  125 => 40,  120 => 39,  116 => 38,  113 => 37,  107 => 35,  105 => 34,  102 => 33,  100 => 32,  96 => 30,  87 => 28,  81 => 26,  78 => 25,  74 => 23,  72 => 22,  67 => 20,  64 => 19,  58 => 17,  55 => 16,  52 => 15,  49 => 13,  44 => 12,  40 => 10,  38 => 9,  36 => 8,  34 => 7,  32 => 6,  30 => 5,  28 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"container\">
            <div class=\"section-header\">
                <h2 class=\"section-title text-center wow fadeInDown\">Our Products</h2>
                <p class=\"text-center wow fadeInDown\"> {% set records = builderList2.records %}
{% set displayColumn = builderList2.displayColumn %}
{% set noRecordsMessage = builderList2.noRecordsMessage %}
{% set detailsPage = builderList2.detailsPage %}
{% set detailsKeyColumn = builderList2.detailsKeyColumn %}
{% set detailsUrlParameter = builderList2.detailsUrlParameter %}

<ul class=\"record-list\">
    {% for record in records %}
       
            {# Use spaceless tag to remove spaces inside the A tag. #}
            {% spaceless %}
                {% if detailsPage %}
                    <a href=\"{{ detailsPage|page({ (detailsUrlParameter): attribute(record, detailsKeyColumn) }) }}\">
                {% endif %}

                {{ record.product|raw }}

                {% if detailsPage %}
                    </a>
                {% endif %}
            {% endspaceless %}
       
    {% else %}
        <li class=\"no-data\">{{ noRecordsMessage }}</li>
    {% endfor %}
</ul>

{% if records.lastPage > 1 %}
    <ul class=\"pagination\">
        {% if records.currentPage > 1 %}
            <li><a href=\"{{ this.page.baseFileName|page({ (pageParam): (records.currentPage-1) }) }}\">&larr; Prev</a></li>
        {% endif %}

        {% for page in 1..records.lastPage %}
            <li class=\"{{ records.currentPage == page ? 'active' : null }}\">
                <a href=\"{{ this.page.baseFileName|page({ (pageParam): page }) }}\">{{ page }}</a>
            </li>
        {% endfor %}

        {% if records.lastPage > records.currentPage %}
            <li><a href=\"{{ this.page.baseFileName|page({ (pageParam): (records.currentPage+1) }) }}\">Next &rarr;</a></li>
        {% endif %}
    </ul>
{% endif %}</p>
            </div>

            <div class=\"text-center\">
                <ul class=\"portfolio-filter\">
                    <li><a class=\"active\" href=\"#\" data-filter=\"*\">All Product</a></li>
                    <li><a href=\"#\" data-filter=\".polar\">POLAR 115 E Th. 2004</a></li>
                    <li><a href=\"#\" data-filter=\".sors\">SORS Th. 95 </a></li>
                    <li><a href=\"#\" data-filter=\".sorm\">SORM Th. 95</a></li>
                    <li><a href=\"#\" data-filter=\".polar2\">POLAR 115 EMC Th. 95</a></li>
                </ul><!--/#portfolio-filter-->
            </div>

            <div class=\"portfolio-items\">
                <div class=\"portfolio-item polar\">
                    <div class=\"portfolio-item-inner\">
                        <img width='125%' class=\"img-responsive\" src=\"{{ 'assets/images/portfolio/1.png'|theme }}\" alt=\"\">
                        <div class=\"portfolio-info\">
                            <h3>Portfolio Item 1</h3>
                            Lorem Ipsum Dolor Sit
                            <a class=\"preview\" href=\"{{ 'assets/images/portfolio/f1.png'|theme }}\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class=\"portfolio-item polar\">
                    <div class=\"portfolio-item-inner\">
                        <img width='125%' class=\"img-responsive\" src=\"{{ 'assets/images/portfolio/2.png'|theme }}\" alt=\"\">
                        <div class=\"portfolio-info\">
                            <h3>Portfolio Item 2</h3>
                            Lorem Ipsum Dolor Sit
                            <a class=\"preview\" href=\"{{ 'assets/images/portfolio/f2.png'|theme }}\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class=\"portfolio-item sors\">
                    <div class=\"portfolio-item-inner\">
                        <img width='125%' class=\"img-responsive\" src=\"{{ 'assets/images/portfolio/3.jpg'|theme }}\" alt=\"\">
                        <div class=\"portfolio-info\">
                            <h3>Portfolio Item 3</h3>
                            Lorem Ipsum Dolor Sit
                            <a class=\"preview\" href=\"{{ 'assets/images/portfolio/f3.jpg'|theme }}\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class=\"portfolio-item sors\">
                    <div class=\"portfolio-item-inner\">
                        <img width='125%' class=\"img-responsive\" src=\"{{ 'assets/images/portfolio/4.jpg'|theme }}\" alt=\"\">
                        <div class=\"portfolio-info\">
                            <h3>Portfolio Item 4</h3>
                            Lorem Ipsum Dolor Sit
                            <a class=\"preview\" href=\"{{ 'assets/images/portfolio/f4.jpg'|theme }}\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class=\"portfolio-item sorm\">
                    <div class=\"portfolio-item-inner\">
                        <img width='125%' class=\"img-responsive\" src=\"{{ 'assets/images/portfolio/5.jpg'|theme }}\" alt=\"\">
                        <div class=\"portfolio-info\">
                            <h3>Portfolio Item 5</h3>
                            Lorem Ipsum Dolor Sit
                            <a class=\"preview\" href=\"{{ 'assets/images/portfolio/f5.jpg'|theme }}\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class=\"portfolio-item sorm\">
                    <div class=\"portfolio-item-inner\">
                        <img width='125%' class=\"img-responsive\" src=\"{{ 'assets/images/portfolio/6.jpg'|theme }}\" alt=\"\">
                        <div class=\"portfolio-info\">
                            <h3>Portfolio Item 5</h3>
                            Lorem Ipsum Dolor Sit
                            <a class=\"preview\" href=\"{{ 'assets/images/portfolio/f6.jpg'|theme }}\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class=\"portfolio-item sorm\">
                    <div class=\"portfolio-item-inner\">
                        <img width='125%' class=\"img-responsive\" src=\"{{ 'assets/images/portfolio/7.jpg'|theme }}\" alt=\"\">
                        <div class=\"portfolio-info\">
                            <h3>Portfolio Item 7</h3>
                            Lorem Ipsum Dolor Sit
                            <a class=\"preview\" href=\"{{ 'assets/images/portfolio/f7.jpg'|theme }}\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class=\"portfolio-item polar2\">
                    <div class=\"portfolio-item-inner\">
                        <img width='125%' class=\"img-responsive\" src=\"{{ 'assets/images/portfolio/8.jpg'|theme }}\" alt=\"\">
                        <div class=\"portfolio-info\">
                            <h3>Portfolio Item 8</h3>
                            Lorem Ipsum Dolor Sit
                            <a class=\"preview\" href=\"{{ 'assets/images/portfolio/f8.jpg'|theme }}\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->
                
                <div class=\"portfolio-item polar2\">
                    <div class=\"portfolio-item-inner\">
                        <img width='125%' class=\"img-responsive\" src=\"{{ 'assets/images/portfolio/9.jpg'|theme }}\" alt=\"\">
                        <div class=\"portfolio-info\">
                            <h3>Portfolio Item 8</h3>
                            Lorem Ipsum Dolor Sit
                            <a class=\"preview\" href=\"{{ 'assets/images/portfolio/f9.jpg'|theme }}\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->
                
                <div class=\"portfolio-item polar2\">
                    <div class=\"portfolio-item-inner\">
                        <img width='125%' class=\"img-responsive\" src=\"{{ 'assets/images/portfolio/10.jpg'|theme }}\" alt=\"\">
                        <div class=\"portfolio-info\">
                            <h3>Portfolio Item 8</h3>
                            Lorem Ipsum Dolor Sit
                            <a class=\"preview\" href=\"{{ 'assets/images/portfolio/f10.jpg'|theme }}\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->
                
                <div class=\"portfolio-item polar2\">
                    <div class=\"portfolio-item-inner\">
                        <img width='125%' class=\"img-responsive\" src=\"{{ 'assets/images/portfolio/11.jpg'|theme }}\" alt=\"\">
                        <div class=\"portfolio-info\">
                            <h3>Portfolio Item 8</h3>
                            Lorem Ipsum Dolor Sit
                            <a class=\"preview\" href=\"{{ 'assets/images/portfolio/f11.jpg'|theme }}\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->
                
                <div class=\"portfolio-item polar2\">
                    <div class=\"portfolio-item-inner\">
                        <img width='125%' class=\"img-responsive\" src=\"{{ 'assets/images/portfolio/12.jpg'|theme }}\" alt=\"\">
                        <div class=\"portfolio-info\">
                            <h3>Portfolio Item 8</h3>
                            Lorem Ipsum Dolor Sit
                            <a class=\"preview\" href=\"{{ 'assets/images/portfolio/f12.jpg'|theme }}\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->
            </div>
        </div><!--/.container-->", "C:\\xampp\\htdocs\\octocms/themes/jtherczeg-multi/partials/product.htm", "");
    }
}
