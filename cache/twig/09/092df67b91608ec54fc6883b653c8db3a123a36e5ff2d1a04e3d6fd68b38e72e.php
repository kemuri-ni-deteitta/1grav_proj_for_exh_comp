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

/* @Var:Спасибо за заявку! Мы свяжемся с вами в ближайшее время. */
class __TwigTemplate_dfccf8aa3c93969c427b97c9b7b45115d8d58fbba3cf8353f8385e3591d980e7 extends \Twig\Template
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
        echo "Спасибо за заявку! Мы свяжемся с вами в ближайшее время.";
    }

    public function getTemplateName()
    {
        return "@Var:Спасибо за заявку! Мы свяжемся с вами в ближайшее время.";
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
        return new Source("Спасибо за заявку! Мы свяжемся с вами в ближайшее время.", "@Var:Спасибо за заявку! Мы свяжемся с вами в ближайшее время.", "");
    }
}
