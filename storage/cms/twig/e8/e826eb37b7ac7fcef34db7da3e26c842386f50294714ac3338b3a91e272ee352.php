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

/* /home/vagrant/code/maske/plugins/offline/mall/components/cart/cart.htm */
class __TwigTemplate_5e060b7bc7ae31daff055f5dd47fb1a3ce6e3bb663cd63670108a7a13c05ff85 extends \Twig\Template
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
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "products", [], "any", false, false, false, 1), "count", [], "any", false, false, false, 1) < 1)) {
            // line 2
            echo "    ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::empty")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
        } else {
            // line 4
            echo "    ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::table/base")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 5
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "showDiscountApplier", [], "any", false, false, false, 5)) {
                // line 6
                echo "        ";
                $context['__cms_partial_params'] = [];
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::discountapplier")                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 7
                echo "    ";
            }
        }
        // line 9
        echo "
";
        // line 10
        if ((twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "showProceedToCheckoutButton", [], "any", false, false, false, 10) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "products", [], "any", false, false, false, 10), "count", [], "any", false, false, false, 10) > 0))) {
            // line 11
            echo "    ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::proceedtocheckout")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
        }
    }

    public function getTemplateName()
    {
        return "/home/vagrant/code/maske/plugins/offline/mall/components/cart/cart.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 11,  65 => 10,  62 => 9,  58 => 7,  53 => 6,  50 => 5,  45 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if cart.products.count < 1 %}
    {% partial __SELF__ ~ '::empty' %}
{% else %}
    {% partial __SELF__ ~ '::table/base' %}
    {% if __SELF__.showDiscountApplier %}
        {% partial __SELF__ ~ '::discountapplier' %}
    {% endif %}
{% endif %}

{% if __SELF__.showProceedToCheckoutButton and cart.products.count > 0 %}
    {% partial __SELF__ ~ '::proceedtocheckout' %}
{% endif %}", "/home/vagrant/code/maske/plugins/offline/mall/components/cart/cart.htm", "");
    }
}
