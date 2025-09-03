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

/* forms/layouts/button.html.twig */
class __TwigTemplate_134b60c9935772bc63aa5ad47afd3d68fc3aa34361a05ad66b7aa0db72cf40e9 extends \Twig\Template
{
    protected function doGetParent(array $context)
    {
        // line 4
        return $this->loadTemplate([0 => (("forms/layouts/button/" . ($context["layout"] ?? null)) . "-button.html.twig"), 1 => "forms/layouts/button/default-button.html.twig"], "forms/layouts/button.html.twig", 4);
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
        return "forms/layouts/button.html.twig";
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
        return new Source("{# DEPRECATED: Do not override this file! Use forms/layouts/button/[FORM_LAYOUT]-button.html.twig instead #}

{% set layout = layout ?? form.layout ?? 'default' %}
{% extends [\"forms/layouts/button/#{layout}-button.html.twig\", 'forms/layouts/button/default-button.html.twig'] %}
", "forms/layouts/button.html.twig", "/var/www/gravExpo/user/plugins/form/templates/forms/layouts/button.html.twig");
    }
}
