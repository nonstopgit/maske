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

/* /home/vagrant/code/maske/plugins/offline/mall/components/paymentmethodselector/method.htm */
class __TwigTemplate_920d9913465c197479bd5519194bf92a53773fbe961d6cdc0a8b4fe06e313abd extends \Twig\Template
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
        $context["isActiveMethod"] = (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "activeMethod", [], "any", false, false, false, 1), "id", [], "any", false, false, false, 1) == twig_get_attribute($this->env, $this->source, ($context["method"] ?? null), "id", [], "any", false, false, false, 1));
        // line 2
        echo "<div class=\"mall-payment-method__entry js-mall-select-payment-method
     ";
        // line 3
        echo ((($context["isActiveMethod"] ?? null)) ? ("mall-payment-method__entry--active") : (""));
        echo "\"
     data-id=\"";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["method"] ?? null), "id", [], "any", false, false, false, 4), "html", null, true);
        echo "\">
    <div class=\"mall-payment-method__logo\">
        ";
        // line 6
        if (twig_get_attribute($this->env, $this->source, ($context["method"] ?? null), "logo", [], "any", false, false, false, 6)) {
            // line 7
            echo "            <img class=\"mall-payment-method__logo\" src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["method"] ?? null), "logo", [], "any", false, false, false, 7), "thumb", [0 => 120, 1 => "auto"], "method", false, false, false, 7), "html", null, true);
            echo "\" alt=\"\"/>
        ";
        }
        // line 9
        echo "    </div>
    <div class=\"mall-payment-method__text\">
        <div>
            <div class=\"mall-payment-method__heading\">
                <div class=\"mall-payment-method__name\">";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["method"] ?? null), "name", [], "any", false, false, false, 13), "html", null, true);
        echo "</div>
            </div>
            ";
        // line 15
        if (twig_get_attribute($this->env, $this->source, ($context["method"] ?? null), "description", [], "any", false, false, false, 15)) {
            // line 16
            echo "                <div class=\"mall-payment-method__description\">
                    ";
            // line 17
            echo twig_get_attribute($this->env, $this->source, ($context["method"] ?? null), "description", [], "any", false, false, false, 17);
            echo "
                </div>
            ";
        }
        // line 20
        echo "            ";
        if (($context["isActiveMethod"] ?? null)) {
            // line 21
            echo "                <div class=\"mall-payment-method__instructions\">
                    ";
            // line 22
            echo twig_get_attribute($this->env, $this->source, ($context["method"] ?? null), "renderInstructions", [0 => twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "order", [], "any", false, false, false, 22), 1 => twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "cart", [], "any", false, false, false, 22)], "method", false, false, false, 22);
            echo "
                </div>
                <div class=\"mall-payment-method__toggle\"
                     style=\"";
            // line 25
            if ( !($context["isActiveMethod"] ?? null)) {
                echo "display: none";
            }
            echo "\">
                    <div class=\"mall-payment-method__data\">
                        ";
            // line 27
            if (twig_get_attribute($this->env, $this->source, ($context["method"] ?? null), "payment_provider", [], "any", false, false, false, 27)) {
                // line 28
                echo "                            ";
                $context["path"] = ((($context["__SELF__"] ?? null) . "::gateways/") . twig_get_attribute($this->env, $this->source, ($context["method"] ?? null), "payment_provider", [], "any", false, false, false, 28));
                // line 29
                echo "                            ";
                if ($this->extensions['Cms\Twig\Extension']->partialFunction(($context["path"] ?? null))) {
                    // line 30
                    echo "                                ";
                    $context['__cms_partial_params'] = [];
                    echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction(($context["path"] ?? null)                    , $context['__cms_partial_params']                    , true                    );
                    unset($context['__cms_partial_params']);
                    // line 31
                    echo "                            ";
                }
                // line 32
                echo "                        ";
            }
            // line 33
            echo "                    </div>
                    ";
            // line 34
            $context["customerMethods"] = (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "customerMethods", [], "any", false, false, false, 34)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, ($context["method"] ?? null), "id", [], "any", false, false, false, 34)] ?? null) : null);
            // line 35
            echo "                    ";
            if (($context["customerMethods"] ?? null)) {
                // line 36
                echo "                        <div class=\"mall-payment-method__customer-methods\">
                            ";
                // line 37
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['methods'] = ($context["customerMethods"] ?? null)                ;
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::customermethods")                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 38
                echo "                        </div>
                    ";
            }
            // line 40
            echo "                    <div class=\"mall-payment-method__submit\">
                        ";
            // line 41
            $context["label"] = ((twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "order", [], "any", false, false, false, 41)) ? ("offline.mall::frontend.payment_method.pay_now") : ("offline.mall::frontend.payment_method.proceed"));
            // line 44
            echo "                        <button class=\"mall-btn mall-btn--primary\" type=\"submit\" data-attach-loading>
                            ";
            // line 45
            echo call_user_func_array($this->env->getFilter('trans')->getCallable(), [($context["label"] ?? null)]);
            echo "
                        </button>
                    </div>
                </div>
            ";
        }
        // line 50
        echo "        </div>
    </div>
    <div class=\"mall-payment-method__selector\">
        ";
        // line 53
        if ( !($context["isActiveMethod"] ?? null)) {
            // line 54
            echo "            <button class=\"mall-payment-method__select-button\"
                    data-attach-loading
                    data-request=\"";
            // line 56
            echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
            echo "::onChangeMethod\"
                    data-request-success=\"\$.publish('mall.cart.paymentMethodChanged', data)\"
                    data-request-data=\"id: '";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["method"] ?? null), "id", [], "any", false, false, false, 58), "html", null, true);
            echo "'\">
                ";
            // line 59
            echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.payment_method.button_label"]);
            echo "
            </button>
        ";
        }
        // line 62
        echo "    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/code/maske/plugins/offline/mall/components/paymentmethodselector/method.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 62,  175 => 59,  171 => 58,  166 => 56,  162 => 54,  160 => 53,  155 => 50,  147 => 45,  144 => 44,  142 => 41,  139 => 40,  135 => 38,  130 => 37,  127 => 36,  124 => 35,  122 => 34,  119 => 33,  116 => 32,  113 => 31,  108 => 30,  105 => 29,  102 => 28,  100 => 27,  93 => 25,  87 => 22,  84 => 21,  81 => 20,  75 => 17,  72 => 16,  70 => 15,  65 => 13,  59 => 9,  53 => 7,  51 => 6,  46 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set isActiveMethod = __SELF__.activeMethod.id == method.id %}
