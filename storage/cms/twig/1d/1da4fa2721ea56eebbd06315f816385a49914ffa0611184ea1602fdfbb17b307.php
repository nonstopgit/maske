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

/* /home/vagrant/code/maske/plugins/offline/mall/components/checkout/summary.htm */
class __TwigTemplate_dc1a2d769f39d8b964791e49ffbd6d23b3ba024f92b5c02549955e59834c5757 extends \Twig\Template
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
        echo "<div class=\"mall-cart-summary\">
    <div class=\"mall-cart-summary__info\">
        <div class=\"mall-cart-summary__billing-address\">
            <h4 class=\"mall-cart-summary__heading\">";
        // line 4
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.billing_address"]);
        echo "</h4>
            ";
        // line 5
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("billingAddressSelector"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 6
        echo "        </div>
        <div class=\"mall-cart-summary__shipping-address\">
            <h4 class=\"mall-cart-summary__heading\">";
        // line 8
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.shipping_address"]);
        echo "</h4>
            ";
        // line 9
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("shippingAddressSelector"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 10
        echo "        </div>
        <div class=\"mall-cart-summary__payment-method\">
            <h4 class=\"mall-cart-summary__heading\">";
        // line 12
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.payment_method"]);
        echo "</h4>
            <div>
                ";
        // line 14
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::paymentmethod")        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 15
        echo "            </div>
        </div>
        <div class=\"mall-cart-summary__shipping-method\">
            <h4 class=\"mall-cart-summary__heading\">";
        // line 18
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.shipping_method"]);
        echo "</h4>
            <div>
                ";
        // line 20
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::shippingmethod")        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 21
        echo "            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/code/maske/plugins/offline/mall/components/checkout/summary.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  85 => 20,  80 => 18,  75 => 15,  71 => 14,  66 => 12,  62 => 10,  58 => 9,  54 => 8,  50 => 6,  46 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"mall-cart-summary\">
    <div class=\"mall-cart-summary__info\">
        <div class=\"mall-cart-summary__billing-address\">
            <h4 class=\"mall-cart-summary__heading\">{{ 'offline.mall::frontend.billing_address' | trans }}</h4>
            {% component 'billingAddressSelector' %}
        </div>
        <div class=\"mall-cart-summary__shipping-address\">
            <h4 class=\"mall-cart-summary__heading\">{{ 'offline.mall::frontend.shipping_address' | trans }}</h4>
            {% component 'shippingAddressSelector' %}
        </div>
        <div class=\"mall-cart-summary__payment-method\">
            <h4 class=\"mall-cart-summary__heading\">{{ 'offline.mall::frontend.payment_method' | trans }}</h4>
            <div>
                {% partial __SELF__ ~ '::paymentmethod' %}
            </div>
        </div>
        <div class=\"mall-cart-summary__shipping-method\">
            <h4 class=\"mall-cart-summary__heading\">{{ 'offline.mall::frontend.shipping_method' | trans }}</h4>
            <div>
                {% partial __SELF__ ~ '::shippingmethod' %}
            </div>
        </div>
    </div>
</div>", "/home/vagrant/code/maske/plugins/offline/mall/components/checkout/summary.htm", "");
    }
}
