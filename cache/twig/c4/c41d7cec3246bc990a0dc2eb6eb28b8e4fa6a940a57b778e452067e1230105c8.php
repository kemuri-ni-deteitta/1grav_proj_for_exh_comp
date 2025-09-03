<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* forms/layouts/field.html.twig */
class __TwigTemplate_471f3e9161b1dd9a796ab848ea6097e28e48a021a6a10a3b5d04f51aa241293b extends \Twig\Template
{
    protected function doGetParent(array $context)
    {
        // line 4
        return $this->loadTemplate([0 => (("forms/layouts/field/" . ($context["layout"] ?? null)) . "-field.html.twig"), 1 => "forms/layouts/field/default-field.html.twig"], "forms/layouts/field.html.twig", 4);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 3
        $context["layout"] = (($context["layout"]) ?? (((($this->getAttribute(($context["form"] ?? null), "layout", [], "any", true, true) &&  !(null === $this->getAttribute(($context["form"] ?? null), "layout", [])))) ? ($this->getAttribute(($context["form"] ?? null), "layout", [])) : ("default"))));
        // line 4
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "forms/layouts/field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 4,  26 => 3,  20 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{# DEPRECATED: Do not override this file! Use forms/layouts/field/[FORM_LAYOUT]-field.html.twig instead #}

{% set layout = layout ?? form.layout ?? 'default' %}
{% extends [\"forms/layouts/field/#{layout}-field.html.twig\", 'forms/layouts/field/default-field.html.twig'] %}
", "forms/layouts/field.html.twig", "/var/www/gravExpo/user/plugins/form/templates/forms/layouts/field.html.twig");
    }
}
