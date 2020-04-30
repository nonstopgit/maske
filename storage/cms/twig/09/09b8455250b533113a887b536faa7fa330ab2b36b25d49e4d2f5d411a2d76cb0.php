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

/* /home/vagrant/code/maske/plugins/offline/mall/components/cart/table/entries.htm */
class __TwigTemplate_c4190eed33004fe18170fa68bda99343fa737bb6147ff0e044693b8f31e3370d extends \Twig\Template
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
        echo "<div class=\"mall-cart__wrapper\">
    <div class=\"mall-table-overflow\" style=\"overflow-y: auto\">
        <table class=\"mall-cart__table\">
            <thead>
                ";
        // line 5
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::table/header")        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 6
        echo "            </thead>
            <tbody>
                ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "products", [], "any", false, false, false, 8));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 9
            echo "                    ";
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['product'] = $context["product"]            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::table/entry")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 10
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "            </tbody>
            <tfoot>
                ";
        // line 13
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['totals'] = twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "totals", [], "any", false, false, false, 13)        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::table/total")        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 14
        echo "                ";
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['discounts'] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "totals", [], "any", false, false, false, 14), "appliedDiscounts", [], "any", false, false, false, 14)        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::table/discounts")        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 15
        echo "                ";
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['shipping'] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "totals", [], "any", false, false, false, 15), "shippingTotal", [], "any", false, false, false, 15)        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::table/shipping")        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 16
        echo "                ";
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['payment'] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "totals", [], "any", false, false, false, 16), "paymentTotal", [], "any", false, false, false, 16)        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::table/payment")        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 17
        echo "                ";
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['totals'] = twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "totals", [], "any", false, false, false, 17)        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::table/grandtotal")        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 18
        echo "                ";
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['totals'] = twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "totals", [], "any", false, false, false, 18)        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::table/taxes")        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 19
        echo "            </tfoot>
        </table>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/code/maske/plugins/offline/mall/components/cart/table/entries.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 19,  100 => 18,  94 => 17,  88 => 16,  82 => 15,  76 => 14,  71 => 13,  67 => 11,  61 => 10,  55 => 9,  51 => 8,  47 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"mall-cart__wrapper\">
    <div class=\"mall-table-overflow\" style=\"overflow-y: auto\">
        <table class=\"mall-cart__table\">
            <thead>
                {% partial __SELF__ ~ '::table/header' %}
            </thead>
            <tbody>
                {% for product in cart.products %}
                    {% partial __SELF__ ~ '::table/entry' product=product %}
                {% endfor %}
            </tbody>
            <tfoot>
                {% partial __SELF__ ~ '::table/total'      totals=cart.totals %}
                {% partial __SELF__ ~ '::table/discounts'  discounts=cart.totals.appliedDiscounts %}
                {% partial __SELF__ ~ '::table/shipping'   shipping=cart.totals.shippingTotal %}
                {% partial __SELF__ ~ '::table/payment'    payment=cart.totals.paymentTotal %}
                {% partial __SELF__ ~ '::table/grandtotal' totals=cart.totals %}
                {% partial __SELF__ ~ '::table/taxes'      totals=cart.totals %}
            </tfoot>
        </table>
    </div>
</div>
", "/home/vagrant/code/maske/plugins/offline/mall/components/cart/table/entries.htm", "");
    }
}
