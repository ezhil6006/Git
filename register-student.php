<?php include("header.php"); ?>	
<?php
	mysql_connect("localhost","root","");
	mysql_select_db("kyaschool");
?>	
<body>
	<?php include("header-inner.php"); ?>		
	<!--// Home banner -->
	<div class="home-banner2">
		<h1>Register</h1>
	</div>
	<!-- Home banner //-->


	<!--// Home About -->

	<!-- Home About //-->


	<!--// Home features -->
	<div class="inner-features">
		<div class="inner-main">
			<div class="regi-left">
				<h2>Personal Details</h2>
				<ul class="form2">
					<form name="form" id="form" method="POST">	
						<li>
							<p>First Name * </p>
							<input type="text" name="firstname" class="textb-cont"/>
						</li>
						<li>
							<p> Last Name *</p>
							<input type="text" name="lastname" class="textb-cont"/>
						</li>
						<li>
							<p>E-Mail *</p>
							<input type="text" name="email" class="textb-cont"/>
						</li>
						<li>
							<p>Telephone *</p>
							<input type="text" name="phone" class="textb-cont"/>
						</li>
						<li>
							<p>Fax</p>
							<input type="text" name="fax" class="textb-cont"/>
						</li>
						<li>
							<p>I Am *</p>


							<select name="who" id="who" class="textb-cont2">
								<option>Parents </option>
								<option>Teacher</option>
								<option>Student</option>
							</select>

						</li>

						<div class="clearfix"></div>
					</ul>

					<h2>Student</h2>
					<ul class="form2">
						<li>
							<p>I am Studying in School</p>


							<input name="school" type="text" class="textb-cont"/>

						</li>
						<li>
							<p>Affiliated Board *</p>


							<select name="board" id="board" class="textb-cont">
								<option>Please Select</option>
								<option>CBSE</option>
								<option>ICSE</option>
							</select>

						</li>

						<li>
							<p>School Address *</p>


							<textarea name="schooladdress" class="texta-cont"></textarea>

						</li>
						<li>
							<p>State *</p>


							<select name="schoolstate" id="schoolstate" class="textb-cont">
								<option>Please Select</option>
							</select>

						</li>
						<li>
							<p>City *</p>


							<select name="schoolcity" id="schoolcity" class="textb-cont">
								<option>Please Select</option>

							</form>
						</li>
						<li>
							<p>Class *</p>


							<select name="class" id="class" onChange="MM_jumpMenu('parent',this,0)" class="textb-cont">
								<option>Please Select</option>
							</select>

						</li>
						<li><div class="reg-tex2">
								<label>
									<input type="checkbox" name="ageconfirm" id="checkbox">
									</label>
									I hereby confirm that I am over 13 years of age and have read and accepted the KyaSchool <a href="#">Terms & Conditions</a></div>

							</li>


							<li><div class="reg-tex">I would like to subscribe the the KyaSchool blog.</div>
								<input name="blogsubscr" type="radio" value="Yes">
									Yes
									<input name="blogsubscr" type="radio" value="No">
										No</li>


									<div class="clearfix"></div>
								</ul>
								<h2>Your Address</h2>
								<ul class="form2">
									<li>
										<p>Address * </p>


										<textarea name="useraddress" class="texta-cont"></textarea>

									</li>
									<li>
										<p>Postal Code *</p>
										<input name="userpostalcode" type="text" class="textb-cont"/>
									</li>
									<li>
										<p>State *</p>
										<select name="userstate" id="userstate" class="textb-cont">
											<option>Please Select</option>
										</select>
									</li>
									<li>
										<p>City *</p>
										<select name="usercity" id="usercity" class="textb-cont">
											<option>Please Select</option>
										</select>
									</li>





									<div class="clearfix"></div>
								</ul>
								<h2>Your Password</h2>
								<ul class="form2">
									<li>
										<p>Password * </p>


										<input name="password" type="password" class="textb-cont"/>

									</li>
									<li>
										<p> Password Confirm *</p>
										<input name="cpassword" type="password" class="textb-cont"/>
									</li>
									<li><div class="reg-tex2">
											<label>
												<input type="checkbox" name="iagree" id="checkbox">
												</label>
												I have read and agree to the <a href="#">Terms &amp; Conditions</a>  &amp;  <a href="#">Privacy Policy</a>  of Kyaschool</div>

										</li>

										<li>
											<p>&nbsp;</p>
											<input name="button2" type="submit" class="submit" id="button2" value="SUBMIT" />
										</li>

										<div class="clearfix"></div>
									</ul>
								</div>
								<div class="regi-right">

									<h1>Registered Users? Login Here</h1>
									<p>If you already have an account with us, 
										<br>
											please login at the</p>
										<a href="login.php"><input name="button21" type="button" class="submit2" id="button2" value="Login" /></a>

									</div>


								</form>    
							</div>
							<div class="clearfix"></div>
						</div>
						<!-- Home features //-->
						<div class="medium-adds">
							<div class="container all-center">
								<a href="javascript:void(0);">
									<img src="images/ads/medium.jpg" alt="add" class="img-responsive" />
								</a>
							</div>
						</div>


						<!--// Home testimonial -->

						<!-- Home testimonial //-->

						<!--// home clients -->

						<!-- home clients //-->
						<?php include("footer.php"); ?>

						<?php
if(isset($_POST['button2'])){	
	
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$fax=$_POST['fax'];
$who=$_POST['who'];
$school=$_POST['school'];
$board=$_POST['board'];
$schooladdress=$_POST['schooladdress'];
$schoolstate=$_POST['schoolstate'];
$schoolcity=$_POST['schoolcity'];
$ageconfirm=$_POST['ageconfirm'];
$blogsubscr=$_POST['blogsubscr'];
$useraddress=$_POST['useraddress'];
$userpostalcode=$_POST['userpostalcode'];
$userstate=$_POST['userstate'];
$usercity=$_POST['usercity'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];
$iagree=$_POST['iagree'];
$datetime=date('yyyy-mm-dd h:i:s',time());
	
	$query="INSERT INTO `kyaschool`.`registration` (`id`, `firstname`, `lastname`, `email`, `phone`, `fax`, `who`, `school`, `board`, `school_address`, `school_state`, `school_city`, `ageover13confirm`, `subscribe_blog`, `address`, `postal_code`, `state`, `city`, `password`, `confirmpassword`, `iagree`, `datetime`, `status`) VALUES (NULL, '$firstname', '$lastname', '$email', '$phone', '$fax', '$who', '$school', '$board', '$schooladdress', '$schoolstate', '$schoolcity', '$ageconfirm', '$blogsubscr', '$useraddress', '$userpostalcode', '$userstate', '$usercity', '$password', '$cpassword', '$iagree', '$datetime', '0')";
	mysql_query($query);
	
}	
?>	