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

/* modular.html.twig */
class __TwigTemplate_ef02e7e4342c29dcb80726b3f59afae97b65282c24cec01510ce05a3cff41685 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'bottom' => [$this, 'block_bottom'],
            'header_navigation' => [$this, 'block_header_navigation'],
            'hero' => [$this, 'block_hero'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 3
        $context["show_onpage_menu"] = (($this->getAttribute(($context["header"] ?? null), "onpage_menu", []) == true) || (null === $this->getAttribute(($context["header"] ?? null), "onpage_menu", [])));
        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "modular.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <style>
        .main-content .content {
            font-size: 1.3rem;
            line-height: 1.8;
            color: #2c2c2c;
        }
        
        .main-content .content h1 {
            font-size: 2.5rem;
            font-weight: 700;
            color: #ff6600;
            margin-bottom: 1.5rem;
            line-height: 1.2;
        }
        
        .main-content .content h2 {
            font-size: 2rem;
            font-weight: 600;
            color: #2c2c2c;
            margin-top: 2.5rem;
            margin-bottom: 1.5rem;
            line-height: 1.3;
        }
        
        .main-content .content h3 {
            font-size: 1.5rem;
            font-weight: 600;
            color: #2c2c2c;
            margin-top: 2rem;
            margin-bottom: 1rem;
            line-height: 1.4;
        }
        
        .main-content .content p {
            font-size: 1.3rem;
            line-height: 1.8;
            margin-bottom: 1.5rem;
            color: #2c2c2c;
        }
        
        .main-content .content ul, 
        .main-content .content ol {
            font-size: 1.3rem;
            line-height: 1.8;
            margin-bottom: 1.5rem;
            color: #2c2c2c;
        }
        
        .main-content .content li {
            font-size: 1.3rem;
            line-height: 1.8;
            margin-bottom: 1rem;
            color: #2c2c2c;
        }
        
        .main-content .content strong {
            font-weight: 600;
            color: #2c2c2c;
        }
        
        .main-content .content em {
            font-style: italic;
            color: #2c2c2c;
        }
    </style>
";
    }

    // line 74
    public function block_javascripts($context, array $blocks = [])
    {
        // line 75
        echo "    ";
        if (($context["show_onpage_menu"] ?? null)) {
            // line 76
            echo "        ";
            $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://js/singlepagenav.min.js"], "method");
            // line 77
            echo "    ";
        }
        // line 78
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
    }

    // line 81
    public function block_bottom($context, array $blocks = [])
    {
        // line 82
        echo "    ";
        $this->displayParentBlock("bottom", $context, $blocks);
        echo "
    ";
        // line 83
        if (($context["show_onpage_menu"] ?? null)) {
            // line 84
            echo "        <script>
        // singlePageNav initialization & configuration
        \$('ul.navigation').singlePageNav({
            offset: \$('#header').outerHeight(),
            filter: ':not(.external)',
            updateHash: true,
            currentClass: 'active'
        });
        </script>
    ";
        }
    }

    // line 96
    public function block_header_navigation($context, array $blocks = [])
    {
        // line 97
        echo "    ";
        if (($context["show_onpage_menu"] ?? null)) {
            // line 98
            echo "        <ul class=\"navigation\">
        ";
            // line 99
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["page"] ?? null), "collection", [], "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                if ( !($this->getAttribute($this->getAttribute($context["module"], "header", []), "visible", []) === false)) {
                    // line 100
                    echo "            ";
                    $context["current_module"] = ((($this->getAttribute($context["module"], "active", []) || $this->getAttribute($context["module"], "activeChild", []))) ? ("active") : (""));
                    // line 101
                    echo "            <li><a class=\"";
                    echo twig_escape_filter($this->env, ($context["current_module"] ?? null), "html", null, true);
                    echo "\" href=\"#";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->inflectorFilter("hyphen", $this->getAttribute($context["module"], "menu", [])), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["module"], "menu", []), "html", null, true);
                    echo "</a></li>
        ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 103
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["site"] ?? null), "menu", []));
            foreach ($context['_seq'] as $context["_key"] => $context["mitem"]) {
                // line 104
                echo "            <li>
                <a ";
                // line 105
                if ($this->getAttribute($context["mitem"], "class", [])) {
                    echo "class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["mitem"], "class", []), "html", null, true);
                    echo "\"";
                }
                echo " href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["mitem"], "url", []), "html", null, true);
                echo "\">
                    ";
                // line 106
                if ($this->getAttribute($context["mitem"], "icon", [])) {
                    echo "<i class=\"fa fa-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["mitem"], "icon", []), "html", null, true);
                    echo "\"></i>";
                }
                // line 107
                echo "                    ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["mitem"], "text", []), "html", null, true);
                echo "
                </a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mitem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 111
            echo "        </ul>
    ";
        } else {
            // line 113
            echo "        ";
            $this->displayParentBlock("header_navigation", $context, $blocks);
            echo "
    ";
        }
    }

    // line 117
    public function block_hero($context, array $blocks = [])
    {
        // line 118
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["page"] ?? null), "collection", [], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            if (($this->getAttribute($context["module"], "template", []) == "modular/hero")) {
                // line 119
                echo "        <div id=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->inflectorFilter("hyphen", $this->getAttribute($context["module"], "menu", [])), "html", null, true);
                echo "\"></div>
        ";
                // line 120
                echo $this->getAttribute($context["module"], "content", []);
                echo "
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 124
    public function block_content($context, array $blocks = [])
    {
        // line 125
        echo "    ";
        // line 126
        echo "    ";
        if ($this->getAttribute(($context["page"] ?? null), "content", [])) {
            // line 127
            echo "        ";
            echo $this->getAttribute(($context["page"] ?? null), "content", []);
            echo "
    ";
        }
        // line 129
        echo "    
    ";
        // line 131
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["page"] ?? null), "collection", [], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            if (($this->getAttribute($context["module"], "template", []) != "modular/hero")) {
                // line 132
                echo "        <div id=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->inflectorFilter("hyphen", $this->getAttribute($context["module"], "menu", [])), "html", null, true);
                echo "\"></div>
        ";
                // line 133
                echo $this->getAttribute($context["module"], "content", []);
                echo "
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "modular.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  296 => 133,  291 => 132,  285 => 131,  282 => 129,  276 => 127,  273 => 126,  271 => 125,  268 => 124,  257 => 120,  252 => 119,  246 => 118,  243 => 117,  235 => 113,  231 => 111,  220 => 107,  214 => 106,  204 => 105,  201 => 104,  196 => 103,  182 => 101,  179 => 100,  174 => 99,  171 => 98,  168 => 97,  165 => 96,  151 => 84,  149 => 83,  144 => 82,  141 => 81,  134 => 78,  131 => 77,  128 => 76,  125 => 75,  122 => 74,  50 => 6,  47 => 5,  42 => 1,  40 => 3,  34 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'partials/base.html.twig' %}

{% set show_onpage_menu = header.onpage_menu == true or header.onpage_menu is null %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        .main-content .content {
            font-size: 1.3rem;
            line-height: 1.8;
            color: #2c2c2c;
        }
        
        .main-content .content h1 {
            font-size: 2.5rem;
            font-weight: 700;
            color: #ff6600;
            margin-bottom: 1.5rem;
            line-height: 1.2;
        }
        
        .main-content .content h2 {
            font-size: 2rem;
            font-weight: 600;
            color: #2c2c2c;
            margin-top: 2.5rem;
            margin-bottom: 1.5rem;
            line-height: 1.3;
        }
        
        .main-content .content h3 {
            font-size: 1.5rem;
            font-weight: 600;
            color: #2c2c2c;
            margin-top: 2rem;
            margin-bottom: 1rem;
            line-height: 1.4;
        }
        
        .main-content .content p {
            font-size: 1.3rem;
            line-height: 1.8;
            margin-bottom: 1.5rem;
            color: #2c2c2c;
        }
        
        .main-content .content ul, 
        .main-content .content ol {
            font-size: 1.3rem;
            line-height: 1.8;
            margin-bottom: 1.5rem;
            color: #2c2c2c;
        }
        
        .main-content .content li {
            font-size: 1.3rem;
            line-height: 1.8;
            margin-bottom: 1rem;
            color: #2c2c2c;
        }
        
        .main-content .content strong {
            font-weight: 600;
            color: #2c2c2c;
        }
        
        .main-content .content em {
            font-style: italic;
            color: #2c2c2c;
        }
    </style>
{% endblock %}

{% block javascripts %}
    {% if show_onpage_menu %}
        {% do assets.add('theme://js/singlepagenav.min.js') %}
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block bottom %}
    {{ parent() }}
    {% if show_onpage_menu %}
        <script>
        // singlePageNav initialization & configuration
        \$('ul.navigation').singlePageNav({
            offset: \$('#header').outerHeight(),
            filter: ':not(.external)',
            updateHash: true,
            currentClass: 'active'
        });
        </script>
    {% endif %}
{% endblock %}

{% block header_navigation %}
    {% if show_onpage_menu %}
        <ul class=\"navigation\">
        {% for module in page.collection() if module.header.visible is not same as(false) %}
            {% set current_module = (module.active or module.activeChild) ? 'active' : '' %}
            <li><a class=\"{{ current_module }}\" href=\"#{{ module.menu|hyphenize }}\">{{ module.menu }}</a></li>
        {% endfor %}
        {% for mitem in site.menu %}
            <li>
                <a {% if mitem.class %}class=\"{{ mitem.class }}\"{% endif %} href=\"{{ mitem.url }}\">
                    {% if mitem.icon %}<i class=\"fa fa-{{ mitem.icon }}\"></i>{% endif %}
                    {{ mitem.text }}
                </a>
            </li>
        {% endfor %}
        </ul>
    {% else %}
        {{  parent() }}
    {% endif %}
{% endblock %}

{% block hero %}
    {% for module in page.collection() if module.template == 'modular/hero' %}
        <div id=\"{{ module.menu|hyphenize }}\"></div>
        {{ module.content|raw }}
    {% endfor %}
{% endblock %}

{% block content %}
    {# Display main page content first #}
    {% if page.content %}
        {{ page.content|raw }}
    {% endif %}
    
    {# Then display modular content #}
    {% for module in page.collection() if module.template != 'modular/hero' %}
        <div id=\"{{ module.menu|hyphenize }}\"></div>
        {{ module.content|raw }}
    {% endfor %}
{% endblock %}
", "modular.html.twig", "/var/www/gravExpo/user/themes/quark/templates/modular.html.twig");
    }
}
