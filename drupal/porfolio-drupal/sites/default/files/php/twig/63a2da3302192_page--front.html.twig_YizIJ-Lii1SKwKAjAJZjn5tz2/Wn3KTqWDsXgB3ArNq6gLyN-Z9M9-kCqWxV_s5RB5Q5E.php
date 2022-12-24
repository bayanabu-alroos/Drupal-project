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

/* themes/contrib/yg_freelancer/templates/layout/page--front.html.twig */
class __TwigTemplate_a83f6ea691ae146f75166d6d5c045143 extends \Twig\Template
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
        // line 1
        echo "<div class=\"fh5co-loader\"></div>

<div id=\"page\"> 
  ";
        // line 4
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 4), 4, $this->source), "html", null, true);
        echo "
</div>

<div id=\"fh5co-footer\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-12\">
        <p> &copy;2018. <a href=\"#\"> YG Freelancer</a>.&nbsp;All Rights Reserved.<br></p>
        <p>Designed by <a href=\"http://freehtml5.co\" target=\"_blank\">FreeHTML5.co</a>.  Theme By<a href=\"https://www.drupaldevelopersstudio.com/\" target=\"_blank\"> Drupal Developers Studio</a>, A Division of <a href=\"https://www.youngglobes.com/\" target=\"_blank\"> Young Globes</a></p>
      </div>
    </div>
  </div>
</div>
<div class=\"gototop js-top\">
  <a href=\"#\" class=\"js-gotop\"><i class=\"icon-arrow-up22\"></i></a>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/contrib/yg_freelancer/templates/layout/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/yg_freelancer/templates/layout/page--front.html.twig", "C:\\xampp\\htdocs\\porfolio-drupal\\themes\\contrib\\yg_freelancer\\templates\\layout\\page--front.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 4);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
                []
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
