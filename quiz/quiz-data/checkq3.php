<?php

include("quiz-3.php");
if(!empty($_POST['input_name']))
{
  $answer = unserialize($_POST['input_name']);
  //echo "answer is".$answer." ";
}
else { }
if(isset($_POST['submit']))
{
 if(!empty($_POST['checkans']))
 { 
 
  $checked_count = count($_POST['checkans']);

  foreach($_POST['checkans'] as $selected)
  {
        if($selected == $answer)
        { 
             //echo "<br></br>Previous answer is correct  " .$selected. " " ;  
             $_SESSION['score'] = $_SESSION['score'] + 1;
        }
        
    }   
     header("Location:http://localhost/quiz/quiz-data/quiz-3.php"); 

   
 }
 else{ echo "<br></br><center><h1>please select answers otherwise it not considered to your score</h1></center> "; }
}else{ echo "error"; }
?>