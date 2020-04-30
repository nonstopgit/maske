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

/* /home/vagrant/code/maske/plugins/offline/mall/components/orderslist/orderlist.htm */
class __TwigTemplate_d3798b69b0f15cca74a679974a59224286fe88bad3152ca5bcce329e18bb0f0b extends \Twig\Template
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
        echo "<div class=\"mall-table-overflow\" style=\"overflow-y: auto;\">
    <table class=\"mall-orders-list__table mall-table\">
        <tr>
            <th>#</th>
            <th>";
        // line 5
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.created_at"]);
        echo "</th>
            <th>";
        // line 6
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.order.order_state"]);
        echo "</th>
            <th>";
        // line 7
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.order.payment_state"]);
        echo "</th>
            <th class=\"text-right\">";
        // line 8
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.total"]);
        echo "</th>
        </tr>
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["orders"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
            // line 11
            echo "            <tr class=\"mall-orders-list__order ";
            echo ((twig_get_attribute($this->env, $this->source, $context["order"], "isPaid", [], "any", false, false, false, 11)) ? ("") : ("mall-orders-list__order--unpaid"));
            echo "\">
                <td>";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "order_number", [], "any", false, false, false, 12), "html", null, true);
            echo "</td>
                <td>";
            // line 13
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['order'] = $context["order"]            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::created_at")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            echo "</td>
                <td>";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "order_state_label", [], "any", false, false, false, 14), "html", null, true);
            echo "</td>
                <td>
                    ";
            // line 16
            if (twig_get_attribute($this->env, $this->source, $context["order"], "isPaid", [], "any", false, false, false, 16)) {
                // line 17
                echo "                        ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "payment_state_label", [], "any", false, false, false, 17), "html", null, true);
                echo "
                    ";
            } else {
                // line 19
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "paymentLink", [], "any", false, false, false, 19), "html", null, true);
                echo "?order=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "hashId", [], "any", false, false, false, 19), "html", null, true);
                echo "\">
                            ";
                // line 20
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "payment_state_label", [], "any", false, false, false, 20), "html", null, true);
                echo "
                        </a>
                    ";
            }
            // line 23
            echo "                </td>
                <td class=\"text-right\">";
            // line 24
            echo twig_get_attribute($this->env, $this->source, $context["order"], "totalPostTaxes", [], "method", false, false, false, 24);
            echo "</td>
            </tr>
            ";
            // line 26
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['order'] = $context["order"]            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::details")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 27
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "    </table>
</div>
";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/code/maske/plugins/offline/mall/components/orderslist/orderlist.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 28,  119 => 27,  114 => 26,  109 => 24,  106 => 23,  100 => 20,  93 => 19,  87 => 17,  85 => 16,  80 => 14,  73 => 13,  69 => 12,  64 => 11,  60 => 10,  55 => 8,  51 => 7,  47 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"mall-table-overflow\" style=\"overflow-y: auto;\">
    <table class=\"mall-orders-list__table mall-table\">
        <tr>
            <th>#</th>
            <th>{{ 'offline.mall::frontend.created_at' | trans }}</th>
            <th>{{ 'offline.mall::frontend.order.order_state' | trans }}</th>
            <th>{{ 'offline.mall::frontend.order.payment_state' | trans }}</th>
            <th class=\"text-right\">{{ 'offline.mall::frontend.total' | trans }}</th>
        </tr>
        {% for order in orders %}
            <tr class=\"mall-orders-list__order {{ order.isPaid ? '' : 'mall-orders-list__order--unpaid' }}\">
                <td>{{ order.order_number }}</td>
                <td>{% partial __SELF__ ~ '::created_at' order=order %}</td>
                <td>{{ order.order_state_label }}</td>
                <td>
                    {% if order.isPaid %}
                        {{ order.payment_state_label }}
                    {% else %}
                        <a href=\"{{ __SELF__.paymentLink }}?order={{ order.hashId }}\">
                            {{ order.payment_state_label }}
                        </a>
                    {% endif %}
                </td>
                <td class=\"text-right\">{{ order.totalPostTaxes() | raw }}</td>
            </tr>
            {% partial __SELF__ ~ '::details' order=order %}
        {% endfor %}
    </table>
</div>
", "/home/vagrant/code/maske/plugins/offline/mall/components/orderslist/orderlist.htm", "");
    }
}
