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

/* /home/vagrant/code/maske/plugins/offline/mall/components/product/scripts.htm */
class __TwigTemplate_a0c54b156eee34c385370122633b11dd8528d690890ffa4af93f1788d6ed4ab4 extends \Twig\Template
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
            var \$form = \$('#mall-add-to-cart');
            var \$addToCart = \$('.mall-product__add-to-cart');

            \$body.on('change', '.js-mall-property-selector', function (e, isInitial) {
                var values = \$('[data-mall-property]').map(function () {
                    return this.value;
                }).toArray();

                var props = {}
                \$('[data-mall-custom-field]').map(function () {
                    if (this.type === 'checkbox' && !this.checked) {
                        return
                    }
                    return props[this.dataset.id] = this.value
                });

                \$addToCart.html('<div class=\"mall-product__property-stock mall-product__property-stock--checking\">";
        // line 21
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.stock.checking"]);
        echo "</div>');

                \$.request('onChangeProperty', {
                    data: {values: values, props: props, initial: isInitial},
                    loading: isInitial ? null : \$.oc.stripeLoadIndicator
                })
            })
            var firstProperty = \$('.js-mall-property-selector:first')
            if (firstProperty.length) {
                firstProperty.trigger('change', true)
            } else {
                ";
        // line 36
        echo "                \$.request('onCheckProductStock', {
                    data: {slug: '";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "slug", [], "any", false, false, false, 37), "html", null, true);
        echo "'},
                    loading: null
                })
            }

            ";
        // line 43
        echo "            \$body.on('click', '.mall-option-selector', function () {
                \$(this.dataset.target).val(this.dataset.value).trigger('change');

                \$(this).parent().find('.is-active').removeClass('is-active');
                \$(this).addClass('is-active');
            });

            ";
        // line 51
        echo "            \$body.on('change', '[data-mall-custom-field]', function () {
                \$.request('onChangeConfiguration', {
                    form: \$form,
                    loading: \$.oc.stripeLoadIndicator
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
        return "/home/vagrant/code/maske/plugins/offline/mall/components/product/scripts.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 1,  94 => 51,  85 => 43,  77 => 37,  74 => 36,  60 => 21,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% put scripts %}
    <script>
        \$(function () {
            var \$body = \$('body');
            var \$form = \$('#mall-add-to-cart');
            var \$addToCart = \$('.mall-product__add-to-cart');

            \$body.on('change', '.js-mall-property-selector', function (e, isInitial) {
                var values = \$('[data-mall-property]').map(function () {
                    return this.value;
                }).toArray();

                var props = {}
                \$('[data-mall-custom-field]').map(function () {
                    if (this.type === 'checkbox' && !this.checked) {
                        return
                    }
                    return props[this.dataset.id] = this.value
                });

                \$addToCart.html('<div class=\"mall-product__property-stock mall-product__property-stock--checking\">{{ 'offline.mall::frontend.stock.checking' | trans }}</div>');

                \$.request('onChangeProperty', {
                    data: {values: values, props: props, initial: isInitial},
                    loading: isInitial ? null : \$.oc.stripeLoadIndicator
                })
            })
            var firstProperty = \$('.js-mall-property-selector:first')
            if (firstProperty.length) {
                firstProperty.trigger('change', true)
            } else {
                {#
                   In case the product has no special properties we simply check the stock once
                   since nothing can be configured afterwards.
                #}
                \$.request('onCheckProductStock', {
                    data: {slug: '{{ item.slug }}'},
                    loading: null
                })
            }

            {# Handle clicks on the image selector for custom field type \"image\" and \"color\" #}
            \$body.on('click', '.mall-option-selector', function () {
                \$(this.dataset.target).val(this.dataset.value).trigger('change');

                \$(this).parent().find('.is-active').removeClass('is-active');
                \$(this).addClass('is-active');
            });

            {# Reload pricing information when a custom field is changed #}
            \$body.on('change', '[data-mall-custom-field]', function () {
                \$.request('onChangeConfiguration', {
                    form: \$form,
                    loading: \$.oc.stripeLoadIndicator
                })
            });
        })
    </script>
{% endput %}", "/home/vagrant/code/maske/plugins/offline/mall/components/product/scripts.htm", "");
    }
}
