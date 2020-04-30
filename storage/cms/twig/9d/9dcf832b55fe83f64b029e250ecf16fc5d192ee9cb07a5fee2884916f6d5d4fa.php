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

/* /home/vagrant/code/maske/plugins/offline/mall/components/checkout/actions.htm */
class __TwigTemplate_58dd5d3019e4ccff8c62781ff072402c3a141379af9dbb0ba5d05ecb42ab62ee extends \Twig\Template
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
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "products", [], "any", false, false, false, 1), "count", [], "any", false, false, false, 1) > 0)) {
            // line 2
            echo "    <div class=\"mall-cart-actions\">
        <button class=\"js-mall-checkout mall-btn-checkout mall-btn mall-btn--secondary\">
            ";
            // line 4
            echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.checkout.checkout"]);
            echo "
        </button>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/home/vagrant/code/maske/plugins/offline/mall/components/checkout/actions.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if cart.products.count > 0 %}
    <div class=\"mall-cart-actions\">
        <button class=\"js-mall-checkout mall-btn-checkout mall-btn mall-btn--secondary\">
            {{ 'offline.mall::frontend.checkout.checkout' | trans }}
        </button>
    </div>
{% endif %}", "/home/vagrant/code/maske/plugins/offline/mall/components/checkout/actions.htm", "");
    }
}
