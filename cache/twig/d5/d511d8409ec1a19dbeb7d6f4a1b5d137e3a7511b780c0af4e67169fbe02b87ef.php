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

/* forms/layouts/field/default-field.html.twig */
class __TwigTemplate_56f7ee3603583024bbaf6cea7774ebbb55094e854c4bc720cfdc7f008fec9331 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'field' => [$this, 'block_field'],
            'contents' => [$this, 'block_contents'],
            'label' => [$this, 'block_label'],
            'global_attributes' => [$this, 'block_global_attributes'],
            'group' => [$this, 'block_group'],
            'input' => [$this, 'block_input'],
            'prepend' => [$this, 'block_prepend'],
            'input_attributes' => [$this, 'block_input_attributes'],
            'append' => [$this, 'block_append'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $this->displayBlock('field', $context, $blocks);
    }

    public function block_field($context, array $blocks = [])
    {
        // line 2
        echo "<div class=\"form-field ";
        echo twig_escape_filter($this->env, twig_trim_filter(($context["layout_form_field_outer_classes"] ?? null)), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_trim_filter(($context["form_field_outer_core"] ?? null)), "html", null, true);
        echo "\">
  ";
        // line 3
        $this->displayBlock('contents', $context, $blocks);
        // line 52
        echo "</div>
";
    }

    // line 3
    public function block_contents($context, array $blocks = [])
    {
        // line 4
        echo "    ";
        if (($context["show_label"] ?? null)) {
            // line 5
            echo "      <div class=\"";
            echo twig_escape_filter($this->env, ($context["layout_form_field_outer_label_classes"] ?? null), "html", null, true);
            echo "\">";
            // line 6
            echo twig_escape_filter($this->env, ($context["form_field_toggleable"] ?? null), "html", null, true);
            // line 7
            echo "<label class=\"";
            echo twig_escape_filter($this->env, ($context["layout_form_field_label_classes"] ?? null), "html", null, true);
            echo twig_escape_filter($this->env, ($context["form_field_label_trim"] ?? null), "html", null, true);
            echo "\" ";
            if ($this->getAttribute(($context["field"] ?? null), "id", [])) {
                echo "for=\"";
                echo twig_escape_filter($this->env, ($context["form_field_for"] ?? null), "html", null, true);
                echo "\"";
            }
            echo ">";
            // line 8
            $this->displayBlock('label', $context, $blocks);
            // line 18
            echo "</label>
      </div>
    ";
        }
        // line 21
        echo "    <div class=\"";
        echo twig_escape_filter($this->env, ($context["layout_form_field_outer_data_classes"] ?? null), "html", null, true);
        echo "\"
        ";
        // line 22
        $this->displayBlock('global_attributes', $context, $blocks);
        // line 23
        echo "    >
      ";
        // line 24
        $this->displayBlock('group', $context, $blocks);
        // line 43
        echo "      ";
        if ($this->getAttribute(($context["field"] ?? null), "description", [], "any", true, true)) {
            // line 44
            echo "        <div class=\"";
            echo twig_escape_filter($this->env, ($context["form_field_extra_wrapper_classes"] ?? null), "html", null, true);
            echo "\">
          <span class=\"form-description\">
            ";
            // line 46
            echo ($context["form_field_description"] ?? null);
            echo "
          </span>
        </div>
      ";
        }
        // line 50
        echo "    </div>
  ";
    }

    // line 8
    public function block_label($context, array $blocks = [])
    {
        // line 9
        if (($context["form_field_help"] ?? null)) {
            // line 10
            echo "<span class=\"tooltip\" data-tooltip=\"";
            echo twig_escape_filter($this->env, ($context["form_field_help"] ?? null));
            echo "\">";
            echo ($context["form_field_label"] ?? null);
            echo "</span>";
        } else {
            // line 12
            echo ($context["form_field_label"] ?? null);
        }
        // line 14
        if (($context["form_field_required"] ?? null)) {
            // line 15
            echo "              <span class=\"required\">*</span>";
        }
    }

    // line 22
    public function block_global_attributes($context, array $blocks = [])
    {
    }

    // line 24
    public function block_group($context, array $blocks = [])
    {
        // line 25
        echo "        ";
        $this->displayBlock('input', $context, $blocks);
        // line 42
        echo "      ";
    }

    // line 25
    public function block_input($context, array $blocks = [])
    {
        // line 26
        echo "          <div class=\"";
        echo twig_escape_filter($this->env, ($context["layout_form_field_wrapper_classes"] ?? null), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "size", []), "html", null, true);
        echo "\">
            ";
        // line 27
        $this->displayBlock('prepend', $context, $blocks);
        // line 28
        echo "            ";
        $context["input_value"] = ((twig_test_iterable(($context["value"] ?? null))) ? (twig_join_filter(($context["value"] ?? null), ",")) : ($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->stringFilter(($context["value"] ?? null))));
        // line 29
        echo "            <input
              name=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", []))), "html", null, true);
        echo "\"
              value=\"";
        // line 31
        echo twig_escape_filter($this->env, ($context["input_value"] ?? null));
        echo "\"
              ";
        // line 32
        $this->displayBlock('input_attributes', $context, $blocks);
        // line 33
        echo "            />
            ";
        // line 34
        $this->displayBlock('append', $context, $blocks);
        // line 35
        echo "            ";
        if ((($context["inline_errors"] ?? null) && ($context["errors"] ?? null))) {
            // line 36
            echo "            <div class=\"";
            echo twig_escape_filter($this->env, ($context["form_field_inline_error_classes"] ?? null), "html", null, true);
            echo "\">
              <p class=\"form-message\"><i class=\"fa fa-exclamation-circle\"></i> ";
            // line 37
            echo twig_first($this->env, ($context["errors"] ?? null));
            echo "</p>
            </div>
            ";
        }
        // line 40
        echo "          </div>
        ";
    }

    // line 27
    public function block_prepend($context, array $blocks = [])
    {
    }

    // line 32
    public function block_input_attributes($context, array $blocks = [])
    {
    }

    // line 34
    public function block_append($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "forms/layouts/field/default-field.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  221 => 34,  216 => 32,  211 => 27,  206 => 40,  200 => 37,  195 => 36,  192 => 35,  190 => 34,  187 => 33,  185 => 32,  181 => 31,  177 => 30,  174 => 29,  171 => 28,  169 => 27,  162 => 26,  159 => 25,  155 => 42,  152 => 25,  149 => 24,  144 => 22,  139 => 15,  137 => 14,  134 => 12,  127 => 10,  125 => 9,  122 => 8,  117 => 50,  110 => 46,  104 => 44,  101 => 43,  99 => 24,  96 => 23,  94 => 22,  89 => 21,  84 => 18,  82 => 8,  71 => 7,  69 => 6,  65 => 5,  62 => 4,  59 => 3,  54 => 52,  52 => 3,  45 => 2,  39 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% block field %}
<div class=\"form-field {{ layout_form_field_outer_classes|trim }} {{ form_field_outer_core|trim}}\">
  {% block contents %}
    {% if show_label %}
      <div class=\"{{- layout_form_field_outer_label_classes -}}\">
        {{- form_field_toggleable -}}
        <label class=\"{{ layout_form_field_label_classes }}{{ form_field_label_trim }}\" {% if field.id %}for=\"{{ form_field_for }}\"{% endif %}>
          {%- block label -%}
            {%- if form_field_help -%}
              <span class=\"tooltip\" data-tooltip=\"{{ form_field_help|e }}\">{{ form_field_label|raw }}</span>
            {%- else -%}
              {{ form_field_label|raw }}
            {%- endif -%}
            {%- if form_field_required %}
              <span class=\"required\">*</span>
            {%- endif -%}
          {%- endblock -%}
        </label>
      </div>
    {% endif %}
    <div class=\"{{ layout_form_field_outer_data_classes }}\"
        {% block global_attributes %}{% endblock %}
    >
      {% block group %}
        {% block input %}
          <div class=\"{{ layout_form_field_wrapper_classes }} {{ field.size }}\">
            {% block prepend %}{% endblock prepend %}
            {% set input_value = value is iterable ? value|join(',') : value|string %}
            <input
              name=\"{{ (scope ~ field.name)|fieldName }}\"
              value=\"{{ input_value|e }}\"
              {% block input_attributes %}{% endblock %}
            />
            {% block append %}{% endblock append %}
            {% if inline_errors and errors %}
            <div class=\"{{ form_field_inline_error_classes }}\">
              <p class=\"form-message\"><i class=\"fa fa-exclamation-circle\"></i> {{ errors|first|raw }}</p>
            </div>
            {% endif %}
          </div>
        {% endblock %}
      {% endblock %}
      {% if field.description is defined %}
        <div class=\"{{ form_field_extra_wrapper_classes }}\">
          <span class=\"form-description\">
            {{ form_field_description|raw }}
          </span>
        </div>
      {% endif %}
    </div>
  {% endblock %}
</div>
{% endblock %}
", "forms/layouts/field/default-field.html.twig", "/var/www/gravExpo/user/plugins/form/templates/forms/layouts/field/default-field.html.twig");
    }
}
