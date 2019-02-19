<?php
 
include("connection.php");
if(isset($_POST['signup']))
{
 $username = $_POST['username'];
 $password1 = $_POST['password1'];
 $password2 = $_POST['password2'];
 $email = $_POST['email'];
 $check = "";

 if (empty($username))
  {
   echo "<br></br><br></br><center>Please enter your full name</center>";
   echo "<center><h2><a href='http://localhost/quiz/main/register.html'>try again</a></h2></center>";
   exit;
  }
   else if (strlen($username) < 3)
  {
   
   echo "<br></br><br></br><center>Name must have atleat 3 characters</center>";
   echo "<center><h2><a href='http://localhost/quiz/main/register.html'>try again</a></h2></center>";
   exit;
  }
  else if (!preg_match("/^[a-zA-Z ]+$/",$username))
  {  
   echo "<br></br><br></br><center>Name must contain alphabets and space</center>";
   echo "<center><h2><a href='http://localhost/quiz/main/register.html'>try again</a></h2></center>";
   exit;
  } 
   else if (empty($password1))
  {
     echo "<br></br><br></br><center>Please enter password</center>";
     echo "<center><h2><a href='http://localhost/quiz/main/register.html'>try again</a></h2></center>";
     exit;
  }
  else if(strlen($password1) < 6)
  {
    echo "<br></br><br></br><center>Password must have atleast 6 characters</center>";
    echo "<center><h2><a href='http://localhost/quiz/main/register.html'>try again</a></h2></center>";
    exit;  

  }
  else if($password1 != $password2)
   {
     echo "<br></br><br></br><center>Please enter same password again</center>";
     echo "<center><h2><a href='http://localhost/quiz/main/register.html'>try again</a></h2></center>";
     exit;
   }
  else if ( !filter_var($email,FILTER_VALIDATE_EMAIL) )
  {
    echo "<br></br><br></br><center>Please enter valid email address</center>";
    echo "<center><h2><a href='http://localhost/quiz/main/register.html'>try again</a></h2></center>";
    exit;  
  
  }
  else 
  {    
    $sql = "INSERT INTO users(username, password, email) VALUES('$username', '$password2', '$email')";
    mysql_query($sql);
    header("Location:http://localhost/quiz/main/login.html"); 
    exit;
  }
}
else
{
   echo "<center><h2><a href='http://localhost/quiz/main/index.html'>Go Back</a></h2></center>";
   exit;
}

?>