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

/* /home/vagrant/code/maske/plugins/offline/mall/components/product/properties.htm */
class __TwigTemplate_78d98aecee71ae3679ee65b34d5f9afb7dbb47c660eb49540d5c96d5bdb202a6 extends \Twig\Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["props"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2
            echo "    ";
            $context["propertyValue"] = (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "variantPropertyValues", [], "any", false, false, false, 2)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "property", [], "any", false, false, false, 2), "id", [], "any", false, false, false, 2)] ?? null) : null);
            // line 3
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "property", [], "any", false, false, false, 3), "id", [], "any", false, false, false, 3) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "product", [], "any", false, false, false, 3), "group_by_property_id", [], "any", false, false, false, 3))) {
                // line 4
                echo "        ";
                // line 5
                echo "        <input type=\"hidden\"
               data-mall-property
               name=\"props[";
                // line 7
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "property", [], "any", false, false, false, 7), "hashId", [], "any", false, false, false, 7), "html", null, true);
                echo "]\"
               value=\"";
                // line 8
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["propertyValue"] ?? null), "hashId", [], "any", false, false, false, 8), "html", null, true);
                echo "\">
    ";
            } else {
                // line 10
                echo "        <div class=\"mall-product__property mall-form-control\">
            <label for=\"";
                // line 11
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "property", [], "any", false, false, false, 11), "hashId", [], "any", false, false, false, 11), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "property", [], "any", false, false, false, 11), "name", [], "any", false, false, false, 11), "html", null, true);
                echo "</label>
            ";
                // line 12
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "property", [], "any", false, false, false, 12), "type", [], "any", false, false, false, 12) == "color")) {
                    // line 13
                    echo "                ";
                    $context['__cms_partial_params'] = [];
                    $context['__cms_partial_params']['item'] = $context["item"]                    ;
                    $context['__cms_partial_params']['propertyValue'] = ($context["propertyValue"] ?? null)                    ;
                    echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::properties/color")                    , $context['__cms_partial_params']                    , true                    );
                    unset($context['__cms_partial_params']);
                    // line 14
                    echo "            ";
                } else {
                    // line 15
                    echo "                ";
                    $context['__cms_partial_params'] = [];
                    $context['__cms_partial_params']['item'] = $context["item"]                    ;
                    $context['__cms_partial_params']['propertyValue'] = ($context["propertyValue"] ?? null)                    ;
                    echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::properties/default")                    , $context['__cms_partial_params']                    , true                    );
                    unset($context['__cms_partial_params']);
                    // line 16
                    echo "            ";
                }
                // line 17
                echo "        </div>
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "/home/vagrant/code/maske/plugins/offline/mall/components/product/properties.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 17,  90 => 16,  83 => 15,  80 => 14,  73 => 13,  71 => 12,  65 => 11,  62 => 10,  57 => 8,  53 => 7,  49 => 5,  47 => 4,  44 => 3,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for item in props %}
    {% set propertyValue = __SELF__.variantPropertyValues[item.property.id] %}
    {% if item.property.id == __SELF__.product.group_by_property_id %}
        {# Preset the property used to group the variants. #}
        <input type=\"hidden\"
               data-mall-property
               name=\"props[{{ item.property.hashId }}]\"
               value=\"{{ propertyValue.hashId }}\">
    {% else %}
        <div class=\"mall-product__property mall-form-control\">
            <label for=\"{{ item.property.hashId }}\">{{ item.property.name }}</label>
            {% if item.property.type == 'color' %}
                {% partial __SELF__ ~ '::properties/color' item=item propertyValue=propertyValue %}
            {% else %}
                {% partial __SELF__ ~ '::properties/default' item=item propertyValue=propertyValue %}
            {% endif %}
        </div>
    {% endif %}
{% endfor %}", "/home/vagrant/code/maske/plugins/offline/mall/components/product/properties.htm", "");
    }
}
