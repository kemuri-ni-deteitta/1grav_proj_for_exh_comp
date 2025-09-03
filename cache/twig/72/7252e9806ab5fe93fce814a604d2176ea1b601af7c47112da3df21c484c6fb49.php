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

/* @Var:{% include "forms/data.txt.twig" %} */
class __TwigTemplate_94e4d9e5e7efdd82fe4bce2c9574fc4d8fe58da47135dd4537f8f00ac8e5c0cd extends \Twig\Template
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
        $this->loadTemplate("forms/data.txt.twig", "@Var:{% include \"forms/data.txt.twig\" %}", 1)->display($context);
    }

    public function getTemplateName()
    {
        return "@Var:{% include \"forms/data.txt.twig\" %}";
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
        return new Source("{% include \"forms/data.txt.twig\" %}", "@Var:{% include \"forms/data.txt.twig\" %}", "");
    }
}
