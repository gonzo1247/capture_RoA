<?php

/* portal/modules/stylechanger_side.html */
class __TwigTemplate_9c0183f21ba40aed920e87ba5dfbef1e3ddc4b3cad4d43ff483e56efd9cd6996 extends Twig_Template
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
        if ((isset($context["S_STYLE_OPTIONS"]) ? $context["S_STYLE_OPTIONS"] : null)) {
            // line 2
            echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "LR_BLOCK_H_L", array());
            if ($this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "S_BLOCK_ICON", array())) {
                echo "<img src=\"";
                echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "IMAGE_SRC", array());
                echo "\" width=\"";
                echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "IMAGE_WIDTH", array());
                echo "\" height=\"";
                echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "IMAGE_HEIGHT", array());
                echo "\" alt=\"\" />&nbsp;";
            }
            echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "TITLE", array());
            echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "LR_BLOCK_H_R", array());
            echo "
\t<select class=\"portal-stylechanger-select\" name=\"demo\" id=\"demo\" role=\"listbox\" onchange=\"document.location.href = this.options[this.selectedIndex].value;\">
\t\t";
            // line 4
            echo (isset($context["STYLE_SELECT"]) ? $context["STYLE_SELECT"] : null);
            echo "
\t</select>
<br />
";
            // line 7
            echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "LR_BLOCK_F_L", array());
            echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "LR_BLOCK_F_R", array());
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "portal/modules/stylechanger_side.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  37 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "portal/modules/stylechanger_side.html", "");
    }
}
