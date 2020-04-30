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

/* /home/vagrant/code/maske/themes/maske/partials/mallPDF/order/default.htm */
class __TwigTemplate_fbaaa6e2f024167bbdec544378d4df9d80438eed60ff630389cf6aad76649a8d extends \Twig\Template
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
        echo "<!doctype html>
<html lang=\"en\">
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"/>
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>Order Invoice</title>
    <style>
        ";
        // line 10
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("mallPDF/order/styles.css"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 11
        echo "    </style>
</head>
<body>

<h1>Rockstock d.o.o.</h1>
<p>
    Breg pri Borovnici 56 b<br>
    1353 Borovnica<br>
    Slovenia<br><br>
    e-mail: rockstock@siol.net<br>
    GSM: +386 (0)41 674 500<br>
</p>

<br>

<p>";
        // line 26
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["pdf_order.hi"]);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "customer", [], "any", false, false, false, 26), "firstname", [], "any", false, false, false, 26), "html", null, true);
        echo "</p>

<p>";
        // line 28
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["pdf_order.thank_you_invoice"]);
        echo "Thank you very much for your order. This is your invoice for the following items:</p>

";
        // line 30
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['products'] = twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "products", [], "any", false, false, false, 30)        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("mallPDF/order/table"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 31
        echo "
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/code/maske/themes/maske/partials/mallPDF/order/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 31,  81 => 30,  76 => 28,  69 => 26,  52 => 11,  48 => 10,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en\">
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"/>
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>Order Invoice</title>
    <style>
        {% partial 'mallPDF/order/styles.css' %}
    </style>
</head>
<body>

<h1>Rockstock d.o.o.</h1>
<p>
    Breg pri Borovnici 56 b<br>
    1353 Borovnica<br>
    Slovenia<br><br>
    e-mail: rockstock@siol.net<br>
    GSM: +386 (0)41 674 500<br>
</p>

<br>

<p>{{ 'pdf_order.hi'|_ }} {{ order.customer.firstname }}</p>

<p>{{ 'pdf_order.thank_you_invoice'|_ }}Thank you very much for your order. This is your invoice for the following items:</p>

{% partial 'mallPDF/order/table' products=order.products %}

</body>
</html>", "/home/vagrant/code/maske/themes/maske/partials/mallPDF/order/default.htm", "");
    }
}
