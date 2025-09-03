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

/* forms/fields/nonce/nonce.html.twig */
class __TwigTemplate_695fca6260f61d6a2ca5ac2650f169e611e6caad18b889eb0efbb6df1ec564ba extends \Twig\Template
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
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->nonceFieldFunc(((($this->getAttribute(($context["form"] ?? null), "getNonceAction", [], "method", true, true) &&  !(null === $this->getAttribute(($context["form"] ?? null), "getNonceAction", [], "method")))) ? ($this->getAttribute(($context["form"] ?? null), "getNonceAction", [], "method")) : ("form")), ((($this->getAttribute(($context["form"] ?? null), "getNonceName", [], "method", true, true) &&  !(null === $this->getAttribute(($context["form"] ?? null), "getNonceName", [], "method")))) ? ($this->getAttribute(($context["form"] ?? null), "getNonceName", [], "method")) : ("form-nonce")));
        echo "
";
    }

    public function getTemplateName()
    {
        return "forms/fields/nonce/nonce.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{{ nonce_field(form.getNonceAction() ?? 'form', form.getNonceName() ?? 'form-nonce')|raw }}
", "forms/fields/nonce/nonce.html.twig", "/var/www/gravExpo/user/plugins/form/templates/forms/fields/nonce/nonce.html.twig");
    }
}
