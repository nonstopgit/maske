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

/* /home/vagrant/code/maske/plugins/offline/mall/components/orderslist/scripts.htm */
class __TwigTemplate_6ed5adc10c531566d7f20c53b54b89cfb4e0083bd0c708d88fc3bcdcbf753513 extends \Twig\Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 2
        echo "    <script>
        \$(function () {
            \$('.mall-orders-list__order').on('click', function (e) {
                if (e.target.tagName.toLowerCase() === 'a') {
                    return;
                }

                \$(this).next('tr').toggle();
                \$(this).toggleClass('is-open')
            });
        });
    </script>
";
        // line 1
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "/home/vagrant/code/maske/plugins/offline/mall/components/orderslist/scripts.htm";
    }

    public function getDebugInfo()
    {
        return array (  53 => 1,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% put scripts %}
    <script>
        \$(function () {
            \$('.mall-orders-list__order').on('click', function (e) {
                if (e.target.tagName.toLowerCase() === 'a') {
                    return;
                }

                \$(this).next('tr').toggle();
                \$(this).toggleClass('is-open')
            });
        });
    </script>
{% endput %}", "/home/vagrant/code/maske/plugins/offline/mall/components/orderslist/scripts.htm", "");
    }
}
