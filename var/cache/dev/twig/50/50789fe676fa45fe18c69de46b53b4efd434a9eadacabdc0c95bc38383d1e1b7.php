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

/* videos.html.twig */
class __TwigTemplate_17d0133ae15a515b9526ca1549e6e61fc9ca1a56dc4b8937931784cd7fca2589 extends \Twig\Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "videos.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "videos.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>Videos</title>
    </head>
    <body>
        ";
        // line 8
        $this->loadTemplate("nav.html", "videos.html.twig", 8)->display($context);
        // line 9
        echo "        
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["videosPreview"]) || array_key_exists("videosPreview", $context) ? $context["videosPreview"] : (function () { throw new RuntimeError('Variable "videosPreview" does not exist.', 10, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["video"]) {
            // line 11
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["video"]);
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 12
                echo "                <div class=\"w3-content w3-section\" style=\"max-width:500px\">
                        <img class=\"mySlides";
                // line 13
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], 0, [], "array", false, false, false, 13), "html", null, true);
                echo "\" src=\"";
                echo twig_escape_filter($this->env, $context["image"], "html", null, true);
                echo "\" style=\"width:100%\">
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "
            <script>
                var myIndex = 0;
                carousel";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], 0, [], "array", false, false, false, 19), "."), 0, [], "array", false, false, false, 19), "html", null, true);
            echo "();
                
                function carousel";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], 0, [], "array", false, false, false, 21), "."), 0, [], "array", false, false, false, 21), "html", null, true);
            echo "() {
                    var i;
                    var x = document.getElementsByClassName(\"mySlides";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], 0, [], "array", false, false, false, 23), "html", null, true);
            echo "\");
                    for (i = 0; i < x.length; i++) {
                        x[i].style.display = \"none\";  
                    }
                    myIndex++;
                    if (myIndex > x.length) {myIndex = 1}    
                    x[myIndex-1].style.display = \"block\";  
                    setTimeout(carousel";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], 0, [], "array", false, false, false, 30), "."), 0, [], "array", false, false, false, 30), "html", null, true);
            echo ", 2000); // Change image every 2 seconds
                }
            </script>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['video'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "
        ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["videos"]) || array_key_exists("videos", $context) ? $context["videos"] : (function () { throw new RuntimeError('Variable "videos" does not exist.', 35, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["video"]) {
            // line 36
            echo "          <video src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("videos/"), "html", null, true);
            echo twig_escape_filter($this->env, $context["video"], "html", null, true);
            echo "\" controls width=\"20%\"></video>
          <a download=\"";
            // line 37
            echo twig_escape_filter($this->env, $context["video"], "html", null, true);
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("videos/"), "html", null, true);
            echo twig_escape_filter($this->env, $context["video"], "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $context["video"], "html", null, true);
            echo "\">Télécharger </a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['video'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "videos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 39,  128 => 37,  122 => 36,  118 => 35,  115 => 34,  105 => 30,  95 => 23,  90 => 21,  85 => 19,  80 => 16,  69 => 13,  66 => 12,  61 => 11,  57 => 10,  54 => 9,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>Videos</title>
    </head>
    <body>
        {% include 'nav.html' %}
        
        {% for video in videosPreview %}
            {% for image in video %}
                <div class=\"w3-content w3-section\" style=\"max-width:500px\">
                        <img class=\"mySlides{{video[0]}}\" src=\"{{ image }}\" style=\"width:100%\">
                </div>
            {% endfor %}

            <script>
                var myIndex = 0;
                carousel{{video[0]|split('.')[0]}}();
                
                function carousel{{video[0]|split('.')[0]}}() {
                    var i;
                    var x = document.getElementsByClassName(\"mySlides{{video[0]}}\");
                    for (i = 0; i < x.length; i++) {
                        x[i].style.display = \"none\";  
                    }
                    myIndex++;
                    if (myIndex > x.length) {myIndex = 1}    
                    x[myIndex-1].style.display = \"block\";  
                    setTimeout(carousel{{video[0]|split('.')[0]}}, 2000); // Change image every 2 seconds
                }
            </script>
        {% endfor %}

        {% for video in videos %}
          <video src=\"{{ asset('videos/') }}{{ video }}\" controls width=\"20%\"></video>
          <a download=\"{{ video }}\" href=\"{{ asset('videos/') }}{{ video }}\" title=\"{{ video }}\">Télécharger </a>
        {% endfor %}
    </body>
</html>
", "videos.html.twig", "/Users/quentin/Documents/M1/S1/Projet du mercredi/pMercredi1/templates/videos.html.twig");
    }
}
