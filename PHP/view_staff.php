<?php
session_start();
include_once('pdo.php');
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
         <a class="btn  btn-primary btn-lg btn-hover-shadow mb-3 px-4 mx-2" href="dashboard.php">Back</a>
        
</header>
        <div class="container important text-center">
            <div class="card dashboard">
  <div class="card-body">
      <div class="card-title mb-3 pb-3">  <h1 class="display-2">Welcome <?php echo $_SESSION['Username'] ?></h1></div>
        <hr class="my-4 " style={{ width: '75%', marginLeft: '15%' }}></hr>
      <div class="card-text">
          <p class="login-card-description">View Staff</p>
            <table class="table table-striped table-dark">
            <thead>
            <tr>
              <th>S.NO.</th>
              <th>Staff Name</th>
              <th>Branch</th>
              <th>Phone_No.</th>
              <th> ..... </th>
            </tr>
            </thead>
            <?php
            $dataviewing=new Database_Connection();
              $sql = $dataviewing->viewingstaff();//it basically send the value to the function viewing 
              $count=1;
                // this will continue till it have any row where there is any expenses and delete function take you to the delete.php file with Regdate to it so that it can be deleted
              while ($row=mysqli_fetch_array($sql)) {
                  ?>
                  <tbody>
                    <tr>
                      <td><?php echo $count;?></td>
                      <td><?php  echo $row['name'];?></td>
                      <td><?php  echo $row['Branch'];?></td>
                      <td><?php  echo $row['phoneno'];?></td>
                      <td> <?php echo "<a href='delete1.php?a=".$row['RegDate']."'>Delete</a>"; ?></td>
                    </tr>
                    <?php
                     $count=$count+1;
                     }?>
                     </table>
                           

</div>
  </div>
</div>
</div>

</body>

</html>