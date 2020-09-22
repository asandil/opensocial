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

/* profiles/contrib/social/themes/socialbase/templates/profile/profile--profile--teaser.html.twig */
class __TwigTemplate_510f4fe6390ed86c062f09ebf2206a067e3002453af94506b4b471dbd9409090 extends \Twig\Template
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
        $tags = ["block" => 27, "if" => 57, "for" => 74, "set" => 75, "trans" => 91];
        $filters = ["escape" => 23, "render" => 57, "t" => 64, "merge" => 75];
        $functions = ["attach_library" => 23];

        try {
            $this->sandbox->checkSecurity(
                ['block', 'if', 'for', 'set', 'trans'],
                ['escape', 'render', 't', 'merge'],
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
        echo "
";
        // line 23
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("socialbase/teaser"), "html", null, true);
        echo "

<div class=\"card teaser\">

  ";
        // line 27
        $this->displayBlock('card_image', $context, $blocks);
        // line 34
        echo "
  ";
        // line 35
        $this->displayBlock('card_teaser_type', $context, $blocks);
        // line 44
        echo "
  <div class=\"teaser__body\">
    <div class=\"teaser__content\">

      ";
        // line 48
        $this->displayBlock('card_title', $context, $blocks);
        // line 55
        echo "
      ";
        // line 56
        $this->displayBlock('card_body', $context, $blocks);
        // line 84
        echo "
    </div>

    <div class=\"card__actionbar\">
      ";
        // line 88
        $this->displayBlock('card_actionbar', $context, $blocks);
        // line 100
        echo "    </div>
  </div>
</div>
";
    }

    // line 27
    public function block_card_image($context, array $blocks = [])
    {
        // line 28
        echo "    <div class=\"teaser__image\">
      <a href=\"";
        // line 29
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["profile_home"] ?? null)), "html", null, true);
        echo "\">
        ";
        // line 30
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_profile_image", [])), "html", null, true);
        echo "
      </a>
    </div>
  ";
    }

    // line 35
    public function block_card_teaser_type($context, array $blocks = [])
    {
        // line 36
        echo "    <a href=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["profile_home"] ?? null)), "html", null, true);
        echo "\">
      <div class=\"teaser__teaser-type\">
        <svg class=\"teaser__teaser-type-icon\">
          <use xlink:href=\"#icon-account_circle\"></use>
        </svg>
      </div>
    </a>
  ";
    }

    // line 48
    public function block_card_title($context, array $blocks = [])
    {
        // line 49
        echo "        <h4 class=\"teaser__title\">
         <a href=\"";
        // line 50
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["profile_home"] ?? null)), "html", null, true);
        echo "\">
           ";
        // line 51
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["profile_name"] ?? null)), "html", null, true);
        echo " ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["profile_name_extra"] ?? null)), "html", null, true);
        echo "
          </a>
        </h4>
      ";
    }

    // line 56
    public function block_card_body($context, array $blocks = [])
    {
        // line 57
        echo "        ";
        if (($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_profile_function", [])) || $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_profile_organization", [])))) {
            // line 58
            echo "        <div class=\"teaser__content-line\">
          <svg class=\"teaser__content-type-icon\">
            <use xlink:href=\"#icon-business_center\"></use>
          </svg>
          <span class=\"teaser__content-text\">
            ";
            // line 63
            if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_profile_organization", []))) {
                // line 64
                echo "              ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("@function at @organization", ["@function" => $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_profile_function", []))), "@organization" => $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_profile_organization", [])))]));
                echo "
            ";
            } else {
                // line 66
                echo "              ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_profile_function", [])), "html", null, true);
                echo "
            ";
            }
            // line 68
            echo "          </span>
        </div>
        ";
        }
        // line 71
        echo "
        ";
        // line 72
        if (($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_profile_profile_tag", []), "#items", [], "array") || ($context["badges"] ?? null))) {
            // line 73
            echo "          <div style=\"margin-left: 30px; margin-top: 5px;\">
            ";
            // line 74
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["badges"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["badge"]) {
                // line 75
                echo "              ";
                $context["badge_classes"] = twig_array_merge($this->sandbox->ensureToStringAllowed($this->getAttribute($context["badge"], "classes", [])), [0 => "badge"]);
                // line 76
                echo "              <div";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["badge_classes"] ?? null)], "method")), "html", null, true);
                echo ">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["badge"], "label", [])), "html", null, true);
                echo "</div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['badge'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_profile_profile_tag", []), "#items", [], "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 79
                echo "              <div class=\"badge badge-default\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["item"], "entity", []), "label", [])), "html", null, true);
                echo "</div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            echo "          </div>
        ";
        }
        // line 83
        echo "      ";
    }

    // line 88
    public function block_card_actionbar($context, array $blocks = [])
    {
        // line 89
        echo "        <a href=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["profile_contact_url"] ?? null)), "html", null, true);
        echo "\" class=\"card__link\">
          ";
        // line 90
        if ((($context["profile_contact_label"] ?? null) == "private_message")) {
            // line 91
            echo "            ";
            echo t("Private message", array());
            // line 92
            echo "          ";
        } else {
            // line 93
            echo "            ";
            echo t("View profile", array());
            // line 94
            echo "          ";
        }
        // line 95
        echo "        </a>
        <a href=\"";
        // line 96
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["profile_stream_url"] ?? null)), "html", null, true);
        echo "\" class=\"card__link hidden-for-phone-only\">
          ";
        // line 97
        echo t("View activities", array());
        // line 98
        echo "        </a>
      ";
    }

    public function getTemplateName()
    {
        return "profiles/contrib/social/themes/socialbase/templates/profile/profile--profile--teaser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  270 => 98,  268 => 97,  264 => 96,  261 => 95,  258 => 94,  255 => 93,  252 => 92,  249 => 91,  247 => 90,  242 => 89,  239 => 88,  235 => 83,  231 => 81,  222 => 79,  217 => 78,  206 => 76,  203 => 75,  199 => 74,  196 => 73,  194 => 72,  191 => 71,  186 => 68,  180 => 66,  174 => 64,  172 => 63,  165 => 58,  162 => 57,  159 => 56,  149 => 51,  145 => 50,  142 => 49,  139 => 48,  126 => 36,  123 => 35,  115 => 30,  111 => 29,  108 => 28,  105 => 27,  98 => 100,  96 => 88,  90 => 84,  88 => 56,  85 => 55,  83 => 48,  77 => 44,  75 => 35,  72 => 34,  70 => 27,  63 => 23,  60 => 22,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "profiles/contrib/social/themes/socialbase/templates/profile/profile--profile--teaser.html.twig", "E:\\devdesktop\\sites\\socal\\DIR\\html\\profiles\\contrib\\social\\themes\\socialbase\\templates\\profile\\profile--profile--teaser.html.twig");
    }
}
