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

/* /home/vagrant/code/maske/plugins/offline/mall/components/checkout/steps/done.htm */
class __TwigTemplate_91600e00a37de827be1c3c948d9c2739ab06f3f89cff490863cc9f536e103da0 extends \Twig\Template
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
        echo "<div class=\"mall-checkout-result mall-checkout-result--successful\">
    ";
        // line 2
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "order", [], "any", false, false, false, 2), "is_paid", [], "any", false, false, false, 2)) {
            // line 3
            echo "        <h3 class=\"mall-checkout-result__heading\">";
            echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.checkout.payment.successful.heading"]);
            echo "</h3>
        <p>";
            // line 4
            echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.checkout.payment.successful.line_1"]);
            echo "</p>
    ";
        } else {
            // line 6
            echo "        <h3 class=\"mall-checkout-result__heading\">";
            echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.checkout.order.successful.heading"]);
            echo "</h3>
        <p>";
            // line 7
            echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.checkout.order.successful.line_1"]);
            echo "</p>
    ";
        }
        // line 9
        echo "    ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::resultactions")        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 10
        echo "</div>

";
        // line 12
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "dataLayer", [], "any", false, false, false, 12)) {
            // line 13
            echo "        ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::datalayer")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
        }
    }

    public function getTemplateName()
    {
        return "/home/vagrant/code/maske/plugins/offline/mall/components/checkout/steps/done.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  71 => 12,  67 => 10,  62 => 9,  57 => 7,  52 => 6,  47 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"mall-checkout-result mall-checkout-result--successful\">
    {% if __SELF__.order.is_paid %}
        <h3 class=\"mall-checkout-result__heading\">{{ 'offline.mall::frontend.checkout.payment.successful.heading' | trans }}</h3>
        <p>{{ 'offline.mall::frontend.checkout.payment.successful.line_1' | trans }}</p>
    {% else %}
        <h3 class=\"mall-checkout-result__heading\">{{ 'offline.mall::frontend.checkout.order.successful.heading' | trans }}</h3>
        <p>{{ 'offline.mall::frontend.checkout.order.successful.line_1' | trans }}</p>
    {% endif %}
    {% partial __SELF__ ~ '::resultactions' %}
</div>

{% if __SELF__.dataLayer %}
        {% partial __SELF__ ~ '::datalayer' %}
{% endif %}", "/home/vagrant/code/maske/plugins/offline/mall/components/checkout/steps/done.htm", "");
    }
}
