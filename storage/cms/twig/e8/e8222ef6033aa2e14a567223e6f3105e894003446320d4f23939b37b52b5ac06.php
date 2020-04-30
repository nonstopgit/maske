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

/* /home/vagrant/code/maske/plugins/offline/mall/components/cart/table/shipping.htm */
class __TwigTemplate_eaf8248792c73e4a0bb9e661d6c8aca59a5075a022cbb3e7533d4a6db6221abd extends \Twig\Template
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
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "showShipping", [], "any", false, false, false, 1)) {
            // line 2
            echo "    <tr class=\"mall-cart__shipping\">
        <td></td>
        <td colspan=\"3\">
            ";
            // line 5
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shipping"] ?? null), "method", [], "any", false, false, false, 5), "name", [], "any", false, false, false, 5), "html", null, true);
            echo "
        </td>
        <td class=\"text-right\">
            ";
            // line 8
            echo call_user_func_array($this->env->getFilter('money')->getCallable(), [twig_get_attribute($this->env, $this->source, ($context["shipping"] ?? null), "totalPostTaxes", [], "any", false, false, false, 8)]);
            echo "
        </td>
    </tr>
";
        } else {
            // line 12
            echo "    ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::shippingexcluded")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
        }
    }

    public function getTemplateName()
    {
        return "/home/vagrant/code/maske/plugins/offline/mall/components/cart/table/shipping.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 12,  50 => 8,  44 => 5,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if __SELF__.showShipping %}
    <tr class=\"mall-cart__shipping\">
        <td></td>
        <td colspan=\"3\">
            {{ shipping.method.name }}
        </td>
        <td class=\"text-right\">
            {{ shipping.totalPostTaxes | money }}
        </td>
    </tr>
{% else %}
    {% partial __SELF__ ~ '::shippingexcluded' %}
{% endif %}", "/home/vagrant/code/maske/plugins/offline/mall/components/cart/table/shipping.htm", "");
    }
}
