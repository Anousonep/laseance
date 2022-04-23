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

/* team/index.html.twig */
class __TwigTemplate_da5795b5b59372fc9806a749dcb695e26f80c75349e9ce319e4bf943ac1200cb extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "team/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "team/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "team/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "L'ÉQUIPE!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <div class=\"containerPageTeam\">
        <div class=\"containAllTeam\">
            <div class=\"containTitleChampion\">
                <div class=\"blankChampionTitle\"></div>
                <h2 class=\"titleChampion\">SELECT YOUR CHAMPION</h2>
            </div>



";
        // line 42
        echo "
";
        // line 62
        echo "            ";
        // line 63
        echo "            ";
        $context["i"] = 0;
        // line 64
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["champions"]) || array_key_exists("champions", $context) ? $context["champions"] : (function () { throw new RuntimeError('Variable "champions" does not exist.', 64, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["champion"]) {
            // line 65
            echo "
                <div id=\"";
            // line 66
            echo twig_escape_filter($this->env, ("perso" . (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 66, $this->source); })())), "html", null, true);
            echo "\" class=\"containChampions\">
                    <div class=\"containerPictureChamp\">
                        <img id=\"pictureChamp\" src=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/" . twig_get_attribute($this->env, $this->source, $context["champion"], "image", [], "any", false, false, false, 68))), "html", null, true);
            echo "\" alt=\"\">
                    </div>
                    <div class=\"containerSkillsChamp\">
                        <div class=\"containSkills\">
                            <div class=\"allSkills\">
                                <div class=\"skills\">
                                    <h3>SKILLS</h3>
                                    <div class=\"barSkills\">
                                        <div class=\"bar-skill\">
                                            <p class=\"name-skill\">HUMOUR</p>
                                            <progress class=\"bar\" value=\"";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["champion"], "skills", [], "any", false, false, false, 78), 0, [], "array", false, false, false, 78), "html", null, true);
            echo "\" max=\"100\"></progress>
                                        </div>
                                        <div class=\"bar-skill\">
                                            <p class=\"name-skill\">CHARME</p>
                                            <progress class=\"bar\" value=\"";
            // line 82
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["champion"], "skills", [], "any", false, false, false, 82), 1, [], "array", false, false, false, 82), "html", null, true);
            echo "\" max=\"100\"></progress>
                                        </div>
                                        <div class=\"bar-skill\">
                                            <p class=\"name-skill\">SKILLS</p>
                                            <progress class=\"bar\" value=\"";
            // line 86
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["champion"], "skills", [], "any", false, false, false, 86), 2, [], "array", false, false, false, 86), "html", null, true);
            echo "\" max=\"100\"></progress>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div id=\"lineChamp\"></div>
                            <div class=\"containSocialChamp\">
                                <img class=\"iconSocialChamp\" src=\"";
            // line 94
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/img/icon-youtube.png"), "html", null, true);
            echo "\">
                                <img class=\"iconSocialChamp\" src=\"";
            // line 95
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/img/icon-twitch.png"), "html", null, true);
            echo "\">
                                <img class=\"iconSocialChamp\" src=\"";
            // line 96
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/img/icon-discord.png"), "html", null, true);
            echo "\">
                                <img class=\"iconSocialChamp\" src=\"";
            // line 97
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/img/icon-twitter.png"), "html", null, true);
            echo "\">
                                <img class=\"iconSocialChamp\" src=\"";
            // line 98
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/img/icon-insta.png"), "html", null, true);
            echo "\">
                            </div>
                        </div>
                        <div class=\"containBio\" >
                            <div class=\"bio\">
                                <h3>BIO</h3>
                                <p>";
            // line 104
            echo twig_get_attribute($this->env, $this->source, $context["champion"], "description", [], "any", false, false, false, 104);
            echo "</p>
                                ";
            // line 106
            echo "                            </div>
                        </div>
                    </div>
                </div>
                ";
            // line 110
            $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 110, $this->source); })()) + 1);
            // line 111
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['champion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        echo "
            <div class=\"containerMiniPicChamp\">
                <div class=\"allMiniPics\">
                    ";
        // line 115
        $context["i"] = 0;
        // line 116
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["champions"]) || array_key_exists("champions", $context) ? $context["champions"] : (function () { throw new RuntimeError('Variable "champions" does not exist.', 116, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["champion"]) {
            // line 117
            echo "                        <img id=\"";
            echo twig_escape_filter($this->env, ("miniPerso" . (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 117, $this->source); })())), "html", null, true);
            echo "\" class=\"picChamps\"  src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/" . twig_get_attribute($this->env, $this->source, $context["champion"], "image", [], "any", false, false, false, 117))), "html", null, true);
            echo "\">
                    ";
            // line 118
            $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 118, $this->source); })()) + 1);
            // line 119
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['champion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        echo "                </div>
            </div>
        </div>


    </div>

    <footer></footer>

    <script>

        ";
        // line 132
        echo "
        ";
        // line 134
        echo "        ";
        // line 135
        echo "        ";
        // line 136
        echo "        ";
        // line 137
        echo "        ";
        // line 138
        echo "        ";
        // line 139
        echo "        ";
        // line 140
        echo "


        var championsInfo = ";
        // line 143
        echo json_encode((isset($context["champions"]) || array_key_exists("champions", $context) ? $context["champions"] : (function () { throw new RuntimeError('Variable "champions" does not exist.', 143, $this->source); })()));
        echo ";
    </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "team/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  262 => 143,  257 => 140,  255 => 139,  253 => 138,  251 => 137,  249 => 136,  247 => 135,  245 => 134,  242 => 132,  229 => 120,  223 => 119,  221 => 118,  214 => 117,  209 => 116,  207 => 115,  202 => 112,  196 => 111,  194 => 110,  188 => 106,  184 => 104,  175 => 98,  171 => 97,  167 => 96,  163 => 95,  159 => 94,  148 => 86,  141 => 82,  134 => 78,  121 => 68,  116 => 66,  113 => 65,  108 => 64,  105 => 63,  103 => 62,  100 => 42,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}L'ÉQUIPE!{% endblock %}

{% block body %}

    <div class=\"containerPageTeam\">
        <div class=\"containAllTeam\">
            <div class=\"containTitleChampion\">
                <div class=\"blankChampionTitle\"></div>
                <h2 class=\"titleChampion\">SELECT YOUR CHAMPION</h2>
            </div>



{#            {% set champion = champions[0] %}#}
{#            {{ dump(champions) }}#}
{#            <div class=\"containChampions\">#}
{#                <div class=\"containerPictureChamp\">#}
{#                    <img id=\"pictureChamp\" src=\"{{ asset('/uploads/' ~ champion.image) }}\" alt=\"\">#}
{#                </div>#}
{#                <div class=\"containerSkillsChamp\">#}
{#                    <div class=\"containSkills\">#}
{#                        <div class=\"allSkills\">#}
{#                            <div class=\"skills\">#}
{#                                <h3>SKILLS</h3>#}
{#                                <div class=\"barSkills\">#}
{#                                    <div class=\"bar-skill\">#}
{#                                        <p class=\"name-skill\">HUMOUR</p>#}
{#                                        <progress class=\"bar\" value=\"{{ champion.skills[0] }}\" max=\"100\"></progress>#}
{#                                    </div>#}
{#                                    <div class=\"bar-skill\">#}
{#                                        <p class=\"name-skill\">CHARME</p>#}
{#                                        <progress class=\"bar\" value=\"{{ champion.skills[1] }}\" max=\"100\"></progress>#}
{#                                    </div>#}
{#                                    <div class=\"bar-skill\">#}
{#                                        <p class=\"name-skill\">SKILLS</p>#}
{#                                        <progress class=\"bar\" value=\"{{ champion.skills[2] }}\" max=\"100\"></progress>#}
{#                                    </div>#}
{#                                </div>#}
{#                            </div>#}

{#                        </div>#}
{#                        <div id=\"lineChamp\"></div>#}
{#                        <div class=\"containSocialChamp\">#}
{#                            <img class=\"iconSocialChamp\" src=\"{{ asset('css/img/icon-youtube.png') }}\">#}
{#                            <img class=\"iconSocialChamp\" src=\"{{ asset('css/img/icon-twitch.png') }}\">#}
{#                            <img class=\"iconSocialChamp\" src=\"{{ asset('css/img/icon-discord.png') }}\">#}
{#                            <img class=\"iconSocialChamp\" src=\"{{ asset('css/img/icon-twitter.png') }}\">#}
{#                            <img class=\"iconSocialChamp\" src=\"{{ asset('css/img/icon-insta.png') }}\">#}
{#                        </div>#}
{#                    </div>#}
{#                    <div class=\"containBio\" >#}
{#                        <div class=\"bio\">#}
{#                            <h3>BIO</h3>#}
{#                            <p>{{ champion.description |raw }}</p>#}
{#                            #}{#                            <p>\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"</p>#}
{#                        </div>#}
{#                    </div>#}
{#                </div>#}
{#            </div>#}
            {#            {% endset %}#}
            {% set i = 0 %}
            {% for champion in champions %}

                <div id=\"{{ 'perso' ~ i }}\" class=\"containChampions\">
                    <div class=\"containerPictureChamp\">
                        <img id=\"pictureChamp\" src=\"{{ asset('/uploads/' ~ champion.image) }}\" alt=\"\">
                    </div>
                    <div class=\"containerSkillsChamp\">
                        <div class=\"containSkills\">
                            <div class=\"allSkills\">
                                <div class=\"skills\">
                                    <h3>SKILLS</h3>
                                    <div class=\"barSkills\">
                                        <div class=\"bar-skill\">
                                            <p class=\"name-skill\">HUMOUR</p>
                                            <progress class=\"bar\" value=\"{{ champion.skills[0] }}\" max=\"100\"></progress>
                                        </div>
                                        <div class=\"bar-skill\">
                                            <p class=\"name-skill\">CHARME</p>
                                            <progress class=\"bar\" value=\"{{ champion.skills[1] }}\" max=\"100\"></progress>
                                        </div>
                                        <div class=\"bar-skill\">
                                            <p class=\"name-skill\">SKILLS</p>
                                            <progress class=\"bar\" value=\"{{ champion.skills[2] }}\" max=\"100\"></progress>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div id=\"lineChamp\"></div>
                            <div class=\"containSocialChamp\">
                                <img class=\"iconSocialChamp\" src=\"{{ asset('css/img/icon-youtube.png') }}\">
                                <img class=\"iconSocialChamp\" src=\"{{ asset('css/img/icon-twitch.png') }}\">
                                <img class=\"iconSocialChamp\" src=\"{{ asset('css/img/icon-discord.png') }}\">
                                <img class=\"iconSocialChamp\" src=\"{{ asset('css/img/icon-twitter.png') }}\">
                                <img class=\"iconSocialChamp\" src=\"{{ asset('css/img/icon-insta.png') }}\">
                            </div>
                        </div>
                        <div class=\"containBio\" >
                            <div class=\"bio\">
                                <h3>BIO</h3>
                                <p>{{ champion.description |raw }}</p>
                                {#                            <p>\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"</p>#}
                            </div>
                        </div>
                    </div>
                </div>
                {% set i = i+1 %}
            {% endfor %}

            <div class=\"containerMiniPicChamp\">
                <div class=\"allMiniPics\">
                    {% set i = 0 %}
                    {% for champion in champions %}
                        <img id=\"{{ 'miniPerso' ~ i }}\" class=\"picChamps\"  src=\"{{ asset('/uploads/' ~ champion.image) }}\">
                    {% set i = i+1 %}
                    {% endfor %}
                </div>
            </div>
        </div>


    </div>

    <footer></footer>

    <script>

        {#var championsInfo =#}

        {#    {#}
        {#        id: '{{ champion.id }}',#}
        {#        image: '{{ champion.image }}',#}
        {#        skill: '{{ champion.skills[0] }},{{ champion.skills[1] }},{{ champion.skills[2] }}',#}
        {#        description: '{{ champion.description|e('js') }}',#}
        {#        #}{#social: '{{ champion.social[0] }}',#}
        {#    };#}



        var championsInfo = {{ champions|json_encode()|raw }};
    </script>

{% endblock %}
", "team/index.html.twig", "C:\\laragon\\www\\la_seance_2\\templates\\team\\index.html.twig");
    }
}
