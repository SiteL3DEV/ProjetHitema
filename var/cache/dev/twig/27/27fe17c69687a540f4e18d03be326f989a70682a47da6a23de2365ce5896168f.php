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

/* credits.txt */
class __TwigTemplate_0c1cbe38b348a2192cce2756d956a09114bd3d444f392d8cd4c6c98172741f32 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "credits.txt"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "credits.txt"));

        // line 1
        echo "
------------  Header STARTS --------------------


<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"utf-8\">
  <title>Dashio - Bootstrap Admin Template</title>
  <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
  <meta content=\"\" name=\"keywords\">
  <meta content=\"\" name=\"description\">

  <!-- Favicons -->
  <link href=\"img/favicon.png\" rel=\"icon\">
  <link href=\"img/apple-touch-icon.png\" rel=\"apple-touch-icon\">

  <!-- Google Fonts -->
  <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700\" rel=\"stylesheet\">

  <!-- Bootstrap CSS File -->
  <link href=\"lib/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">

  <!-- Libraries CSS Files -->
  <link href=\"lib/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\">

  <!-- Main Stylesheet File -->
  <link href=\"css/style.css\" rel=\"stylesheet\">

  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>


------------  Footer ENDS --------------------

  <div id=\"contact\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-8 col-md-offset-2\">

          <form class=\"contact-form php-mail-form\" role=\"form\" action=\"contactform/contactform.php\" method=\"POST\">

            <div class=\"form-group\">
              <label for=\"contact-name\">Your Name</label>
              <input type=\"name\" name=\"name\" class=\"form-control\" id=\"contact-name\" placeholder=\"Your Name\" data-rule=\"minlen:4\" data-msg=\"Please enter at least 4 chars\" >
              <div class=\"validate\"></div>
            </div>
            <div class=\"form-group\">
              <label for=\"contact-email\">Your Email</label>
              <input type=\"email\" name=\"email\" class=\"form-control\" id=\"contact-email\" placeholder=\"Your Email\" data-rule=\"email\" data-msg=\"Please enter a valid email\">
              <div class=\"validate\"></div>
            </div>
            <div class=\"form-group\">
              <label for=\"contact-subject\">Subject</label>
              <input type=\"text\" name=\"subject\" class=\"form-control\" id=\"contact-subject\" placeholder=\"Subject\" data-rule=\"minlen:4\" data-msg=\"Please enter at least 8 chars of subject\">
              <div class=\"validate\"></div>
            </div>

            <div class=\"form-group\">
              <label for=\"contact-message\">Your Message</label>
              <textarea class=\"form-control\" name=\"message\" id=\"contact-message\" placeholder=\"Your Message\" rows=\"5\" data-rule=\"required\" data-msg=\"Please write something for us\"></textarea>
              <div class=\"validate\"></div>
            </div>

            <div class=\"loading\"><img src=\"lib/php-mail-form/loading.gif\"></div>
            <div class=\"error-message\"></div>
            <div class=\"sent-message\">Your message has been sent. Thank you!</div>

            <div class=\"form-send\">
              <button type=\"submit\" class=\"btn btn-large\">Send Message</button>
            </div>

          </form>

        </div>
      </div>
    </div>
  </div>
  <!-- / contact -->

  <div id=\"copyrights\">
    <div class=\"container\">
      <p>
        &copy; Copyrights <strong>Dashio</strong>. All Rights Reserved
      </p>
      <div class=\"credits\">
        <!--
          You are NOT allowed to delete the credit link to TemplateMag with free version.
          You can delete the credit link only if you bought the pro version.
          Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/buy/?template=Dashio
          Licensing information: https://templatemag.com/license/
        -->
        Created with Dashio template by <a href=\"https://templatemag.com/\">TemplateMag</a>
      </div>
    </div>
  </div>
  <!-- / copyrights -->

  <!-- JavaScript Libraries -->
  <script src=\"lib/jquery/jquery.min.js\"></script>
  <script src=\"lib/bootstrap/js/bootstrap.min.js\"></script>
  <script src=\"lib/php-mail-form/validate.js\"></script>
  <script src=\"lib/easing/easing.min.js\"></script>

  <!-- Template Main Javascript File -->
  <script src=\"js/main.js\"></script>

</body>
</html>


----------- Main JS ---------------------

