<?php

use Twig\Environment;
use Twig\Source;
use Twig\Template;

/* index.html.twig */
class __TwigTemplate_b52ceb2854750f5c93f6216741e59fbd38e5b77df5ff64c95cfd0f3db06e6329 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index.html.twig"));

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
  <link href=\"build/img/favicon.png\" rel=\"icon\">
  <link href=\"build/img/apple-touch-icon.png\" rel=\"apple-touch-icon\">

  <!-- Bootstrap core CSS --> 
  <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <!--external css-->
  <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/font-awesome/css/font-awesome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
  <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/app.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/chart-master/Chart.js"), "html", null, true);
        echo "\"></script>

  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>

  <link href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/app.js"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <section id=\"container\">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class=\"header black-bg\">
      <div class=\"sidebar-toggle-box\">
        <div class=\"fa fa-bars tooltips\" data-placement=\"right\" data-original-title=\"Toggle Navigation\"></div>
      </div>
      <!--logo start-->
      <a href=\"index.html\" class=\"logo\"><b>DASH<span>IO</span></b></a>
      <!--logo end-->
      <div class=\"nav notify-row\" id=\"top_menu\">
        <!--  notification start -->
        <ul class=\"nav top-menu\">
          <!-- settings start -->
          <li class=\"dropdown\">
            <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"index.html#\">
              <i class=\"fa fa-tasks\"></i>
              <span class=\"badge bg-theme\">4</span>
              </a>
            <ul class=\"dropdown-menu extended tasks-bar\">
              <div class=\"notify-arrow notify-arrow-green\"></div>
              <li>
                <p class=\"green\">You have 4 pending tasks</p>
              </li>
              <li>
                <a href=\"index.html#\">
                  <div class=\"task-info\">
                    <div class=\"desc\">Dashio Admin Panel</div>
                    <div class=\"percent\">40%</div>
                  </div>
                  <div class=\"progress progress-striped\">
                    <div class=\"progress-bar progress-bar-success\" role=\"progressbar\" aria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 40%\">
                      <span class=\"sr-only\">40% Complete (success)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href=\"index.html#\">
                  <div class=\"task-info\">
                    <div class=\"desc\">Database Update</div>
                    <div class=\"percent\">60%</div>
                  </div>
                  <div class=\"progress progress-striped\">
                    <div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 60%\">
                      <span class=\"sr-only\">60% Complete (warning)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href=\"index.html#\">
                  <div class=\"task-info\">
                    <div class=\"desc\">Product Development</div>
                    <div class=\"percent\">80%</div>
                  </div>
                  <div class=\"progress progress-striped\">
                    <div class=\"progress-bar progress-bar-info\" role=\"progressbar\" aria-valuenow=\"80\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 80%\">
                      <span class=\"sr-only\">80% Complete</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href=\"index.html#\">
                  <div class=\"task-info\">
                    <div class=\"desc\">Payments Sent</div>
                    <div class=\"percent\">70%</div>
                  </div>
                  <div class=\"progress progress-striped\">
                    <div class=\"progress-bar progress-bar-danger\" role=\"progressbar\" aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 70%\">
                      <span class=\"sr-only\">70% Complete (Important)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li class=\"external\">
                <a href=\"#\">See All Tasks</a>
              </li>
            </ul>
          </li>
          <!-- settings end -->
          <!-- inbox dropdown start-->
          <li id=\"header_inbox_bar\" class=\"dropdown\">
            <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"index.html#\">
              <i class=\"fa fa-envelope-o\"></i>
              <span class=\"badge bg-theme\">5</span>
              </a>
            <ul class=\"dropdown-menu extended inbox\">
              <div class=\"notify-arrow notify-arrow-green\"></div>
              <li>
                <p class=\"green\">You have 5 new messages</p>
              </li>
              <li>
                <a href=\"index.html#\">
                  <span class=\"photo\"><img alt=\"avatar\" src=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/ui-zac.jpg"), "html", null, true);
        echo "\"></span>
                  <span class=\"subject\">
                  <span class=\"from\">Zac Snider</span>
                  <span class=\"time\">Just now</span>
                  </span>
                  <span class=\"message\">
                  Hi mate, how is everything?
                  </span>
                  </a>
              </li>
              <li>
                <a href=\"index.html#\">
                  <span class=\"photo\"><img alt=\"avatar\" src=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/ui-divya.jpg"), "html", null, true);
        echo "\"></span>
                  <span class=\"subject\">
                  <span class=\"from\">Divya Manian</span>
                  <span class=\"time\">40 mins.</span>
                  </span>
                  <span class=\"message\">
                  Hi, I need your help with this.
                  </span>
                  </a>
              </li>
              <li>
                <a href=\"index.html#\">
                  <span class=\"photo\"><img alt=\"avatar\" src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/ui-danro.jpg"), "html", null, true);
        echo "\"></span>
                  <span class=\"subject\">
                  <span class=\"from\">Dan Rogers</span>
                  <span class=\"time\">2 hrs.</span>
                  </span>
                  <span class=\"message\">
                  Love your new Dashboard.
                  </span>
                  </a>
              </li>
              <li>
                <a href=\"index.html#\">
                  <span class=\"photo\"><img alt=\"avatar\" src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/ui-sherman.jpg"), "html", null, true);
        echo "\"></span>
                  <span class=\"subject\">
                  <span class=\"from\">Dj Sherman</span>
                  <span class=\"time\">4 hrs.</span>
                  </span>
                  <span class=\"message\">
                  Please, answer asap.
                  </span>
                  </a>
              </li>
              <li>
                <a href=\"index.html#\">See all messages</a>
              </li>
            </ul>
          </li>
          <!-- inbox dropdown end -->
          <!-- notification dropdown start-->
          <li id=\"header_notification_bar\" class=\"dropdown\">
            <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"index.html#\">
              <i class=\"fa fa-bell-o\"></i>
              <span class=\"badge bg-warning\">7</span>
              </a>
            <ul class=\"dropdown-menu extended notification\">
              <div class=\"notify-arrow notify-arrow-yellow\"></div>
              <li>
                <p class=\"yellow\">You have 7 new notifications</p>
              </li>
              <li>
                <a href=\"index.html#\">
                  <span class=\"label label-danger\"><i class=\"fa fa-bolt\"></i></span>
                  Server Overloaded.
                  <span class=\"small italic\">4 mins.</span>
                  </a>
              </li>
              <li>
                <a href=\"index.html#\">
                  <span class=\"label label-warning\"><i class=\"fa fa-bell\"></i></span>
                  Memory #2 Not Responding.
                  <span class=\"small italic\">30 mins.</span>
                  </a>
              </li>
              <li>
                <a href=\"index.html#\">
                  <span class=\"label label-danger\"><i class=\"fa fa-bolt\"></i></span>
                  Disk Space Reached 85%.
                  <span class=\"small italic\">2 hrs.</span>
                  </a>
              </li>
              <li>
                <a href=\"index.html#\">
                  <span class=\"label label-success\"><i class=\"fa fa-plus\"></i></span>
                  New User Registered.
                  <span class=\"small italic\">3 hrs.</span>
                  </a>
              </li>
              <li>
                <a href=\"index.html#\">See all notifications</a>
              </li>
            </ul>
          </li>
          <!-- notification dropdown end -->
        </ul>
        <!--  notification end -->
      </div>
      <div class=\"top-menu\">
        <ul class=\"nav pull-right top-menu\">
          <li><a class=\"logout\" href=\"login.html\">Logout</a></li>
        </ul>
      </div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
      <div id=\"sidebar\" class=\"nav-collapse \">
        <!-- sidebar menu start-->
        <ul class=\"sidebar-menu\" id=\"nav-accordion\">
          <p class=\"centered\"><a href=\"profile.html\"><img src=\"";
        // line 246
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/ui-sam.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" width=\"80\"></a></p>
          <h5 class=\"centered\">Sam Soffes</h5>
          <li class=\"mt\">
            <a class=\"active\" href=\"index.html\">
              <i class=\"fa fa-dashboard\"></i>
              <span>Se connecter</span>
              </a>
          </li>
          <li class=\"sub-menu\">
            <a href=\"javascript:;\">
              <i class=\"fa fa-desktop\"></i>
              <span>Historique</span>
              </a>
            <ul class=\"sub\">
              <li><a href=\"general.html\">General</a></li>
              <li><a href=\"buttons.html\">Buttons</a></li>
              <li><a href=\"panels.html\">Panels</a></li>
              <li><a href=\"font_awesome.html\">Font Awesome</a></li>
            </ul>
          </li>
          <li class=\"sub-menu\">
            <a href=\"javascript:;\">
              <i class=\"fa fa-cogs\"></i>
              <span>Panier</span>
              </a>
            <ul class=\"sub\">
              <li><a href=\"grids.html\">Grids</a></li>
              <li><a href=\"calendar.html\">Calendar</a></li>
              <li><a href=\"gallery.html\">Gallery</a></li>
              <li><a href=\"todo_list.html\">Todo List</a></li>
              <li><a href=\"dropzone.html\">Dropzone File Upload</a></li>
              <li><a href=\"inline_editor.html\">Inline Editor</a></li>
              <li><a href=\"file_upload.html\">Multiple File Upload</a></li>
            </ul>
          </li>
          <li class=\"sub-menu\">
            <a href=\"javascript:;\">
              <i class=\"fa fa-book\"></i>
              <span>Contact</span>
              </a>
            <ul class=\"sub\">
              <li><a href=\"blank.html\">Blank Page</a></li>
              <li><a href=\"login.html\">Login</a></li>
              <li><a href=\"lock_screen.html\">Lock Screen</a></li>
              <li><a href=\"profile.html\">Profile</a></li>
              <li><a href=\"invoice.html\">Invoice</a></li>
              <li><a href=\"pricing_table.html\">Pricing Table</a></li>
              <li><a href=\"faq.html\">FAQ</a></li>
              <li><a href=\"404.html\">404 Error</a></li>
              <li><a href=\"500.html\">500 Error</a></li>
            </ul>
          </li>
          <li class=\"sub-menu\">
            <a href=\"javascript:;\">
              <i class=\"fa fa-tasks\"></i>
              <span>Aide</span>
              </a>
            <ul class=\"sub\">
              <li><a href=\"form_component.html\">Form Components</a></li>
              <li><a href=\"advanced_form_components.html\">Advanced Components</a></li>
              <li><a href=\"form_validation.html\">Form Validation</a></li>
              <li><a href=\"contactform.html\">Contact Form</a></li>
            </ul>
          </li>
          <li class=\"sub-menu\">
            <a href=\"javascript:;\">
              <i class=\"fa fa-th\"></i>
              <span>Data Tables</span>
              </a>
            <ul class=\"sub\">
              <li><a href=\"basic_table.html\">Basic Table</a></li>
              <li><a href=\"responsive_table.html\">Responsive Table</a></li>
              <li><a href=\"advanced_table.html\">Advanced Table</a></li>
            </ul>
          </li>
          <li>
            <a href=\"inbox.html\">
              <i class=\"fa fa-envelope\"></i>
              <span>Mail </span>
              <span class=\"label label-theme pull-right mail-info\">2</span>
              </a>
          </li>
          <li class=\"sub-menu\">
            <a href=\"javascript:;\">
              <i class=\" fa fa-bar-chart-o\"></i>
              <span>Charts</span>
              </a>
            <ul class=\"sub\">
              <li><a href=\"morris.html\">Morris</a></li>
              <li><a href=\"chartjs.html\">Chartjs</a></li>
              <li><a href=\"flot_chart.html\">Flot Charts</a></li>
              <li><a href=\"xchart.html\">xChart</a></li>
            </ul>
          </li>
          <li class=\"sub-menu\">
            <a href=\"javascript:;\">
              <i class=\"fa fa-comments-o\"></i>
              <span>Chat Room</span>
              </a>
            <ul class=\"sub\">
              <li><a href=\"lobby.html\">Lobby</a></li>
              <li><a href=\"chat_room.html\"> Chat Room</a></li>
            </ul>
          </li>
          <li>
            <a href=\"google_maps.html\">
              <i class=\"fa fa-map-marker\"></i>
              <span>Google Maps </span>
              </a>
          </li>
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id=\"main-content\">
      <section class=\"wrapper\">
        <div class=\"row\">
          <div class=\"col-lg-9 main-chart\">
            <label for=\"site-search\">Recherche : </label>
            <input type=\"search\" id=\"site-search\" name=\"q\"
                   aria-label=\"Search through site content\">

            <button type=\"button\" class=\"btn btn-danger\">Search</button>

            <!-- /col-md-4 -->
            </div>
            <!-- /row -->
          </div>
          <!-- /col-lg-9 END SECTION MIDDLE -->
          <!-- **********************************************************************************************************************************************************
              RIGHT SIDEBAR CONTENT

      </section>
    </section>
    <!--main content end-->
    <!--footer start-->

        <a href=\"index.html#\" class=\"go-top\">
          <i class=\"fa fa-angle-up\"></i>
          </a>
      </div>
    </footer>
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src=\"";
        // line 396
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>

  <script src=\"";
        // line 398
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
  <script class=\"include\" type=\"text/javascript\" src=\"";
        // line 399
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/jquery.dcjqaccordion.2.7.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 400
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/jquery.scrollTo.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 401
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/jquery.nicescroll.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
  <script src=\"";
        // line 402
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/jquery.sparkline.js"), "html", null, true);
        echo "\"></script>
  <!--common script for all pages-->
  <script src=\"";
        // line 404
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/common-scripts.js"), "html", null, true);
        echo "\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 405
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/gritter/js/jquery.gritter.js"), "html", null, true);
        echo "\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 406
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/gritter-conf.js"), "html", null, true);
        echo "\"></script>
  <!--script for this page-->
  <script src=\"";
        // line 408
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/sparkline-chart.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 409
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/zabuto_calendar.js"), "html", null, true);
        echo "\"></script>
  <script type=\"text/javascript\">
    \$(document).ready(function() {
      var unique_id = \$.gritter.add({
        // (string | mandatory) the heading of the notification
        title: 'Welcome to Dashio!',
        // (string | mandatory) the text inside the notification
        text: 'Hover me to enable the Close Button. You can hide the left sidebar clicking on the button next to the logo.',
        // (string | optional) the image to display on the left
        image: '";
        // line 418
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/ui-sam.jpg"), "html", null, true);
        echo "',
        // (bool | optional) if you want it to fade out on its own or just sit there
        sticky: false,
        // (int | optional) the time you want it to be alive for before fading out
        time: 8000,
        // (string | optional) the class name you want to apply to that specific message
        class_name: 'my-sticky-class'
      });

      return false;
    });
  </script>
  <script type=\"application/javascript\">
    \$(document).ready(function() {
      \$(\"#date-popover\").popover({
        html: true,
        trigger: \"manual\"
      });
      \$(\"#date-popover\").hide();
      \$(\"#date-popover\").click(function(e) {
        \$(this).hide();
      });

      \$(\"#my-calendar\").zabuto_calendar({
        action: function() {
          return myDateFunction(this.id, false);
        },
        action_nav: function() {
          return myNavFunction(this.id);
        },
        ajax: {
          url: \"show_data.php?action=1\",
          modal: true
        },
        legend: [{
            type: \"text\",
            label: \"Special event\",
            badge: \"00\"
          },
          {
            type: \"block\",
            label: \"Regular event\",
          }
        ]
      });
    });

    function myNavFunction(id) {
      \$(\"#date-popover\").hide();
      var nav = \$(\"#\" + id).data(\"navigation\");
      var to = \$(\"#\" + id).data(\"to\");
      console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
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
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  525 => 418,  513 => 409,  509 => 408,  504 => 406,  500 => 405,  496 => 404,  491 => 402,  487 => 401,  483 => 400,  479 => 399,  475 => 398,  470 => 396,  317 => 246,  235 => 167,  220 => 155,  205 => 143,  190 => 131,  89 => 33,  74 => 21,  70 => 20,  66 => 19,  61 => 17,  43 => 1,);
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
  <link href=\"build/img/favicon.png\" rel=\"icon\">
  <link href=\"build/img/apple-touch-icon.png\" rel=\"apple-touch-icon\">

  <!-- Bootstrap core CSS --> 
  <link href=\"{{ asset('lib/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
  <!--external css-->
  <link href=\"{{ asset('lib/font-awesome/css/font-awesome.css') }}\" rel=\"stylesheet\" />
  <link href=\"{{ asset('build/app.css') }}\" rel=\"stylesheet\">
  <script src=\"{{ asset('lib/chart-master/Chart.js') }}\"></script>

  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>

  <link href=\"{{ asset('build/app.js') }}\" rel=\"stylesheet\">
  <section id=\"container\">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class=\"header black-bg\">
      <div class=\"sidebar-toggle-box\">
        <div class=\"fa fa-bars tooltips\" data-placement=\"right\" data-original-title=\"Toggle Navigation\"></div>
      </div>
      <!--logo start-->
      <a href=\"index.html\" class=\"logo\"><b>DASH<span>IO</span></b></a>
      <!--logo end-->
      <div class=\"nav notify-row\" id=\"top_menu\">
        <!--  notification start -->
        <ul class=\"nav top-menu\">
          <!-- settings start -->
          <li class=\"dropdown\">
            <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"index.html#\">
              <i class=\"fa fa-tasks\"></i>
              <span class=\"badge bg-theme\">4</span>
              </a>
            <ul class=\"dropdown-menu extended tasks-bar\">
              <div class=\"notify-arrow notify-arrow-green\"></div>
              <li>
                <p class=\"green\">You have 4 pending tasks</p>
              </li>
              <li>
                <a href=\"index.html#\">
                  <div class=\"task-info\">
                    <div class=\"desc\">Dashio Admin Panel</div>
                    <div class=\"percent\">40%</div>
                  </div>
                  <div class=\"progress progress-striped\">
                    <div class=\"progress-bar progress-bar-success\" role=\"progressbar\" aria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 40%\">
                      <span class=\"sr-only\">40% Complete (success)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href=\"index.html#\">
                  <div class=\"task-info\">
                    <div class=\"desc\">Database Update</div>
                    <div class=\"percent\">60%</div>
                  </div>
                  <div class=\"progress progress-striped\">
                    <div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 60%\">
                      <span class=\"sr-only\">60% Complete (warning)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href=\"index.html#\">
                  <div class=\"task-info\">
                    <div class=\"desc\">Product Development</div>
                    <div class=\"percent\">80%</div>
                  </div>
                  <div class=\"progress progress-striped\">
                    <div class=\"progress-bar progress-bar-info\" role=\"progressbar\" aria-valuenow=\"80\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 80%\">
                      <span class=\"sr-only\">80% Complete</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href=\"index.html#\">
                  <div class=\"task-info\">
                    <div class=\"desc\">Payments Sent</div>
                    <div class=\"percent\">70%</div>
                  </div>
                  <div class=\"progress progress-striped\">
                    <div class=\"progress-bar progress-bar-danger\" role=\"progressbar\" aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 70%\">
                      <span class=\"sr-only\">70% Complete (Important)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li class=\"external\">
                <a href=\"#\">See All Tasks</a>
              </li>
            </ul>
          </li>
          <!-- settings end -->
          <!-- inbox dropdown start-->
          <li id=\"header_inbox_bar\" class=\"dropdown\">
            <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"index.html#\">
              <i class=\"fa fa-envelope-o\"></i>
              <span class=\"badge bg-theme\">5</span>
              </a>
            <ul class=\"dropdown-menu extended inbox\">
              <div class=\"notify-arrow notify-arrow-green\"></div>
              <li>
                <p class=\"green\">You have 5 new messages</p>
              </li>
              <li>
                <a href=\"index.html#\">
                  <span class=\"photo\"><img alt=\"avatar\" src=\"{{asset('build/img/ui-zac.jpg')}}\"></span>
                  <span class=\"subject\">
                  <span class=\"from\">Zac Snider</span>
                  <span class=\"time\">Just now</span>
                  </span>
                  <span class=\"message\">
                  Hi mate, how is everything?
                  </span>
                  </a>
              </li>
              <li>
                <a href=\"index.html#\">
                  <span class=\"photo\"><img alt=\"avatar\" src=\"{{asset('build/img/ui-divya.jpg')}}\"></span>
                  <span class=\"subject\">
                  <span class=\"from\">Divya Manian</span>
                  <span class=\"time\">40 mins.</span>
                  </span>
                  <span class=\"message\">
                  Hi, I need your help with this.
                  </span>
                  </a>
              </li>
              <li>
                <a href=\"index.html#\">
                  <span class=\"photo\"><img alt=\"avatar\" src=\"{{asset('build/img/ui-danro.jpg')}}\"></span>
                  <span class=\"subject\">
                  <span class=\"from\">Dan Rogers</span>
                  <span class=\"time\">2 hrs.</span>
                  </span>
                  <span class=\"message\">
                  Love your new Dashboard.
                  </span>
                  </a>
              </li>
              <li>
                <a href=\"index.html#\">
                  <span class=\"photo\"><img alt=\"avatar\" src=\"{{asset('build/img/ui-sherman.jpg')}}\"></span>
                  <span class=\"subject\">
                  <span class=\"from\">Dj Sherman</span>
                  <span class=\"time\">4 hrs.</span>
                  </span>
                  <span class=\"message\">
                  Please, answer asap.
                  </span>
                  </a>
              </li>
              <li>
                <a href=\"index.html#\">See all messages</a>
              </li>
            </ul>
          </li>
          <!-- inbox dropdown end -->
          <!-- notification dropdown start-->
          <li id=\"header_notification_bar\" class=\"dropdown\">
            <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"index.html#\">
              <i class=\"fa fa-bell-o\"></i>
              <span class=\"badge bg-warning\">7</span>
              </a>
            <ul class=\"dropdown-menu extended notification\">
              <div class=\"notify-arrow notify-arrow-yellow\"></div>
              <li>
                <p class=\"yellow\">You have 7 new notifications</p>
              </li>
              <li>
                <a href=\"index.html#\">
                  <span class=\"label label-danger\"><i class=\"fa fa-bolt\"></i></span>
                  Server Overloaded.
                  <span class=\"small italic\">4 mins.</span>
                  </a>
              </li>
              <li>
                <a href=\"index.html#\">
                  <span class=\"label label-warning\"><i class=\"fa fa-bell\"></i></span>
                  Memory #2 Not Responding.
                  <span class=\"small italic\">30 mins.</span>
                  </a>
              </li>
              <li>
                <a href=\"index.html#\">
                  <span class=\"label label-danger\"><i class=\"fa fa-bolt\"></i></span>
                  Disk Space Reached 85%.
                  <span class=\"small italic\">2 hrs.</span>
                  </a>
              </li>
              <li>
                <a href=\"index.html#\">
                  <span class=\"label label-success\"><i class=\"fa fa-plus\"></i></span>
                  New User Registered.
                  <span class=\"small italic\">3 hrs.</span>
                  </a>
              </li>
              <li>
                <a href=\"index.html#\">See all notifications</a>
              </li>
            </ul>
          </li>
          <!-- notification dropdown end -->
        </ul>
        <!--  notification end -->
      </div>
      <div class=\"top-menu\">
        <ul class=\"nav pull-right top-menu\">
          <li><a class=\"logout\" href=\"login.html\">Logout</a></li>
        </ul>
      </div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
      <div id=\"sidebar\" class=\"nav-collapse \">
        <!-- sidebar menu start-->
        <ul class=\"sidebar-menu\" id=\"nav-accordion\">
          <p class=\"centered\"><a href=\"profile.html\"><img src=\"{{asset('build/img/ui-sam.jpg')}}\" class=\"img-circle\" width=\"80\"></a></p>
          <h5 class=\"centered\">Sam Soffes</h5>
          <li class=\"mt\">
            <a class=\"active\" href=\"index.html\">
              <i class=\"fa fa-dashboard\"></i>
              <span>Se connecter</span>
              </a>
          </li>
          <li class=\"sub-menu\">
            <a href=\"javascript:;\">
              <i class=\"fa fa-desktop\"></i>
              <span>Historique</span>
              </a>
            <ul class=\"sub\">
              <li><a href=\"general.html\">General</a></li>
              <li><a href=\"buttons.html\">Buttons</a></li>
              <li><a href=\"panels.html\">Panels</a></li>
              <li><a href=\"font_awesome.html\">Font Awesome</a></li>
            </ul>
          </li>
          <li class=\"sub-menu\">
            <a href=\"javascript:;\">
              <i class=\"fa fa-cogs\"></i>
              <span>Panier</span>
              </a>
            <ul class=\"sub\">
              <li><a href=\"grids.html\">Grids</a></li>
              <li><a href=\"calendar.html\">Calendar</a></li>
              <li><a href=\"gallery.html\">Gallery</a></li>
              <li><a href=\"todo_list.html\">Todo List</a></li>
              <li><a href=\"dropzone.html\">Dropzone File Upload</a></li>
              <li><a href=\"inline_editor.html\">Inline Editor</a></li>
              <li><a href=\"file_upload.html\">Multiple File Upload</a></li>
            </ul>
          </li>
          <li class=\"sub-menu\">
            <a href=\"javascript:;\">
              <i class=\"fa fa-book\"></i>
              <span>Contact</span>
              </a>
            <ul class=\"sub\">
              <li><a href=\"blank.html\">Blank Page</a></li>
              <li><a href=\"login.html\">Login</a></li>
              <li><a href=\"lock_screen.html\">Lock Screen</a></li>
              <li><a href=\"profile.html\">Profile</a></li>
              <li><a href=\"invoice.html\">Invoice</a></li>
              <li><a href=\"pricing_table.html\">Pricing Table</a></li>
              <li><a href=\"faq.html\">FAQ</a></li>
              <li><a href=\"404.html\">404 Error</a></li>
              <li><a href=\"500.html\">500 Error</a></li>
            </ul>
          </li>
          <li class=\"sub-menu\">
            <a href=\"javascript:;\">
              <i class=\"fa fa-tasks\"></i>
              <span>Aide</span>
              </a>
            <ul class=\"sub\">
              <li><a href=\"form_component.html\">Form Components</a></li>
              <li><a href=\"advanced_form_components.html\">Advanced Components</a></li>
              <li><a href=\"form_validation.html\">Form Validation</a></li>
              <li><a href=\"contactform.html\">Contact Form</a></li>
            </ul>
          </li>
          <li class=\"sub-menu\">
            <a href=\"javascript:;\">
              <i class=\"fa fa-th\"></i>
              <span>Data Tables</span>
              </a>
            <ul class=\"sub\">
              <li><a href=\"basic_table.html\">Basic Table</a></li>
              <li><a href=\"responsive_table.html\">Responsive Table</a></li>
              <li><a href=\"advanced_table.html\">Advanced Table</a></li>
            </ul>
          </li>
          <li>
            <a href=\"inbox.html\">
              <i class=\"fa fa-envelope\"></i>
              <span>Mail </span>
              <span class=\"label label-theme pull-right mail-info\">2</span>
              </a>
          </li>
          <li class=\"sub-menu\">
            <a href=\"javascript:;\">
              <i class=\" fa fa-bar-chart-o\"></i>
              <span>Charts</span>
              </a>
            <ul class=\"sub\">
              <li><a href=\"morris.html\">Morris</a></li>
              <li><a href=\"chartjs.html\">Chartjs</a></li>
              <li><a href=\"flot_chart.html\">Flot Charts</a></li>
              <li><a href=\"xchart.html\">xChart</a></li>
            </ul>
          </li>
          <li class=\"sub-menu\">
            <a href=\"javascript:;\">
              <i class=\"fa fa-comments-o\"></i>
              <span>Chat Room</span>
              </a>
            <ul class=\"sub\">
              <li><a href=\"lobby.html\">Lobby</a></li>
              <li><a href=\"chat_room.html\"> Chat Room</a></li>
            </ul>
          </li>
          <li>
            <a href=\"google_maps.html\">
              <i class=\"fa fa-map-marker\"></i>
              <span>Google Maps </span>
              </a>
          </li>
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id=\"main-content\">
      <section class=\"wrapper\">
        <div class=\"row\">
          <div class=\"col-lg-9 main-chart\">
            <label for=\"site-search\">Recherche : </label>
            <input type=\"search\" id=\"site-search\" name=\"q\"
                   aria-label=\"Search through site content\">

            <button type=\"button\" class=\"btn btn-danger\">Search</button>

            <!-- /col-md-4 -->
            </div>
            <!-- /row -->
          </div>
          <!-- /col-lg-9 END SECTION MIDDLE -->
          <!-- **********************************************************************************************************************************************************
              RIGHT SIDEBAR CONTENT

      </section>
    </section>
    <!--main content end-->
    <!--footer start-->

        <a href=\"index.html#\" class=\"go-top\">
          <i class=\"fa fa-angle-up\"></i>
          </a>
      </div>
    </footer>
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src=\"{{ asset('lib/jquery/jquery.min.js') }}\"></script>

  <script src=\"{{ asset('lib/bootstrap/js/bootstrap.min.js') }}\"></script>
  <script class=\"include\" type=\"text/javascript\" src=\"{{ asset('lib/jquery.dcjqaccordion.2.7.js') }}\"></script>
  <script src=\"{{ asset('lib/jquery.scrollTo.min.js') }}\"></script>
  <script src=\"{{ asset('lib/jquery.nicescroll.js') }}\" type=\"text/javascript\"></script>
  <script src=\"{{ asset('lib/jquery.sparkline.js') }}\"></script>
  <!--common script for all pages-->
  <script src=\"{{ asset('lib/common-scripts.js') }}\"></script>
  <script type=\"text/javascript\" src=\"{{ asset('lib/gritter/js/jquery.gritter.js') }}\"></script>
  <script type=\"text/javascript\" src=\"{{ asset('lib/gritter-conf.js') }}\"></script>
  <!--script for this page-->
  <script src=\"{{ asset('lib/sparkline-chart.js') }}\"></script>
  <script src=\"{{ asset('lib/zabuto_calendar.js') }}\"></script>
  <script type=\"text/javascript\">
    \$(document).ready(function() {
      var unique_id = \$.gritter.add({
        // (string | mandatory) the heading of the notification
        title: 'Welcome to Dashio!',
        // (string | mandatory) the text inside the notification
        text: 'Hover me to enable the Close Button. You can hide the left sidebar clicking on the button next to the logo.',
        // (string | optional) the image to display on the left
        image: '{{ asset(\"build/img/ui-sam.jpg\") }}',
        // (bool | optional) if you want it to fade out on its own or just sit there
        sticky: false,
        // (int | optional) the time you want it to be alive for before fading out
        time: 8000,
        // (string | optional) the class name you want to apply to that specific message
        class_name: 'my-sticky-class'
      });

      return false;
    });
  </script>
  <script type=\"application/javascript\">
    \$(document).ready(function() {
      \$(\"#date-popover\").popover({
        html: true,
        trigger: \"manual\"
      });
      \$(\"#date-popover\").hide();
      \$(\"#date-popover\").click(function(e) {
        \$(this).hide();
      });

      \$(\"#my-calendar\").zabuto_calendar({
        action: function() {
          return myDateFunction(this.id, false);
        },
        action_nav: function() {
          return myNavFunction(this.id);
        },
        ajax: {
          url: \"show_data.php?action=1\",
          modal: true
        },
        legend: [{
            type: \"text\",
            label: \"Special event\",
            badge: \"00\"
          },
          {
            type: \"block\",
            label: \"Regular event\",
          }
        ]
      });
    });

    function myNavFunction(id) {
      \$(\"#date-popover\").hide();
      var nav = \$(\"#\" + id).data(\"navigation\");
      var to = \$(\"#\" + id).data(\"to\");
      console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
    }
  </script>
</body>

</html>
", "index.html.twig", "C:\\wamp\\www\\ProjetHitema\\templates\\index.html.twig");
    }
}
