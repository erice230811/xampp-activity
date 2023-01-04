<!DOCTYPE html>
<html>
<body>

</body> 
<?php
 $bg_color = 'yellow'; 
 echo "<body style='background-color: $bg_color;'>"; 
$firstname = "Alice";
$lastname = " Tradio";
$middlename = " Saulong";
$birthday = "July 23, 1999";
$age = "23 years old";
$gender = "female";

echo '<h1 style="color:black;font-size:60px;font-family:calibri ; text-align:center">
Welcome to my Life! </h1> ';
echo "<center>";
echo "<img src='https://i.postimg.cc/3wwDpRFC/image1-removebg-preview.png' height='200' width='200'alt='images'/>" . "<br>";

echo  '<i style="color:blue;font-size:30px;font-family:calibri ;">
      I am  </i> '. $firstname. $middlename . $lastname . "<br>" ;
echo  '<i style="color:green;font-size:30px;font-family:calibri ;">
      I was born on </i> '. $birthday . "<br>" ;
echo  '<i style="color:red;font-size:30px;font-family:calibri ;">
      I am </i> '. $age . "<br>" ;
echo  '<i style="color:violet;font-size:30px;font-family:calibri ;">
      I am </i> '. $gender. "<br>" .  "<br>" ; 
echo '<i style="color:black;font-size:20px;font-family:calibri ;">
      "The pain that you have been feeling <br>cant compare to the joy that is coming" </i> '; 
echo '<p style="color:black;font-size:20px;font-family:calibri ;">
      ********* </p> '; 
echo "</center>";
      
?>
</body>
</html>