jQuery(document).ready(function( \$ ) {

  // Smooth scroll for the menu and links with .scrollto classes
  \$('.smoothscroll').on('click', function(e) {
    e.preventDefault();
    if (location.pathname.replace(/^\\//, '') == this.pathname.replace(/^\\//, '') && location.hostname == this.hostname) {
      var target = \$(this.hash);
      if (target.length) {

        \$('html, body').animate({
          scrollTop: target.offset().top - 48
        }, 1500, 'easeInOutExpo');
      }
    }
  });

  \$(\".navbar-collapse a\").on('click', function() {
    \$(\".navbar-collapse.collapse\").removeClass('in');
  });
});
      ";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "credits.txt";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
------------  Header STARTS --------------------


<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"utf-8\">
  <title>Dashio - Bootstrap Admin Template</title>
  <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
  <meta content=\"\" name=\"keywords\">
  <meta content=\"\" name=\"description\">

  <!-- Favicons -->
  <link href=\"img/favicon.png\" rel=\"icon\">
  <link href=\"img/apple-touch-icon.png\" rel=\"apple-touch-icon\">

  <!-- Google Fonts -->
  <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700\" rel=\"stylesheet\">

  <!-- Bootstrap CSS File -->
  <link href=\"lib/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">

  <!-- Libraries CSS Files -->
  <link href=\"lib/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\">

  <!-- Main Stylesheet File -->
  <link href=\"css/style.css\" rel=\"stylesheet\">

  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>


------------  Footer ENDS --------------------

  <div id=\"contact\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-8 col-md-offset-2\">

          <form class=\"contact-form php-mail-form\" role=\"form\" action=\"contactform/contactform.php\" method=\"POST\">

            <div class=\"form-group\">
              <label for=\"contact-name\">Your Name</label>
              <input type=\"name\" name=\"name\" class=\"form-control\" id=\"contact-name\" placeholder=\"Your Name\" data-rule=\"minlen:4\" data-msg=\"Please enter at least 4 chars\" >
              <div class=\"validate\"></div>
            </div>
            <div class=\"form-group\">
              <label for=\"contact-email\">Your Email</label>
              <input type=\"email\" name=\"email\" class=\"form-control\" id=\"contact-email\" placeholder=\"Your Email\" data-rule=\"email\" data-msg=\"Please enter a valid email\">
              <div class=\"validate\"></div>
            </div>
            <div class=\"form-group\">
              <label for=\"contact-subject\">Subject</label>
              <input type=\"text\" name=\"subject\" class=\"form-control\" id=\"contact-subject\" placeholder=\"Subject\" data-rule=\"minlen:4\" data-msg=\"Please enter at least 8 chars of subject\">
              <div class=\"validate\"></div>
            </div>

            <div class=\"form-group\">
              <label for=\"contact-message\">Your Message</label>
              <textarea class=\"form-control\" name=\"message\" id=\"contact-message\" placeholder=\"Your Message\" rows=\"5\" data-rule=\"required\" data-msg=\"Please write something for us\"></textarea>
              <div class=\"validate\"></div>
            </div>

            <div class=\"loading\"><img src=\"lib/php-mail-form/loading.gif\"></div>
            <div class=\"error-message\"></div>
            <div class=\"sent-message\">Your message has been sent. Thank you!</div>

            <div class=\"form-send\">
              <button type=\"submit\" class=\"btn btn-large\">Send Message</button>
            </div>

          </form>

        </div>
      </div>
    </div>
  </div>
  <!-- / contact -->

  <div id=\"copyrights\">
    <div class=\"container\">
      <p>
        &copy; Copyrights <strong>Dashio</strong>. All Rights Reserved
      </p>
      <div class=\"credits\">
        <!--
          You are NOT allowed to delete the credit link to TemplateMag with free version.
          You can delete the credit link only if you bought the pro version.
          Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/buy/?template=Dashio
          Licensing information: https://templatemag.com/license/
        -->
        Created with Dashio template by <a href=\"https://templatemag.com/\">TemplateMag</a>
      </div>
    </div>
  </div>
  <!-- / copyrights -->

  <!-- JavaScript Libraries -->
  <script src=\"lib/jquery/jquery.min.js\"></script>
  <script src=\"lib/bootstrap/js/bootstrap.min.js\"></script>
  <script src=\"lib/php-mail-form/validate.js\"></script>
  <script src=\"lib/easing/easing.min.js\"></script>

  <!-- Template Main Javascript File -->
  <script src=\"js/main.js\"></script>

</body>
</html>


----------- Main JS ---------------------

jQuery(document).ready(function( \$ ) {

  // Smooth scroll for the menu and links with .scrollto classes
  \$('.smoothscroll').on('click', function(e) {
    e.preventDefault();
    if (location.pathname.replace(/^\\//, '') == this.pathname.replace(/^\\//, '') && location.hostname == this.hostname) {
      var target = \$(this.hash);
      if (target.length) {

        \$('html, body').animate({
          scrollTop: target.offset().top - 48
        }, 1500, 'easeInOutExpo');
      }
    }
  });

  \$(\".navbar-collapse a\").on('click', function() {
    \$(\".navbar-collapse.collapse\").removeClass('in');
  });
});
      ", "credits.txt", "C:\\wamp64\\www\\ProjetHitema\\templates\\credits.txt");
    }
}
