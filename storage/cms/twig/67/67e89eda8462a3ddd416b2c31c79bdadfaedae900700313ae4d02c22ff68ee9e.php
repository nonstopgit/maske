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

/* /home/vagrant/code/maske/plugins/offline/mall/components/paymentmethodselector/methods.htm */
class __TwigTemplate_c65820d4915a0c97efadc60f8c8bf7935ed0e8eb4aea308095770e24fded20eb extends \Twig\Template
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
        echo "<p>";
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.payment_method.choose"]);
        echo "</p>

<form id=\"mall-payment-form\" data-request-validate>
    <div class=\"mall-payment-method\">
        ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "methods", [], "any", false, false, false, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["method"]) {
            // line 6
            echo "            ";
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['method'] = $context["method"]            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::method")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 7
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['method'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "    </div>
</form>";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/code/maske/plugins/offline/mall/components/paymentmethodselector/methods.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 8,  55 => 7,  49 => 6,  45 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<p>{{ 'offline.mall::frontend.payment_method.choose' | trans }}</p>

<form id=\"mall-payment-form\" data-request-validate>
    <div class=\"mall-payment-method\">
        {% for method in __SELF__.methods %}
            {% partial __SELF__ ~ '::method' method=method %}
        {% endfor %}
    </div>
</form>", "/home/vagrant/code/maske/plugins/offline/mall/components/paymentmethodselector/methods.htm", "");
    }
}
