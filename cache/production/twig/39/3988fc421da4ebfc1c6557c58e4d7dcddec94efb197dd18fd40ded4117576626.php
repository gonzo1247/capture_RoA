<?php

/* portal/modules/topposters_side.html */
class __TwigTemplate_29b7405f3cc74b993bdf2afea00af03dfe7104f130f88c63ab852c08ec0c9eab extends Twig_Template
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
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POSTS");
        echo "</strong></span><br class=\"portal-clear\" />
\t";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "topposters", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["topposters"]) {
            // line 5
            echo "\t\t<span class=\"portal-user-icon\"></span><span class=\"portal-user-span\">";
            echo $this->getAttribute($context["topposters"], "USERNAME_FULL", array());
            echo "</span>
\t\t<span class=\"portal-user-annotation\"><a href=\"";
            // line 6
            echo $this->getAttribute($context["topposters"], "S_SEARCH_ACTION", array());
            echo "\">";
            echo $this->getAttribute($context["topposters"], "POSTER_POSTS", array());
            echo "</a></span><br class=\"portal-clear\" />
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topposters'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "LR_BLOCK_F_L", array());
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "LR_BLOCK_F_R", array());
        echo "
";
    }

    public function getTemplateName()
    {
        return "portal/modules/topposters_side.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 8,  51 => 6,  46 => 5,  42 => 4,  38 => 3,  34 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "portal/modules/topposters_side.html", "");
    }
}
