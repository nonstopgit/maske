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

/* /home/vagrant/code/maske/themes/maske/partials/accountButton/default.htm */
class __TwigTemplate_d82d5d3a1bdc54f0c0859a8af18a7378de2c2f489db5ae9c899974e291bc9af5 extends \Twig\Template
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
        echo "<div class=\"w-24\">
    <a href=\"";
        // line 2
        echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, ($context["myAccount"] ?? null), "accountPage", [], "any", false, false, false, 2));
        echo "\"
       class=\"text-grey flex flex-col items-center justify-center no-underline\">
        <svg class=\"text-grey fill-current w-6 mb-2\" viewBox=\"0 0 20 20\"
             version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\"
             xmlns:xlink=\"http://www.w3.org/1999/xlink\">
            <g stroke=\"none\" stroke-width=\"1\" fill-rule=\"evenodd\">
                <g id=\"icon-shape\">
                    <path d=\"M4.99999861,5.00218626 C4.99999861,2.23955507 7.24419318,0 9.99999722,0 C12.7614202,0 14.9999958,2.22898489 14.9999958,5.00218626 L14.9999958,6.99781374 C14.9999958,9.76044493 12.7558013,12 9.99999722,12 C7.23857424,12 4.99999861,9.77101511 4.99999861,6.99781374 L4.99999861,5.00218626 Z M1.11022272e-16,16.6756439 C2.94172855,14.9739441 6.3571245,14 9.99999722,14 C13.6428699,14 17.0582659,14.9739441 20,16.6756471 L19.9999944,20 L0,20 L1.11022272e-16,16.6756439 Z\"></path>
                </g>
            </g>
        </svg>

        <div class=\"text-xs\">
            ";
        // line 15
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.account"]);
        echo "
        </div>
    </a>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/code/maske/themes/maske/partials/accountButton/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 15,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"w-24\">
    <a href=\"{{ myAccount.accountPage | page }}\"
       class=\"text-grey flex flex-col items-center justify-center no-underline\">
        <svg class=\"text-grey fill-current w-6 mb-2\" viewBox=\"0 0 20 20\"
             version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\"
             xmlns:xlink=\"http://www.w3.org/1999/xlink\">
            <g stroke=\"none\" stroke-width=\"1\" fill-rule=\"evenodd\">
                <g id=\"icon-shape\">
                    <path d=\"M4.99999861,5.00218626 C4.99999861,2.23955507 7.24419318,0 9.99999722,0 C12.7614202,0 14.9999958,2.22898489 14.9999958,5.00218626 L14.9999958,6.99781374 C14.9999958,9.76044493 12.7558013,12 9.99999722,12 C7.23857424,12 4.99999861,9.77101511 4.99999861,6.99781374 L4.99999861,5.00218626 Z M1.11022272e-16,16.6756439 C2.94172855,14.9739441 6.3571245,14 9.99999722,14 C13.6428699,14 17.0582659,14.9739441 20,16.6756471 L19.9999944,20 L0,20 L1.11022272e-16,16.6756439 Z\"></path>
                </g>
            </g>
        </svg>

        <div class=\"text-xs\">
            {{ 'offline.mall::frontend.account' | trans }}
        </div>
    </a>
</div>", "/home/vagrant/code/maske/themes/maske/partials/accountButton/default.htm", "");
    }
}
