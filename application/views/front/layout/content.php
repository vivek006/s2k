<!-- WHO-WE-ARE -->
<section id="who-we-are" class="who-we-are bg-grey">
	<div class="container">
		<div class="row">
		  <div class="col s12">
			<div class="title">
			  <h4>WHO WE ARE</h4>
			  <p>Group of engineering professionals from different fields .</p>
			</div>
			<p>Deliver Nature is the place where you will find out young and talentend profeesional from different fields.</p>
		  </div>
		</div>
	</div>
</section>
<!-- SERVICES -->
<section id="services" class="services">
	<div class="container">
		<div class="row">
			<div class="col s12">
				<div class="title">
					<h4>What services we offered</h4>
					<p>Dream to make the education easy and convient for young generation of our country</p>
				</div>
			</div>
			<div class="col s12 m4 l4">
				<div class="box center">
					<h2 class="light-blue-text"><i class="small material-icons">receipt</i></h2>
					<a href="<?php echo base_url().'Onlinetutoring'?>"><h5>Software Development</h5><a/>
					<p>We bring the one tutorial from insturies best professional.</p>
				</div>
			</div>

			<div class="col s12 m4 l4">
				<div class="box center">
					<h2 class="light-blue-text"><i class="small material-icons">receipt</i></h2>
					<a href="<?php echo base_url().'Personaltutoring'?>"><h5>Python For analysis</h5></a>
					<p>Do u like some tutorial,then you can personally contact the instructor and ask for online classes.</p>
				</div>
			</div>
			<div class="col s12 m4 l4">
				<div class="box center">
					<h2 class="light-blue-text"><i class="small material-icons">receipt</i></h2>
					<a href="<?php echo base_url().'Softwaredevelopment'?>"><h5>Web Development</h5></a>
					<p>If you have a plane,Tell us we are turn it itno the reality.</p>
				</div>
			</div>
			<div class="col s12 m4 l4">
				<div class="box center">
					<h2 class="light-blue-text"><i class="small material-icons">receipt</i></h2>
					<a href="<?php echo base_url().'Knowledgesharing'?>"><h5>UI Development</h5></a>
					<p>Share your work,with out team member,ask question and and gain skills.</p>
				</div>
			</div>
			<div class="col s12 m4 l4">
				<div class="box center">
					<h2 class="light-blue-text"><i class="small material-icons">receipt</i></h2>
					<a href="<?php echo base_url().'Educationseminar'?>"><h5>Digital MArketing</h5></a>
					<p>If you want to get our team visit to your college,institute and school. <br/> We going to deliver seminar for you</p>
				</div>
			</div>
			<div class="col s12 m4 l4">
				<div class="box center">
					<h2 class="light-blue-text"><i class="small material-icons">receipt</i></h2>
					<a href="<?php echo base_url().'Placementconcern'?>"><h5>Data Science</h5></a>
					<p>We are dealing with leading company to place our student.</p>
				</div>
			</div>
     
		</div>
    </div>
  </div>
</section>
<!-- CONTACT -->
<section id="contact" class="contact">
  <div class="container">
    <div class="row">
      <div class="col s12">
        <div class="title">
          <h4>Contact Us</h4>
          <p>Get to know  more about</p>
        </div>
      </div>
		<div class="col s12 m6 l4">
			<ul class="contact-detail">
			  <li>
				<div class="icon">
				  <i class="small material-icons">location_on</i>
				</div>
				<div class="detail">
				  <h5>Address</h5>
				  <p>B-105,SECTOR -7, DWARKA, </p>
				</div>
			  </li>
			  <li>
				<div class="icon">
				  <i class="small material-icons">phone</i>
				</div>
				<div class="detail">
				  <h5>Free Helpline</h5>
				  <p>+91 8287424487 </p>
				  <p>+91 9821499783</p>
				</div>
			  </li>
			  <li>
				<div class="icon">
				  <i class="small material-icons">email</i>
				</div>
				<div class="detail">
				  <h5>Email</h5>
				  <p>vivekranjan006@gmail.com</p>
				  <!--<p>support@actiknow.com</p>-->
				</div>
			  </li>
			</ul>
		</div>
		<div class="col s12 m6 m6 l8">
			<div class="row">
				<form class="col s12" action="<?php echo base_url();?>home/submit_form" method="post">
					<div class="row">
						<div class="input-field col s6">
							<input id="first_name" type="text" class="validate" name="first_name">
							<label for="first_name">First Name</label>
						</div>
						<div class="input-field col s6">
							<input id="last_name" type="text" class="validate" name="last_name">
							<label for="last_name">Last Name</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<input id="email" type="email" class="validate" name="email">
							<label for="email">Email</label>
							<label for="email" data-error="wrong" data-success="right">Email</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<textarea id="textarea1" class="materialize-textarea" name="message"></textarea>
							<label for="textarea1">Message</label>
						</div>
					</div>
					<div class="row submit-row">
						<input class="waves-effect waves-light btn secondary-btn" type="submit" value="Submit" name="contact_us">
					</div>
				</form>
			</div>
		</div>
    </div>
  </div>
</section>
<!-- GET-APP 
<section class="get-app">
    <div class="container">
      <div class="row">
        <div class="col s12">
          <div class="title">
            <h4>GET IT FOR FREE</h4>
            <p>Banks and service providers managing ATMs for banks can opt for the ATM Audit.</p>
          </div>
          <div class="app-btn">
            <a href="" class="android-btn">
              <i class="small material-icons">android</i>Google Play
            </a>
          </div>
        </div>  
      </div> 
    </div>
</section>-->