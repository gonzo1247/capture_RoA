<?php

/* portal/modules/news_compact_center.html */
class __TwigTemplate_3d94b5e042c475b1d9a53194ed9d4bc054de26b07865fcc6e9ca011c9e75b0a0 extends Twig_Template
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "news", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["news"]) {
            // line 2
            if (($this->getAttribute($context["news"], "MODULE_ID", array()) == $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "MODULE_ID", array()))) {
                // line 3
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["news"], "news_row", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["news_row"]) {
                    // line 4
                    if ($this->getAttribute($context["news_row"], "S_NO_TOPICS", array())) {
                        // line 5
                        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "C_BLOCK_H_L", array());
                        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "TITLE", array());
                        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "C_BLOCK_H_R", array());
                        echo "
<div class=\"post bg2 portal-no-margin\">
\t<div class=\"inner\">
\t\t<span><strong>";
                        // line 8
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_NEWS");
                        echo "</strong></span>
\t</div>
</div>
";
                        // line 11
                        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "C_BLOCK_F_L", array());
                        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "C_BLOCK_F_R", array());
                        echo "
";
                    } else {
                        // line 13
                        if ($this->getAttribute($context["news_row"], "S_FIRST_ROW", array())) {
                            // line 14
                            echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "CC_BLOCK_H_L", array());
                            echo "
<dt id=\"n_";
                            // line 15
                            echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "MODULE_ID", array());
                            echo "\">";
                            echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "TITLE", array());
                            echo "</dt>
";
                            // line 16
                            if ($this->getAttribute($context["news"], "S_DISPLAY_NEWS_RVS", array())) {
                                // line 17
                                echo "<dd class=\"posts responsive-portal-news\">";
                                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REPLIES");
                                echo "</dd>
<dd class=\"views responsive-portal-news\">";
                                // line 18
                                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VIEWS");
                                echo "</dd>
";
                            }
                            // line 20
                            echo "<dd class=\"lastpost responsive-portal-news\"><span>";
                            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LAST_POST");
                            echo "</span></dd>
";
                            // line 21
                            echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "CC_BLOCK_H_R", array());
                            echo "
<ul class=\"topiclist topics responsive-portal-news\">
\t";
                        }
                        // line 24
                        echo "\t<li class=\"row";
                        if (($this->getAttribute($context["news_row"], "S_ROW_COUNT", array()) % 2 == 0)) {
                            echo " bg1";
                        } else {
                            echo " bg2";
                        }
                        echo "\">
\t\t<dl class=\"row-item ";
                        // line 25
                        echo $this->getAttribute($context["news_row"], "TOPIC_IMG_STYLE", array());
                        echo "\">
\t\t\t<dt";
                        // line 26
                        if (($this->getAttribute($context["news_row"], "TOPIC_ICON_IMG", array()) && (isset($context["S_TOPIC_ICONS"]) ? $context["S_TOPIC_ICONS"] : null))) {
                            echo " style=\"background-image: url(";
                            echo (isset($context["T_ICONS_PATH"]) ? $context["T_ICONS_PATH"] : null);
                            echo $this->getAttribute($context["news_row"], "TOPIC_ICON_IMG", array());
                            echo "); background-repeat: no-repeat;\"";
                        }
                        echo " title=\"";
                        echo $this->getAttribute($context["news_row"], "TOPIC_FOLDER_IMG_ALT", array());
                        echo "\">
\t\t\t";
                        // line 27
                        if (($this->getAttribute($context["news_row"], "S_UNREAD_INFO", array()) &&  !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null))) {
                            echo "<a href=\"";
                            echo $this->getAttribute($context["news_row"], "U_VIEW_UNREAD", array());
                            echo "\" class=\"row-item-link\"></a>";
                        }
                        // line 28
                        echo "\t\t\t<div class=\"list-inner\">
