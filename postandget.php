<?php
$ename="";
if ($_SERVER["REQUEST_METHOD"] == "GET") 
{
    if(empty($_GET['name']))
    {
        $ename="";
        echo $ename;
    }
    else
        $ename= $_GET['name'];
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Reg</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"method="get">

 

 

 

        Name: <input type="text" name="name"><?php echo "$ename" ;?><br>
        Pass: <input type="password" name="email"><br>
        <button>Submit</button>
    </form>

 

 

 

 
</body>
</html>