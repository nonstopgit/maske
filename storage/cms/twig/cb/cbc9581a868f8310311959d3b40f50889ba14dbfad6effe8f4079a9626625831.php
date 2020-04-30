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

/* /home/vagrant/code/maske/plugins/offline/mall/components/paymentmethodselector/gateways/stripe.htm */
class __TwigTemplate_15dab1691c5835b0f6ba2595baa00ce71cbd45e039a6643913070e059cee7930 extends \Twig\Template
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
        echo "<div class=\"mall-form-control\">
    <label class=\"mall-label\">";
        // line 2
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.payment_method.card_info"]);
        echo "</label>
    <div id=\"card-element\" class=\"mall-input mall-input--width-limited\">
        ";
        // line 4
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.please_wait"]);
        echo "
    </div>
    <div id=\"card-errors\" data-validate-for=\"stripeToken\"></div>

    <input type=\"hidden\" name=\"payment_data[token]\" value=\"\" id=\"stripe-token\">
</div>

<script>
    \$(function () {

        ";
        // line 15
        echo "        var s = document.createElement('script');
        s.type = 'text/javascript';
        s.src = 'https://js.stripe.com/v3/';
        s.onload = initStripe;

        document.head.appendChild(s)

        function initStripe () {
            var stripe = Stripe('";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["activeMethod"] ?? null), "settings", [], "any", false, false, false, 23), "stripe_publishable_key", [], "any", false, false, false, 23), "html", null, true);
        echo "');
            var elements = stripe.elements();

            var card = elements.create('card');
            card.mount('#card-element');

            card.addEventListener('change', function (event) {
                var displayError = document.getElementById('card-errors');
                if (event.error) {
                    displayError.textContent = event.error.message;
                } else {
                    displayError.textContent = '';
                }
            });

            var form = document.getElementById('mall-payment-form');
            form.addEventListener('submit', function (event) {
                event.preventDefault();

                var submit = form.querySelector('[type=\"submit\"]')
                submit.classList.add('oc-loading')
                submit.disabled = true

                stripe.createToken(card).then(function (result) {
                    if (result.error) {
                        var errorElement = document.getElementById('card-errors');
                        errorElement.textContent = result.error.message;
                        submit.classList.remove('oc-loading')
                        submit.disabled = false
                    } else {
                        stripeTokenHandler(result.token);
                    }
                });
            });

            function stripeTokenHandler (token) {
                var input = document.getElementById('stripe-token')
                input.value = token.id

                \$('#mall-payment-form').request('";
        // line 62
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "::onSubmit')
            }
        }
    });
</script>";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/code/maske/plugins/offline/mall/components/paymentmethodselector/gateways/stripe.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 62,  68 => 23,  58 => 15,  45 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"mall-form-control\">
    <label class=\"mall-label\">{{ 'offline.mall::frontend.payment_method.card_info' | trans }}</label>
    <div id=\"card-element\" class=\"mall-input mall-input--width-limited\">
        {{ 'offline.mall::frontend.please_wait' | trans }}
    </div>
    <div id=\"card-errors\" data-validate-for=\"stripeToken\"></div>

    <input type=\"hidden\" name=\"payment_data[token]\" value=\"\" id=\"stripe-token\">
</div>

<script>
    \$(function () {

        {# Lazy load stripe.js to ensure everything works when changing the payment method. #}
        var s = document.createElement('script');
        s.type = 'text/javascript';
        s.src = 'https://js.stripe.com/v3/';
        s.onload = initStripe;

        document.head.appendChild(s)

        function initStripe () {
            var stripe = Stripe('{{ activeMethod.settings.stripe_publishable_key }}');
            var elements = stripe.elements();

            var card = elements.create('card');
            card.mount('#card-element');

            card.addEventListener('change', function (event) {
                var displayError = document.getElementById('card-errors');
                if (event.error) {
                    displayError.textContent = event.error.message;
                } else {
                    displayError.textContent = '';
                }
            });

            var form = document.getElementById('mall-payment-form');
            form.addEventListener('submit', function (event) {
                event.preventDefault();

                var submit = form.querySelector('[type=\"submit\"]')
                submit.classList.add('oc-loading')
                submit.disabled = true

                stripe.createToken(card).then(function (result) {
                    if (result.error) {
                        var errorElement = document.getElementById('card-errors');
                        errorElement.textContent = result.error.message;
                        submit.classList.remove('oc-loading')
                        submit.disabled = false
                    } else {
                        stripeTokenHandler(result.token);
                    }
                });
            });

            function stripeTokenHandler (token) {
                var input = document.getElementById('stripe-token')
                input.value = token.id

                \$('#mall-payment-form').request('{{ __SELF__ }}::onSubmit')
            }
        }
    });
</script>", "/home/vagrant/code/maske/plugins/offline/mall/components/paymentmethodselector/gateways/stripe.htm", "");
    }
}
