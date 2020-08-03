<html>
<head></head>
<style>
body {
  font-family: Arial;
  background-image: url(images/flag.jpg);
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}


</style>
<body>
<!--What date Was Independence Day 0f Pakistan 00-Mon-year -->
</body>
</html>
<?php
 if (isset($_GET['date'])){
    $x = $_GET['date'];
    if($x == "14-Aug-1947"){
        echo "<script>alert('Flag{A_Quaid_e_Azam_Tera_Ehsan_hai}')</script>";
    }
 }
?>