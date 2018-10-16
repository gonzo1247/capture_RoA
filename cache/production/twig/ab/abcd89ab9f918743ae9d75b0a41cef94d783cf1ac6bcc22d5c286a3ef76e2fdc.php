<?php

/* @board3_portal/event/overall_header_page_body_before.html */
class __TwigTemplate_137103765c9027b85c85d7d1706b3af476faa7311c3d8357ecf0bff4c1fbb59d extends Twig_Template
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
        if (((isset($context["S_PORTAL_ALL"]) ? $context["S_PORTAL_ALL"] : null) === true)) {
            // line 2
            echo "<div id=\"portal-page-body\">
<div id=\"portal-body\">
<div class=\"portal-body-wrapper\">
\t";
            // line 5
            $location = "portal/_block_config.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("portal/_block_config.html", "@board3_portal/event/overall_header_page_body_before.html", 5)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 6
            echo "\t<div class=\"portal-body-center\" style=\"margin: ";
            if (((isset($context["S_CONTENT_DIRECTION"]) ? $context["S_CONTENT_DIRECTION"] : null) == "rtl")) {
                echo "0 ";
                if ((isset($context["S_LEFT_COLUMN"]) ? $context["S_LEFT_COLUMN"] : null)) {
                    echo (isset($context["S_PORTAL_LEFT_COLUMN"]) ? $context["S_PORTAL_LEFT_COLUMN"] : null);
                    echo "px";
                } else {
                    echo "-";
                    echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "BLOCK_DISTANCE", array());
                }
                echo " 0 ";
                if ((isset($context["S_RIGHT_COLUMN"]) ? $context["S_RIGHT_COLUMN"] : null)) {
                    echo (isset($context["S_PORTAL_RIGHT_COLUMN"]) ? $context["S_PORTAL_RIGHT_COLUMN"] : null);
                    echo "px";
                } else {
                    echo "-";
                    echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "BLOCK_DISTANCE", array());
                }
            } else {
                echo "0 ";
                if ((isset($context["S_RIGHT_COLUMN"]) ? $context["S_RIGHT_COLUMN"] : null)) {
                    echo (isset($context["S_PORTAL_RIGHT_COLUMN"]) ? $context["S_PORTAL_RIGHT_COLUMN"] : null);
                    echo "px";
                } else {
                    echo "-";
                    echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "BLOCK_DISTANCE", array());
                }
                echo " 0 ";
                if ((isset($context["S_LEFT_COLUMN"]) ? $context["S_LEFT_COLUMN"] : null)) {
                    echo (isset($context["S_PORTAL_LEFT_COLUMN"]) ? $context["S_PORTAL_LEFT_COLUMN"] : null);
                    echo "px";
                } else {
                    echo "-";
                    echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "BLOCK_DISTANCE", array());
                }
            }
            echo "; padding: 0 ";
            echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "BLOCK_DISTANCE", array());
            echo ";\">
";
        }
    }

    public function getTemplateName()
    {
        return "@board3_portal/event/overall_header_page_body_before.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 6,  26 => 5,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@board3_portal/event/overall_header_page_body_before.html", "");
    }
}
