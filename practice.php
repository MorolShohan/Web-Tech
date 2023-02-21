<?php
$name="";
$email="";
if($_SERVER["REQUEST_METHOD"]== "GET")
{
    if(empty($_GET['name']))
    {
        echo "Empty";
    }
    else
    {
        $myfile = fopen("reg.txt","w") or die ("Unable to open file!");
        $name = $_GET['name'];
        fwrite($myfile,$name);
        fclose($myfile);


    }
    if(empty($_GET['email']))
    {
       
        echo"Empty";
    }
    else{
        $myfile = fopen("reg.txt","w") or die("Unable to open");
        $email=$_GET['email'];
        fwrite($myfile,$email);
   
        fclose($myfile);
    }
   
   
   
   


   
}

?>










<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM</title>
</head>
<body>

<form method = "GET" action ="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<fieldset>
    <legend>Registration</legend>
    <p>Name : <label for="name" Name:></label>
    <input type="text"name = "name" id ="" placeholder="Enter Your Name">
    <?php echo"$name";?><br><hr></p>

    <p>Email : <label for="email" Email:></label>
    <input type="text" name = "email" id =""placeholer="Enter your Email">
    <?php echo "$email";?><br><hr></p>

    <p>Password : <label for="password" Password:></label>
    <input type="password" name = "password" id =""><br><hr></p>

    <p> Upload a File : <label for="file" ></label>
    <input type="file" name = "file" id = "file"placeholder="Choose a image"><br><hr>

    <button>submit</button> 

    





</fieldset>
</form>
</body>
</html>