<?php

/* portal/modules/announcements_center.html */
class __TwigTemplate_001bd04dabe835851eab1a14acc03da9e32b85d0c354b32c8449c33132be40cb extends Twig_Template
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
";
        // line 2
        if ($this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "S_POSTBODY_TOP", array())) {
            echo "<div class=\"postbody portal-module-postbody\">";
        }
        // line 3
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "announcements", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["announcements"]) {
            // line 4
            echo "\t";
            if (($this->getAttribute($context["announcements"], "MODULE_ID", array()) == $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "MODULE_ID", array()))) {
                // line 5
                echo "\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["announcements"], "center_row", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["center_row"]) {
                    // line 6
                    echo "\t";
                    if ($this->getAttribute($context["center_row"], "S_NO_TOPICS", array())) {
                        // line 7
                        echo "\t<div class=\"post bg2\">
\t\t<div class=\"inner\">
\t\t\t<span><strong>";
                        // line 9
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_ANNOUNCEMENTS");
                        echo "</strong></span>
\t\t\t";
                    } else {
                        // line 11
                        echo "\t\t\t<div class=\"post ";
                        if (($this->getAttribute($context["center_row"], "S_ROW_COUNT", array()) % 2 == 1)) {
                            echo "bg1";
                        } else {
                            echo "bg2";
                        }
                        echo " portal-no-margin\">
\t\t\t\t<div class=\"inner\">
\t\t\t\t\t<h4 class=\"first\">
\t\t\t\t\t\t<a ";
                        // line 14
                        if ($this->getAttribute($context["center_row"], "S_FIRST_ROW", array())) {
                            echo "id=\"a_";
                            echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "MODULE_ID", array());
                            echo "\" ";
                        }
                        echo "name=\"a_";
                        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "MODULE_ID", array());
                        echo "_";
                        echo $this->getAttribute($context["center_row"], "A_ID", array());
                        echo "\"></a>";
                        if ($this->getAttribute($context["center_row"], "S_UNREAD_INFO", array())) {
                            echo "<a class=\"unread\" href=\"";
                            echo $this->getAttribute($context["center_row"], "U_VIEW_UNREAD", array());
                            echo "\" title=\"";
                            echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "MINI_POST", array());
                            echo "\">";
                        } else {
                            echo "<a href=\"";
                            echo $this->getAttribute($context["center_row"], "U_LAST_COMMENTS", array());
                            echo "\">";
                        }
                        // line 15
                        echo "\t\t\t\t\t\t<i class=\"icon fa-file fa-fw ";
                        if ($this->getAttribute($context["center_row"], "S_UNREAD_INFO", array())) {
                            echo "icon-red";
                        } else {
                            echo "icon-lightgray";
                        }
                        echo " icon-md\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                        echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "MINI_POST", array());
                        echo "</span>
\t\t\t\t\t</a>
\t\t\t\t\t\t<a ";
                        // line 17
                        if ($this->getAttribute($context["center_row"], "S_FIRST_ROW", array())) {
                            echo "id=\"a_";
                            echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "MODULE_ID", array());
                            echo "\" ";
                        }
                        echo "name=\"a_";
                        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "MODULE_ID", array());
                        echo "_";
                        echo $this->getAttribute($context["center_row"], "A_ID", array());
                        echo "\"></a>";
                        if ($this->getAttribute($context["center_row"], "S_UNREAD_INFO", array())) {
                            echo "<a class=\"unread\" href=\"";
                            echo $this->getAttribute($context["center_row"], "U_VIEW_UNREAD", array());
                            echo "\" title=\"";
                            echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "MINI_POST", array());
                            echo "\">";
                        } else {
                            echo "<a href=\"";
                            echo $this->getAttribute($context["center_row"], "U_LAST_COMMENTS", array());
                            echo "\"></a>";
                        }
                        if ($this->getAttribute($context["center_row"], "TOPIC_ICON_IMG", array())) {
                            echo "<img src=\"";
                            echo (isset($context["T_ICONS_PATH"]) ? $context["T_ICONS_PATH"] : null);
                            echo $this->getAttribute($context["center_row"], "POST_ICON_IMG", array());
                            echo "\" width=\"";
                            echo $this->getAttribute($context["center_row"], "POST_ICON_IMG_WIDTH", array());
                            echo "\" height=\"";
                            echo $this->getAttribute($context["center_row"], "POST_ICON_IMG_HEIGHT", array());
                            echo "\" alt=\"\" /> ";
                        }
                        echo "<a href=\"";
                        echo $this->getAttribute($context["center_row"], "U_VIEW_COMMENTS", array());
                        echo "\"><strong>";
                        echo $this->getAttribute($context["center_row"], "TITLE", array());
                        echo "</strong></a>
