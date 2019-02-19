<?php
// session_start();
include("connection.php");
if(isset($_POST['login']))
{
 $username = $_POST['username'];
 $password = $_POST['password'];
 if( $username == null || $password == null)
 {
  echo "<br></br><br></br><center>Please enter valid USERNAME or PASSWORD </center>";
  echo "<center><h2><a href='http://localhost/quiz/main/login.html'>try again</a></h2></center>";
  exit;
 }
 else
 {
 $sql = "SELECT * FROM users WHERE username='".$username."' AND password='".$password."' LIMIT 1"; 
 $res = mysql_query($sql);
 if(mysql_num_rows($res) == 1)
 {
      header("Location:http://localhost/quiz/main/main.html");
      exit;
          
 } 
 else 
 { 
  echo "<br></br><br></br><center>Invalid  USERNAME or PASSWORD </center>";
  echo "<center><h2><a href='http://localhost/quiz/main/login.html'>try again</a></h2></center>";
  exit;
 }
 }
}
else
{ 
      header("Location:http://localhost/quiz/main/index.html");
      exit;
}

?>