\t\t\t\t<a href=\"";
                        // line 29
                        echo $this->getAttribute($context["news_row"], "U_VIEW_COMMENTS", array());
                        echo "\" title=\"";
                        echo $this->getAttribute($context["news_row"], "TITLE", array());
                        echo "\" class=\"topictitle\">";
                        echo $this->getAttribute($context["news_row"], "TITLE", array());
                        echo "</a>";
                        if (((isset($context["U_VIEW_UNREAD_POST"]) ? $context["U_VIEW_UNREAD_POST"] : null) &&  !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null))) {
                            echo " &bull; <a href=\"";
                            echo (isset($context["U_VIEW_UNREAD_POST"]) ? $context["U_VIEW_UNREAD_POST"] : null);
                            echo "\">";
                            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VIEW_UNREAD_POST");
                            echo "</a> &bull; ";
                        }
                        // line 30
                        echo "\t\t\t\t";
                        if ($this->getAttribute($context["news_row"], "pagination", array())) {
                            // line 31
                            echo "\t\t\t\t<div class=\"pagination\">
\t\t\t\t\t<span><i class=\"icon fa-clone fa-fw\" aria-hidden=\"true\"></i></span>
\t\t\t\t\t<ul>
\t\t\t\t\t\t";
                            // line 34
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["news_row"], "pagination", array()));
                            foreach ($context['_seq'] as $context["_key"] => $context["pagination"]) {
                                // line 35
                                echo "\t\t\t\t\t\t";
                                if ($this->getAttribute($context["pagination"], "S_IS_PREV", array())) {
                                    // line 36
                                    echo "\t\t\t\t\t\t";
                                } elseif ($this->getAttribute($context["pagination"], "S_IS_CURRENT", array())) {
                                    echo "<li><a class=\"button\" href=\"";
                                    echo $this->getAttribute($context["pagination"], "PAGE_URL", array());
                                    echo "\">";
                                    echo $this->getAttribute($context["pagination"], "PAGE_NUMBER", array());
                                    echo "</a></li>
\t\t\t\t\t\t";
                                } elseif ($this->getAttribute(                                // line 37
$context["pagination"], "S_IS_ELLIPSIS", array())) {
                                    echo "<li class=\"ellipsis\"><span>";
                                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ELLIPSIS");
                                    echo "</span></li>
\t\t\t\t\t\t";
                                } elseif ($this->getAttribute(                                // line 38
$context["pagination"], "S_IS_NEXT", array())) {
                                    // line 39
                                    echo "\t\t\t\t\t\t";
                                } else {
                                    echo "<li><a class=\"button\" href=\"";
                                    echo $this->getAttribute($context["pagination"], "PAGE_URL", array());
                                    echo "\">";
                                    echo $this->getAttribute($context["pagination"], "PAGE_NUMBER", array());
                                    echo "</a></li>
\t\t\t\t\t\t";
                                }
                                // line 41
                                echo "\t\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pagination'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 42
                            echo "\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t";
                        }
                        // line 45
                        echo "\t\t\t\t<div class=\"responsive-show\" style=\"display: none;\">
\t\t\t\t\t";
                        // line 46
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LAST_POST");
                        echo " ";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_BY_AUTHOR");
                        echo " ";
                        echo $this->getAttribute($context["news_row"], "USERNAME_FULL_LAST", array());
                        echo " &raquo; <a href=\"";
                        echo $this->getAttribute($context["news_row"], "U_LAST_COMMENTS", array());
                        echo "\" title=\"";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GOTO_LAST_POST");
                        echo "\" title=\"";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VIEW_LATEST_POST");
                        echo "\"> ";
                        echo $this->getAttribute($context["news_row"], "LAST_POST_TIME", array());
                        echo "</a>
\t\t\t\t</div>

\t\t\t\t<div class=\"responsive-hide\">
\t\t\t\t\t";
                        // line 50
                        if ($this->getAttribute($context["news_row"], "ATTACH_ICON_IMG", array())) {
                            echo "<i class=\"icon fa-paperclip fa-fw\" aria-hidden=\"true\"></i>";
                        }
                        // line 51
                        echo "\t\t\t\t\t";
                        if ($this->getAttribute($context["news_row"], "S_POLL", array())) {
                            echo "<i class=\"icon fa-bar-chart fa-fw\" aria-hidden=\"true\"></i> ";
                        }
                        // line 52
                        echo "\t\t\t\t\t";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POSTED");
                        echo " ";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_BY_AUTHOR");
                        echo " ";
                        echo $this->getAttribute($context["news_row"], "POSTER_FULL", array());
                        echo " &raquo; ";
                        echo $this->getAttribute($context["news_row"], "TIME", array());
                        echo "
\t\t\t\t</div>
\t\t\t\t";
                        // line 54
                        if ($this->getAttribute($context["news_row"], "FORUM_NAME", array())) {
                            // line 55
                            echo "\t\t\t\t";
                            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM");
                            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                            echo " <a href=\"";
                            echo $this->getAttribute($context["news_row"], "U_VIEWFORUM", array());
                            echo "\" class=\"portal-forumtitle\">";
                            echo $this->getAttribute($context["news_row"], "FORUM_NAME", array());
                            echo "</a>
\t\t\t\t";
                        }
                        // line 57
                        echo "\t\t\t\t";
                        if ( !$this->getAttribute($context["news"], "S_DISPLAY_NEWS_RVS", array())) {
                            if ($this->getAttribute($context["news_row"], "FORUM_NAME", array())) {
                                echo "&bull; ";
                            }
                            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REPLIES");
                            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                            echo " <strong>";
                            echo $this->getAttribute($context["news_row"], "REPLIES", array());
                            echo "</strong>  &bull; ";
                            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VIEWS");
                            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                            echo " <strong>";
                            echo $this->getAttribute($context["news_row"], "TOPIC_VIEWS", array());
                            echo "</strong>";
                        }
                        // line 58
                        echo "\t\t\t</div> <!-- \\END <div class=\"list-inner\"> -->
