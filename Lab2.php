<!DOCTYPE html>
<html>

	<head>
		<title></title>
		<style> 
			fieldset{ 
			background-color: white ;
			}
			legend {
  			background-color: red;
  			color: black;
  			padding: 5px 10px;
			}
			input {
  			margin: 5px;
			}
		</style>
	</head>
	<body>
		<fieldset>
		<legend>REGISTRATION TEMPLATE</legend>
		<form>	 
		<label for = "name">Name</label>
		<input type = "text" name = "name"> <hr>
		<label for = "name">Email</label>
		<input type = "text" name = "email"> <hr>
	
		<label for = "name">User Name</label>
		<input type = "text" name = "uname"> <hr>
		<label for = "name">Password</label>
		<input type = "text" name = "pass"> <hr>
		<label for = "name">Conferm Password</label>
		<input type = "text" name = "cpass"> <hr>
		<fieldset>
			<legend>Gender</legend>
			<input type = "radio" name = "male"> 
			<label for = "male">Male</label> 
	
			<input type = "radio" name = "Female"> 
			<label for = "female">Female</label> 
	
			<input type = "radio" name = "other"> 
			<label for = "other">Other</label> 
		</fieldset>
		<fieldset>
			<legend>Date of Birth</legend>
			<input type = "text" name = "day">
			<label for = "day">/</label>
			<input type = "text" name = "month">
			<label for = "month">/</label>
			
			<input type = "text" name = "year">
			<label for = "year">(dd/mm/yyyyy)</label>
		</fieldset><br>
		<button>Submit</button>	
		<button>Reset</button>
			
		</form>
	</fieldset>
	</body>
</html>
