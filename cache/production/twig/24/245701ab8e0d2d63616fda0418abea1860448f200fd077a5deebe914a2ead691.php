<?php

/* portal/modules/links_side.html */
class __TwigTemplate_f4602fa8a5f4bc1b9805398ac28afa104b541126f5c788d5fc9b483c3a5bdc47 extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "portal_links", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["portal_links"]) {
            // line 2
            if (($this->getAttribute($context["portal_links"], "MODULE_ID", array()) == $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "MODULE_ID", array()))) {
                // line 3
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
\t<div class=\"portal-navigation\">
\t\t\t<ul>
\t\t\t";
                // line 6
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["portal_links"], "links", array()));
                $context['_iterated'] = false;
                foreach ($context['_seq'] as $context["_key"] => $context["links"]) {
                    // line 7
                    echo "\t\t\t\t<li><a href=\"";
                    echo $this->getAttribute($context["links"], "LINK_URL", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["links"], "LINK_TITLE", array());
                    echo "\" ";
                    if ($this->getAttribute($context["links"], "NEW_WINDOW", array())) {
                        echo "onclick=\"window.open('";
                        echo $this->getAttribute($context["links"], "LINK_URL", array());
                        echo "'); return false;\"";
                    }
                    echo ">";
                    echo $this->getAttribute($context["links"], "LINK_TITLE", array());
                    echo "</a></li>
\t\t\t";
                    $context['_iterated'] = true;
                }
                if (!$context['_iterated']) {
                    // line 9
                    echo "\t\t\t\t<span class=\"portal-title-span gensmall\"><strong>";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LINKS_NO_LINKS");
                    echo "</strong></span><br />
\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['links'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 11
                echo "\t\t\t</ul>
\t</div>
";
                // line 13
                echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "LR_BLOCK_F_L", array());
                echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "LR_BLOCK_F_R", array());
                echo "
";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['portal_links'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "portal/modules/links_side.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 13,  74 => 11,  65 => 9,  47 => 7,  42 => 6,  25 => 3,  23 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "portal/modules/links_side.html", "");
    }
}
