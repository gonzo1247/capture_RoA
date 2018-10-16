<?php

/* portal/portal_body.html */
class __TwigTemplate_9a7d1e7be92342a14bb90340550b4883fa08c8c24ee1c337140e0b5a2128af44 extends Twig_Template
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
        $location = "overall_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_header.html", "portal/portal_body.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        $location = "portal/_block_config.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("portal/_block_config.html", "portal/portal_body.html", 2)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 3
        echo "
<div id=\"portal-body\" role=\"grid\">
\t";
        // line 5
        if ((isset($context["S_TOP_COLUMN"]) ? $context["S_TOP_COLUMN"] : null)) {
            echo "\t
\t<div id=\"portal-top\" role=\"rowgroup\">
\t<!-- [+] top module area -->
\t\t<ul>
\t\t\t<li>
\t\t\t";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "modules_top", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["modules_top"]) {
                // line 11
                echo "\t\t\t\t";
                $value = (("" . $this->getAttribute($context["modules_top"], "TEMPLATE_FILE", array())) . "");
                $context['definition']->set('TEMPLATE_FILE', $value);
                // line 12
                echo "\t\t\t\t";
                $value = (("" . $this->getAttribute($context["modules_top"], "IMAGE_SRC", array())) . "");
                $context['definition']->set('IMAGE_SRC', $value);
                // line 13
                echo "\t\t\t\t";
                $value = (("" . $this->getAttribute($context["modules_top"], "IMAGE_WIDTH", array())) . "");
                $context['definition']->set('IMAGE_WIDTH', $value);
                // line 14
                echo "\t\t\t\t";
                $value = (("" . $this->getAttribute($context["modules_top"], "IMAGE_HEIGHT", array())) . "");
                $context['definition']->set('IMAGE_HEIGHT', $value);
                // line 15
                echo "\t\t\t\t";
                $value = (("" . $this->getAttribute($context["modules_top"], "CODE", array())) . "");
                $context['definition']->set('CUSTOM_CODE', $value);
                // line 16
                echo "\t\t\t\t";
                $value = (("" . $this->getAttribute($context["modules_top"], "TITLE", array())) . "");
                $context['definition']->set('TITLE', $value);
                // line 17
                echo "\t\t\t\t";
                $value = (("" . $this->getAttribute($context["modules_top"], "MODULE_ID", array())) . "");
                $context['definition']->set('MODULE_ID', $value);
                // line 18
                echo "\t\t\t\t";
                $location = (("" . $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "TEMPLATE_FILE", array())) . "");
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate((("" . $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "TEMPLATE_FILE", array())) . ""), "portal/portal_body.html", 18)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 19
                echo "\t\t\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['modules_top'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "\t\t\t</li>
\t\t</ul>
\t<!-- [-] top module area -->
\t</div>
\t";
        }
        // line 25
        echo "\t<!-- [+] center module area -->
\t";
        // line 26
        if ((isset($context["S_CENTER_COLUMN"]) ? $context["S_CENTER_COLUMN"] : null)) {
            // line 27
            echo "\t<div id=\"portal-center-wrapper\">
\t\t<div id=\"portal-center\" style=\"margin: 0 ";
            // line 28
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
            echo "; padding: 0 ";
            echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "BLOCK_DISTANCE", array());
            echo ";\" role=\"rowgroup\">
