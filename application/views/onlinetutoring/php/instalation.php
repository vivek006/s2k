<!DOCTYPE HTML>
<html>
<head>
<title>DeliveNature | Tutorial</title>
<link href="<?php echo base_url()."assets/onlinetutorials/"; ?>css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="<?php echo base_url()."assets/onlinetutorials/"; ?>js/jquery-v1.7.1.js"></script>
<script type="text/javascript" src="<?php echo base_url()."assets/onlinetutorials/"; ?>js/jquery-hover-effect.js"></script>
<script type="text/javascript">
//Image Hover
jQuery(document).ready(function(){
jQuery(function() {
	jQuery('ul.da-thumbs > li').hoverdir();
});
});
</script>
</head>
<body>
<div class="header">
	<div class="wrap">
		<div class="header-top">
			<div class="logo">
				<!--<a href="index.html"><img src="images/logo.png" alt=""/></a>-->
			</div>
			<div class="telephone">
				<!--<span><img src="images/watch.png" "style=margin-right=10px" alt=""/>For Personal Classes Call</span><span class="number">828-742-4487</span>-->
		    </div>
			<div class="clear"></div>
		</div>
	</div>
	<div class="menu">
		<div class="wrap">
			<div class="top-nav">
				<ul class="nav">
					
					<li ><a href="#">Home</a></li>
					<li ><a href="#">Blog</a></li>
					<li ><a href="#">Abouts us</a></li>
					
					<div class="clear"></div>
				</ul>
				<!--<div class="search">
				    		<form>
				    			<input type="text" value="">
				    			<input type="submit" value="">
				    		</form>
				</div>-->
				<div class="clear"></div>
			</div>
	    </div>
	</div>
</div>
<div class="wrap">
	<div class="main">
		<div class="section group">
				<div class="col_1_of_4 span_1_of_1">
					<div class="image_grid portfolio_4col">
								<ul style="" id="list" class="portfolio_list da-thumbs"><li>
										<img src="<?php echo base_url()."assets/onlinetutorials/"; ?>images/pic16.jpg" alt="img">
									</li>
								</ul>
					</div>
				</div>
				<div class="col_1_of_4 span_2_of_1">
					<br/>
					<p class="content" >To run php code,we need to install XAMPP.</p>
					<br/>
					<p class="content">you can download it from here: <a href="https://www.apachefriends.org/download.html">download XAMPP</a>.</p>
					<br/>
					<p class="content">Now follow the set up step and install xampp on any drive of your choice,i will chosse a drive other than c drive.</p>
					<p class="content">To check XAMPP is install properly or not use the following steps:<br/>
					 1.Open any browser.<br/>
					 2.Type Localhost/<br/>
					 3.we will get below screen.
					 <div class="image_grid portfolio_4col">
								<ul style="" id="list" class="portfolio_list da-thumbs"><li>
										<img src="<?php echo base_url()."assets/onlinetutorials/"; ?>images/study/xampp_setup_pic.png" alt="img">
									</li>
								</ul>
					</div>
					 <br/>
					 <br/>
					 Now your are ready to run the project.basic step to create a project follow the following steps:</p> 
					<br/> 
					<br/>
					1. Go to Xampp folder and open htdocs.
					<br/>
					2.inside htdocs make a new folder of your project(folder name must be your project name).
					<br/>
					3.open browser and run localhost/your project name.
					<p class="content">open any editor of your choice and write the following code.</p>
					<br/>
					
					<p class="content">
									<br/>
									&lt?php <br/>
									
									echo 'Hello World!';   <br/>
									
									$gt> 
									<br/>
									<br/>
									save it as .php file in the directory of xampp/htdocs/your project name.
									<br/>
									<br/>
									open browser and run localhost/your project name.
									<br/>
									<br/>
									This will show : Hello World as output on screen.
									<br/>
									<br/>
									<br/>
									<p class="content">read next tutorial for mysql connection with php.</P>
					</p>
					
					<div class="more1" style="float:left;">
						<a href="<?php echo base_url()?>Onlinetutoring/basic_php" class="button">Previous</a> 
					</div>
					<div class="more1" style="float:right;">
						<a href="<?php echo base_url()?>Onlinetutoring/basic_php" class="button">next</a> 
					</div>
				</div>
				
				<div class="col_1_of_4 span_1_of_1">
					<div class="image_grid portfolio_4col">
								<ul style="" id="list" class="portfolio_list da-thumbs"><li>
										<img src="<?php echo base_url()."assets/onlinetutorials/"; ?>images/pic16.jpg" alt="img">
									</li>
								</ul>
					</div>
				</div>
				<div class="clear"></div>
		</div>
			
	</div>
</div>
	<div class="footer">
			<div class="wrap">
			<div class="footer-grids">
				<div class="footer-grid">
					<h3>EXTRAS</h3>
					<p>Like our tutorial ! ask for personal classes from professional.</p>
				</div>
				<div class="footer-grid">
					<h3>New Updates</h3>
					<ul>
						<li><a href="#">Php</a></li>
						<li><a href="#">Java</a></li>
						<li><a href="#">Android</a></li>
						<li><a href="#">Python</a></li>
					</ul>
				</div>
				<div class="footer-grid">
					<h3>Links</h3>
					<ul>
						<li><a href="#">Professional Developer</a></li>
						
					</ul>
				</div>
				<div class="footer-grid footer-lastgrid">
					<h3>CONTACT US</h3>
					<p>Interested in classes.</p>
					<div class="footer-grid-address">
						<p>Tel.828-742-4487</p>
						
						<p>Email:<a class="email-link" href="#">vivek@delivernature.com</a></p>
					</div>
				</div>
				<div class="clear"> </div>
			</div>
			<!--<div class="copy-right">
			 <p>Design by <a href="http://w3layouts.com/">W3layouts</a></p>
		    </div>-->
		</div>
	</div>
</body>
</html>
