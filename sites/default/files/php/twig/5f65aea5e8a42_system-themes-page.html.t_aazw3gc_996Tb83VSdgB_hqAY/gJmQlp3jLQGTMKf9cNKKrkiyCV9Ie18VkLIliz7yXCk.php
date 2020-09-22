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

/* core/themes/claro/templates/system-themes-page.html.twig */
class __TwigTemplate_089fbcb8e27cd4f6cb133aca215e07a5cd7997e28bd47f731329d44d58151a9d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["for" => 36, "set" => 38, "if" => 49];
        $filters = ["escape" => 35, "safe_join" => 88];
        $functions = ["create_attribute" => 85];

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set', 'if'],
                ['escape', 'safe_join'],
                ['create_attribute']
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
        // line 35
        echo "<div";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null)), "html", null, true);
        echo ">
  ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["theme_groups"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["theme_group"]) {
            // line 37
            echo "    ";
            // line 38
            $context["theme_group_classes"] = [0 => "system-themes-list", 1 => ("system-themes-list--" . $this->sandbox->ensureToStringAllowed($this->getAttribute(            // line 40
$context["theme_group"], "state", []))), 2 => "clearfix"];
            // line 44
            echo "
    ";
            // line 46
            $context["card_alignment"] = ((($this->getAttribute($context["theme_group"], "state", []) == "installed")) ? ("horizontal") : ("vertical"));
            // line 48
            echo "
    ";
            // line 49
            if ( !$this->getAttribute($context["loop"], "first", [])) {
                // line 50
                echo "      <hr>
    ";
            }
            // line 52
            echo "
    <div";
            // line 53
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["theme_group"], "attributes", []), "addClass", [0 => ($context["theme_group_classes"] ?? null)], "method")), "html", null, true);
            echo ">
      <h2 class=\"system-themes-list__header\">";
            // line 54
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["theme_group"], "title", [])), "html", null, true);
            echo "</h2>
      <div class=\"card-list ";
            // line 55
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["card_alignment"] ?? null) == "horizontal")) ? ("card-list--two-cols") : ("card-list--four-cols")));
            echo "\">
        ";
            // line 56
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["theme_group"], "themes", []));
            foreach ($context['_seq'] as $context["_key"] => $context["theme"]) {
                // line 57
                echo "          ";
                // line 58
                $context["theme_classes"] = [0 => (($this->getAttribute(                // line 59
$context["theme"], "is_default", [])) ? ("theme-default") : ("")), 1 => (($this->getAttribute(                // line 60
$context["theme"], "is_admin", [])) ? ("theme-admin") : ("")), 2 => "card", 3 => ("card--" . $this->sandbox->ensureToStringAllowed(                // line 62
($context["card_alignment"] ?? null))), 4 => "card-list__item"];
                // line 66
                echo "          ";
                // line 67
                $context["theme_title_classes"] = [0 => "card__content-item", 1 => "heading-f"];
                // line 72
                echo "          ";
                // line 73
                $context["theme_description_classes"] = [0 => "card__content-item"];
                // line 77
                echo "          <div";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["theme"], "attributes", []), "addClass", [0 => ($context["theme_classes"] ?? null)], "method"), "setAttribute", [0 => "aria-labelledby", 1 => $this->getAttribute($context["theme"], "title_id", [])], "method"), "setAttribute", [0 => "aria-describedby", 1 => (($this->getAttribute($context["theme"], "description_id", [])) ? ($this->getAttribute($context["theme"], "description_id", [])) : (null))], "method")), "html", null, true);
                echo ">
            ";
                // line 78
                if ($this->getAttribute($context["theme"], "screenshot", [])) {
                    // line 79
                    echo "              <div class=\"card__image\">
                ";
                    // line 80
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["theme"], "screenshot", [])), "html", null, true);
                    echo "
              </div>
            ";
                }
                // line 83
                echo "            <div class=\"card__content-wrapper\">
              <div class=\"card__content\">
                <h3";
                // line 85
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->env->getExtension('Drupal\Core\Template\TwigExtension')->createAttribute(["id" => $this->getAttribute($context["theme"], "title_id", [])]), "addClass", [0 => ($context["theme_title_classes"] ?? null)], "method")), "html", null, true);
                echo " id=";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["theme"], "title_id", [])), "html", null, true);
                echo ">";
                // line 86
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["theme"], "name", [])), "html", null, true);
                echo " ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["theme"], "version", [])), "html", null, true);
                // line 87
                if ($this->getAttribute($context["theme"], "notes", [])) {
                    // line 88
                    echo "                    (";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->safeJoin($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["theme"], "notes", [])), ", "));
                    echo ")";
                }
                // line 90
                echo "</h3>

                ";
                // line 92
                if (($this->getAttribute($context["theme"], "description", []) && $this->getAttribute($context["theme"], "description_id", []))) {
                    // line 93
                    echo "                  <div";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->env->getExtension('Drupal\Core\Template\TwigExtension')->createAttribute(["id" => (($this->getAttribute($context["theme"], "description_id", [])) ? ($this->getAttribute($context["theme"], "description_id", [])) : (null))]), "addClass", [0 => ($context["theme_description_classes"] ?? null)], "method")), "html", null, true);
                    echo ">
                    ";
                    // line 94
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["theme"], "description", [])), "html", null, true);
                    echo "
                  </div>";
                }
                // line 97
                echo "</div>

              <div class=\"card__footer\">
                ";
                // line 101
                echo "                ";
                if ($this->getAttribute($context["theme"], "incompatible", [])) {
                    // line 102
                    echo "                  <small class=\"incompatible\">";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["theme"], "incompatible", [])), "html", null, true);
                    echo "</small>
                ";
                } else {
                    // line 104
                    echo "                    ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["theme"], "operations", [])), "html", null, true);
                    echo "
                ";
                }
                // line 106
                echo "              </div>
            </div>
          </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 110
            echo "      </div>
    </div>
  ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "core/themes/claro/templates/system-themes-page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 113,  211 => 110,  202 => 106,  196 => 104,  190 => 102,  187 => 101,  182 => 97,  177 => 94,  172 => 93,  170 => 92,  166 => 90,  161 => 88,  159 => 87,  155 => 86,  150 => 85,  146 => 83,  140 => 80,  137 => 79,  135 => 78,  130 => 77,  128 => 73,  126 => 72,  124 => 67,  122 => 66,  120 => 62,  119 => 60,  118 => 59,  117 => 58,  115 => 57,  111 => 56,  107 => 55,  103 => 54,  99 => 53,  96 => 52,  92 => 50,  90 => 49,  87 => 48,  85 => 46,  82 => 44,  80 => 40,  79 => 38,  77 => 37,  60 => 36,  55 => 35,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "core/themes/claro/templates/system-themes-page.html.twig", "E:\\devdesktop\\sites\\socal\\DIR\\html\\core\\themes\\claro\\templates\\system-themes-page.html.twig");
    }
}
