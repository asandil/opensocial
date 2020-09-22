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

/* profiles/contrib/social/themes/socialbase/templates/layout/page.html.twig */
class __TwigTemplate_391469c6603bf094bd74f36e0766cb879f08352b05d5b7cb3ae6d3a1ef6c418e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'section' => [$this, 'block_section'],
            'content' => [$this, 'block_content'],
            'sidebar_first' => [$this, 'block_sidebar_first'],
            'sidebar_second' => [$this, 'block_sidebar_second'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 36, "block" => 59];
        $filters = ["escape" => 37];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'block'],
                ['escape'],
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

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 35
        echo "
";
        // line 36
        if ($this->getAttribute(($context["page"] ?? null), "header", [])) {
            // line 37
            echo "  ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
            echo "
";
        }
        // line 39
        echo "
<main id=\"content\" class=\"main-container\" role=\"main\">

  ";
        // line 42
        if ($this->getAttribute(($context["page"] ?? null), "breadcrumb", [])) {
            // line 43
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "breadcrumb", [])), "html", null, true);
            echo "
  ";
        }
        // line 45
        echo "
  ";
        // line 46
        if ($this->getAttribute(($context["page"] ?? null), "hero", [])) {
            // line 47
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "hero", [])), "html", null, true);
            echo "
  ";
        }
        // line 49
        echo "
  ";
        // line 50
        if ($this->getAttribute(($context["page"] ?? null), "secondary_navigation", [])) {
            // line 51
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "secondary_navigation", [])), "html", null, true);
            echo "
  ";
        }
        // line 53
        echo "
  ";
        // line 54
        if ($this->getAttribute(($context["page"] ?? null), "content_top", [])) {
            // line 55
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content_top", [])), "html", null, true);
            echo "
  ";
        }
        // line 57
        echo "
  ";
        // line 59
        echo "  ";
        $this->displayBlock('section', $context, $blocks);
        // line 98
        echo "
  ";
        // line 99
        if ($this->getAttribute(($context["page"] ?? null), "content_bottom", [])) {
            // line 100
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content_bottom", [])), "html", null, true);
            echo "
  ";
        }
        // line 102
        echo "
</main>

";
        // line 105
        if ($this->getAttribute(($context["page"] ?? null), "footer", [])) {
            // line 106
            echo "  ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer", [])), "html", null, true);
            echo "
";
        }
    }

    // line 59
    public function block_section($context, array $blocks = [])
    {
        // line 60
        echo "    <section";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_attributes"] ?? null)), "html", null, true);
        echo ">

      ";
        // line 62
        if (($this->getAttribute(($context["page"] ?? null), "title", []) && ($context["display_page_title"] ?? null))) {
            // line 63
            echo "        ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "title", [])), "html", null, true);
            echo "
      ";
        }
        // line 65
        echo "
      ";
        // line 66
        if (($this->getAttribute(($context["page"] ?? null), "complementary_top", []) || $this->getAttribute(($context["page"] ?? null), "complementary_bottom", []))) {
            // line 67
            echo "        <aside class=\"region--complementary\" role=\"complementary\">
          ";
            // line 68
            if ($this->getAttribute(($context["page"] ?? null), "complementary_top", [])) {
                // line 69
                echo "            ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "complementary_top", [])), "html", null, true);
                echo "
          ";
            }
            // line 71
            echo "          ";
            if ($this->getAttribute(($context["page"] ?? null), "complementary_bottom", [])) {
                // line 72
                echo "            ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "complementary_bottom", [])), "html", null, true);
                echo "
          ";
            }
            // line 74
            echo "        </aside>
      ";
        }
        // line 76
        echo "
      ";
        // line 77
        $this->displayBlock('content', $context, $blocks);
        // line 81
        echo "
      ";
        // line 83
        echo "      ";
        if ((($this->getAttribute(($context["page"] ?? null), "sidebar_first", []) &&  !$this->getAttribute(($context["page"] ?? null), "complementary_top", [])) &&  !$this->getAttribute(($context["page"] ?? null), "complementary_bottom", []))) {
            // line 84
            echo "        ";
            $this->displayBlock('sidebar_first', $context, $blocks);
            // line 87
            echo "      ";
        }
        // line 88
        echo "
      ";
        // line 90
        echo "      ";
        if ((($this->getAttribute(($context["page"] ?? null), "sidebar_second", []) &&  !$this->getAttribute(($context["page"] ?? null), "complementary_top", [])) &&  !$this->getAttribute(($context["page"] ?? null), "complementary_bottom", []))) {
            // line 91
            echo "        ";
            $this->displayBlock('sidebar_second', $context, $blocks);
            // line 94
            echo "      ";
        }
        // line 95
        echo "
    </section>
  ";
    }

    // line 77
    public function block_content($context, array $blocks = [])
    {
        // line 78
        echo "        <a id=\"main-content\" tabindex=\"-1\"></a>
        ";
        // line 79
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "
      ";
    }

    // line 84
    public function block_sidebar_first($context, array $blocks = [])
    {
        // line 85
        echo "          ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
        echo "
        ";
    }

    // line 91
    public function block_sidebar_second($context, array $blocks = [])
    {
        // line 92
        echo "          ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "profiles/contrib/social/themes/socialbase/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  254 => 92,  251 => 91,  244 => 85,  241 => 84,  235 => 79,  232 => 78,  229 => 77,  223 => 95,  220 => 94,  217 => 91,  214 => 90,  211 => 88,  208 => 87,  205 => 84,  202 => 83,  199 => 81,  197 => 77,  194 => 76,  190 => 74,  184 => 72,  181 => 71,  175 => 69,  173 => 68,  170 => 67,  168 => 66,  165 => 65,  159 => 63,  157 => 62,  151 => 60,  148 => 59,  140 => 106,  138 => 105,  133 => 102,  127 => 100,  125 => 99,  122 => 98,  119 => 59,  116 => 57,  110 => 55,  108 => 54,  105 => 53,  99 => 51,  97 => 50,  94 => 49,  88 => 47,  86 => 46,  83 => 45,  77 => 43,  75 => 42,  70 => 39,  64 => 37,  62 => 36,  59 => 35,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "profiles/contrib/social/themes/socialbase/templates/layout/page.html.twig", "E:\\devdesktop\\sites\\socal\\DIR\\html\\profiles\\contrib\\social\\themes\\socialbase\\templates\\layout\\page.html.twig");
    }
}