\t\t\t";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "modules_center", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["modules_center"]) {
                // line 30
                echo "\t\t\t\t";
                $value = (("" . $this->getAttribute($context["modules_center"], "TEMPLATE_FILE", array())) . "");
                $context['definition']->set('TEMPLATE_FILE', $value);
                // line 31
                echo "\t\t\t\t";
                $value = (("" . $this->getAttribute($context["modules_center"], "IMAGE_SRC", array())) . "");
                $context['definition']->set('IMAGE_SRC', $value);
                // line 32
                echo "\t\t\t\t";
                $value = (("" . $this->getAttribute($context["modules_center"], "IMAGE_WIDTH", array())) . "");
                $context['definition']->set('IMAGE_WIDTH', $value);
                // line 33
                echo "\t\t\t\t";
                $value = (("" . $this->getAttribute($context["modules_center"], "IMAGE_HEIGHT", array())) . "");
                $context['definition']->set('IMAGE_HEIGHT', $value);
                // line 34
                echo "\t\t\t\t";
                $value = (("" . $this->getAttribute($context["modules_center"], "CODE", array())) . "");
                $context['definition']->set('CUSTOM_CODE', $value);
                // line 35
                echo "\t\t\t\t";
                $value = (("" . $this->getAttribute($context["modules_center"], "TITLE", array())) . "");
                $context['definition']->set('TITLE', $value);
                // line 36
                echo "\t\t\t\t";
                $value = (("" . $this->getAttribute($context["modules_center"], "MODULE_ID", array())) . "");
                $context['definition']->set('MODULE_ID', $value);
                // line 37
                echo "\t\t\t\t";
                $location = (("" . $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "TEMPLATE_FILE", array())) . "");
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate((("" . $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "TEMPLATE_FILE", array())) . ""), "portal/portal_body.html", 37)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 38
                echo "\t\t\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['modules_center'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "\t\t\t";
            if (((isset($context["S_DISPLAY_JUMPBOX"]) ? $context["S_DISPLAY_JUMPBOX"] : null) && (isset($context["B3P_DISPLAY_JUMPBOX"]) ? $context["B3P_DISPLAY_JUMPBOX"] : null))) {
                // line 40
                echo "\t\t\t\t<br />
\t\t\t\t";
                // line 41
                $location = "portal/modules/jumpbox.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("portal/modules/jumpbox.html", "portal/portal_body.html", 41)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 42
                echo "\t\t\t";
            }
            // line 43
            echo "\t\t</div>
\t</div>
\t";
        }
        // line 46
        echo "\t<!-- [-] center module area -->
\t<!-- [+] left module area -->
\t\t";
        // line 48
        if ((isset($context["S_LEFT_COLUMN"]) ? $context["S_LEFT_COLUMN"] : null)) {
            // line 49
            echo "\t\t<div id=\"portal-left\" style=\"width: ";
            echo (isset($context["S_PORTAL_LEFT_COLUMN"]) ? $context["S_PORTAL_LEFT_COLUMN"] : null);
            echo "px;\" role=\"rowgroup\">
\t\t\t";
            // line 50
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "modules_left", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["modules_left"]) {
                // line 51
                echo "\t\t\t\t";
                $value = (("" . $this->getAttribute($context["modules_left"], "TEMPLATE_FILE", array())) . "");
                $context['definition']->set('TEMPLATE_FILE', $value);
                // line 52
                echo "\t\t\t\t";
                $value = (("" . $this->getAttribute($context["modules_left"], "IMAGE_SRC", array())) . "");
                $context['definition']->set('IMAGE_SRC', $value);
                // line 53
                echo "\t\t\t\t";
                $value = (("" . $this->getAttribute($context["modules_left"], "IMAGE_WIDTH", array())) . "");
                $context['definition']->set('IMAGE_WIDTH', $value);
                // line 54
                echo "\t\t\t\t";
                $value = (("" . $this->getAttribute($context["modules_left"], "IMAGE_HEIGHT", array())) . "");
                $context['definition']->set('IMAGE_HEIGHT', $value);
                // line 55
                echo "\t\t\t\t";
                $value = (("" . $this->getAttribute($context["modules_left"], "CODE", array())) . "");
                $context['definition']->set('CUSTOM_CODE', $value);
                // line 56
                echo "\t\t\t\t";
                $value = (("" . $this->getAttribute($context["modules_left"], "TITLE", array())) . "");
                $context['definition']->set('TITLE', $value);
                // line 57
                echo "\t\t\t\t";
                $value = (("" . $this->getAttribute($context["modules_left"], "MODULE_ID", array())) . "");
                $context['definition']->set('MODULE_ID', $value);
                // line 58
                echo "\t\t\t\t";
                $location = (("" . $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "TEMPLATE_FILE", array())) . "");
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate((("" . $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "TEMPLATE_FILE", array())) . ""), "portal/portal_body.html", 58)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 59
                echo "\t\t\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['modules_left'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "\t\t</div>
