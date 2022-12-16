<!DOCTYPE html>
<html dir="rtl">
<head>
	<title> Sina Namazi </title>
	<link rel="stylesheet" href="main.css">
	<script type = "text/javascript" src="functions.js"></script>
</head>
<body onload="Tnx()">
<div class="navibar">
  <center>
  <a class="current" href="contact.php">Contact</a>
  <a href="achievement.html">Achievements</a>
  <a href="skills.html">Skills</a>
  <a href="index.html">Home</a>
  </center>
</div>

<div class="main">
<form method="post" onsubmit="return Sub();">

    First Name<br>
    <input type="text" id="firstname" name="firstname" placeholder="first name..."><br><br>
    Last Name<br>
    <input type="text" id="lastname" name="lastname" placeholder="last name..."><br><br>
    Subject<br>
    <input type="text" id="subject" name="subject" placeholder="About..."><br><br>
    Message<br>
    <input type="text" id="message" name="message" placeholder="Type something..." style="height:160px;width:300px;"><br><br>
     <input type="submit" value="Submit" name="submit">
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
$fileName = strval($i) . ".txt"; 





  if(isset($_POST['submit']))
  {
  $firstName=$_POST['firstname'];
  $lastName=$_POST['lastname'];
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
  </form>
   
</div>
 <p id="thanksmessage" ></p>




 <footer>
  <div class="myfooter">
  <a href="mailto: sinanamazi2000@gmail.com"><img src="icons/email.png" alt="eMail"></a>
  <a href="https://github.com/Sinanmz"><img src="icons/github.png" alt="Github"></a>
  <a href="https://t.me/sina_nmz"><img src="icons/telegram.png" alt="Telegram"></a>
  <a href="https://www.linkedin.com/in/sina-namazi-6382381b9"><img src="icons/linkedin.png" alt="Linkedin"></a>
  </div>
</footer>

</body>
</html>