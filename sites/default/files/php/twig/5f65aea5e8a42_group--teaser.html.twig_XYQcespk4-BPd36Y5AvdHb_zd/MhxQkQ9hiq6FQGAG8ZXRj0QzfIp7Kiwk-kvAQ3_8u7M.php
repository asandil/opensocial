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

/* profiles/contrib/social/themes/socialbase/templates/group/group--teaser.html.twig */
class __TwigTemplate_4638688a62681f9eedfedc86bfa508a67bf3a9c2c3ad401fd5233cafe05ae7bd extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'card_image' => [$this, 'block_card_image'],
            'card_teaser_type' => [$this, 'block_card_teaser_type'],
            'card_title' => [$this, 'block_card_title'],
            'card_body' => [$this, 'block_card_body'],
            'card_actionbar' => [$this, 'block_card_actionbar'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 46, "block" => 56, "if" => 77, "trans" => 120];
        $filters = ["escape" => 43, "render" => 49];
        $functions = ["attach_library" => 43];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if', 'trans'],
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
        // line 42
        echo "
";
        // line 43
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("socialbase/teaser"), "html", null, true);
        echo "

";
        // line 46
        $context["classes"] = [0 => "card", 1 => "teaser", 2 => (( !$this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(        // line 49
($context["content"] ?? null), "field_group_image", [])))) ? ("no-image") : (""))];
        // line 52
        echo "
<div";
        // line 53
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo ">

  <div class='teaser__image'>
    ";
        // line 56
        $this->displayBlock('card_image', $context, $blocks);
        // line 59
        echo "
    ";
        // line 60
        $this->displayBlock('card_teaser_type', $context, $blocks);
        // line 69
        echo "  </div>

  <div class='teaser__body'>
    <div class=\"teaser__content\">

      ";
        // line 74
        $this->displayBlock('card_title', $context, $blocks);
        // line 90
        echo "
      ";
        // line 91
        $this->displayBlock('card_body', $context, $blocks);
        // line 114
        echo "    </div>

    <div class=\"card__actionbar\">
      ";
        // line 117
        $this->displayBlock('card_actionbar', $context, $blocks);
        // line 143
        echo "    </div>

  </div>
</div>
";
    }

    // line 56
    public function block_card_image($context, array $blocks = [])
    {
        // line 57
        echo "      ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_group_image", [])), "html", null, true);
        echo "
    ";
    }

    // line 60
    public function block_card_teaser_type($context, array $blocks = [])
    {
        // line 61
        echo "      <a href=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null)), "html", null, true);
        echo "\">
        <div class=\"teaser__teaser-type\">
          <svg class=\"teaser__teaser-type-icon\">
            <use xlink:href=\"#icon-group-white\"></use>
          </svg>
        </div>
      </a>
    ";
    }

    // line 74
    public function block_card_title($context, array $blocks = [])
    {
        // line 75
        echo "        ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null)), "html", null, true);
        echo "
        <h4";
        // line 76
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_attributes"] ?? null)), "html", null, true);
        echo " class=\"teaser__title\">
          ";
        // line 77
        if (($context["closed_group_lock"] ?? null)) {
            // line 78
            echo "            <svg class=\"icon-gray icon-small\">
              <use xlink:href=\"#icon-lock\"></use>
            </svg>
          ";
        } elseif (        // line 81
($context["secret_group_shield"] ?? null)) {
            // line 82
            echo "            <svg class=\"icon-gray icon-small\">
              <use xlink:href=\"#icon-shield\"></use>
            </svg>
          ";
        }
        // line 86
        echo "          <a href=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null)), "html", null, true);
        echo "\" rel=\"bookmark\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
        echo "</a>
        </h4>
        ";
        // line 88
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null)), "html", null, true);
        echo "
      ";
    }

    // line 91
    public function block_card_body($context, array $blocks = [])
    {
        // line 92
        echo "        <div class=\"teaser__content-line\">
          <svg class=\"teaser__content-type-icon\">
            <use xlink:href=\"#icon-label\"></use>
          </svg>
          <span class=\"teaser__content-text\">
            ";
        // line 97
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["group_type"] ?? null)), "html", null, true);
        echo "
            ";
        // line 98
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["group_settings_help"] ?? null)), "html", null, true);
        echo "
          </span>
        </div>
        ";
        // line 101
        if (($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_group_location", [])) || $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_group_address", [])))) {
            // line 102
            echo "          <div class=\"teaser__content-line\">
              <svg class=\"teaser__content-type-icon\">
                  <use xlink:href=\"#icon-location\"></use>
              </svg>
            <span class=\"teaser__content-text\">
              ";
            // line 107
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_group_location", [])), "html", null, true);
            echo "
              ";
            // line 108
            if (( !twig_test_empty($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_group_location", []))) &&  !twig_test_empty($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_group_address", []))))) {
                echo " &bullet;";
            }
            // line 109
            echo "              ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_group_address", [])), "html", null, true);
            echo "
            </span>
          </div>
        ";
        }
        // line 113
        echo "      ";
    }

    // line 117
    public function block_card_actionbar($context, array $blocks = [])
    {
        // line 118
        echo "
        ";
        // line 119
        if ( !twig_test_empty(($context["group_members"] ?? null))) {
            // line 120
            echo "          <div class=\"badge teaser__badge\" title=\"";
            echo t("Total amount of group members", array());
            echo "\">
            <span class=\"badge__container\">
              <svg class=\"badge__icon\">
                <use xlink:href=\"#icon-group\"></use>
              </svg>
              <span class=\"badge__label\">
                ";
            // line 126
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["group_members"] ?? null)), "html", null, true);
            echo "
              </span>
            </span>
          </div>
        ";
        }
        // line 131
        echo "
        ";
        // line 132
        if (($context["joined"] ?? null)) {
            // line 133
            echo "          <span class=\"badge teaser__badge badge-default\">
            ";
            // line 134
            echo t("You have joined", array(), ["context" => "Is a member"]);
            // line 135
            echo "          </span>
        ";
        }
        // line 137
        echo "
        <a href=\"";
        // line 138
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null)), "html", null, true);
        echo "\" class=\"card__link\" title=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
        echo "\">
          ";
        // line 139
        echo t("Read more", array());
        // line 140
        echo "        </a>

      ";
    }

    public function getTemplateName()
    {
        return "profiles/contrib/social/themes/socialbase/templates/group/group--teaser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  283 => 140,  281 => 139,  275 => 138,  272 => 137,  268 => 135,  266 => 134,  263 => 133,  261 => 132,  258 => 131,  250 => 126,  240 => 120,  238 => 119,  235 => 118,  232 => 117,  228 => 113,  220 => 109,  216 => 108,  212 => 107,  205 => 102,  203 => 101,  197 => 98,  193 => 97,  186 => 92,  183 => 91,  177 => 88,  169 => 86,  163 => 82,  161 => 81,  156 => 78,  154 => 77,  150 => 76,  145 => 75,  142 => 74,  129 => 61,  126 => 60,  119 => 57,  116 => 56,  108 => 143,  106 => 117,  101 => 114,  99 => 91,  96 => 90,  94 => 74,  87 => 69,  85 => 60,  82 => 59,  80 => 56,  74 => 53,  71 => 52,  69 => 49,  68 => 46,  63 => 43,  60 => 42,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "profiles/contrib/social/themes/socialbase/templates/group/group--teaser.html.twig", "E:\\devdesktop\\sites\\socal\\DIR\\html\\profiles\\contrib\\social\\themes\\socialbase\\templates\\group\\group--teaser.html.twig");
    }
}
