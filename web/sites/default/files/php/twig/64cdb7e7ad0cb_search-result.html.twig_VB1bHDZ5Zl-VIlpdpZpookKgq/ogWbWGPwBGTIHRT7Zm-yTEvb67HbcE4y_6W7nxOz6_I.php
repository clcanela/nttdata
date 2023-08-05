<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* core/themes/olivero/templates/content/search-result.html.twig */
class __TwigTemplate_e16d393698c9f2039fd27708ac8ab8cf extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 58
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("olivero/search-results"), "html", null, true);
        echo "
";
        // line 59
        if (($context["info_split"] ?? null)) {
            // line 60
            echo "  <div class=\"search-result__meta\">
    ";
            // line 61
            if (twig_get_attribute($this->env, $this->source, ($context["info_split"] ?? null), "user", [], "any", false, false, true, 61)) {
                // line 62
                echo "      <span>
        ";
                // line 63
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("By"));
                echo " ";
                ob_start();
                echo "<span class=\"search-result__author\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["info_split"] ?? null), "user", [], "any", false, false, true, 63), 63, $this->source), "html", null, true);
                echo "</span>";
                $___internal_parse_0_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_spaceless($___internal_parse_0_));
                // line 64
                echo "      </span>
    ";
            }
            // line 66
            echo "    ";
            if (($context["info_date"] ?? null)) {
                // line 67
                echo "      <span  class=\"search-result__date\">, ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["info_date"] ?? null), 67, $this->source), "html", null, true);
                echo "</span>
    ";
            }
            // line 69
            echo "  </div>
";
        }
        // line 71
        if (($context["title"] ?? null)) {
            // line 72
            echo "  ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 72, $this->source), "html", null, true);
            echo "
  <h3";
            // line 73
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "search-result__title"], "method", false, false, true, 73), 73, $this->source), "html", null, true);
            echo ">
    <a href=\"";
            // line 74
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 74, $this->source), "html", null, true);
            echo "\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 74, $this->source), "html", null, true);
            echo "</a>
  </h3>
  ";
            // line 76
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 76, $this->source), "html", null, true);
            echo "
";
        }
        // line 78
        if (($context["snippet"] ?? null)) {
            // line 79
            echo "  <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => "search-result__snippet", 1 => ($context["layout"] ?? null), 2 => "text-content"], "method", false, false, true, 79), 79, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["snippet"] ?? null), 79, $this->source), "html", null, true);
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "core/themes/olivero/templates/content/search-result.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 79,  102 => 78,  97 => 76,  90 => 74,  86 => 73,  81 => 72,  79 => 71,  75 => 69,  69 => 67,  66 => 66,  62 => 64,  53 => 63,  50 => 62,  48 => 61,  45 => 60,  43 => 59,  39 => 58,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override for displaying a single search result.
 *
 * This template renders a single search result. The list of results is
 * rendered using '#theme' => 'item_list', with suggestions of:
 * - item_list__search_results__(plugin_id)
 * - item_list__search_results
 *
 * Available variables:
 * - url: URL of the result.
 * - title: Title of the result.
 * - snippet: A small preview of the result. Does not apply to user searches.
 * - info: String of all the meta information ready for print. Does not apply
 *   to user searches.
 * - plugin_id: The machine-readable name of the plugin being executed,such
 *   as \"node_search\" or \"user_search\".
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 * - info_split: Contains same data as info, but split into separate parts.
 *   - info_split.type: Node type (or item type string supplied by module).
 *   - info_split.user: Author of the node linked to users profile. Depends
 *     on permission.
 *   - info_split.date: Last update of the node. Short formatted.
 *   - info_split.comment: Number of comments output as \"% comments\", %
 *     being the count. (Depends on comment.module).
 *   items should instead be within info and renamed info.foo, info.bar, etc.
 *
 * Other variables:
 * - title_attributes: HTML attributes for the title.
 * - content_attributes: HTML attributes for the content.
 *
 * Since info_split is keyed, a direct print of the item is possible.
 * This array does not apply to user searches so it is recommended to check
 * for its existence before printing. The default keys of 'type', 'user' and
 * 'date' always exist for node searches. Modules may provide other data.
 * @code
 *   {% if (info_split.comment) %}
 *     <span class=\"info-comment\">
 *       {{ info_split.comment }}
 *     </span>
 *   {% endif %}
 * @endcode
 *
 * To check for all available data within info_split, use the code below.
 * @code
 *   <pre>
 *     {{ dump(info_split) }}
 *   </pre>
 * @endcode
 *
 * @see template_preprocess_search_result()
 */
#}
{{ attach_library('olivero/search-results') }}
{% if info_split %}
  <div class=\"search-result__meta\">
    {% if info_split.user  %}
      <span>
        {{ 'By'|t }} {% apply spaceless %}<span class=\"search-result__author\">{{ info_split.user }}</span>{% endapply %}
      </span>
    {% endif %}
    {% if info_date  %}
      <span  class=\"search-result__date\">, {{ info_date }}</span>
    {% endif %}
  </div>
{% endif %}
{% if title %}
  {{ title_prefix }}
  <h3{{ title_attributes.addClass('search-result__title') }}>
    <a href=\"{{ url }}\">{{ title }}</a>
  </h3>
  {{ title_suffix }}
{% endif %}
{% if snippet %}
  <div{{ content_attributes.addClass('search-result__snippet', layout, 'text-content') }}>{{ snippet }}</div>
{% endif %}
", "core/themes/olivero/templates/content/search-result.html.twig", "/var/www/html/web/core/themes/olivero/templates/content/search-result.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 59, "apply" => 63);
        static $filters = array("escape" => 58, "t" => 63, "spaceless" => 63);
        static $functions = array("attach_library" => 58);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'apply'],
                ['escape', 't', 'spaceless'],
                ['attach_library']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

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
}
