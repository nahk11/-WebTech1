<html>
<head>
<title> Registration Page </title>

</head>
<body style="background-color:#7f8c8d">

    <form class="myform" action="register.php" method="post" enctype="multipart/form-data" >
    <div id="main-wrapper">
        <center>
		<label>Name</label><br>
		<input name="First Name" type="text" class="inputvalues" placeholder="First Name" required/>	
		<label</label>
		<input name="Last Name" type="text" class="inputvalues" placeholder="Last Name" required/>
		<br>
		<label>Choose your user name</label><br>
		<input name="Your Email" type="text" class="inputvalues" placeholder="@gmail.com" required/>
		<br>
		<label>Create Password</label><br>
		<input name="New Password 1" type="text" class="inputvalues" placeholder="Min 6 Characters." required/><br>
		<label>Confirm Password</label><br>
		<input name="New Password 2" type="text" class="inputvalues" placeholder="" required/><br>
		
		<label>Birthday:</label><br>
		<select name="Month">
		<option value="month">November</option>
		</select>
		<label></label>
		<input name="2" type="text" class="inputvalues" placeholder="" required/>
		<label></label><br>
		<input name="3" type="text" class="inputvalues" placeholder="" required/>
		<br>
		
		<label>Gender</label>
		<select name="Gender">
		<option value="month">Male</option>
		</select>
		<br>
		<label>Mobile Phone</label><br>
		<input name="New Password 2" type="text" class="inputvalues" placeholder="" required/><br>
		<label>Your current email address</label><br>
		<input name="New Password 2" type="text" class="inputvalues" placeholder="" required/><br>
     
		</center>
	</form>
	
	
    </div>
</body>
</html>