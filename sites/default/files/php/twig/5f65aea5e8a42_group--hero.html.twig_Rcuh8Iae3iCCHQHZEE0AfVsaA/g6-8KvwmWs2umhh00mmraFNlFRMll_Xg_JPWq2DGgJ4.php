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

/* profiles/contrib/social/themes/socialbase/templates/group/group--hero.html.twig */
class __TwigTemplate_750c4623396903592357983d8043ae3070b8eeb5e77d18088a70c7b1737e1472 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 25, "if" => 35, "trans" => 39];
        $filters = ["escape" => 22, "render" => 74];
        $functions = ["attach_library" => 22];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'trans'],
                ['escape', 'render'],
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
        // line 22
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("socialbase/hero"), "html", null, true);
        echo "

";
        // line 25
        $context["cover_classes"] = [0 => "cover", 1 => ((        // line 27
($context["group_hero_styled_image_url"] ?? null)) ? ("cover-img cover-img-gradient") : (""))];
        // line 30
        echo "
";
        // line 32
        $context["cover_wrap_classes"] = ((($context["group_hero_small"] ?? null)) ? ("cover-wrap small") : ("cover-wrap"));
        // line 34
        echo "
<div";
        // line 35
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["cover_classes"] ?? null)], "method")), "html", null, true);
        echo " ";
        if (($context["group_hero_styled_image_url"] ?? null)) {
            echo " style=\"background-image: url('";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["group_hero_styled_image_url"] ?? null)), "html", null, true);
            echo "');\" ";
        }
        echo ">
  <div class=\"hero__bgimage-overlay\"></div>
  ";
        // line 37
        if (($context["group_edit_url"] ?? null)) {
            // line 38
            echo "    <div class=\"hero-action-button\">
      <a href=\"";
            // line 39
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["group_edit_url"] ?? null)), "html", null, true);
            echo "\"  title=\"";
            echo t("Edit group", array());
            echo "\" class=\"btn btn-default btn-floating\">
        <svg class=\"icon-gray icon-medium\">
          <use xlink:href=\"#icon-edit\"></use>
        </svg>
      </a>
    </div>
  ";
        }
        // line 46
        echo "  <div class=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["cover_wrap_classes"] ?? null)), "html", null, true);
        echo "\">
    <header class=\"page-title\">
      <h1>
          ";
        // line 49
        if (($context["closed_group_lock"] ?? null)) {
            // line 50
            echo "              <svg class=\"icon-white icon-medium\">
                  <use xlink:href=\"#icon-lock\"></use>
              </svg>
          ";
        } elseif (        // line 53
($context["secret_group_shield"] ?? null)) {
            // line 54
            echo "              <svg class=\"icon-white icon-medium\">
                  <use xlink:href=\"#icon-shield\"></use>
              </svg>
          ";
        }
        // line 58
        echo "          <span>";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
        echo "</span></h1>
        ";
        // line 59
        if (($context["group_type"] ?? null)) {
            // line 60
            echo "          <span>";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["group_type"] ?? null)), "html", null, true);
            echo "</span>
        ";
        }
        // line 62
        echo "          ";
        if (($context["group_settings_help"] ?? null)) {
            // line 63
            echo "            <span>
              ";
            // line 64
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["group_settings_help"] ?? null)), "html", null, true);
            echo "
            </span>
          ";
        }
        // line 67
        echo "        &bullet;
        <span>
          ";
        // line 69
        echo \Drupal::translation()->formatPlural(abs(($context["group_members"] ?? null)), "1 member", "@count members", array());
        // line 70
        echo "        </span>
    </header>
    <footer class=\"hero-footer\">
      <div class=\"hero-footer__text\">
        ";
        // line 74
        if (( !twig_test_empty($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_group_location", []))) &&  !twig_test_empty($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_group_address", []))))) {
            // line 75
            echo "          <svg class=\"hero-footer-icon\">
            <use xlink:href=\"#icon-location\"></use>
          </svg>
        ";
        }
        // line 79
        echo "        <span class=\"inline-center\">
          ";
        // line 80
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_group_location", [])), "html", null, true);
        echo "
          ";
        // line 81
        if (( !twig_test_empty($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_group_location", []))) &&  !twig_test_empty($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_group_address", []))))) {
            echo " &bullet;";
        }
        // line 82
        echo "          ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_group_address", [])), "html", null, true);
        echo " </span>
      </div>

      ";
        // line 85
        if (($context["group_operations_url"] ?? null)) {
            // line 86
            echo "        <div class=\"hero-footer__cta\">
          <div class=\"btn-group\">
            ";
            // line 88
            if (($context["user_is_invited"] ?? null)) {
                // line 89
                echo "              <div class=\"dropdown\">
                <a href=\"";
                // line 90
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["group_invite_accept_operations_url"] ?? null)), "html", null, true);
                echo "\" class=\"btn btn-accent btn-lg btn-raised\" title=\"";
                echo t("Join", array());
                echo "\">";
                echo t("Accept", array());
                echo "</a>
                <button type=\"button\" autocomplete=\"off\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" class=\"btn btn-accent btn-lg btn-raised waves-effect waves-btn waves-light margin-left-m dropdown-toggle\"><span class=\"caret\"></span></button>
                <ul class=\"dropdown-menu dropdown-menu-right\">
                  <li><a href=\"";
                // line 93
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["group_invite_decline_operations_url"] ?? null)), "html", null, true);
                echo "\">";
                echo t("Decline", array());
                echo "</a></li>
                </ul>
              </div>
            ";
            } elseif (            // line 96
($context["joined"] ?? null)) {
                // line 97
                echo "              <button type=\"button\" autocomplete=\"off\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" class=\"btn btn-accent btn-lg btn-raised dropdown-toggle\">";
                echo t("Joined", array(), ["context" => "Is a member"]);
                echo "<span class=\"caret\"></span></button>
              <ul class=\"dropdown-menu dropdown-menu-right\">
                <li><a href=\"";
                // line 99
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["group_operations_url"] ?? null)), "html", null, true);
                echo "\">";
                echo t("Leave group", array());
                echo "</a></li>
              </ul>
            ";
            } elseif (            // line 101
($context["closed_group"] ?? null)) {
                // line 102
                echo "              ";
                if (($context["allow_request"] ?? null)) {
                    // line 103
                    echo "                ";
                    if (($context["requested"] ?? null)) {
                        // line 104
                        echo "                  <button type=\"button\" autocomplete=\"off\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" class=\"btn btn-accent btn-lg btn-raised dropdown-toggle\">";
                        echo t("Request sent", array());
                        echo "<span class=\"caret\"></span></button>
                  <ul class=\"dropdown-menu dropdown-menu-right\">
                    <li><a href=\"";
                        // line 106
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["group_operations_url"] ?? null)), "html", null, true);
                        echo "\">";
                        echo t("Cancel request", array());
                        echo "</a></li>
                  </ul>
                ";
                    } else {
                        // line 109
                        echo "                  <a href=\"";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["group_operations_url"] ?? null)), "html", null, true);
                        echo "\" class=\"btn btn-accent btn-lg btn-raised dropdown-toggle use-ajax\" title=\"";
                        echo t("Request to join", array());
                        echo "\">";
                        echo t("Request to join", array());
                        echo "</a>
                ";
                    }
                    // line 111
                    echo "              ";
                } else {
                    // line 112
                    echo "                <a href=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["group_operations_url"] ?? null)), "html", null, true);
                    echo "\" class=\"btn btn-accent btn-lg btn-raised dropdown-toggle disabled\" title=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["cta"] ?? null)), "html", null, true);
                    echo "\">";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["cta"] ?? null)), "html", null, true);
                    echo "</a>
              ";
                }
                // line 114
                echo "            ";
            } elseif (($context["anonymous_request"] ?? null)) {
                // line 115
                echo "              <a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["group_operations_url"] ?? null)), "html", null, true);
                echo "\" class=\"btn btn-accent btn-lg btn-raised dropdown-toggle use-ajax\" title=\"";
                echo t("Request to join", array());
                echo "\">";
                echo t("Request to join", array());
                echo "</a>
            ";
            } else {
                // line 117
                echo "              <a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["group_operations_url"] ?? null)), "html", null, true);
                echo "\" class=\"btn btn-accent btn-lg btn-raised dropdown-toggle\" title=\"";
                echo t("Join", array());
                echo "\">";
                echo t("Join", array());
                echo "</a>
            ";
            }
            // line 119
            echo "          </div>
        </div>
      ";
        }
        // line 122
        echo "    </footer>
  </div> ";
        // line 124
        echo "</div> ";
    }

    public function getTemplateName()
    {
        return "profiles/contrib/social/themes/socialbase/templates/group/group--hero.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  304 => 124,  301 => 122,  296 => 119,  286 => 117,  276 => 115,  273 => 114,  263 => 112,  260 => 111,  250 => 109,  242 => 106,  236 => 104,  233 => 103,  230 => 102,  228 => 101,  221 => 99,  215 => 97,  213 => 96,  205 => 93,  195 => 90,  192 => 89,  190 => 88,  186 => 86,  184 => 85,  177 => 82,  173 => 81,  169 => 80,  166 => 79,  160 => 75,  158 => 74,  152 => 70,  150 => 69,  146 => 67,  140 => 64,  137 => 63,  134 => 62,  128 => 60,  126 => 59,  121 => 58,  115 => 54,  113 => 53,  108 => 50,  106 => 49,  99 => 46,  87 => 39,  84 => 38,  82 => 37,  71 => 35,  68 => 34,  66 => 32,  63 => 30,  61 => 27,  60 => 25,  55 => 22,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "profiles/contrib/social/themes/socialbase/templates/group/group--hero.html.twig", "E:\\devdesktop\\sites\\socal\\DIR\\html\\profiles\\contrib\\social\\themes\\socialbase\\templates\\group\\group--hero.html.twig");
    }
}
