<!DOCTYPE HTML>
<html>
<head>
<title>Php | Tutorial</title>
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
					<p class="content" >PHP(Hypertext Preprocessor) is used for server side development.Php is most famous language for server side scripting it is used in web development,api development,ecomerce site etc.</p>
					<br/>
					<p class="content">To start programming in php,no need to prior knowledge of programming but basic knowledge of general mathematics and logical mind.For Beginner it is good language to start,as it is very easy to learn and get up the concept quickly.</p>
					<br/>
					<p class="content">If your are looking to start a career as a php developer,that means you will never worring about the job as from many job portal php developer job is greater than any other language.Php have the great and wide future scoope.</p>
					<p class="content">So to start coding in php we need to have knowledge abot html,css and javascript which is verry easy to learn.in this Blog i am going to teach some basic syntacs of php.</p> 
					<br/>
					<p class="content">How to write my first "HELLO WORLD " in php. So to writing the php programe we need to follow the basic syntax of the php.</p>
					<br/>
					<p class="content">php code write between the '&lt?php  ?&gt' quotes.so every this written in php must be inside php quotes i.e '&lt?php  ?&gt'</p>
					<br/>
					<p class="content">Now we are going write first code in php:
									<br/>
									&lt?php //openingtag;<br/>
									
									echo 'Hello World!';   <br/>
									
									$gt> // closing tag<br/>
									<br/>
									This will show : Hello World as output on screen.
									<br/>
									<br/>
									lets study about the above code:
									<ul>
										<li><p class="content">To comment we use '//' double slash.</p></li>
										<li><p class="content">To print something we use 'echo'.</p></li>
									</ul>
									<br/>
									<br/>
									<p class="content">read next tutorial for instalation and working on php.</P>
					</p>
					
					<div class="more1" style="float:left;">
						<a href="#" class="button">Previous</a> 
					</div>
					<div class="more1" style="float:right;">
						<a href="<?php echo base_url()?>Onlinetutoring/instalation" class="button">next</a> 
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
