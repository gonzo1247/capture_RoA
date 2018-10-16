<?php

/* navbar.html */
class __TwigTemplate_2b411514202397d175fcb35875526c11b8edaff19ad4270ce188a807775ce9b1 extends Twig_Template
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
        echo "<div class=\"navbar\"";
        if (( !(isset($context["S_DISPLAY_SEARCH"]) ? $context["S_DISPLAY_SEARCH"] : null) || (isset($context["S_IN_SEARCH"]) ? $context["S_IN_SEARCH"] : null))) {
            echo " class=\"no-search\"";
        }
        echo ">
\t<ul id=\"nav-breadcrumbs\" class=\"nav-breadcrumbs linklist navlinks\" role=\"menubar\">
\t\t";
        // line 3
        $value = " itemtype=\"http://data-vocabulary.org/Breadcrumb\" itemscope=\"\"";
        $context['definition']->set('MICRODATA', $value);
        // line 4
        echo "\t\t";
        // line 5
        echo "\t\t<li class=\"breadcrumbs\">
\t\t\t";
        // line 6
        if ((isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null)) {
            // line 7
            echo "\t\t\t<span class=\"crumb\" ";
            echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "MICRODATA", array());
            echo "><a href=\"";
            echo (isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null);
            echo "\" itemprop=\"url\" data-navbar-reference=\"home\"><i class=\"icon fa-home fa-fw\" aria-hidden=\"true\"></i><span itemprop=\"title\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SITE_HOME");
            echo "</span></a></span>
\t\t\t";
        }
        // line 9
        echo "\t\t\t";
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('board3_portal', '__main__'));
        $this->env->loadTemplate('@board3_portal/event/overall_header_breadcrumb_prepend.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        // line 10
        echo "\t\t\t<span class=\"crumb\" ";
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "MICRODATA", array());
        echo "><a href=\"";
        echo (isset($context["U_INDEX"]) ? $context["U_INDEX"] : null);
        echo "\" itemprop=\"url\" accesskey=\"h\" data-navbar-reference=\"index\">";
        if ( !(isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null)) {
            echo "<i class=\"icon fa-home fa-fw\"></i>";
        }
        echo "<span itemprop=\"title\">";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("INDEX");
        echo "</span></a></span>

\t\t\t";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "navlinks", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["navlinks"]) {
            // line 13
            echo "\t\t\t";
            // line 14
            echo "\t\t\t<span class=\"crumb\" ";
            echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "MICRODATA", array());
            if ($this->getAttribute($context["navlinks"], "MICRODATA", array())) {
                echo " ";
                echo $this->getAttribute($context["navlinks"], "MICRODATA", array());
            }
            echo "><a href=\"";
            echo $this->getAttribute($context["navlinks"], "U_VIEW_FORUM", array());
            echo "\" itemprop=\"url\"><span itemprop=\"title\">";
            echo $this->getAttribute($context["navlinks"], "FORUM_NAME", array());
            echo "</span></a></span>
