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

/* /home/vagrant/code/maske/themes/maske/partials/mallPDF/order/shipping.htm */
class __TwigTemplate_1b0dbf008cfa55680d7157b90d4346f45ed3bd34a5ada1335f54a74baae4462a extends \Twig\Template
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
        if (($context["shipping"] ?? null)) {
            // line 2
            echo "    <tr class=\"orderfooter separator\">
        <td colspan=\"3\">
            ";
            // line 4
            echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::lang.common.shipping"]);
            echo ":
            ";
            // line 5
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shipping"] ?? null), "method", [], "any", false, false, false, 5), "name", [], "any", false, false, false, 5), "html", null, true);
            echo "
            ";
            // line 6
            if (twig_get_attribute($this->env, $this->source, ($context["shipping"] ?? null), "appliedDiscount", [], "any", false, false, false, 6)) {
                // line 7
                echo "                (";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shipping"] ?? null), "appliedDiscount", [], "any", false, false, false, 7), "discount", [], "any", false, false, false, 7), "name", [], "any", false, false, false, 7), "html", null, true);
                echo ",
                ";
                // line 8
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shipping"] ?? null), "appliedDiscount", [], "any", false, false, false, 8), "savings", [], "any", false, false, false, 8), "html", null, true);
                echo "
            ";
            }
            // line 10
            echo "        </td>
        <td style=\"text-align: right\">
            ";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shipping"] ?? null), "method", [], "any", false, false, false, 12), "price_formatted", [], "any", false, false, false, 12), "html", null, true);
            echo "
        </td>
    </tr>
";
        }
    }

    public function getTemplateName()
    {
        return "/home/vagrant/code/maske/themes/maske/partials/mallPDF/order/shipping.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 12,  63 => 10,  58 => 8,  53 => 7,  51 => 6,  47 => 5,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if shipping %}
    <tr class=\"orderfooter separator\">
        <td colspan=\"3\">
            {{ 'offline.mall::lang.common.shipping' | trans }}:
            {{ shipping.method.name }}
            {% if shipping.appliedDiscount %}
                ({{ shipping.appliedDiscount.discount.name }},
                {{ shipping.appliedDiscount.savings }}
            {% endif %}
        </td>
        <td style=\"text-align: right\">
            {{ shipping.method.price_formatted }}
        </td>
    </tr>
{% endif %}", "/home/vagrant/code/maske/themes/maske/partials/mallPDF/order/shipping.htm", "");
    }
}
