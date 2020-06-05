<?php

use Twig\Environment;
use Twig\Source;
use Twig\Template;

/* form_component.html */
class __TwigTemplate_36338185f2ee57be3e34f8a36acba13592ab00a97abfce52025323c1ae215b9e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "form_component.html"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "form_component.html"));

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
  <link rel=\"stylesheet\" type=\"text/css\" href=\"lib/bootstrap-datepicker/css/datepicker.css\" />
  <link rel=\"stylesheet\" type=\"text/css\" href=\"lib/bootstrap-daterangepicker/daterangepicker.css\" />
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
            <a href=\"javascript:;\">
              <i class=\"fa fa-desktop\"></i>
              <span>UI Elements</span>
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
            <a class=\"active\" href=\"javascript:;\">
              <i class=\"fa fa-tasks\"></i>
              <span>Forms</span>
              </a>
            <ul class=\"sub\">
              <li class=\"active\"><a href=\"form_component.html\">Form Components</a></li>
              <li><a href=\"advanced_form_components.html\">Advanced Components</a></li>
              <li><a href=\"form_validation.html\">Form Validation</a></li>
              <li><a href=\"contactform.html\">Contact Form</a></li>
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
        <h3><i class=\"fa fa-angle-right\"></i> Form Components</h3>
        <!-- BASIC FORM ELELEMNTS -->
        <div class=\"row mt\">
          <div class=\"col-lg-12\">
            <div class=\"form-panel\">
              <h4 class=\"mb\"><i class=\"fa fa-angle-right\"></i> Form Elements</h4>
              <form class=\"form-horizontal style-form\" method=\"get\">
                <div class=\"form-group\">
                  <label class=\"col-sm-2 col-sm-2 control-label\">Default</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" class=\"form-control\">
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 col-sm-2 control-label\">Help text</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" class=\"form-control\">
                    <span class=\"help-block\">A block of help text that breaks onto a new line and may extend beyond one line.</span>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 col-sm-2 control-label\">Rounder</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" class=\"form-control round-form\">
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 col-sm-2 control-label\">Input focus</label>
                  <div class=\"col-sm-10\">
                    <input class=\"form-control\" id=\"focusedInput\" type=\"text\" value=\"This is focused...\">
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 col-sm-2 control-label\">Disabled</label>
                  <div class=\"col-sm-10\">
                    <input class=\"form-control\" id=\"disabledInput\" type=\"text\" placeholder=\"Disabled input here...\" disabled>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 col-sm-2 control-label\">Placeholder</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"placeholder\">
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 col-sm-2 control-label\">Password</label>
                  <div class=\"col-sm-10\">
                    <input type=\"password\" class=\"form-control\" placeholder=\"\">
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-lg-2 col-sm-2 control-label\">Static control</label>
                  <div class=\"col-lg-10\">
                    <p class=\"form-control-static\">email@example.com</p>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <!-- col-lg-12-->
        </div>
        <!-- /row -->
        <!-- INLINE FORM ELELEMNTS -->
        <div class=\"row mt\">
          <div class=\"col-lg-12\">
            <div class=\"form-panel\">
              <h4 class=\"mb\"><i class=\"fa fa-angle-right\"></i> Inline Form</h4>
              <form class=\"form-inline\" role=\"form\">
                <div class=\"form-group\">
                  <label class=\"sr-only\" for=\"exampleInputEmail2\">Email address</label>
                  <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail2\" placeholder=\"Enter email\">
                </div>
                <div class=\"form-group\">
                  <label class=\"sr-only\" for=\"exampleInputPassword2\">Password</label>
                  <input type=\"password\" class=\"form-control\" id=\"exampleInputPassword2\" placeholder=\"Password\">
                </div>
                <button type=\"submit\" class=\"btn btn-theme\">Sign in</button>
              </form>
            </div>
            <!-- /form-panel -->
          </div>
          <!-- /col-lg-12 -->
        </div>
        <!-- /row -->
        <!-- INPUT MESSAGES -->
        <div class=\"row mt\">
          <div class=\"col-lg-12\">
            <div class=\"form-panel\">
              <h4 class=\"mb\"><i class=\"fa fa-angle-right\"></i> Input Messages</h4>
              <form class=\"form-horizontal tasi-form\" method=\"get\">
                <div class=\"form-group has-success\">
                  <label class=\"col-sm-2 control-label col-lg-2\" for=\"inputSuccess\">Input with success</label>
                  <div class=\"col-lg-10\">
                    <input type=\"text\" class=\"form-control\" id=\"inputSuccess\">
                  </div>
                </div>
                <div class=\"form-group has-warning\">
                  <label class=\"col-sm-2 control-label col-lg-2\" for=\"inputWarning\">Input with warning</label>
                  <div class=\"col-lg-10\">
                    <input type=\"text\" class=\"form-control\" id=\"inputWarning\">
                  </div>
                </div>
                <div class=\"form-group has-error\">
                  <label class=\"col-sm-2 control-label col-lg-2\" for=\"inputError\">Input with error</label>
                  <div class=\"col-lg-10\">
                    <input type=\"text\" class=\"form-control\" id=\"inputError\">
                  </div>
                </div>
              </form>
            </div>
            <!-- /form-panel -->
          </div>
          <!-- /col-lg-12 -->
        </div>
        <!-- /row -->
        <!-- INPUT MESSAGES -->
        <div class=\"row mt\">
          <div class=\"col-lg-12\">
            <div class=\"form-panel\">
              <h4 class=\"mb\"><i class=\"fa fa-angle-right\"></i> Checkboxes, Radios & Selects</h4>
              <div class=\"checkbox\">
                <label>
                  <input type=\"checkbox\" value=\"\">
                  Option one is this and that&mdash;be sure to include why it's great
                  </label>
              </div>
              <div class=\"radio\">
                <label>
                  <input type=\"radio\" name=\"optionsRadios\" id=\"optionsRadios1\" value=\"option1\" checked>
                  Option one is this and that&mdash;be sure to include why it's great
                  </label>
              </div>
              <div class=\"radio\">
                <label>
                  <input type=\"radio\" name=\"optionsRadios\" id=\"optionsRadios2\" value=\"option2\">
                  Option two can be something else and selecting it will deselect option one
                  </label>
              </div>
              <hr>
              <label class=\"checkbox-inline\">
                <input type=\"checkbox\" id=\"inlineCheckbox1\" value=\"option1\"> 1
                </label>
              <label class=\"checkbox-inline\">
                <input type=\"checkbox\" id=\"inlineCheckbox2\" value=\"option2\"> 2
                </label>
              <label class=\"checkbox-inline\">
                <input type=\"checkbox\" id=\"inlineCheckbox3\" value=\"option3\"> 3
                </label>
              <hr>
              <select class=\"form-control\">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
              <br>
              <select multiple class=\"form-control\">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
            </div>
            <!-- /form-panel -->
          </div>
          <!-- /col-lg-12 -->
          <!-- CUSTOM TOGGLES -->
          <div class=\"col-lg-12\">
            <div class=\"form-panel\">
              <h4 class=\"mb\"><i class=\"fa fa-angle-right\"></i> Custom Toggles</h4>
              <div class=\"row mt\">
                <div class=\"col-sm-6 text-center\">
                  <input type=\"checkbox\" checked=\"\" data-toggle=\"switch\" />
                </div>
                <div class=\"col-sm-6 text-center\">
                  <input type=\"checkbox\" data-toggle=\"switch\" />
                </div>
              </div>
              <div class=\"row mt\">
                <div class=\"col-sm-6 text-center\">
                  <div class=\"switch switch-square\" data-on-label=\"<i class=' fa fa-check'></i>\" data-off-label=\"<i class='fa fa-times'></i>\">
                    <input type=\"checkbox\" />
                  </div>
                </div>
                <div class=\"col-sm-6 text-center\">
                  <div class=\"switch switch-square\" data-on-label=\"<i class=' fa fa-check'></i>\" data-off-label=\"<i class='fa fa-times'></i>\">
                    <input type=\"checkbox\" checked=\"\" />
                  </div>
                </div>
              </div>
              <div class=\"row mt\">
                <div class=\"col-sm-6 text-center\">
                  <input type=\"checkbox\" disabled data-toggle=\"switch\" />
                </div>
                <div class=\"col-sm-6 text-center\">
                  <input type=\"checkbox\" checked disabled data-toggle=\"switch\" />
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /row -->
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
        <a href=\"form_component.html#\" class=\"go-top\">
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
  <script src=\"lib/jquery-ui-1.9.2.custom.min.js\"></script>
  <!--custom switch-->
  <script src=\"lib/bootstrap-switch.js\"></script>
  <!--custom tagsinput-->
  <script src=\"lib/jquery.tagsinput.js\"></script>
  <!--custom checkbox & radio-->
  <script type=\"text/javascript\" src=\"lib/bootstrap-datepicker/js/bootstrap-datepicker.js\"></script>
  <script type=\"text/javascript\" src=\"lib/bootstrap-daterangepicker/date.js\"></script>
  <script type=\"text/javascript\" src=\"lib/bootstrap-daterangepicker/daterangepicker.js\"></script>
  <script type=\"text/javascript\" src=\"lib/bootstrap-inputmask/bootstrap-inputmask.min.js\"></script>
  <script src=\"lib/form-component.js\"></script>

