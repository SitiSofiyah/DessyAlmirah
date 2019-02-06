<?php

/* E:\xampp\htdocs\octocms/themes/kenshin-kenshinschool/partials/sidebar.htm */
class __TwigTemplate_a5ddc2f8b615ed3e81fe605aba5dd2c9aeae429cb82d5f8bd80df5035a58ebe2 extends Twig_Template
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
        echo "<div class=\"col-xs-12 col-sm-4 col-md-3 col-lg-3\">
    <aside id=\"tg-sidebar\" class=\"tg-sidebar\">
       
        <div class=\"tg-widget tg-widgetnoticeboard\">
            <div class=\"tg-widgettitle\">
                <h3>Layanan ISEA</h3>
            </div>
            &nbsp;&nbsp;<a href=\"\">ISEA Comunity</a>
        </div>
         <div class=\"tg-widget tg-widgetnoticeboard\">
            <div class=\"tg-widgettitle\">
                <h3>Info ISEA</h3>
            </div>
            
            <div>
            ";
        // line 16
        $context["records"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "records", array());
        // line 17
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "displayColumn", array());
        // line 18
        $context["noRecordsMessage"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "noRecordsMessage", array());
        // line 19
        $context["detailsPage"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsPage", array());
        // line 20
        $context["detailsKeyColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsKeyColumn", array());
        // line 21
        $context["detailsUrlParameter"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsUrlParameter", array());
        // line 22
        echo "
<ul class=\"record-list\">
    ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 25
            echo "        
            ";
            // line 27
            echo "            ";
            ob_start();
            // line 28
            echo "                ";
            if (($context["detailsPage"] ?? null)) {
                // line 29
                echo "                    <a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(($context["detailsPage"] ?? null), array(($context["detailsUrlParameter"] ?? null) => twig_get_attribute($this->env, $this->source, $context["record"], ($context["detailsKeyColumn"] ?? null))));
                echo "\">
                ";
            }
            // line 31
            echo "
                ";
            // line 32
            echo twig_get_attribute($this->env, $this->source, $context["record"], "info", array());
            echo "
                    <div class=\"tg-widgettitle\">
                        <h3>Pesan Bijak</h3>
                    </div>
                    ";
            // line 36
            echo twig_get_attribute($this->env, $this->source, $context["record"], "pesan", array());
            echo "

                ";
            // line 38
            if (($context["detailsPage"] ?? null)) {
                // line 39
                echo "                    </a>
                ";
            }
            // line 41
            echo "            ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 42
            echo "        
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 44
            echo "        <li class=\"no-data\">";
            echo twig_escape_filter($this->env, ($context["noRecordsMessage"] ?? null), "html", null, true);
            echo "</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "</ul>

";
        // line 48
        if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", array()) > 1)) {
            // line 49
            echo "    <ul class=\"pagination\">
        ";
            // line 50
            if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", array()) > 1)) {
                // line 51
                echo "            <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "baseFileName", array()), array(($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", array()) - 1)));
                echo "\">&larr; Prev</a></li>
        ";
            }
            // line 53
            echo "
        ";
            // line 54
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", array())));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 55
                echo "            <li class=\"";
                echo (((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", array()) == $context["page"])) ? ("active") : (null));
                echo "\">
                <a href=\"";
                // line 56
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
            // line 59
            echo "
        ";
            // line 60
            if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", array()) > twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", array()))) {
                // line 61
                echo "            <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "baseFileName", array()), array(($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", array()) + 1)));
                echo "\">Next &rarr;</a></li>
        ";
            }
            // line 63
            echo "    </ul>
";
        }
        // line 65
        echo "        </div>
    </aside>
</div>";
    }

    public function getTemplateName()
    {
        return "E:\\xampp\\htdocs\\octocms/themes/kenshin-kenshinschool/partials/sidebar.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 65,  166 => 63,  160 => 61,  158 => 60,  155 => 59,  144 => 56,  139 => 55,  135 => 54,  132 => 53,  126 => 51,  124 => 50,  121 => 49,  119 => 48,  115 => 46,  106 => 44,  100 => 42,  97 => 41,  93 => 39,  91 => 38,  86 => 36,  79 => 32,  76 => 31,  70 => 29,  67 => 28,  64 => 27,  61 => 25,  56 => 24,  52 => 22,  50 => 21,  48 => 20,  46 => 19,  44 => 18,  42 => 17,  40 => 16,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"col-xs-12 col-sm-4 col-md-3 col-lg-3\">
    <aside id=\"tg-sidebar\" class=\"tg-sidebar\">
       
        <div class=\"tg-widget tg-widgetnoticeboard\">
            <div class=\"tg-widgettitle\">
                <h3>Layanan ISEA</h3>
            </div>
            &nbsp;&nbsp;<a href=\"\">ISEA Comunity</a>
        </div>
         <div class=\"tg-widget tg-widgetnoticeboard\">
            <div class=\"tg-widgettitle\">
                <h3>Info ISEA</h3>
            </div>
            
            <div>
            {% set records = builderList.records %}
{% set displayColumn = builderList.displayColumn %}
{% set noRecordsMessage = builderList.noRecordsMessage %}
{% set detailsPage = builderList.detailsPage %}
{% set detailsKeyColumn = builderList.detailsKeyColumn %}
{% set detailsUrlParameter = builderList.detailsUrlParameter %}

<ul class=\"record-list\">
    {% for record in records %}
        
            {# Use spaceless tag to remove spaces inside the A tag. #}
            {% spaceless %}
                {% if detailsPage %}
                    <a href=\"{{ detailsPage|page({ (detailsUrlParameter): attribute(record, detailsKeyColumn) }) }}\">
                {% endif %}

                {{ record.info|raw }}
                    <div class=\"tg-widgettitle\">
                        <h3>Pesan Bijak</h3>
                    </div>
                    {{ record.pesan|raw }}

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
{% endif %}
        </div>
    </aside>
</div>", "E:\\xampp\\htdocs\\octocms/themes/kenshin-kenshinschool/partials/sidebar.htm", "");
    }
}
