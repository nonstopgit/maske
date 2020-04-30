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

/* /home/vagrant/code/maske/plugins/offline/mall/components/orderslist/address.htm */
class __TwigTemplate_e4bb917746e5c3a89d771c401e4a03a37902936144714daffca99ada7b9b926f extends \Twig\Template
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
        echo "<p>
    ";
        // line 2
        if (twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "company", [], "any", false, false, false, 2)) {
            // line 3
            echo "        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "company", [], "any", false, false, false, 3), "html", null, true);
            echo "<br />
    ";
        }
        // line 5
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "name", [], "any", false, false, false, 5), "html", null, true);
        echo "<br />
    ";
        // line 6
        echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "lines", [], "any", false, false, false, 6), "html", null, true));
        echo "<br />
    ";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "zip", [], "any", false, false, false, 7), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "city", [], "any", false, false, false, 7), "html", null, true);
        echo "<br />
    ";
        // line 8
        if (twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "state_id", [], "any", false, false, false, 8)) {
            // line 9
            echo "        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "state", [], "any", false, false, false, 9), "name", [], "any", false, false, false, 9), "html", null, true);
            echo "<br />
    ";
        }
        // line 11
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "country", [], "any", false, false, false, 11), "name", [], "any", false, false, false, 11), "html", null, true);
        echo "
</p>";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/code/maske/plugins/offline/mall/components/orderslist/address.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 11,  65 => 9,  63 => 8,  57 => 7,  53 => 6,  48 => 5,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<p>
    {% if address.company %}
        {{ address.company }}<br />
    {% endif %}
    {{ address.name }}<br />
    {{ address.lines | nl2br }}<br />
    {{ address.zip }} {{ address.city }}<br />
    {% if address.state_id %}
        {{ address.state.name }}<br />
    {% endif %}
    {{ address.country.name }}
</p>", "/home/vagrant/code/maske/plugins/offline/mall/components/orderslist/address.htm", "");
    }
}
