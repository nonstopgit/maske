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

/* /home/vagrant/code/maske/plugins/offline/mall/components/paymentmethodselector/scripts.htm */
class __TwigTemplate_cbb4e387962b4971a291a615b500c599eb838b12b93c9b168e0ed5b81458175c extends \Twig\Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 2
        echo "<script>
    \$(function () {
        var \$form = \$('#mall-payment-form')
        var \$overlay = \$('.mall-overlay');
        var \$body = \$('body')

        \$body.on('click', '.mall-payment-customer-method', function (e) {
            \$overlay.prependTo(\$body).show()
        })

        \$body.on('submit', '#mall-payment-form', function (e) {
            if (e.originalEvent.defaultPrevented) {
                return false;
            }
            e.preventDefault();
            \$overlay.prependTo(\$('body')).show()

            var submit = this.querySelector('[type=\"submit\"]')
            submit.classList.add('oc-loading')
            submit.disabled = true
            \$form.request('";
        // line 22
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "::onSubmit', {
                error: function(res) {
                    submit.classList.remove('oc-loading')
                    submit.disabled = false
                    this.error(res)
                }
            })
        })
    })
</script>
";
        // line 1
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "/home/vagrant/code/maske/plugins/offline/mall/components/paymentmethodselector/scripts.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 1,  61 => 22,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% put scripts %}
<script>
    \$(function () {
        var \$form = \$('#mall-payment-form')
        var \$overlay = \$('.mall-overlay');
        var \$body = \$('body')

        \$body.on('click', '.mall-payment-customer-method', function (e) {
            \$overlay.prependTo(\$body).show()
        })

        \$body.on('submit', '#mall-payment-form', function (e) {
            if (e.originalEvent.defaultPrevented) {
                return false;
            }
            e.preventDefault();
            \$overlay.prependTo(\$('body')).show()

            var submit = this.querySelector('[type=\"submit\"]')
            submit.classList.add('oc-loading')
            submit.disabled = true
            \$form.request('{{ __SELF__ }}::onSubmit', {
                error: function(res) {
                    submit.classList.remove('oc-loading')
                    submit.disabled = false
                    this.error(res)
                }
            })
        })
    })
</script>
{% endput %}", "/home/vagrant/code/maske/plugins/offline/mall/components/paymentmethodselector/scripts.htm", "");
    }
}
