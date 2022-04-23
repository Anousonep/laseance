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

/* home/home.html.twig */
class __TwigTemplate_f16cf5dd3703a703aed38907f05fe25b24b27d3f83b790abaa2bfe38c3750d4a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/home.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"containMainStream\">
        <div class=\"containMainTitle\">
            <h1 class=\"titleLaSeance\">";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 6, $this->source); })()), "html", null, true);
        echo "</h1>
        </div>

        <div class=\"containStream\">
            <div class=\"stream\">

            </div>
            <div class=\"chatStream\">

            </div>
        </div>
        <div class=\"containButtonStream\">
            <ul class=\"buttonStream\">
                <li class=\"buttonS\" id=\"followButton\"></li>
                <li class=\"buttonS\" id=\"subButton\"></li>
                <li class=\"buttonS\" id=\"theaterButton\"></li>
            </ul>
        </div>
    </div>

    <div class=\"blank\"></div>

    <div class=\"containerVideosYt\">
        <div class=\"bar\"></div>
        <div class=\"containYtVideos\">
            <div class=\"containSubTitle\">
                <h2 class=\"subTitle\">VIDÉOS YOUTUBE</h2>
            </div>
            <div class=\"vidLaSeance\">
                <div class=\"containVideosYtLaSeance\"></div>
            </div>
            <div class=\"vidReplay\">
                <div class=\"containVideosYtReplay\"></div>
            </div>
        </div>
        <div class=\"bar\"></div>
    </div>

    <div class=\"containerArticles\">
        <div class=\"containArticles\">
            <div class=\"containSubTitle\">
                <h2 class=\"subTitle\">ARTICLES</h2>
            </div>

            <div class=\"allArticles\">
                <div class=\"articleMain\">
                    ";
        // line 52
        $context["article"] = twig_last($this->env, (isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 52, $this->source); })()));
        // line 53
        echo "                    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 53, $this->source); })()), "title", [], "any", false, false, false, 53), "html", null, true);
        echo "</h2>
                </div>
                <div class=\"allOtherArticles\">
                    <div class=\"otherArticles\"></div>
                    <div class=\"otherArticles\"></div>
                    <div class=\"otherArticles\"></div>
                </div>
            </div>

        </div>

        <div class=\"containButtonArticles\">
            <ul class=\"buttonArticles\">
                <li class=\"buttonA\" id=\"previousPage\"></li>
                <li class=\"buttonA\" id=\"nextPage\"></li>
                <li class=\"buttonA\" id=\"seeAllArticles\"></li>
            </ul>
        </div>
    </div>

    <div class=\"blankFooter\"></div>

    <footer class=\"allFooter\"></footer>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 53,  121 => 52,  72 => 6,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"containMainStream\">
        <div class=\"containMainTitle\">
            <h1 class=\"titleLaSeance\">{{title}}</h1>
        </div>

        <div class=\"containStream\">
            <div class=\"stream\">

            </div>
            <div class=\"chatStream\">

            </div>
        </div>
        <div class=\"containButtonStream\">
            <ul class=\"buttonStream\">
                <li class=\"buttonS\" id=\"followButton\"></li>
                <li class=\"buttonS\" id=\"subButton\"></li>
                <li class=\"buttonS\" id=\"theaterButton\"></li>
            </ul>
        </div>
    </div>

    <div class=\"blank\"></div>

    <div class=\"containerVideosYt\">
        <div class=\"bar\"></div>
        <div class=\"containYtVideos\">
            <div class=\"containSubTitle\">
                <h2 class=\"subTitle\">VIDÉOS YOUTUBE</h2>
            </div>
            <div class=\"vidLaSeance\">
                <div class=\"containVideosYtLaSeance\"></div>
            </div>
            <div class=\"vidReplay\">
                <div class=\"containVideosYtReplay\"></div>
            </div>
        </div>
        <div class=\"bar\"></div>
    </div>

    <div class=\"containerArticles\">
        <div class=\"containArticles\">
            <div class=\"containSubTitle\">
                <h2 class=\"subTitle\">ARTICLES</h2>
            </div>

            <div class=\"allArticles\">
                <div class=\"articleMain\">
                    {% set article = articles|last %}
                    <h2>{{ article.title }}</h2>
                </div>
                <div class=\"allOtherArticles\">
                    <div class=\"otherArticles\"></div>
                    <div class=\"otherArticles\"></div>
                    <div class=\"otherArticles\"></div>
                </div>
            </div>

        </div>

        <div class=\"containButtonArticles\">
            <ul class=\"buttonArticles\">
                <li class=\"buttonA\" id=\"previousPage\"></li>
                <li class=\"buttonA\" id=\"nextPage\"></li>
                <li class=\"buttonA\" id=\"seeAllArticles\"></li>
            </ul>
        </div>
    </div>

    <div class=\"blankFooter\"></div>

    <footer class=\"allFooter\"></footer>

{% endblock %}
", "home/home.html.twig", "C:\\laragon\\www\\la_seance_2\\templates\\home\\home.html.twig");
    }
}
