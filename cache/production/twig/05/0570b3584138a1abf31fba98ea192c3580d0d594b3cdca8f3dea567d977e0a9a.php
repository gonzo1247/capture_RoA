<?php

/* portal/modules/attachments_side.html */
class __TwigTemplate_b1c84fc660d82c96645ebfe1db6e4338a6b2910f9498ed9469c08225a5980e47 extends Twig_Template
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
\t";
        // line 2
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "attach_side", array()))) {
            // line 3
            echo "\t\t<span class=\"portal-title-span\"><strong>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FILENAME");
            echo "</strong></span><br />
\t\t";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "attach_side", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["attach_side"]) {
                // line 5
                echo "\t\t\t<span class=\"portal-title-span portal-gensmall icon fa-paperclip fa-fw\" aria-hidden=\"true\">&nbsp;</span>&nbsp;<a class=\"portal-title-link\" href=\"";
                echo $this->getAttribute($context["attach_side"], "U_TOPIC", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["attach_side"], "REAL_FILENAME", array());
                echo "\"><strong>";
                echo $this->getAttribute($context["attach_side"], "FILENAME", array());
                echo "</strong></a><br class=\"portal-clear\" />
\t\t\t<span class=\"portal-text-span\">";
                // line 6
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FILESIZE");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</span><span class=\"portal-data-span portal-gensmall\"><strong>";
                echo $this->getAttribute($context["attach_side"], "FILESIZE", array());
                echo "</strong></span><br class=\"portal-clear\" />
\t\t\t<span class=\"portal-text-span\">";
                // line 7
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DOWNLOADS");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</span><span class=\"portal-data-span portal-gensmall\"><strong>";
                echo $this->getAttribute($context["attach_side"], "DOWNLOAD_COUNT", array());
                echo "</strong></span><br class=\"portal-clear\" />
\t\t\t";
                // line 8
                if ( !$this->getAttribute($context["attach_side"], "S_LAST_ROW", array())) {
                    echo "<hr class=\"dashed\" />";
                }
                // line 9
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attach_side'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "\t";
        } else {
            // line 11
            echo "\t\t<span class=\"portal-title-span portal-gensmall\"><strong>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_ATTACHMENTS");
            echo "</strong></span><br />
\t";
        }
        // line 13
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "LR_BLOCK_F_L", array());
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "LR_BLOCK_F_R", array());
        echo "
";
    }

    public function getTemplateName()
    {
        return "portal/modules/attachments_side.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 13,  81 => 11,  78 => 10,  72 => 9,  68 => 8,  61 => 7,  54 => 6,  45 => 5,  41 => 4,  36 => 3,  34 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "portal/modules/attachments_side.html", "");
    }
}
