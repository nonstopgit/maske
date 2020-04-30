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

/* /home/vagrant/code/maske/themes/maske/partials/mallPDF/order/taxes.htm */
class __TwigTemplate_38aff9ac17eb19693bbc8ef6ffec63729ca1132ce2e79d2d24a6f2d21b59df4c extends \Twig\Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["taxes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 2
            echo "    <tr class=\"orderfooter orderfooter-taxes separator\">
        <td colspan=\"3\" style=\"font-size: 80%; color: #666\">
            ";
            // line 4
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entry"], "tax", [], "any", false, false, false, 4), "name", [], "any", false, false, false, 4), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entry"], "tax", [], "any", false, false, false, 4), "percentage", [], "any", false, false, false, 4), "html", null, true);
            echo " %)
        </td>
        <td style=\"text-align: right; font-size: 80%; color: #666\">
            ";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entry"], "total_formatted", [], "any", false, false, false, 7), "html", null, true);
            echo "
        </td>
    </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "/home/vagrant/code/maske/themes/maske/partials/mallPDF/order/taxes.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 7,  45 => 4,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for entry in taxes %}
    <tr class=\"orderfooter orderfooter-taxes separator\">
        <td colspan=\"3\" style=\"font-size: 80%; color: #666\">
            {{ entry.tax.name }} ({{ entry.tax.percentage }} %)
        </td>
        <td style=\"text-align: right; font-size: 80%; color: #666\">
            {{ entry.total_formatted }}
        </td>
    </tr>
{% endfor %}", "/home/vagrant/code/maske/themes/maske/partials/mallPDF/order/taxes.htm", "");
    }
}
