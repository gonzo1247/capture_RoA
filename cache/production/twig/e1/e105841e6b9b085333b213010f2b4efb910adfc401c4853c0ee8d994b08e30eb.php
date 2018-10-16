<?php

/* portal/modules/leaders_side.html */
class __TwigTemplate_c792259458911b7a8fd7aad8e2ba84c69c29f012bffec9eb3a4f2cf91f46a6c3 extends Twig_Template
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
\t<strong class=\"portal-user-span\">";
        // line 2
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ADMINISTRATORS");
        echo "</strong><br class=\"portal-clear\" />
\t";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "b3p_admins", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["b3p_admins"]) {
            // line 4
            echo "\t\t<span class=\"portal-user-icon\"></span><span class=\"portal-user-span\"><strong>";
            echo $this->getAttribute($context["b3p_admins"], "USERNAME_FULL", array());
            echo "</strong></span><br class=\"portal-clear\" />
\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 6
            echo "\t\t";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_ADMINISTRATORS_P");
            echo "<br /><br />
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['b3p_admins'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "\t<br class=\"portal-clear\" />
\t<strong class=\"portal-user-span\">";
        // line 9
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MODERATORS");
        echo "</strong><br class=\"portal-clear\" />
\t";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "b3p_moderators", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["b3p_moderators"]) {
            // line 11
            echo "\t\t<span class=\"portal-user-icon\"></span><span class=\"portal-user-span\"><strong>";
            echo $this->getAttribute($context["b3p_moderators"], "USERNAME_FULL", array());
            echo "</strong></span><br class=\"portal-clear\" />
\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 13
            echo "\t\t";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_MODERATORS_P");
            echo "
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['b3p_moderators'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "LR_BLOCK_F_L", array());
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "LR_BLOCK_F_R", array());
        echo "
";
    }

    public function getTemplateName()
    {
        return "portal/modules/leaders_side.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 15,  80 => 13,  72 => 11,  67 => 10,  63 => 9,  60 => 8,  51 => 6,  43 => 4,  38 => 3,  34 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "portal/modules/leaders_side.html", "");
    }
}
