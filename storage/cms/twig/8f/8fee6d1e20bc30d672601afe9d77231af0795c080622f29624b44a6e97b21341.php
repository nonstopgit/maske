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

/* /home/vagrant/code/maske/plugins/offline/mall/components/wishlistbutton/popup.htm */
class __TwigTemplate_de05d578c98a3dafe258982960cfb70f04e4c01f28688a3cc908b87004ff5fad extends \Twig\Template
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
        echo "<div class=\"mall-wishlist-button__popup\">
    <div class=\"mall-wishlist-button__popup-inner\">
        <div class=\"mall-wishlists mall-wishlists--height-limited\">
            ";
        // line 4
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['items'] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "items", [], "any", false, false, false, 4)        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::list")        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 5
        echo "        </div>
        ";
        // line 6
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::add")        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 7
        echo "    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/code/maske/plugins/offline/mall/components/wishlistbutton/popup.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 7,  50 => 6,  47 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"mall-wishlist-button__popup\">
    <div class=\"mall-wishlist-button__popup-inner\">
        <div class=\"mall-wishlists mall-wishlists--height-limited\">
            {% partial __SELF__ ~ '::list' items=__SELF__.items %}
        </div>
        {% partial __SELF__ ~ '::add' %}
    </div>
</div>", "/home/vagrant/code/maske/plugins/offline/mall/components/wishlistbutton/popup.htm", "");
    }
}