\t\t";
        }
        // line 62
        echo "\t<!-- [-] left module area -->

\t<!-- [+] right module area -->
\t\t";
        // line 65
        if ((isset($context["S_RIGHT_COLUMN"]) ? $context["S_RIGHT_COLUMN"] : null)) {
            // line 66
            echo "\t\t<div id=\"portal-right\" style=\"width: ";
            echo (isset($context["S_PORTAL_RIGHT_COLUMN"]) ? $context["S_PORTAL_RIGHT_COLUMN"] : null);
            echo "px; margin-";
            if (((isset($context["S_CONTENT_DIRECTION"]) ? $context["S_CONTENT_DIRECTION"] : null) == "rtl")) {
                echo "right";
            } else {
                echo "left";
            }
            echo ": -";
            echo (isset($context["S_PORTAL_RIGHT_COLUMN"]) ? $context["S_PORTAL_RIGHT_COLUMN"] : null);
            echo "px;\" data-width=\"";
            echo (isset($context["S_PORTAL_RIGHT_COLUMN"]) ? $context["S_PORTAL_RIGHT_COLUMN"] : null);
            echo "\" role=\"rowgroup\">
\t\t\t";
            // line 67
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "modules_right", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["modules_right"]) {
                // line 68
                echo "\t\t\t\t";
                $value = (("" . $this->getAttribute($context["modules_right"], "TEMPLATE_FILE", array())) . "");
                $context['definition']->set('TEMPLATE_FILE', $value);
                // line 69
                echo "\t\t\t\t";
                $value = (("" . $this->getAttribute($context["modules_right"], "IMAGE_SRC", array())) . "");
                $context['definition']->set('IMAGE_SRC', $value);
                // line 70
                echo "\t\t\t\t";
                $value = (("" . $this->getAttribute($context["modules_right"], "IMAGE_WIDTH", array())) . "");
                $context['definition']->set('IMAGE_WIDTH', $value);
                // line 71
                echo "\t\t\t\t";
                $value = (("" . $this->getAttribute($context["modules_right"], "IMAGE_HEIGHT", array())) . "");
                $context['definition']->set('IMAGE_HEIGHT', $value);
                // line 72
                echo "\t\t\t\t";
                $value = (("" . $this->getAttribute($context["modules_right"], "CODE", array())) . "");
                $context['definition']->set('CUSTOM_CODE', $value);
                // line 73
                echo "\t\t\t\t";
                $value = (("" . $this->getAttribute($context["modules_right"], "TITLE", array())) . "");
                $context['definition']->set('TITLE', $value);
                // line 74
                echo "\t\t\t\t";
                $value = (("" . $this->getAttribute($context["modules_right"], "MODULE_ID", array())) . "");
                $context['definition']->set('MODULE_ID', $value);
                // line 75
                echo "\t\t\t\t";
                $location = (("" . $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "TEMPLATE_FILE", array())) . "");
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate((("" . $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "TEMPLATE_FILE", array())) . ""), "portal/portal_body.html", 75)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 76
                echo "\t\t\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['modules_right'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            echo "\t\t</div>
\t\t";
        }
        // line 79
        echo "\t<!-- [-] right module area -->
