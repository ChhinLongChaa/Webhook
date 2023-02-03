<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>SETEC</title>
  <link rel="stylesheet" href="./style.css">

</head>
<body>


  <?php

  $token = "5885457502:AAF9vFPSQ1ZeJvuOcCrtvPSJDZ6vlhQfjOg";
  
  if(isset($_POST['submit']))
      {
  $getQuery = array(
       "chat_id" 	=> 1022302970,
       "text"  	=>  $_POST['message'],
       "parse_mode" => "html",
  );
  $ch = curl_init("https://api.telegram.org/bot". $token ."/sendMessage?" . http_build_query($getQuery));
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  curl_setopt($ch, CURLOPT_HEADER, false);
  
  $resultQuery = curl_exec($ch);
  curl_close($ch);
  
  }
  
  ?>

<main>
<div id="container">


  <form action="" method="post">
  <h5>Contect for me</h5>
    <img src="https://bit.ly/2tlJLoz"><br>
    <input type="text" name="message">
    <input type="submit" name="submit">
  </form>
</div>
</main>
  
</body>
</html>
