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

/* /home/vagrant/code/maske/themes/maske/partials/mallPDF/order/table.htm */
class __TwigTemplate_b2100580aa3d8b7b38b8b07c8a776b841ba5f7507ed040767bb9023fb8e87785 extends \Twig\Template
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
        echo "<table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\">
    <thead>
    <tr>
        <th style=\"text-align:left; width: 50%\">
            ";
        // line 5
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::lang.product.name"]);
        echo "
        </th>
        <th style=\"text-align: right; width: 10%\">
            ";
        // line 8
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::lang.order.quantity"]);
        echo "
        </th>
        <th style=\"text-align: right; width: 20%\">
            ";
        // line 11
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::lang.product.price"]);
        echo "
        </th>
        <th style=\"text-align: right; width: 20%\">
            ";
        // line 14
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::lang.order.total"]);
        echo "
        </th>
    </tr>
    </thead>
    <tbody>

    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 21
            echo "        ";
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['item'] = $context["item"]            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("mallPDF/order/row"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 22
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "
    <tr class=\"orderfooter separator separator-bottom\">
        <td colspan=\"3\" style=\"border-top: 1px solid #f5f8fa; font-style: italic;\">
            ";
        // line 26
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::lang.order.subtotal"]);
        echo "
        </td>
        <td style=\"text-align: right; border-top: 1px solid #f5f8fa; font-style: italic;\">
            ";
        // line 29
        echo twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "totalProductPostTaxes", [], "method", false, false, false, 29);
        echo "
        </td>
    </tr>

    ";
        // line 33
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['discounts'] = twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "discounts", [], "any", false, false, false, 33)        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("mallPDF/order/discounts"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 34
        echo "    ";
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['shipping'] = twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "shipping", [], "any", false, false, false, 34)        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("mallPDF/order/shipping"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 35
        echo "
    ";
        // line 36
        if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "payment", [], "any", false, false, false, 36) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "payment", [], "any", false, false, false, 36), "total", [], "any", false, false, false, 36) > 0))) {
            // line 37
            echo "        <tr class=\"orderfooter separator\">
            <td colspan=\"3\">
                ";
            // line 39
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "payment_method", [], "any", false, true, false, 39), "fee_label", [], "any", true, true, false, 39)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "payment_method", [], "any", false, true, false, 39), "fee_label", [], "any", false, false, false, 39), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "payment_method", [], "any", false, false, false, 39), "name", [], "any", false, false, false, 39))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "payment_method", [], "any", false, false, false, 39), "name", [], "any", false, false, false, 39))), "html", null, true);
            echo "
            </td>
            <td style=\"text-align: right\">
                ";
            // line 42
            echo call_user_func_array($this->env->getFilter('money')->getCallable(), [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "payment", [], "any", false, false, false, 42), "total", [], "any", false, false, false, 42)]);
            echo "
            </td>
        </tr>
    ";
        }
        // line 46
        echo "
    <tr class=\"orderfooter-bottomline\">
        <td colspan=\"3\" style=\" border-top: 1px solid #f5f8fa; font-weight: bold;\">
            ";
        // line 49
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::lang.order.grand_total"]);
        echo "
        </td>
        <td style=\"text-align: right; border-top: 1px solid #f5f8fa; font-weight: bold;\">
            ";
        // line 52
        echo twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "totalPostTaxes", [], "method", false, false, false, 52);
        echo "
        </td>
    </tr>

    ";
        // line 56
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['taxes'] = twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "taxes", [], "any", false, false, false, 56)        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("mallPDF/order/taxes"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 57
        echo "
    </tbody>
</table>";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/code/maske/themes/maske/partials/mallPDF/order/table.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 57,  155 => 56,  148 => 52,  142 => 49,  137 => 46,  130 => 42,  124 => 39,  120 => 37,  118 => 36,  115 => 35,  109 => 34,  104 => 33,  97 => 29,  91 => 26,  86 => 23,  80 => 22,  74 => 21,  70 => 20,  61 => 14,  55 => 11,  49 => 8,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\">
    <thead>
    <tr>
        <th style=\"text-align:left; width: 50%\">
            {{ 'offline.mall::lang.product.name' | trans }}
        </th>
        <th style=\"text-align: right; width: 10%\">
            {{ 'offline.mall::lang.order.quantity' | trans }}
        </th>
        <th style=\"text-align: right; width: 20%\">
            {{ 'offline.mall::lang.product.price' | trans }}
        </th>
        <th style=\"text-align: right; width: 20%\">
            {{ 'offline.mall::lang.order.total' | trans }}
        </th>
    </tr>
    </thead>
    <tbody>

    {% for item in products %}
        {% partial 'mallPDF/order/row' item=item %}
    {% endfor %}

    <tr class=\"orderfooter separator separator-bottom\">
        <td colspan=\"3\" style=\"border-top: 1px solid #f5f8fa; font-style: italic;\">
            {{ 'offline.mall::lang.order.subtotal' | trans }}
        </td>
        <td style=\"text-align: right; border-top: 1px solid #f5f8fa; font-style: italic;\">
            {{ order.totalProductPostTaxes() | raw }}
        </td>
    </tr>

    {% partial 'mallPDF/order/discounts' discounts=order.discounts %}
    {% partial 'mallPDF/order/shipping' shipping=order.shipping %}

    {% if order.payment and order.payment.total > 0 %}
        <tr class=\"orderfooter separator\">
            <td colspan=\"3\">
                {{ order.payment_method.fee_label | default(order.payment_method.name) }}
            </td>
            <td style=\"text-align: right\">
                {{ order.payment.total | money | raw }}
            </td>
        </tr>
    {% endif %}

    <tr class=\"orderfooter-bottomline\">
        <td colspan=\"3\" style=\" border-top: 1px solid #f5f8fa; font-weight: bold;\">
            {{ 'offline.mall::lang.order.grand_total' | trans }}
        </td>
        <td style=\"text-align: right; border-top: 1px solid #f5f8fa; font-weight: bold;\">
            {{ order.totalPostTaxes() | raw }}
        </td>
    </tr>

    {% partial 'mallPDF/order/taxes' taxes=order.taxes %}

    </tbody>
</table>", "/home/vagrant/code/maske/themes/maske/partials/mallPDF/order/table.htm", "");
    }
}
