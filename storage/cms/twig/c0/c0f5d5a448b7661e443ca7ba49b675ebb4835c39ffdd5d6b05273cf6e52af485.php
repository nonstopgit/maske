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

/* /home/vagrant/code/maske/themes/maske/partials/session.htm */
class __TwigTemplate_3c01792699bbcdcba1516dbadb367d0cb92cc6f38c82a3e8b5eb098f39001d67 extends \Twig\Template
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
        if (($context["user"] ?? null)) {
            // line 2
            echo "    ";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.session.logged_in", ["email" => twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "email", [], "any", false, false, false, 2)]]));
            echo ".
    <span class=\"ml-4\">
        <a href=\"javascript:;\" data-request=\"onLogout\" data-request-data=\"redirect: '/'\">
            ";
            // line 5
            echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.session.logout"]);
            echo "
        </a>
    </span>
";
        } else {
            // line 9
            echo "    ";
            echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.session.logged_out"]);
            echo ".
    <span class=\"ml-4\">
        <a href=\"";
            // line 11
            echo $this->extensions['System\Twig\Extension']->appFilter("/login");
            echo "\">
            ";
            // line 12
            echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.session.login_signup"]);
            echo "
        </a>
    </span>
";
        }
    }

    public function getTemplateName()
    {
        return "/home/vagrant/code/maske/themes/maske/partials/session.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 12,  59 => 11,  53 => 9,  46 => 5,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if user %}
    {{ 'offline.mall::frontend.session.logged_in' | trans({email: user.email}) | escape }}.
    <span class=\"ml-4\">
        <a href=\"javascript:;\" data-request=\"onLogout\" data-request-data=\"redirect: '/'\">
            {{ 'offline.mall::frontend.session.logout' | trans }}
        </a>
    </span>
{% else %}
    {{ 'offline.mall::frontend.session.logged_out' | trans }}.
    <span class=\"ml-4\">
        <a href=\"{{ '/login' | app }}\">
            {{ 'offline.mall::frontend.session.login_signup' | trans }}
        </a>
    </span>
{% endif %}", "/home/vagrant/code/maske/themes/maske/partials/session.htm", "");
    }
}
