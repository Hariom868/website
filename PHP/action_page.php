<?php
;
define('server','localhost');// defining hostname
define('username','root'); // defining username
define('password' ,''); // defining Password
define('databasename', 'hospital');// defining database name
$connection = mysqli_connect(server,username,password,databasename);
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_GET['b']) && $_GET['b']!=''){
   $valuess = $_GET['b'];
   $num = $_GET['am'];
$sql = "insert into branches(name,amount) values('$valuess','$num')";//the sql command uses to delete row from expenses where the regdate matches

if (mysqli_query($connection, $sql)) {
    mysqli_close($connection);// it close the connection and move to the expense page
    header('Location: dashboard.php');
    exit;
} else {
    echo "Error deleting record";
}
}
else{
    echo "Error  record";
}
?>