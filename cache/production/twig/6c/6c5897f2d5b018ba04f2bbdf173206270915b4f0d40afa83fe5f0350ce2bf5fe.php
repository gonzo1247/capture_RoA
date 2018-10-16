<?php

/* portal/modules/welcome_center.html */
class __TwigTemplate_61fd43fa6ed463deb45774b855aea541d75d336ac1815fff731e338f79fe4fad extends Twig_Template
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
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "C_BLOCK_H_L", array());
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "TITLE", array());
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "C_BLOCK_H_R", array());
        echo "
\t<div class=\"panel bg1 portal-no-margin\">
\t\t<div class=\"inner\">
\t\t\t<div class=\"postbody portal-module-postbody\">
\t\t\t\t<div class=\"content portal-module-content\">";
        // line 5
        echo (isset($context["PORTAL_WELCOME_MSG"]) ? $context["PORTAL_WELCOME_MSG"] : null);
        echo "</div>
\t\t\t</div>
\t\t</div>
\t</div>
";
        // line 9
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "C_BLOCK_F_L", array());
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "C_BLOCK_F_R", array());
    }

    public function getTemplateName()
    {
        return "portal/modules/welcome_center.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 9,  28 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "portal/modules/welcome_center.html", "");
    }
}
