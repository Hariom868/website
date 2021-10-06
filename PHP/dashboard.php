<?php
session_start();
include_once('pdo.php');
//it make a new class in the database_connection
$datainsert=new Database_Connection();
if(isset($_POST['username']) && isset($_POST['fullname']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['phone'])&& isset($_POST['branching']))
{
$Name=$_POST['username'];
$Username=$_POST['fullname'];
$Useremail=$_POST['email'];
$Userpassword=md5($_POST['password']);
$register = "doctor";
$branch = $_POST['branching'];
$phone = $_POST['phone'];
$sql=$datainsert->insertdoctor($Name,$Username,$Useremail,$Userpassword,$register,$branch,$phone);
if($sql)
{
// Message for successfull insertion
echo  '<div style="background-color:green"><h1 style="text-align:center;color:white">Sucess</h1></div>';
echo "<script>window.location.href='dashboard.php'</script>";
}
else
{
// Message for unsuccessfull insertion
echo '<div style="background-color:red"><h1 style="text-align:center;color:white">Oops!! Try Again</h1></div>';
echo "<script>window.location.href='dashboard.php'</script>";
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Doctor/Dashboard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../CSS/dashboard.css">
</head>

<body>
    <header>
         <a class="btn  btn-primary btn-lg btn-hover-shadow mb-3 px-4 mx-2" href="add_staff.php">Add-Staff</a>
      <button type="button" class="btn btn-primary btn-hover-shadow mb-3 px-4 mx-2 btn-lg" data-toggle="modal" data-target="#myModal">Enter Branch</button>
        <a class="btn  btn-primary btn-lg btn-hover-shadow mb-3 px-4 mx-2" href="view_doctor.php">View-Doctor</a>
        <a class="btn  btn-primary btn-lg btn-hover-shadow mb-3 px-4 mx-2" href="view_staff.php">View-Staff</a>
         <a class="btn  btn-primary btn-lg btn-hover-shadow mb-3 px-4 mx-2" href="logout.php">Log-Out</a>
        
</header>
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
  <form action="action_page.php" class="form-container">
    <h1>Create Branch</h1>

    <label for="text"><b>Branch</b></label>
    <input type="text" placeholder="Enter Branch" name="b" required>
    <label for="number"><b>Amount</b></label>
    <input type="number" placeholder="Enter Amount per patient" name="am" required>

    <button type="submit" class="btn">Register</button>
</form>
</div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
        <div class="container important text-center">
            <div class="card dashboard">
  <div class="card-body">
      <div class="card-title mb-3 pb-3">  <h1 class="display-2">Welcome <?php echo $_SESSION['Username'] ?></h1></div>
        <hr class="my-4 " style={{ width: '75%', marginLeft: '15%' }}></hr>
      <div class="card-text">
          <p class="login-card-description">ADD DOCTOR</p>
                            <form method ="POST">
                                <div class="form-group">
                                
                                    <label for="text" class="sr-only">UserName</label>
                                    <input type="text" name="username"  class="form-control shadow-none" placeholder="Enter User Name" required>
                                </div>
                                <div class="form-group">
                                
                                    <label for="text" class="sr-only">FullName</label>
                                    <input type="text" name="fullname"  class="form-control shadow-none" placeholder="Enter Full Name" required>
                                </div>
                                <div class="form-group">
                                
                                    <label for="text" class="sr-only">Register Under Branch</label>
                                    <input type="text" name="branching"  class="form-control shadow-none" placeholder="Enter Branch" required>
                                </div>
                                <div class="form-group">
                                    
                                    <label for="email" class="sr-only">Email</label>
                                    <input type="email" name="email" id="email" class="form-control shadow-none"
                                        placeholder="Enter Email address" required>
                                </div>
                                 <div class="form-group">
                                
                                    <label for="number" class="sr-only">Phone_no</label>
                                    <input type="number" name="phone" class="form-control shadow-none" placeholder="Enter Phone no." required>
                                </div>
                                <div class="form-group mb-4">
                                    <label for="password" class="sr-only">Password</label>
                                    <input type="password" name="password" id="password"
                                        class="form-control shadow-none" placeholder="Enter Password" required>
                                </div>
                               
                                    <button class="btn btn-block login-btn mb-4">Add Doctor</button>
                            </form>
                        

</div>
  </div>
</div>
</div>

</body>

</html>