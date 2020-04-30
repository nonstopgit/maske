<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* /home/vagrant/code/maske/themes/maske/pages/checkout.htm */
class __TwigTemplate_f2d429e645bcd66866f4a4bc730141a46a5f856fb38b531d8869130a85ab5e0e extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        if ( !($context["user"] ?? null)) {
            // line 2
            echo "    ";
            $context['__cms_component_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("signUp"            , $context['__cms_component_params']            );
            unset($context['__cms_component_params']);
        } else {
            // line 4
            echo "    ";
            $context['__cms_component_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("checkout"            , $context['__cms_component_params']            );
            unset($context['__cms_component_params']);
        }
    }

    public function getTemplateName()
    {
        return "/home/vagrant/code/maske/themes/maske/pages/checkout.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if not user %}
    {% component 'signUp' %}
{% else %}
    {% component 'checkout' %}
{% endif %}", "/home/vagrant/code/maske/themes/maske/pages/checkout.htm", "");
    }
}
