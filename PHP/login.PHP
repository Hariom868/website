<?php
session_start();
// basically it will include pdo file for data connection to the sql server
include_once('pdo.php');
// it is used to make a class of database-connection1 name logindata
$logindata=new Database_Connection();
// used to check whether all the field are used or not 
if(isset($_POST['email']) && isset($_POST['password']))
{
// After clicking on login button Values

$Useremail=$_POST['email'];
$Userpassword=md5($_POST['password']);
//Function Calling for login checking variable
$sql=$logindata->signin($Useremail,$Userpassword);
$numbers=mysqli_fetch_array($sql);
if($numbers>0)
{
    $_SESSION['Username']=$numbers['Username'];
    if(strcmp($numbers['register'],'staff')==0){
        echo "<script>window.location.href='dashboard2.php'</script>";  
    }
    elseif(strcmp($numbers['register'],'doctor')==0){
        echo "<script>window.location.href='dashboard1.php'</script>";  
    }
    else{
        echo "<script>window.location.href='dashboard.php'</script>";  
    }

  
    
}
else
{
// Message for unsuccessfull insertion
echo "<script>alert('Invalid Credential. Please try again');</script>";
echo "<script>window.location.href='login.php'</script>";
}
}
?>
<?php
include('../HTML/login.html');
?>
