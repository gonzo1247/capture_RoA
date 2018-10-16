<?php

/* portal/modules/poll_center.html */
class __TwigTemplate_16141fda8a44e7d611bcf65e12613b1103655c0f17dbaf0bf45ba958e5600305 extends Twig_Template
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
\t";
        // line 2
        if ((isset($context["S_HAS_POLL"]) ? $context["S_HAS_POLL"] : null)) {
            // line 3
            echo "\t<div id=\"viewpoll\" class=\"panel bg1 portal-no-margin\">
\t\t<div class=\"inner\">
\t\t";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "poll", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["poll"]) {
                // line 6
                echo "\t\t\t";
                if ($this->getAttribute($context["poll"], "S_CAN_VOTE", array())) {
                    echo "<form method=\"post\" action=\"";
                    echo $this->getAttribute($context["poll"], "S_POLL_ACTION", array());
                    echo "\">";
                }
                // line 7
                echo "\t\t\t\t<div class=\"content\">
\t\t\t\t\t<h2>";
                // line 8
                echo $this->getAttribute($context["poll"], "POLL_QUESTION", array());
                echo "</h2>
\t\t\t\t\t<p class=\"author\">";
                // line 9
                echo $this->getAttribute($context["poll"], "L_POLL_LENGTH", array());
                if (($this->getAttribute($context["poll"], "S_CAN_VOTE", array()) && $this->getAttribute($context["poll"], "L_POLL_LENGTH", array()))) {
                    echo "<br />";
                }
                if ($this->getAttribute($context["poll"], "S_CAN_VOTE", array())) {
                    echo $this->getAttribute($context["poll"], "L_MAX_VOTES", array());
                }
                echo "</p>

\t\t\t\t\t<fieldset class=\"polls\">
\t\t\t\t\t";
                // line 12
                if ($this->getAttribute($context["poll"], "S_POLL_HAS_OPTIONS", array())) {
                    // line 13
                    echo "\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["poll"], "poll_option", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["poll_option"]) {
                        // line 14
                        echo "\t\t\t\t\t\t<dl class=\"";
                        if ($this->getAttribute($context["poll_option"], "POLL_OPTION_VOTED", array())) {
                            echo "voted";
                        }
                        echo " portal-responsive-poll\"";
                        if ($this->getAttribute($context["poll_option"], "POLL_OPTION_VOTED", array())) {
                            echo " title=\"";
                            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POLL_VOTED_OPTION");
                            echo "\"";
                        }
                        echo ">
\t\t\t\t\t\t\t<dt>";
                        // line 15
                        if ($this->getAttribute($context["poll"], "S_CAN_VOTE", array())) {
                            echo "<label for=\"poll_";
                            echo $this->getAttribute($context["poll"], "TOPIC_ID", array());
                            echo "_vote_";
                            echo $this->getAttribute($context["poll_option"], "POLL_OPTION_ID", array());
                            echo "\">";
                            echo $this->getAttribute($context["poll_option"], "POLL_OPTION_CAPTION", array());
                            echo "</label>";
                        } else {
                            echo $this->getAttribute($context["poll_option"], "POLL_OPTION_CAPTION", array());
                        }
                        echo "</dt>
\t\t\t\t\t\t\t";
                        // line 16
                        if ($this->getAttribute($context["poll"], "S_CAN_VOTE", array())) {
                            echo "<dd>";
                            if ($this->getAttribute($context["poll"], "S_IS_MULTI_CHOICE", array())) {
                                echo "<input type=\"checkbox\" name=\"vote_id[]\" id=\"poll_";
                                echo $this->getAttribute($context["poll"], "TOPIC_ID", array());
                                echo "_vote_";
                                echo $this->getAttribute($context["poll_option"], "POLL_OPTION_ID", array());
                                echo "\" value=\"";
                                echo $this->getAttribute($context["poll_option"], "POLL_OPTION_ID", array());
                                echo "\"";
                                if ($this->getAttribute($context["poll_option"], "POLL_OPTION_VOTED", array())) {
                                    echo " checked=\"checked\"";
                                }
                                echo " />";
                            } else {
                                echo "<input type=\"radio\" name=\"vote_id[]\" id=\"poll_";
                                echo $this->getAttribute($context["poll"], "TOPIC_ID", array());
                                echo "_vote_";
                                echo $this->getAttribute($context["poll_option"], "POLL_OPTION_ID", array());
                                echo "\" value=\"";
                                echo $this->getAttribute($context["poll_option"], "POLL_OPTION_ID", array());
                                echo "\"";
                                if ($this->getAttribute($context["poll_option"], "POLL_OPTION_VOTED", array())) {
                                    echo " checked=\"checked\"";
                                }
                                echo " />";
                            }
                            echo "</dd>";
                        }
                        // line 17
                        echo "\t\t\t\t\t\t\t";
                        if ($this->getAttribute($context["poll"], "S_DISPLAY_RESULTS", array())) {
                            echo "<dd class=\"resultbar\"><div class=\"";
                            if (($this->getAttribute($context["poll_option"], "POLL_OPTION_PCT", array()) < 20)) {
                                echo "pollbar1";
                            } elseif (($this->getAttribute($context["poll_option"], "POLL_OPTION_PCT", array()) < 40)) {
                                echo "pollbar2";
                            } elseif (($this->getAttribute($context["poll_option"], "POLL_OPTION_PCT", array()) < 60)) {
                                echo "pollbar3";
                            } elseif (($this->getAttribute($context["poll_option"], "POLL_OPTION_PCT", array()) < 80)) {
                                echo "pollbar4";
                            } else {
                                echo "pollbar5";
                            }
                            echo "\" style=\"width:";
                            echo $this->getAttribute($context["poll_option"], "POLL_OPTION_PERCENT", array());
                            echo ";\">";
                            echo $this->getAttribute($context["poll_option"], "POLL_OPTION_RESULT", array());
                            echo "</div></dd>
\t\t\t\t\t\t\t<dd>";
                            // line 18
                            if (($this->getAttribute($context["poll_option"], "POLL_OPTION_RESULT", array()) == 0)) {
                                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_VOTES");
                            } else {
                                echo $this->getAttribute($context["poll_option"], "POLL_OPTION_PERCENT", array());
                            }
                            echo "</dd>";
                        }
                        // line 19
                        echo "\t\t\t\t\t\t</dl>
\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['poll_option'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 21
                    echo "\t\t\t\t\t";
                } else {
                    // line 22
                    echo "\t\t\t\t\t\t";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_OPTIONS");
                    echo "
\t\t\t\t\t";
                }
                // line 24
                echo "
\t\t\t\t\t";
                // line 25
                if ($this->getAttribute($context["poll"], "S_DISPLAY_RESULTS", array())) {
                    // line 26
                    echo "\t\t\t\t\t\t<dl>
\t\t\t\t\t\t\t<dt>&nbsp;</dt>
\t\t\t\t\t\t\t<dd class=\"resultbar\"><p class=\"portal-poll-subtext\">";
                    // line 28
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOTAL_VOTES");
                    echo " : ";
                    echo $this->getAttribute($context["poll"], "TOTAL_VOTES", array());
                    echo "</p></dd>
\t\t\t\t\t\t</dl>
\t\t\t\t\t";
                }
                // line 31
                echo "
\t\t\t\t\t";
                // line 32
                if ($this->getAttribute($context["poll"], "S_CAN_VOTE", array())) {
                    // line 33
                    echo "\t\t\t\t\t\t<dl class=\"portal-poll-vote\">
\t\t\t\t\t\t\t<dt>&nbsp;</dt>
\t\t\t\t\t\t\t<dd class=\"resultbar\"><input type=\"submit\" name=\"update\" value=\"";
                    // line 35
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBMIT_VOTE");
                    echo "\" class=\"button1\" /></dd>
\t\t\t\t\t\t</dl>
\t\t\t\t\t";
                }
                // line 38
                echo "
\t\t\t\t\t";
                // line 39
                if ( !$this->getAttribute($context["poll"], "S_DISPLAY_RESULTS", array())) {
                    // line 40
                    echo "\t\t\t\t\t\t<dl class=\"portal-poll-vote\">
\t\t\t\t\t\t\t<dt>&nbsp;</dt>
\t\t\t\t\t\t\t<dd class=\"resultbar\"><p class=\"portal-poll-subtext\"><a href=\"";
                    // line 42
                    echo $this->getAttribute($context["poll"], "U_VIEW_RESULTS", array());
                    echo "\">";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VIEW_RESULTS");
                    echo "</a></p></dd>
\t\t\t\t\t\t</dl>
\t\t\t\t\t";
                }
                // line 45
                echo "
\t\t\t\t\t\t<dl class=\"portal-poll-vote\">
\t\t\t\t\t\t\t<dt>&nbsp;</dt>
\t\t\t\t\t\t\t<dd class=\"resultbar\"><p class=\"portal-poll-subtext\"><a href=\"";
                // line 48
                echo $this->getAttribute($context["poll"], "U_VIEW_TOPIC", array());
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VIEW_TOPIC");
                echo "</a></p></dd>
\t\t\t\t\t\t</dl>
\t\t\t\t\t</fieldset>
\t\t\t\t</div>
\t\t\t\t";
                // line 52
                if ($this->getAttribute($context["poll"], "S_CAN_VOTE", array())) {
                    echo $this->getAttribute($context["poll"], "S_HIDDEN_FIELDS", array());
                }
                // line 53
                echo "\t\t\t";
                if ($this->getAttribute($context["poll"], "S_CAN_VOTE", array())) {
                    echo "</form>";
                }
                // line 54
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['poll'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "\t\t</div>
\t</div>
\t";
        } else {
            // line 58
            echo "\t<div class=\"panel bg1 portal-no-margin\">
\t\t<div class=\"inner\">
\t\t\t<span><strong>";
            // line 60
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_POLL");
            echo "</strong></span>
\t\t</div>
\t</div>
\t";
        }
        // line 64
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "C_BLOCK_F_L", array());
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "C_BLOCK_F_R", array());
    }

    public function getTemplateName()
    {
        return "portal/modules/poll_center.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  264 => 64,  257 => 60,  253 => 58,  248 => 55,  242 => 54,  237 => 53,  233 => 52,  224 => 48,  219 => 45,  211 => 42,  207 => 40,  205 => 39,  202 => 38,  196 => 35,  192 => 33,  190 => 32,  187 => 31,  179 => 28,  175 => 26,  173 => 25,  170 => 24,  164 => 22,  161 => 21,  154 => 19,  146 => 18,  125 => 17,  95 => 16,  81 => 15,  68 => 14,  63 => 13,  61 => 12,  49 => 9,  45 => 8,  42 => 7,  35 => 6,  31 => 5,  27 => 3,  25 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "portal/modules/poll_center.html", "");
    }
}
