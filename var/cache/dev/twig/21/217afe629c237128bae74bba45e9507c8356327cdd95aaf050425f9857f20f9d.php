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

/* general.html */
class __TwigTemplate_f395830a94b74ac95d985eb38ae5d81937fc64d7c487d664af0981cceed2569b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "general.html"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "general.html"));

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
  <link rel=\"stylesheet\" type=\"text/css\" href=\"lib/gritter/css/jquery.gritter.css\" />
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
                  <span class=\"photo\"><img alt=\"avatar\" src=\"img/ui-zac.jpg\"></span>
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
                  <span class=\"photo\"><img alt=\"avatar\" src=\"img/ui-divya.jpg\"></span>
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
                  <span class=\"photo\"><img alt=\"avatar\" src=\"img/ui-danro.jpg\"></span>
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
                  <span class=\"photo\"><img alt=\"avatar\" src=\"img/ui-sherman.jpg\"></span>
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
          <p class=\"centered\"><a href=\"profile.html\"><img src=\"img/ui-sam.jpg\" class=\"img-circle\" width=\"80\"></a></p>
          <h5 class=\"centered\">Sam Soffes</h5>
          <li class=\"mt\">
            <a href=\"index.html\">
              <i class=\"fa fa-dashboard\"></i>
              <span>Dashboard</span>
              </a>
          </li>
          <li class=\"sub-menu\">
            <a class=\"active\" href=\"javascript:;\">
              <i class=\"fa fa-desktop\"></i>
              <span>UI Elements</span>
              </a>
            <ul class=\"sub\">
              <li class=\"active\"><a href=\"general.html\">General</a></li>
              <li><a href=\"buttons.html\">Buttons</a></li>
              <li><a href=\"panels.html\">Panels</a></li>
              <li><a href=\"font_awesome.html\">Font Awesome</a></li>
            </ul>
          </li>
          <li class=\"sub-menu\">
            <a href=\"javascript:;\">
              <i class=\"fa fa-cogs\"></i>
              <span>Components</span>
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
              <span>Extra Pages</span>
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
              <span>Forms</span>
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
        <div class=\"row mt\">
          <div class=\"col-lg-6 col-md-6 col-sm-12\">
            <!--  BASIC PROGRESS BARS -->
            <div class=\"showback\">
              <h4><i class=\"fa fa-angle-right\"></i> Basic Progress Bars</h4>
              <div class=\"progress\">
                <div class=\"progress-bar progress-bar-success\" role=\"progressbar\" aria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 40%\">
                  <span class=\"sr-only\">40% Complete (success)</span>
                </div>
              </div>
              <div class=\"progress\">
                <div class=\"progress-bar progress-bar-info\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 20%\">
                  <span class=\"sr-only\">20% Complete</span>
                </div>
              </div>
              <div class=\"progress\">
                <div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 60%\">
                  <span class=\"sr-only\">60% Complete (warning)</span>
                </div>
              </div>
              <div class=\"progress\">
                <div class=\"progress-bar progress-bar-danger\" role=\"progressbar\" aria-valuenow=\"80\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 80%\">
                  <span class=\"sr-only\">80% Complete</span>
                </div>
              </div>
            </div>
            <!--/showback -->
            <!--  STRIPPED PROGRESS BARS -->
            <div class=\"showback\">
              <h4><i class=\"fa fa-angle-right\"></i> Stripped Progress Bars</h4>
              <div class=\"progress progress-striped\">
                <div class=\"progress-bar progress-bar-success\" role=\"progressbar\" aria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 40%\">
                  <span class=\"sr-only\">40% Complete (success)</span>
                </div>
              </div>
              <div class=\"progress progress-striped\">
                <div class=\"progress-bar progress-bar-info\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 20%\">
                  <span class=\"sr-only\">20% Complete</span>
                </div>
              </div>
              <div class=\"progress progress-striped\">
                <div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 60%\">
                  <span class=\"sr-only\">60% Complete (warning)</span>
                </div>
              </div>
              <div class=\"progress progress-striped\">
                <div class=\"progress-bar progress-bar-danger\" role=\"progressbar\" aria-valuenow=\"80\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 80%\">
                  <span class=\"sr-only\">80% Complete (danger)</span>
                </div>
              </div>
            </div>
            <!-- /showback -->
            <!--  ANIMATED PROGRESS BARS -->
            <div class=\"showback\">
              <h4><i class=\"fa fa-angle-right\"></i> Animated Progress Bars</h4>
              <div class=\"progress progress-striped active\">
                <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"45\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 45%\">
                  <span class=\"sr-only\">45% Complete</span>
                </div>
              </div>
            </div>
            <!-- /showback -->
            <!--  MODALS -->
            <div class=\"showback\">
              <h4><i class=\"fa fa-angle-right\"></i> Modal Example</h4>
              <!-- Button trigger modal -->
              <button class=\"btn btn-success btn-lg\" data-toggle=\"modal\" data-target=\"#myModal\">
                Launch Modal
                </button>
              <!-- Modal -->
              <div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                <div class=\"modal-dialog\">
                  <div class=\"modal-content\">
                    <div class=\"modal-header\">
                      <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                      <h4 class=\"modal-title\" id=\"myModalLabel\">Modal title</h4>
                    </div>
                    <div class=\"modal-body\">
                      Hi there, I am a Modal Example for Dashio Admin Panel.
                    </div>
                    <div class=\"modal-footer\">
                      <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
                      <button type=\"button\" class=\"btn btn-primary\">Save changes</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- /showback -->
            <!--  GRITTER NOTICES -->
            <div class=\"showback\">
              <h4><i class=\"fa fa-angle-right\"></i> Gritter Examples</h4>
              <p>Click on below buttons to check it out.</p>
              <a id=\"add-regular\" class=\"btn btn-default btn-sm\" href=\"javascript:;\">Regular</a>
              <a id=\"add-sticky\" class=\"btn btn-success  btn-sm\" href=\"javascript:;\">Sticky</a>
              <a id=\"add-without-image\" class=\"btn btn-info  btn-sm\" href=\"javascript:;\">Imageless</a>
              <a id=\"add-gritter-light\" class=\"btn btn-warning  btn-sm\" href=\"javascript:;\">Light</a>
              <a id=\"remove-all\" class=\"btn btn-danger  btn-sm\" href=\"general.html#\">Remove all</a>
            </div>
            <!-- /showback -->
          </div>
          <!-- /col-lg-6 -->
          <div class=\"col-lg-6 col-md-6 col-sm-12\">
            <!--  ALERTS EXAMPLES -->
            <div class=\"showback\">
              <h4><i class=\"fa fa-angle-right\"></i> Alerts Examples</h4>
              <div class=\"alert alert-success\"><b>Well done!</b> You successfully read this important alert message.</div>
              <div class=\"alert alert-info\"><b>Heads up!</b> This alert needs your attention, but it's not super important.</div>
              <div class=\"alert alert-warning\"><b>Warning!</b> Better check yourself, you're not looking too good.</div>
              <div class=\"alert alert-danger\"><b>Oh snap!</b> Change a few things up and try submitting again.</div>
            </div>
            <!-- /showback -->
            <!--  DISMISSABLE ALERT -->
            <div class=\"showback\">
              <h4><i class=\"fa fa-angle-right\"></i> Dismissable Alert</h4>
              <div class=\"alert alert-warning alert-dismissable\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
                <strong>Warning!</strong> Better check yourself, you're not looking too good.
              </div>
            </div>
            <!-- /showback -->
            <!--  BADGES -->
            <div class=\"showback\">
              <h4><i class=\"fa fa-angle-right\"></i> Badges</h4>
              <span class=\"badge\">5</span>
              <span class=\"badge bg-primary\">10</span>
              <span class=\"badge bg-success\">15</span>
              <span class=\"badge bg-info\">20</span>
              <span class=\"badge bg-inverse\">25</span>
              <span class=\"badge bg-warning\">30</span>
              <span class=\"badge bg-important\">35</span>
            </div>
            <!-- /showback -->
            <!--  LABELS -->
            <div class=\"showback\">
              <h4><i class=\"fa fa-angle-right\"></i> Labels</h4>
              <span class=\"label label-default\">label</span>
              <span class=\"label label-primary\">Primary</span>
              <span class=\"label label-success\">Success</span>
              <span class=\"label label-info\">Info</span>
              <span class=\"label label-warning\">Warning</span>
              <span class=\"label label-danger\">Danger</span>
            </div>
            <!-- /showback -->
          </div>
          <!-- /col-lg-6 -->
        </div>
        <!--/ row -->
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    <!--footer start-->
    <footer class=\"site-footer\">
      <div class=\"text-center\">
        <p>
          &copy; Copyrights <strong>Dashio</strong>. All Rights Reserved
        </p>
        <div class=\"credits\">
          <!--
            You are NOT allowed to delete the credit link to TemplateMag with free version.
            You can delete the credit link only if you bought the pro version.
            Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/dashio-bootstrap-admin-template/
            Licensing information: https://templatemag.com/license/
          -->
          Created with Dashio template by <a href=\"https://templatemag.com/\">TemplateMag</a>
        </div>
        <a href=\"general.html#\" class=\"go-top\">
          <i class=\"fa fa-angle-up\"></i>
          </a>
      </div>
    </footer>
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src=\"lib/jquery/jquery.min.js\"></script>

  <script src=\"lib/bootstrap/js/bootstrap.min.js\"></script>
  <script class=\"include\" type=\"text/javascript\" src=\"lib/jquery.dcjqaccordion.2.7.js\"></script>
  <script src=\"lib/jquery.scrollTo.min.js\"></script>
  <script src=\"lib/jquery.nicescroll.js\" type=\"text/javascript\"></script>
  <!--common script for all pages-->
  <script src=\"lib/common-scripts.js\"></script>
  <!--script for this page-->
  <script type=\"text/javascript\" src=\"lib/gritter/js/jquery.gritter.js\"></script>
  <script type=\"text/javascript\" src=\"lib/gritter-conf.js\"></script>
