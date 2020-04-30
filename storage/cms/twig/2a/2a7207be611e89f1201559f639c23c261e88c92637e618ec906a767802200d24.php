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

/* /home/vagrant/code/maske/plugins/offline/mall/components/product/tax-info.htm */
class __TwigTemplate_ecf7e004ed8659fb8d8755888f6ef7c9b209cebe2c5852bbb2bb83bae2037809 extends \Twig\Template
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
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "filteredTaxes", [], "any", false, false, false, 1), "count", [], "any", false, false, false, 1) > 0)) {
            // line 2
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "price_includes_tax", [], "any", false, false, false, 2)) {
                // line 3
                echo "        ";
                echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.tax.inclusive"]);
                echo "
    ";
            } else {
                // line 5
                echo "        ";
                echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.tax.exclusive"]);
                echo "
    ";
            }
            // line 7
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "filteredTaxes", [], "any", false, false, false, 7));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["tax"]) {
                // line 8
                echo "        ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tax"], "name", [], "any", false, false, false, 8), "html", null, true);
                echo "
        (";
                // line 9
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tax"], "percentage", [], "any", false, false, false, 9), "html", null, true);
                echo " %)";
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 9)) {
                    echo ", ";
                }
                // line 10
                echo "    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tax'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "/home/vagrant/code/maske/plugins/offline/mall/components/product/tax-info.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 10,  77 => 9,  72 => 8,  54 => 7,  48 => 5,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if item.filteredTaxes.count > 0 %}
    {% if item.price_includes_tax %}
        {{ 'offline.mall::frontend.tax.inclusive' | trans }}
    {% else %}
        {{ 'offline.mall::frontend.tax.exclusive' | trans }}
    {% endif %}
    {% for tax in item.filteredTaxes %}
        {{ tax.name }}
        ({{ tax.percentage }} %){% if not loop.last %}, {% endif %}
    {% endfor %}
{% endif %}
", "/home/vagrant/code/maske/plugins/offline/mall/components/product/tax-info.htm", "");
    }
}
