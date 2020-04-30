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

/* /home/vagrant/code/maske/plugins/offline/mall/components/orderslist/details.htm */
class __TwigTemplate_0af739c1664e56adad8f5add5ce327b5b61843e3381ddc4786eb87c9f5d60365 extends \Twig\Template
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
        echo "<tr style=\"display: none\" class=\"mall-orders-list__details\">
    <td colspan=\"5\">
        <div class=\"mall-order-details\">
            <div class=\"mall-order-details__row\">
                <div class=\"mall-order-details__detail\">
                    <h5>";
        // line 6
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.order.order_state"]);
        echo "</h5>
                    ";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "order_state_label", [], "any", false, false, false, 7), "html", null, true);
        echo "
                </div>
                <div class=\"mall-order-details__detail\">
                    <h5>";
        // line 10
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.order.payment_state"]);
        echo "</h5>
                    ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "payment_state_label", [], "any", false, false, false, 11), "html", null, true);
        echo "
                    ";
        // line 12
        if ( !twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "isPaid", [], "any", false, false, false, 12)) {
            // line 13
            echo "                        ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "payment_method", [], "any", false, false, false, 13), "instructions", [], "any", false, false, false, 13)) {
                // line 14
                echo "                            <div class=\"mall-order-details__instructions\">
                                ";
                // line 15
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "payment_method", [], "any", false, false, false, 15), "renderInstructions", [0 => ($context["order"] ?? null)], "method", false, false, false, 15);
                echo "
                            </div>
                        ";
            }
            // line 18
            echo "                        <br/>
                        <a href=\"";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "paymentLink", [], "any", false, false, false, 19), "html", null, true);
            echo "?order=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "hashId", [], "any", false, false, false, 19), "html", null, true);
            echo "\">
                            ";
            // line 20
            echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.payment_method.pay_now"]);
            echo "
                        </a>
                    ";
        }
        // line 23
        echo "                </div>
            </div>
            <div class=\"mall-order-details__row\">
                <div class=\"mall-order-details__detail\">
                    <h5>";
        // line 27
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.shipping_method"]);
        echo "</h5>
                    ";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "shipping", [], "any", false, false, false, 28), "method", [], "any", false, false, false, 28), "name", [], "any", false, false, false, 28), "html", null, true);
        echo "
                </div>
                <div class=\"mall-order-details__detail\">
                    <h5>";
        // line 31
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.payment_method"]);
        echo "</h5>
                    ";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "payment_method", [], "any", false, false, false, 32), "name", [], "any", false, false, false, 32), "html", null, true);
        echo "
                </div>
            </div>
            ";
        // line 35
        if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "tracking_number", [], "any", false, false, false, 35) || twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "tracking_url", [], "any", false, false, false, 35))) {
            // line 36
            echo "                <div class=\"mall-order-details__row\">
                    <div class=\"mall-order-details__detail\">
                        <h5>";
            // line 38
            echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.shipping_tracking"]);
            echo "</h5>
                        ";
            // line 39
            if (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "tracking_url", [], "any", false, false, false, 39)) {
                // line 40
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "tracking_url", [], "any", false, false, false, 40), "html", null, true);
                echo "\" target=\"_blank\"
                               rel=\"noopener nofollow\">
                                ";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "tracking_url", [], "any", false, false, false, 42), "html", null, true);
                echo "
                            </a>
                            ";
                // line 44
                if (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "tracking_number", [], "any", false, false, false, 44)) {
                    // line 45
                    echo "                                <br/>
                            ";
                }
                // line 47
                echo "                        ";
            }
            // line 48
            echo "                        ";
            if (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "tracking_number", [], "any", false, false, false, 48)) {
                // line 49
                echo "                            ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "tracking_number", [], "any", false, false, false, 49), "html", null, true);
                echo "
                        ";
            }
            // line 51
            echo "                    </div>
                </div>
            ";
        }
        // line 54
        echo "            <div class=\"mall-order-details__row\">
                <div class=\"mall-order-details__detail\">
                    <h5>";
        // line 56
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.shipping_address"]);
        echo "</h5>
                    ";
        // line 57
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['address'] = twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "shipping_address", [], "any", false, false, false, 57)        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::address")        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 58
        echo "                </div>
                <div class=\"mall-order-details__detail\">
                    <h5>";
        // line 60
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.billing_address"]);
        echo "</h5>
                    ";
        // line 61
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['address'] = twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "billing_address", [], "any", false, false, false, 61)        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::address")        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 62
        echo "                </div>
            </div>

            <div class=\"mall-order-details__product-list\">
                ";
        // line 66
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['products'] = twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "products", [], "any", false, false, false, 66)        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::productlist")        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 67
        echo "            </div>
        </div>
    </td>
