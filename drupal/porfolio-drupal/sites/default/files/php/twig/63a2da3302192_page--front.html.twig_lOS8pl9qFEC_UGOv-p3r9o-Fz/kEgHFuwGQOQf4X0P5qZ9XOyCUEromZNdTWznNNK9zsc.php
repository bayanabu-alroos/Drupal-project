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

/* themes/contrib/yg_law_firm/templates/page--front.html.twig */
class __TwigTemplate_3e7907406672d7a983c63eb6cec1da2d extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo " 
            <!-- Header_Area -->

            <nav class=\"navbar navbar-default header_aera affix-top\">
               <div class=\"container m-s\">
                  <!-- Brand and toggle get grouped for better mobile display -->
                  <div class=\"col-md-4 p0\">
                     <div class=\"navbar-header\">
                        <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#min_navbar\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        </button>
                        <a class=\"navbar-brand logo-biss\" href=\"";
        // line 15
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["front_page"] ?? null), 15, $this->source), "html", null, true);
        echo "\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null), 15, $this->source), "html", null, true);
        echo "</a>
                     </div>
                  </div>
                  <!-- Collect the nav links, forms, and other content for toggling -->
                  <div class=\"col-md-8 p0\">
                     ";
        // line 20
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
        echo "
                     <!-- /.navbar-collapse -->
                  </div>
               </div>
               <!-- /.container -->
            </nav>
            <!-- End Header_Area -->
            <section class=\"top-space\" ";
        // line 27
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => ($context["content_classes"] ?? null)], "method", false, false, true, 27), 27, $this->source), "html", null, true);
        echo ">
        ";
        // line 29
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 33
        echo "      </section>
      

      <div class=\"our_partners_area bg_gradient_team\">
         <div class=\"book_now_aera \">
            <div class=\"container\">
               <div class=\"row book_now\">
                  <div class=\"col-md-7 booking_text\">
                     <h4>";
        // line 41
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["consultation"] ?? null), 41, $this->source), "html", null, true);
        echo "
                     </h4>
                     <p>";
        // line 43
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["consultation_desc"] ?? null), 43, $this->source), "html", null, true);
        echo "</p>
                  </div>
                  <div class=\"col-md-5 p0 book_bottun\">
                     <div class=\"col-md-5\">
                     </div>
                     <div class=\"col-md-7\">
                        <div class=\"top-banner wow fadeInRight text-left\" style=\"visibility: visible; animation-name: fadeInRight;\">
                           <a id=\"#services\" href=\"";
        // line 50
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["btn_link"] ?? null), 50, $this->source), "html", null, true);
        echo "\" class=\"btn btn-primary radius-50  wow fadeInUp  js-scroll-trigger\" data-wow-delay=\"0.5s\" style=\"visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["btn_text"] ?? null), 50, $this->source), "html", null, true);
        echo "</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

     

    <div class=\"our_footer_area\">
         <div class=\"book_now_aera \">
            <div class=\"container wow fadeInUp\">
               <div class=\"row book_now\">
                  <div class=\"col-md-4\">
                     <div class=\"\">
                        <a class=\" logo-biss\" >";
        // line 67
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_title"] ?? null), 67, $this->source), "html", null, true);
        echo "</a>
                     </div>
                     <p class=\"footer-h\">";
        // line 69
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_desc"] ?? null), 69, $this->source), "html", null, true);
        echo "</p>
                     <div class=\"bigpixi-footer-social\">
                        ";
        // line 71
        if (($context["facebook"] ?? null)) {
            // line 72
            echo "                        <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook"] ?? null), 72, $this->source), "html", null, true);
            echo "\" target=\"_blank\"><i id=\"social-fb\" class=\"fa fa-facebook fa-2x social\"></i></a>
                        ";
        }
        // line 74
        echo "                        ";
        if (($context["twitter"] ?? null)) {
            // line 75
            echo "                        <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter"] ?? null), 75, $this->source), "html", null, true);
            echo "\" target=\"_blank\"><i id=\"social-tw\" class=\"fa fa-twitter fa-2x social\"></i></a>
                        ";
        }
        // line 77
        echo "                        ";
        if (($context["instagram"] ?? null)) {
            // line 78
            echo "                        <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["instagram"] ?? null), 78, $this->source), "html", null, true);
            echo "\" target=\"_blank\"><i id=\"social-em\" class=\"fa fa-instagram fa-2x social\"></i></a>
                        ";
        }
        // line 80
        echo "                     </div>
                  </div>
                  <div class=\"col-md-1 \">
                  </div>
                  <div class=\"col-md-3 footer-menu\">
                     ";
        // line 85
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_col_2", [], "any", false, false, true, 85), 85, $this->source), "html", null, true);
        echo "
                  </div>
                  <div class=\"col-md-4\">
                     <ul class=\"location\">
                        <h2 class=\"footer-top\">";
        // line 89
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["contact_title"] ?? null), 89, $this->source), "html", null, true);
        echo "</h2>
                        <li class=\"footer-left-h\">";
        // line 90
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["contact_info"] ?? null), 90, $this->source), "html", null, true);
        echo "</li>
                        <li class=\"footer-left-h\"><span class=\"c_yellow\">";
        // line 91
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["email_title"] ?? null), 91, $this->source), "html", null, true);
        echo "</span>
                           <a href=\"mailto:";
        // line 92
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["email"] ?? null), 92, $this->source), "html", null, true);
        echo "\"> ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["email"] ?? null), 92, $this->source), "html", null, true);
        echo " </a>
                        </li>
                        <li class=\"footer-left-h\"><span class=\"c_yellow\">";
        // line 94
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["phone_title"] ?? null), 94, $this->source), "html", null, true);
        echo " </span><a href=\"tel:";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["phone"] ?? null), 94, $this->source), "html", null, true);
        echo "\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["phone"] ?? null), 94, $this->source), "html", null, true);
        echo "</a>
                        </li>
                     </ul>
                  </div>
                  <div class=\"col-md-12 copyright\">                     
                      <p class=\"color-gray\">@2018. <a href=\"\">YG Law Firm</a> All Rights Reserved. Design by <a href=\"https://www.navthemes.com/free-html-templates/\">NavThemes</a></p>
                      <p class=\"color-gray\">Theme By <a href=\"https://www.drupaldeveloperstudio.com\">Drupal Developers Studio</a>. A Division of <a href=\"www.youngglobes.com\">Young Globes</a></p>
                  </div>
               </div>
            </div>
         </div>
      </div>           ";
    }

    // line 29
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        echo "          <a id=\"main-content\"></a>
          ";
        // line 31
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "themes/contrib/yg_law_firm/templates/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 31,  223 => 30,  219 => 29,  199 => 94,  192 => 92,  188 => 91,  184 => 90,  180 => 89,  173 => 85,  166 => 80,  160 => 78,  157 => 77,  151 => 75,  148 => 74,  142 => 72,  140 => 71,  135 => 69,  130 => 67,  108 => 50,  98 => 43,  93 => 41,  83 => 33,  80 => 29,  76 => 27,  66 => 20,  56 => 15,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/yg_law_firm/templates/page--front.html.twig", "C:\\xampp\\htdocs\\porfolio-drupal\\themes\\contrib\\yg_law_firm\\templates\\page--front.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 29, "if" => 71);
        static $filters = array("escape" => 15);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['block', 'if'],
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
