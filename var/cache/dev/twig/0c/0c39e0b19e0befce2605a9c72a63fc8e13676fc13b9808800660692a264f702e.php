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

/* lock_screen.html */
class __TwigTemplate_efd5979a7e277a8ac245f1de7537ed4a216e5177a650e92954eaf2f10cae7607 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lock_screen.html"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lock_screen.html"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <meta name=\"description\" content=\"\">
  <meta name=\"author\" content=\"Dashboard\">
  <meta name=\"keyword\" content=\"Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina\">
  <title>Dashio - Bootstrap Admin Template</title>

  <!-- Favicons -->
  <link href=\"img/favicon.png\" rel=\"icon\">
  <link href=\"img/apple-touch-icon.png\" rel=\"apple-touch-icon\">

  <!-- Bootstrap core CSS -->
  <link href=\"lib/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">
  <!--external css-->
  <link href=\"lib/font-awesome/css/font-awesome.css\" rel=\"stylesheet\" />
  <!-- Custom styles for this template -->
  <link href=\"css/style.css\" rel=\"stylesheet\">
  <link href=\"css/style-responsive.css\" rel=\"stylesheet\">
  
  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body onload=\"getTime()\">
  <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
  <div class=\"container\">
    <div id=\"showtime\"></div>
    <div class=\"col-lg-4 col-lg-offset-4\">
      <div class=\"lock-screen\">
        <h2><a data-toggle=\"modal\" href=\"#myModal\"><i class=\"fa fa-lock\"></i></a></h2>
        <p>UNLOCK</p>
        <!-- Modal -->
        <div aria-hidden=\"true\" aria-labelledby=\"myModalLabel\" role=\"dialog\" tabindex=\"-1\" id=\"myModal\" class=\"modal fade\">
          <div class=\"modal-dialog\">
            <div class=\"modal-content\">
              <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4 class=\"modal-title\">Welcome Back</h4>
              </div>
              <div class=\"modal-body\">
                <p class=\"centered\"><img class=\"img-circle\" width=\"80\" src=\"img/ui-sam.jpg\"></p>
                <input type=\"password\" name=\"password\" placeholder=\"Password\" autocomplete=\"off\" class=\"form-control placeholder-no-fix\">
              </div>
              <div class=\"modal-footer centered\">
                <button data-dismiss=\"modal\" class=\"btn btn-theme04\" type=\"button\">Cancel</button>
                <button class=\"btn btn-theme03\" type=\"button\">Login</button>
              </div>
            </div>
          </div>
        </div>
        <!-- modal -->
      </div>
      <!-- /lock-screen -->
    </div>
    <!-- /col-lg-4 -->
  </div>
  <!-- /container -->
  <!-- js placed at the end of the document so the pages load faster -->
  <script src=\"lib/jquery/jquery.min.js\"></script>
  <script src=\"lib/bootstrap/js/bootstrap.min.js\"></script>
  <!--BACKSTRETCH-->
  <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
  <script type=\"text/javascript\" src=\"lib/jquery.backstretch.min.js\"></script>
  <script>
    \$.backstretch(\"img/login-bg.jpg\", {
      speed: 500
    });
  </script>
  <script>
    function getTime() {
      var today = new Date();
      var h = today.getHours();
      var m = today.getMinutes();
      var s = today.getSeconds();
      // add a zero in front of numbers<10
      m = checkTime(m);
      s = checkTime(s);
      document.getElementById('showtime').innerHTML = h + \":\" + m + \":\" + s;
      t = setTimeout(function() {
        getTime()
      }, 500);
    }

    function checkTime(i) {
      if (i < 10) {
        i = \"0\" + i;
      }
      return i;
    }
  </script>
</body>

</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "lock_screen.html";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <meta name=\"description\" content=\"\">
  <meta name=\"author\" content=\"Dashboard\">
  <meta name=\"keyword\" content=\"Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina\">
  <title>Dashio - Bootstrap Admin Template</title>

  <!-- Favicons -->
  <link href=\"img/favicon.png\" rel=\"icon\">
  <link href=\"img/apple-touch-icon.png\" rel=\"apple-touch-icon\">

  <!-- Bootstrap core CSS -->
  <link href=\"lib/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">
  <!--external css-->
  <link href=\"lib/font-awesome/css/font-awesome.css\" rel=\"stylesheet\" />
  <!-- Custom styles for this template -->
  <link href=\"css/style.css\" rel=\"stylesheet\">
  <link href=\"css/style-responsive.css\" rel=\"stylesheet\">
  
  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body onload=\"getTime()\">
  <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
  <div class=\"container\">
    <div id=\"showtime\"></div>
    <div class=\"col-lg-4 col-lg-offset-4\">
      <div class=\"lock-screen\">
        <h2><a data-toggle=\"modal\" href=\"#myModal\"><i class=\"fa fa-lock\"></i></a></h2>
        <p>UNLOCK</p>
        <!-- Modal -->
        <div aria-hidden=\"true\" aria-labelledby=\"myModalLabel\" role=\"dialog\" tabindex=\"-1\" id=\"myModal\" class=\"modal fade\">
          <div class=\"modal-dialog\">
            <div class=\"modal-content\">
              <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4 class=\"modal-title\">Welcome Back</h4>
              </div>
              <div class=\"modal-body\">
                <p class=\"centered\"><img class=\"img-circle\" width=\"80\" src=\"img/ui-sam.jpg\"></p>
                <input type=\"password\" name=\"password\" placeholder=\"Password\" autocomplete=\"off\" class=\"form-control placeholder-no-fix\">
              </div>
              <div class=\"modal-footer centered\">
                <button data-dismiss=\"modal\" class=\"btn btn-theme04\" type=\"button\">Cancel</button>
                <button class=\"btn btn-theme03\" type=\"button\">Login</button>
              </div>
            </div>
          </div>
        </div>
        <!-- modal -->
      </div>
      <!-- /lock-screen -->
    </div>
    <!-- /col-lg-4 -->
  </div>
  <!-- /container -->
  <!-- js placed at the end of the document so the pages load faster -->
  <script src=\"lib/jquery/jquery.min.js\"></script>
  <script src=\"lib/bootstrap/js/bootstrap.min.js\"></script>
  <!--BACKSTRETCH-->
  <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
  <script type=\"text/javascript\" src=\"lib/jquery.backstretch.min.js\"></script>
  <script>
    \$.backstretch(\"img/login-bg.jpg\", {
      speed: 500
    });
  </script>
  <script>
    function getTime() {
      var today = new Date();
      var h = today.getHours();
      var m = today.getMinutes();
      var s = today.getSeconds();
      // add a zero in front of numbers<10
      m = checkTime(m);
      s = checkTime(s);
      document.getElementById('showtime').innerHTML = h + \":\" + m + \":\" + s;
      t = setTimeout(function() {
        getTime()
      }, 500);
    }

    function checkTime(i) {
      if (i < 10) {
        i = \"0\" + i;
      }
      return i;
    }
  </script>
</body>

</html>
", "lock_screen.html", "C:\\wamp64\\www\\ProjetHitema\\templates\\lock_screen.html");
    }
}
