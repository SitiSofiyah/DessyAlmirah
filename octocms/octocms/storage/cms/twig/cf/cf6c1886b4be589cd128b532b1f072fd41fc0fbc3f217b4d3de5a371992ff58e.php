<?php

/* C:\xampp\htdocs\octocms/themes/jtherczeg-multi/pages/Contact.htm */
class __TwigTemplate_ee6bdd0650ec3da778aeec080f9f487245efe9d498305f950401ac2e5accaf73 extends Twig_Template
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
        echo "<div style=\"height:650px\" data-latitude=\"52.365629\" data-longitude=\"4.871331\">
 ";
        // line 2
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("googleMap"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 3
        echo "</div>
      <div class=\"container-wrapper\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-4 col-sm-offset-8\">
                        <div class=\"contact-form\">
                        <h3>Contact Info</h3>
                            <address>
                              <strong>PT. BriliantMax Indonesia</strong><br>
                              Jl. Kripton Kav. 24, Malang, Indonesia<br>
                              Email   : indana.98.z@gmail.com<br>
                              <abbr title=\"Phone\">Phone:</abbr> +62341 – 474898 <br>
                              <abbr title=\"Phone\">Phone:</abbr> +62341 – 474897 <br>
                              <abbr title=\"Phone\">Fax   :</abbr> +62341 – 475882
                            </address>
                                                            <form method=\"get\" data-request=\"onSend\">
                                <div class=\"form-group\">
                                    <input type=\"text\" name=\"name\" class=\"form-control\" placeholder=\"Name\" required>
                                </div>
                                <div class=\"form-group\">
                                    <input type=\"email\" name=\"email\" class=\"form-control\" placeholder=\"Email\" required>
                                </div>
                                <div class=\"form-group\">
                                    <textarea name=\"content\" class=\"form-control\" rows=\"8\" placeholder=\"Message\" required></textarea>
                                </div>
                                <button type=\"submit\" class=\"btn btn-primary\">Send Message</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\octocms/themes/jtherczeg-multi/pages/Contact.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  26 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div style=\"height:650px\" data-latitude=\"52.365629\" data-longitude=\"4.871331\">
 {% component 'googleMap' %}
</div>
      <div class=\"container-wrapper\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-4 col-sm-offset-8\">
                        <div class=\"contact-form\">
                        <h3>Contact Info</h3>
                            <address>
                              <strong>PT. BriliantMax Indonesia</strong><br>
                              Jl. Kripton Kav. 24, Malang, Indonesia<br>
                              Email   : indana.98.z@gmail.com<br>
                              <abbr title=\"Phone\">Phone:</abbr> +62341 – 474898 <br>
                              <abbr title=\"Phone\">Phone:</abbr> +62341 – 474897 <br>
                              <abbr title=\"Phone\">Fax   :</abbr> +62341 – 475882
                            </address>
                                                            <form method=\"get\" data-request=\"onSend\">
                                <div class=\"form-group\">
                                    <input type=\"text\" name=\"name\" class=\"form-control\" placeholder=\"Name\" required>
                                </div>
                                <div class=\"form-group\">
                                    <input type=\"email\" name=\"email\" class=\"form-control\" placeholder=\"Email\" required>
                                </div>
                                <div class=\"form-group\">
                                    <textarea name=\"content\" class=\"form-control\" rows=\"8\" placeholder=\"Message\" required></textarea>
                                </div>
                                <button type=\"submit\" class=\"btn btn-primary\">Send Message</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>", "C:\\xampp\\htdocs\\octocms/themes/jtherczeg-multi/pages/Contact.htm", "");
    }
}
