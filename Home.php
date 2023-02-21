<!DOCTYPE html>
<html>
    <body>
        

        <form name = "Register" action = "process1.php" method = "post" autocomplete = "off">
            <fieldset><legend>Registration</legend>
            <p>First Name : <input type="text" name = "first"></p>
            <p>Last Name : <input type="text" name = "last"></p>
            <p>Password : <input type="password" name = "pass"></p>
            <p>
                status:
                <input type="radio" name = "status" value = "enrolled" checked>Enrolled
                <input type="radio" name = "status" value = "notEnrolled">Not Enrolled

            </p>
            <p><input type="checkbox" name="waitlist" value="true"
            checked = "checked">Add me to the list</p>
            












            <p><input type="submit" name = "submit" value = "Sign in"/></p>
            </fieldset>

        </form>

       
























</body>
</html>