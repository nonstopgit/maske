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

/* /home/vagrant/code/maske/themes/maske/partials/cartButton/default.htm */
class __TwigTemplate_54afeb28cecf1d1a91914dc1d2f26ac2803f9d772b64e2db2705dd66c4e1219f extends \Twig\Template
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
        $context["count"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "cart", [], "any", false, false, false, 1), "products", [], "any", false, false, false, 1), "count", [], "any", false, false, false, 1);
        // line 2
        echo "
<div class=\"w-24\">
    <a href=\"";
        // line 4
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("cart");
        echo "\" class=\"text-grey flex flex-col items-center justify-center no-underline\">
        <div class=\"mall-cart-count absolute bg-red text-white text-2xs rounded px-1 leading-normal ml-4 -mt-8 ";
        // line 5
        echo (((($context["count"] ?? null) < 1)) ? ("invisible") : (""));
        echo "\">
            ";
        // line 6
        echo twig_escape_filter($this->env, ($context["count"] ?? null), "html", null, true);
        echo "
        </div>
        <svg class=\"text-grey fill-current w-6 mb-2\" viewBox=\"0 0 20 20\" version=\"1.1\"
             xmlns=\"http://www.w3.org/2000/svg\"
             xmlns:xlink=\"http://www.w3.org/1999/xlink\">
            <g stroke=\"none\" stroke-width=\"1\" fill-rule=\"evenodd\">
                <g id=\"icon-shape\">
                    <path d=\"M3,5 L4.33333333,9 L4,9 C2.34314575,9 1,10.3431458 1,12 C1,13.6568542 2.34314575,15 4,15 L17,15 L17,13 L4.00684547,13 C3.45078007,13 3,12.5561352 3,12 C3,11.4477153 3.44748943,11 3.99850233,11 L10.5,11 L17,11 L20,2 L4,2 L4,0.997030139 C4,0.453036308 3.54809015,0 2.9906311,0 L0,0 L0,2 L2,2 L3,5 Z M5,20 C6.1045695,20 7,19.1045695 7,18 C7,16.8954305 6.1045695,16 5,16 C3.8954305,16 3,16.8954305 3,18 C3,19.1045695 3.8954305,20 5,20 Z M15,20 C16.1045695,20 17,19.1045695 17,18 C17,16.8954305 16.1045695,16 15,16 C13.8954305,16 13,16.8954305 13,18 C13,19.1045695 13.8954305,20 15,20 Z\"></path>
                </g>
            </g>
        </svg>
        <div class=\"text-xs\">
            ";
        // line 18
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.cart"]);
        echo "
        </div>
    </a>
</div>

";
        // line 23
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 24
        echo "    <script>
        \$(function () {
            var baseCount = '";
        // line 26
        echo twig_escape_filter($this->env, ($context["count"] ?? null), "html", null, true);
        echo "';
            var \$count = \$('.mall-cart-count');
            \$.subscribe('mall.cart.productAdded', function () {
                \$count.removeClass('invisible').text(++ baseCount).show();
            });
            \$.subscribe('mall.cart.productRemoved', function () {
                baseCount --;
                if (baseCount < 0) baseCount = 0;
                \$count.text(baseCount);
            });
        });
    </script>
";
        // line 23
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "/home/vagrant/code/maske/themes/maske/partials/cartButton/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 23,  80 => 26,  76 => 24,  74 => 23,  66 => 18,  51 => 6,  47 => 5,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set count = cart.cart.products.count %}

<div class=\"w-24\">
    <a href=\"{{ 'cart' | page }}\" class=\"text-grey flex flex-col items-center justify-center no-underline\">
        <div class=\"mall-cart-count absolute bg-red text-white text-2xs rounded px-1 leading-normal ml-4 -mt-8 {{ count < 1 ? 'invisible' : '' }}\">
            {{ count }}
        </div>
        <svg class=\"text-grey fill-current w-6 mb-2\" viewBox=\"0 0 20 20\" version=\"1.1\"
             xmlns=\"http://www.w3.org/2000/svg\"
             xmlns:xlink=\"http://www.w3.org/1999/xlink\">
            <g stroke=\"none\" stroke-width=\"1\" fill-rule=\"evenodd\">
                <g id=\"icon-shape\">
                    <path d=\"M3,5 L4.33333333,9 L4,9 C2.34314575,9 1,10.3431458 1,12 C1,13.6568542 2.34314575,15 4,15 L17,15 L17,13 L4.00684547,13 C3.45078007,13 3,12.5561352 3,12 C3,11.4477153 3.44748943,11 3.99850233,11 L10.5,11 L17,11 L20,2 L4,2 L4,0.997030139 C4,0.453036308 3.54809015,0 2.9906311,0 L0,0 L0,2 L2,2 L3,5 Z M5,20 C6.1045695,20 7,19.1045695 7,18 C7,16.8954305 6.1045695,16 5,16 C3.8954305,16 3,16.8954305 3,18 C3,19.1045695 3.8954305,20 5,20 Z M15,20 C16.1045695,20 17,19.1045695 17,18 C17,16.8954305 16.1045695,16 15,16 C13.8954305,16 13,16.8954305 13,18 C13,19.1045695 13.8954305,20 15,20 Z\"></path>
                </g>
            </g>
        </svg>
        <div class=\"text-xs\">
            {{ 'offline.mall::frontend.cart' | trans }}
        </div>
    </a>
</div>

{% put scripts %}
    <script>
        \$(function () {
            var baseCount = '{{ count }}';
            var \$count = \$('.mall-cart-count');
            \$.subscribe('mall.cart.productAdded', function () {
                \$count.removeClass('invisible').text(++ baseCount).show();
            });
            \$.subscribe('mall.cart.productRemoved', function () {
                baseCount --;
                if (baseCount < 0) baseCount = 0;
                \$count.text(baseCount);
            });
        });
    </script>
{% endput %}", "/home/vagrant/code/maske/themes/maske/partials/cartButton/default.htm", "");
    }
}
