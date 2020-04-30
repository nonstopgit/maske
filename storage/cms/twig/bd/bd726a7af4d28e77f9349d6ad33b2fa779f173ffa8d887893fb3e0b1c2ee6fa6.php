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

/* /home/vagrant/code/maske/plugins/offline/mall/components/cart/table/discounts.htm */
class __TwigTemplate_5e489c9957b4afab2745a7d498150112825cf5460fad66699529d66e3cb0132c extends \Twig\Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["discounts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 2
            echo "    <tr class=\"mall-cart__discount\">
        <td></td>
        <td colspan=\"3\">
            ";
            // line 5
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entry"], "discount", [], "any", false, false, false, 5), "name", [], "any", false, false, false, 5), "html", null, true);
            echo "
            ";
            // line 6
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entry"], "discount", [], "any", false, false, false, 6), "code", [], "any", false, false, false, 6)) {
                // line 7
                echo "                (";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entry"], "discount", [], "any", false, false, false, 7), "code", [], "any", false, false, false, 7), "html", null, true);
                echo ")
            ";
            }
            // line 9
            echo "        </td>
        <td class=\"text-right\">
            ";
            // line 11
            echo call_user_func_array($this->env->getFilter('money')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["entry"], "savings", [], "any", false, false, false, 11)]);
            echo "
        </td>
    </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "/home/vagrant/code/maske/plugins/offline/mall/components/cart/table/discounts.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 11,  58 => 9,  52 => 7,  50 => 6,  46 => 5,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for entry in discounts %}
    <tr class=\"mall-cart__discount\">
        <td></td>
        <td colspan=\"3\">
            {{ entry.discount.name }}
            {% if entry.discount.code %}
                ({{ entry.discount.code }})
            {% endif %}
        </td>
        <td class=\"text-right\">
            {{ entry.savings | money }}
        </td>
    </tr>
{% endfor %}", "/home/vagrant/code/maske/plugins/offline/mall/components/cart/table/discounts.htm", "");
    }
}
