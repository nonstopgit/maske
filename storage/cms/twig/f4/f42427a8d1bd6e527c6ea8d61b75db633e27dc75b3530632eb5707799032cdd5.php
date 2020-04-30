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

/* /home/vagrant/code/maske/plugins/offline/mall/components/checkout/resultactions.htm */
class __TwigTemplate_85d331f85a54705129c9beb917d6336d5b270411cf478dd6843c7e0d82110f0c extends \Twig\Template
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
        echo "
<div class=\"mall-checkout-result__actions\">
    <a href=\"";
        // line 3
        echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "accountPage", [], "any", false, false, false, 3), ["page" => "orders"]);
        echo "\" class=\"mall-btn mall-btn--primary\">
        ";
        // line 4
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.order_overview.visit"]);
        echo "
    </a>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/code/maske/plugins/offline/mall/components/checkout/resultactions.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<div class=\"mall-checkout-result__actions\">
    <a href=\"{{ __SELF__.accountPage | page({page: 'orders'}) }}\" class=\"mall-btn mall-btn--primary\">
        {{ 'offline.mall::frontend.order_overview.visit' | trans }}
    </a>
</div>", "/home/vagrant/code/maske/plugins/offline/mall/components/checkout/resultactions.htm", "");
    }
}
