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

/* /home/vagrant/code/maske/plugins/offline/mall/components/wishlistbutton/item.htm */
class __TwigTemplate_11fc9a4315547e04b8fe99163fc452598babf860fe0de26c3052163d90e79fdb extends \Twig\Template
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
        echo "<a href=\"javascript:;\"
   class=\"mall-wishlist-item\"
   data-request=\"onAdd\"
   data-request-flash
   data-request-success=\"
    \$.publish('mall.wishlist.productAdded', data);
    document.querySelector('.mall-wishlist-button__popup').classList.remove('mall-wishlist-button__popup--visible');
   \"
   data-request-data=\"
         wishlist_id: '";
        // line 10
        echo twig_escape_filter($this->env, ($context["list_id"] ?? null), "html", null, true);
        echo "',
         product_id: '";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "encode", [0 => ($context["product_id"] ?? null)], "method", false, false, false, 11), "html", null, true);
        echo "',
         variant_id: '";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "encode", [0 => ($context["variant_id"] ?? null)], "method", false, false, false, 12), "html", null, true);
        echo "'
    \">
    <div class=\"mall-wishlist-item__data\">
        <div class=\"mall-wishlist-item__name\">
            ";
        // line 16
        echo twig_escape_filter($this->env, (((isset($context["name"]) || array_key_exists("name", $context))) ? (_twig_default_filter(($context["name"] ?? null), call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.wishlist.default_name"]))) : (call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.wishlist.default_name"]))), "html", null, true);
        echo "
        </div>
        <div class=\"mall-wishlist-item__description\">
            ";
        // line 19
        echo call_user_func_array($this->env->getFilter('transchoice')->getCallable(), ["offline.mall::frontend.wishlist.count", (((isset($context["count"]) || array_key_exists("count", $context))) ? (_twig_default_filter(($context["count"] ?? null), 0)) : (0))]);
        echo "
        </div>
    </div>
    <div class=\"mall-wishlist-item__meta\">
        ";
        // line 23
        echo call_user_func_array($this->env->getFilter('money')->getCallable(), [(((isset($context["total"]) || array_key_exists("total", $context))) ? (_twig_default_filter(($context["total"] ?? null), 0)) : (0))]);
        echo "
    </div>
</a>";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/code/maske/plugins/offline/mall/components/wishlistbutton/item.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 23,  69 => 19,  63 => 16,  56 => 12,  52 => 11,  48 => 10,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<a href=\"javascript:;\"
   class=\"mall-wishlist-item\"
   data-request=\"onAdd\"
   data-request-flash
   data-request-success=\"
    \$.publish('mall.wishlist.productAdded', data);
    document.querySelector('.mall-wishlist-button__popup').classList.remove('mall-wishlist-button__popup--visible');
   \"
   data-request-data=\"
         wishlist_id: '{{ list_id }}',
         product_id: '{{ __SELF__.encode(product_id) }}',
         variant_id: '{{ __SELF__.encode(variant_id) }}'
    \">
    <div class=\"mall-wishlist-item__data\">
        <div class=\"mall-wishlist-item__name\">
            {{ name | default('offline.mall::frontend.wishlist.default_name' | trans) }}
        </div>
        <div class=\"mall-wishlist-item__description\">
            {{ 'offline.mall::frontend.wishlist.count' | transchoice(count | default(0)) }}
        </div>
    </div>
    <div class=\"mall-wishlist-item__meta\">
        {{ (total | default(0)) | money }}
    </div>
</a>", "/home/vagrant/code/maske/plugins/offline/mall/components/wishlistbutton/item.htm", "");
    }
}
