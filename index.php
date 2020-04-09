<html>

<head> 
	<title>PHP form</title>
	
</head>

<body>


 <br/>

<h3 style="align-content: center; justify-content: center; display: flex;" >Contact Me</h3>
<br/>

<div style="align-content: center; justify-content: center; display: flex; min-height: 50vh; width: 50%;   " >
<form action = "form.php" method="POST" 



>

<p><label for="First name"> First Name:
</label>
<input type="text" name="first_name"  placeholder="Enter Your First Name" required />
</p>

<p><label for="Last name"> Last Name:
</label>
 <input type="text" name="last_name"  placeholder="Enter Your Last Name" required />
</p>

<p><label for="User name"> User Name:
</label>
 <input type="text" name="user_name"  placeholder="Enter Your Other Name"  />
</p>
<p><label for="Matriculation number"> Mat No:
</label>
 <input type="text" name="Mat_no"  placeholder="Enter Your Matriculation Number" required />
</p>

  <p> <label for="Email"> Email:
</label>: 
 <input type="email" name="email" placeholder="Enter Your Email" required />
</p>

<p> 			<label for="gender">Gender</label><br /> 			
<input type="radio" name="gender" /> Female
 <input type="radio" name="gender" /> Male 		</p>
  
<p> <label for="Faculty">Faculty</label><br /> 
<select name="faculty"> 
	<option>Select Faculty</option> 
	<option>Engineering</option>
	<option>Life Science</option>
	<option>Education</option> 
	<option>Physical Sciences</option> 
	<option>Medicine</option> 
	<option>Management Science</option> 
	<option>Arts</option> 

</select> </p> 	


<p>
<input type="checkbox" name="tandc" />
Accept Terms and Conditions

</p>


<button type="submit">Submit</button> 


</form>

</div>

</body>



</html>
