<?php
session_start();
$_SESSION['account_session']=1;
$useremail=$_SESSION['email'];
$userpassword=$_SESSION['pass'];
if(!isset($_SESSION['email']) && !isset($_SESSION['pass'])){
	//header("location:http://localhost/enlight/enlight/login.html");
}
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'boss');
$q="SELECT * FROM usertable WHERE  Email='$useremail' AND Password='$userpassword'";
$status=mysqli_query($con,$q);
$num=mysqli_num_rows($status);
echo $num;
if($num==1)
{
    while($obj = mysqli_fetch_array($status))
    {
       $name=$obj['Fullname'];
       $_SESSION['username']=$name;
       $email=$obj['Email'];
       $_SESSION['useremail']=$email;
    }
}
echo $_SESSION['username'];
echo $_SESSION['useremail'];
//header("location:http://localhost/enlight/enlight/account.php");
?>