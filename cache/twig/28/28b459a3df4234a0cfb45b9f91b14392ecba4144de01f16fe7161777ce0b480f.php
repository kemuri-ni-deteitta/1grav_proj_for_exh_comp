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

/* macros/macros.html.twig */
class __TwigTemplate_27d4bada7110ef9f949c31842bb7dd7408d4715cb77ca44805a87002b9a181bd extends \Twig\Template
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
    }

    // line 1
    public function getnav_loop($__page__ = null, $__dropdown_enabled__ = true, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "page" => $__page__,
            "dropdown_enabled" => $__dropdown_enabled__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 2
            echo "  ";
            $context["macros"] = $this;
            // line 3
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "children", []), "visible", []));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 4
                echo "    ";
                $context["active_page"] = ((($this->getAttribute($context["p"], "active", []) || $this->getAttribute($context["p"], "activeChild", []))) ? ("active") : (""));
                // line 5
                echo "    ";
                $context["has_children"] = ($this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "children", []), "visible", []), "count", []) > 0);
                // line 6
                echo "    ";
                $context["is_dropdown"] = (($context["dropdown_enabled"] ?? null) && ($context["has_children"] ?? null));
                // line 7
                echo "    
    <li class=\"nav-item";
                // line 8
                if (($context["is_dropdown"] ?? null)) {
                    echo " has-dropdown";
                }
                if (($context["active_page"] ?? null)) {
                    echo " ";
                    echo twig_escape_filter($this->env, ($context["active_page"] ?? null), "html", null, true);
                }
                echo "\">
      <a href=\"";
                // line 9
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "url", []), "html", null, true);
                echo "\" class=\"nav-link";
                if (($context["active_page"] ?? null)) {
                    echo " ";
                    echo twig_escape_filter($this->env, ($context["active_page"] ?? null), "html", null, true);
                }
                if (($context["is_dropdown"] ?? null)) {
                    echo " dropdown-toggle";
                }
                echo "\">
        ";
                // line 10
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "menu", []), "html", null, true);
                echo "
        ";
                // line 11
                if (($context["is_dropdown"] ?? null)) {
                    // line 12
                    echo "          <span class=\"dropdown-arrow\">▼</span>
        ";
                }
                // line 14
                echo "      </a>
      
      ";
                // line 16
                if (($context["has_children"] ?? null)) {
                    // line 17
                    echo "        <ul class=\"dropdown-menu";
                    if ( !($context["dropdown_enabled"] ?? null)) {
                        echo " mobile-only";
                    }
                    echo "\">
          ";
                    // line 18
                    echo $context["macros"]->getnav_loop($context["p"], ($context["dropdown_enabled"] ?? null));
                    echo "
      </ul>
      ";
                }
                // line 21
                echo "    </li>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
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
        return "macros/macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 21,  110 => 18,  103 => 17,  101 => 16,  97 => 14,  93 => 12,  91 => 11,  87 => 10,  75 => 9,  65 => 8,  62 => 7,  59 => 6,  56 => 5,  53 => 4,  48 => 3,  45 => 2,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% macro nav_loop(page, dropdown_enabled = true) %}
  {% import _self as macros %}
  {% for p in page.children.visible %}
    {% set active_page = (p.active or p.activeChild) ? 'active' : '' %}
    {% set has_children = p.children.visible.count > 0 %}
    {% set is_dropdown = dropdown_enabled and has_children %}
    
    <li class=\"nav-item{% if is_dropdown %} has-dropdown{% endif %}{% if active_page %} {{ active_page }}{% endif %}\">
      <a href=\"{{ p.url }}\" class=\"nav-link{% if active_page %} {{ active_page }}{% endif %}{% if is_dropdown %} dropdown-toggle{% endif %}\">
        {{ p.menu }}
        {% if is_dropdown %}
          <span class=\"dropdown-arrow\">▼</span>
        {% endif %}
      </a>
      
      {% if has_children %}
        <ul class=\"dropdown-menu{% if not dropdown_enabled %} mobile-only{% endif %}\">
          {{ macros.nav_loop(p, dropdown_enabled) }}
      </ul>
      {% endif %}
    </li>
  {% endfor %}
{% endmacro %}", "macros/macros.html.twig", "/home/ivan/expoGroupOnServer/user/themes/quark/templates/macros/macros.html.twig");
    }
}
