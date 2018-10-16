<?php

/* portal/modules/latest_members_side.html */
class __TwigTemplate_5aa023c05def1a0ea8b101211b0ccd067f02933beccd9d669beafeab8f5b9879 extends Twig_Template
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
\t<span class=\"portal-user-span\"><strong>";
        // line 2
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USERNAME");
        echo "</strong></span>
\t<span class=\"portal-user-annotation\"><strong>";
        // line 3
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("JOINED");
        echo "</strong></span><br class=\"portal-clear\" />
\t";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "latest_members", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["latest_members"]) {
            // line 5
            echo "\t\t<span class=\"portal-user-icon\"></span><span class=\"portal-user-span\">";
            echo $this->getAttribute($context["latest_members"], "USERNAME_FULL", array());
            echo "</span>
\t\t<span class=\"portal-user-annotation\">";
            // line 6
            echo $this->getAttribute($context["latest_members"], "JOINED", array());
            echo "</span><br class=\"portal-clear\" />
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['latest_members'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "LR_BLOCK_F_L", array());
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "LR_BLOCK_F_R", array());
    }

    public function getTemplateName()
    {
        return "portal/modules/latest_members_side.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 8,  51 => 6,  46 => 5,  42 => 4,  38 => 3,  34 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "portal/modules/latest_members_side.html", "");
    }
}
