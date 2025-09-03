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

/* partials/navigation-mobile.html.twig */
class __TwigTemplate_6199c4fb983522075e3d1befe9462a915fc76a9cd2fae19676144dd8e6cb5dea extends \Twig\Template
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
        // line 2
        $context["macros"] = $this->loadTemplate("macros/macros.html.twig", "partials/navigation-mobile.html.twig", 2)->unwrap();
        // line 3
        echo "
";
        // line 5
        $context["theme_config"] = $this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", []), $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "pages", []), "theme", []));
        // line 6
        echo "
";
        // line 8
        $context["dropdown_enabled"] = ((($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "dropdowns", [], "any", false, true), "enabled", [], "any", true, true) &&  !(null === $this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "dropdowns", [], "any", false, true), "enabled", [])))) ? ($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "dropdowns", [], "any", false, true), "enabled", [])) : (true));
        // line 9
        $context["mobile_enabled"] = ((($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "mobile", [], "any", false, true), "enabled", [], "any", true, true) &&  !(null === $this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "mobile", [], "any", false, true), "enabled", [])))) ? ($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "mobile", [], "any", false, true), "enabled", [])) : (true));
        // line 10
        echo "
";
        // line 12
        echo "<style>
/* Keep hamburger lines unchanged; only color turns orange when active */
.mobile-nav-toggle.active .nav-line-1,
.mobile-nav-toggle.active .nav-line-2,
.mobile-nav-toggle.active .nav-line {
    transform: none !important;
    background: #ff6600 !important;
}
</style>