</tr>
";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/code/maske/plugins/offline/mall/components/orderslist/details.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 67,  195 => 66,  189 => 62,  184 => 61,  180 => 60,  176 => 58,  171 => 57,  167 => 56,  163 => 54,  158 => 51,  152 => 49,  149 => 48,  146 => 47,  142 => 45,  140 => 44,  135 => 42,  129 => 40,  127 => 39,  123 => 38,  119 => 36,  117 => 35,  111 => 32,  107 => 31,  101 => 28,  97 => 27,  91 => 23,  85 => 20,  79 => 19,  76 => 18,  70 => 15,  67 => 14,  64 => 13,  62 => 12,  58 => 11,  54 => 10,  48 => 7,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<tr style=\"display: none\" class=\"mall-orders-list__details\">
    <td colspan=\"5\">
        <div class=\"mall-order-details\">
            <div class=\"mall-order-details__row\">
                <div class=\"mall-order-details__detail\">
                    <h5>{{ 'offline.mall::frontend.order.order_state' | trans }}</h5>
                    {{ order.order_state_label }}
                </div>
                <div class=\"mall-order-details__detail\">
                    <h5>{{ 'offline.mall::frontend.order.payment_state' | trans }}</h5>
                    {{ order.payment_state_label }}
                    {% if not order.isPaid %}
                        {% if order.payment_method.instructions %}
                            <div class=\"mall-order-details__instructions\">
                                {{ order.payment_method.renderInstructions(order) | raw }}
                            </div>
                        {% endif %}
                        <br/>
                        <a href=\"{{ __SELF__.paymentLink }}?order={{ order.hashId }}\">
                            {{ 'offline.mall::frontend.payment_method.pay_now' | trans }}
                        </a>
                    {% endif %}
                </div>
            </div>
            <div class=\"mall-order-details__row\">
                <div class=\"mall-order-details__detail\">
                    <h5>{{ 'offline.mall::frontend.shipping_method' | trans }}</h5>
                    {{ order.shipping.method.name }}
                </div>
                <div class=\"mall-order-details__detail\">
                    <h5>{{ 'offline.mall::frontend.payment_method' | trans }}</h5>
                    {{ order.payment_method.name }}
                </div>
            </div>
            {% if order.tracking_number or order.tracking_url %}
                <div class=\"mall-order-details__row\">
                    <div class=\"mall-order-details__detail\">
                        <h5>{{ 'offline.mall::frontend.shipping_tracking' | trans }}</h5>
                        {% if order.tracking_url %}
                            <a href=\"{{ order.tracking_url }}\" target=\"_blank\"
                               rel=\"noopener nofollow\">
                                {{ order.tracking_url }}
                            </a>
                            {% if order.tracking_number %}
                                <br/>
                            {% endif %}
                        {% endif %}
                        {% if order.tracking_number %}
                            {{ order.tracking_number }}
                        {% endif %}
                    </div>
                </div>
            {% endif %}
            <div class=\"mall-order-details__row\">
                <div class=\"mall-order-details__detail\">
                    <h5>{{ 'offline.mall::frontend.shipping_address' | trans }}</h5>
                    {% partial __SELF__ ~ '::address' address=order.shipping_address %}
                </div>
                <div class=\"mall-order-details__detail\">
                    <h5>{{ 'offline.mall::frontend.billing_address' | trans }}</h5>
                    {% partial __SELF__ ~ '::address' address=order.billing_address %}
                </div>
            </div>

            <div class=\"mall-order-details__product-list\">
                {% partial __SELF__ ~ '::productlist' products=order.products %}
            </div>
        </div>
    </td>
</tr>
", "/home/vagrant/code/maske/plugins/offline/mall/components/orderslist/details.htm", "");
    }
}
