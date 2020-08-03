<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial;
}

* {
  box-sizing: border-box;
}

form.cmd input[type=text] {
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 80%;
  background: #f1f1f1;
}

form.cmd button {
  float: left;
  width: 20%;
  padding: 10px;
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

<h2>Note: All commands Won't work</h2>

<form class="cmd" action="your_cmd.php">
  <input type="text" placeholder="Enter Your command" name="cmd">
  <button type="submit"><i class="fa fa-search"></i></button>
  <?php 
  if (isset($_GET['cmd'])){
  $x = $_GET['cmd'];
  if($x == "ls"){
    echo "<br>";
    echo "<br>";
    echo "css<br>";
    echo "fonts<br>";
    echo "images<br>";
    echo "js<br>";
    echo "index.html<br>";
    echo "your_cmd.php<br>";
    echo "flag_2.php<br>";
    echo "flag_3.php<br>";
    echo "flag_4.php<br>";
    echo "flag_5";
}if($x == "whoami"){
  echo "root";
}if($x == "cat flag_5"){
  echo "Flag{Y0u_are_Amaz1ng}";
}
  }
  
   ?>
</form> 

<!-- Some Files Can be viewed only here -->

</body>
</html> 
