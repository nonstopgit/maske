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

/* /home/vagrant/code/maske/plugins/offline/mall/components/cart/table/taxes.htm */
class __TwigTemplate_a742270b38c16b859c7c559b11aaf7de64213505d0ea86adbc197f4648223b60 extends \Twig\Template
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
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "showTaxes", [], "any", false, false, false, 1)) {
            // line 2
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["totals"] ?? null), "taxes", [], "any", false, false, false, 2));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
                // line 3
                echo "        <tr class=\"mall-cart__taxes mall-cart__taxes--";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 3), "html", null, true);
                echo "\">
            <td colspan=\"2\"></td>
            <td class=\"text-right\">
                ";
                // line 6
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entry"], "tax", [], "any", false, false, false, 6), "name", [], "any", false, false, false, 6), "html", null, true);
                echo "
            </td>
            <td class=\"text-right\">
                ";
                // line 9
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entry"], "tax", [], "any", false, false, false, 9), "percentage", [], "any", false, false, false, 9), "html", null, true);
                echo " %
            </td>
            <td class=\"text-right\">
                ";
                // line 12
                echo call_user_func_array($this->env->getFilter('money')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["entry"], "total", [], "any", false, false, false, 12)]);
                echo "
            </td>
        </tr>
    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "
    ";
            // line 17
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["totals"] ?? null), "taxes", [], "any", false, false, false, 17), "count", [], "any", false, false, false, 17) > 1)) {
                // line 18
                echo "        <tr class=\"mall-cart__taxes-total\">
            <td colspan=\"2\"></td>
            <td class=\"text-right\">
                ";
                // line 21
                echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.total.taxes"]);
                echo "
            </td>
            <td></td>
            <td class=\"text-right\">
                ";
                // line 25
                echo call_user_func_array($this->env->getFilter('money')->getCallable(), [twig_get_attribute($this->env, $this->source, ($context["totals"] ?? null), "totalTaxes", [], "any", false, false, false, 25)]);
                echo "
            </td>
        </tr>
    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "/home/vagrant/code/maske/plugins/offline/mall/components/cart/table/taxes.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 25,  104 => 21,  99 => 18,  97 => 17,  94 => 16,  76 => 12,  70 => 9,  64 => 6,  57 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if __SELF__.showTaxes %}
    {% for entry in totals.taxes %}
        <tr class=\"mall-cart__taxes mall-cart__taxes--{{ loop.index }}\">
            <td colspan=\"2\"></td>
            <td class=\"text-right\">
                {{ entry.tax.name }}
            </td>
            <td class=\"text-right\">
                {{ entry.tax.percentage }} %
            </td>
            <td class=\"text-right\">
                {{ entry.total | money }}
            </td>
        </tr>
    {% endfor %}

    {% if totals.taxes.count > 1 %}
        <tr class=\"mall-cart__taxes-total\">
            <td colspan=\"2\"></td>
            <td class=\"text-right\">
                {{ 'offline.mall::frontend.total.taxes' | trans }}
            </td>
            <td></td>
            <td class=\"text-right\">
                {{ totals.totalTaxes | money }}
            </td>
        </tr>
    {% endif %}
{% endif %}", "/home/vagrant/code/maske/plugins/offline/mall/components/cart/table/taxes.htm", "");
    }
}