";
        // line 23
        echo "<nav class=\"mobile-navigation\" id=\"mobile-nav\">
    <div class=\"mobile-nav-header\">
        <button class=\"mobile-nav-toggle\" id=\"mobile-nav-toggle\" aria-label=\"Toggle Mobile Navigation\">
            <span class=\"nav-line nav-line-1\"></span>
            <span class=\"nav-line nav-line-2\"></span>
        </button>
        <div class=\"mobile-nav-brand\">
            <a href=\"";
        // line 30
        (((($context["base_url"] ?? null) == "")) ? (print ("/")) : (print (twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true))));
        echo "\" aria-label=\"Home\">
                <img src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://images/logo/logo.gif"), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []), "html", null, true);
        echo "\" class=\"mobile-logo\" />
            </a>
        </div>
    </div>
    
    <div class=\"mobile-nav-content\" id=\"mobile-nav-content\">
        ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["pages"] ?? null), "children", []), "visible", []));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 38
            echo "            ";
            if (($this->getAttribute($context["p"], "slug", []) == "otpravit-zayavku")) {
                // line 39
                echo "            <div class=\"mobile-cta\">
                <a href=\"";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "url", []), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "menu", []), "html", null, true);
                echo "</a>
            </div>
            ";
            }
            // line 43
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "        <ul class=\"mobile-nav-menu\">
            ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["pages"] ?? null), "children", []), "visible", []));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 46
            echo "                ";
            $context["active_page"] = ((($this->getAttribute($context["p"], "active", []) || $this->getAttribute($context["p"], "activeChild", []))) ? ("active") : (""));
            // line 47
            echo "                ";
            $context["has_children"] = ($this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "children", []), "visible", []), "count", []) > 0);
            // line 48
            echo "                ";
            $context["show_children"] = (($context["has_children"] ?? null) && ($this->getAttribute($context["p"], "active", []) || $this->getAttribute($context["p"], "activeChild", [])));
            // line 49
            echo "                
                ";
            // line 51
            echo "                ";
            if (($this->getAttribute($context["p"], "slug", []) == "portfolio")) {
                // line 52
                echo "                    ";
                $context["visible_children"] = [];
                // line 53
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["p"], "children", []), "visible", []));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 54
                    echo "                        ";
                    if (($this->getAttribute($context["child"], "template", []) != "portfolio-item")) {
                        // line 55
                        echo "                            ";
                        $context["visible_children"] = twig_array_merge(($context["visible_children"] ?? null), [0 => $context["child"]]);
                        // line 56
                        echo "                        ";
                    }
                    // line 57
                    echo "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 58
                echo "                    ";
                $context["has_children"] = (twig_length_filter($this->env, ($context["visible_children"] ?? null)) > 0);
                // line 59
                echo "                    ";
                $context["show_children"] = (($context["has_children"] ?? null) && ($this->getAttribute($context["p"], "active", []) || $this->getAttribute($context["p"], "activeChild", [])));
                // line 60
                echo "                ";
            }
            // line 61
            echo "                
                ";
            // line 62
            if (($this->getAttribute($context["p"], "slug", []) != "otpravit-zayavku")) {
                // line 63
                echo "                <li class=\"mobile-nav-item ";
                if (($context["has_children"] ?? null)) {
                    echo "has-children";
                }
                echo "\" 
                    data-has-children=\"";
                // line 64
                echo ((($context["has_children"] ?? null)) ? ("true") : ("false"));
                echo "\">
                    <a href=\"";
                // line 65
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "url", []), "html", null, true);
                echo "\" class=\"mobile-nav-link ";
                if (($context["active_page"] ?? null)) {
                    echo "active";
                }
                echo "\">
                        ";
                // line 66
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "menu", []), "html", null, true);
                echo "
                        ";
                // line 67
                if (($context["has_children"] ?? null)) {
                    // line 68
                    echo "                            <span class=\"mobile-dropdown-arrow\">▼</span>
                        ";
                }
                // line 70
                echo "                    </a>
                    
                    ";
                // line 72
                if (($context["has_children"] ?? null)) {
                    // line 73
                    echo "                        <ul class=\"mobile-dropdown-menu\">
                            ";
                    // line 74
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["p"], "children", []), "visible", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 75
                        echo "                                ";
                        // line 76
                        echo "                                ";
                        if ( !(($this->getAttribute($context["p"], "slug", []) == "portfolio") && ($this->getAttribute($context["child"], "template", []) == "portfolio-item"))) {
                            // line 77
                            echo "                                    ";
                            $context["child_active"] = ((($this->getAttribute($context["child"], "active", []) || $this->getAttribute($context["child"], "activeChild", []))) ? ("active") : (""));
                            // line 78
                            echo "                                    ";
                            $context["child_has_children"] = ($this->getAttribute($this->getAttribute($this->getAttribute($context["child"], "children", []), "visible", []), "count", []) > 0);
                            // line 79
                            echo "                                    
                                    <li class=\"mobile-dropdown-item ";
                            // line 80
                            if (($context["child_has_children"] ?? null)) {
                                echo "has-children";
                            }
                            echo "\">
                                        <a href=\"";
                            // line 81
                            echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "url", []), "html", null, true);
                            echo "\" class=\"mobile-dropdown-link ";
                            if (($context["child_active"] ?? null)) {
                                echo "active";
                            }
                            echo "\">
                                            ";
                            // line 82
                            echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "menu", []), "html", null, true);
                            echo "
                                            ";
                            // line 83
                            if (($context["child_has_children"] ?? null)) {
                                // line 84
                                echo "                                                <span class=\"mobile-dropdown-arrow\">▶</span>
                                            ";
                            }
                            // line 86
                            echo "                                        </a>
                                        
                                        ";
                            // line 88
                            if (($context["child_has_children"] ?? null)) {
                                // line 89
                                echo "                                            <ul class=\"mobile-child-dropdown-menu\">
                                                ";
                                // line 90
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["child"], "children", []), "visible", []));
                                foreach ($context['_seq'] as $context["_key"] => $context["grandchild"]) {
                                    // line 91
                                    echo "                                                    ";
                                    $context["grandchild_active"] = ((($this->getAttribute($context["grandchild"], "active", []) || $this->getAttribute($context["grandchild"], "activeChild", []))) ? ("active") : (""));
                                    // line 92
                                    echo "                                                    <li class=\"mobile-child-dropdown-item\">
                                                        <a href=\"";
                                    // line 93
                                    echo twig_escape_filter($this->env, $this->getAttribute($context["grandchild"], "url", []), "html", null, true);
                                    echo "\" class=\"mobile-child-dropdown-link ";
                                    if (($context["grandchild_active"] ?? null)) {
                                        echo "active";
                                    }
                                    echo "\">
                                                            ";
                                    // line 94
                                    echo twig_escape_filter($this->env, $this->getAttribute($context["grandchild"], "menu", []), "html", null, true);
                                    echo "
                                                        </a>
                                                    </li>
                                                ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['grandchild'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 98
                                echo "                                            </ul>
                                        ";
                            }
                            // line 100
                            echo "                                    </li>
                                ";
                        }
                        // line 102
                        echo "                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 103
                    echo "                        </ul>
                    ";
                }
                // line 105
                echo "                </li>
                ";
            }
            // line 107
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        echo "        </ul>
    </div>