</body>

</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "form_component.html";
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
  <link rel=\"stylesheet\" type=\"text/css\" href=\"lib/bootstrap-datepicker/css/datepicker.css\" />
  <link rel=\"stylesheet\" type=\"text/css\" href=\"lib/bootstrap-daterangepicker/daterangepicker.css\" />
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
            <a href=\"javascript:;\">
              <i class=\"fa fa-desktop\"></i>
              <span>UI Elements</span>
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
            <a class=\"active\" href=\"javascript:;\">
              <i class=\"fa fa-tasks\"></i>
              <span>Forms</span>
              </a>
            <ul class=\"sub\">
              <li class=\"active\"><a href=\"form_component.html\">Form Components</a></li>
              <li><a href=\"advanced_form_components.html\">Advanced Components</a></li>
              <li><a href=\"form_validation.html\">Form Validation</a></li>
              <li><a href=\"contactform.html\">Contact Form</a></li>
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
        <h3><i class=\"fa fa-angle-right\"></i> Form Components</h3>
        <!-- BASIC FORM ELELEMNTS -->
        <div class=\"row mt\">
          <div class=\"col-lg-12\">
            <div class=\"form-panel\">
              <h4 class=\"mb\"><i class=\"fa fa-angle-right\"></i> Form Elements</h4>
              <form class=\"form-horizontal style-form\" method=\"get\">
                <div class=\"form-group\">
                  <label class=\"col-sm-2 col-sm-2 control-label\">Default</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" class=\"form-control\">
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 col-sm-2 control-label\">Help text</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" class=\"form-control\">
                    <span class=\"help-block\">A block of help text that breaks onto a new line and may extend beyond one line.</span>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 col-sm-2 control-label\">Rounder</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" class=\"form-control round-form\">
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 col-sm-2 control-label\">Input focus</label>
                  <div class=\"col-sm-10\">
                    <input class=\"form-control\" id=\"focusedInput\" type=\"text\" value=\"This is focused...\">
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 col-sm-2 control-label\">Disabled</label>
                  <div class=\"col-sm-10\">
                    <input class=\"form-control\" id=\"disabledInput\" type=\"text\" placeholder=\"Disabled input here...\" disabled>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 col-sm-2 control-label\">Placeholder</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"placeholder\">
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 col-sm-2 control-label\">Password</label>
                  <div class=\"col-sm-10\">
                    <input type=\"password\" class=\"form-control\" placeholder=\"\">
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-lg-2 col-sm-2 control-label\">Static control</label>
                  <div class=\"col-lg-10\">
                    <p class=\"form-control-static\">email@example.com</p>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <!-- col-lg-12-->
        </div>
        <!-- /row -->
        <!-- INLINE FORM ELELEMNTS -->
        <div class=\"row mt\">
          <div class=\"col-lg-12\">
            <div class=\"form-panel\">
              <h4 class=\"mb\"><i class=\"fa fa-angle-right\"></i> Inline Form</h4>
              <form class=\"form-inline\" role=\"form\">
                <div class=\"form-group\">
                  <label class=\"sr-only\" for=\"exampleInputEmail2\">Email address</label>
                  <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail2\" placeholder=\"Enter email\">
                </div>
                <div class=\"form-group\">
                  <label class=\"sr-only\" for=\"exampleInputPassword2\">Password</label>
                  <input type=\"password\" class=\"form-control\" id=\"exampleInputPassword2\" placeholder=\"Password\">
                </div>
                <button type=\"submit\" class=\"btn btn-theme\">Sign in</button>
              </form>
            </div>
            <!-- /form-panel -->
          </div>
          <!-- /col-lg-12 -->
        </div>
        <!-- /row -->
        <!-- INPUT MESSAGES -->
        <div class=\"row mt\">
          <div class=\"col-lg-12\">
            <div class=\"form-panel\">
              <h4 class=\"mb\"><i class=\"fa fa-angle-right\"></i> Input Messages</h4>
              <form class=\"form-horizontal tasi-form\" method=\"get\">
                <div class=\"form-group has-success\">
                  <label class=\"col-sm-2 control-label col-lg-2\" for=\"inputSuccess\">Input with success</label>
                  <div class=\"col-lg-10\">
                    <input type=\"text\" class=\"form-control\" id=\"inputSuccess\">
                  </div>
                </div>
                <div class=\"form-group has-warning\">
                  <label class=\"col-sm-2 control-label col-lg-2\" for=\"inputWarning\">Input with warning</label>
                  <div class=\"col-lg-10\">
                    <input type=\"text\" class=\"form-control\" id=\"inputWarning\">
                  </div>
                </div>
                <div class=\"form-group has-error\">
                  <label class=\"col-sm-2 control-label col-lg-2\" for=\"inputError\">Input with error</label>
                  <div class=\"col-lg-10\">
                    <input type=\"text\" class=\"form-control\" id=\"inputError\">
                  </div>
                </div>
              </form>
            </div>
            <!-- /form-panel -->
          </div>
          <!-- /col-lg-12 -->
        </div>
        <!-- /row -->
        <!-- INPUT MESSAGES -->
        <div class=\"row mt\">
          <div class=\"col-lg-12\">
            <div class=\"form-panel\">
              <h4 class=\"mb\"><i class=\"fa fa-angle-right\"></i> Checkboxes, Radios & Selects</h4>
              <div class=\"checkbox\">
                <label>
                  <input type=\"checkbox\" value=\"\">
                  Option one is this and that&mdash;be sure to include why it's great
                  </label>
              </div>
              <div class=\"radio\">
                <label>
                  <input type=\"radio\" name=\"optionsRadios\" id=\"optionsRadios1\" value=\"option1\" checked>
                  Option one is this and that&mdash;be sure to include why it's great
                  </label>
              </div>
              <div class=\"radio\">
                <label>
                  <input type=\"radio\" name=\"optionsRadios\" id=\"optionsRadios2\" value=\"option2\">
                  Option two can be something else and selecting it will deselect option one
                  </label>
              </div>
              <hr>
              <label class=\"checkbox-inline\">
                <input type=\"checkbox\" id=\"inlineCheckbox1\" value=\"option1\"> 1
                </label>
              <label class=\"checkbox-inline\">
                <input type=\"checkbox\" id=\"inlineCheckbox2\" value=\"option2\"> 2
                </label>
              <label class=\"checkbox-inline\">
                <input type=\"checkbox\" id=\"inlineCheckbox3\" value=\"option3\"> 3
                </label>
              <hr>
              <select class=\"form-control\">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
              <br>
              <select multiple class=\"form-control\">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
            </div>
            <!-- /form-panel -->
          </div>
          <!-- /col-lg-12 -->
          <!-- CUSTOM TOGGLES -->
          <div class=\"col-lg-12\">
            <div class=\"form-panel\">
              <h4 class=\"mb\"><i class=\"fa fa-angle-right\"></i> Custom Toggles</h4>
              <div class=\"row mt\">
                <div class=\"col-sm-6 text-center\">
                  <input type=\"checkbox\" checked=\"\" data-toggle=\"switch\" />
                </div>
                <div class=\"col-sm-6 text-center\">
                  <input type=\"checkbox\" data-toggle=\"switch\" />
                </div>
              </div>
              <div class=\"row mt\">
                <div class=\"col-sm-6 text-center\">
                  <div class=\"switch switch-square\" data-on-label=\"<i class=' fa fa-check'></i>\" data-off-label=\"<i class='fa fa-times'></i>\">
                    <input type=\"checkbox\" />
                  </div>
                </div>
                <div class=\"col-sm-6 text-center\">
                  <div class=\"switch switch-square\" data-on-label=\"<i class=' fa fa-check'></i>\" data-off-label=\"<i class='fa fa-times'></i>\">
                    <input type=\"checkbox\" checked=\"\" />
                  </div>
                </div>
              </div>
              <div class=\"row mt\">
                <div class=\"col-sm-6 text-center\">
                  <input type=\"checkbox\" disabled data-toggle=\"switch\" />
                </div>
                <div class=\"col-sm-6 text-center\">
                  <input type=\"checkbox\" checked disabled data-toggle=\"switch\" />
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /row -->
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
        <a href=\"form_component.html#\" class=\"go-top\">
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
  <script src=\"lib/jquery-ui-1.9.2.custom.min.js\"></script>
  <!--custom switch-->
  <script src=\"lib/bootstrap-switch.js\"></script>
  <!--custom tagsinput-->
  <script src=\"lib/jquery.tagsinput.js\"></script>
  <!--custom checkbox & radio-->
  <script type=\"text/javascript\" src=\"lib/bootstrap-datepicker/js/bootstrap-datepicker.js\"></script>
  <script type=\"text/javascript\" src=\"lib/bootstrap-daterangepicker/date.js\"></script>
  <script type=\"text/javascript\" src=\"lib/bootstrap-daterangepicker/daterangepicker.js\"></script>
  <script type=\"text/javascript\" src=\"lib/bootstrap-inputmask/bootstrap-inputmask.min.js\"></script>
  <script src=\"lib/form-component.js\"></script>

</body>

</html>
", "form_component.html", "C:\\wamp\\www\\ProjetHitema\\templates\\form_component.html");
    }
}
