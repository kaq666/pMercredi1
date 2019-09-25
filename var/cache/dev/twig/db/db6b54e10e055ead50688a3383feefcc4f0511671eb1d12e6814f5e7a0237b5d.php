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
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
        <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\" integrity=\"sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1\" crossorigin=\"anonymous\"></script>
        <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\" integrity=\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\" crossorigin=\"anonymous\"></script>
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
        // line 99
        $this->loadTemplate("nav.html", "images.html.twig", 99)->display($context);
        // line 100
        echo "
        <!-- The Modal -->
        <div id=\"myModal\" class=\"modal\">
            <span class=\"close\">&times;</span>
            <img class=\"modal-content\" id=\"img01\">
            <div id=\"caption\"></div>
        </div>

        <div class=\"row\">

          ";
        // line 110
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["images"]) || array_key_exists("images", $context) ? $context["images"] : (function () { throw new RuntimeError('Variable "images" does not exist.', 110, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 111
            echo "            <div class=\"col-lg-3 col-md-4 col-sm-6\">

              <img id=\"";
            // line 113
            echo twig_escape_filter($this->env, $context["image"], "html", null, true);
            echo "\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/"), "html", null, true);
            echo twig_escape_filter($this->env, $context["image"], "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $context["image"], "html", null, true);
            echo "\" width=\"100%\">
              <a style=\"width: 100%; margin-bottom: 25px;\"class=\"btn btn-primary\" download=\"";
            // line 114
            echo twig_escape_filter($this->env, $context["image"], "html", null, true);
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/"), "html", null, true);
            echo twig_escape_filter($this->env, $context["image"], "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $context["image"], "html", null, true);
            echo "\">Télécharger</a>
              
              <script>
                  // Get the modal
                  var modal = document.getElementById(\"myModal\");
                  
                  // Get the image and insert it inside the modal - use its \"alt\" text as a caption
                  var img = document.getElementById(\"";
            // line 121
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
            </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 140
        echo "
        </div>
    </body>
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
        return array (  214 => 140,  189 => 121,  174 => 114,  165 => 113,  161 => 111,  157 => 110,  145 => 100,  143 => 99,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>Images</title>
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
        <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\" integrity=\"sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1\" crossorigin=\"anonymous\"></script>
        <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\" integrity=\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\" crossorigin=\"anonymous\"></script>
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

        <div class=\"row\">

          {% for image in images %}
            <div class=\"col-lg-3 col-md-4 col-sm-6\">

              <img id=\"{{ image }}\" src=\"{{ asset('images/') }}{{ image }}\" alt=\"{{ image }}\" width=\"100%\">
              <a style=\"width: 100%; margin-bottom: 25px;\"class=\"btn btn-primary\" download=\"{{ image }}\" href=\"{{ asset('images/') }}{{ image }}\" title=\"{{ image }}\">Télécharger</a>
              
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
            </div>
          {% endfor %}

        </div>
    </body>
</html>
", "images.html.twig", "/Users/Pierre/Documents/miage/m1/s1/projet_mercredi/pMercredi1/templates/images.html.twig");
    }
}
