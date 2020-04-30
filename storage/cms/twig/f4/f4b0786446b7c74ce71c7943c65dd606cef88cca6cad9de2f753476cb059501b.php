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

/* /home/vagrant/code/maske/themes/maske/partials/mallPDF/order/row.htm */
class __TwigTemplate_1ef17926193aa555981e6b90f48248d71c307e5f69c5f3bc5142c29ddd46563c extends \Twig\Template
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
        echo "<tr>
    <td style=\"vertical-align: top\">
        ";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "name", [], "any", false, false, false, 3), "html", null, true);
        echo "<br/>
        <div class=\"services\">
            ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "service_options", [], "any", false, false, false, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
            // line 6
            echo "                ";
            echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::lang.common.service"]);
            echo ":
                ";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 7), "html", null, true);
            echo "
                <br>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "        </div>
        <div class=\"variant\">
            ";
        // line 12
        echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "variant_name", [], "any", false, false, false, 12);
        echo "
        </div>
        <div class=\"attributes\">
            ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "custom_field_values", [], "any", false, false, false, 15));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 16
            echo "                ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "custom_field", [], "any", false, false, false, 16), "name", [], "any", false, false, false, 16), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "display_value", [], "any", false, false, false, 16), "html", null, true);
            echo "<br/>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "        </div>
        ";
        // line 19
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "is_virtual", [], "any", false, false, false, 19)) {
            // line 20
            echo "            <div class=\"download\">
                Download links will be sent separately after payment.
            </div>
        ";
        }
        // line 24
        echo "    </td>
    <td style=\"vertical-align: top; text-align: right\">";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "quantity", [], "any", false, false, false, 25), "html", null, true);
        echo "</td>
    <td style=\"vertical-align: top; text-align: right\">
        ";
        // line 27
        echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "pricePostTaxes", [], "method", false, false, false, 27);
        echo "
        ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "service_options", [], "any", false, false, false, 28));
        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
            // line 29
            echo "            <br> + ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "price_formatted", [], "any", false, false, false, 29), "html", null, true);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "    </td>
    <td style=\"vertical-align: top; text-align: right\">";
        // line 32
        echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "totalPostTaxes", [], "method", false, false, false, 32);
        echo "</td>
</tr>";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/code/maske/themes/maske/partials/mallPDF/order/row.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 32,  125 => 31,  116 => 29,  112 => 28,  108 => 27,  103 => 25,  100 => 24,  94 => 20,  92 => 19,  89 => 18,  78 => 16,  74 => 15,  68 => 12,  64 => 10,  55 => 7,  50 => 6,  46 => 5,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<tr>
    <td style=\"vertical-align: top\">
        {{ item.name }}<br/>
        <div class=\"services\">
            {% for option in item.service_options %}
                {{ 'offline.mall::lang.common.service' | trans }}:
                {{ option.name }}
                <br>
            {% endfor %}
        </div>
        <div class=\"variant\">
            {{ item.variant_name | raw }}
        </div>
        <div class=\"attributes\">
            {% for field in item.custom_field_values %}
                {{ field.custom_field.name }}: {{ field.display_value }}<br/>
            {% endfor %}
        </div>
        {% if item.is_virtual %}
            <div class=\"download\">
                Download links will be sent separately after payment.
            </div>
        {% endif %}
    </td>
    <td style=\"vertical-align: top; text-align: right\">{{ item.quantity }}</td>
    <td style=\"vertical-align: top; text-align: right\">
        {{ item.pricePostTaxes() | raw }}
        {% for option in item.service_options %}
            <br> + {{ option.price_formatted }}
        {% endfor %}
    </td>
    <td style=\"vertical-align: top; text-align: right\">{{ item.totalPostTaxes() | raw }}</td>
</tr>", "/home/vagrant/code/maske/themes/maske/partials/mallPDF/order/row.htm", "");
    }
}
