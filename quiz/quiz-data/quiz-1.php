<html>
<head></head>
<br></br>
<h1><center>Quiz 1</center></h1> 
<?php 
 
 session_start(); 
 
 if(empty($_SESSION['count'])) $_SESSION['count'] = 0; 
 $order =  $_SESSION['count']+1;
 $no = $order;
 $_SESSION['count'] =  $order; 
 
 if(empty($_SESSION['score'])){ $_SESSION['score'] = 0; }     
 include("connection.php");
 
 $answer;          
 $sql = "SELECT * FROM questions1 WHERE id='$no'" ; 
 $result = mysql_query ($sql) or die (mysql_error ()); 


 if($order > 11) 
 {
    echo "<body><br><br><br><center><h1>Your score is ".$_SESSION['score']."</h1> ";
    echo "<br><h3><a href = 'http://localhost/quiz/main/main.html'>Go to Home</a> </h3></center></body>";
    $_SESSION['count'] = 0;
    exit;

 }
 else
 {
 while ($row = mysql_fetch_array ($result))
 {
 ?>  
    <body>
    <center><br></br>
    <form action='checkq1.php' method='post'>
    <h2><?php echo $row ['id']; ?>.<?php echo $row ['question_name']; ?> </h2>
    <table>
     <tr>
         <td>  
       
         <label><h4><input type="radio" id="myRadio" name="checkans[]" value="1" onclick=""> a)  <?php echo $row ['answer1']; ?> </h4></label>
         <label><h4><input type="radio" id="myRadio" name="checkans[]" value="2" onclick=""> b)  <?php echo $row ['answer2']; ?> </h4></label>
         <label><h4><input type="radio" id="myRadio" name="checkans[]" value="3" onclick=""> c)  <?php echo $row ['answer3']; ?> </h4></label>
         <label><h4><input type="radio" id="myRadio" name="checkans[]" value="4" onclick=""> d)  <?php echo $row ['answer4']; ?> </h4></label>
       
         <?php
       
            if($row['answear'])
            {
              
                $answer = $row['answear'];            
       
            }         
          ?>
       <input type='hidden' name='input_name' value="<?php echo htmlentities(serialize($answer)); ?>" />  
       <br></br>
       <input class='big_b' type='submit' name='submit'  value='submit' />        
       </td>
     </tr>
    </table> 
    </center>
    </form>    
  
   <?php
    }  
    } 
   ?>
  </body>
</html>   