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
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
        <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\" integrity=\"sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1\" crossorigin=\"anonymous\"></script>
        <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\" integrity=\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\" crossorigin=\"anonymous\"></script>
    </head>
    <body>
        ";
        // line 12
        $this->loadTemplate("nav.html", "videos.html.twig", 12)->display($context);
        // line 13
        echo "        
        <div class=\"row\">

            ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["videosPreview"]) || array_key_exists("videosPreview", $context) ? $context["videosPreview"] : (function () { throw new RuntimeError('Variable "videosPreview" does not exist.', 16, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["video"]) {
            // line 17
            echo "                <div class=\"col-lg-3 col-md-4 col-sm-6\">

                ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["video"]);
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 20
                echo "                    <div class=\"w3-content w3-section\" style=\"max-width:500px\">
                            <img class=\"mySlides";
                // line 21
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], 0, [], "array", false, false, false, 21), "html", null, true);
                echo "\" src=\"";
                echo twig_escape_filter($this->env, $context["image"], "html", null, true);
                echo "\" style=\"width:100%\">
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "                </div>

                <script>
                    var myIndex = 0;
                    carousel";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], 0, [], "array", false, false, false, 28), "."), 0, [], "array", false, false, false, 28), "html", null, true);
            echo "();
                    
                    function carousel";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], 0, [], "array", false, false, false, 30), "."), 0, [], "array", false, false, false, 30), "html", null, true);
            echo "() {
                        var i;
                        var x = document.getElementsByClassName(\"mySlides";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], 0, [], "array", false, false, false, 32), "html", null, true);
            echo "\");
                        for (i = 0; i < x.length; i++) {
                            x[i].style.display = \"none\";  
                        }
                        myIndex++;
                        if (myIndex > x.length) {myIndex = 1}    
                        x[myIndex-1].style.display = \"block\";  
                        setTimeout(carousel";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], 0, [], "array", false, false, false, 39), "."), 0, [], "array", false, false, false, 39), "html", null, true);
            echo ", 2000); // Change image every 2 seconds
                    }
                </script>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['video'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "
            ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["videos"]) || array_key_exists("videos", $context) ? $context["videos"] : (function () { throw new RuntimeError('Variable "videos" does not exist.', 44, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["video"]) {
            // line 45
            echo "                <div class=\"col-lg-3 col-md-4 col-sm-6\">

              <video src=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("videos/"), "html", null, true);
            echo twig_escape_filter($this->env, $context["video"], "html", null, true);
            echo "\" controls width=\"100%\"></video>
              <a style=\"width: 100%; margin-bottom: 25px;\"class=\"btn btn-primary\" download=\"";
            // line 48
            echo twig_escape_filter($this->env, $context["video"], "html", null, true);
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("videos/"), "html", null, true);
            echo twig_escape_filter($this->env, $context["video"], "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $context["video"], "html", null, true);
            echo "\">Télécharger </a></div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['video'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "        </div>
    </body>
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
        return array (  154 => 50,  141 => 48,  136 => 47,  132 => 45,  128 => 44,  125 => 43,  115 => 39,  105 => 32,  100 => 30,  95 => 28,  89 => 24,  78 => 21,  75 => 20,  71 => 19,  67 => 17,  63 => 16,  58 => 13,  56 => 12,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>Videos</title>
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
        <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\" integrity=\"sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1\" crossorigin=\"anonymous\"></script>
        <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\" integrity=\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\" crossorigin=\"anonymous\"></script>
    </head>
    <body>
        {% include 'nav.html' %}
        
        <div class=\"row\">

            {% for video in videosPreview %}
                <div class=\"col-lg-3 col-md-4 col-sm-6\">

                {% for image in video %}
                    <div class=\"w3-content w3-section\" style=\"max-width:500px\">
                            <img class=\"mySlides{{video[0]}}\" src=\"{{ image }}\" style=\"width:100%\">
                    </div>
                {% endfor %}
                </div>

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
                <div class=\"col-lg-3 col-md-4 col-sm-6\">

              <video src=\"{{ asset('videos/') }}{{ video }}\" controls width=\"100%\"></video>
              <a style=\"width: 100%; margin-bottom: 25px;\"class=\"btn btn-primary\" download=\"{{ video }}\" href=\"{{ asset('videos/') }}{{ video }}\" title=\"{{ video }}\">Télécharger </a></div>
            {% endfor %}
        </div>
    </body>
</html>
", "videos.html.twig", "/Users/Pierre/Documents/miage/m1/s1/projet_mercredi/pMercredi1/templates/videos.html.twig");
    }
}
