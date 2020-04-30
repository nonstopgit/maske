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

/* /home/vagrant/code/maske/plugins/offline/mall/components/checkout/paymentmethod.htm */
class __TwigTemplate_f3eae6cfbcd39f47c5b245ebd468aa5d27ff030c2619cb31af1f8e302475fdcf extends \Twig\Template
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
        echo "<div class=\"mall-cart-summary__method-logo\">
    ";
        // line 2
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "cart", [], "any", false, false, false, 2), "payment_method", [], "any", false, false, false, 2), "logo", [], "any", false, false, false, 2)) {
            // line 3
            echo "        <img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "cart", [], "any", false, false, false, 3), "payment_method", [], "any", false, false, false, 3), "logo", [], "any", false, false, false, 3), "thumb", [0 => 150, 1 => "auto"], "method", false, false, false, 3), "html", null, true);
            echo "\" alt=\"\"/>
    ";
        } else {
            // line 5
            echo "        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "cart", [], "any", false, false, false, 5), "payment_method", [], "any", false, false, false, 5), "name", [], "any", false, false, false, 5), "html", null, true);
            echo "
    ";
        }
        // line 7
        echo "</div>

<p class=\"mall-cart-summary__action\">
    <a href=\"";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "stepUrl", [0 => "payment", 1 => ["via" => "confirm"]], "method", false, false, false, 10), "html", null, true);
        echo "\">
        ";
        // line 11
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.change"]);
        echo "
    </a>
</p>";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/code/maske/plugins/offline/mall/components/checkout/paymentmethod.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 11,  59 => 10,  54 => 7,  48 => 5,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"mall-cart-summary__method-logo\">
    {% if __SELF__.cart.payment_method.logo %}
        <img src=\"{{ __SELF__.cart.payment_method.logo.thumb(150, 'auto') }}\" alt=\"\"/>
    {% else %}
        {{ __SELF__.cart.payment_method.name }}
    {% endif %}
</div>

<p class=\"mall-cart-summary__action\">
    <a href=\"{{ __SELF__.stepUrl('payment', {via: 'confirm'}) }}\">
        {{ 'offline.mall::frontend.change' | trans }}
    </a>
</p>", "/home/vagrant/code/maske/plugins/offline/mall/components/checkout/paymentmethod.htm", "");
    }
}
