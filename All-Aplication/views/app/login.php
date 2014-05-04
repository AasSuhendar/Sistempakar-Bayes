
<!DOCTYPE html>
<html>
  
<!-- Mirrored from sharpandnimble.com/se7en/demo/login1.html by HTTrack Website Copier/3.x [XR&CO'2013], Fri, 14 Feb 2014 09:25:14 GMT -->
<head>
    <title>
    SISTEM PAKAR DETEKSI PENYAKIT LEUKEMIA
    </title>
 <link href="<?= base_url();?>lucetechno/stylesheets/css.css" media="all" rel="stylesheet" type="text/css" />
	<link href="<?= base_url();?>lucetechno/stylesheets/bootstrap.min.css" media="all" rel="stylesheet" type="text/css" />
	<link href="<?= base_url();?>lucetechno/stylesheets/font-awesome.min.css" media="all" rel="stylesheet" type="text/css" />
	<link href="<?= base_url();?>lucetechno/stylesheets/se7en-font.css" media="all" rel="stylesheet" type="text/css" />
	<link href="<?= base_url();?>lucetechno/stylesheets/isotope.css" media="all" rel="stylesheet" type="text/css" />
	<link href="<?= base_url();?>lucetechno/stylesheets/jquery.fancybox.css" media="all" rel="stylesheet" type="text/css" />
	<link href="<?= base_url();?>lucetechno/stylesheets/fullcalendar.css" media="all" rel="stylesheet" type="text/css" />
	<link href="<?= base_url();?>lucetechno/stylesheets/wizard.css" media="all" rel="stylesheet" type="text/css" />
	<link href="<?= base_url();?>lucetechno/stylesheets/select2.css" media="all" rel="stylesheet" type="text/css" />
	<link href="<?= base_url();?>lucetechno/stylesheets/morris.css" media="all" rel="stylesheet" type="text/css" />
	<link href="<?= base_url();?>lucetechno/stylesheets/datatables.css" media="all" rel="stylesheet" type="text/css" />
	<link href="<?= base_url();?>lucetechno/stylesheets/datepicker.css" media="all" rel="stylesheet" type="text/css" />
	<link href="<?= base_url();?>lucetechno/stylesheets/timepicker.css" media="all" rel="stylesheet" type="text/css" />
	<link href="<?= base_url();?>lucetechno/stylesheets/colorpicker.css" media="all" rel="stylesheet" type="text/css" />
	<link href="<?= base_url();?>lucetechno/stylesheets/bootstrap-switch.css" media="all" rel="stylesheet" type="text/css" />
	<link href="<?= base_url();?>lucetechno/stylesheets/bootstrap-editable.css" media="all" rel="stylesheet" type="text/css" />
	<link href="<?= base_url();?>lucetechno/stylesheets/daterange-picker.css" media="all" rel="stylesheet" type="text/css" />
	<link href="<?= base_url();?>lucetechno/stylesheets/typeahead.css" media="all" rel="stylesheet" type="text/css" />
	<link href="<?= base_url();?>lucetechno/stylesheets/summernote.css" media="all" rel="stylesheet" type="text/css" />
	<link href="<?= base_url();?>lucetechno/stylesheets/ladda-themeless.min.css" media="all" rel="stylesheet" type="text/css" />
	<link href="<?= base_url();?>lucetechno/stylesheets/social-buttons.css" media="all" rel="stylesheet" type="text/css" />
	<link href="<?= base_url();?>lucetechno/stylesheets/pygments.css" media="all" rel="stylesheet" type="text/css" />
	<link href="<?= base_url();?>lucetechno/stylesheets/style.css" media="all" rel="stylesheet" type="text/css" />
	<link href="<?= base_url();?>lucetechno/stylesheets/color/green.css" media="all" rel="alternate stylesheet" title="green-theme" type="text/css" />
	<link href="<?= base_url();?>lucetechno/stylesheets/color/orange.css" media="all" rel="alternate stylesheet" title="orange-theme" type="text/css" />
	<link href="<?= base_url();?>lucetechno/stylesheets/color/magenta.css" media="all" rel="alternate stylesheet" title="magenta-theme" type="text/css" />
	<link href="<?= base_url();?>lucetechno/stylesheets/color/gray.css" media="all" rel="alternate stylesheet" title="gray-theme" type="text/css" />
	<link href="<?= base_url();?>lucetechno/stylesheets/jquery.fileupload-ui.css" media="screen" rel="stylesheet" type="text/css" />
	<link href="<?= base_url();?>lucetechno/stylesheets/dropzone.css" media="screen" rel="stylesheet" type="text/css" />
	<script src="<?= base_url();?>lucetechno/javascripts/jquery-1.10.2.min.js" type="text/javascript"></script>
	<script src="<?= base_url();?>lucetechno/javascripts/ui/1.10.3/jquery-ui.js" type="text/javascript"></script>
	<script src="<?= base_url();?>lucetechno/javascripts/bootstrap.min.js" type="text/javascript"></script>
	<script src="<?= base_url();?>lucetechno/javascripts/raphael.min.js" type="text/javascript"></script>
	<script src="<?= base_url();?>lucetechno/javascripts/selectivizr-min.js" type="text/javascript"></script>
	<script src="<?= base_url();?>lucetechno/javascripts/jquery.mousewheel.js" type="text/javascript"></script>
	<script src="<?= base_url();?>lucetechno/javascripts/jquery.vmap.min.js" type="text/javascript"></script>
	<script src="<?= base_url();?>lucetechno/javascripts/jquery.vmap.sampledata.js" type="text/javascript"></script>
	<script src="<?= base_url();?>lucetechno/javascripts/jquery.vmap.world.js" type="text/javascript"></script>
	<script src="<?= base_url();?>lucetechno/javascripts/jquery.bootstrap.wizard.js" type="text/javascript"></script>
	<script src="<?= base_url();?>lucetechno/javascripts/fullcalendar.min.js" type="text/javascript"></script>
	<script src="<?= base_url();?>lucetechno/javascripts/gcal.js" type="text/javascript"></script>
	<script src="<?= base_url();?>lucetechno/javascripts/jquery.dataTables.min.js" type="text/javascript"></script>
	<script src="<?= base_url();?>lucetechno/javascripts/datatable-editable.js" type="text/javascript"></script>
	<script src="<?= base_url();?>lucetechno/javascripts/jquery.easy-pie-chart.js" type="text/javascript"></script>
	<script src="<?= base_url();?>lucetechno/javascripts/excanvas.min.js" type="text/javascript"></script>
	<script src="<?= base_url();?>lucetechno/javascripts/jquery.isotope.min.js" type="text/javascript">
	</script><script src="<?= base_url();?>lucetechno/javascripts/isotope_extras.js" type="text/javascript"></script>
	<script src="<?= base_url();?>lucetechno/javascripts/modernizr.custom.js" type="text/javascript"></script>
	<script src="<?= base_url();?>lucetechno/javascripts/jquery.fancybox.pack.js" type="text/javascript"></script>
	<script src="<?= base_url();?>lucetechno/javascripts/select2.js" type="text/javascript"></script>
	<script src="<?= base_url();?>lucetechno/javascripts/styleswitcher.js" type="text/javascript"></script>
	<script src="<?= base_url();?>lucetechno/javascripts/wysiwyg.js" type="text/javascript"></script>
	<script src="<?= base_url();?>lucetechno/javascripts/typeahead.js" type="text/javascript"></script>
	<script src="<?= base_url();?>lucetechno/javascripts/summernote.min.js" type="text/javascript"></script>
	<script src="<?= base_url();?>lucetechno/javascripts/jquery.inputmask.min.js" type="text/javascript"></script>
	<script src="<?= base_url();?>lucetechno/javascripts/jquery.validate.js" type="text/javascript"></script>
	<script src="<?= base_url();?>lucetechno/javascripts/bootstrap-fileupload.js" type="text/javascript"></script>
	<script src="<?= base_url();?>lucetechno/javascripts/bootstrap-datepicker.js" type="text/javascript"></script>
	<script src="<?= base_url();?>lucetechno/javascripts/bootstrap-timepicker.js" type="text/javascript"></script>
	<script src="<?= base_url();?>lucetechno/javascripts/bootstrap-colorpicker.js" type="text/javascript"></script>
	<script src="<?= base_url();?>lucetechno/javascripts/bootstrap-switch.min.js" type="text/javascript"></script>
	<script src="<?= base_url();?>lucetechno/javascripts/typeahead.js" type="text/javascript"></script>
	<script src="<?= base_url();?>lucetechno/javascripts/spin.min.js" type="text/javascript"></script>
	<script src="<?= base_url();?>lucetechno/javascripts/ladda.min.js" type="text/javascript"></script>
	<script src="<?= base_url();?>lucetechno/javascripts/moment.js" type="text/javascript"></script>
	<script src="<?= base_url();?>lucetechno/javascripts/mockjax.js" type="text/javascript"></script>
	<script src="<?= base_url();?>lucetechno/javascripts/bootstrap-editable.min.js" type="text/javascript"></script>
	<script src="<?= base_url();?>lucetechno/javascripts/xeditable-demo-mock.js" type="text/javascript"></script>
	<script src="<?= base_url();?>lucetechno/javascripts/xeditable-demo.js" type="text/javascript"></script>
	<script src="<?= base_url();?>lucetechno/javascripts/address.js" type="text/javascript"></script>
	<script src="<?= base_url();?>lucetechno/javascripts/daterange-picker.js" type="text/javascript"></script>
	<script src="<?= base_url();?>lucetechno/javascripts/date.js" type="text/javascript"></script>
	<script src="<?= base_url();?>lucetechno/javascripts/morris.min.js" type="text/javascript"></script>
	<script src="<?= base_url();?>lucetechno/javascripts/skycons.js" type="text/javascript"></script>
	<script src="<?= base_url();?>lucetechno/javascripts/fitvids.js" type="text/javascript"></script>
	<script src="<?= base_url();?>lucetechno/javascripts/jquery.sparkline.min.js" type="text/javascript"></script>
	<script src="<?= base_url();?>lucetechno/javascripts/dropzone.js" type="text/javascript"></script>
	<script src="<?= base_url();?>lucetechno/javascripts/main.js" type="text/javascript"></script>
	<script src="<?= base_url();?>lucetechno/javascripts/respond.js" type="text/javascript"></script>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport"> <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
  </head>
  <body class="login1">
    <!-- Login Screen -->
    <div class="login-wrapper">
      <div class="login-container">
        <a>Area Login</a>
      
		<?= form_open(base_url('app/index')); ?>
          <div class="form-group">
            <input class="form-control" name="username" placeholder="Username" type="text">
          </div>
          <div class="form-group">
            <input class="form-control" name="password" placeholder="Password" type="password">
          </div>
          <div class="form-options clearfix">
           
            <button class="btn btn-primary" name="button" >Login</button>
      
        </form>
       <?php if(validation_errors()) { ?>
	<div class="alert alert-block">
	  <button type="button" class="close" data-dismiss="alert">x</button>
	  	<h4>Terjadi Kesalahan!</h4>
		<?php echo validation_errors(); ?>
	</div>
	<?php } ?>
		<?php if($this->session->flashdata('result_login')) { ?>
	<div class="alert alert-block">
	  <button type="button" class="close" data-dismiss="alert">x</button>
	  	<h4>Terjadi Kesalahan!</h4>
		<?php echo $this->session->flashdata('result_login'); ?>
	</div>
	<?php } ?>
    </div>
 
  </body>

</html>