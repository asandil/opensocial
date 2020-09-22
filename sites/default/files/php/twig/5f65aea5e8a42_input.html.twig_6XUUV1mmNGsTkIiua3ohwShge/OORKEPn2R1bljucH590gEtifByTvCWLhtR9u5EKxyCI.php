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

/* input.html.twig */
class __TwigTemplate_d6dcf5bcc7bbca45e0ee22f024917d05217e64e6228010a19944447f0bcdbc06 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'input' => [$this, 'block_input'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 23, "spaceless" => 38, "if" => 40, "block" => 50];
        $filters = ["escape" => 41];
        $functions = ["attach_library" => 41];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'spaceless', 'if', 'block'],
                ['escape'],
                ['attach_library']
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

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 23
        $context["classes"] = [0 => ((((        // line 24
($context["type"] ?? null) != "submit") && (($context["type"] ?? null) != "button"))) ? ("form-control") : ("")), 1 => (((        // line 25
($context["type"] ?? null) == "button")) ? ("btn") : ("")), 2 => (((        // line 26
($context["type"] ?? null) == "submit")) ? ("btn js-form-submit") : ("")), 3 => ((        // line 27
($context["float_right"] ?? null)) ? ("pull-right") : ("")), 4 => (((        // line 28
($context["button_level"] ?? null) == "raised")) ? ("btn-raised") : ("")), 5 => (((        // line 29
($context["button_type"] ?? null) == "default")) ? ("btn-default") : ("")), 6 => (((        // line 30
($context["button_type"] ?? null) == "flat")) ? ("btn-flat") : ("")), 7 => (((        // line 31
($context["button_type"] ?? null) == "primary")) ? ("btn-primary") : ("")), 8 => (((        // line 32
($context["button_type"] ?? null) == "accent")) ? ("btn-accent") : ("")), 9 => (((        // line 33
($context["button_size"] ?? null) == "small")) ? ("btn-sm") : ("")), 10 => (($this->getAttribute(        // line 34
($context["attributes"] ?? null), "hasClass", [0 => "crop-preview-wrapper__crop-reset"], "method")) ? ("btn-flat") : ("")), 11 => ((((        // line 35
($context["icon"] ?? null) && ($context["icon_position"] ?? null)) &&  !($context["icon_only"] ?? null))) ? (("icon-" . $this->sandbox->ensureToStringAllowed(($context["icon_position"] ?? null)))) : (""))];
        // line 38
        ob_start(function () { return ''; });
        // line 39
        echo "
  ";
        // line 40
        if (($context["input_group"] ?? null)) {
            // line 41
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("socialbase/form--input-groups"), "html", null, true);
            echo "

    <div class=\"input-group\">
  ";
        }
        // line 45
        echo "
  ";
        // line 46
        if (($context["prefix"] ?? null)) {
            // line 47
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["prefix"] ?? null)), "html", null, true);
            echo "
  ";
        }
        // line 49
        echo "
  ";
        // line 50
        $this->displayBlock('input', $context, $blocks);
        // line 57
        echo "
  ";
        // line 58
        if (($context["suffix"] ?? null)) {
            // line 59
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["suffix"] ?? null)), "html", null, true);
            echo "
  ";
        }
        // line 61
        echo "
  ";
        // line 62
        if (($context["input_group"] ?? null)) {
            // line 63
            echo "    </div>
  ";
        }
        // line 65
        echo "
  ";
        // line 66
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null)), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 50
    public function block_input($context, array $blocks = [])
    {
        // line 51
        echo "      ";
        if (($context["simple_checkbox"] ?? null)) {
            // line 52
            echo "        <input";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null)), "html", null, true);
            echo " />
      ";
        } else {
            // line 54
            echo "        <input";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
            echo " />
      ";
        }
        // line 56
        echo "  ";
    }

    public function getTemplateName()
    {
        return "input.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 56,  143 => 54,  137 => 52,  134 => 51,  131 => 50,  124 => 66,  121 => 65,  117 => 63,  115 => 62,  112 => 61,  106 => 59,  104 => 58,  101 => 57,  99 => 50,  96 => 49,  90 => 47,  88 => 46,  85 => 45,  77 => 41,  75 => 40,  72 => 39,  70 => 38,  68 => 35,  67 => 34,  66 => 33,  65 => 32,  64 => 31,  63 => 30,  62 => 29,  61 => 28,  60 => 27,  59 => 26,  58 => 25,  57 => 24,  56 => 23,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "input.html.twig", "profiles/contrib/social/themes/socialbase/templates/form/input.html.twig");
    }
}
