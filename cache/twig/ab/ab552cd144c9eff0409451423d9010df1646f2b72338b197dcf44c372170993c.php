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

/* partners.html.twig */
class __TwigTemplate_ca889e4f571fed0d1d7d2727d935173036106116a026108409c52f4cc02911ef extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'titlebar' => [$this, 'block_titlebar'],
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
        $context["grid_size"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "grid-size");
        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "partners.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_titlebar($context, array $blocks = [])
    {
        // line 6
        echo "    ";
        if ($this->getAttribute(($context["grav"] ?? null), "admin", [])) {
            // line 7
            echo "        <div class=\"button-bar\">
            <a class=\"button\" href=\"";
            // line 8
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('admin_route')->getCallable(), ["/pages"]), "html", null, true);
            echo "\"><i class=\"fa fa-reply\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.BACK"), "html", null, true);
            echo "</a>
            <button class=\"button success\" name=\"task\" value=\"save\" form=\"blueprints\" type=\"submit\" style=\"background: #77559D !important; color: white !important;\"><i class=\"fa fa-check\"></i> ";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.SAVE"), "html", null, true);
            echo "</button>
        </div>
        <h1><i class=\"fa fa-fw fa-file-text-o\"></i> ";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "title", []), "html", null, true);
            echo "</h1>
    ";
        }
    }

    // line 15
    public function block_content($context, array $blocks = [])
    {
        // line 16
        echo "    ";
        if ( !$this->getAttribute(($context["grav"] ?? null), "admin", [])) {
            // line 17
            echo "        <div class=\"content-wrapper\">
            <div class=\"container ";
            // line 18
            echo twig_escape_filter($this->env, ($context["grid_size"] ?? null), "html", null, true);
            echo "\">
                <!-- Page Content -->
                <div class=\"page-content\">
                    ";
            // line 21
            echo $this->getAttribute(($context["page"] ?? null), "content", []);
            echo "
                </div>

                <!-- Partners Section -->
                ";
            // line 25
            if ($this->getAttribute(($context["header"] ?? null), "partners", [])) {
                // line 26
                echo "                <section class=\"partners-section\">
                    <div class=\"partners-grid\">
                        ";
                // line 28
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["header"] ?? null), "partners", []));
                foreach ($context['_seq'] as $context["_key"] => $context["partner"]) {
                    // line 29
                    echo "                        <div class=\"partner-item\">
                            ";
                    // line 30
                    $context["partner_logo"] = null;
                    // line 31
                    echo "            
                            ";
                    // line 33
                    echo "                            ";
                    if ($this->getAttribute($context["partner"], "logo_upload", [])) {
                        // line 34
                        echo "                                ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["partner"], "logo_upload", []));
                        foreach ($context['_seq'] as $context["filepath"] => $context["filedata"]) {
                            // line 35
                            echo "                                    ";
                            if (( !($context["partner_logo"] ?? null) && $this->getAttribute($context["filedata"], "name", []))) {
                                // line 36
                                echo "                                        ";
                                $context["partner_logo"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute($context["filedata"], "name", []), [], "array");
                                // line 37
                                echo "                                    ";
                            }
                            // line 38
                            echo "                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['filepath'], $context['filedata'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 39
                        echo "                            ";
                    }
                    // line 40
                    echo "                            
                            ";
                    // line 42
                    echo "                            ";
                    if ($this->getAttribute($context["partner"], "company_name", [])) {
                        // line 43
                        echo "                            <h3 class=\"company-name\">
                                ";
                        // line 44
                        if ($this->getAttribute($context["partner"], "website", [])) {
                            // line 45
                            echo "                                    <a href=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["partner"], "website", []), "html", null, true);
                            echo "\" target=\"_blank\" rel=\"noopener\">";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["partner"], "company_name", []), "html", null, true);
                            echo "</a>
                                ";
                        } else {
                            // line 47
                            echo "                                    ";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["partner"], "company_name", []), "html", null, true);
                            echo "
                                ";
                        }
                        // line 49
                        echo "                            </h3>
                            ";
                    }
                    // line 51
                    echo "                            
                            ";
                    // line 52
                    if (($context["partner_logo"] ?? null)) {
                        // line 53
                        echo "                            <div class=\"partner-logo\">
                                ";
                        // line 54
                        if ($this->getAttribute($context["partner"], "website", [])) {
                            // line 55
                            echo "                                    <a href=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["partner"], "website", []), "html", null, true);
                            echo "\" target=\"_blank\" rel=\"noopener\">
                                        <img src=\"";
                            // line 56
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["partner_logo"] ?? null), "url", []), "html", null, true);
                            echo "\" 
                                             alt=\"";
                            // line 57
                            (($this->getAttribute($context["partner"], "company_name", [])) ? (print (twig_escape_filter($this->env, $this->getAttribute($context["partner"], "company_name", []), "html", null, true))) : (print ("Логотип компании")));
                            echo "\"
                                             loading=\"lazy\">
                                    </a>
                                ";
                        } else {
                            // line 61
                            echo "                                    <img src=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["partner_logo"] ?? null), "url", []), "html", null, true);
                            echo "\" 
                                         alt=\"";
                            // line 62
                            (($this->getAttribute($context["partner"], "company_name", [])) ? (print (twig_escape_filter($this->env, $this->getAttribute($context["partner"], "company_name", []), "html", null, true))) : (print ("Логотип компании")));
                            echo "\"
                                         loading=\"lazy\">
                                ";
                        }
                        // line 65
                        echo "                            </div>
                            ";
                    }
                    // line 67
                    echo "                        </div>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['partner'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 69
                echo "                    </div>
                    
                    ";
                // line 71
                if ((twig_length_filter($this->env, $this->getAttribute(($context["header"] ?? null), "partners", [])) == 0)) {
                    // line 72
                    echo "                    <div class=\"no-partners\">
                        <p>Информация о партнерах будет добавлена в ближайшее время.</p>
                    </div>
                    ";
                }
                // line 76
                echo "                </section>
                ";
            }
            // line 78
            echo "            </div>
        </div>
    ";
        }
        // line 81
        echo "
    <style>
    /* Partners Section Styles */
    .partners-section {
        margin-top: 2rem;
        padding: 1rem 0;
    }

    .partners-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 3rem;
        margin: 2rem 0;
        justify-items: center;
    }

    .partner-item {
        text-align: center;
        max-width: 320px;
        width: 100%;
    }

    .partner-logo {
        background: #ffffff;
        border: 2px solid #f0f0f0;
        border-radius: 12px;
        padding: 2rem;
        margin-top: 1rem;
        height: 180px;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
    }

    .partner-logo:hover {
        border-color: var(--primary-color);
        box-shadow: 0 4px 16px rgba(255, 102, 0, 0.15);
        transform: translateY(-2px);
    }

    .partner-logo img {
        max-width: 100%;
        max-height: 100%;
        object-fit: contain;
        transition: transform 0.3s ease;
    }

    .partner-logo:hover img {
        transform: scale(1.05);
    }

    .partner-logo a {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 100%;
        height: 100%;
    }

    /* Company name styling - positioned above the logo */
    .company-name {
        font-size: 1.3rem;          /* Same as main page text */
        font-weight: 400;            /* Same as main page text (normal weight) */
        color: var(--dark-color);   /* Same as main page text */
        margin-bottom: 1.5rem;      /* Same as main page text */
        line-height: 1.8;           /* Same as main page text */
        letter-spacing: 0;           /* Remove letter spacing to match main text */
        font-family: inherit;       /* Inherit font family from body */
    }

    .company-name a {
        color: inherit;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .company-name a:hover {
        color: var(--primary-color);
    }

    .no-partners {
        text-align: center;
        padding: 3rem 1rem;
        color: #666;
    }

    /* Mobile Responsive - Font sizes adjust for smaller screens */
    @media (max-width: 768px) {
        .partners-grid {
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 2rem;
        }
        
        .partner-logo {
            height: 150px;
            padding: 1.5rem;
        }
        
        .company-name {
            font-size: 1.2rem;       /* Smaller font size on tablets */
        }
    }

    @media (max-width: 480px) {
        .partners-grid {
            grid-template-columns: 1fr;
            gap: 2.5rem;
        }
        
        .partner-item {
            max-width: 280px;
        }
        
        .partner-logo {
            height: 140px;
            padding: 1.5rem;
        }
        
        .company-name {
            font-size: 1.1rem;       /* Even smaller font size on mobile phones */
        }
    }
    </style>
";
    }

    public function getTemplateName()
    {
        return "partners.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 81,  229 => 78,  225 => 76,  219 => 72,  217 => 71,  213 => 69,  206 => 67,  202 => 65,  196 => 62,  191 => 61,  184 => 57,  180 => 56,  175 => 55,  173 => 54,  170 => 53,  168 => 52,  165 => 51,  161 => 49,  155 => 47,  147 => 45,  145 => 44,  142 => 43,  139 => 42,  136 => 40,  133 => 39,  127 => 38,  124 => 37,  121 => 36,  118 => 35,  113 => 34,  110 => 33,  107 => 31,  105 => 30,  102 => 29,  98 => 28,  94 => 26,  92 => 25,  85 => 21,  79 => 18,  76 => 17,  73 => 16,  70 => 15,  63 => 11,  58 => 9,  52 => 8,  49 => 7,  46 => 6,  43 => 5,  38 => 1,  36 => 3,  30 => 1,);
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

{% set grid_size = theme_var('grid-size') %}

{% block titlebar %}
    {% if grav.admin %}
        <div class=\"button-bar\">
            <a class=\"button\" href=\"{{ admin_route('/pages') }}\"><i class=\"fa fa-reply\"></i> {{ \"PLUGIN_ADMIN.BACK\"|t }}</a>
            <button class=\"button success\" name=\"task\" value=\"save\" form=\"blueprints\" type=\"submit\" style=\"background: #77559D !important; color: white !important;\"><i class=\"fa fa-check\"></i> {{ \"PLUGIN_ADMIN.SAVE\"|t }}</button>
        </div>
        <h1><i class=\"fa fa-fw fa-file-text-o\"></i> {{ page.title }}</h1>
    {% endif %}
{% endblock %}

{% block content %}
    {% if not grav.admin %}
        <div class=\"content-wrapper\">
            <div class=\"container {{ grid_size }}\">
                <!-- Page Content -->
                <div class=\"page-content\">
                    {{ page.content|raw }}
                </div>

                <!-- Partners Section -->
                {% if header.partners %}
                <section class=\"partners-section\">
                    <div class=\"partners-grid\">
                        {% for partner in header.partners %}
                        <div class=\"partner-item\">
                            {% set partner_logo = null %}
            
                            {# Check for uploaded logo #}
                            {% if partner.logo_upload %}
                                {% for filepath, filedata in partner.logo_upload %}
                                    {% if not partner_logo and filedata.name %}
                                        {% set partner_logo = page.media[filedata.name] %}
                                    {% endif %}
                                {% endfor %}
                            {% endif %}
                            
                            {# Company name displayed above the logo - see CSS for font styling #}
                            {% if partner.company_name %}
                            <h3 class=\"company-name\">
                                {% if partner.website %}
                                    <a href=\"{{ partner.website }}\" target=\"_blank\" rel=\"noopener\">{{ partner.company_name }}</a>
                                {% else %}
                                    {{ partner.company_name }}
                                {% endif %}
                            </h3>
                            {% endif %}
                            
                            {% if partner_logo %}
                            <div class=\"partner-logo\">
                                {% if partner.website %}
                                    <a href=\"{{ partner.website }}\" target=\"_blank\" rel=\"noopener\">
                                        <img src=\"{{ partner_logo.url }}\" 
                                             alt=\"{{ partner.company_name ?: 'Логотип компании' }}\"
                                             loading=\"lazy\">
                                    </a>
                                {% else %}
                                    <img src=\"{{ partner_logo.url }}\" 
                                         alt=\"{{ partner.company_name ?: 'Логотип компании' }}\"
                                         loading=\"lazy\">
                                {% endif %}
                            </div>
                            {% endif %}
                        </div>
                        {% endfor %}
                    </div>
                    
                    {% if header.partners|length == 0 %}
                    <div class=\"no-partners\">
                        <p>Информация о партнерах будет добавлена в ближайшее время.</p>
                    </div>
                    {% endif %}
                </section>
                {% endif %}
            </div>
        </div>
    {% endif %}

    <style>
    /* Partners Section Styles */
    .partners-section {
        margin-top: 2rem;
        padding: 1rem 0;
    }

    .partners-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 3rem;
        margin: 2rem 0;
        justify-items: center;
    }

    .partner-item {
        text-align: center;
        max-width: 320px;
        width: 100%;
    }

    .partner-logo {
        background: #ffffff;
        border: 2px solid #f0f0f0;
        border-radius: 12px;
        padding: 2rem;
        margin-top: 1rem;
        height: 180px;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
    }

    .partner-logo:hover {
        border-color: var(--primary-color);
        box-shadow: 0 4px 16px rgba(255, 102, 0, 0.15);
        transform: translateY(-2px);
    }

    .partner-logo img {
        max-width: 100%;
        max-height: 100%;
        object-fit: contain;
        transition: transform 0.3s ease;
    }

    .partner-logo:hover img {
        transform: scale(1.05);
    }

    .partner-logo a {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 100%;
        height: 100%;
    }

    /* Company name styling - positioned above the logo */
    .company-name {
        font-size: 1.3rem;          /* Same as main page text */
        font-weight: 400;            /* Same as main page text (normal weight) */
        color: var(--dark-color);   /* Same as main page text */
        margin-bottom: 1.5rem;      /* Same as main page text */
        line-height: 1.8;           /* Same as main page text */
        letter-spacing: 0;           /* Remove letter spacing to match main text */
        font-family: inherit;       /* Inherit font family from body */
    }

    .company-name a {
        color: inherit;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .company-name a:hover {
        color: var(--primary-color);
    }

    .no-partners {
        text-align: center;
        padding: 3rem 1rem;
        color: #666;
    }

    /* Mobile Responsive - Font sizes adjust for smaller screens */
    @media (max-width: 768px) {
        .partners-grid {
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 2rem;
        }
        
        .partner-logo {
            height: 150px;
            padding: 1.5rem;
        }
        
        .company-name {
            font-size: 1.2rem;       /* Smaller font size on tablets */
        }
    }

    @media (max-width: 480px) {
        .partners-grid {
            grid-template-columns: 1fr;
            gap: 2.5rem;
        }
        
        .partner-item {
            max-width: 280px;
        }
        
        .partner-logo {
            height: 140px;
            padding: 1.5rem;
        }
        
        .company-name {
            font-size: 1.1rem;       /* Even smaller font size on mobile phones */
        }
    }
    </style>
{% endblock %} ", "partners.html.twig", "/var/www/gravExpo/user/themes/quark/templates/partners.html.twig");
    }
}