\t\t\t\t\t</h4>
\t\t\t\t\t";
                        // line 19
                        if ($this->getAttribute($context["center_row"], "PAGINATION", array())) {
                            echo "<strong class=\"pagination\"><span>";
                            echo $this->getAttribute($context["center_row"], "PAGINATION", array());
                            echo "</span></strong>";
                        }
                        // line 20
                        echo "\t\t\t\t\t<ul class=\"linklist\">
\t\t\t\t\t\t<li>";
                        // line 21
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POSTED");
                        echo " ";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_BY_AUTHOR");
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                        echo " ";
                        echo $this->getAttribute($context["center_row"], "POSTER_FULL", array());
                        echo " &raquo; <a href=\"";
                        echo $this->getAttribute($context["center_row"], "U_LAST_COMMENTS", array());
                        echo "\" title=\"";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GOTO_LAST_POST");
                        echo "\"> ";
                        echo $this->getAttribute($context["center_row"], "TIME", array());
                        echo "</a></li>
\t\t\t\t\t\t<li class=\"rightside\">";
                        // line 22
                        if ($this->getAttribute($context["center_row"], "FORUM_NAME", array())) {
                            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM");
                            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                            echo " <strong><a href=\"";
                            echo $this->getAttribute($context["center_row"], "U_VIEWFORUM", array());
                            echo "\">";
                            echo $this->getAttribute($context["center_row"], "FORUM_NAME", array());
                            echo "</a></strong>";
                        } else {
                            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GLOBAL_ANNOUNCEMENT");
                        }
                        echo "</li>
\t\t\t\t\t</ul>
\t\t\t\t\t";
                        // line 24
                        if ( !$this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "S_POSTBODY_TOP", array())) {
                            echo "<div class=\"postbody portal-module-postbody\">";
                        }
                        // line 25
                        echo "\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t<br />";
                        // line 26
                        echo $this->getAttribute($context["center_row"], "TEXT", array());
                        echo "
\t\t\t\t\t</div>
\t\t\t\t\t";
                        // line 28
                        if ($this->getAttribute($context["center_row"], "S_HAS_ATTACHMENTS", array())) {
                            // line 29
                            echo "\t\t\t\t\t<dl class=\"attachbox\">
\t\t\t\t\t\t<dt>";
                            // line 30
                            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ATTACHMENTS");
                            echo "</dt>
\t\t\t\t\t\t";
                            // line 31
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["center_row"], "attachment", array()));
                            foreach ($context['_seq'] as $context["_key"] => $context["attachment"]) {
                                // line 32
                                echo "\t\t\t\t\t\t<dd>";
                                echo $this->getAttribute($context["attachment"], "DISPLAY_ATTACHMENT", array());
                                echo "</dd>
\t\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attachment'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 34
                            echo "\t\t\t\t\t</dl>
\t\t\t\t\t";
                        }
                        // line 36
                        echo "\t\t\t\t\t<br class=\"portal-clear\" />
\t\t\t\t\t<span class=\"portal-title-span\">";
                        // line 37
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPIC_VIEWS");
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                        echo " ";
                        echo $this->getAttribute($context["center_row"], "TOPIC_VIEWS", array());
                        echo " &nbsp;&bull;&nbsp; <a href=\"";
                        echo $this->getAttribute($context["center_row"], "U_VIEW_COMMENTS", array());
                        echo "\" title=\"";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VIEW_COMMENTS");
                        echo "\">";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COMMENTS");
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                        echo " ";
                        echo $this->getAttribute($context["center_row"], "REPLIES", array());
                        echo "</a> &nbsp;&bull;&nbsp; <a href=\"";
                        echo $this->getAttribute($context["center_row"], "U_POST_COMMENT", array());
                        echo "\">";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_REPLY");
                        echo "</a></span>
