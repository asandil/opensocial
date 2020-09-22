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

/* profiles/contrib/social/themes/socialbase/templates/group/group--small-teaser.html.twig */
class __TwigTemplate_7ffeee322aa4522fa0eea42f0e4fefd3557bf9aff58052a6d63c68c5251c44ea extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'teaser_image' => [$this, 'block_teaser_image'],
            'extra_text' => [$this, 'block_extra_text'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 5, "trans" => 27];
        $filters = ["striptags" => 5, "render" => 5, "escape" => 6, "capitalize" => 9, "clean_class" => 9];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'trans'],
                ['striptags', 'render', 'escape', 'capitalize', 'clean_class'],
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
        return "node--small-teaser.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("node--small-teaser.html.twig", "profiles/contrib/social/themes/socialbase/templates/group/group--small-teaser.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_teaser_image($context, array $blocks = [])
    {
        // line 4
        echo "  <div class=\"teaser--small__media\">
    ";
        // line 5
        if ( !twig_test_empty(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_group_image", [], "array")), "<img>"))) {
            // line 6
            echo "      ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_group_image", [], "array")), "html", null, true);
            echo "
    ";
        } else {
            // line 8
            echo "      <svg class=\"teaser--small__type-icon\">
        <title>";
            // line 9
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_capitalize_string_filter($this->env, \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["group"] ?? null), "bundle", [])))), "html", null, true);
            echo "</title>
        <use xlink:href=\"#icon-group\"></use>
      </svg>
    ";
        }
        // line 13
        echo "  </div>
";
    }

    // line 16
    public function block_extra_text($context, array $blocks = [])
    {
        // line 17
        echo "  <div class=\"teaser--small__meta\">
    ";
        // line 18
        if (($context["closed_group_lock"] ?? null)) {
            // line 19
            echo "      <svg class=\"icon-gray icon-small\">
        <use xlink:href=\"#icon-lock\"></use>
      </svg>
    ";
        } elseif (        // line 22
($context["secret_group_shield"] ?? null)) {
            // line 23
            echo "      <svg class=\"icon-gray icon-small\">
        <use xlink:href=\"#icon-shield\"></use>
      </svg>
    ";
        }
        // line 27
        echo "    ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["group_type"] ?? null)), "html", null, true);
        echo " &middot; ";
        echo \Drupal::translation()->formatPlural(abs(($context["group_members"] ?? null)), "1 member", "@count members", array());
        // line 28
        echo "  </div>
";
    }

    public function getTemplateName()
    {
        return "profiles/contrib/social/themes/socialbase/templates/group/group--small-teaser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 28,  115 => 27,  109 => 23,  107 => 22,  102 => 19,  100 => 18,  97 => 17,  94 => 16,  89 => 13,  82 => 9,  79 => 8,  73 => 6,  71 => 5,  68 => 4,  65 => 3,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "profiles/contrib/social/themes/socialbase/templates/group/group--small-teaser.html.twig", "E:\\devdesktop\\sites\\socal\\DIR\\html\\profiles\\contrib\\social\\themes\\socialbase\\templates\\group\\group--small-teaser.html.twig");
    }
}
