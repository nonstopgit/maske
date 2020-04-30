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

/* /home/vagrant/code/maske/plugins/offline/mall/components/product/addtocart.htm */
class __TwigTemplate_676dbe88cc988edd088d852a156c57cbc207b4082b1e3c2b0301e0992180fa1e extends \Twig\Template
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
        if ( !twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "allow_out_of_stock_purchases", [], "any", false, false, false, 1)) {
            // line 2
            echo "    <div class=\"mall-product__property-stock text-";
            echo (((($context["stock"] ?? null) > 0)) ? ("green") : ("red"));
            echo "\">
        ";
            // line 3
            if ((($context["stock"] ?? null) > 10)) {
                // line 4
                echo "            ";
                echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.stock.many_available"]);
                echo "
        ";
            } elseif ((            // line 5
($context["stock"] ?? null) > 0)) {
                // line 6
                echo "            ";
                echo call_user_func_array($this->env->getFilter('transchoice')->getCallable(), ["offline.mall::frontend.stock.available", ($context["stock"] ?? null), ["stock" => ($context["stock"] ?? null)]]);
                echo "
        ";
            } else {
                // line 8
                echo "            ";
                echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.stock.unavailable"]);
                echo "
        ";
            }
            // line 10
            echo "    </div>
";
        }
        // line 12
        if (((($context["stock"] ?? null) > 0) || twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "allow_out_of_stock_purchases", [], "any", false, false, false, 12))) {
            // line 13
            echo "    <div class=\"mall-product__add-to-cart-form\">
        <div class=\"mall-form-control\">
            <label for=\"quantity\">";
            // line 15
            echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.quantity"]);
            echo "</label>
            <input type=\"number\"
                   id=\"quantity\"
                   class=\"mall-input\"
                   min=\"";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "quantity_min", [], "any", false, false, false, 19), "html", null, true);
            echo "\" max=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "quantity_max", [], "any", false, false, false, 19), "html", null, true);
            echo "\"
                   name=\"quantity\" value=\"";
            // line 20
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "quantity_default", [], "any", true, true, false, 20)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "quantity_default", [], "any", false, false, false, 20), 1)) : (1)), "html", null, true);
            echo "\">
            <div data-validate-for=\"quantity\"></div>
        </div>
        <button type=\"submit\" class=\"mall-add-to-cart-button\" data-attach-loading>
            ";
            // line 24
            echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.cart.add"]);
            echo "
        </button>
    </div>
";
        }
        // line 28
        echo "
";
        // line 29
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::belowcartbutton")        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "/home/vagrant/code/maske/plugins/offline/mall/components/product/addtocart.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 29,  102 => 28,  95 => 24,  88 => 20,  82 => 19,  75 => 15,  71 => 13,  69 => 12,  65 => 10,  59 => 8,  53 => 6,  51 => 5,  46 => 4,  44 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if not item.allow_out_of_stock_purchases %}
    <div class=\"mall-product__property-stock text-{{ stock > 0 ? 'green' : 'red' }}\">
        {% if stock > 10 %}
            {{ 'offline.mall::frontend.stock.many_available' | trans }}
        {% elseif stock > 0 %}
            {{ 'offline.mall::frontend.stock.available' | transchoice(stock, {stock: stock}) }}
        {% else %}
            {{ 'offline.mall::frontend.stock.unavailable' | trans }}
        {% endif %}
    </div>
{% endif %}
{% if stock > 0 or item.allow_out_of_stock_purchases %}
    <div class=\"mall-product__add-to-cart-form\">
        <div class=\"mall-form-control\">
            <label for=\"quantity\">{{ 'offline.mall::frontend.quantity' | trans }}</label>
            <input type=\"number\"
                   id=\"quantity\"
                   class=\"mall-input\"
                   min=\"{{ item.quantity_min }}\" max=\"{{ item.quantity_max }}\"
                   name=\"quantity\" value=\"{{ item.quantity_default | default(1) }}\">
            <div data-validate-for=\"quantity\"></div>
        </div>
        <button type=\"submit\" class=\"mall-add-to-cart-button\" data-attach-loading>
            {{ 'offline.mall::frontend.cart.add' | trans }}
        </button>
    </div>
{% endif %}

{% partial __SELF__ ~ '::belowcartbutton' %}", "/home/vagrant/code/maske/plugins/offline/mall/components/product/addtocart.htm", "");
    }
}
