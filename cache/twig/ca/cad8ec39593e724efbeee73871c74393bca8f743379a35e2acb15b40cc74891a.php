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

/* forms/default/field.html.twig */
class __TwigTemplate_02e1d26544f6f57ac0e25af78497515461dd94c291549ad416851b4b7293fd83 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $_trait_0 = $this->loadTemplate("forms/layouts/field-variables.html.twig", "forms/default/field.html.twig", 3);
        // line 3
        if (!$_trait_0->isTraitable()) {
            throw new RuntimeError('Template "'."forms/layouts/field-variables.html.twig".'" cannot be used as a trait.', 3, $this->getSourceContext());
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'field_override_variables_before' => [$this, 'block_field_override_variables_before'],
                'outer_field_classes' => [$this, 'block_outer_field_classes'],
                'global_attributes' => [$this, 'block_global_attributes'],
                'input_attributes' => [$this, 'block_input_attributes'],
            ]
        );
    }

    protected function doGetParent(array $context)
    {
        // line 112
        return "forms/layouts/field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        if ( !$this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "ignore", [])) {
            // line 6
            $context["field_name"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", [])));
            // line 7
            $context["vertical"] = ($this->getAttribute(($context["field"] ?? null), "style", []) == "vertical");
            // line 9
            if (( !($context["blueprints"] ?? null) || (((($this->getAttribute($this->getAttribute($this->getAttribute(($context["blueprints"] ?? null), "schema", [], "any", false, true), "type", [0 => $this->getAttribute(($context["field"] ?? null), "type", [])], "method", false, true), "input@", [], "array", true, true) &&  !(null === $this->getAttribute($this->getAttribute($this->getAttribute(($context["blueprints"] ?? null), "schema", [], "any", false, true), "type", [0 => $this->getAttribute(($context["field"] ?? null), "type", [])], "method", false, true), "input@", [], "array")))) ? ($this->getAttribute($this->getAttribute($this->getAttribute(($context["blueprints"] ?? null), "schema", [], "any", false, true), "type", [0 => $this->getAttribute(($context["field"] ?? null), "type", [])], "method", false, true), "input@", [], "array")) : (true)) === true))) {
                // line 10
                $context["default"] = $this->getAttribute(($context["field"] ?? null), "default", []);
                // line 11
                $context["toggleable"] = ((($this->getAttribute(($context["field"] ?? null), "toggleable", [], "any", true, true) &&  !(null === $this->getAttribute(($context["field"] ?? null), "toggleable", [])))) ? ($this->getAttribute(($context["field"] ?? null), "toggleable", [])) : (false));
                // line 12
                if (($context["toggleable"] ?? null)) {
                    // line 13
                    $context["originalValue"] = (($context["originalValue"]) ?? (($context["value"] ?? null)));
                    // line 14
                    $context["toggleableChecked"] =  !(null === ($context["originalValue"] ?? null));
                } elseif ($this->getAttribute(                // line 15
($context["field"] ?? null), "overridable", [])) {
                    // line 16
                    $context["toggleable"] = true;
                    // line 17
                    $context["default"] = ((($this->getAttribute(($context["form"] ?? null), "getDefaultValue", [0 => $this->getAttribute(($context["field"] ?? null), "name", [])], "method", true, true) &&  !(null === $this->getAttribute(($context["form"] ?? null), "getDefaultValue", [0 => $this->getAttribute(($context["field"] ?? null), "name", [])], "method")))) ? ($this->getAttribute(($context["form"] ?? null), "getDefaultValue", [0 => $this->getAttribute(($context["field"] ?? null), "name", [])], "method")) : (($context["default"] ?? null)));
                    // line 18
                    $context["toggleableChecked"] = ( !(null === ($context["value"] ?? null)) && (($context["value"] ?? null) != ($context["default"] ?? null)));
                }
                // line 21
                $context["cookie_name"] = ((("forms-" . $this->getAttribute(($context["form"] ?? null), "name", [])) . "-") . $this->getAttribute(($context["field"] ?? null), "name", []));
                // line 22
                $context["value"] = (($context["value"]) ?? ($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->getCookie(($context["cookie_name"] ?? null))));
                // line 23
                $context["has_value"] =  !(($context["value"] ?? null) === null);
                // line 24
                if ( !($context["has_value"] ?? null)) {
                    // line 25
                    $context["value"] = ($context["default"] ?? null);
                }
                // line 28
                if ((($this->getAttribute(($context["field"] ?? null), "yaml", []) || ($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "type", []) == "yaml")) && twig_test_iterable(($context["value"] ?? null)))) {
                    // line 29
                    $context["value"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->yamlFilter(($context["value"] ?? null));
                }
            } else {
                // line 32
                $context["toggleable"] = false;
            }
            // line 36
            $context["isDisabledToggleable"] = (($context["toggleable"] ?? null) &&  !($context["toggleableChecked"] ?? null));
            // line 38
            if (($context["toggleable"] ?? null)) {
                // line 39
                ob_start();
                // line 40
                echo "    ";
                $this->loadTemplate("forms/default/toggleable.html.twig", "forms/default/field.html.twig", 40)->display(twig_array_merge($context, ["checked" => ($context["toggleableChecked"] ?? null)]));
                // line 41
                echo "  ";
                $context["form_field_toggleable"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            }
            // line 44
            $context["errors"] = $this->getAttribute($this->getAttribute(($context["form"] ?? null), "messages", []), $this->getAttribute(($context["field"] ?? null), "name", []));
            // line 45
            $context["required"] = (($context["client_side_validation"] ?? null) && twig_in_filter($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "required", []), [0 => "on", 1 => "true", 2 => 1]));
            // line 46
            $context["autofocus"] = ((($context["inline_errors"] ?? null) == false) && twig_in_filter($this->getAttribute(($context["field"] ?? null), "autofocus", []), [0 => "on", 1 => "true", 2 => 1]));
            // line 48
            if ((($context["inline_errors"] ?? null) && ($context["errors"] ?? null))) {
                // line 49
                $context["autofocus"] = true;
            }
            // line 52
            ob_start();
            // line 53
            echo "  ";
            $this->displayBlock('outer_field_classes', $context, $blocks);
            $context["embed_outer_field_classes"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 57
            if (($context["errors"] ?? null)) {
                $context["form_field_outer_core"] = (($context["form_field_outer_core"] ?? null) . " has-errors");
            }
            // line 58
            if (($context["toggleable"] ?? null)) {
                $context["form_field_outer_core"] = (($context["form_field_outer_core"] ?? null) . " form-field-toggleable");
            }
            // line 60
            $context["layout_form_field_outer_classes"] = $this->getAttribute(($context["field"] ?? null), "outerclasses", []);
            // line 61
            $context["layout_form_field_outer_classes"] = ((twig_trim_filter(($context["layout_form_field_outer_classes"] ?? null)) . " ") . ($context["form_field_outer_classes"] ?? null));
            // line 62
            $context["layout_form_field_outer_classes"] = ((twig_trim_filter(($context["layout_form_field_outer_classes"] ?? null)) . " ") . ($context["embed_outer_field_classes"] ?? null));
            // line 65
            $context["show_label"] = ( !($this->getAttribute(($context["field"] ?? null), "label", []) === false) &&  !($this->getAttribute(($context["field"] ?? null), "display_label", []) === false));
            // line 68
            $context["layout_form_field_outer_label_classes"] = twig_trim_filter(((((($context["form_field_outer_label_classes"] ?? null)) ? (($context["form_field_outer_label_classes"] ?? null)) : ("form-label")) . " ") . $this->getAttribute(($context["field"] ?? null), "labelclasses", [])));
            // line 69
            $context["layout_form_field_label_classes"] = twig_trim_filter(((($context["form_field_label_classes"] ?? null)) ? (($context["form_field_label_classes"] ?? null)) : ("inline")));
            // line 70
            $context["form_field_label_trim"] = ((($context["toggleable"] ?? null)) ? ("toggleable") : (""));
            // line 73
            $context["layout_form_field_outer_data_classes"] = twig_trim_filter(((((($context["form_field_outer_data_classes"] ?? null)) ? (($context["form_field_outer_data_classes"] ?? null)) : (" form-data")) . " ") . $this->getAttribute(($context["field"] ?? null), "dataclasses", [])));
            // line 76
            $context["layout_form_field_wrapper_classes"] = twig_trim_filter(((((($context["form_field_wrapper_classes"] ?? null)) ? (($context["form_field_wrapper_classes"] ?? null)) : (" form-input-wrapper")) . " ") . $this->getAttribute(($context["field"] ?? null), "wrapper_classes", [])));
            // line 79
            if ($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->ofTypeFunc(($context["field"] ?? null), "array")) {
                // line 80
                if ($this->getAttribute(($context["field"] ?? null), "classes", [])) {
                    // line 81
                    $context["field"] = twig_array_merge(($context["field"] ?? null), ["classes" => (($this->getAttribute(($context["field"] ?? null), "classes", []) . " ") . twig_trim_filter(                    $this->renderBlock("field_input_classes", $context, $blocks)))]);
                } else {
                    // line 83
                    $context["field"] = twig_array_merge(($context["field"] ?? null), ["classes" =>                     $this->renderBlock("field_input_classes", $context, $blocks)]);
                }
            }
            // line 86
            $context["layout_form_field_input_classes"] = twig_trim_filter(((($context["form_field_input_classes"] ?? null) . " ") . $this->getAttribute(($context["field"] ?? null), "classes", [])));
            // line 89
            $context["form_field_inline_error_classes"] = ((($context["form_field_inline_error_classes"] ?? null)) ? (($context["form_field_inline_error_classes"] ?? null)) : (" form-errors"));
            // line 92
            $context["form_field_extra_wrapper_classes"] = ("form-extra-wrapper " . $this->getAttribute(($context["field"] ?? null), "wrapper_classes", []));
            // line 95
            $context["form_field_for"] = ((($context["toggleable"] ?? null)) ? (("toggleable_" . $this->getAttribute(($context["field"] ?? null), "name", []))) : (twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "id", []))));
            // line 98
            $context["form_field_label"] = (($this->getAttribute(($context["field"] ?? null), "markdown", [])) ? ($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->markdownFunction($context, $this->getAttribute(($context["field"] ?? null), "label", []), false)) : ($this->getAttribute(($context["field"] ?? null), "label", [])));
            // line 99
            $context["form_field_label"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, ((array_key_exists("form_field_label", $context)) ? (_twig_default_filter(($context["form_field_label"] ?? null), twig_capitalize_string_filter($this->env, $this->getAttribute(($context["field"] ?? null), "name", [])))) : (twig_capitalize_string_filter($this->env, $this->getAttribute(($context["field"] ?? null), "name", [])))));
            // line 102
            if ($this->getAttribute(($context["field"] ?? null), "help", [])) {
                // line 103
                $context["form_field_help"] = (($this->getAttribute(($context["field"] ?? null), "markdown", [])) ? (twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->markdownFunction($context, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, $this->getAttribute(($context["field"] ?? null), "help", [])), false))) : (twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, $this->getAttribute(($context["field"] ?? null), "help", [])))));
            }
            // line 107
            $context["form_field_required"] = ((twig_in_filter($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "required", []), [0 => "on", 1 => "true", 2 => 1])) ? (true) : (false));
            // line 110
            $context["form_field_description"] = (($this->getAttribute(($context["field"] ?? null), "markdown", [])) ? ($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->markdownFunction($context, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, $this->getAttribute(($context["field"] ?? null), "description", [])), false)) : ($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, $this->getAttribute(($context["field"] ?? null), "description", []))));
        }
        // line 112
        $this->parent = $this->loadTemplate("forms/layouts/field.html.twig", "forms/default/field.html.twig", 112);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_field_override_variables_before($context, array $blocks = [])
    {
    }

    // line 53
    public function block_outer_field_classes($context, array $blocks = [])
    {
    }

    // line 114
    public function block_global_attributes($context, array $blocks = [])
    {
        // line 115
        echo "  data-grav-field=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "type", []), "html", null, true);
        echo "\"
  data-grav-disabled=\"";
        // line 116
        echo twig_escape_filter($this->env, (($context["toggleable"] ?? null) && ($context["toggleableChecked"] ?? null)), "html", null, true);
        echo "\"
  data-grav-default=\"";
        // line 117
        echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["default"] ?? null)), "html_attr");
        echo "\"
