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

/* /home/vagrant/code/maske/plugins/offline/mall/components/product/images.htm */
class __TwigTemplate_8945a73e515b94ed7f0f85ebcdc78fec134f7cb62db0ed5148486cca89d973fc extends \Twig\Template
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
        if (($context["images"] ?? null)) {
            // line 2
            echo "    <div class=\"mall-product__images\">
        ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 4
                echo "            <a class=\"mall-product__image\" href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, false, 4), "html", null, true);
                echo "\"
               data-fancybox=\"product\"
               data-caption=\"";
                // line 6
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "title", [], "any", false, false, false, 6), "html", null, true);
                echo "\">
                <img src=\"";
                // line 7
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [0 => 240, 1 => ($context["auto"] ?? null)], "method", false, false, false, 7), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "title", [], "any", false, false, false, 7), "html", null, true);
                echo "\"/>
            </a>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/home/vagrant/code/maske/plugins/offline/mall/components/product/images.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 10,  56 => 7,  52 => 6,  46 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if images %}
    <div class=\"mall-product__images\">
        {% for image in images %}
            <a class=\"mall-product__image\" href=\"{{ image.path }}\"
               data-fancybox=\"product\"
               data-caption=\"{{ image.title }}\">
                <img src=\"{{ image.thumb(240, auto) }}\" alt=\"{{ image.title }}\"/>
            </a>
        {% endfor %}
    </div>
{% endif %}", "/home/vagrant/code/maske/plugins/offline/mall/components/product/images.htm", "");
    }
}
