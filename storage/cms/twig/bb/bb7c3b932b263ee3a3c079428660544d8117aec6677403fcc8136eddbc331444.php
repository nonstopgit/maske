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

/* /home/vagrant/code/maske/plugins/offline/mall/components/addressselector/address.htm */
class __TwigTemplate_36ec3f5331acc0c85e55e5d3761b5ec2551f4856fc9cef874e6628454d07890a extends \Twig\Template
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
        echo "<div class=\"mall-address\">
    <p>
        ";
        // line 3
        if (twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "company", [], "any", false, false, false, 3)) {
            // line 4
            echo "            ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "company", [], "any", false, false, false, 4), "html", null, true);
            echo "<br/>
        ";
        }
        // line 6
        echo "        ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "name", [], "any", false, false, false, 6), "html", null, true);
        echo "<br/>
        ";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "lines", [], "any", false, false, false, 7), "html", null, true);
        echo " <br/>
        ";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "zip", [], "any", false, false, false, 8), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "city", [], "any", false, false, false, 8), "html", null, true);
        echo "<br/>
        ";
        // line 9
        if (twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "state_id", [], "any", false, false, false, 9)) {
            // line 10
            echo "            ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "state", [], "any", false, false, false, 10), "name", [], "any", false, false, false, 10), "html", null, true);
            echo " <br/>
        ";
        }
        // line 12
        echo "        ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "country", [], "any", false, false, false, 12), "name", [], "any", false, false, false, 12), "html", null, true);
        echo "
    </p>
    <p class=\"mall-address__actions\">
        <a href=\"javascript:;\" class=\"js-change-address\" data-type=\"";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "type", [], "any", false, false, false, 15), "html", null, true);
        echo "\">
            ";
        // line 16
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.change"]);
        echo "
        </a>
    </p>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/code/maske/plugins/offline/mall/components/addressselector/address.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 16,  79 => 15,  72 => 12,  66 => 10,  64 => 9,  58 => 8,  54 => 7,  49 => 6,  43 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"mall-address\">
    <p>
        {% if address.company %}
            {{ address.company }}<br/>
        {% endif %}
        {{ address.name }}<br/>
        {{ address.lines }} <br/>
        {{ address.zip }} {{ address.city }}<br/>
        {% if address.state_id %}
            {{ address.state.name }} <br/>
        {% endif %}
        {{ address.country.name }}
    </p>
    <p class=\"mall-address__actions\">
        <a href=\"javascript:;\" class=\"js-change-address\" data-type=\"{{ __SELF__.type }}\">
            {{ 'offline.mall::frontend.change' | trans }}
        </a>
    </p>
</div>", "/home/vagrant/code/maske/plugins/offline/mall/components/addressselector/address.htm", "");
    }
}
