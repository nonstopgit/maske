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

/* /home/vagrant/code/maske/plugins/offline/mall/components/products/items.htm */
class __TwigTemplate_a9b1e0bc44b0179993f386194f56902893a9189f33b938393cf5bf4d8cd8a469 extends \Twig\Template
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
        echo "<div class=\"mall-products__products\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 3
            echo "        ";
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['item'] = $context["item"]            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::item")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 4
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 5
        echo "</div>

";
        // line 7
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "paginate", [], "any", false, false, false, 7)) {
            // line 8
            echo "    <div class=\"mall-pagination mall-pagination--products\">
        ";
            // line 9
            echo ($context["items"] ?? null);
            echo "
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/home/vagrant/code/maske/plugins/offline/mall/components/products/items.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 9,  62 => 8,  60 => 7,  56 => 5,  50 => 4,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"mall-products__products\">
    {% for item in items %}
        {% partial __SELF__ ~ '::item' item=item %}
    {% endfor %}
</div>

{% if __SELF__.paginate %}
    <div class=\"mall-pagination mall-pagination--products\">
        {{ items | raw }}
    </div>
{% endif %}", "/home/vagrant/code/maske/plugins/offline/mall/components/products/items.htm", "");
    }
}
