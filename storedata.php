<?php
$name=$_POST['name'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'boss');
$q="INSERT INTO usertable (Fullname, Email, Password) VALUES ('$name','$email','$pass')";
$status=mysqli_query($con,$q);
mysqli_close($con);
?>
<script>
if('<?php echo $status ?>'){
    alert("DONE");
    window.location="http://localhost/enlight/enlight/login";
}
else{
    alert("Something Went Wrong Please Try Again. (Maybe you are entering already registered email)");
    window.location="http://localhost/enlight/enlight/signup";
}
</script>