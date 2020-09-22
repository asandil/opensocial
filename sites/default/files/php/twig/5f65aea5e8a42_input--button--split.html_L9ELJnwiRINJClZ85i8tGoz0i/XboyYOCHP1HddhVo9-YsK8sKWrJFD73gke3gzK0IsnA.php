<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* profiles/contrib/social/themes/socialbase/templates/form/input--button--split.html.twig */
class __TwigTemplate_4252dbafbfd02fa787e50540b9be7f521d4bd33bd7da2dcd89923f912401fe15 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'input' => [$this, 'block_input'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["spaceless" => 25, "if" => 27, "set" => 42];
        $filters = ["escape" => 29, "t" => 58];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['spaceless', 'if', 'set'],
                ['escape', 't'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "input--button.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 25
        ob_start(function () { return ''; });
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 1
        $this->parent = $this->loadTemplate("input--button.html.twig", "profiles/contrib/social/themes/socialbase/templates/form/input--button--split.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_input($context, array $blocks = [])
    {
        // line 27
        echo "    ";
        if (($context["default_button"] ?? null)) {
            // line 28
            echo "      ";
            if (($context["icon_only"] ?? null)) {
                // line 29
                echo "        <button";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null), 1 => "icon-only"], "method")), "html", null, true);
                echo ">
          <span class=\"sr-only\">";
                // line 30
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
                echo "</span>
          ";
                // line 31
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["icon"] ?? null)), "html", null, true);
                echo "
        </button>
      ";
            } else {
                // line 34
                echo "        ";
                if ((($context["icon_position"] ?? null) == "after")) {
                    // line 35
                    echo "          <button";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
                    echo ">";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["icon"] ?? null)), "html", null, true);
                    echo "</button>";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null)), "html", null, true);
                    echo "
        ";
                } else {
                    // line 37
                    echo "          <button";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
                    echo ">";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["icon"] ?? null)), "html", null, true);
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
                    echo "</button>";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null)), "html", null, true);
                    echo "
        ";
                }
                // line 39
                echo "      ";
            }
            // line 40
            echo "    ";
        }
        // line 41
        echo "    ";
        // line 42
        $context["classes"] = [0 => "btn", 1 => (($this->getAttribute($this->getAttribute(        // line 44
($context["theme"] ?? null), "settings", []), "button_size", [])) ? ($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", []), "button_size", [])) : ("")), 2 => "dropdown-toggle", 3 => (((        // line 46
($context["button_type"] ?? null) == "default")) ? ("btn-default") : ("")), 4 => (((        // line 47
($context["button_type"] ?? null) == "flat")) ? ("btn-flat") : ("")), 5 => (((        // line 48
($context["button_type"] ?? null) == "primary")) ? ("btn-primary") : ("")), 6 => (((        // line 49
($context["button_level"] ?? null) == "raised")) ? ("btn-raised") : (""))];
        // line 52
        echo "
    <button";
        // line 53
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["split_button_attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo " type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
      ";
        // line 54
        if ( !($context["default_button"] ?? null)) {
            // line 55
            echo "        ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
            echo "
      ";
        }
        // line 57
        echo "      <span class=\"caret\"></span>
      <span class=\"sr-only\">";
        // line 58
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Toggle Dropdown"));
        echo "</span>
    </button>
    ";
        // line 60
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null)), "html", null, true);
        echo "
  ";
    }

    public function getTemplateName()
    {
        return "profiles/contrib/social/themes/socialbase/templates/form/input--button--split.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 60,  150 => 58,  147 => 57,  141 => 55,  139 => 54,  135 => 53,  132 => 52,  130 => 49,  129 => 48,  128 => 47,  127 => 46,  126 => 44,  125 => 42,  123 => 41,  120 => 40,  117 => 39,  106 => 37,  95 => 35,  92 => 34,  86 => 31,  82 => 30,  77 => 29,  74 => 28,  71 => 27,  68 => 26,  63 => 1,  60 => 25,  54 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "profiles/contrib/social/themes/socialbase/templates/form/input--button--split.html.twig", "E:\\devdesktop\\sites\\socal\\DIR\\html\\profiles\\contrib\\social\\themes\\socialbase\\templates\\form\\input--button--split.html.twig");
    }
}
