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

/* /home/vagrant/code/maske/plugins/offline/mall/components/wishlistbutton/list.htm */
class __TwigTemplate_3d46cf3a3ecab9e34dc9a9684d7f7b3208cf670ed653f379fb0ad4a559ed4276 extends \Twig\Template
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
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["wishlist"]) {
            // line 2
            echo "    ";
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['name'] = twig_get_attribute($this->env, $this->source,             // line 3
$context["wishlist"], "name", [], "any", false, false, false, 3)            ;
            $context['__cms_partial_params']['count'] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 4
$context["wishlist"], "items", [], "any", false, false, false, 4), "count", [], "any", false, false, false, 4)            ;
            $context['__cms_partial_params']['total'] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 5
$context["wishlist"], "totals", [], "any", false, false, false, 5), "totalPostTaxes", [], "any", false, false, false, 5)            ;
            $context['__cms_partial_params']['list_id'] = twig_get_attribute($this->env, $this->source,             // line 6
$context["wishlist"], "hash_id", [], "any", false, false, false, 6)            ;
            $context['__cms_partial_params']['product_id'] = twig_get_attribute($this->env, $this->source,             // line 7
($context["__SELF__"] ?? null), "property", [0 => "product"], "method", false, false, false, 7)            ;
            $context['__cms_partial_params']['variant_id'] = twig_get_attribute($this->env, $this->source,             // line 8
($context["__SELF__"] ?? null), "property", [0 => "variant"], "method", false, false, false, 8)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((            // line 2
($context["__SELF__"] ?? null) . "::item")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 10
            echo "    ";
            // line 11
            echo "    ";
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['product_id'] = twig_get_attribute($this->env, $this->source,             // line 12
($context["__SELF__"] ?? null), "property", [0 => "product"], "method", false, false, false, 12)            ;
            $context['__cms_partial_params']['variant_id'] = twig_get_attribute($this->env, $this->source,             // line 13
($context["__SELF__"] ?? null), "property", [0 => "variant"], "method", false, false, false, 13)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((            // line 11
($context["__SELF__"] ?? null) . "::item")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['wishlist'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "/home/vagrant/code/maske/plugins/offline/mall/components/wishlistbutton/list.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 11,  70 => 13,  68 => 12,  65 => 11,  63 => 10,  57 => 2,  55 => 8,  53 => 7,  51 => 6,  49 => 5,  47 => 4,  45 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for wishlist in items %}
    {% partial __SELF__ ~ '::item'
        name=wishlist.name
        count=wishlist.items.count
        total=wishlist.totals.totalPostTaxes
        list_id=wishlist.hash_id
        product_id=__SELF__.property('product')
        variant_id=__SELF__.property('variant') %}
{% else %}
    {# always include the \"default\" list if no other lists are available #}
    {% partial __SELF__ ~ '::item'
        product_id=__SELF__.property('product')
        variant_id=__SELF__.property('variant') %}
{% endfor %}", "/home/vagrant/code/maske/plugins/offline/mall/components/wishlistbutton/list.htm", "");
    }
}
