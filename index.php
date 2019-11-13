
<?php
  $name = "";
  $email = "";
  $contact = "";
  $address = "";
  $city = "";

  $ename = "";
  $eemail = "";
  $econtact = "";
  $eaddress = "";
  $ecity = "";

  if(isset($_POST["submit"])){

  $name = $_POST["name"];
  $email = $_POST["email"];
  $contact = $_POST["contact"];
  $address = $_POST["address"];
  $city = $_POST["city"];
  
    $er = 0;

    if($name == ""){
      $er++;
      $ename = "<span class=\"error\"> * Required</span>";
    }

    if($email == ""){
      $er++;
      $eemail = "<span class=\"error\"> * Required</span>";
    }
    
    if($contact == ""){
      $er++;
      $econtact = "<span class=\"error\"> * Required</span>";
    }

    if($city == "select"){
      $er++;
      $ecity = "<span class=\"error\"> * Required</span>";
    }

    if($address == ""){
    
    }
    else if(strlen($address) < 5){
      $er++;
      $eaddress = "<span class=\"error\"> * Must contain 5 or more character</span>";
    }

   
    
    if($er == 0){
      echo "<span class=\"success\">Data saved</span>";
      $name = "";
      $email = "";
      $contact = "";
      $address = "";
      $city = "";
    }else{

    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="" method="POST">
      <label>Name:</label><br>
      <input type="text" name="name" value="<?PHP echo $name; ?>"><?PHP echo $ename; ?><br><br>

      <label>Email:</label><br>
      <input type="text" name="email" value="<?PHP echo $email; ?>"><?PHP echo $eemail; ?><br><br>

      <label>Contact:</label><br>
      <input type="text" name="contact" value="<?PHP echo $contact; ?>"><?PHP echo $econtact; ?><br><br>

      <label>Address:</label><br>
      <textarea name="address"><?PHP echo $address; ?></textarea><?PHP echo $eaddress; ?><br><br>

      <label>City:</label><br>
      <select name="city">
        <option value="select">Select one</option>
        <option value="1">Dhaka</option>
        <option value = "2">Khulna</option>
      </select><?PHP echo $ecity; ?><br><br>

      <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>