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

/* /home/vagrant/code/maske/plugins/offline/mall/components/product/info.htm */
class __TwigTemplate_37afa3324854f96a03fe8943dc4655f551e927176f3ec3f6c8c4e1a64fc8ebf7 extends \Twig\Template
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
        echo "<h2 class=\"mall-product__name\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "name", [], "any", false, false, false, 1), "html", null, true);
        echo "</h2>

";
        // line 3
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "description_short", [], "any", false, false, false, 3)) {
            // line 4
            echo "    <h3 class=\"mall-product__description-short\">";
            echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "description_short", [], "any", false, false, false, 4), "html", null, true));
            echo "</h3>
";
        }
        // line 6
        echo "
<div class=\"mall-product__description\">
    ";
        // line 8
        echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "description", [], "any", false, false, false, 8);
        echo "
</div>

";
        // line 11
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['images'] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "all_images", [], "any", false, false, false, 11)        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::images")        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 12
        echo "
";
        // line 13
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['images'] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "all_images", [], "any", false, false, false, 13)        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::propertyvalues")        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 14
        echo "
";
        // line 15
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "showReviews", [], "any", false, false, false, 15)) {
            // line 16
            echo "    ";
            $context['__cms_component_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("productReviews"            , $context['__cms_component_params']            );
            unset($context['__cms_component_params']);
        }
    }

    public function getTemplateName()
    {
        return "/home/vagrant/code/maske/plugins/offline/mall/components/product/info.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 16,  77 => 15,  74 => 14,  69 => 13,  66 => 12,  61 => 11,  55 => 8,  51 => 6,  45 => 4,  43 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h2 class=\"mall-product__name\">{{ item.name }}</h2>

{% if item.description_short %}
    <h3 class=\"mall-product__description-short\">{{ item.description_short | nl2br }}</h3>
{% endif %}

<div class=\"mall-product__description\">
    {{ item.description | raw }}
</div>

{% partial __SELF__ ~ '::images' images=item.all_images %}

{% partial __SELF__ ~ '::propertyvalues' images=item.all_images %}

{% if __SELF__.showReviews %}
    {% component 'productReviews' %}
{% endif %}", "/home/vagrant/code/maske/plugins/offline/mall/components/product/info.htm", "");
    }
}
