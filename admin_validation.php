<?php
$x=$_POST['un'];
$y=$_POST['pwd'];
$username="root";
$password="";
$databasename="miniproject";
$conn=new mysqli($servername,$username,$password,$databasename);
$sql="SELECT * from admin where username=$x and pwd=$y";
$result=$conn->query($sql);
if($result->num_rows==1){
    header("location:admin.html");
}
else{
    echo "<h2>Enter valid details<h2>";
    echo "<a href='validation.html'>Click here</a>";
}
?>