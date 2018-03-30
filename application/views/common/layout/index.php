<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<?php
	$role=$this->session->userdata['role']; 
						if($role=="super_admin")
						{
							$role="admin";
						}
						?>
    <title><?php echo $role; ?> panel</title>

	<?php if($cssfile) {echo $cssfile;} ?>
	
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
           <!-- header file-->
		<?php if($header) {echo $header;} ?>
		<!-- end of header file-->
		
		<!-- left menu menu-->
		<?php if($left) {echo $left;} ?>
		<!-- end of left menu-->
       <?php if($jsfile) {echo $jsfile;} ?>
           <!-- main content start-->
		
		<?php if($middle) {echo $middle;} ?>
           
         <!-- /.panel-body -->
         <?php if($footer) {echo $footer;} ?>
          <!-- /.panel-footer -->
                   

    </div>
    <!-- /#wrapper -->

    <!-- header file-->
		
	<!-- end of header file-->
</body>

</html>
