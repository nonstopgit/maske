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

/* /home/vagrant/code/maske/themes/maske/partials/footer.htm */
class __TwigTemplate_18476b9d28ec580b4e08d64a27e117392f7374049ff448c66c590100123eee21 extends \Twig\Template
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
        echo "<footer class=\"footer text-sm text-grey-dark py-8 border-solid border-t border-smoke-light\">
    <div class=\"container mx-auto text-center text-xs text-grey\">
        Rockstock d.o.o..
    </div>
</footer>";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/code/maske/themes/maske/partials/footer.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer class=\"footer text-sm text-grey-dark py-8 border-solid border-t border-smoke-light\">
    <div class=\"container mx-auto text-center text-xs text-grey\">
        Rockstock d.o.o..
    </div>
</footer>", "/home/vagrant/code/maske/themes/maske/partials/footer.htm", "");
    }
}
