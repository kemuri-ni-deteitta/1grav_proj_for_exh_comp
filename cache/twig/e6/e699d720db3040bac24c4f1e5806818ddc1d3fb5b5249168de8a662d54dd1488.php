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

/* flex-objects/types/pages/buttons/copy.html.twig */
class __TwigTemplate_1e57dab4d8bebb7da99a837041866e04f86ad0476f396d64784607ca586ff5b1 extends \Twig\Template
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
        echo "<a id=\"titlebar-button-copy\" href=\"#modal-page-copy\" data-remodal-target=\"modal-page-copy\" class=\"button page-copy\">
    <i class=\"fa fa-copy\"></i> ";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.COPY"), "html", null, true);
        echo "
</a>
";
    }

    public function getTemplateName()
    {
        return "flex-objects/types/pages/buttons/copy.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 3,  30 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{# href=\"{{ uri.addNonce(route.withoutParams().withGravParam('task', 'copy').getUri(), 'admin-form', 'admin-nonce') }}\" #}
<a id=\"titlebar-button-copy\" href=\"#modal-page-copy\" data-remodal-target=\"modal-page-copy\" class=\"button page-copy\">
    <i class=\"fa fa-copy\"></i> {{ \"PLUGIN_ADMIN.COPY\"|tu }}
</a>
", "flex-objects/types/pages/buttons/copy.html.twig", "/home/ivan/expoGroupOnServer/user/plugins/flex-objects/admin/templates/flex-objects/types/pages/buttons/copy.html.twig");
    }
}
