<?php

/* @board3_portal/event/overall_footer_page_body_after.html */
class __TwigTemplate_d4f5dd64e56551533e3d8122ff4cef4a5b649da8e8cbd74c24fb1a810d3974bb extends Twig_Template
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
            echo "\t</div>
</div>
    <!-- [+] left module area -->
    ";
            // line 5
            if ((isset($context["S_LEFT_COLUMN"]) ? $context["S_LEFT_COLUMN"] : null)) {
                // line 6
                echo "    <div id=\"portal-left\" style=\"width: ";
                echo (isset($context["S_PORTAL_LEFT_COLUMN"]) ? $context["S_PORTAL_LEFT_COLUMN"] : null);
                echo "px;\">
     ";
                // line 7
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
                    // line 8
                    echo "     ";
                    $value = (("" . $this->getAttribute($context["modules_left"], "TEMPLATE_FILE", array())) . "");
                    $context['definition']->set('TEMPLATE_FILE', $value);
                    // line 9
                    echo "     ";
                    $value = (("" . $this->getAttribute($context["modules_left"], "IMAGE_SRC", array())) . "");
                    $context['definition']->set('IMAGE_SRC', $value);
                    // line 10
                    echo "     ";
                    $value = (("" . $this->getAttribute($context["modules_left"], "IMAGE_WIDTH", array())) . "");
                    $context['definition']->set('IMAGE_WIDTH', $value);
                    // line 11
                    echo "     ";
                    $value = (("" . $this->getAttribute($context["modules_left"], "IMAGE_HEIGHT", array())) . "");
                    $context['definition']->set('IMAGE_HEIGHT', $value);
                    // line 12
                    echo "     ";
                    $value = (("" . $this->getAttribute($context["modules_left"], "CODE", array())) . "");
                    $context['definition']->set('CUSTOM_CODE', $value);
                    // line 13
                    echo "     ";
                    $value = (("" . $this->getAttribute($context["modules_left"], "TITLE", array())) . "");
                    $context['definition']->set('TITLE', $value);
                    // line 14
                    echo "     ";
                    $value = (("" . $this->getAttribute($context["modules_left"], "MODULE_ID", array())) . "");
                    $context['definition']->set('MODULE_ID', $value);
                    // line 15
                    echo "     ";
                    $location = (("" . $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "TEMPLATE_FILE", array())) . "");
                    $namespace = false;
                    if (strpos($location, '@') === 0) {
                        $namespace = substr($location, 1, strpos($location, '/') - 1);
                        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                        $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                    }
                    $this->loadTemplate((("" . $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "TEMPLATE_FILE", array())) . ""), "@board3_portal/event/overall_footer_page_body_after.html", 15)->display($context);
                    if ($namespace) {
                        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                    }
                    // line 16
                    echo "     ";
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
                // line 17
                echo "    </div>
    ";
            }
            // line 19
            echo "    <!-- [-] left module area -->

    <!-- [+] right module area -->
    ";
            // line 22
            if ((isset($context["S_RIGHT_COLUMN"]) ? $context["S_RIGHT_COLUMN"] : null)) {
                // line 23
                echo "    <div id=\"portal-right\" style=\"width: ";
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
                echo "\" role=\"gridcell\">
         ";
                // line 24
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
                    // line 25
                    echo "         ";
                    $value = (("" . $this->getAttribute($context["modules_right"], "TEMPLATE_FILE", array())) . "");
                    $context['definition']->set('TEMPLATE_FILE', $value);
                    // line 26
                    echo "         ";
                    $value = (("" . $this->getAttribute($context["modules_right"], "IMAGE_SRC", array())) . "");
                    $context['definition']->set('IMAGE_SRC', $value);
                    // line 27
                    echo "         ";
                    $value = (("" . $this->getAttribute($context["modules_right"], "IMAGE_WIDTH", array())) . "");
                    $context['definition']->set('IMAGE_WIDTH', $value);
                    // line 28
                    echo "         ";
                    $value = (("" . $this->getAttribute($context["modules_right"], "IMAGE_HEIGHT", array())) . "");
                    $context['definition']->set('IMAGE_HEIGHT', $value);
                    // line 29
                    echo "         ";
                    $value = (("" . $this->getAttribute($context["modules_right"], "CODE", array())) . "");
                    $context['definition']->set('CUSTOM_CODE', $value);
                    // line 30
                    echo "         ";
                    $value = (("" . $this->getAttribute($context["modules_right"], "TITLE", array())) . "");
                    $context['definition']->set('TITLE', $value);
                    // line 31
                    echo "         ";
                    $value = (("" . $this->getAttribute($context["modules_right"], "MODULE_ID", array())) . "");
                    $context['definition']->set('MODULE_ID', $value);
                    // line 32
                    echo "         ";
                    $location = (("" . $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "TEMPLATE_FILE", array())) . "");
                    $namespace = false;
                    if (strpos($location, '@') === 0) {
                        $namespace = substr($location, 1, strpos($location, '/') - 1);
                        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                        $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                    }
                    $this->loadTemplate((("" . $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "TEMPLATE_FILE", array())) . ""), "@board3_portal/event/overall_footer_page_body_after.html", 32)->display($context);
                    if ($namespace) {
                        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                    }
                    // line 33
                    echo "         ";
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
                // line 34
                echo "        </div>
        ";
            }
            // line 36
            echo "        <!-- [-] right module area -->
        <br class=\"portal-clear\" />
        </div>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "@board3_portal/event/overall_footer_page_body_after.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 36,  203 => 34,  189 => 33,  176 => 32,  172 => 31,  168 => 30,  164 => 29,  160 => 28,  156 => 27,  152 => 26,  148 => 25,  131 => 24,  116 => 23,  114 => 22,  109 => 19,  105 => 17,  91 => 16,  78 => 15,  74 => 14,  70 => 13,  66 => 12,  62 => 11,  58 => 10,  54 => 9,  50 => 8,  33 => 7,  28 => 6,  26 => 5,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@board3_portal/event/overall_footer_page_body_after.html", "");
    }
}
