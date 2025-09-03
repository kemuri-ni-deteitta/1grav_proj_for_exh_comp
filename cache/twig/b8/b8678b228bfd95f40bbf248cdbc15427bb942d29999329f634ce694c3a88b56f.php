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

/* partials/form-messages.html.twig */
class __TwigTemplate_5a26fdab8c62981f289a2fc9da17d9c6bda1b90bf1079505b5a40c503956fc50 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        if ($this->getAttribute(($context["form"] ?? null), "message", [])) {
            // line 2
            echo "  ";
            $context["inline_errors"] = (( !(null === $this->getAttribute(($context["form"] ?? null), "inline_errors", []))) ? ($this->getAttribute(($context["form"] ?? null), "inline_errors", [])) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "form", []), "inline_errors", [0 => false], "method")));
            // line 3
            echo "  ";
            $context["status_mapping"] = ["success" => "green", "error" => "red", "warning" => "yellow"];
            // line 4
            echo "  ";
            $context["message"] = (((($context["inline_errors"] ?? null) && $this->getAttribute(($context["form"] ?? null), "messages", []))) ? ($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "GRAV.FORM.VALIDATION_FAIL")) : ($this->getAttribute(($context["form"] ?? null), "message", [])));
            // line 5
            echo "    <div class=\"toast toast-";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["form"] ?? null), "status", []), "html", null, true);
            echo " ";
            (($this->getAttribute(($context["status_mapping"] ?? null), $this->getAttribute(($context["form"] ?? null), "status", []), [], "array")) ? (print (twig_escape_filter($this->env, $this->getAttribute(($context["status_mapping"] ?? null), $this->getAttribute(($context["form"] ?? null), "status", []), [], "array"), "html", null, true))) : (print ("green")));
            echo " mt-2 mb-2\">";
            echo ($context["message"] ?? null);
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/form-messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 5,  38 => 4,  35 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if form.message %}
  {% set inline_errors = form.inline_errors is not null ? form.inline_errors : config.plugins.form.inline_errors(false) %}
  {% set status_mapping = {'success':'green', 'error': 'red', 'warning': 'yellow'} %}
  {% set message = inline_errors and form.messages ? \"GRAV.FORM.VALIDATION_FAIL\"|t : form.message %}
    <div class=\"toast toast-{{ form.status }} {{ status_mapping[form.status] ?: 'green' }} mt-2 mb-2\">{{ message|raw }}</div>
{% endif %}", "partials/form-messages.html.twig", "/var/www/gravExpo/user/themes/quark/templates/partials/form-messages.html.twig");
    }
}