</nav>

<div class=\"mobile-nav-overlay\" id=\"mobile-nav-overlay\"></div>

";
        // line 115
        echo "<script>
document.addEventListener('DOMContentLoaded', function() {
    const mobileNavToggle = document.getElementById('mobile-nav-toggle');
    const mobileNavContent = document.getElementById('mobile-nav-content');
    const mobileNav = document.getElementById('mobile-nav');
    const overlay = document.getElementById('mobile-nav-overlay');
    let scrollPosition = 0;

    function openMobileNav() {
        mobileNavContent.classList.add('active');
        mobileNavToggle.classList.add('active');
        if (overlay) overlay.classList.add('active');
        // Lock background scroll to prevent iOS rubber-band showing page under menu
        scrollPosition = window.pageYOffset || document.documentElement.scrollTop || 0;
        document.documentElement.classList.add('mobile-nav-open');
        document.body.classList.add('mobile-nav-open');
        document.body.style.top = '-' + scrollPosition + 'px';
    }

    function closeMobileNav() {
        mobileNavContent.classList.remove('active');
        mobileNavToggle.classList.remove('active');
        if (overlay) overlay.classList.remove('active');
        // Restore background scroll position
        document.documentElement.classList.remove('mobile-nav-open');
        document.body.classList.remove('mobile-nav-open');
        document.body.style.top = '';
        if (scrollPosition) {
            window.scrollTo(0, scrollPosition);
            scrollPosition = 0;
        }
    }
    
    // Toggle mobile navigation
    if (mobileNavToggle && mobileNavContent) {
        mobileNavToggle.addEventListener('click', function() {
            if (mobileNavContent.classList.contains('active')) {
                closeMobileNav();
            } else {
                openMobileNav();
            }
        });
    }
    
    // Handle dropdown toggles
    const dropdownItems = document.querySelectorAll('.mobile-nav-item.has-children');
    dropdownItems.forEach(function(item) {
        const link = item.querySelector('.mobile-nav-link');
        const dropdown = item.querySelector('.mobile-dropdown-menu');
        
        if (link && dropdown) {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                dropdown.classList.toggle('active');
                const arrow = link.querySelector('.mobile-dropdown-arrow');
                if (arrow) {
                    arrow.style.transform = dropdown.classList.contains('active') ? 'rotate(180deg)' : 'rotate(0deg)';
                }
            });
        }
    });
    
    // Handle child dropdown toggles
    const childDropdownItems = document.querySelectorAll('.mobile-dropdown-item.has-children');
    childDropdownItems.forEach(function(item) {
        const link = item.querySelector('.mobile-dropdown-link');
        const dropdown = item.querySelector('.mobile-child-dropdown-menu');
        
        if (link && dropdown) {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                dropdown.classList.toggle('active');
                const arrow = link.querySelector('.mobile-dropdown-arrow');
                if (arrow) {
                    arrow.style.transform = dropdown.classList.contains('active') ? 'rotate(90deg)' : 'rotate(0deg)';
                }
            });
        }
    });
    
    // Touch/swipe functionality for mobile navigation
    let startX = 0;
    let startY = 0;
    let currentX = 0;
    let currentY = 0;
    let menuStartY = 0;
    
    // Touch start
    function handleTouchStart(e) {
        startX = e.touches[0].clientX;
        startY = e.touches[0].clientY;
    }
    
    // Touch move
    function handleTouchMove(e) {
        if (!startX || !startY) return;
        
        currentX = e.touches[0].clientX;
        currentY = e.touches[0].clientY;
        
        const diffX = startX - currentX;
        const diffY = startY - currentY;
        
        // Prevent default only if we're swiping horizontally
        if (Math.abs(diffX) > Math.abs(diffY) && Math.abs(diffX) > 10) {
            e.preventDefault();
        }
    }
    
    // Touch end
    function handleTouchEnd(e) {
        if (!startX || !startY) return;
        
        const diffX = startX - currentX;
        const diffY = startY - currentY;
        
        // Swipe left to open navigation
        if (diffX > 50 && Math.abs(diffY) < 50) {
            openMobileNav();
        }
        // Swipe right to close navigation
        else if (diffX < -50 && Math.abs(diffY) < 50) {
            closeMobileNav();
        }
        
        startX = 0;
        startY = 0;
        currentX = 0;
        currentY = 0;
    }
    
    // Add touch event listeners to the document
    document.addEventListener('touchstart', handleTouchStart, { passive: false });
    document.addEventListener('touchmove', handleTouchMove, { passive: false });
    document.addEventListener('touchend', handleTouchEnd, { passive: false });

    // Prevent rubber-band scrolling from leaking to the page when reaching
    // the top or bottom of the mobile menu on iOS Safari
    if (mobileNavContent) {
        mobileNavContent.addEventListener('touchstart', function(e) {
            menuStartY = e.touches[0].clientY;
        }, { passive: true });

        mobileNavContent.addEventListener('touchmove', function(e) {
            const el = mobileNavContent;
            const currentYMenu = e.touches[0].clientY;
            const isScrollingUp = currentYMenu > menuStartY;
            const atTop = el.scrollTop <= 0;
            const atBottom = Math.ceil(el.scrollTop + el.clientHeight) >= el.scrollHeight;
            if ((atTop && isScrollingUp) || (atBottom && !isScrollingUp)) {
                e.preventDefault();
            }
        }, { passive: false });
    }
    
    // Close navigation when clicking outside
    document.addEventListener('click', function(e) {
        if (!mobileNav.contains(e.target) && mobileNavContent.classList.contains('active')) {
            closeMobileNav();
        }
    });

    if (overlay) {
        overlay.addEventListener('click', function() {
            closeMobileNav();
        });
        // Prevent touchmove on overlay from scrolling the page behind on iOS
        overlay.addEventListener('touchmove', function(e) {
            e.preventDefault();
        }, { passive: false });
    }
});
</script>
";
    }

    public function getTemplateName()
    {
        return "partials/navigation-mobile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  319 => 115,  311 => 108,  305 => 107,  301 => 105,  297 => 103,  291 => 102,  287 => 100,  283 => 98,  273 => 94,  265 => 93,  262 => 92,  259 => 91,  255 => 90,  252 => 89,  250 => 88,  246 => 86,  242 => 84,  240 => 83,  236 => 82,  228 => 81,  222 => 80,  219 => 79,  216 => 78,  213 => 77,  210 => 76,  208 => 75,  204 => 74,  201 => 73,  199 => 72,  195 => 70,  191 => 68,  189 => 67,  185 => 66,  177 => 65,  173 => 64,  166 => 63,  164 => 62,  161 => 61,  158 => 60,  155 => 59,  152 => 58,  146 => 57,  143 => 56,  140 => 55,  137 => 54,  132 => 53,  129 => 52,  126 => 51,  123 => 49,  120 => 48,  117 => 47,  114 => 46,  110 => 45,  107 => 44,  101 => 43,  93 => 40,  90 => 39,  87 => 38,  83 => 37,  72 => 31,  68 => 30,  59 => 23,  47 => 12,  44 => 10,  42 => 9,  40 => 8,  37 => 6,  35 => 5,  32 => 3,  30 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{# Mobile Navigation Template - Only used on mobile devices #}
{% import 'macros/macros.html.twig' as macros %}

{# Ensure theme_config is available locally #}
{% set theme_config = attribute(config.themes, config.system.pages.theme) %}

{# Check if dropdowns are enabled in theme config #}
{% set dropdown_enabled = theme_config.dropdowns.enabled ?? true %}
{% set mobile_enabled = theme_config.mobile.enabled ?? true %}

{# Inline CSS to remove orange button immediately #}
<style>
/* Keep hamburger lines unchanged; only color turns orange when active */
.mobile-nav-toggle.active .nav-line-1,
.mobile-nav-toggle.active .nav-line-2,
.mobile-nav-toggle.active .nav-line {
    transform: none !important;
    background: #ff6600 !important;
}
</style>

{# Mobile Navigation Container with Touch Support #}
<nav class=\"mobile-navigation\" id=\"mobile-nav\">
    <div class=\"mobile-nav-header\">
        <button class=\"mobile-nav-toggle\" id=\"mobile-nav-toggle\" aria-label=\"Toggle Mobile Navigation\">
            <span class=\"nav-line nav-line-1\"></span>
            <span class=\"nav-line nav-line-2\"></span>
        </button>
        <div class=\"mobile-nav-brand\">
            <a href=\"{{ base_url == '' ? '/' : base_url }}\" aria-label=\"Home\">
                <img src=\"{{ url('theme://images/logo/logo.gif') }}\" alt=\"{{ site.title }}\" class=\"mobile-logo\" />
            </a>
        </div>
    </div>
    
    <div class=\"mobile-nav-content\" id=\"mobile-nav-content\">
        {% for p in pages.children.visible %}
            {% if p.slug == 'otpravit-zayavku' %}
            <div class=\"mobile-cta\">
                <a href=\"{{ p.url }}\">{{ p.menu }}</a>
            </div>
            {% endif %}
        {% endfor %}
        <ul class=\"mobile-nav-menu\">
            {% for p in pages.children.visible %}
                {% set active_page = (p.active or p.activeChild) ? 'active' : '' %}
                {% set has_children = p.children.visible.count > 0 %}
                {% set show_children = has_children and (p.active or p.activeChild) %}
                
                {# For portfolio pages, don't show dropdown if all children are portfolio items #}
                {% if p.slug == 'portfolio' %}
                    {% set visible_children = [] %}
                    {% for child in p.children.visible %}
                        {% if child.template != 'portfolio-item' %}
                            {% set visible_children = visible_children|merge([child]) %}
                        {% endif %}
                    {% endfor %}
                    {% set has_children = visible_children|length > 0 %}
                    {% set show_children = has_children and (p.active or p.activeChild) %}
                {% endif %}
                
                {% if p.slug != 'otpravit-zayavku' %}
                <li class=\"mobile-nav-item {% if has_children %}has-children{% endif %}\" 
                    data-has-children=\"{{ has_children ? 'true' : 'false' }}\">
                    <a href=\"{{ p.url }}\" class=\"mobile-nav-link {% if active_page %}active{% endif %}\">
                        {{ p.menu }}
                        {% if has_children %}
                            <span class=\"mobile-dropdown-arrow\">▼</span>
                        {% endif %}
                    </a>
                    
                    {% if has_children %}
                        <ul class=\"mobile-dropdown-menu\">
                            {% for child in p.children.visible %}
                                {# Skip portfolio items from navigation dropdown #}
                                {% if not (p.slug == 'portfolio' and child.template == 'portfolio-item') %}
                                    {% set child_active = (child.active or child.activeChild) ? 'active' : '' %}
                                    {% set child_has_children = child.children.visible.count > 0 %}
                                    
                                    <li class=\"mobile-dropdown-item {% if child_has_children %}has-children{% endif %}\">
                                        <a href=\"{{ child.url }}\" class=\"mobile-dropdown-link {% if child_active %}active{% endif %}\">
                                            {{ child.menu }}
                                            {% if child_has_children %}
                                                <span class=\"mobile-dropdown-arrow\">▶</span>
                                            {% endif %}
                                        </a>
                                        
                                        {% if child_has_children %}
                                            <ul class=\"mobile-child-dropdown-menu\">
                                                {% for grandchild in child.children.visible %}
                                                    {% set grandchild_active = (grandchild.active or grandchild.activeChild) ? 'active' : '' %}
                                                    <li class=\"mobile-child-dropdown-item\">
                                                        <a href=\"{{ grandchild.url }}\" class=\"mobile-child-dropdown-link {% if grandchild_active %}active{% endif %}\">
                                                            {{ grandchild.menu }}
                                                        </a>
                                                    </li>
                                                {% endfor %}
                                            </ul>
                                        {% endif %}
                                    </li>
                                {% endif %}
                            {% endfor %}
                        </ul>
                    {% endif %}
                </li>
                {% endif %}
            {% endfor %}
        </ul>
    </div>
</nav>

<div class=\"mobile-nav-overlay\" id=\"mobile-nav-overlay\"></div>

{# Mobile Navigation JavaScript #}
<script>
document.addEventListener('DOMContentLoaded', function() {
    const mobileNavToggle = document.getElementById('mobile-nav-toggle');
    const mobileNavContent = document.getElementById('mobile-nav-content');
    const mobileNav = document.getElementById('mobile-nav');
    const overlay = document.getElementById('mobile-nav-overlay');
    let scrollPosition = 0;

    function openMobileNav() {
        mobileNavContent.classList.add('active');
        mobileNavToggle.classList.add('active');
        if (overlay) overlay.classList.add('active');
        // Lock background scroll to prevent iOS rubber-band showing page under menu
        scrollPosition = window.pageYOffset || document.documentElement.scrollTop || 0;
        document.documentElement.classList.add('mobile-nav-open');
        document.body.classList.add('mobile-nav-open');
        document.body.style.top = '-' + scrollPosition + 'px';
    }

    function closeMobileNav() {
        mobileNavContent.classList.remove('active');
        mobileNavToggle.classList.remove('active');
        if (overlay) overlay.classList.remove('active');
        // Restore background scroll position
        document.documentElement.classList.remove('mobile-nav-open');
        document.body.classList.remove('mobile-nav-open');
        document.body.style.top = '';
        if (scrollPosition) {
            window.scrollTo(0, scrollPosition);
            scrollPosition = 0;
        }
    }
    
    // Toggle mobile navigation
    if (mobileNavToggle && mobileNavContent) {
        mobileNavToggle.addEventListener('click', function() {
            if (mobileNavContent.classList.contains('active')) {
                closeMobileNav();
            } else {
                openMobileNav();
            }
        });
    }
    
    // Handle dropdown toggles
    const dropdownItems = document.querySelectorAll('.mobile-nav-item.has-children');
    dropdownItems.forEach(function(item) {
        const link = item.querySelector('.mobile-nav-link');
        const dropdown = item.querySelector('.mobile-dropdown-menu');
        
        if (link && dropdown) {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                dropdown.classList.toggle('active');
                const arrow = link.querySelector('.mobile-dropdown-arrow');
                if (arrow) {
                    arrow.style.transform = dropdown.classList.contains('active') ? 'rotate(180deg)' : 'rotate(0deg)';
                }
            });
        }
    });
    
    // Handle child dropdown toggles
    const childDropdownItems = document.querySelectorAll('.mobile-dropdown-item.has-children');
    childDropdownItems.forEach(function(item) {
        const link = item.querySelector('.mobile-dropdown-link');
        const dropdown = item.querySelector('.mobile-child-dropdown-menu');
        
        if (link && dropdown) {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                dropdown.classList.toggle('active');
                const arrow = link.querySelector('.mobile-dropdown-arrow');
                if (arrow) {
                    arrow.style.transform = dropdown.classList.contains('active') ? 'rotate(90deg)' : 'rotate(0deg)';
                }
            });
        }
    });
    
    // Touch/swipe functionality for mobile navigation
    let startX = 0;
    let startY = 0;
    let currentX = 0;
    let currentY = 0;
    let menuStartY = 0;
    
    // Touch start
    function handleTouchStart(e) {
        startX = e.touches[0].clientX;
        startY = e.touches[0].clientY;
    }
    
    // Touch move
    function handleTouchMove(e) {
        if (!startX || !startY) return;
        
        currentX = e.touches[0].clientX;
        currentY = e.touches[0].clientY;
        
        const diffX = startX - currentX;
        const diffY = startY - currentY;
        
        // Prevent default only if we're swiping horizontally
        if (Math.abs(diffX) > Math.abs(diffY) && Math.abs(diffX) > 10) {
            e.preventDefault();
        }
    }
    
    // Touch end
    function handleTouchEnd(e) {
        if (!startX || !startY) return;
        
        const diffX = startX - currentX;
        const diffY = startY - currentY;
        
        // Swipe left to open navigation
        if (diffX > 50 && Math.abs(diffY) < 50) {
            openMobileNav();
        }
        // Swipe right to close navigation
        else if (diffX < -50 && Math.abs(diffY) < 50) {
            closeMobileNav();
        }
        
        startX = 0;
        startY = 0;
        currentX = 0;
        currentY = 0;
    }
    
    // Add touch event listeners to the document
    document.addEventListener('touchstart', handleTouchStart, { passive: false });
    document.addEventListener('touchmove', handleTouchMove, { passive: false });
    document.addEventListener('touchend', handleTouchEnd, { passive: false });

    // Prevent rubber-band scrolling from leaking to the page when reaching
    // the top or bottom of the mobile menu on iOS Safari
    if (mobileNavContent) {
        mobileNavContent.addEventListener('touchstart', function(e) {
            menuStartY = e.touches[0].clientY;
        }, { passive: true });

        mobileNavContent.addEventListener('touchmove', function(e) {
            const el = mobileNavContent;
            const currentYMenu = e.touches[0].clientY;
            const isScrollingUp = currentYMenu > menuStartY;
            const atTop = el.scrollTop <= 0;
            const atBottom = Math.ceil(el.scrollTop + el.clientHeight) >= el.scrollHeight;
            if ((atTop && isScrollingUp) || (atBottom && !isScrollingUp)) {
                e.preventDefault();
            }
        }, { passive: false });
    }
    
    // Close navigation when clicking outside
    document.addEventListener('click', function(e) {
        if (!mobileNav.contains(e.target) && mobileNavContent.classList.contains('active')) {
            closeMobileNav();
        }
    });

    if (overlay) {
        overlay.addEventListener('click', function() {
            closeMobileNav();
        });
        // Prevent touchmove on overlay from scrolling the page behind on iOS
        overlay.addEventListener('touchmove', function(e) {
            e.preventDefault();
        }, { passive: false });
    }
});
</script>
", "partials/navigation-mobile.html.twig", "/home/ivan/expoGroupOnServer/user/themes/quark/templates/partials/navigation-mobile.html.twig");
    }
}
