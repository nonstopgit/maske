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

/* /home/vagrant/code/maske/plugins/offline/mall/components/product/propertyvalues.htm */
class __TwigTemplate_c2e1e285bad9b1f51eca3d5c07801cd5732ebefc98865993eabf18bfd5b1c85f extends \Twig\Template
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
        echo "<div class=\"mall-product__properties\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "grouped_properties", [], "any", false, false, false, 2));
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 3
            echo "        <h3 class=\"mall-product__properties-heading\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entry"], "group", [], "any", false, false, false, 3), "name", [], "any", false, false, false, 3), "html", null, true);
            echo "</h3>
        <div class=\"mall-three-columns\">
            ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["entry"], "values", [], "any", false, false, false, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                // line 6
                echo "                <div class=\"mall-column\">
                    <p>
                        <strong>";
                // line 8
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["value"], "property", [], "any", false, false, false, 8), "name", [], "any", false, false, false, 8), "html", null, true);
                echo "</strong><br>
                        ";
                // line 9
                echo twig_get_attribute($this->env, $this->source, $context["value"], "display_value", [], "any", false, false, false, 9);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["value"], "property", [], "any", false, false, false, 9), "unit", [], "any", false, false, false, 9), "html", null, true);
                echo "
                    </p>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/code/maske/plugins/offline/mall/components/product/propertyvalues.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 15,  74 => 13,  62 => 9,  58 => 8,  54 => 6,  50 => 5,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"mall-product__properties\">
    {% for entry in item.grouped_properties %}
        <h3 class=\"mall-product__properties-heading\">{{ entry.group.name }}</h3>
        <div class=\"mall-three-columns\">
            {% for value in entry.values %}
                <div class=\"mall-column\">
                    <p>
                        <strong>{{ value.property.name }}</strong><br>
                        {{ value.display_value | raw }} {{ value.property.unit }}
                    </p>
                </div>
            {% endfor %}
        </div>
    {% endfor %}
</div>", "/home/vagrant/code/maske/plugins/offline/mall/components/product/propertyvalues.htm", "");
    }
}
