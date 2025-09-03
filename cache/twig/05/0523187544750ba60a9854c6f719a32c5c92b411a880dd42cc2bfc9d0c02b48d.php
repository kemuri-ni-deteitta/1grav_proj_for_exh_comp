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

/* partials/footer.html.twig */
class __TwigTemplate_468c08905fb2b449dc113d8c8958db3e01c905122aa77199929f38ee8967d1bd extends \Twig\Template
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
        $context["grid_size"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "grid-size");
        // line 2
        echo "<section id=\"footer\" class=\"section bg-footer-dark\">
    <section class=\"container ";
        // line 3
        echo twig_escape_filter($this->env, ($context["grid_size"] ?? null), "html", null, true);
        echo "\">
        <div class=\"footer-bottom\">
            <div class=\"columns\">
                <div class=\"column col-12 text-center\">
                    <p>&copy; ";
        // line 7
        $context["current_year"] = twig_date_format_filter($this->env, "now", "Y");
        $context["start_year"] = 2025;
        if ((($context["current_year"] ?? null) == ($context["start_year"] ?? null))) {
            echo twig_escape_filter($this->env, ($context["current_year"] ?? null), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, ($context["start_year"] ?? null), "html", null, true);
            echo "–";
            echo twig_escape_filter($this->env, ($context["current_year"] ?? null), "html", null, true);
        }
        echo " Expo Land. Все права защищены.</p>
                </div>
            </div>
        </div>
    </section>
</section>

<style>
#footer {
    background: #2c2c2c;
    color: #ffffff;
    padding: 1rem 0;
    margin-top: 3rem;
}

.footer-bottom {
    color: #999999;
    font-size: 0.9rem;
    text-align: center;
}

.footer-bottom p {
    margin: 0;
    padding: 0.80rem 0 0 0;
}
</style>
";
    }

    public function getTemplateName()
    {
        return "partials/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 7,  35 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set grid_size = theme_var('grid-size') %}
<section id=\"footer\" class=\"section bg-footer-dark\">
    <section class=\"container {{ grid_size }}\">
        <div class=\"footer-bottom\">
            <div class=\"columns\">
                <div class=\"column col-12 text-center\">
                    <p>&copy; {% set current_year = \"now\"|date(\"Y\") %}{% set start_year = 2025 %}{% if current_year == start_year %}{{ current_year }}{% else %}{{ start_year }}–{{ current_year }}{% endif %} Expo Land. Все права защищены.</p>
                </div>
            </div>
        </div>
    </section>
</section>

<style>
#footer {
    background: #2c2c2c;
    color: #ffffff;
    padding: 1rem 0;
    margin-top: 3rem;
}

.footer-bottom {
    color: #999999;
    font-size: 0.9rem;
    text-align: center;
}

.footer-bottom p {
    margin: 0;
    padding: 0.80rem 0 0 0;
}
</style>
", "partials/footer.html.twig", "/home/ivan/expoGroupOnServer/user/themes/quark/templates/partials/footer.html.twig");
    }
}
