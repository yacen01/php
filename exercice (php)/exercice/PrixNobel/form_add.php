<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Add New</title>
</head>
<style>
 body{
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  background-color: #686887;
 }
 form{
  display: flex;
  flex-direction: column;
  background-color: #eee;
  padding: 10px 20px;
  border-radius: 10px;
  font-family: monospace;
  font-size: 18px;
  width: 500px;
 }
 input,textarea{
  width: 90%;
  padding: 8px;
  margin: 5px auto;
  border-radius: 10px;
  border: none;
  outline: none;
 }
 textarea{
  resize: none;
 }
 input[type='submit']{
  background-color: #fff;
  font-family: monospace;
  font-size: 20px;
  font-weight: bold;
  cursor: pointer;
 }
</style>
<body>
  <form method="post">
   <label for="">name : </label>
   <input type="text" name="name">
   <label for="">year</label>
   <input type="number" name="year">
   <label for="">Birth Date</label>
   <input type="date" name="birth">
   <label for="">Birth Place</label>
   <input type="text" name="place" id="">
   <label for="">Country</label>
   <input type="text" name="country" id="">
   <?php
   require 'modal.php';
   $arr = new Modal();
   $cats = $arr->get_categories();
   foreach($cats as $cat){
    echo $cat.'<input type="radio" name="cat" value='.$cat.'>';
   }
   ?>
   <textarea name="nobel"  rows="2"></textarea>
   <input name="submit" type="submit" value="Add">
  </form>
  <?php
  function check_data(){
   
  }
  ?>
</body>
</html>