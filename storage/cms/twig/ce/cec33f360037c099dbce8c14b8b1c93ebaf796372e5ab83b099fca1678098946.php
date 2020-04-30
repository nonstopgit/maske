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

/* /home/vagrant/code/maske/themes/maske/pages/product.htm */
class __TwigTemplate_c8cd20b8a33b167844796d89e15ecdd11d79ae8ae89c94458c11e1510a3c0207 extends \Twig\Template
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
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("product"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 2
        echo "
";
        // line 3
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('styles'        );
        // line 4
        echo "    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.4.2/jquery.fancybox.min.css\">
";
        // line 3
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
        // line 6
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 7
        echo "    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.4.2/jquery.fancybox.min.js\"></script>
    <script>
        \$(function () {
            \$('[data-fancybox=\"product\"]').fancybox({
                loop: true
            });
        })
    </script>
";
        // line 6
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "/home/vagrant/code/maske/themes/maske/pages/product.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 6,  53 => 7,  51 => 6,  49 => 3,  46 => 4,  44 => 3,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% component 'product' %}

{% put styles %}
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.4.2/jquery.fancybox.min.css\">
{% endput %}
{% put scripts %}
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.4.2/jquery.fancybox.min.js\"></script>
    <script>
        \$(function () {
            \$('[data-fancybox=\"product\"]').fancybox({
                loop: true
            });
        })
    </script>
{% endput %}", "/home/vagrant/code/maske/themes/maske/pages/product.htm", "");
    }
}
