<?php

/* portal/modules/user_menu_side.html */
class __TwigTemplate_b64f2478dac0ac68212f4d711069e954be3c5032f562fffefe3a65dc34ecd1bd extends Twig_Template
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
\t<div class=\"portal-centered-content\">
        ";
        // line 3
        echo (isset($context["USERNAME_FULL"]) ? $context["USERNAME_FULL"] : null);
        echo "<br />
        ";
        // line 4
        if ((isset($context["B3P_AVATAR_IMG"]) ? $context["B3P_AVATAR_IMG"] : null)) {
            // line 5
            echo "            <a href=\"";
            echo (isset($context["U_PROFILE"]) ? $context["U_PROFILE"] : null);
            echo "\">";
            echo (isset($context["B3P_AVATAR_IMG"]) ? $context["B3P_AVATAR_IMG"] : null);
            echo "</a>
        ";
        } elseif ($this->getAttribute(        // line 6
(isset($context["definition"]) ? $context["definition"] : null), "NO_AVATAR_IMG", array())) {
            // line 7
            echo "            <a href=\"";
            echo (isset($context["U_PROFILE"]) ? $context["U_PROFILE"] : null);
            echo "\"><img src=\"";
            echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
            echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "NO_AVATAR_IMG", array());
            echo "\" alt=\"\" /></a>
        ";
        }
        // line 9
        echo "        ";
        if ((isset($context["B3P_RANK_TITLE"]) ? $context["B3P_RANK_TITLE"] : null)) {
            echo "<br /><span class=\"gensmall\">";
            echo (isset($context["B3P_RANK_TITLE"]) ? $context["B3P_RANK_TITLE"] : null);
            echo "</span>";
        }
        // line 10
        echo "        ";
        if ((isset($context["B3P_RANK_IMG"]) ? $context["B3P_RANK_IMG"] : null)) {
            echo "<br />";
            echo (isset($context["B3P_RANK_IMG"]) ? $context["B3P_RANK_IMG"] : null);
        }
        // line 11
        echo "    </div> 
\t<hr class=\"dashed\" />
\t<div class=\"portal-navigation\">
\t\t<div class=\"menutitle\">";
        // line 14
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("M_MENU");
        echo "</div>
\t\t\t<ul>
\t\t\t\t";
        // line 16
        if ((isset($context["S_DISPLAY_SEARCH"]) ? $context["S_DISPLAY_SEARCH"] : null)) {
            // line 17
            echo "\t\t\t\t\t<li><a href=\"";
            echo (isset($context["U_NEW_POSTS"]) ? $context["U_NEW_POSTS"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NEW_POSTS");
            echo "</a></li>
\t\t\t\t\t<li><a href=\"";
            // line 18
            echo (isset($context["U_UNREAD_POSTS"]) ? $context["U_UNREAD_POSTS"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("UNREAD_POSTS");
            echo "</a></li>
\t\t\t\t\t<li><a href=\"";
            // line 19
            echo (isset($context["U_SELF_POSTS"]) ? $context["U_SELF_POSTS"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SELF_POSTS");
            echo "</a></li>
\t\t\t\t";
        }
        // line 21
        echo "\t\t\t\t";
        if ((isset($context["U_UM_BOOKMARKS"]) ? $context["U_UM_BOOKMARKS"] : null)) {
            // line 22
            echo "\t\t\t\t\t<li><a href=\"";
            echo (isset($context["U_UM_BOOKMARKS"]) ? $context["U_UM_BOOKMARKS"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("UM_BOOKMARKS");
            echo "</a></li>
\t\t\t\t";
        }
        // line 24
        echo "\t\t\t\t";
        if ((isset($context["S_DISPLAY_SUBSCRIPTIONS"]) ? $context["S_DISPLAY_SUBSCRIPTIONS"] : null)) {
            // line 25
            echo "\t\t\t\t\t<li><a href=\"";
            echo (isset($context["U_UM_MAIN_SUBSCRIBED"]) ? $context["U_UM_MAIN_SUBSCRIBED"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("UM_MAIN_SUBSCRIBED");
            echo "</a></li>
\t\t\t\t";
        }
        // line 27
        echo "\t\t\t\t";
        if ((isset($context["S_NOTIFICATIONS_DISPLAY"]) ? $context["S_NOTIFICATIONS_DISPLAY"] : null)) {
            // line 28
            echo "\t\t\t\t<li data-skip-responsive=\"true\">
\t\t\t\t\t<a href=\"";
            // line 29
            echo (isset($context["U_VIEW_ALL_NOTIFICATIONS"]) ? $context["U_VIEW_ALL_NOTIFICATIONS"] : null);
            echo "\"><span>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NOTIFICATIONS");
            echo " [</span><strong>";
            echo (isset($context["NOTIFICATIONS_COUNT"]) ? $context["NOTIFICATIONS_COUNT"] : null);
            echo "</strong><span>]</span></a>
\t\t\t\t</li>
\t\t\t\t";
        }
        // line 32
        echo "\t\t\t\t";
        if ((isset($context["S_DISPLAY_PM"]) ? $context["S_DISPLAY_PM"] : null)) {
            // line 33
            echo "\t\t\t\t\t<li><a href=\"";
            echo (isset($context["U_PRIVATEMSGS"]) ? $context["U_PRIVATEMSGS"] : null);
            echo "\"><span>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PRIVATE_MESSAGES");
            echo " [</span><strong>";
            echo (isset($context["PRIVATE_MESSAGE_COUNT"]) ? $context["PRIVATE_MESSAGE_COUNT"] : null);
            echo "</strong><span>]</span></a></li>
\t\t\t\t";
        }
        // line 35
        echo "\t\t\t\t<li><a href=\"";
        echo (isset($context["U_PROFILE"]) ? $context["U_PROFILE"] : null);
        echo "\">";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PROFILE");
        echo "</a></li>
\t\t\t\t";
        // line 36
        if ((isset($context["U_UM_MCP"]) ? $context["U_UM_MCP"] : null)) {
            // line 37
            echo "\t\t\t\t\t<li><a href=\"";
            echo (isset($context["U_UM_MCP"]) ? $context["U_UM_MCP"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCP");
            echo "</a></li>
\t\t\t\t";
        }
        // line 39
        echo "\t\t\t\t";
        if ((isset($context["U_ACP"]) ? $context["U_ACP"] : null)) {
            // line 40
            echo "\t\t\t\t\t<li><a href=\"";
            echo (isset($context["U_ACP"]) ? $context["U_ACP"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("M_ACP");
            echo "</a></li>
\t\t\t\t";
        }
        // line 42
        echo "\t\t\t\t<li><a href=\"";
        echo (isset($context["U_LOGIN_LOGOUT"]) ? $context["U_LOGIN_LOGOUT"] : null);
        echo "\">";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOGIN_LOGOUT");
        echo "</a></li>
\t\t\t</ul>
\t</div>
";
        // line 45
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "LR_BLOCK_F_L", array());
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "LR_BLOCK_F_R", array());
        echo "
";
    }

    public function getTemplateName()
    {
        return "portal/modules/user_menu_side.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 45,  183 => 42,  175 => 40,  172 => 39,  164 => 37,  162 => 36,  155 => 35,  145 => 33,  142 => 32,  132 => 29,  129 => 28,  126 => 27,  118 => 25,  115 => 24,  107 => 22,  104 => 21,  97 => 19,  91 => 18,  84 => 17,  82 => 16,  77 => 14,  72 => 11,  66 => 10,  59 => 9,  50 => 7,  48 => 6,  41 => 5,  39 => 4,  35 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "portal/modules/user_menu_side.html", "");
    }
}
