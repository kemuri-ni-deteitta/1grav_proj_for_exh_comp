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

/* forms/inquiry.txt.twig */
class __TwigTemplate_7d6ff8596c1f96bca75710c1cd0bcc89a019303059e6e1660507ef2e97d72958 extends \Twig\Template
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
        echo "Ваше имя: ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "value", []), "name", []));
        echo "
Компания: ";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "value", []), "company", []));
        echo "
Телефон: ";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "value", []), "phone", []));
        echo "
Email: ";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "value", []), "email", []));
        echo "
Услуга: ";
        // line 5
        if (($this->getAttribute($this->getAttribute(($context["form"] ?? null), "value", []), "service", []) == "development")) {
            echo "Разработка и строительство выставочных стендов";
        } elseif (($this->getAttribute($this->getAttribute(($context["form"] ?? null), "value", []), "service", []) == "design")) {
            echo "Дизайн выставочных стендов";
        } elseif (($this->getAttribute($this->getAttribute(($context["form"] ?? null), "value", []), "service", []) == "full_service")) {
            echo "Полный выставочный сервис";
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "value", []), "service", []));
        }
        // line 6
        echo "
Бюджет проекта: ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "value", []), "budget", []));
        echo "
Описание проекта:
";
        // line 9
        echo $this->getAttribute($this->getAttribute(($context["form"] ?? null), "value", []), "message", []);
        echo "

";
        // line 11
        $context["files"] = $this->getAttribute(($context["form"] ?? null), "value", [0 => "files"], "method");
        // line 12
        if (($context["files"] ?? null)) {
            // line 13
            echo "Прикрепленные файлы: ";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["files"] ?? null)), "html", null, true);
            echo " файл(ов)
";
        }
        // line 15
        echo "
";
    }

    public function getTemplateName()
    {
        return "forms/inquiry.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 15,  74 => 13,  72 => 12,  70 => 11,  65 => 9,  60 => 7,  57 => 6,  47 => 5,  43 => 4,  39 => 3,  35 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("Ваше имя: {{ form.value.name|e }}
Компания: {{ form.value.company|e }}
Телефон: {{ form.value.phone|e }}
Email: {{ form.value.email|e }}
Услуга: {% if form.value.service == 'development' %}Разработка и строительство выставочных стендов{% elseif form.value.service == 'design' %}Дизайн выставочных стендов{% elseif form.value.service == 'full_service' %}Полный выставочный сервис{% else %}{{ form.value.service|e }}{% endif %}

Бюджет проекта: {{ form.value.budget|e }}
Описание проекта:
{{ form.value.message|raw }}

{% set files = form.value('files') %}
{% if files %}
Прикрепленные файлы: {{ files|length }} файл(ов)
{% endif %}

", "forms/inquiry.txt.twig", "/var/www/gravExpo/user/themes/quark/templates/forms/inquiry.txt.twig");
    }
}
