<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>NICE: Administration Panel</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="<?php echo $this->webroot; ?>theme/assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="<?php echo $this->webroot; ?>theme/assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="<?php echo $this->webroot; ?>theme/assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="<?php echo $this->webroot; ?>theme/assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
<script src="//cdn.jsdelivr.net/alertifyjs/1.8.0/alertify.min.js"></script>
<!-- CSS -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/alertifyjs/1.8.0/css/alertify.min.css"/>
<!-- Default theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/alertifyjs/1.8.0/css/themes/default.min.css"/>
<!-- Semantic UI theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/alertifyjs/1.8.0/css/themes/semantic.min.css"/>
<!-- Bootstrap theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/alertifyjs/1.8.0/css/themes/bootstrap.min.css"/>
</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="#" class="simple-text">
                    NICE
                </a>
            </div>

          <?php echo $this->Element('menu'); ?>

    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><?php echo $title; ?></a>
                </div>
                <div class="collapse navbar-collapse">

                    <ul class="nav navbar-nav navbar-right">
                      <li>
                         <?php
echo $this->Html->link('Change Profile',array(
'controller'=>'preferences',
'action'=>'changeprofile'
));
                          ?>
                      </li>
                        <li>
                           <?php
echo $this->Html->link('Change Password',array(
  'controller'=>'preferences',
  'action'=>'changepassword'
));
                            ?>
                        </li>
                        <li>
                          <?php
echo $this->Html->link('Logout',array(
 'controller'=>'preferences',
 'action'=>'logout'
));
                           ?>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
<?php echo $this->fetch('content'); ?>
<?php
//echo $this->Session->read('message_type');

 ?>
<?php
if($this->Session->read('message_type') == 'success'){
  ?>
<script type="text/javascript">
   alertify.success("<?php echo $this->Session->read('message'); ?>");
</script>
  <?php
}
 ?>
<?php
if($this->Session->read('message_type') == 'error'){
  ?>
<script type="text/javascript">
   alertify.error("<?php echo $this->Session->read('message'); ?>");
</script>
  <?php
}
 ?>
 <?php
 if($this->Session->read('message') != ''){
   $_SESSION['message_type']=null;
  $_SESSION['message']=null;
}

  ?>
                </div>
            </div>
        </div>


        <footer class="footer">
            <div class="container-fluid">
                <p class="copyright pull-right">
                  Developed By : <a href="http://www.luminousinfoways.com" target="_blank">Luminous Infoways</a>
                </p>
            </div>
        </footer>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="<?php echo $this->webroot; ?>theme/assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="<?php echo $this->webroot; ?>theme/assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="<?php echo $this->webroot; ?>theme/assets/js/bootstrap-checkbox-radio-switch.js"></script>

	<!--  Charts Plugin -->
	<script src="<?php echo $this->webroot; ?>theme/assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="<?php echo $this->webroot; ?>theme/assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="<?php echo $this->webroot; ?>theme/assets/js/light-bootstrap-dashboard.js"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="<?php echo $this->webroot; ?>theme/assets/js/demo.js"></script>


</html>
