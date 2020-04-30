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

/* /home/vagrant/code/maske/plugins/offline/mall/components/cart/table/quantitydropdown.htm */
class __TwigTemplate_a69719aac66f91619f69904d0773a0980c089596266a5bd28f7d184766455330 extends \Twig\Template
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
        echo "<select class=\"mall-selectbox-sm js-mall-quantity\" data-id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "hashId", [], "any", false, false, false, 1), "html", null, true);
        echo "\" name=\"quantity\">
    ";
        // line 2
        $context["min"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "data", [], "any", false, true, false, 2), "quantity_min", [], "any", true, true, false, 2)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "data", [], "any", false, true, false, 2), "quantity_min", [], "any", false, false, false, 2), twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "defaultMinQuantity", [], "any", false, false, false, 2))) : (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "defaultMinQuantity", [], "any", false, false, false, 2)));
        // line 3
        echo "    ";
        $context["max"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "data", [], "any", false, true, false, 3), "quantity_max", [], "any", true, true, false, 3)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "data", [], "any", false, true, false, 3), "quantity_max", [], "any", false, false, false, 3), twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "defaultMaxQuantity", [], "any", false, false, false, 3))) : (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "defaultMaxQuantity", [], "any", false, false, false, 3)));
        // line 4
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(($context["min"] ?? null), ($context["max"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 5
            echo "        <option value=\"";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\" ";
            echo ((($context["i"] == twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "quantity", [], "any", false, false, false, 5))) ? ("selected=\"selected\"") : (""));
            echo ">";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "</select>";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/code/maske/plugins/offline/mall/components/cart/table/quantitydropdown.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 7,  52 => 5,  47 => 4,  44 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<select class=\"mall-selectbox-sm js-mall-quantity\" data-id=\"{{ product.hashId }}\" name=\"quantity\">
    {% set min = product.data.quantity_min | default(__SELF__.defaultMinQuantity) %}
    {% set max = product.data.quantity_max | default(__SELF__.defaultMaxQuantity) %}
    {% for i in range(min, max) %}
        <option value=\"{{ i }}\" {{ i == product.quantity ? 'selected=\"selected\"' : '' }}>{{ i }}</option>
    {% endfor %}
</select>", "/home/vagrant/code/maske/plugins/offline/mall/components/cart/table/quantitydropdown.htm", "");
    }
}
