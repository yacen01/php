<?php
 require ('connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Count</title>
</head>
<style>
 .container{
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  flex-direction: column;
  font-family: monospace;
  font-size: 20px;
 }
 input{
  padding: 15px 20px;
  border: 2px solid black;
  outline: none;
  border-radius: 15px;
  font-family: monospace;
  font-size: 25px;
  margin: 25px;
 }
</style>
<body>
 <div class="container">
 <form class="" method="post">
  <input type="submit" value="click here" name="btn">
 </form>
 <?php
  $btn = $_POST["btn"];
  if(isset($btn)){
   $query = "SELECT count(*) AS total FROM nobels";
   $response = mysqli_query($connect,$query);
   $data = mysqli_fetch_assoc($response);
   echo $data['total'];
  }
 ?>
 </div>
</body>
</html>