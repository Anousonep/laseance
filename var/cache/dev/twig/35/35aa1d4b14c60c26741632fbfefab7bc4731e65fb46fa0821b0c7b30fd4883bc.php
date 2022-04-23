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

/* base.html.twig */
class __TwigTemplate_91a59262865363169a2265704c50f3fd541c5925029d0580044aa4b1e283abc8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE HTML>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <meta content=\"width=device-width, initial-scale=1\" name=\"viewport\" />
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "
    </head>
    <body class=\"mainBody\">
        <header class=\"headerMenu\">
            <div class=\"containerNav\">
                <nav class=\"nav\">
                    <div class=\"containLogo\">
                        <div class=\"containerImgLogo\">
                            <img class=\"logo\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/img/la-seance-logo.png"), "html", null, true);
        echo "\">
                        </div>

                        <div class=\"containerTextLogo\">
                            <p>La</p>
                            <p>Séance.net</p>
                        </div>

                    </div>
                    <div class=\"containRedacProg\">
";
        // line 34
        echo "                        <div class=\"allProgrammation\">
                            <div id=\"containProgrammation\">
                                <a id=\"programmation\" href=\"#\">PROGRAMMATION</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"containSocial\">
                        <div class=\"iconSocial\">
                            <img id=\"icon-twitter\" src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/img/icon-twitter.png"), "html", null, true);
        echo "\">
                        </div>
                        <div class=\"iconSocial\">
                            <img id=\"icon-youtube\" src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/img/icon-youtube.png"), "html", null, true);
        echo "\">
                        </div>
                        <div class=\"iconSocial\">
                            <img id=\"icon-discord\" src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/img/icon-discord.png"), "html", null, true);
        echo "\">
                        </div>
                        <div class=\"iconSocial\">
                            <img id=\"icon-insta\" src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/img/icon-insta.png"), "html", null, true);
        echo "\">
                        </div>
                        <div class=\"iconSocial\">
                            <img id=\"icon-twitch\" src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/img/icon-twitch.png"), "html", null, true);
        echo "\">
                        </div>
                    </div>
                    <div class=\"containConnexion\">
                        <div class=\"allConnexion\">
                            <div class=\"containerTeam\">
                                <a id=\"team\" href=\"";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("team_index");
        echo "\">L'ÉQUIPE</a>
                            </div>
                            <div class=\"containerConnexion\">
                                <a id=\"log\" href=\"#\">CONNEXION</a>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </header>

        ";
        // line 71
        $this->displayBlock('body', $context, $blocks);
        // line 72
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/script.js"), "html", null, true);
        echo "\"></script>
        ";
        // line 73
        $this->displayBlock('javascripts', $context, $blocks);
        // line 74
        echo "    </body>

</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "La Seance";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 71
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 73
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 73,  204 => 71,  191 => 8,  181 => 7,  162 => 6,  149 => 74,  147 => 73,  142 => 72,  140 => 71,  126 => 60,  117 => 54,  111 => 51,  105 => 48,  99 => 45,  93 => 42,  83 => 34,  70 => 18,  60 => 10,  58 => 7,  54 => 6,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE HTML>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <meta content=\"width=device-width, initial-scale=1\" name=\"viewport\" />
        <title>{% block title %}La Seance{% endblock %}</title>
        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
        {% endblock %}

    </head>
    <body class=\"mainBody\">
        <header class=\"headerMenu\">
            <div class=\"containerNav\">
                <nav class=\"nav\">
                    <div class=\"containLogo\">
                        <div class=\"containerImgLogo\">
                            <img class=\"logo\" src=\"{{ asset('css/img/la-seance-logo.png') }}\">
                        </div>

                        <div class=\"containerTextLogo\">
                            <p>La</p>
                            <p>Séance.net</p>
                        </div>

                    </div>
                    <div class=\"containRedacProg\">
{#                        <div class=\"allRedaction\">#}
{#                            <div id=\"containRedaction\">#}
{#                                <a id=\"redaction\" href=\"#\">RÉDACTION</a>#}
{#                            </div>#}
{#                        </div>#}
{#                        <div id=\"underline\"></div>#}
                        <div class=\"allProgrammation\">
                            <div id=\"containProgrammation\">
                                <a id=\"programmation\" href=\"#\">PROGRAMMATION</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"containSocial\">
                        <div class=\"iconSocial\">
                            <img id=\"icon-twitter\" src=\"{{ asset('css/img/icon-twitter.png') }}\">
                        </div>
                        <div class=\"iconSocial\">
                            <img id=\"icon-youtube\" src=\"{{ asset('css/img/icon-youtube.png') }}\">
                        </div>
                        <div class=\"iconSocial\">
                            <img id=\"icon-discord\" src=\"{{ asset('css/img/icon-discord.png') }}\">
                        </div>
                        <div class=\"iconSocial\">
                            <img id=\"icon-insta\" src=\"{{ asset('css/img/icon-insta.png') }}\">
                        </div>
                        <div class=\"iconSocial\">
                            <img id=\"icon-twitch\" src=\"{{ asset('css/img/icon-twitch.png') }}\">
                        </div>
                    </div>
                    <div class=\"containConnexion\">
                        <div class=\"allConnexion\">
                            <div class=\"containerTeam\">
                                <a id=\"team\" href=\"{{ path('team_index') }}\">L'ÉQUIPE</a>
                            </div>
                            <div class=\"containerConnexion\">
                                <a id=\"log\" href=\"#\">CONNEXION</a>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </header>

        {% block body %}{% endblock %}
            <script src=\"{{ asset('js/script.js') }}\"></script>
        {% block javascripts %}{% endblock %}
    </body>

</html>
", "base.html.twig", "C:\\laragon\\www\\la_seance_2\\templates\\base.html.twig");
    }
}
