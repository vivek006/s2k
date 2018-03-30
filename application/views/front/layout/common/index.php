<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>S2k</title>
<link rel='icon' type='image/png' href='<?php echo base_url()."assets/front/"; ?>img/myownlogo.png' />
	<?php if($head_script) {echo $head_script;} ?>
</head>

<body>

    <div id="wrapper">
		<?php if($nav_bar) {echo $nav_bar;} ?>
		<?php if($slider) {echo $slider;} ?>
			<?php if($middle) {echo $middle;} ?>
		
		<?php if($footer) {echo $footer;} ?>
		<?php if($body_script) {echo $body_script;} ?>
    </div>
   
</body>

</html>