\t\t\t</dt>
\t\t\t";
                        // line 60
                        if ($this->getAttribute($context["news"], "S_DISPLAY_NEWS_RVS", array())) {
                            // line 61
                            echo "\t\t\t<dd class=\"posts\" data-skip-responsive=\"true\">";
                            echo $this->getAttribute($context["news_row"], "REPLIES", array());
                            echo " <dfn>";
                            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REPLIES");
                            echo "</dfn></dd>
\t\t\t<dd class=\"views\" data-skip-responsive=\"true\">";
                            // line 62
                            echo $this->getAttribute($context["news_row"], "TOPIC_VIEWS", array());
                            echo " <dfn>";
                            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VIEWS");
                            echo "</dfn></dd>
\t\t\t";
                        }
                        // line 64
                        echo "\t\t\t<dd class=\"lastpost\"><span><dfn>";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LAST_POST");
                        echo "</dfn>";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_BY_AUTHOR");
                        echo " ";
                        echo $this->getAttribute($context["news_row"], "USERNAME_FULL_LAST", array());
                        echo " ";
                        if ($this->getAttribute($context["news_row"], "S_UNREAD_INFO", array())) {
                            echo "<a href=\"";
                            echo $this->getAttribute($context["news_row"], "U_VIEW_UNREAD", array());
                            echo "\" title=\"";
                            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VIEW_NEWEST_POST");
                            echo "\"><i class=\"icon fa-external-link-square fa-fw icon-red icon-md\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VIEW_LATEST_POST");
                            echo "</span></a>";
                        } else {
                            echo "<a href=\"";
                            echo $this->getAttribute($context["news_row"], "U_LAST_COMMENTS", array());
                            echo "\" title=\"";
                            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VIEW_LATEST_POST");
                            echo "\"><i class=\"icon fa-external-link-square fa-fw icon-lightgray icon-md\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VIEW_LATEST_POST");
                            echo "</span></a>";
                        }
                        echo "<br />
\t\t\t\t";
                        // line 65
                        echo $this->getAttribute($context["news_row"], "LAST_POST_TIME", array());
                        echo "</span>
\t\t\t</dd>
\t\t</dl>
\t</li>
\t";
                        // line 69
                        if ($this->getAttribute($context["news_row"], "S_LAST_ROW", array())) {
                            // line 70
                            echo "\t";
                            if (($this->getAttribute($context["news"], "NP_PAGINATION", array()) || $this->getAttribute($context["news"], "TOTAL_NEWS", array()))) {
                                // line 71
                                echo "\t<li class=\"row";
                                if (($this->getAttribute($context["news_row"], "S_ROW_COUNT", array()) % 2 == 0)) {
                                    echo " bg2";
                                } else {
                                    echo " bg1";
                                }
                                echo " portal-news-pagination\">
\t\t<div class=\"topic-actions\">
\t\t\t<div class=\"pagination\">
\t\t\t\t<span><i class=\"icon fa-clone fa-fw\" aria-hidden=\"true\"></i></span>
\t\t\t\t";
                                // line 75
                                echo $this->getAttribute($context["news"], "TOTAL_NEWS", array());
                                echo "
\t\t\t\t";
                                // line 76
                                if ($this->getAttribute($context["news"], "NP_PAGE_NUMBER", array())) {
                                    if ($this->getAttribute($context["news"], "NP_PAGINATION", array())) {
                                        echo " &bull; ";
                                        echo $this->getAttribute($context["news"], "NP_PAGE_NUMBER", array());
                                        echo " &bull; ";
                                        echo $this->getAttribute($context["news"], "NP_PAGINATION", array());
                                    } else {
                                        echo " &bull; ";
                                        echo $this->getAttribute($context["news"], "NP_PAGE_NUMBER", array());
                                    }
                                }
                                echo " &nbsp;
\t\t\t</div>
\t\t</div>
\t</li>
\t";
                            }
                            // line 81
                            echo "</ul>
";
                            // line 82
                            echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "C_BLOCK_F_L", array());
                            echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "C_BLOCK_F_R", array());
                            echo "
";
                        }
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['news_row'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['news'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "portal/modules/news_compact_center.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  355 => 82,  352 => 81,  334 => 76,  330 => 75,  318 => 71,  315 => 70,  313 => 69,  306 => 65,  279 => 64,  272 => 62,  265 => 61,  263 => 60,  259 => 58,  242 => 57,  231 => 55,  229 => 54,  217 => 52,  212 => 51,  208 => 50,  189 => 46,  186 => 45,  181 => 42,  175 => 41,  165 => 39,  163 => 38,  157 => 37,  148 => 36,  145 => 35,  141 => 34,  136 => 31,  133 => 30,  119 => 29,  116 => 28,  110 => 27,  99 => 26,  95 => 25,  86 => 24,  80 => 21,  75 => 20,  70 => 18,  65 => 17,  63 => 16,  57 => 15,  53 => 14,  51 => 13,  45 => 11,  39 => 8,  31 => 5,  29 => 4,  25 => 3,  23 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "portal/modules/news_compact_center.html", "");
    }
}