";
    }

    // line 120
    public function block_input_attributes($context, array $blocks = [])
    {
        // line 121
        echo "  class=\"";
        echo twig_escape_filter($this->env, twig_trim_filter(($context["layout_form_field_input_classes"] ?? null)), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "size", []), "html", null, true);
        echo "\"
  ";
        // line 122
        if ($this->getAttribute(($context["field"] ?? null), "id", [], "any", true, true)) {
            echo "id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "id", []));
            echo "\" ";
        }
        // line 123
        echo "  ";
        if ($this->getAttribute(($context["field"] ?? null), "style", [], "any", true, true)) {
            echo "style=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "style", []));
            echo "\" ";
        }
        // line 124
        echo "  ";
        if (($this->getAttribute(($context["field"] ?? null), "disabled", []) || ($context["isDisabledToggleable"] ?? null))) {
            echo "disabled=\"disabled\"";
        }
        // line 125
        echo "  ";
        if ($this->getAttribute(($context["field"] ?? null), "placeholder", [])) {
            echo "placeholder=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, $this->getAttribute(($context["field"] ?? null), "placeholder", [])), "html_attr");
            echo "\"";
        }
        // line 126
        echo "  ";
        if (($context["autofocus"] ?? null)) {
            echo "autofocus=\"autofocus\"";
        }
        // line 127
        echo "  ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "novalidate", []), [0 => "on", 1 => "true", 2 => 1])) {
            echo "novalidate=\"novalidate\"";
        }
        // line 128
        echo "  ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "readonly", []), [0 => "on", 1 => "true", 2 => 1])) {
            echo "readonly=\"readonly\"";
        }
        // line 129
        echo "  ";
        if ($this->getAttribute(($context["field"] ?? null), "autocomplete", [], "any", true, true)) {
            echo "autocomplete=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "autocomplete", []), "html", null, true);
            echo "\"";
        }
        // line 130
        echo "  ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "autocapitalize", []), [0 => "off", 1 => "characters", 2 => "words", 3 => "sentences"])) {
            echo "autocapitalize=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "autocapitalize", []), "html", null, true);
            echo "\"";
        }
        // line 131
        echo "  ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "inputmode", []), [0 => "none", 1 => "text", 2 => "decimal", 3 => "numeric", 4 => "tel", 5 => "search", 6 => "email", 7 => "url"])) {
            echo "inputmode=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "inputmode", []), "html", null, true);
            echo "\"";
        }
        // line 132
        echo "  ";
        if ($this->getAttribute(($context["field"] ?? null), "tabindex", [])) {
            echo "tabindex=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "tabindex", []), "html", null, true);
            echo "\"";
        }
        // line 133
        echo "  ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "spellcheck", []), [0 => "true", 1 => "false"])) {
            echo "spellcheck=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "spellcheck", []), "html", null, true);
            echo "\"";
        }
        // line 134
        echo "  ";
        if (($context["required"] ?? null)) {
            echo "required=\"required\"";
        }
        // line 135
        echo "  ";
        if ($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "pattern", [])) {
            echo "pattern=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "pattern", []));
            echo "\"";
        }
        // line 136
        echo "  ";
        if ($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "message", [])) {
            echo "title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, $this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "message", [])));
            echo "\"
  ";
        } elseif ($this->getAttribute(        // line 137
($context["field"] ?? null), "title", [], "any", true, true)) {
            echo "title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, $this->getAttribute(($context["field"] ?? null), "title", [])));
            echo "\" ";
        }
        // line 138
        echo "
  ";
        // line 140
        echo "  ";
        if ($this->getAttribute(($context["field"] ?? null), "attributes", [], "any", true, true)) {
            // line 141
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["field"] ?? null), "attributes", []));
            foreach ($context['_seq'] as $context["key"] => $context["attribute"]) {
                // line 142
                echo "      ";
                if ($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->ofTypeFunc($context["attribute"], "array")) {
                    // line 143
                    echo "        ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["attribute"], "name", []), "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["attribute"], "value", []), "html_attr");
                    echo "\"
      ";
                } else {
                    // line 145
                    echo "        ";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $context["attribute"], "html_attr");
                    echo "\"
      ";
                }
                // line 147
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['attribute'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 148
            echo "  ";
        }
        // line 149
        echo "
  ";
        // line 151
        echo "  ";
        if ($this->getAttribute(($context["field"] ?? null), "datasets", [])) {
            // line 152
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["field"] ?? null), "datasets", []));
            foreach ($context['_seq'] as $context["key"] => $context["attribute"]) {
                // line 153
                echo "      data-";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attribute"], "html_attr");
                echo "\"
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['attribute'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 155
            echo "  ";
        }
    }

    public function getTemplateName()
    {
        return "forms/default/field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  390 => 155,  379 => 153,  374 => 152,  371 => 151,  368 => 149,  365 => 148,  359 => 147,  351 => 145,  343 => 143,  340 => 142,  335 => 141,  332 => 140,  329 => 138,  323 => 137,  316 => 136,  309 => 135,  304 => 134,  297 => 133,  290 => 132,  283 => 131,  276 => 130,  269 => 129,  264 => 128,  259 => 127,  254 => 126,  247 => 125,  242 => 124,  235 => 123,  229 => 122,  222 => 121,  219 => 120,  213 => 117,  209 => 116,  204 => 115,  201 => 114,  196 => 53,  191 => 4,  186 => 112,  183 => 110,  181 => 107,  178 => 103,  176 => 102,  174 => 99,  172 => 98,  170 => 95,  168 => 92,  166 => 89,  164 => 86,  160 => 83,  157 => 81,  155 => 80,  153 => 79,  151 => 76,  149 => 73,  147 => 70,  145 => 69,  143 => 68,  141 => 65,  139 => 62,  137 => 61,  135 => 60,  131 => 58,  127 => 57,  123 => 53,  121 => 52,  118 => 49,  116 => 48,  114 => 46,  112 => 45,  110 => 44,  106 => 41,  103 => 40,  101 => 39,  99 => 38,  97 => 36,  94 => 32,  90 => 29,  88 => 28,  85 => 25,  83 => 24,  81 => 23,  79 => 22,  77 => 21,  74 => 18,  72 => 17,  70 => 16,  68 => 15,  66 => 14,  64 => 13,  62 => 12,  60 => 11,  58 => 10,  56 => 9,  54 => 7,  52 => 6,  50 => 1,  44 => 112,  23 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if not field.validate.ignore  %}

{% use 'forms/layouts/field-variables.html.twig' %}
{% block field_override_variables_before %}{% endblock %}

{% set field_name = (scope ~ field.name)|fieldName %}
{% set vertical = field.style == 'vertical' %}

{% if not blueprints or (blueprints.schema.type(field.type)['input@'] ?? true) is same as(true) %}
    {% set default = field.default %}
    {% set toggleable = field.toggleable ?? false %}
    {% if toggleable %}
        {% set originalValue = originalValue ?? value %}
        {% set toggleableChecked = originalValue is not null %}
    {% elseif field.overridable %}
        {% set toggleable = true %}
        {% set default = form.getDefaultValue(field.name) ?? default %}
        {% set toggleableChecked = value is not null and value != default %}
    {% endif %}

    {% set cookie_name = 'forms-' ~ form.name ~ '-' ~ field.name %}
    {% set value = value ?? get_cookie(cookie_name) %}
    {% set has_value = value is not same as(null) %}
    {% if not has_value %}
        {% set value = default %}
    {% endif %}

    {% if (field.yaml or field.validate.type == 'yaml') and value is iterable %}
        {% set value = value|yaml %}
    {% endif %}
{% else %}
    {% set toggleable = false %}
{% endif %}

{# DEPRECATED: Needed by old form fields; remove when backwards compatibility breaks are allowed #}
{% set isDisabledToggleable = toggleable and not toggleableChecked %}

{% if toggleable %}
  {% set form_field_toggleable %}
    {% include 'forms/default/toggleable.html.twig' with {checked: toggleableChecked} %}
  {% endset %}
{% endif %}

{% set errors = attribute(form.messages, field.name) %}
{% set required = client_side_validation and field.validate.required in ['on', 'true', 1] %}
{% set autofocus = (inline_errors == false) and field.autofocus in ['on', 'true', 1] %}

{% if inline_errors and errors %}
    {% set autofocus = true %}
{% endif %}

{% set embed_outer_field_classes %}
  {% block outer_field_classes %}{% endblock %}
{% endset %}

{# Field Classes #}
{%- if errors %}{% set form_field_outer_core = form_field_outer_core ~ ' has-errors'  %}{% endif -%}
{%- if toggleable %}{% set form_field_outer_core = form_field_outer_core ~ ' form-field-toggleable' %}{% endif -%}

{% set layout_form_field_outer_classes = field.outerclasses %}
{% set layout_form_field_outer_classes = layout_form_field_outer_classes|trim ~ ' ' ~ form_field_outer_classes %}
{% set layout_form_field_outer_classes = layout_form_field_outer_classes|trim ~ ' ' ~ embed_outer_field_classes %}

{# Show Label logic #}
{% set show_label = field.label is not same as(false) and field.display_label is not same as(false )%}

{# Label Classes #}
{% set layout_form_field_outer_label_classes = ((form_field_outer_label_classes ?: 'form-label') ~ ' ' ~ field.labelclasses)|trim %}
{% set layout_form_field_label_classes = (form_field_label_classes ?: 'inline')|trim %}
{% set form_field_label_trim = toggleable ? 'toggleable' %}

{# Field Outer Data classes #}
{% set layout_form_field_outer_data_classes = ((form_field_outer_data_classes ?: ' form-data') ~ ' ' ~ field.dataclasses)|trim  %}

{# Field Wrapper classes #}
{% set layout_form_field_wrapper_classes = ((form_field_wrapper_classes ?: ' form-input-wrapper') ~ ' ' ~ field.wrapper_classes)|trim %}

{# Field input classes #}
{% if field|of_type('array') %}
  {% if field.classes %}
    {% set field = field|merge({'classes': field.classes ~ ' ' ~ block('field_input_classes')|trim }) %}
  {% else %}
    {% set field = field|merge({'classes': block('field_input_classes') }) %}
  {% endif %}
{% endif %}
{% set layout_form_field_input_classes = (form_field_input_classes ~ ' ' ~ field.classes)|trim %}

{# Inline error classes #}
{% set form_field_inline_error_classes = form_field_inline_error_classes ?: ' form-errors' %}

{# Field extra classes #}
{% set form_field_extra_wrapper_classes = 'form-extra-wrapper ' ~ field.wrapper_classes %}

{# Field For #}
{% set form_field_for = toggleable ? 'toggleable_' ~ field.name : field.id|e %}

{# Field Label #}
{% set form_field_label = field.markdown ? field.label|markdown(false) : field.label %}
{% set form_field_label = form_field_label|default(field.name|capitalize)|t %}

{# Field Help #}
{% if field.help %}
    {% set form_field_help = field.markdown ? field.help|t|markdown(false)|e : field.help|t|e %}
{% endif %}

{# Field Requied #}
{% set form_field_required = field.validate.required in ['on', 'true', 1] ? true : false %}

{# Field Description #}
{% set form_field_description = field.markdown ? field.description|t|markdown(false)|raw : field.description|t|raw %}

{% extends 'forms/layouts/field.html.twig' %}

{% block global_attributes %}
  data-grav-field=\"{{ field.type }}\"
  data-grav-disabled=\"{{ toggleable and toggleableChecked }}\"
  data-grav-default=\"{{ default|json_encode()|e('html_attr') }}\"
{% endblock %}

{% block input_attributes %}
  class=\"{{ layout_form_field_input_classes|trim }} {{ field.size }}\"
  {% if field.id is defined %}id=\"{{ field.id|e }}\" {% endif %}
  {% if field.style is defined %}style=\"{{ field.style|e }}\" {% endif %}
  {% if field.disabled or isDisabledToggleable %}disabled=\"disabled\"{% endif %}
  {% if field.placeholder %}placeholder=\"{{ field.placeholder|t|e('html_attr') }}\"{% endif %}
  {% if autofocus %}autofocus=\"autofocus\"{% endif %}
  {% if field.novalidate in ['on', 'true', 1] %}novalidate=\"novalidate\"{% endif %}
  {% if field.readonly in ['on', 'true', 1] %}readonly=\"readonly\"{% endif %}
  {% if field.autocomplete is defined %}autocomplete=\"{{ field.autocomplete }}\"{% endif %}
  {% if field.autocapitalize in ['off', 'characters', 'words', 'sentences'] %}autocapitalize=\"{{ field.autocapitalize }}\"{% endif %}
  {% if field.inputmode in ['none', 'text', 'decimal', 'numeric', 'tel', 'search', 'email', 'url'] %}inputmode=\"{{ field.inputmode }}\"{% endif %}
  {% if field.tabindex %}tabindex=\"{{ field.tabindex }}\"{% endif %}
  {% if field.spellcheck in ['true', 'false'] %}spellcheck=\"{{ field.spellcheck }}\"{% endif %}
  {% if required %}required=\"required\"{% endif %}
  {% if field.validate.pattern %}pattern=\"{{ field.validate.pattern|e }}\"{% endif %}
  {% if field.validate.message %}title=\"{{ field.validate.message|t|e }}\"
  {% elseif field.title is defined %}title=\"{{ field.title|t|e }}\" {% endif %}

  {# Support key/value and .name/.value styles #}
  {% if field.attributes is defined %}
    {% for key,attribute in field.attributes %}
      {% if attribute|of_type('array') %}
        {{ attribute.name }}=\"{{ attribute.value|e('html_attr') }}\"
      {% else %}
        {{ key }}=\"{{ attribute|e('html_attr') }}\"
      {% endif %}
    {% endfor %}
  {% endif %}

  {# Support for Custom data attributes#}
  {% if field.datasets %}
    {% for key, attribute in field.datasets %}
      data-{{ key }}=\"{{ attribute|e('html_attr') }}\"
    {% endfor %}
  {% endif %}
{% endblock %}

{% endif %}
", "forms/default/field.html.twig", "/var/www/gravExpo/user/plugins/form/templates/forms/default/field.html.twig");
    }
}
