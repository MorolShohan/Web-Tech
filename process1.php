<!DOCTYPE html>
<html>
    <body>
        <?php
if(isset($_POST['submit']))
{
    $firstName = $_POST['first'];
    echo "First Name:".$firstName. "<br/>";

    $lastName = $_POST['first'];
    echo "First Name:".$lastName. "<br/>";

    $password = $_POST['pass'];
    echo "Password:".$password."<br/>";

    $status = $_POST['status'];
    echo "Status:".$status."<br/>";

    $waitList = $_POST['waitlist'];
    echo "weight List:".$waitList."<br/>";

}





?>

    </body>
</html>