\t\t\t\t\t<span class=\"portal-read-all-link\">";
                        // line 38
                        echo $this->getAttribute($context["center_row"], "OPEN", array());
                        echo "<a href=\"";
                        echo $this->getAttribute($context["center_row"], "U_READ_FULL", array());
                        echo "\">";
                        echo $this->getAttribute($context["center_row"], "L_READ_FULL", array());
                        echo "</a>";
                        echo $this->getAttribute($context["center_row"], "CLOSE", array());
                        echo "</span>
\t\t\t\t\t<div class=\"back2top\">
\t\t\t\t\t\t<a href=\"#top\" class=\"top\" title=\"";
                        // line 40
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BACK_TO_TOP");
                        echo "\">
\t\t\t\t\t\t\t<i class=\"icon fa-chevron-circle-up fa-fw icon-gray\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t<span class=\"sr-only\">";
                        // line 42
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BACK_TO_TOP");
                        echo "</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t";
                        // line 45
                        if ($this->getAttribute($context["center_row"], "S_NOT_LAST", array())) {
                            echo "<br class=\"portal-clear\" />";
                        }
                        // line 46
                        echo "\t\t\t\t\t";
                        if (($this->getAttribute($context["center_row"], "S_LAST_ROW", array()) && ($this->getAttribute($context["announcements"], "AP_PAGINATION", array()) || $this->getAttribute($context["announcements"], "TOTAL_ANNOUNCEMENTS", array())))) {
                            // line 47
                            echo "\t\t\t\t\t<hr class=\"dashed\" />
\t\t\t\t\t<div class=\"pagination\">
\t\t\t\t\t\t";
                            // line 49
                            echo $this->getAttribute($context["announcements"], "TOTAL_ANNOUNCEMENTS", array());
                            echo "
\t\t\t\t\t\t";
                            // line 50
                            if ($this->getAttribute($context["announcements"], "AP_PAGE_NUMBER", array())) {
                                if ($this->getAttribute($context["announcements"], "AP_PAGINATION", array())) {
                                    echo " &bull; ";
                                    echo $this->getAttribute($context["announcements"], "AP_PAGE_NUMBER", array());
                                    echo " &bull; ";
                                    echo $this->getAttribute($context["announcements"], "AP_PAGINATION", array());
                                } else {
                                    echo " &bull; ";
                                    echo $this->getAttribute($context["announcements"], "AP_PAGE_NUMBER", array());
                                }
                            }
                            // line 51
                            echo "\t\t\t\t\t</div>
\t\t\t\t\t";
                        }
                        // line 53
                        echo "\t\t\t\t\t";
                        if ( !$this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "S_POSTBODY_TOP", array())) {
                            echo "</div>";
                        }
                        // line 54
                        echo "\t\t\t\t\t";
                    }
                    // line 55
                    echo "\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['center_row'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 58
                echo "\t\t\t";
            }
            // line 59
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['announcements'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "S_POSTBODY_TOP", array())) {
            echo "</div>";
        }
        // line 61
        echo "\t\t";
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "C_BLOCK_F_L", array());
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "C_BLOCK_F_R", array());
        echo "
";
    }

    public function getTemplateName()
    {
        return "portal/modules/announcements_center.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  321 => 61,  316 => 60,  310 => 59,  307 => 58,  299 => 55,  296 => 54,  291 => 53,  287 => 51,  275 => 50,  271 => 49,  267 => 47,  264 => 46,  260 => 45,  254 => 42,  249 => 40,  238 => 38,  218 => 37,  215 => 36,  211 => 34,  202 => 32,  198 => 31,  194 => 30,  191 => 29,  189 => 28,  184 => 26,  181 => 25,  177 => 24,  162 => 22,  147 => 21,  144 => 20,  138 => 19,  99 => 17,  87 => 15,  65 => 14,  54 => 11,  49 => 9,  45 => 7,  42 => 6,  37 => 5,  34 => 4,  29 => 3,  25 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "portal/modules/announcements_center.html", "");
    }
}
