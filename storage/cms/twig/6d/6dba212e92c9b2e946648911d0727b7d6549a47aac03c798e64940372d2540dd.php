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

/* /home/vagrant/code/maske/plugins/offline/mall/components/cart/table/header.htm */
class __TwigTemplate_7a22a601eeb23bbbebe744b712b9fca7c97cce846de3df446444c4fb4be74477 extends \Twig\Template
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
        echo "<tr class=\"mall-cart__header\">
    <th>&nbsp;</th>
    <th>";
        // line 3
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.product"]);
        echo "</th>
    <th class=\"text-right\">";
        // line 4
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.quantity"]);
        echo "</th>
    <th class=\"text-right\">";
        // line 5
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.price"]);
        echo "</th>
    <th class=\"text-right\">";
        // line 6
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.total"]);
        echo "</th>
</tr>";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/code/maske/plugins/offline/mall/components/cart/table/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 6,  49 => 5,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<tr class=\"mall-cart__header\">
    <th>&nbsp;</th>
    <th>{{ 'offline.mall::frontend.product' | trans }}</th>
    <th class=\"text-right\">{{ 'offline.mall::frontend.quantity' | trans }}</th>
    <th class=\"text-right\">{{ 'offline.mall::frontend.price' | trans }}</th>
    <th class=\"text-right\">{{ 'offline.mall::frontend.total' | trans }}</th>
</tr>", "/home/vagrant/code/maske/plugins/offline/mall/components/cart/table/header.htm", "");
    }
}
