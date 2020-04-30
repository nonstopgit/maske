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

/* /home/vagrant/code/maske/plugins/offline/mall/components/product/price.htm */
class __TwigTemplate_4a39e2ca08b76177b9cbee9c9012afc50981fbe354a715330758d306f8658b52 extends \Twig\Template
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
        $context["price"] = (((isset($context["price"]) || array_key_exists("price", $context))) ? (_twig_default_filter(($context["price"] ?? null), twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "price", [], "method", false, false, false, 1))) : (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "price", [], "method", false, false, false, 1)));
        // line 2
        echo "
";
        // line 3
        if ((twig_get_attribute($this->env, $this->source, ($context["price"] ?? null), "official", [], "any", false, false, false, 3) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "oldPrice", [], "method", false, false, false, 3), "integer", [], "any", false, false, false, 3))) {
            // line 4
            echo "    <div class=\"mall-product__old-price\">
        ";
            // line 5
            if (twig_get_attribute($this->env, $this->source, ($context["price"] ?? null), "official", [], "any", false, false, false, 5)) {
                // line 6
                echo "            ";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["price"] ?? null), "official", [], "any", false, false, false, 6), "string", [], "any", false, false, false, 6);
                echo "
        ";
            } else {
                // line 8
                echo "            ";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "oldPrice", [], "method", false, false, false, 8), "string", [], "any", false, false, false, 8);
                echo "
        ";
            }
            // line 10
            echo "    </div>
";
        }
        // line 12
        echo "<div class=\"mall-product__current-price\">
    ";
        // line 13
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['price'] = twig_get_attribute($this->env, $this->source, ($context["price"] ?? null), "string", [], "any", false, false, false, 13)        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::currentprice")        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 14
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/code/maske/plugins/offline/mall/components/product/price.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 14,  68 => 13,  65 => 12,  61 => 10,  55 => 8,  49 => 6,  47 => 5,  44 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set price = price|default(item.price()) %}

{% if price.official or item.oldPrice().integer %}
    <div class=\"mall-product__old-price\">
        {% if price.official %}
            {{ price.official.string | raw }}
        {% else %}
            {{ item.oldPrice().string | raw }}
        {% endif %}
    </div>
{% endif %}
<div class=\"mall-product__current-price\">
    {% partial __SELF__ ~ '::currentprice' price=price.string %}
</div>
", "/home/vagrant/code/maske/plugins/offline/mall/components/product/price.htm", "");
    }
}
