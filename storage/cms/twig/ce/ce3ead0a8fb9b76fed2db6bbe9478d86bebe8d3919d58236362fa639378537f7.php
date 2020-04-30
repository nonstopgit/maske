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

/* /home/vagrant/code/maske/plugins/offline/mall/components/paymentmethodselector/datalayer.htm */
class __TwigTemplate_a09f3c13df7a98aac8b4484261525371f845e57737aab821eea90b8e6362bfb5 extends \Twig\Template
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
        if ( !($context["url"] ?? null)) {
            // line 2
            echo "    ";
            $context["activeMethod"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "activeMethod", [], "any", false, false, false, 2), "only", [0 => "code", 1 => "name"], "method", false, false, false, 2);
            // line 3
            echo "    <script>
        \$(function () {
            window.dataLayerData = dataWithMethod(";
            // line 5
            echo json_encode(($context["activeMethod"] ?? null));
            echo ")
            \$.subscribe('mall.cart.paymentMethodChanged', function (e, data) {
                window.dataLayerData = dataWithMethod(data.method)
            })

            function dataWithMethod (method) {
                var dl = ";
            // line 11
            echo json_encode(($context["dataLayer"] ?? null));
            echo ";
                dl.ecommerce.checkout.actionField = {step: 1, method: method.code}
                return dl
            }
        })
    </script>
    <div id=\"mall-datalayer\"></div>
";
        } else {
            // line 19
            echo "    <script>
        var redirect = function () {
            document.location = '";
            // line 21
            echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
            echo "'
        }
        window.dataLayerData.eventCallback = redirect
        setTimeout(redirect, 500)

        dataLayer.push(window.dataLayerData)
    </script>
";
        }
    }

    public function getTemplateName()
    {
        return "/home/vagrant/code/maske/plugins/offline/mall/components/paymentmethodselector/datalayer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 21,  66 => 19,  55 => 11,  46 => 5,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if not url %}
    {% set activeMethod = __SELF__.activeMethod.only('code', 'name') %}
    <script>
        \$(function () {
            window.dataLayerData = dataWithMethod({{ activeMethod | json_encode | raw }})
            \$.subscribe('mall.cart.paymentMethodChanged', function (e, data) {
                window.dataLayerData = dataWithMethod(data.method)
            })

            function dataWithMethod (method) {
                var dl = {{ dataLayer | json_encode | raw }};
                dl.ecommerce.checkout.actionField = {step: 1, method: method.code}
                return dl
            }
        })
    </script>
    <div id=\"mall-datalayer\"></div>
{% else %}
    <script>
        var redirect = function () {
            document.location = '{{ url }}'
        }
        window.dataLayerData.eventCallback = redirect
        setTimeout(redirect, 500)

        dataLayer.push(window.dataLayerData)
    </script>
{% endif %}
", "/home/vagrant/code/maske/plugins/offline/mall/components/paymentmethodselector/datalayer.htm", "");
    }
}
