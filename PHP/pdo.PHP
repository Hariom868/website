<?php
define('server','localhost');// defining hostname
define('username','root'); // defining username
define('password' ,''); // defining Password
define('databasename', 'hospital');// defining database name
class Database_Connection
{
function __construct()
{
$connection = mysqli_connect(server,username,password,databasename);
$this->dbhost=$connection;
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
}



// Here is the function for signup which we will callout when we do signup
public function signup($username,$fullname,$useremail,$userpassword,$registeras,$phone)
{
$adding=mysqli_query($this->dbhost,"insert into signupid(Username,Fullname,Email,Password,register,phoneno) values('$username','$fullname','$useremail','$userpassword','$registeras','$phone')");
return $adding;
}
public function insertpatient($fullname,$date,$branch,$age,$phone)
{
$adding=mysqli_query($this->dbhost,"insert into patients(name,Branch,registerdate,Age,phoneno) values('$fullname','$branch','$date','$age','$phone')");
return $adding;
}
public function insertdoctor($username,$fullname,$useremail,$userpassword,$registeras,$branch,$phone)
{
$adding=mysqli_query($this->dbhost,"insert into signupid(Username,Fullname,Email,Password,register,phoneno) values('$username','$fullname','$useremail','$userpassword','$registeras','$phone')");
$add = mysqli_query($this->dbhost,"insert into doctors(name,branch,phoneno) values('$fullname','$branch','$phone')");
return $adding;
}
public function insertstaff($username,$fullname,$useremail,$userpassword,$registeras,$branch,$phone)
{
$adding=mysqli_query($this->dbhost,"insert into signupid(Username,Fullname,Email,Password,register,phoneno) values('$username','$fullname','$useremail','$userpassword','$registeras','$phone')");
$add = mysqli_query($this->dbhost,"insert into staffs(name,branch,phoneno) values('$fullname','$branch','$phone')");
return $adding;
}
// here is the function for signin which we will callout when we do login
public function signin($useremail,$userpassword)
{
$seeing=mysqli_query($this->dbhost,"select * from signupid where Email='$useremail' and Password='$userpassword'");
return $seeing;
}
public function viewing()
{
$seeing=mysqli_query($this->dbhost,"select * from patients ");
return $seeing;
}
public function viewingdata()
{
$seeing=mysqli_query($this->dbhost,"SELECT COUNT(name) as num, registerdate
FROM patients GROUP BY registerdate ");
return $seeing;
}
public function viewingdoc()
{
$seeing=mysqli_query($this->dbhost,"select * from doctors ");
return $seeing;
}
public function viewingstaff()
{
$seeing=mysqli_query($this->dbhost,"select * from staffs ");
return $seeing;
}

}
?>