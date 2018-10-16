<?php

/* @board3_portal/event/overall_footer_breadcrumb_prepend.html */
class __TwigTemplate_3a72dd18fb2af996755b8e38aa9b689068ef6630f77473b6b3754544322552ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if ((isset($context["U_PORTAL"]) ? $context["U_PORTAL"] : null)) {
            echo "<span class=\"crumb\"><a href=\"";
            echo (isset($context["U_PORTAL"]) ? $context["U_PORTAL"] : null);
            echo "\" data-navbar-reference=\"portal\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PORTAL");
            echo "</a></span>";
        }
    }

    public function getTemplateName()
    {
        return "@board3_portal/event/overall_footer_breadcrumb_prepend.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@board3_portal/event/overall_footer_breadcrumb_prepend.html", "");
    }
}