</body>

</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "general.html";
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
  <link rel=\"stylesheet\" type=\"text/css\" href=\"lib/gritter/css/jquery.gritter.css\" />
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
                  <span class=\"photo\"><img alt=\"avatar\" src=\"img/ui-zac.jpg\"></span>
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
                  <span class=\"photo\"><img alt=\"avatar\" src=\"img/ui-divya.jpg\"></span>
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
                  <span class=\"photo\"><img alt=\"avatar\" src=\"img/ui-danro.jpg\"></span>
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
                  <span class=\"photo\"><img alt=\"avatar\" src=\"img/ui-sherman.jpg\"></span>
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
          <p class=\"centered\"><a href=\"profile.html\"><img src=\"img/ui-sam.jpg\" class=\"img-circle\" width=\"80\"></a></p>
          <h5 class=\"centered\">Sam Soffes</h5>
          <li class=\"mt\">
            <a href=\"index.html\">
              <i class=\"fa fa-dashboard\"></i>
              <span>Dashboard</span>
              </a>
          </li>
          <li class=\"sub-menu\">
            <a class=\"active\" href=\"javascript:;\">
              <i class=\"fa fa-desktop\"></i>
              <span>UI Elements</span>
              </a>
            <ul class=\"sub\">
              <li class=\"active\"><a href=\"general.html\">General</a></li>
              <li><a href=\"buttons.html\">Buttons</a></li>
              <li><a href=\"panels.html\">Panels</a></li>
              <li><a href=\"font_awesome.html\">Font Awesome</a></li>
            </ul>
          </li>
          <li class=\"sub-menu\">
            <a href=\"javascript:;\">
              <i class=\"fa fa-cogs\"></i>
              <span>Components</span>
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
              <span>Extra Pages</span>
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
              <span>Forms</span>
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
        <div class=\"row mt\">
          <div class=\"col-lg-6 col-md-6 col-sm-12\">
            <!--  BASIC PROGRESS BARS -->
            <div class=\"showback\">
              <h4><i class=\"fa fa-angle-right\"></i> Basic Progress Bars</h4>
              <div class=\"progress\">
                <div class=\"progress-bar progress-bar-success\" role=\"progressbar\" aria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 40%\">
                  <span class=\"sr-only\">40% Complete (success)</span>
                </div>
              </div>
              <div class=\"progress\">
                <div class=\"progress-bar progress-bar-info\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 20%\">
                  <span class=\"sr-only\">20% Complete</span>
                </div>
              </div>
              <div class=\"progress\">
                <div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 60%\">
                  <span class=\"sr-only\">60% Complete (warning)</span>
                </div>
              </div>
              <div class=\"progress\">
                <div class=\"progress-bar progress-bar-danger\" role=\"progressbar\" aria-valuenow=\"80\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 80%\">
                  <span class=\"sr-only\">80% Complete</span>
                </div>
              </div>
            </div>
            <!--/showback -->
            <!--  STRIPPED PROGRESS BARS -->
            <div class=\"showback\">
              <h4><i class=\"fa fa-angle-right\"></i> Stripped Progress Bars</h4>
              <div class=\"progress progress-striped\">
                <div class=\"progress-bar progress-bar-success\" role=\"progressbar\" aria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 40%\">
                  <span class=\"sr-only\">40% Complete (success)</span>
                </div>
              </div>
              <div class=\"progress progress-striped\">
                <div class=\"progress-bar progress-bar-info\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 20%\">
                  <span class=\"sr-only\">20% Complete</span>
                </div>
              </div>
              <div class=\"progress progress-striped\">
                <div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 60%\">
                  <span class=\"sr-only\">60% Complete (warning)</span>
                </div>
              </div>
              <div class=\"progress progress-striped\">
                <div class=\"progress-bar progress-bar-danger\" role=\"progressbar\" aria-valuenow=\"80\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 80%\">
                  <span class=\"sr-only\">80% Complete (danger)</span>
                </div>
              </div>
            </div>
            <!-- /showback -->
            <!--  ANIMATED PROGRESS BARS -->
            <div class=\"showback\">
              <h4><i class=\"fa fa-angle-right\"></i> Animated Progress Bars</h4>
              <div class=\"progress progress-striped active\">
                <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"45\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 45%\">
                  <span class=\"sr-only\">45% Complete</span>
                </div>
              </div>
            </div>
            <!-- /showback -->
            <!--  MODALS -->
            <div class=\"showback\">
              <h4><i class=\"fa fa-angle-right\"></i> Modal Example</h4>
              <!-- Button trigger modal -->
              <button class=\"btn btn-success btn-lg\" data-toggle=\"modal\" data-target=\"#myModal\">
                Launch Modal
                </button>
              <!-- Modal -->
              <div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                <div class=\"modal-dialog\">
                  <div class=\"modal-content\">
                    <div class=\"modal-header\">
                      <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                      <h4 class=\"modal-title\" id=\"myModalLabel\">Modal title</h4>
                    </div>
                    <div class=\"modal-body\">
                      Hi there, I am a Modal Example for Dashio Admin Panel.
                    </div>
                    <div class=\"modal-footer\">
                      <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
                      <button type=\"button\" class=\"btn btn-primary\">Save changes</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- /showback -->
            <!--  GRITTER NOTICES -->
            <div class=\"showback\">
              <h4><i class=\"fa fa-angle-right\"></i> Gritter Examples</h4>
              <p>Click on below buttons to check it out.</p>
              <a id=\"add-regular\" class=\"btn btn-default btn-sm\" href=\"javascript:;\">Regular</a>
              <a id=\"add-sticky\" class=\"btn btn-success  btn-sm\" href=\"javascript:;\">Sticky</a>
              <a id=\"add-without-image\" class=\"btn btn-info  btn-sm\" href=\"javascript:;\">Imageless</a>
              <a id=\"add-gritter-light\" class=\"btn btn-warning  btn-sm\" href=\"javascript:;\">Light</a>
              <a id=\"remove-all\" class=\"btn btn-danger  btn-sm\" href=\"general.html#\">Remove all</a>
            </div>
            <!-- /showback -->
          </div>
          <!-- /col-lg-6 -->
          <div class=\"col-lg-6 col-md-6 col-sm-12\">
            <!--  ALERTS EXAMPLES -->
            <div class=\"showback\">
              <h4><i class=\"fa fa-angle-right\"></i> Alerts Examples</h4>
              <div class=\"alert alert-success\"><b>Well done!</b> You successfully read this important alert message.</div>
              <div class=\"alert alert-info\"><b>Heads up!</b> This alert needs your attention, but it's not super important.</div>
              <div class=\"alert alert-warning\"><b>Warning!</b> Better check yourself, you're not looking too good.</div>
              <div class=\"alert alert-danger\"><b>Oh snap!</b> Change a few things up and try submitting again.</div>
            </div>
            <!-- /showback -->
            <!--  DISMISSABLE ALERT -->
            <div class=\"showback\">
              <h4><i class=\"fa fa-angle-right\"></i> Dismissable Alert</h4>
              <div class=\"alert alert-warning alert-dismissable\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
                <strong>Warning!</strong> Better check yourself, you're not looking too good.
              </div>
            </div>
            <!-- /showback -->
            <!--  BADGES -->
            <div class=\"showback\">
              <h4><i class=\"fa fa-angle-right\"></i> Badges</h4>
              <span class=\"badge\">5</span>
              <span class=\"badge bg-primary\">10</span>
              <span class=\"badge bg-success\">15</span>
              <span class=\"badge bg-info\">20</span>
              <span class=\"badge bg-inverse\">25</span>
              <span class=\"badge bg-warning\">30</span>
              <span class=\"badge bg-important\">35</span>
            </div>
            <!-- /showback -->
            <!--  LABELS -->
            <div class=\"showback\">
              <h4><i class=\"fa fa-angle-right\"></i> Labels</h4>
              <span class=\"label label-default\">label</span>
              <span class=\"label label-primary\">Primary</span>
              <span class=\"label label-success\">Success</span>
              <span class=\"label label-info\">Info</span>
              <span class=\"label label-warning\">Warning</span>
              <span class=\"label label-danger\">Danger</span>
            </div>
            <!-- /showback -->
          </div>
          <!-- /col-lg-6 -->
        </div>
        <!--/ row -->
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    <!--footer start-->
    <footer class=\"site-footer\">
      <div class=\"text-center\">
        <p>
          &copy; Copyrights <strong>Dashio</strong>. All Rights Reserved
        </p>
        <div class=\"credits\">
          <!--
            You are NOT allowed to delete the credit link to TemplateMag with free version.
            You can delete the credit link only if you bought the pro version.
            Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/dashio-bootstrap-admin-template/
            Licensing information: https://templatemag.com/license/
          -->
          Created with Dashio template by <a href=\"https://templatemag.com/\">TemplateMag</a>
        </div>
        <a href=\"general.html#\" class=\"go-top\">
          <i class=\"fa fa-angle-up\"></i>
          </a>
      </div>
    </footer>
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src=\"lib/jquery/jquery.min.js\"></script>

  <script src=\"lib/bootstrap/js/bootstrap.min.js\"></script>
  <script class=\"include\" type=\"text/javascript\" src=\"lib/jquery.dcjqaccordion.2.7.js\"></script>
  <script src=\"lib/jquery.scrollTo.min.js\"></script>
  <script src=\"lib/jquery.nicescroll.js\" type=\"text/javascript\"></script>
  <!--common script for all pages-->
  <script src=\"lib/common-scripts.js\"></script>
  <!--script for this page-->
  <script type=\"text/javascript\" src=\"lib/gritter/js/jquery.gritter.js\"></script>
  <script type=\"text/javascript\" src=\"lib/gritter-conf.js\"></script>
</body>

</html>
", "general.html", "C:\\wamp64\\www\\ProjetHitema\\templates\\general.html");
    }
}
