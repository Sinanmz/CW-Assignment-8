<!DOCTYPE html>
<html>
<head>
  <title>Store form data in .txt file</title>
</head>
<body>
  <form method="post">
    Enter Your Text Here:<br>
    <input type="text" name="firstName"><br>
    <input type="text" name="lastName"><br>
    <input type="text" name="subject"><br>
    <input type="text" name="message"><br>
    <input type="submit" name="submit">
    
  </form>

</body>
</html>


<?php
$i = 1;
while(true){
  $fileName = strval($i) . ".txt"; 
  if(!file_exists($fileName)){
    break;
  }else{
    $i++;

  }
}





  if(isset($_POST['submit']))
  {
  $firstName=$_POST['firstName'];
  $lastName=$_POST['lastName'];
  $subject=$_POST['subject'];
  $message=$_POST['message'];
  $fp = fopen($fileName, 'a');

  fwrite($fp, "First Name: ");
  fwrite($fp, $firstName);
  fwrite($fp, "\n\nLast Name: ");
  fwrite($fp, $lastName);
  fwrite($fp, "\n\nSubject:");
  fwrite($fp, $subject);
  fwrite($fp, "\n\nMessage:\n");
  fwrite($fp, $message);
  fclose($fp);
}

?>