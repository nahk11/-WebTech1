<html>
<head>
<title> Registration Page </title>

</head>
<body style="background-color:#7f8c8d">

    <form class="myform" action="register.php" method="post" enctype="multipart/form-data" >
    <div id="main-wrapper">
        <center>
		<h2>Sign Up</h2>
		<h3>It's free and always be</h3>
		
		<label></label><br>
		<input name="First Name" type="text" class="inputvalues" placeholder="First Name" required/>
		<label</label>
		<input name="Last Name" type="text" class="inputvalues" placeholder="Last Name" required/><br>
		<label></label>
		<input name="Your Email" type="text" class="inputvalues" placeholder="Your Email" required/><br>
		<label></label>
		<input name="Re=enter Email" type="text" class="inputvalues" placeholder="Re-enter Email" required/><br>
		<label></label>
		<input name="New Password" type="text" class="inputvalues" placeholder="New Password" required/><br>
		<label>Birthday:</label><br>
		<select name="Month">
		<option value="month"> Month:</option>
		</select>
		<select name="Days">
		<option value="Days"> Day:</option>
		</select>
		<select name="Years">
		<option value="Years"> Year:</option>
		</select>
		<h4>Why do i need to provide my birthday</h4><br>
		<label></label>
		<input type="radio" class="radiobtns" name="gender" value="male" checked required> Male
		<input type="radio" class="radiobtns" name="gender" value="female" required> Female<br>
		<label>By clicking Sign Up ,you are agree to our Terms and that you
		have read our Data Use Policy,includin our Cookie Use</label><br>
        <input name="submit_btn" type="submit" id="signup_btn" value="Sign Up"/><br>
		</center>
	</form>
	
	
    </div>
</body>
</html>