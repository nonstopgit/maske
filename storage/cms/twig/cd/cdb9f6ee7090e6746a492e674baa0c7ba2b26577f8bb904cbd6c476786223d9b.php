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

/* /home/vagrant/code/maske/plugins/offline/mall/components/myaccount/default.htm */
class __TwigTemplate_8e76497f17edd25da573b213cf18a33e28b6f1434d73e5d27b3b6c554615e087 extends \Twig\Template
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
        echo "<div class=\"mall-my-account\">
    <nav class=\"mall-my-account__nav\">
        <div class=\"mall-my-account__nav-item
                ";
        // line 4
        echo (((twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "currentPage", [], "any", false, false, false, 4) == "orders")) ? ("mall-my-account__nav-item--active") : (""));
        echo "\">
            <a href=\"";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "pageUrl", [0 => "orders"], "method", false, false, false, 5), "html", null, true);
        echo "\">";
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.orders"]);
        echo "</a>
        </div>
        <div class=\"mall-my-account__nav-item
                ";
        // line 8
        echo (((twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "currentPage", [], "any", false, false, false, 8) == "profile")) ? ("mall-my-account__nav-item--active") : (""));
        echo "\">
            <a href=\"";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "pageUrl", [0 => "profile"], "method", false, false, false, 9), "html", null, true);
        echo "\">";
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.profile"]);
        echo "</a>
        </div>
        <div class=\"mall-my-account__nav-item
                ";
        // line 12
        echo (((twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "currentPage", [], "any", false, false, false, 12) == "addresses")) ? ("mall-my-account__nav-item--active") : (""));
        echo "\">
            <a href=\"";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "pageUrl", [0 => "addresses"], "method", false, false, false, 13), "html", null, true);
        echo "\">";
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.addresses"]);
        echo "</a>
        </div>
        <div class=\"mall-my-account__nav-item\">
            <a href=\"javascript:;\" data-request=\"onLogout\" data-request-data=\"redirect: '/'\">
                ";
        // line 17
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.session.logout"]);
        echo "
            </a>
        </div>
    </nav>
    <div class=\"mall-my-account__content\">
        ";
        // line 22
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . ("::pages/" . twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "currentPage", [], "any", false, false, false, 22)))        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 23
        echo "    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/code/maske/plugins/offline/mall/components/myaccount/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 23,  87 => 22,  79 => 17,  70 => 13,  66 => 12,  58 => 9,  54 => 8,  46 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"mall-my-account\">
    <nav class=\"mall-my-account__nav\">
        <div class=\"mall-my-account__nav-item
                {{ __SELF__.currentPage == 'orders' ? 'mall-my-account__nav-item--active' : '' }}\">
            <a href=\"{{ __SELF__.pageUrl('orders') }}\">{{ 'offline.mall::frontend.orders' | trans }}</a>
        </div>
        <div class=\"mall-my-account__nav-item
                {{ __SELF__.currentPage == 'profile' ? 'mall-my-account__nav-item--active' : '' }}\">
            <a href=\"{{ __SELF__.pageUrl('profile') }}\">{{ 'offline.mall::frontend.profile' | trans }}</a>
        </div>
        <div class=\"mall-my-account__nav-item
                {{ __SELF__.currentPage == 'addresses' ? 'mall-my-account__nav-item--active' : '' }}\">
            <a href=\"{{ __SELF__.pageUrl('addresses') }}\">{{ 'offline.mall::frontend.addresses' | trans }}</a>
        </div>
        <div class=\"mall-my-account__nav-item\">
            <a href=\"javascript:;\" data-request=\"onLogout\" data-request-data=\"redirect: '/'\">
                {{ 'offline.mall::frontend.session.logout' | trans }}
            </a>
        </div>
    </nav>
    <div class=\"mall-my-account__content\">
        {% partial __SELF__ ~ ('::pages/' ~ __SELF__.currentPage) %}
    </div>
</div>", "/home/vagrant/code/maske/plugins/offline/mall/components/myaccount/default.htm", "");
    }
}
