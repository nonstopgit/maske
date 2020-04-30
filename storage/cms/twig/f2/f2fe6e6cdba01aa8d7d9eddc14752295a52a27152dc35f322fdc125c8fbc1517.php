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

/* /home/vagrant/code/maske/plugins/offline/mall/components/products/item.htm */
class __TwigTemplate_d71dd6829c6130987dae0ec73eb747326c615e77a9254d06806a244e5d7eb1ac extends \Twig\Template
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
        echo "<div class=\"mall-products-item\">
    <a href=\"";
        // line 2
        echo $this->extensions['Cms\Twig\Extension']->pageFilter(($context["productPage"] ?? null), ["slug" => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "slug", [], "any", false, false, false, 2), "variant" => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "variantHashId", [], "any", false, false, false, 2)]);
        echo "\"
       data-mall-item-id=\"";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "prefixedId", [], "any", false, false, false, 3), "html", null, true);
        echo "\"
    >
        <div class=\"mall-products-item__image\">
            ";
        // line 6
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['image'] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "image", [], "any", false, false, false, 6)        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::image")        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 7
        echo "        </div>
        <div class=\"mall-products-item__info\">
            <div class=\"mall-products-item__info-primary\">
                <div class=\"mall-products-item__name\">
                    ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "name", [], "any", false, false, false, 11), "html", null, true);
        echo "
                </div>
                ";
        // line 13
        $context["price"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "price", [], "method", false, false, false, 13);
        // line 14
        echo "                <div class=\"mall-products-item__price
                    ";
        // line 15
        echo ((twig_get_attribute($this->env, $this->source, ($context["price"] ?? null), "isCustomerSpecific", [], "any", false, false, false, 15)) ? ("mall-products-item__price--special") : (""));
        echo "\">
                    ";
        // line 16
        echo twig_get_attribute($this->env, $this->source, ($context["price"] ?? null), "string", [], "any", false, false, false, 16);
        echo "
                </div>
            </div>
            <div class=\"mall-products-item__info-secondary\">
                <div class=\"mall-products-item__short-description\">
                    ";
        // line 21
        echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "description_short", [], "any", false, false, false, 21), "html", null, true));
        echo "
                </div>
                <div class=\"mall-products-item__old-price\">
                    ";
        // line 24
        if (twig_get_attribute($this->env, $this->source, ($context["price"] ?? null), "official", [], "any", false, false, false, 24)) {
            // line 25
            echo "                        ";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["price"] ?? null), "official", [], "any", false, false, false, 25), "string", [], "any", false, false, false, 25);
            echo "
                    ";
        } else {
            // line 27
            echo "                        ";
            echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "oldPrice", [], "any", false, false, false, 27), "count", [], "any", false, false, false, 27) > 0)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "oldPrice", [], "method", false, false, false, 27), "string", [], "any", false, false, false, 27)) : (""));
            echo "
                    ";
        }
        // line 29
        echo "                </div>
            </div>
            <div class=\"mall-products-item__info-teritary\">
                ";
        // line 32
        $context["rating"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "reviews_rating", [], "any", false, false, false, 32);
        // line 33
        echo "                ";
        // line 34
        echo "                ";
        // line 35
        echo "                ";
        if ((($context["rating"] ?? null) > 0)) {
            // line 36
            echo "                    <div class=\"mall-products-item__stars\">
                        ";
            // line 37
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['rating'] = ($context["rating"] ?? null)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::stars")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 38
            echo "                    </div>
                ";
        }
        // line 40
        echo "            </div>
        </div>
    </a>
</div>
";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/code/maske/plugins/offline/mall/components/products/item.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 40,  125 => 38,  120 => 37,  117 => 36,  114 => 35,  112 => 34,  110 => 33,  108 => 32,  103 => 29,  97 => 27,  91 => 25,  89 => 24,  83 => 21,  75 => 16,  71 => 15,  68 => 14,  66 => 13,  61 => 11,  55 => 7,  50 => 6,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"mall-products-item\">
    <a href=\"{{ productPage|page({slug: item.slug, variant: item.variantHashId}) }}\"
       data-mall-item-id=\"{{ item.prefixedId }}\"
    >
        <div class=\"mall-products-item__image\">
            {% partial __SELF__ ~ '::image' image=item.image %}
        </div>
        <div class=\"mall-products-item__info\">
            <div class=\"mall-products-item__info-primary\">
                <div class=\"mall-products-item__name\">
                    {{ item.name }}
                </div>
                {% set price = item.price() %}
                <div class=\"mall-products-item__price
                    {{ price.isCustomerSpecific ? 'mall-products-item__price--special' }}\">
                    {{ price.string | raw }}
                </div>
            </div>
            <div class=\"mall-products-item__info-secondary\">
                <div class=\"mall-products-item__short-description\">
                    {{ item.description_short | nl2br }}
                </div>
                <div class=\"mall-products-item__old-price\">
                    {% if price.official %}
                        {{ price.official.string | raw }}
                    {% else %}
                        {{ item.oldPrice.count > 0 ? item.oldPrice().string | raw }}
                    {% endif %}
                </div>
            </div>
            <div class=\"mall-products-item__info-teritary\">
                {% set rating = item.reviews_rating %}
                {# To display the product's rating use: #}
                {# set rating = item.product.reviews_rating #}
                {% if rating > 0 %}
                    <div class=\"mall-products-item__stars\">
                        {% partial __SELF__ ~ '::stars' rating=rating %}
                    </div>
                {% endif %}
            </div>
        </div>
    </a>
</div>
", "/home/vagrant/code/maske/plugins/offline/mall/components/products/item.htm", "");
    }
}
