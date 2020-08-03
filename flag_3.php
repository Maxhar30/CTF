<?php
$cookie_name = "user";
$cookie_value = "9b7e21866926df6dc3f12babaeafe2b9";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial;
  background-image: url(images/cookies.jpg);
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}

* {
  box-sizing: border-box;
}


form.cmd button {
  margin-top: 20%;
  width: 20%;
  padding: 20px;
  background: #2196F3;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none;
  cursor: pointer;
}

form.cmd button:hover {
  background: #0b7dda;
}

form.cmd::after {
  content: "";
  clear: both;
  display: table;
}
</style>
</head>
<body>
<center>
<form class="cmd" action="flag_3.php" method="POST">
  <button type="submit" name="btn" onclick="alert('Hmm Yammy Thanks Alex Porter but admin cookies were more tasty');">Feed Me</button>
</form> 
<?php
if(!isset($_COOKIE[$cookie_name])) {
  echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
  if($_COOKIE[$cookie_name] == "21232f297a57a5a743894a0e4a801fc3"){
    echo "<br><h1>Okay You Got Me Here is your Flag </h1><!--RmxhZ3tIQXJkX1cwcktfMXNfS2VZX3QwX1N1Q2NlU3N9 -->";
}
}

?>
</center>
</body>
</html> 