<div class=\"mall-payment-method__entry js-mall-select-payment-method
     {{ isActiveMethod ? 'mall-payment-method__entry--active' : '' }}\"
     data-id=\"{{ method.id }}\">
    <div class=\"mall-payment-method__logo\">
        {% if method.logo %}
            <img class=\"mall-payment-method__logo\" src=\"{{ method.logo.thumb(120, 'auto') }}\" alt=\"\"/>
        {% endif %}
    </div>
    <div class=\"mall-payment-method__text\">
        <div>
            <div class=\"mall-payment-method__heading\">
                <div class=\"mall-payment-method__name\">{{ method.name }}</div>
            </div>
            {% if method.description %}
                <div class=\"mall-payment-method__description\">
                    {{ method.description | raw }}
                </div>
            {% endif %}
            {% if isActiveMethod %}
                <div class=\"mall-payment-method__instructions\">
                    {{ method.renderInstructions(__SELF__.order, __SELF__.cart) | raw }}
                </div>
                <div class=\"mall-payment-method__toggle\"
                     style=\"{% if not isActiveMethod %}display: none{% endif %}\">
                    <div class=\"mall-payment-method__data\">
                        {% if method.payment_provider %}
                            {% set path = __SELF__ ~ '::gateways/' ~ (method.payment_provider) %}
                            {% if partial(path) %}
                                {% partial path %}
                            {% endif %}
                        {% endif %}
                    </div>
                    {% set customerMethods = __SELF__.customerMethods[method.id] %}
                    {% if customerMethods %}
                        <div class=\"mall-payment-method__customer-methods\">
                            {% partial __SELF__ ~ '::customermethods' methods=customerMethods %}
                        </div>
                    {% endif %}
                    <div class=\"mall-payment-method__submit\">
                        {% set label = __SELF__.order
                            ? 'offline.mall::frontend.payment_method.pay_now'
                            : 'offline.mall::frontend.payment_method.proceed' %}
                        <button class=\"mall-btn mall-btn--primary\" type=\"submit\" data-attach-loading>
                            {{ label | trans }}
                        </button>
                    </div>
                </div>
            {% endif %}
        </div>
    </div>
    <div class=\"mall-payment-method__selector\">
        {% if not isActiveMethod %}
            <button class=\"mall-payment-method__select-button\"
                    data-attach-loading
                    data-request=\"{{ __SELF__ }}::onChangeMethod\"
                    data-request-success=\"\$.publish('mall.cart.paymentMethodChanged', data)\"
                    data-request-data=\"id: '{{ method.id }}'\">
                {{ 'offline.mall::frontend.payment_method.button_label' | trans }}
            </button>
        {% endif %}
    </div>
</div>
", "/home/vagrant/code/maske/plugins/offline/mall/components/paymentmethodselector/method.htm", "");
    }
}
