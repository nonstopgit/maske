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

/* /home/vagrant/code/maske/themes/maske/layouts/default.htm */
class __TwigTemplate_65cec59ccd626eaf08ec441f5d683e14fb4b011ef96b3d8d7e3d4b4cddba1160 extends \Twig\Template
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
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <meta name=\"description\" content=\"";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 8), "meta_description", [], "any", false, false, false, 8), "html", null, true);
        echo "\">
    <title>";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 9), "title", [], "any", false, false, false, 9), "html", null, true);
        echo "</title>
    ";
        // line 10
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 11
        echo "    <link rel=\"stylesheet\" href=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/main.css");
        echo "\">
    <script src=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "@jquery"]);
        echo "\"></script>
    ";
        // line 13
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("enhancedEcommerceAnalytics"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 14
        echo "    ";
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("mallDependencies"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 15
        echo "</head>
<body>
";
        // line 17
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 19
        echo "
<main class=\"container mx-auto py-8\">
    ";
        // line 21
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 22
        echo "</main>

";
        // line 24
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 25
        echo "<script src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/app.js");
        echo "\"></script>
";
        // line 26
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="' . Request::getBasePath() .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 27
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        $_type = isset($context["type"]) ? $context["type"] : null;        $_message = isset($context["message"]) ? $context["message"] : null;        // line 28
        foreach (Flash::getMessages() as $type => $messages) {
            foreach ($messages as $message) {
                $context["type"] = $type;                $context["message"] = $message;                // line 29
                echo "    <script>
        \$(function() {
            \$.oc.flashMsg({type: '";
                // line 31
                echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
                echo "', text: '";
                echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
                echo "'})
        })
    </script>
";
            }
        }
        $context["type"] = $_type;        $context["message"] = $_message;        // line 35
        echo "</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/code/maske/themes/maske/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 35,  123 => 31,  119 => 29,  116 => 28,  113 => 27,  102 => 26,  97 => 25,  93 => 24,  89 => 22,  87 => 21,  83 => 19,  79 => 17,  75 => 15,  70 => 14,  66 => 13,  62 => 12,  57 => 11,  54 => 10,  50 => 9,  46 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <meta name=\"description\" content=\"{{ this.page.meta_description }}\">
    <title>{{ this.page.title }}</title>
    {% styles %}
    <link rel=\"stylesheet\" href=\"{{ 'assets/main.css' | theme }}\">
    <script src=\"{{ ['@jquery'] | theme }}\"></script>
    {% component 'enhancedEcommerceAnalytics' %}
    {% component 'mallDependencies' %}
</head>
<body>
{% partial 'header' %}
{#{% partial 'navigation' %}#}

<main class=\"container mx-auto py-8\">
    {% page %}
</main>

{% partial 'footer' %}
<script src=\"{{ 'assets/app.js' | theme }}\"></script>
{% framework extras %}
{% scripts %}
{% flash %}
    <script>
        \$(function() {
            \$.oc.flashMsg({type: '{{ type }}', text: '{{ message }}'})
        })
    </script>
{% endflash %}
</body>
</html>", "/home/vagrant/code/maske/themes/maske/layouts/default.htm", "");
    }
}
