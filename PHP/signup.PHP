<?php
// basically it will include pdo file for data connection to the sql server
include_once('pdo.php');
// it make a new class of database_connection1 called signupdata
$signupdata=new Database_Connection();
// it checks whether all field of form are filled or not
if(isset($_POST['username']) && isset($_POST['fullname']) && isset($_POST['email']) && isset($_POST['password'])&& isset($_POST['phone']))
{
$Name=$_POST['username'];
$Username=$_POST['fullname'];
$Useremail=$_POST['email'];
$phone=$_POST['phone'];
$Userpassword=md5($_POST['password']);
$register = "admin";
$sql=$signupdata->signup($Name,$Username,$Useremail,$Userpassword,$register,$phone);
if($sql)
{
echo "<script>window.location.href='login.php'</script>";
}
else
{
echo "<script>alert('Something went wrong. Please try again');</script>";
echo "<script>window.location.href='signup.php'</script>";
}
}
?>
<?php
include('../HTML/signup.html');
?>
