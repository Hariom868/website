<?php
session_start();
include_once('pdo.php');
//it make a new class in the database_connection
$datainsert=new Database_Connection();
if(isset($_POST['fullname']) && isset($_POST['datesheet'])  && isset($_POST['branching']) && isset($_POST['a']) && isset($_POST['phone']) )
{
$Username=$_POST['fullname'];
$Userdate=$_POST['datesheet'];
$branch = $_POST['branching'];
$age = $_POST['a'];
$phone = $_POST['phone'];
$sql=$datainsert->insertpatient($Username,$Userdate,$branch,$age,$phone);
if($sql)
{
// Message for successfull insertion
echo  '<div style="background-color:green"><h1 style="text-align:center;color:white">Sucess</h1></div>';
echo "<script>window.location.href='dashboard2.php'</script>";
}
else
{
// Message for unsuccessfull insertion
echo '<div style="background-color:red"><h1 style="text-align:center;color:white">Oops!! Try Again</h1></div>';
echo "<script>window.location.href='dashboard2.php'</script>";
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
          <a class="btn  btn-primary btn-lg btn-hover-shadow mb-3 px-4 mx-2" href="view_patient.php">View-Patient</a>
        <a class="btn  btn-primary btn-lg btn-hover-shadow mb-3 px-4 mx-2" href="logout.php">Log-Out</a>
        
</header>
        <div class="container important text-center">
            <div class="card dashboard">
  <div class="card-body">
      <div class="card-title mb-3 pb-3">  <h1 class="display-2">Welcome <?php echo $_SESSION['Username'] ?></h1></div>
        <hr class="my-4 " style={{ width: '75%', marginLeft: '15%' }}></hr>
      <div class="card-text">
          <p class="login-card-description">ADD PATIENT</p>
                            <form method ="POST">
                                <div class="form-group">
                                
                                    <label for="text" class="sr-only">FullName</label>
                                    <input type="text" name="fullname"  class="form-control shadow-none" placeholder="Enter Full Name" required>
                                </div>
                                <div class="form-group">
                                
                                    <label for="text" class="sr-only">Register Under Branch</label>
                                    <input type="text" name="branching"  class="form-control shadow-none" placeholder="Enter Branch" required>
                                </div>
                                <div class="form-group">
                                
                                    <label for="number" class="sr-only">Age</label>
                                    <input type="number" name="a" class="form-control shadow-none" placeholder="Enter Age" required>
                                </div>
                                <div class="form-group">
                                
                                    <label for="number" class="sr-only">Phone_no</label>
                                    <input type="number" name="phone" class="form-control shadow-none" placeholder="Enter Phone no." required>
                                </div>
                                <div class="form-group mb-4">
                                    
                                    <input type="date" name="datesheet" 
                                        class="form-control shadow-none"  required>
                                </div>
                               
                                    <button class="btn btn-block login-btn mb-4">Add Patient</button>
                            </form>
                        

</div>
  </div>
</div>
</div>
</body>

</html>