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

/* forms/data.txt.twig */
class __TwigTemplate_9bc74eb816e65ec345caf3023be5a45bb2b5884dd09aad2c1594bfc46a7ce186 extends \Twig\Template
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
        // line 32
        $context["macro"] = $this;
        // line 34
        echo ($context["macro"]->getrender_field(($context["form"] ?? null), $this->getAttribute(($context["form"] ?? null), "fields", []), "") . "
");
    }

    // line 1
    public function getrender_field($__form__ = null, $__fields__ = null, $__scope__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "form" => $__form__,
            "fields" => $__fields__,
            "scope" => $__scope__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 2
            $context["self"] = $this;
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? null));
            foreach ($context['_seq'] as $context["index"] => $context["field"]) {
                // line 4
                $context["show_field"] = ((($this->getAttribute($context["field"], "input@", [], "any", true, true) &&  !(null === $this->getAttribute($context["field"], "input@")))) ? ($this->getAttribute($context["field"], "input@")) : (((($this->getAttribute($context["field"], "store", [], "any", true, true) &&  !(null === $this->getAttribute($context["field"], "store", [])))) ? ($this->getAttribute($context["field"], "store", [])) : (true))));
                // line 5
                if ($this->getAttribute($context["field"], "fields", [])) {
                    // line 6
                    $context["new_scope"] = (($this->getAttribute($context["field"], "nest_id", [])) ? (((($context["scope"] ?? null) . $this->getAttribute($context["field"], "name", [])) . ".")) : (($context["scope"] ?? null)));
                    // line 7
                    echo $context["self"]->getrender_field(($context["form"] ?? null), $this->getAttribute($context["field"], "fields", []), ($context["new_scope"] ?? null));
                } else {
                    // line 9
                    if (($context["show_field"] ?? null)) {
                        // line 10
                        $context["value"] = $this->getAttribute(($context["form"] ?? null), "value", [0 => (($context["scope"] ?? null) . ((($this->getAttribute($context["field"], "name", [], "any", true, true) &&  !(null === $this->getAttribute($context["field"], "name", [])))) ? ($this->getAttribute($context["field"], "name", [])) : ($context["index"])))], "method");
                        // line 11
                        if (($context["value"] ?? null)) {
                            // line 12
                            $context["field_name"] = ((($this->getAttribute($context["field"], "name", [], "any", true, true) &&  !(null === $this->getAttribute($context["field"], "name", [])))) ? ($this->getAttribute($context["field"], "name", [])) : ($context["index"]));
                            // line 13
                            if ((($context["field_name"] ?? null) == "service")) {
                                // line 14
                                if ((($context["value"] ?? null) == "development")) {
                                    // line 15
                                    $context["display_value"] = "Разработка и строительство выставочных стендов";
                                } elseif ((                                // line 16
($context["value"] ?? null) == "design")) {
                                    // line 17
                                    $context["display_value"] = "Дизайн выставочных стендов";
                                } elseif ((                                // line 18
($context["value"] ?? null) == "full_service")) {
                                    // line 19
                                    $context["display_value"] = "Полный выставочный сервис";
                                } else {
                                    // line 21
                                    $context["display_value"] = ($context["value"] ?? null);
                                }
                            } else {
                                // line 24
                                $context["display_value"] = ((twig_test_iterable(($context["value"] ?? null))) ? (twig_jsonencode_filter(($context["value"] ?? null))) : (($context["value"] ?? null)));
                            }
                            // line 26
                            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, $this->getAttribute($context["field"], "label", [])));
                            echo ": ";
                            echo twig_escape_filter($this->env, ($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->stringFilter(($context["display_value"] ?? null)) . "
"), "html", null, true);
                        }
                    }
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['index'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "forms/data.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 26,  93 => 24,  89 => 21,  86 => 19,  84 => 18,  82 => 17,  80 => 16,  78 => 15,  76 => 14,  74 => 13,  72 => 12,  70 => 11,  68 => 10,  66 => 9,  63 => 7,  61 => 6,  59 => 5,  57 => 4,  53 => 3,  51 => 2,  37 => 1,  32 => 34,  30 => 32,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{%- macro render_field(form, fields, scope) %}
{%- import _self as self %}
{%- for index, field in fields %}
    {%- set show_field = attribute(field, \"input@\") ?? field.store ?? true %}
    {%- if field.fields %}
        {%- set new_scope = field.nest_id ? scope ~ field.name ~ '.' : scope -%}
        {{- self.render_field(form, field.fields, new_scope) }}
    {%- else %}
        {%- if show_field %}
            {%- set value = form.value(scope ~ (field.name ?? index)) -%}
            {%- if value -%}
                {%- set field_name = field.name ?? index -%}
                {%- if field_name == 'service' -%}
                    {%- if value == 'development' -%}
                        {%- set display_value = 'Разработка и строительство выставочных стендов' -%}
                    {%- elseif value == 'design' -%}
                        {%- set display_value = 'Дизайн выставочных стендов' -%}
                    {%- elseif value == 'full_service' -%}
                        {%- set display_value = 'Полный выставочный сервис' -%}
                    {%- else -%}
                        {%- set display_value = value -%}
                    {%- endif -%}
                {%- else -%}
                    {%- set display_value = value is iterable ? value|json_encode : value -%}
                {%- endif -%}
            {{- field.label|t|e }}: {{ string(display_value) ~ \"\\n\" }}
            {%- endif -%}
        {%- endif %}
    {%- endif %}
{%- endfor %}
{%- endmacro %}
{%- import _self as macro %}
{%- autoescape false %}
{{- macro.render_field(form, form.fields, '') ~ \"\\n\" }}
{%- endautoescape %}
", "forms/data.txt.twig", "/var/www/gravExpo/user/plugins/form/templates/forms/data.txt.twig");
    }
}
