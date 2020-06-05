<?php

use Twig\Environment;
use Twig\Source;
use Twig\Template;

/* login.html */
class __TwigTemplate_33970ac78c2a7925b4cfff6e6370e44e8903e20fa2bd15e6df4a74df8eea4bfa extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login.html"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login.html"));

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

<body>
  <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
  <div id=\"login-page\">
    <div class=\"container\">
      <form class=\"form-login\" action=\"index.html\">
        <h2 class=\"form-login-heading\">sign in now</h2>
        <div class=\"login-wrap\">
          <input type=\"text\" class=\"form-control\" placeholder=\"User ID\" autofocus>
          <br>
          <input type=\"password\" class=\"form-control\" placeholder=\"Password\">
          <label class=\"checkbox\">
            <input type=\"checkbox\" value=\"remember-me\"> Remember me
            <span class=\"pull-right\">
            <a data-toggle=\"modal\" href=\"login.html#myModal\"> Forgot Password?</a>
            </span>
            </label>
          <button class=\"btn btn-theme btn-block\" href=\"index.html\" type=\"submit\"><i class=\"fa fa-lock\"></i> SIGN IN</button>
          <hr>
          <div class=\"login-social-link centered\">
            <p>or you can sign in via your social network</p>
            <button class=\"btn btn-facebook\" type=\"submit\"><i class=\"fa fa-facebook\"></i> Facebook</button>
            <button class=\"btn btn-twitter\" type=\"submit\"><i class=\"fa fa-twitter\"></i> Twitter</button>
          </div>
          <div class=\"registration\">
            Don't have an account yet?<br/>
            <a class=\"\" href=\"#\">
              Create an account
              </a>
          </div>
        </div>
        <!-- Modal -->
        <div aria-hidden=\"true\" aria-labelledby=\"myModalLabel\" role=\"dialog\" tabindex=\"-1\" id=\"myModal\" class=\"modal fade\">
          <div class=\"modal-dialog\">
            <div class=\"modal-content\">
              <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4 class=\"modal-title\">Forgot Password ?</h4>
              </div>
              <div class=\"modal-body\">
                <p>Enter your e-mail address below to reset your password.</p>
                <input type=\"text\" name=\"email\" placeholder=\"Email\" autocomplete=\"off\" class=\"form-control placeholder-no-fix\">
              </div>
              <div class=\"modal-footer\">
                <button data-dismiss=\"modal\" class=\"btn btn-default\" type=\"button\">Cancel</button>
                <button class=\"btn btn-theme\" type=\"button\">Submit</button>
              </div>
            </div>
          </div>
        </div>
        <!-- modal -->
      </form>
    </div>
  </div>
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
</body>

</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "login.html";
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

<body>
  <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
  <div id=\"login-page\">
    <div class=\"container\">
      <form class=\"form-login\" action=\"index.html\">
        <h2 class=\"form-login-heading\">sign in now</h2>
        <div class=\"login-wrap\">
          <input type=\"text\" class=\"form-control\" placeholder=\"User ID\" autofocus>
          <br>
          <input type=\"password\" class=\"form-control\" placeholder=\"Password\">
          <label class=\"checkbox\">
            <input type=\"checkbox\" value=\"remember-me\"> Remember me
            <span class=\"pull-right\">
            <a data-toggle=\"modal\" href=\"login.html#myModal\"> Forgot Password?</a>
            </span>
            </label>
          <button class=\"btn btn-theme btn-block\" href=\"index.html\" type=\"submit\"><i class=\"fa fa-lock\"></i> SIGN IN</button>
          <hr>
          <div class=\"login-social-link centered\">
            <p>or you can sign in via your social network</p>
            <button class=\"btn btn-facebook\" type=\"submit\"><i class=\"fa fa-facebook\"></i> Facebook</button>
            <button class=\"btn btn-twitter\" type=\"submit\"><i class=\"fa fa-twitter\"></i> Twitter</button>
          </div>
          <div class=\"registration\">
            Don't have an account yet?<br/>
            <a class=\"\" href=\"#\">
              Create an account
              </a>
          </div>
        </div>
        <!-- Modal -->
        <div aria-hidden=\"true\" aria-labelledby=\"myModalLabel\" role=\"dialog\" tabindex=\"-1\" id=\"myModal\" class=\"modal fade\">
          <div class=\"modal-dialog\">
            <div class=\"modal-content\">
              <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4 class=\"modal-title\">Forgot Password ?</h4>
              </div>
              <div class=\"modal-body\">
                <p>Enter your e-mail address below to reset your password.</p>
                <input type=\"text\" name=\"email\" placeholder=\"Email\" autocomplete=\"off\" class=\"form-control placeholder-no-fix\">
              </div>
              <div class=\"modal-footer\">
                <button data-dismiss=\"modal\" class=\"btn btn-default\" type=\"button\">Cancel</button>
                <button class=\"btn btn-theme\" type=\"button\">Submit</button>
              </div>
            </div>
          </div>
        </div>
        <!-- modal -->
      </form>
    </div>
  </div>
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
</body>

</html>
", "login.html", "C:\\wamp\\www\\ProjetHitema\\templates\\login.html");
    }
}
