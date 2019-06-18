<?php
session_start();
$email=$_POST['email'];
$_SESSION['email']=$email;
$pass=$_POST['pass'];
$_SESSION['pass']=$pass;
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'boss');
$q="SELECT * FROM usertable WHERE Email='$email' AND Password='$pass'";
$status=mysqli_query($con,$q);
$num=mysqli_num_rows($status);
if($num==1)
{
    while($obj = mysqli_fetch_array($status))
    {
       $name=$obj['Fullname'];
	   $_SESSION['sName']=$name;
    }
}
?>
<!DOCTYPE html>
<html>
<script>
 var n='<?php echo $num ?>';
if(n==!1){
	alert("INVALID CREDENTIALS");
	window.location="http://localhost/enlight/enlight/login";
}
else if ('<?php echo (isset($_SESSION['account_session'])) ?>'){
	window.location="http://localhost/enlight/enlight/account";
}
else{
	alert("Successfully LOGGED IN");
	window.location="http://localhost/enlight/enlight/enroll";
}
</script>
</html>