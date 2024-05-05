
<?php 
  $conn = mysqli_connect('localhost','root','','info'); 
  if($conn){ 
      echo "Success"; 
  } 
  else{ 
      echo "Failure"; 
  } 
  $text = $_POST['text']; 
  $sql = "INSERT INTO info(info) VALUES ('$text')"; 
  mysqli_query($conn,$sql); 
?>