\t\t\t";
            // line 15
            // line 16
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['navlinks'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "\t\t\t";
        if ((isset($context["S_VIEWTOPIC"]) ? $context["S_VIEWTOPIC"] : null)) {
            echo "<span class=\"crumb crumb-topic\"><a href=\"";
            echo (isset($context["U_VIEW_TOPIC"]) ? $context["U_VIEW_TOPIC"] : null);
            echo "\">";
            echo (isset($context["TOPIC_TITLE"]) ? $context["TOPIC_TITLE"] : null);
            echo "</a></span>";
        }
        // line 18
        echo "\t\t\t";
        // line 19
        echo "\t\t</li>
\t\t";
        // line 20
        // line 21
        echo "\t\t";
        if (((isset($context["S_DISPLAY_SEARCH"]) ? $context["S_DISPLAY_SEARCH"] : null) &&  !(isset($context["S_IN_SEARCH"]) ? $context["S_IN_SEARCH"] : null))) {
            // line 22
            echo "\t\t<li class=\"rightside responsive-search\">
\t\t\t<a href=\"";
            // line 23
            echo (isset($context["U_SEARCH"]) ? $context["U_SEARCH"] : null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_ADV_EXPLAIN");
            echo "\" role=\"menuitem\">
\t\t\t\t<i class=\"icon fa-search fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
            // line 24
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH");
            echo "</span>
\t\t\t</a>
\t\t</li>
\t\t";
        }
        // line 28
        echo "
\t\t";
        // line 29
        if ( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) {
            // line 30
            echo "\t\t\t";
            if ((isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null)) {
                // line 31
                echo "\t\t\t\t";
                if (((isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null) && (isset($context["U_MARK_FORUMS"]) ? $context["U_MARK_FORUMS"] : null))) {
                    echo "<li class=\"rightside small-icon icon-mark-read\"><a href=\"";
                    echo (isset($context["U_MARK_FORUMS"]) ? $context["U_MARK_FORUMS"] : null);
                    echo "\" accesskey=\"m\" data-ajax=\"mark_forums_read\" title=\"";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MARK_FORUMS_READ");
                    echo "\"></a></li>";
                }
                // line 32
                echo "\t\t\t";
            } elseif ((isset($context["S_INDEX"]) ? $context["S_INDEX"] : null)) {
                // line 33
                echo "\t\t\t\t";
                if (((isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null) && (isset($context["U_MARK_FORUMS"]) ? $context["U_MARK_FORUMS"] : null))) {
                    echo "<li class=\"rightside small-icon icon-mark-read\"><a href=\"";
                    echo (isset($context["U_MARK_FORUMS"]) ? $context["U_MARK_FORUMS"] : null);
                    echo "\" accesskey=\"m\" data-ajax=\"mark_forums_read\" title=\"";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MARK_FORUMS_READ");
                    echo "\"></a></li>";
                }
                // line 34
                echo "\t\t\t";
            } elseif ((isset($context["S_VIEWFORUM"]) ? $context["S_VIEWFORUM"] : null)) {
                // line 35
                echo "\t\t\t\t";
                if (((isset($context["S_HAS_SUBFORUM"]) ? $context["S_HAS_SUBFORUM"] : null) && (isset($context["U_MARK_FORUMS"]) ? $context["U_MARK_FORUMS"] : null))) {
                    echo "<li class=\"rightside small-icon icon-mark-read\"><a href=\"";
                    echo (isset($context["U_MARK_FORUMS"]) ? $context["U_MARK_FORUMS"] : null);
                    echo "\" data-ajax=\"mark_forums_read\" title=\"";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MARK_SUBFORUMS_READ");
                    echo "\"></a></li>";
                }
                // line 36
                echo "\t\t\t";
            } elseif ((isset($context["S_VIEWTOPIC"]) ? $context["S_VIEWTOPIC"] : null)) {
                // line 37
                echo "\t\t\t\t";
                if ((isset($context["U_VIEW_UNREAD_POST"]) ? $context["U_VIEW_UNREAD_POST"] : null)) {
                    echo "<li class=\"rightside small-icon icon-view\"><a href=\"";
                    echo (isset($context["U_VIEW_UNREAD_POST"]) ? $context["U_VIEW_UNREAD_POST"] : null);
                    echo "\" title=\"";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VIEW_UNREAD_POST");
                    echo "\"></a></li>";
                }
                // line 38
                echo "\t\t\t";
            } elseif (((isset($context["SEARCH_MATCHES"]) ? $context["SEARCH_MATCHES"] : null) &&  !(isset($context["S_IN_SEARCH"]) ? $context["S_IN_SEARCH"] : null))) {
                // line 39
                echo "\t\t\t\t";
                if ((isset($context["SEARCH_TOPIC"]) ? $context["SEARCH_TOPIC"] : null)) {
                    // line 40
                    echo "\t\t\t\t\t<li class=\"rightside\"><a class=\"arrow-";
                    echo (isset($context["S_CONTENT_FLOW_BEGIN"]) ? $context["S_CONTENT_FLOW_BEGIN"] : null);
                    echo "\" href=\"";
                    echo (isset($context["U_SEARCH_TOPIC"]) ? $context["U_SEARCH_TOPIC"] : null);
                    echo "\">";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RETURN_TO_TOPIC");
                    echo "</a></li>
\t\t\t\t";
                } else {
                    // line 42
                    echo "\t\t\t\t\t<li class=\"rightside\"><a class=\"arrow-";
                    echo (isset($context["S_CONTENT_FLOW_BEGIN"]) ? $context["S_CONTENT_FLOW_BEGIN"] : null);
                    echo "\" href=\"";
                    echo (isset($context["U_SEARCH"]) ? $context["U_SEARCH"] : null);
                    echo "\" title=\"";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_ADV");
                    echo "\">";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GO_TO_SEARCH_ADV");
                    echo "</a></li>
\t\t\t\t";
                }
                // line 44
                echo "\t\t\t";
            }
            // line 45
            echo "\t\t";
        }
        // line 46
        echo "
\t</ul>
</div>";
    }

    public function getTemplateName()
    {
        return "navbar.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 46,  211 => 45,  208 => 44,  196 => 42,  186 => 40,  183 => 39,  180 => 38,  171 => 37,  168 => 36,  159 => 35,  156 => 34,  147 => 33,  144 => 32,  135 => 31,  132 => 30,  130 => 29,  127 => 28,  120 => 24,  114 => 23,  111 => 22,  108 => 21,  107 => 20,  104 => 19,  102 => 18,  93 => 17,  87 => 16,  86 => 15,  73 => 14,  71 => 13,  67 => 12,  53 => 10,  47 => 9,  37 => 7,  35 => 6,  32 => 5,  30 => 4,  27 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "navbar.html", "");
    }
}
