<!DOCTYPE html>
<html>
  
<head>
    <title>
      se7en - Dashboard
    </title>
    <link href="<?= base_url();?>berkas/stylesheets/css.css" media="all" rel="stylesheet" type="text/css" />
	<link href="<?= base_url();?>berkas/stylesheets/bootstrap.min.css" media="all" rel="stylesheet" type="text/css" />
	<link href="<?= base_url();?>berkas/stylesheets/font-awesome.min.css" media="all" rel="stylesheet" type="text/css" />
	<link href="<?= base_url();?>berkas/stylesheets/se7en-font.css" media="all" rel="stylesheet" type="text/css" />
	<link href="<?= base_url();?>berkas/stylesheets/isotope.css" media="all" rel="stylesheet" type="text/css" />
	<link href="<?= base_url();?>berkas/stylesheets/jquery.fancybox.css" media="all" rel="stylesheet" type="text/css" />
	<link href="<?= base_url();?>berkas/stylesheets/fullcalendar.css" media="all" rel="stylesheet" type="text/css" />
	<link href="<?= base_url();?>berkas/stylesheets/wizard.css" media="all" rel="stylesheet" type="text/css" />
	<link href="<?= base_url();?>berkas/stylesheets/select2.css" media="all" rel="stylesheet" type="text/css" />
	<link href="<?= base_url();?>berkas/stylesheets/morris.css" media="all" rel="stylesheet" type="text/css" />
	<link href="<?= base_url();?>berkas/stylesheets/datatables.css" media="all" rel="stylesheet" type="text/css" />
	<link href="<?= base_url();?>berkas/stylesheets/datepicker.css" media="all" rel="stylesheet" type="text/css" />
	<link href="<?= base_url();?>berkas/stylesheets/timepicker.css" media="all" rel="stylesheet" type="text/css" />
	<link href="<?= base_url();?>berkas/stylesheets/colorpicker.css" media="all" rel="stylesheet" type="text/css" />
	<link href="<?= base_url();?>berkas/stylesheets/bootstrap-switch.css" media="all" rel="stylesheet" type="text/css" />
	<link href="<?= base_url();?>berkas/stylesheets/bootstrap-editable.css" media="all" rel="stylesheet" type="text/css" />
	<link href="<?= base_url();?>berkas/stylesheets/daterange-picker.css" media="all" rel="stylesheet" type="text/css" />
	<link href="<?= base_url();?>berkas/stylesheets/typeahead.css" media="all" rel="stylesheet" type="text/css" />
	<link href="<?= base_url();?>berkas/stylesheets/summernote.css" media="all" rel="stylesheet" type="text/css" />
	<link href="<?= base_url();?>berkas/stylesheets/ladda-themeless.min.css" media="all" rel="stylesheet" type="text/css" />
	<link href="<?= base_url();?>berkas/stylesheets/social-buttons.css" media="all" rel="stylesheet" type="text/css" />
	<link href="<?= base_url();?>berkas/stylesheets/pygments.css" media="all" rel="stylesheet" type="text/css" />
	<link href="<?= base_url();?>berkas/stylesheets/style.css" media="all" rel="stylesheet" type="text/css" />
	<link href="<?= base_url();?>berkas/stylesheets/color/green.css" media="all" rel="alternate stylesheet" title="green-theme" type="text/css" />
	<link href="<?= base_url();?>berkas/stylesheets/color/orange.css" media="all" rel="alternate stylesheet" title="orange-theme" type="text/css" />
	<link href="<?= base_url();?>berkas/stylesheets/color/magenta.css" media="all" rel="alternate stylesheet" title="magenta-theme" type="text/css" />
	<link href="<?= base_url();?>berkas/stylesheets/color/gray.css" media="all" rel="alternate stylesheet" title="gray-theme" type="text/css" />
	<link href="<?= base_url();?>berkas/stylesheets/jquery.fileupload-ui.css" media="screen" rel="stylesheet" type="text/css" />
	<link href="<?= base_url();?>berkas/stylesheets/dropzone.css" media="screen" rel="stylesheet" type="text/css" />
	<script src="<?= base_url();?>berkas/javascripts/jquery-1.10.2.min.js" type="text/javascript"></script>
	<script src="<?= base_url();?>berkas/javascripts/ui/1.10.3/jquery-ui.js" type="text/javascript"></script>
	<script src="<?= base_url();?>berkas/javascripts/bootstrap.min.js" type="text/javascript"></script>
	<script src="<?= base_url();?>berkas/javascripts/raphael.min.js" type="text/javascript"></script>
	<script src="<?= base_url();?>berkas/javascripts/selectivizr-min.js" type="text/javascript"></script>
	<script src="<?= base_url();?>berkas/javascripts/jquery.mousewheel.js" type="text/javascript"></script>
	<script src="<?= base_url();?>berkas/javascripts/jquery.vmap.min.js" type="text/javascript"></script>
	<script src="<?= base_url();?>berkas/javascripts/jquery.vmap.sampledata.js" type="text/javascript"></script>
	<script src="<?= base_url();?>berkas/javascripts/jquery.vmap.world.js" type="text/javascript"></script>
	<script src="<?= base_url();?>berkas/javascripts/jquery.bootstrap.wizard.js" type="text/javascript"></script>
	<script src="<?= base_url();?>berkas/javascripts/fullcalendar.min.js" type="text/javascript"></script>
	<script src="<?= base_url();?>berkas/javascripts/gcal.js" type="text/javascript"></script>
	<script src="<?= base_url();?>berkas/javascripts/jquery.dataTables.min.js" type="text/javascript"></script>
	<script src="<?= base_url();?>berkas/javascripts/datatable-editable.js" type="text/javascript"></script>
	<script src="<?= base_url();?>berkas/javascripts/jquery.easy-pie-chart.js" type="text/javascript"></script>
	<script src="<?= base_url();?>berkas/javascripts/excanvas.min.js" type="text/javascript"></script>
	<script src="<?= base_url();?>berkas/javascripts/jquery.isotope.min.js" type="text/javascript">
	</script><script src="<?= base_url();?>berkas/javascripts/isotope_extras.js" type="text/javascript"></script>
	<script src="<?= base_url();?>berkas/javascripts/modernizr.custom.js" type="text/javascript"></script>
	<script src="<?= base_url();?>berkas/javascripts/jquery.fancybox.pack.js" type="text/javascript"></script>
	<script src="<?= base_url();?>berkas/javascripts/select2.js" type="text/javascript"></script>
	<script src="<?= base_url();?>berkas/javascripts/styleswitcher.js" type="text/javascript"></script>
	<script src="<?= base_url();?>berkas/javascripts/wysiwyg.js" type="text/javascript"></script>
	<script src="<?= base_url();?>berkas/javascripts/typeahead.js" type="text/javascript"></script>
	<script src="<?= base_url();?>berkas/javascripts/summernote.min.js" type="text/javascript"></script>
	<script src="<?= base_url();?>berkas/javascripts/jquery.inputmask.min.js" type="text/javascript"></script>
	<script src="<?= base_url();?>berkas/javascripts/jquery.validate.js" type="text/javascript"></script>
	<script src="<?= base_url();?>berkas/javascripts/bootstrap-fileupload.js" type="text/javascript"></script>
	<script src="<?= base_url();?>berkas/javascripts/bootstrap-datepicker.js" type="text/javascript"></script>
	<script src="<?= base_url();?>berkas/javascripts/bootstrap-timepicker.js" type="text/javascript"></script>
	<script src="<?= base_url();?>berkas/javascripts/bootstrap-colorpicker.js" type="text/javascript"></script>
	<script src="<?= base_url();?>berkas/javascripts/bootstrap-switch.min.js" type="text/javascript"></script>
	<script src="<?= base_url();?>berkas/javascripts/typeahead.js" type="text/javascript"></script>
	<script src="<?= base_url();?>berkas/javascripts/spin.min.js" type="text/javascript"></script>
	<script src="<?= base_url();?>berkas/javascripts/ladda.min.js" type="text/javascript"></script>
	<script src="<?= base_url();?>berkas/javascripts/moment.js" type="text/javascript"></script>
	<script src="<?= base_url();?>berkas/javascripts/mockjax.js" type="text/javascript"></script>
	<script src="<?= base_url();?>berkas/javascripts/bootstrap-editable.min.js" type="text/javascript"></script>
	<script src="<?= base_url();?>berkas/javascripts/xeditable-demo-mock.js" type="text/javascript"></script>
	<script src="<?= base_url();?>berkas/javascripts/xeditable-demo.js" type="text/javascript"></script>
	<script src="<?= base_url();?>berkas/javascripts/address.js" type="text/javascript"></script>
	<script src="<?= base_url();?>berkas/javascripts/daterange-picker.js" type="text/javascript"></script>
	<script src="<?= base_url();?>berkas/javascripts/date.js" type="text/javascript"></script>
	<script src="<?= base_url();?>berkas/javascripts/morris.min.js" type="text/javascript"></script>
	<script src="<?= base_url();?>berkas/javascripts/skycons.js" type="text/javascript"></script>
	<script src="<?= base_url();?>berkas/javascripts/fitvids.js" type="text/javascript"></script>
	<script src="<?= base_url();?>berkas/javascripts/jquery.sparkline.min.js" type="text/javascript"></script>
	<script src="<?= base_url();?>berkas/javascripts/dropzone.js" type="text/javascript"></script>
	<script src="<?= base_url();?>berkas/javascripts/main.js" type="text/javascript"></script>
	<script src="<?= base_url();?>berkas/javascripts/respond.js" type="text/javascript"></script>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
  </head>
  <body class="page-header-fixed bg-1">
    <div class="modal-shiftfix">
      <!-- Navigation -->
      <div class="navbar navbar-fixed-top scroll-hide">
        <div class="container-fluid top-bar">
         
          <button class="navbar-toggle"><span class="icon-bar"></span>
		  <span class="icon-bar"></span><span class="icon-bar"></span></button><a class="logo" href="index-2.html">se7en</a>
          <form class="navbar-form form-inline col-lg-2 hidden-xs">
            <input class="form-control" placeholder="Search" type="text">
          </form>
        </div>
        <div class="container-fluid main-nav clearfix">
          <div class="nav-collapse">
            <ul class="nav">
              <li>
                <a href="index-2.html"><span aria-hidden="true" class="se7en-home"></span>Dashboard</a>
              </li>
              <li><a class="current" href="social.html">
                <span aria-hidden="true" class="se7en-feed"></span>Social Feed</a>
              </li>
              <li class="dropdown"><a data-toggle="dropdown" href="#">
                <span aria-hidden="true" class="se7en-envelope"></span>Master Data<b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="<?= base_url();?>master">
                    <p>
                      Tabel Master
                    </p></a>
                    
                  </li>
                 
				 
                </ul>
              </li>
              <li class="dropdown"><a data-toggle="dropdown" href="#">
                <span aria-hidden="true" class="se7en-forms"></span>Forms<b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li>
                    <a href="form-components.html">Form Components</a>
                  </li>
                  <li>
                    <a href="form-advanced.html">Advanced Forms</a>
                  </li>
                  <li><a href="xeditable.html">
                    <span class="notifications label label-warning">New</span>
                    <p>
                      X-Editable
                    </p></a>
                    
                  </li>
                  <li><a href="file-upload.html">
                    <div class="notifications label label-warning">
                      New
                    </div>
                    <p>
                      Multiple File Upload
                    </p></a>
                    
                  </li>
                  <li><a href="dropzone-file-upload.html">
                    <div class="notifications label label-warning">
                      New
                    </div>
                    <p>
                      Dropzone File Upload
                    </p></a>
                    
                  </li>
                </ul>
              </li>
              <li class="dropdown"><a data-toggle="dropdown" href="#">
                <span aria-hidden="true" class="se7en-tables"></span>Tables<b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li>
                    <a href="tables.html">Basic tables</a>
                  </li>
                  <li>
                    <a href="datatables.html">DataTables</a>
                  </li>
                  <li><a href="datatables-editable.html">
                    <div class="notifications label label-warning">
                      New
                    </div>
                    <p>
                      Editable DataTables
                    </p></a>
                    
                  </li>
                </ul>
              </li>
              <li><a href="charts.html">
                <span aria-hidden="true" class="se7en-charts"></span>Charts</a>
              </li>
              <li class="dropdown"><a data-toggle="dropdown" href="#">
                <span aria-hidden="true" class="se7en-pages"></span>Pages<b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="chat.html">
                    <span class="notifications label label-warning">New</span>
                    <p>
                      Chat
                    </p></a>
                    
                  </li>
                  <li>
                    <a href="calendar.html">Calendar</a>
                  </li>
                  <li><a href="timeline.html">
                    <span class="notifications label label-warning">New</span>
                    <p>
                      Timeline
                    </p></a>
                    
                  </li>
                  <li><a href="login1.html">
                    <span class="notifications label label-warning">New</span>
                    <p>
                      Login 1
                    </p></a>
                    
                  </li>
                  <li>
                    <a href="login2.html">Login 2</a>
                  </li>
                  <li><a href="signup1.html">
                    <span class="notifications label label-warning">New</span>
                    <p>
                      Sign Up 1
                    </p></a>
                    
                  </li>
                  <li><a href="messages.html">
                    <span class="notifications label label-warning">New</span>
                    <p>
                      Messages/Inbox
                    </p></a>
                    
                  </li>
                  <li><a href="pricing.html">
                    <span class="notifications label label-warning">New</span>
                    <p>
                      Pricing Tables
                    </p></a>
                    
                  </li>
                  <li>
                    <a href="signup2.html">Sign Up 2</a>
                  </li>
                  <li><a href="invoice.html">
                    <span class="notifications label label-warning">New</span>
                    <p>
                      Invoice
                    </p></a>
                    
                  </li>
                  <li><a href="faq.html">
                    <span class="notifications label label-warning">New</span>
                    <p>
                      FAQ
                    </p></a>
                    
                  </li>
                  <li>
                    <a href="filters.html">Filter Results</a>
                  </li>
                  <li>
                    <a href="404-page.html">404 Page</a>
                  </li>
                  <li><a href="500-page.html">
                    <span class="notifications label label-warning">New</span>
                    <p>
                      500 Error
                    </p></a>
                    
                  </li>
                </ul>
              </li>
              <li><a href="gallery.html">
                <span aria-hidden="true" class="se7en-gallery"></span>Gallery</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!-- End Navigation -->
   

</html>