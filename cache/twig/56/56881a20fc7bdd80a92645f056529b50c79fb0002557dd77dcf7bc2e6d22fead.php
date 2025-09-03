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

/* forms/fields/checkbox/checkbox.html.twig */
class __TwigTemplate_f5bce67b2739afdd81cac41ce766d1834de798adeccdc6bbac80cf504d6cde50 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'label' => [$this, 'block_label'],
            'input' => [$this, 'block_input'],
            'input_attributes' => [$this, 'block_input_attributes'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "forms/field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/checkbox/checkbox.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_label($context, array $blocks = [])
    {
    }

    // line 6
    public function block_input($context, array $blocks = [])
    {
        // line 7
        echo "    ";
        $context["id"] = (((($this->getAttribute(($context["field"] ?? null), "id", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["field"] ?? null), "id", []), $this->getAttribute(($context["field"] ?? null), "name", []))) : ($this->getAttribute(($context["field"] ?? null), "name", []))) . "-") . ($context["key"] ?? null));
        // line 8
        echo "    <div class=\"";
        ((($context["form_field_wrapper_classes"] ?? null)) ? (print (twig_escape_filter($this->env, ($context["form_field_wrapper_classes"] ?? null), "html", null, true))) : (print ("form-input-wrapper")));
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "size", []), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "wrapper_classes", []), "html", null, true);
        echo "\">
        <label class=\"";
        // line 9
        echo twig_escape_filter($this->env, ($context["form_field_checkbox_classes"] ?? null), "html", null, true);
        echo "\" for=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? null));
        echo "\">
        <input
            ";
        // line 12
        echo "            name=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", []))), "html", null, true);
        echo "\"
            value=\"";
        // line 13
        echo twig_escape_filter($this->env, twig_join_filter(($context["value"] ?? null), ", "), "html", null, true);
        echo "\"
            type=\"checkbox\"
            ";
        // line 15
        if ((($context["value"] ?? null) == true)) {
            echo " checked=\"checked\" ";
        }
        // line 16
        echo "
            ";
        // line 18
        echo "            ";
        $this->displayBlock('input_attributes', $context, $blocks);
        // line 27
        echo "            />
            <i class=\"form-icon\"></i>
            ";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, $this->getAttribute(($context["field"] ?? null), "label", [])));
        echo " ";
        echo ((twig_in_filter($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "required", []), [0 => "on", 1 => "true", 2 => 1])) ? ("<span class=\"required\">*</span>") : (""));
        echo "
        </label>
    </div>
";
    }

    // line 18
    public function block_input_attributes($context, array $blocks = [])
    {
        // line 19
        echo "                id=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? null));
        echo "\"
                ";
        // line 20
        if ($this->getAttribute(($context["field"] ?? null), "classes", [], "any", true, true)) {
            echo "class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "classes", []), "html", null, true);
            echo "\" ";
        }
        // line 21
        echo "                ";
        if ($this->getAttribute(($context["field"] ?? null), "style", [], "any", true, true)) {
            echo "style=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "style", []));
            echo "\" ";
        }
        // line 22
        echo "                ";
        if (($this->getAttribute(($context["field"] ?? null), "disabled", []) || ($context["isDisabledToggleable"] ?? null))) {
            echo "disabled=\"disabled\"";
        }
        // line 23
        echo "                ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "autofocus", []), [0 => "on", 1 => "true", 2 => 1])) {
            echo "autofocus=\"autofocus\"";
        }
        // line 24
        echo "                ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "novalidate", []), [0 => "on", 1 => "true", 2 => 1])) {
            echo "novalidate=\"novalidate\"";
        }
        // line 25
        echo "                ";
        if (($context["required"] ?? null)) {
            echo "required=\"required\"";
        }
        // line 26
        echo "            ";
    }

    public function getTemplateName()
    {
        return "forms/fields/checkbox/checkbox.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 26,  138 => 25,  133 => 24,  128 => 23,  123 => 22,  116 => 21,  110 => 20,  105 => 19,  102 => 18,  92 => 29,  88 => 27,  85 => 18,  82 => 16,  78 => 15,  73 => 13,  68 => 12,  61 => 9,  52 => 8,  49 => 7,  46 => 6,  41 => 3,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"forms/field.html.twig\" %}

{% block label %}
{% endblock %}

{% block input %}
    {% set id = field.id|default(field.name) ~ '-' ~ key %}
    <div class=\"{{ form_field_wrapper_classes ?: 'form-input-wrapper' }} {{ field.size }} {{ field.wrapper_classes }}\">
        <label class=\"{{ form_field_checkbox_classes }}\" for=\"{{ id|e }}\">
        <input
            {# required attribute structures #}
            name=\"{{ (scope ~ field.name)|fieldName }}\"
            value=\"{{ value|join(', ') }}\"
            type=\"checkbox\"
            {% if value == true %} checked=\"checked\" {% endif %}

            {# input attribute structures #}
            {% block input_attributes %}
                id=\"{{ id|e }}\"
                {% if field.classes is defined %}class=\"{{ field.classes }}\" {% endif %}
                {% if field.style is defined %}style=\"{{ field.style|e }}\" {% endif %}
                {% if field.disabled or isDisabledToggleable %}disabled=\"disabled\"{% endif %}
                {% if field.autofocus in ['on', 'true', 1] %}autofocus=\"autofocus\"{% endif %}
                {% if field.novalidate in ['on', 'true', 1] %}novalidate=\"novalidate\"{% endif %}
                {% if required %}required=\"required\"{% endif %}
            {% endblock %}
            />
            <i class=\"form-icon\"></i>
            {{ field.label|t|e }} {{ field.validate.required in ['on', 'true', 1] ? '<span class=\"required\">*</span>' }}
        </label>
    </div>
{% endblock %}
", "forms/fields/checkbox/checkbox.html.twig", "/var/www/gravExpo/user/themes/quark/templates/forms/fields/checkbox/checkbox.html.twig");
    }
}
