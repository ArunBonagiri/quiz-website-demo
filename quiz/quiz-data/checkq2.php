<?php

include("quiz-2.php");
if(!empty($_POST['input_name']))
{
  $answear = unserialize($_POST['input_name']);
  //echo "answear is".$answear." ";
}
else { }
if(isset($_POST['submit']))
{
 if(!empty($_POST['checkans']))
 { 
 
  $checked_count = count($_POST['checkans']);

  foreach($_POST['checkans'] as $selected)
  {
        if($selected == $answear)
        { 
             //echo "<br></br>Previous answear is correct  " .$selected. " " ;  
             $_SESSION['score'] = $_SESSION['score'] + 1;
        }
        
    }   
    // header("Location:http://localhost/quiz/quiz-data/quiz-2.php"); 

   
 }
 else{ echo "<br></br><center><h1>please select answers otherwise it not considered to your score</h1></center> "; }
}else{ echo "error"; }
?>