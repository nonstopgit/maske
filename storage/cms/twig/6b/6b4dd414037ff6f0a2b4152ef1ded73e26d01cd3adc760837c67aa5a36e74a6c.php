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

/* /home/vagrant/code/maske/plugins/offline/mall/components/checkout/scripts.htm */
class __TwigTemplate_8d9539cfac5e6e3a9c749b551bd71026c8672a5520e968ba1beeb286689efecc extends \Twig\Template
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
        echo "    <script>
        \$(function () {
            var \$body = \$('body');
            var \$overlay = \$('.mall-overlay');

            \$.subscribe('mall.address.update', function () {
                \$.request('";
        // line 8
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "::onRun', {
                    update: {'";
        // line 9
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "::shippingmethod': '.mall-cart-summary__shipping-method > div'},
                })
            });

            \$body.on('click', '.js-mall-checkout', function (e) {
                e.preventDefault()
                \$overlay.prependTo(\$body).show()
                \$.request('";
        // line 16
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "::onCheckout', {
                    error: function (jqXHR) {
                        \$overlay.hide();
                        if (jqXHR.status === 406) {
                            return this.options.handleValidationMessage(
                                jqXHR.responseJSON['X_OCTOBER_ERROR_MESSAGE'],
                                jqXHR.responseJSON['X_OCTOBER_ERROR_FIELDS']
                            )
                        }
                        this.error(jqXHR)
                        document.location.href = '";
        // line 26
        echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "accountPage", [], "any", false, false, false, 26));
        echo "'
                    },
                    handleValidationMessage: function (message, fields) {
                        alert(\"There was an error while processing your order: \" + message)
                        document.location.href = '";
        // line 30
        echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "accountPage", [], "any", false, false, false, 30));
        echo "'
                    }
                })
            });
        })
    </script>
";
        // line 1
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "/home/vagrant/code/maske/plugins/offline/mall/components/checkout/scripts.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 1,  81 => 30,  74 => 26,  61 => 16,  51 => 9,  47 => 8,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% put scripts %}
    <script>
        \$(function () {
            var \$body = \$('body');
            var \$overlay = \$('.mall-overlay');

            \$.subscribe('mall.address.update', function () {
                \$.request('{{ __SELF__ }}::onRun', {
                    update: {'{{ __SELF__ }}::shippingmethod': '.mall-cart-summary__shipping-method > div'},
                })
            });

            \$body.on('click', '.js-mall-checkout', function (e) {
                e.preventDefault()
                \$overlay.prependTo(\$body).show()
                \$.request('{{ __SELF__ }}::onCheckout', {
                    error: function (jqXHR) {
                        \$overlay.hide();
                        if (jqXHR.status === 406) {
                            return this.options.handleValidationMessage(
                                jqXHR.responseJSON['X_OCTOBER_ERROR_MESSAGE'],
                                jqXHR.responseJSON['X_OCTOBER_ERROR_FIELDS']
                            )
                        }
                        this.error(jqXHR)
                        document.location.href = '{{ __SELF__.accountPage | page }}'
                    },
                    handleValidationMessage: function (message, fields) {
                        alert(\"There was an error while processing your order: \" + message)
                        document.location.href = '{{ __SELF__.accountPage | page }}'
                    }
                })
            });
        })
    </script>
{% endput %}", "/home/vagrant/code/maske/plugins/offline/mall/components/checkout/scripts.htm", "");
    }
}
