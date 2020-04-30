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

/* /home/vagrant/code/maske/themes/maske/partials/mallPDF/order/styles.css */
class __TwigTemplate_26d7123f03305b23d346a87ed26a5389b5513f09ee214a28f7fc4b0343ec6693 extends \Twig\Template
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
        echo "html {
    margin: 1.5cm;
}

body {
    margin: 0;
    padding: 0;
    font-family: sans-serif;
    font-size: 11pt;
    line-height: 1.4;
}

table {
    margin: 1cm 0;
}

table td {
    padding: .2cm 0;
}

p {
    margin-bottom: .5cm;
}";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/code/maske/themes/maske/partials/mallPDF/order/styles.css";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("html {
    margin: 1.5cm;
}

body {
    margin: 0;
    padding: 0;
    font-family: sans-serif;
    font-size: 11pt;
    line-height: 1.4;
}

table {
    margin: 1cm 0;
}

table td {
    padding: .2cm 0;
}

p {
    margin-bottom: .5cm;
}", "/home/vagrant/code/maske/themes/maske/partials/mallPDF/order/styles.css", "");
    }
}