\t<br class=\"portal-clear\" />
\t";
        // line 81
        if ((isset($context["S_BOTTOM_COLUMN"]) ? $context["S_BOTTOM_COLUMN"] : null)) {
            // line 82
            echo "\t<div id=\"portal-bottom\" role=\"rowgroup\">
\t<!-- [+] bottom module area -->
\t\t<ul>
\t\t\t<li>
\t\t\t";
            // line 86
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "modules_bottom", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["modules_bottom"]) {
                // line 87
                echo "\t\t\t\t";
                $value = (("" . $this->getAttribute($context["modules_bottom"], "TEMPLATE_FILE", array())) . "");
                $context['definition']->set('TEMPLATE_FILE', $value);
                // line 88
                echo "\t\t\t\t";
                $value = (("" . $this->getAttribute($context["modules_bottom"], "IMAGE_SRC", array())) . "");
                $context['definition']->set('IMAGE_SRC', $value);
                // line 89
                echo "\t\t\t\t";
                $value = (("" . $this->getAttribute($context["modules_bottom"], "IMAGE_WIDTH", array())) . "");
                $context['definition']->set('IMAGE_WIDTH', $value);
                // line 90
                echo "\t\t\t\t";
                $value = (("" . $this->getAttribute($context["modules_bottom"], "IMAGE_HEIGHT", array())) . "");
                $context['definition']->set('IMAGE_HEIGHT', $value);
                // line 91
                echo "\t\t\t\t";
                $value = (("" . $this->getAttribute($context["modules_bottom"], "CODE", array())) . "");
                $context['definition']->set('CUSTOM_CODE', $value);
                // line 92
                echo "\t\t\t\t";
                $value = (("" . $this->getAttribute($context["modules_bottom"], "TITLE", array())) . "");
                $context['definition']->set('TITLE', $value);
                // line 93
                echo "\t\t\t\t";
                $value = (("" . $this->getAttribute($context["modules_bottom"], "MODULE_ID", array())) . "");
                $context['definition']->set('MODULE_ID', $value);
                // line 94
                echo "\t\t\t\t";
                $location = (("" . $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "TEMPLATE_FILE", array())) . "");
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate((("" . $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "TEMPLATE_FILE", array())) . ""), "portal/portal_body.html", 94)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 95
                echo "\t\t\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['modules_bottom'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 96
            echo "\t\t\t</li>
\t\t</ul>
\t<!-- [-] bottom module area -->
\t</div>
\t";
        }
        // line 101
        echo "</div>

<!--// board3 Portal by www.board3.de //-->
<div class=\"copyright\">Powered by <a href=\"http://www.board3.de/\">Board3 Portal</a> &copy; 2009 - 2017 Board3 Group</div>

";
        // line 106
        $asset_file = "portal/assets/jquery.getscrollbarwidth.js";
        $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper(), $this->getEnvironment()->get_filesystem());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->getEnvironment()->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            }
            $asset->add_assets_version('7');
        }
        $this->getEnvironment()->get_assets_bag()->add_script($asset);        // line 107
        $asset_file = "portal/assets/portal.js";
        $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper(), $this->getEnvironment()->get_filesystem());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->getEnvironment()->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            }
            $asset->add_assets_version('7');
        }
        $this->getEnvironment()->get_assets_bag()->add_script($asset);        // line 108
        echo "
";
        // line 109
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "portal/portal_body.html", 109)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "portal/portal_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  568 => 109,  565 => 108,  554 => 107,  543 => 106,  536 => 101,  529 => 96,  515 => 95,  502 => 94,  498 => 93,  494 => 92,  490 => 91,  486 => 90,  482 => 89,  478 => 88,  474 => 87,  457 => 86,  451 => 82,  449 => 81,  445 => 79,  441 => 77,  427 => 76,  414 => 75,  410 => 74,  406 => 73,  402 => 72,  398 => 71,  394 => 70,  390 => 69,  386 => 68,  369 => 67,  354 => 66,  352 => 65,  347 => 62,  343 => 60,  329 => 59,  316 => 58,  312 => 57,  308 => 56,  304 => 55,  300 => 54,  296 => 53,  292 => 52,  288 => 51,  271 => 50,  266 => 49,  264 => 48,  260 => 46,  255 => 43,  252 => 42,  240 => 41,  237 => 40,  234 => 39,  220 => 38,  207 => 37,  203 => 36,  199 => 35,  195 => 34,  191 => 33,  187 => 32,  183 => 31,  179 => 30,  162 => 29,  142 => 28,  139 => 27,  137 => 26,  134 => 25,  127 => 20,  113 => 19,  100 => 18,  96 => 17,  92 => 16,  88 => 15,  84 => 14,  80 => 13,  76 => 12,  72 => 11,  55 => 10,  47 => 5,  43 => 3,  31 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "portal/portal_body.html", "");
    }
}
