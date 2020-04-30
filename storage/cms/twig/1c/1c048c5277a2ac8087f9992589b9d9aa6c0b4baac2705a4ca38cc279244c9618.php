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

/* /home/vagrant/code/maske/plugins/offline/mall/components/product/cart.htm */
class __TwigTemplate_69d04fc4aa49a4eb9027f58835c99e5a1ab67730306fc52a6948e6b6c20eb8d0 extends \Twig\Template
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
        echo "<form data-request=\"onAddToCart\"
      data-request-success=\"data.added && \$.publish('mall.cart.productAdded', data)\"
      data-request-validate
      data-request-flash
      id=\"mall-add-to-cart\">
    ";
        // line 6
        if ((twig_get_attribute($this->env, $this->source, ($context["variants"] ?? null), "count", [], "any", false, false, false, 6) > 0)) {
            // line 7
            echo "        <h5 class=\"mall-product__variants-heading\">";
            echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.variants"]);
            echo "</h5>
        <div class=\"mall-product__variants\">
            ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["variants"] ?? null));
            foreach ($context['_seq'] as $context["value"] => $context["variant"]) {
                // line 10
                echo "                ";
                $context["variant"] = twig_get_attribute($this->env, $this->source, $context["variant"], "first", [], "method", false, false, false, 10);
                // line 11
                echo "                <div class=\"mall-product__variant\">
                    <a href=\"";
                // line 12
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 12), "fileName", [], "any", false, false, false, 12), ["slug" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 12), "slug", [], "any", false, false, false, 12), "variant" => twig_get_attribute($this->env, $this->source, $context["variant"], "hashId", [], "any", false, false, false, 12)]);
                echo "\"
                       title=\"";
                // line 13
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["variant"], "name", [], "any", false, false, false, 13), "html", null, true);
                echo "\">
                        <img src=\"";
                // line 14
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["variant"], "main_image", [], "any", false, false, false, 14), "thumb", [0 => 80, 1 => ($context["auto"] ?? null)], "method", false, false, false, 14), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["variant"], "name", [], "any", false, false, false, 14), "html", null, true);
                echo "\"/>
                    </a>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['value'], $context['variant'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "        </div>
    ";
        }
        // line 20
        echo "
    ";
        // line 21
        if (((twig_get_attribute($this->env, $this->source, ($context["props"] ?? null), "count", [], "any", false, false, false, 21) > 0) && (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "inventory_management_method", [], "any", false, false, false, 21) == "variant"))) {
            // line 22
            echo "        <div class=\"mall-product__variant-properties\">
            ";
            // line 23
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['props'] = ($context["props"] ?? null)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::properties")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 24
            echo "        </div>
    ";
        }
        // line 26
        echo "
    ";
        // line 27
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "custom_fields", [], "any", false, false, false, 27), "count", [], "any", false, false, false, 27) > 0)) {
            // line 28
            echo "        <div class=\"mall-product__custom-fields\">
            ";
            // line 29
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['fields'] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "custom_fields", [], "any", false, false, false, 29)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::customfields")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 30
            echo "        </div>
    ";
        }
        // line 32
        echo "
    <div class=\"mall-product__price\">
        ";
        // line 34
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['item'] = ($context["item"] ?? null)        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::price")        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 35
        echo "    </div>

    <div class=\"mall-product__tax-info\">
        ";
        // line 38
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['item'] = ($context["item"] ?? null)        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::tax-info")        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 39
        echo "    </div>

    <div class=\"mall-product__add-to-cart\">
        ";
        // line 42
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "allow_out_of_stock_purchases", [], "any", false, false, false, 42)) {
            // line 43
            echo "            ";
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['item'] = ($context["item"] ?? null)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::addtocart.htm")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 44
            echo "        ";
        } else {
            // line 45
            echo "            <div class=\"mall-product__property-stock mall-product__property-stock--checking\">
                ";
            // line 46
            echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.stock.checking"]);
            echo "
            </div>
        ";
        }
        // line 49
        echo "    </div>
</form>";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/code/maske/plugins/offline/mall/components/product/cart.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 49,  158 => 46,  155 => 45,  152 => 44,  146 => 43,  144 => 42,  139 => 39,  134 => 38,  129 => 35,  124 => 34,  120 => 32,  116 => 30,  111 => 29,  108 => 28,  106 => 27,  103 => 26,  99 => 24,  94 => 23,  91 => 22,  89 => 21,  86 => 20,  82 => 18,  70 => 14,  66 => 13,  62 => 12,  59 => 11,  56 => 10,  52 => 9,  46 => 7,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<form data-request=\"onAddToCart\"
      data-request-success=\"data.added && \$.publish('mall.cart.productAdded', data)\"
      data-request-validate
      data-request-flash
      id=\"mall-add-to-cart\">
    {% if variants.count > 0 %}
        <h5 class=\"mall-product__variants-heading\">{{ 'offline.mall::frontend.variants' | trans }}</h5>
        <div class=\"mall-product__variants\">
            {% for value, variant in variants %}
                {% set variant = variant.first() %}
                <div class=\"mall-product__variant\">
                    <a href=\"{{ this.page.fileName|page({slug: this.param.slug, variant: variant.hashId}) }}\"
                       title=\"{{ variant.name }}\">
                        <img src=\"{{ variant.main_image.thumb(80, auto) }}\" alt=\"{{ variant.name }}\"/>
                    </a>
                </div>
            {% endfor %}
        </div>
    {% endif %}

    {% if props.count > 0 and item.inventory_management_method == 'variant' %}
        <div class=\"mall-product__variant-properties\">
            {% partial __SELF__ ~ '::properties' props=props %}
        </div>
    {% endif %}

    {% if item.custom_fields.count > 0 %}
        <div class=\"mall-product__custom-fields\">
            {% partial __SELF__ ~ '::customfields' fields=item.custom_fields %}
        </div>
    {% endif %}

    <div class=\"mall-product__price\">
        {% partial __SELF__ ~ '::price' item=item %}
    </div>

    <div class=\"mall-product__tax-info\">
        {% partial __SELF__ ~ '::tax-info' item=item %}
    </div>

    <div class=\"mall-product__add-to-cart\">
        {% if item.allow_out_of_stock_purchases %}
            {% partial __SELF__ ~ '::addtocart.htm' item=item %}
        {% else %}
            <div class=\"mall-product__property-stock mall-product__property-stock--checking\">
                {{ 'offline.mall::frontend.stock.checking' | trans }}
            </div>
        {% endif %}
    </div>
</form>", "/home/vagrant/code/maske/plugins/offline/mall/components/product/cart.htm", "");
    }
}
