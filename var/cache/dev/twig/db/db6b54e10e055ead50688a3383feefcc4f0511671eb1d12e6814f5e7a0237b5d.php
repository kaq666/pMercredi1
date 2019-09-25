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

/* images.html.twig */
class __TwigTemplate_6053e2d751a034c451837a71ec9f3f8c56d9544e235835dabaa32adcef7d1835 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "images.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "images.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>Images</title>
        <style>
            img {
              border-radius: 5px;
              cursor: pointer;
              transition: 0.3s;
            }
            
            img:hover {opacity: 0.7;}
            
            /* The Modal (background) */
            .modal {
              display: none; /* Hidden by default */
              position: fixed; /* Stay in place */
              z-index: 1; /* Sit on top */
              padding-top: 100px; /* Location of the box */
              left: 0;
              top: 0;
              width: 100%; /* Full width */
              height: 100%; /* Full height */
              overflow: auto; /* Enable scroll if needed */
              background-color: rgb(0,0,0); /* Fallback color */
              background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
            }
            
            /* Modal Content (image) */
            .modal-content {
              margin: auto;
              display: block;
              width: 80%;
              max-width: 700px;
            }
            
            /* Caption of Modal Image */
            #caption {
              margin: auto;
              display: block;
              width: 80%;
              max-width: 700px;
              text-align: center;
              color: #ccc;
              padding: 10px 0;
              height: 150px;
            }
            
            /* Add Animation */
            .modal-content, #caption {  
              -webkit-animation-name: zoom;
              -webkit-animation-duration: 0.6s;
              animation-name: zoom;
              animation-duration: 0.6s;
            }
            
            @-webkit-keyframes zoom {
              from {-webkit-transform:scale(0)} 
              to {-webkit-transform:scale(1)}
            }
            
            @keyframes zoom {
              from {transform:scale(0)} 
              to {transform:scale(1)}
            }
            
            /* The Close Button */
            .close {
              position: absolute;
              top: 15px;
              right: 35px;
              color: #f1f1f1;
              font-size: 40px;
              font-weight: bold;
              transition: 0.3s;
            }
            
            .close:hover,
            .close:focus {
              color: #bbb;
              text-decoration: none;
              cursor: pointer;
            }
            
            /* 100% Image Width on Smaller Screens */
            @media only screen and (max-width: 700px){
              .modal-content {
                width: 100%;
              }
            }
        </style>
    </head>
    <body>
        ";
        // line 95
        $this->loadTemplate("nav.html", "images.html.twig", 95)->display($context);
        // line 96
        echo "
        <!-- The Modal -->
        <div id=\"myModal\" class=\"modal\">
            <span class=\"close\">&times;</span>
            <img class=\"modal-content\" id=\"img01\">
            <div id=\"caption\"></div>
        </div>

        ";
        // line 104
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["images"]) || array_key_exists("images", $context) ? $context["images"] : (function () { throw new RuntimeError('Variable "images" does not exist.', 104, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 105
            echo "        <img id=\"";
            echo twig_escape_filter($this->env, $context["image"], "html", null, true);
            echo "\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/"), "html", null, true);
            echo twig_escape_filter($this->env, $context["image"], "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $context["image"], "html", null, true);
            echo "\" width=\"20%\" height=\"20%\">
        <a download=\"";
            // line 106
            echo twig_escape_filter($this->env, $context["image"], "html", null, true);
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/"), "html", null, true);
            echo twig_escape_filter($this->env, $context["image"], "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $context["image"], "html", null, true);
            echo "\">Télécharger </a>
        
        <script>
            // Get the modal
            var modal = document.getElementById(\"myModal\");
            
            // Get the image and insert it inside the modal - use its \"alt\" text as a caption
            var img = document.getElementById(\"";
            // line 113
            echo twig_escape_filter($this->env, $context["image"], "html", null, true);
            echo "\");
            var modalImg = document.getElementById(\"img01\");
            var captionText = document.getElementById(\"caption\");
            img.onclick = function(){
                modal.style.display = \"block\";
                modalImg.src = this.src;
                captionText.innerHTML = this.alt;
            }
            
            // Get the <span> element that closes the modal
            var span = document.getElementsByClassName(\"close\")[0];
            
            // When the user clicks on <span> (x), close the modal
            span.onclick = function() { 
                modal.style.display = \"none\";
            }
        </script>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 132
        echo "    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "images.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 132,  180 => 113,  165 => 106,  155 => 105,  151 => 104,  141 => 96,  139 => 95,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>Images</title>
        <style>
            img {
              border-radius: 5px;
              cursor: pointer;
              transition: 0.3s;
            }
            
            img:hover {opacity: 0.7;}
            
            /* The Modal (background) */
            .modal {
              display: none; /* Hidden by default */
              position: fixed; /* Stay in place */
              z-index: 1; /* Sit on top */
              padding-top: 100px; /* Location of the box */
              left: 0;
              top: 0;
              width: 100%; /* Full width */
              height: 100%; /* Full height */
              overflow: auto; /* Enable scroll if needed */
              background-color: rgb(0,0,0); /* Fallback color */
              background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
            }
            
            /* Modal Content (image) */
            .modal-content {
              margin: auto;
              display: block;
              width: 80%;
              max-width: 700px;
            }
            
            /* Caption of Modal Image */
            #caption {
              margin: auto;
              display: block;
              width: 80%;
              max-width: 700px;
              text-align: center;
              color: #ccc;
              padding: 10px 0;
              height: 150px;
            }
            
            /* Add Animation */
            .modal-content, #caption {  
              -webkit-animation-name: zoom;
              -webkit-animation-duration: 0.6s;
              animation-name: zoom;
              animation-duration: 0.6s;
            }
            
            @-webkit-keyframes zoom {
              from {-webkit-transform:scale(0)} 
              to {-webkit-transform:scale(1)}
            }
            
            @keyframes zoom {
              from {transform:scale(0)} 
              to {transform:scale(1)}
            }
            
            /* The Close Button */
            .close {
              position: absolute;
              top: 15px;
              right: 35px;
              color: #f1f1f1;
              font-size: 40px;
              font-weight: bold;
              transition: 0.3s;
            }
            
            .close:hover,
            .close:focus {
              color: #bbb;
              text-decoration: none;
              cursor: pointer;
            }
            
            /* 100% Image Width on Smaller Screens */
            @media only screen and (max-width: 700px){
              .modal-content {
                width: 100%;
              }
            }
        </style>
    </head>
    <body>
        {% include 'nav.html' %}

        <!-- The Modal -->
        <div id=\"myModal\" class=\"modal\">
            <span class=\"close\">&times;</span>
            <img class=\"modal-content\" id=\"img01\">
            <div id=\"caption\"></div>
        </div>

        {% for image in images %}
        <img id=\"{{ image }}\" src=\"{{ asset('images/') }}{{ image }}\" alt=\"{{ image }}\" width=\"20%\" height=\"20%\">
        <a download=\"{{ image }}\" href=\"{{ asset('images/') }}{{ image }}\" title=\"{{ image }}\">Télécharger </a>
        
        <script>
            // Get the modal
            var modal = document.getElementById(\"myModal\");
            
            // Get the image and insert it inside the modal - use its \"alt\" text as a caption
            var img = document.getElementById(\"{{ image }}\");
            var modalImg = document.getElementById(\"img01\");
            var captionText = document.getElementById(\"caption\");
            img.onclick = function(){
                modal.style.display = \"block\";
                modalImg.src = this.src;
                captionText.innerHTML = this.alt;
            }
            
            // Get the <span> element that closes the modal
            var span = document.getElementsByClassName(\"close\")[0];
            
            // When the user clicks on <span> (x), close the modal
            span.onclick = function() { 
                modal.style.display = \"none\";
            }
        </script>

        {% endfor %}
    </body>
</html>
", "images.html.twig", "/Users/quentin/Documents/M1/S1/Projet du mercredi/pMercredi1/templates/images.html.twig");
    }
}
