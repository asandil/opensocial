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

/* profiles/contrib/social/themes/socialbase/templates/profile/profile--profile--hero.html.twig */
class __TwigTemplate_4ebbbbfeff5982a13af567732a6c09e0ad014efb7a7f63dd0519759e3ebcd75e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 24, "trans" => 32];
        $filters = ["escape" => 22, "render" => 50, "without" => 77];
        $functions = ["attach_library" => 22];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'trans'],
                ['escape', 'render', 'without'],
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
        // line 24
        if (($context["profile_hero_styled_image_url"] ?? null)) {
            // line 25
            echo "  <div style=\"background-image: url('";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["profile_hero_styled_image_url"] ?? null)), "html", null, true);
            echo "')\" class=\"cover cover-img cover-img-gradient\">
";
        } else {
            // line 27
            echo "  <div class=\"cover\">
";
        }
        // line 29
        echo "    <div class=\"hero__bgimage-overlay\"></div>
";
        // line 30
        if (($context["profile_edit_url"] ?? null)) {
            // line 31
            echo "  <div class=\"hero-action-button\">
    <a href=\"";
            // line 32
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["profile_edit_url"] ?? null)), "html", null, true);
            echo "\" title=\"";
            echo t("Edit profile information", array());
            echo "\" class=\"btn btn-raised btn-default btn-floating\">
      <svg class=\"icon-medium\">
        <use xlink:href=\"#icon-edit\"></use>
      </svg>
    </a>
  </div>
";
        }
        // line 39
        echo "
  <div class=\"cover-wrap\">

    <header>
      ";
        // line 43
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_profile_image", [])), "html", null, true);
        echo "
      <h1 class=\"page-title\">
        ";
        // line 45
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["profile_name"] ?? null)), "html", null, true);
        echo " ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["profile_name_extra"] ?? null)), "html", null, true);
        echo "
      </h1>
    </header>


  ";
        // line 50
        if ((($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_profile_function", [])) || $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_profile_organization", []))) || (($context["profile_contact_label"] ?? null) == "private_message"))) {
            // line 51
            echo "    <footer class=\"hero-footer\">
  ";
        }
        // line 53
        echo "
    <div class=\"hero-footer__text\">
      ";
        // line 55
        if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_profile_function", []))) {
            // line 56
            echo "        <strong>";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_profile_function", [])), "html", null, true);
            echo "</strong>
      ";
        }
        // line 58
        echo "      ";
        if (($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_profile_function", [])) && $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_profile_organization", [])))) {
            // line 59
            echo "      &nbsp;-&nbsp;
      ";
        }
        // line 61
        echo "        ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_profile_organization", [])), "html", null, true);
        echo "
    </div>

    ";
        // line 64
        if ((($context["profile_contact_label"] ?? null) == "private_message")) {
            // line 65
            echo "      <div class=\"hero-footer__cta\">
        <a href=\"";
            // line 66
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["profile_contact_url"] ?? null)), "html", null, true);
            echo "\" class=\"btn btn-accent btn-lg btn-raised\">
          ";
            // line 67
            echo t("Private message", array());
            // line 68
            echo "        </a>
      </div>
    ";
        }
        // line 71
        echo "
  ";
        // line 72
        if ((($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_profile_function", [])) || $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_profile_organization", []))) || (($context["profile_contact_label"] ?? null) == "private_message"))) {
            // line 73
            echo "    </footer>
  ";
        }
        // line 75
        echo "
    ";
        // line 77
        echo "    ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "field_profile_first_name", "field_profile_last_name", "field_profile_image", "field_profile_function", "field_profile_organization"), "html", null, true);
        echo "
  </div>

</div>
";
    }

    public function getTemplateName()
    {
        return "profiles/contrib/social/themes/socialbase/templates/profile/profile--profile--hero.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 77,  170 => 75,  166 => 73,  164 => 72,  161 => 71,  156 => 68,  154 => 67,  150 => 66,  147 => 65,  145 => 64,  138 => 61,  134 => 59,  131 => 58,  125 => 56,  123 => 55,  119 => 53,  115 => 51,  113 => 50,  103 => 45,  98 => 43,  92 => 39,  80 => 32,  77 => 31,  75 => 30,  72 => 29,  68 => 27,  62 => 25,  60 => 24,  55 => 22,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "profiles/contrib/social/themes/socialbase/templates/profile/profile--profile--hero.html.twig", "E:\\devdesktop\\sites\\socal\\DIR\\html\\profiles\\contrib\\social\\themes\\socialbase\\templates\\profile\\profile--profile--hero.html.twig");
    }
}
