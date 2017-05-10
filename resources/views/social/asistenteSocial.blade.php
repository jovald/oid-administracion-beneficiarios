<!DOCTYPE html>
<!--
  Name: Flatty - Flat Administration Template
  Website: https://wrapbootstrap.com/theme/flatty-flat-administration-template-WB0P6NR1N?ref=metheus
  Version: 2.4.1
-->
<html lang='en'>
  <head>
    <title>Wizard | Flatty - Flat Administration Template</title>
    <meta content='admin template, administration template, bootstrap icons, bootstrap template, dashboard, flat design, flat template, bootstrap flat' name='keywords'>
    <meta content='Flat administration template for Twitter Bootstrap. Twitter Bootstrap 3 template with Ruby on Rails support.' name='description'>
    <meta content='BublinaStudio.com' name='author'>
    <meta content='all' name='robots'>
    <meta content='text/html; charset=utf-8' http-equiv='Content-Type'>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!--[if IE]> <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'> <![endif]-->
    <link href='assets/images/meta_icons/favicon.ico' rel='shortcut icon' type='image/x-icon'>
    <link href='assets/images/meta_icons/apple-touch-icon-precomposed.png' rel='apple-touch-icon-precomposed'>
    <!-- / START - page related stylesheets [optional] -->
    <link href="assets/stylesheets/plugins/fuelux/wizard.css" rel="stylesheet" type="text/css" media="all" />
    <!-- / END - page related stylesheets [optional] -->
    <!-- / bootstrap [required] -->
    <link href="assets/stylesheets/bootstrap/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <!-- / theme file [required] -->
    <link href="assets/stylesheets/light-theme.css" rel="stylesheet" type="text/css" media="all" id="color-settings-body-color" />
    <!-- / coloring file [optional] (if you are going to use custom contrast color) -->
    <link href="assets/stylesheets/theme-colors.css" rel="stylesheet" type="text/css" media="all" />
  </head>
  <body class='contrast-red '>
    <header>
      <nav class='navbar navbar-default'>
        <a class='navbar-brand' href='index.html'>
          <img width="81" height="21" class="logo" alt="Flatty" src="assets/images/logo.svg" />
          <img width="21" height="21" class="logo-xs" alt="Flatty" src="assets/images/logo_xs.svg" />
        </a>
        <a class='toggle-nav btn pull-left' href='#'>
          <i class='fa fa-bars'></i>
        </a>
        <ul class='nav'>
          <li class='dropdown medium only-icon widget'>
            <a class='dropdown-toggle' data-toggle='dropdown' href='#'>
              <i class='fa fa-rss'></i>
              <div class='label'>5</div>
            </a>
            <ul class='dropdown-menu'>
              <li>
                <a href='#'>
                  <div class='widget-body'>
                    <div class='pull-left icon'>
                      <i class='fa fa-user text-success'></i>
                    </div>
                    <div class='pull-left text'>
                      John Doe signed up
                      <small class='text-muted'>just now</small>
                    </div>
                  </div>
                </a>
              </li>
              <li class='divider'></li>
              <li>
                <a href='#'>
                  <div class='widget-body'>
                    <div class='pull-left icon'>
                      <i class='fa fa-inbox text-error'></i>
                    </div>
                    <div class='pull-left text'>
                      New Order #002
                      <small class='text-muted'>3 minutes ago</small>
                    </div>
                  </div>
                </a>
              </li>
              <li class='divider'></li>
              <li>
                <a href='#'>
                  <div class='widget-body'>
                    <div class='pull-left icon'>
                      <i class='fa fa-comment text-warning'></i>
                    </div>
                    <div class='pull-left text'>
                      America Leannon commented Flatty with veeery long text.
                      <small class='text-muted'>1 hour ago</small>
                    </div>
                  </div>
                </a>
              </li>
              <li class='divider'></li>
              <li>
                <a href='#'>
                  <div class='widget-body'>
                    <div class='pull-left icon'>
                      <i class='fa fa-user text-success'></i>
                    </div>
                    <div class='pull-left text'>
                      Jane Doe signed up
                      <small class='text-muted'>last week</small>
                    </div>
                  </div>
                </a>
              </li>
              <li class='divider'></li>
              <li>
                <a href='#'>
                  <div class='widget-body'>
                    <div class='pull-left icon'>
                      <i class='fa fa-inbox text-error'></i>
                    </div>
                    <div class='pull-left text'>
                      New Order #001
                      <small class='text-muted'>1 year ago</small>
                    </div>
                  </div>
                </a>
              </li>
              <li class='widget-footer'>
                <a href='#'>All notifications</a>
              </li>
            </ul>
          </li>
          <li class='dropdown dark user-menu'>
            <a class='dropdown-toggle' data-toggle='dropdown' href='#'>
              <img width="23" height="23" alt="Mila Kunis" src="assets/images/avatar.jpg" />
              <span class='user-name'>Mila Kunis</span>
              <b class='caret'></b>
            </a>
            <ul class='dropdown-menu'>
              <li>
                <a href='user_profile.html'>
                  <i class='fa fa-user'></i>
                  Profile
                </a>
              </li>
              <li>
                <a href='user_profile.html'>
                  <i class='fa fa-cog'></i>
                  Settings
                </a>
              </li>
              <li class='divider'></li>
              <li>
                <a href='sign_in.html'>
                  <i class='fa fa-sign-out'></i>
                  Sign out
                </a>
              </li>
            </ul>
          </li>
        </ul>
        <form action='search_results.html' class='navbar-form navbar-right hidden-xs' method='get'>
          <button class='btn btn-link fa fa-search' name='button' type='submit'></button>
          <div class='form-group'>
            <input type="text" name="q" value="" class="form-control" placeholder="Search..." autocomplete="off" id="q_header" />
          </div>
        </form>
      </nav>
    </header>
    <div id='wrapper'>
      <div id='main-nav-bg'></div>
      <nav id='main-nav'>
        <div class='navigation'>
          <div class='search'>
            <form action='search_results.html' method='get'>
              <div class='search-wrapper'>
                <input type="text" name="q" value="" class="search-query form-control" placeholder="Search..." autocomplete="off" />
                <button class='btn btn-link fa fa-search' name='button' type='submit'></button>
              </div>
            </form>
          </div>
          <ul class='nav nav-stacked'>
            <li class=''>
              <a href='index.html'>
                <i class='fa fa-tachometer'></i>
                <span>Dashboard</span>
              </a>
            </li>
            <li class='active'>
              <a class="dropdown-collapse" href="#"><i class='fa fa-pencil-square-o'></i>
              <span>Forms</span>
              <i class='fa fa-angle-down angle-down'></i>
              </a>
              <ul class='in nav nav-stacked'>
                <li class=''>
                  <a href='form_styles.html'>
                    <div class='icon'>
                      <i class='fa fa-caret-right'></i>
                    </div>
                    <span>Form styles and features</span>
                  </a>
                </li>
                <li class=''>
                  <a href='form_components.html'>
                    <div class='icon'>
                      <i class='fa fa-caret-right'></i>
                    </div>
                    <span>Form components</span>
                  </a>
                </li>
                <li class=''>
                  <a href='validations.html'>
                    <div class='icon'>
                      <i class='fa fa-caret-right'></i>
                    </div>
                    <span>Validations</span>
                  </a>
                </li>
                <li class='active'>
                  <a href='wizard.html'>
                    <div class='icon'>
                      <i class='fa fa-caret-right'></i>
                    </div>
                    <span>Wizard</span>
                  </a>
                </li>
              </ul>
            </li>
            <li>
              <a class='dropdown-collapse ' href='#'>
                <i class='fa fa-tint'></i>
                <span>UI Elements & Widgets</span>
                <i class='fa fa-angle-down angle-down'></i>
              </a>
              <ul class='nav nav-stacked'>
                <li class=''>
                  <a href='ui_elements.html'>
                    <div class='icon'>
                      <i class='fa fa-caret-right'></i>
                    </div>
                    <span>UI Elements</span>
                  </a>
                </li>
                <li class=''>
                  <a href='widgets.html'>
                    <div class='icon'>
                      <i class='fa fa-caret-right'></i>
                    </div>
                    <span>Widgets</span>
                  </a>
                </li>
              </ul>
            </li>
            <li class=''>
              <a href='buttons_and_icons.html'>
                <i class='fa fa-star'></i>
                <span>Buttons & Icons</span>
              </a>
            </li>
            <li>
              <a class='dropdown-collapse ' href='#'>
                <i class='fa fa-cogs'></i>
                <span>Components</span>
                <i class='fa fa-angle-down angle-down'></i>
              </a>
              <ul class='nav nav-stacked'>
                <li class=''>
                  <a href='charts.html'>
                    <div class='icon'>
                      <i class='fa fa-bar-chart-o'></i>
                    </div>
                    <span>Charts</span>
                  </a>
                </li>
                <li class=''>
                  <a href='address_book.html'>
                    <div class='icon'>
                      <i class='fa fa-envelope'></i>
                    </div>
                    <span>Address book</span>
                  </a>
                </li>
                <li class=''>
                  <a href='chats.html'>
                    <div class='icon'>
                      <i class='fa fa-comments'></i>
                    </div>
                    <span>Chats</span>
                  </a>
                </li>
                <li class=''>
                  <a href='filetrees.html'>
                    <div class='icon'>
                      <i class='fa fa-list-ul'></i>
                    </div>
                    <span>File trees</span>
                  </a>
                </li>
                <li class=''>
                  <a href='fileupload.html'>
                    <div class='icon'>
                      <i class='fa fa-file'></i>
                    </div>
                    <span>Fileupload</span>
                  </a>
                </li>
                <li class=''>
                  <a href='todo.html'>
                    <div class='icon'>
                      <i class='fa fa-list-alt'></i>
                    </div>
                    <span>Todo list</span>
                  </a>
                </li>
                <li class=''>
                  <a href='wysiwyg.html'>
                    <div class='icon'>
                      <i class='fa fa-clipboard'></i>
                    </div>
                    <span>WYSIWYG</span>
                  </a>
                </li>
              </ul>
            </li>
            <li class=''>
              <a href='tables.html'>
                <i class='fa fa-table'></i>
                <span>Tables</span>
              </a>
            </li>
            <li class=''>
              <a href='grid.html'>
                <i class='fa fa-th'></i>
                <span>Grid</span>
              </a>
            </li>
            <li class=''>
              <a href='type.html'>
                <i class='fa fa-font'></i>
                <span>Typography</span>
              </a>
            </li>
            <li class=''>
              <a href='calendar.html'>
                <i class='fa fa-calendar'></i>
                <span>Calendar</span>
              </a>
            </li>
            <li>
              <a class='dropdown-collapse ' href='#'>
                <i class='fa fa-book'></i>
                <span>Example pages</span>
                <i class='fa fa-angle-down angle-down'></i>
              </a>
              <ul class='nav nav-stacked'>
                <li class=''>
                  <a href='invoice.html'>
                    <div class='icon'>
                      <i class='fa fa-money'></i>
                    </div>
                    <span>Invoice</span>
                  </a>
                </li>
                <li class=''>
                  <a href='gallery.html'>
                    <div class='icon'>
                      <i class='fa fa-picture-o'></i>
                    </div>
                    <span>Gallery</span>
                  </a>
                </li>
                <li class=''>
                  <a href='timeline.html'>
                    <div class='icon'>
                      <i class='fa fa-clock-o'></i>
                    </div>
                    <span>Timeline</span>
                  </a>
                </li>
                <li class=''>
                  <a href='pricing_tables.html'>
                    <div class='icon'>
                      <i class='fa fa-table'></i>
                    </div>
                    <span>Pricing tables</span>
                  </a>
                </li>
                <li class=''>
                  <a href='user_profile.html'>
                    <div class='icon'>
                      <i class='fa fa-user'></i>
                    </div>
                    <span>User profile</span>
                  </a>
                </li>
                <li class=''>
                  <a href='err404.html' target='_blank'>
                    <div class='icon'>
                      <i class='fa fa-question-circle'></i>
                    </div>
                    <span>404 Error</span>
                  </a>
                </li>
                <li class=''>
                  <a href='err500.html' target='_blank'>
                    <div class='icon'>
                      <i class='fa fa-cogs'></i>
                    </div>
                    <span>500 Error</span>
                  </a>
                </li>
                <li class=''>
                  <a href='sign_in.html' target='_blank'>
                    <div class='icon'>
                      <i class='fa fa-sign-in'></i>
                    </div>
                    <span>Sign in</span>
                  </a>
                </li>
                <li class=''>
                  <a href='faq.html'>
                    <div class='icon'>
                      <i class='fa fa-bullhorn'></i>
                    </div>
                    <span>FAQ</span>
                  </a>
                </li>
                <li class=''>
                  <a href='orders.html'>
                    <div class='icon'>
                      <i class='fa fa-inbox'></i>
                    </div>
                    <span>Orders</span>
                  </a>
                </li>
                <li class=''>
                  <a href='search_results.html'>
                    <div class='icon'>
                      <i class='fa fa-search'></i>
                    </div>
                    <span>Search results</span>
                  </a>
                </li>
                <li class=''>
                  <a href='blank.html'>
                    <div class='icon'>
                      <i class='fa fa-circle-o'></i>
                    </div>
                    <span>Blank page</span>
                  </a>
                </li>
              </ul>
            </li>
            <li>
              <a class='dropdown-collapse ' href='#'>
                <i class='fa fa-cog'></i>
                <span>Layouts</span>
                <i class='fa fa-angle-down angle-down'></i>
              </a>
              <ul class='nav nav-stacked'>
                <li class=''>
                  <a href='closed_navigation.html'>
                    <div class='icon'>
                      <i class='fa fa-caret-right'></i>
                    </div>
                    <span>Closed navigation</span>
                  </a>
                </li>
                <li class=''>
                  <a href='fixed_header.html'>
                    <div class='icon'>
                      <i class='fa fa-caret-right'></i>
                    </div>
                    <span>Fixed header</span>
                  </a>
                </li>
                <li class=''>
                  <a href='fixed_navigation.html'>
                    <div class='icon'>
                      <i class='fa fa-caret-right'></i>
                    </div>
                    <span>Fixed navigation</span>
                  </a>
                </li>
                <li class=''>
                  <a href='fixed_navigation_and_header.html'>
                    <div class='icon'>
                      <i class='fa fa-caret-right'></i>
                    </div>
                    <span>Fixed navigation & header</span>
                  </a>
                </li>
              </ul>
            </li>
            <li class=''>
              <a href='email_templates.html'>
                <i class='fa fa-mail-reply'></i>
                <span>Email templates</span>
              </a>
            </li>
            <li>
              <a class='dropdown-collapse' href='#'>
                <i class='fa fa-folder-open-o'></i>
                <span>Four level dropdown</span>
                <i class='fa fa-angle-down angle-down'></i>
              </a>
              <ul class='nav nav-stacked'>
                <li>
                  <a class='dropdown-collapse' href='#'>
                    <div class='icon'>
                      <i class='fa fa-caret-right'></i>
                    </div>
                    <span>Second level</span>
                    <i class='fa fa-angle-down angle-down'></i>
                  </a>
                  <ul class='nav nav-stacked'>
                    <li>
                      <a class='dropdown-collapse' href='#'>
                        <div class='icon'>
                          <i class='fa fa-caret-right'></i>
                        </div>
                        <span>Third level</span>
                        <i class='fa fa-angle-down angle-down'></i>
                      </a>
                      <ul class='nav nav-stacked'>
                        <li>
                          <a href='#'>
                            <div class='icon'>
                              <i class='fa fa-caret-right'></i>
                            </div>
                            <span>Fourth level</span>
                          </a>
                        </li>
                        <li>
                          <a href='#'>
                            <div class='icon'>
                              <i class='fa fa-caret-right'></i>
                            </div>
                            <span>Another fourth level</span>
                          </a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>
      <section id='content'>
        <div class='container'>
          <div class='row' id='content-wrapper'>
            <div class='col-xs-12'>
              <div class='row'>
                <div class='col-sm-12'>
                  <div class='page-header'>
                    <h1 class='pull-left'>
                      <i class='fa fa-pencil-square-o'></i>
                      <span>Wizard</span>
                    </h1>
                    <div class='pull-right'>
                      <ul class='breadcrumb'>
                        <li>
                          <a href='index.html'>
                            <i class='fa fa-bar-chart-o'></i>
                          </a>
                        </li>
                        <li class='separator'>
                          <i class='fa fa-angle-right'></i>
                        </li>
                        <li>
                          Forms
                        </li>
                        <li class='separator'>
                          <i class='fa fa-angle-right'></i>
                        </li>
                        <li class='active'>Wizard</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class='row'>
                <div class='col-sm-12'>
                  <div class='box'>
                    <div class='box-content box-padding'>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <footer id='footer'>
            <div class='footer-wrapper'>
              <div class='row'>
                <div class='col-sm-6 text'>
                  Copyright © 2016 Your Project Name
                </div>
                <div class='col-sm-6 buttons'>
                  <a class="btn btn-link" href="http://flatty-v2-4-1.bublinastudio.com/">Preview</a>
                  <a class="btn btn-link" href="https://wrapbootstrap.com/theme/flatty-flat-administration-template-WB0P6NR1N?ref=metheus">Purchase</a>
                </div>
              </div>
            </div>
          </footer>
        </div>
      </section>
    </div>
    <!-- / jquery [required] -->
    <script src="assets/javascripts/jquery/jquery.min.js" type="text/javascript"></script>
    <!-- / jquery mobile (for touch events) -->
    <script src="assets/javascripts/jquery/jquery.mobile.custom.min.js" type="text/javascript"></script>
    <!-- / jquery ui -->
    <script src="assets/javascripts/jquery/jquery-ui.min.js" type="text/javascript"></script>
    <!-- / jQuery UI Touch Punch -->
    <script src="assets/javascripts/jquery/jquery.ui.touch-punch.min.js" type="text/javascript"></script>
    <!-- / bootstrap [required] -->
    <script src="assets/javascripts/bootstrap/bootstrap.js" type="text/javascript"></script>
    <!-- / modernizr -->
    <script src="assets/javascripts/plugins/modernizr/modernizr.min.js" type="text/javascript"></script>
    <!-- / retina -->
    <script src="assets/javascripts/plugins/retina/retina.js" type="text/javascript"></script>
    <!-- / theme file [required] -->
    <script src="assets/javascripts/theme.js" type="text/javascript"></script>
    <!-- / START - page related files and scripts [optional] -->
    <script src="assets/javascripts/plugins/fuelux/wizard.js" type="text/javascript"></script>
    <!-- / END - page related files and scripts [optional] -->
  </body>
</html>