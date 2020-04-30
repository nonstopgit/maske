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

/* /home/vagrant/code/maske/themes/maske/partials/header.htm */
class __TwigTemplate_21ef43dd6c33973da033bac85d6d711209d5fced43a33bb1519c537072169aec extends \Twig\Template
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
        echo "<div class=\"top-bar bg-grey-lighter border-b border-grey-light py-1\">
    <div class=\"container mx-auto flex items-center text-xs text-grey-darkest\">
        <div class=\"w-1/2\">
            ";
        // line 4
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("session"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 5
        echo "        </div>
        <div class=\"w-1/2 text-right flex justify-end\">
            ";
        // line 8
        echo "            ";
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("localePicker"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 9
        echo "        </div>
    </div>
</div>
<header class=\"header py-8\">
    <div class=\"container mx-auto flex\">
        ";
        // line 27
        echo "        <div class=\"w-2/3\">
            <a href=\"";
        // line 28
        echo $this->extensions['System\Twig\Extension']->appFilter("/");
        echo "\" class=\"text-3xl text-primary no-underline\">
                Corona maska
            </a>
        </div>
        <div class=\"w-1/3 flex justify-end\">
            <div class=\"mall-account-button\">
                ";
        // line 34
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("accountButton/default"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 35
        echo "            </div>
            ";
        // line 39
        echo "            <div class=\"mall-cart-button\">
                ";
        // line 40
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("cartButton/default"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 41
        echo "            </div>
        </div>
    </div>
</header>";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/code/maske/themes/maske/partials/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 41,  84 => 40,  81 => 39,  78 => 35,  74 => 34,  65 => 28,  62 => 27,  55 => 9,  50 => 8,  46 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"top-bar bg-grey-lighter border-b border-grey-light py-1\">
    <div class=\"container mx-auto flex items-center text-xs text-grey-darkest\">
        <div class=\"w-1/2\">
            {% partial 'session' %}
        </div>
        <div class=\"w-1/2 text-right flex justify-end\">
            {#{% component 'currencyPicker' %}#}
            {% component 'localePicker' %}
        </div>
    </div>
</div>
<header class=\"header py-8\">
    <div class=\"container mx-auto flex\">
        {#<div class=\"w-1/3\">
            <div>
                <form action=\"{{ 'search' | page }}\" method=\"get\">
                    <input name=\"q\"
                           type=\"text\"
                           value=\"{{ query }}\"
                           class=\"mall-input mall-input-sm mb-0\"
                           placeholder=\"{{ 'offline.mall::frontend.search' | trans }}\"
                           autocomplete=\"off\">
                    <button type=\"submit\" class=\"hidden\" aria-hidden=\"true\">Search</button>
                </form>
            </div>
        </div>#}
        <div class=\"w-2/3\">
            <a href=\"{{ '/' | app }}\" class=\"text-3xl text-primary no-underline\">
                Corona maska
            </a>
        </div>
        <div class=\"w-1/3 flex justify-end\">
            <div class=\"mall-account-button\">
                {% partial 'accountButton/default' %}
            </div>
            {#<div class=\"mall-account-button\">
                {% partial 'wishlist' %}
            </div>#}
            <div class=\"mall-cart-button\">
                {% partial 'cartButton/default' %}
            </div>
        </div>
    </div>
</header>", "/home/vagrant/code/maske/themes/maske/partials/header.htm", "");
    }
}
