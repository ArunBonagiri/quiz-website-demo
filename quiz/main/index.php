<?php
if(!empty($_POST['login']) || !empty($_POST['signup']))
{ 
if(isset($_POST['login']))
{
  header("Location:http://localhost/quiz/main/login.html"); 
  exit;
 } 
 else if(isset($_POST['signup']))
 { 
  header("Location:http://localhost/quiz/main/register.html");
  exit;
 }
 else
 { 
  header("Location:http://localhost/quiz/main/index.html");
  exit;
 }
}
else
{
  header("Location:http://localhost/quiz/main/index.html");
  exit;
}

?>