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

/* /home/vagrant/code/maske/plugins/offline/mall/components/wishlistbutton/add.htm */
class __TwigTemplate_6451e757b4630cef33037c9c00de0ba2b82b62f11f8d5853f84103b9413a725a extends \Twig\Template
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
        echo "<div class=\"mall-wishlist-button__new\">
    <input type=\"text\" class=\"mall-wishlist-button__name-input\">
    <div class=\"mall-wishlist-button__new-label\">
        ";
        // line 4
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.wishlist.create"]);
        echo "
    </div>
</div>
<script>
    var nameInput = document.querySelector('.mall-wishlist-button__name-input')
    var nameLabel = document.querySelector('.mall-wishlist-button__new-label')
    var inProgress = false
    if (nameInput) {
        nameInput.addEventListener('keypress', function (e) {
            if (e.keyCode === 13) {
                e.preventDefault()
                var el = this
                if (inProgress) {
                    return
                }
                inProgress = true
                \$.request('";
        // line 20
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "::onCreate', {
                    data: {
                        name: this.value,
                        product_id: '";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "encode", [0 => twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "product"], "method", false, false, false, 23)], "method", false, false, false, 23), "html", null, true);
        echo "',
                        variant_id: '";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "encode", [0 => twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "variant"], "method", false, false, false, 24)], "method", false, false, false, 24), "html", null, true);
        echo "'
                    },
                    success: function (data) {
                        this.success(data);
                        el.value = ''
                    },
                    complete: function (data, textStatus, jqXHR) {
                        this.complete(data, textStatus, jqXHR)
                        inProgress = false
                    }
                })
            }
        })
        nameInput.addEventListener('focus', function () {
            nameLabel.style.display = 'none'
            this.placeholder = '";
        // line 39
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.wishlist.create_placeholder"]);
        echo "'
        })
        nameInput.addEventListener('blur', function () {
            if (this.value === '') {
                nameLabel.style.display = 'block'
                this.placeholder = ''
            }
        })
    }
</script>
";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/code/maske/plugins/offline/mall/components/wishlistbutton/add.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 39,  71 => 24,  67 => 23,  61 => 20,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"mall-wishlist-button__new\">
    <input type=\"text\" class=\"mall-wishlist-button__name-input\">
    <div class=\"mall-wishlist-button__new-label\">
        {{ 'offline.mall::frontend.wishlist.create' | trans }}
    </div>
</div>
<script>
    var nameInput = document.querySelector('.mall-wishlist-button__name-input')
    var nameLabel = document.querySelector('.mall-wishlist-button__new-label')
    var inProgress = false
    if (nameInput) {
        nameInput.addEventListener('keypress', function (e) {
            if (e.keyCode === 13) {
                e.preventDefault()
                var el = this
                if (inProgress) {
                    return
                }
                inProgress = true
                \$.request('{{ __SELF__ }}::onCreate', {
                    data: {
                        name: this.value,
                        product_id: '{{ __SELF__.encode(__SELF__.property('product')) }}',
                        variant_id: '{{ __SELF__.encode(__SELF__.property('variant')) }}'
                    },
                    success: function (data) {
                        this.success(data);
                        el.value = ''
                    },
                    complete: function (data, textStatus, jqXHR) {
                        this.complete(data, textStatus, jqXHR)
                        inProgress = false
                    }
                })
            }
        })
        nameInput.addEventListener('focus', function () {
            nameLabel.style.display = 'none'
            this.placeholder = '{{ 'offline.mall::frontend.wishlist.create_placeholder' | trans }}'
        })
        nameInput.addEventListener('blur', function () {
            if (this.value === '') {
                nameLabel.style.display = 'block'
                this.placeholder = ''
            }
        })
    }
</script>
", "/home/vagrant/code/maske/plugins/offline/mall/components/wishlistbutton/add.htm", "");
    }
}
