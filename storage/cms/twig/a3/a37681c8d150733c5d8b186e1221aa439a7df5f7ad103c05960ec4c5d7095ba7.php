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

/* /home/vagrant/code/maske/plugins/offline/mall/components/cart/table/entry.htm */
class __TwigTemplate_d0467c082dff4a649bcfe5d59393313fac005210234ff87cbdf06b98490ec5fc extends \Twig\Template
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
        $context["url"] = $this->extensions['Cms\Twig\Extension']->pageFilter(($context["productPage"] ?? null), ["slug" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "data", [], "any", false, false, false, 1), "slug", [], "any", false, false, false, 1), "variant" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "variant", [], "any", false, false, false, 1), "hashId", [], "any", false, false, false, 1)]);
        // line 2
        $context["image"] = ((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "variant", [], "any", false, false, false, 2)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "variant", [], "any", false, false, false, 2), "image", [], "any", false, false, false, 2)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "data", [], "any", false, false, false, 2), "image", [], "any", false, false, false, 2)));
        // line 3
        echo "<tr class=\"mall-cart__product\">
    <td>
        ";
        // line 5
        if (($context["image"] ?? null)) {
            // line 6
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
            echo "\">
                <img src=\"";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["image"] ?? null), "thumb", [0 => 100, 1 => ($context["auto"] ?? null)], "method", false, false, false, 7), "html", null, true);
            echo "\" alt=\"\"/>
            </a>
        ";
        }
        // line 10
        echo "    </td>
    <td>
        <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
        echo "\">
            ";
        // line 13
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "variant", [], "any", false, false, false, 13), "name", [], "any", false, false, false, 13)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "variant", [], "any", false, false, false, 13), "name", [], "any", false, false, false, 13)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "data", [], "any", false, false, false, 13), "name", [], "any", false, false, false, 13))), "html", null, true);
        echo "
        </a>
        ";
        // line 15
        if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "variant", [], "any", false, false, false, 15)) {
            // line 16
            echo "            <br/>
            <span class=\"text-muted\">
                ";
            // line 18
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "variant", [], "any", false, false, false, 18), "properties_description", [], "any", false, false, false, 18);
            echo "
            </span>
        ";
        }
        // line 21
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "custom_field_values", [], "any", false, false, false, 21)) {
            // line 22
            echo "            <br/>
            <span class=\"text-muted\">
                ";
            // line 24
            echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "custom_field_value_description", [], "any", false, false, false, 24);
            echo "
            </span>
        ";
        }
        // line 27
        echo "        <div>
            <a href=\"javascript:;\"
               class=\"js-mall-remove-product\"
               data-id=\"";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "hashId", [], "any", false, false, false, 30), "html", null, true);
        echo "\"
            >
                ";
        // line 32
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.remove"]);
        echo "
            </a>
        </div>
    </td>
    <td class=\"text-right\">
        ";
        // line 37
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['product'] = ($context["product"] ?? null)        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::table/quantitydropdown")        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 38
        echo "    </td>
    <td class=\"text-right\">
        ";
        // line 40
        echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "price", [], "method", false, false, false, 40);
        echo "
        ";
        // line 41
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "service_options", [], "any", false, false, false, 41), "count", [], "any", false, false, false, 41) > 0)) {
            // line 42
            echo "            <div class=\"mall-cart__price-additions\">
                + ";
            // line 43
            echo call_user_func_array($this->env->getFilter('money')->getCallable(), [twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "servicePostTaxes", [], "any", false, false, false, 43)]);
            echo "
            </div>
        ";
        }
        // line 46
        echo "    </td>
    <td class=\"text-right\">
        ";
        // line 48
        echo call_user_func_array($this->env->getFilter('money')->getCallable(), [twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "totalPostTaxes", [], "any", false, false, false, 48)]);
        echo "
    </td>
</tr>

";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "service_options", [], "any", false, false, false, 52));
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
        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
            // line 53
            echo "    <tr class=\"mall-cart__services ";
            echo ((twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 53)) ? ("mall-cart__services--first") : (""));
            echo " ";
            echo ((twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 53)) ? ("mall-cart__services--last") : (""));
            echo "\">
        <td></td>
        <td colspan=\"2\">
            ";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 56), "html", null, true);
            echo "
        </td>
        <td class=\"text-right\">
            ";
            // line 59
            echo call_user_func_array($this->env->getFilter('money')->getCallable(), [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["option"], "price", [], "method", false, false, false, 59), "integer", [], "any", false, false, false, 59)]);
            echo "
        </td>
        <td></td>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "/home/vagrant/code/maske/plugins/offline/mall/components/cart/table/entry.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 59,  175 => 56,  166 => 53,  149 => 52,  142 => 48,  138 => 46,  132 => 43,  129 => 42,  127 => 41,  123 => 40,  119 => 38,  114 => 37,  106 => 32,  101 => 30,  96 => 27,  90 => 24,  86 => 22,  83 => 21,  77 => 18,  73 => 16,  71 => 15,  66 => 13,  62 => 12,  58 => 10,  52 => 7,  47 => 6,  45 => 5,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set url = (productPage | page({slug: product.data.slug, variant: product.variant.hashId})) %}
{% set image = product.variant ? product.variant.image : product.data.image %}
<tr class=\"mall-cart__product\">
    <td>
        {% if image %}
            <a href=\"{{ url }}\">
                <img src=\"{{ image.thumb(100, auto) }}\" alt=\"\"/>
            </a>
        {% endif %}
    </td>
    <td>
        <a href=\"{{ url }}\">
            {{ product.variant.name ?: product.data.name }}
        </a>
        {% if product.variant %}
            <br/>
            <span class=\"text-muted\">
                {{ product.variant.properties_description | raw }}
            </span>
        {% endif %}
        {% if product.custom_field_values %}
            <br/>
            <span class=\"text-muted\">
                {{ product.custom_field_value_description | raw }}
            </span>
        {% endif %}
        <div>
            <a href=\"javascript:;\"
               class=\"js-mall-remove-product\"
               data-id=\"{{ product.hashId }}\"
            >
                {{ 'offline.mall::frontend.remove' | trans }}
            </a>
        </div>
    </td>
    <td class=\"text-right\">
        {% partial __SELF__ ~ '::table/quantitydropdown' product=product %}
    </td>
    <td class=\"text-right\">
        {{ product.price() | raw }}
        {% if product.service_options.count > 0 %}
            <div class=\"mall-cart__price-additions\">
                + {{ product.servicePostTaxes | money }}
            </div>
        {% endif %}
    </td>
    <td class=\"text-right\">
        {{ product.totalPostTaxes | money }}
    </td>
</tr>

{% for option in product.service_options %}
    <tr class=\"mall-cart__services {{ loop.first ? 'mall-cart__services--first' }} {{ loop.last ? 'mall-cart__services--last' }}\">
        <td></td>
        <td colspan=\"2\">
            {{ option.name }}
        </td>
        <td class=\"text-right\">
            {{ option.price().integer | money }}
        </td>
        <td></td>
    </tr>
{% endfor %}
", "/home/vagrant/code/maske/plugins/offline/mall/components/cart/table/entry.htm", "");
    }
}
