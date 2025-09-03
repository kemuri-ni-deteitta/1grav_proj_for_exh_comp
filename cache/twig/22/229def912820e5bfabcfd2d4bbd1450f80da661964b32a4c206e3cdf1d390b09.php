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

/* forms/layouts/form.html.twig */
class __TwigTemplate_c670707f92e3816247c6747ed538d852a51b033ca591cbcbae37e4c6ea1a3915 extends \Twig\Template
{
    protected function doGetParent(array $context)
    {
        // line 4
        return $this->loadTemplate([0 => (("forms/layouts/form/" . ($context["layout"] ?? null)) . "-form.html.twig"), 1 => "forms/layouts/form/default-form.html.twig"], "forms/layouts/form.html.twig", 4);
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
        return "forms/layouts/form.html.twig";
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
        return new Source("{# DEPRECATED: Do not override this file! Use forms/layouts/form/[FORM_LAYOUT]-form.html.twig instead #}

{% set layout = layout ?? form.layout ?? 'default' %}
{% extends [\"forms/layouts/form/#{layout}-form.html.twig\", 'forms/layouts/form/default-form.html.twig'] %}
", "forms/layouts/form.html.twig", "/var/www/gravExpo/user/plugins/form/templates/forms/layouts/form.html.twig");
    }
}
