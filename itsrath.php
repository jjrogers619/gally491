<html>
   <head>
      <meta charset = "utf-8">
      <title>input reg</title>
      <style type = "text/css">
        html{
    background-color: #04819E;
}
body{
    background-color: ghostwhite;
    width: 447px;
    min-height: 350px;
    margin:20px auto;
    text-align: left;
    padding-left:10px;
}
header{color:#5DF951;}
.error{
    color:red;
    font-weight:bolder;
}
.pink{
color: rgb(191, 63, 191);
}
.b{
    color: rgb(226, 219, 18);
    font-style: italic;
}
.c{
    color: rgba(226, 18, 129, 0.63);
    font-style: italic;
}
.d{
    color:rgb(7, 79, 150);
    font-style: italic;
}
.e{
    color:rgb(3, 3, 47);
    font-style: italic;
}
.loopColor{
color:rgb(178, 149, 5);
font-style:italic;
}
      </style>
   </head>


<?php
  $servername = "localhost";
  $username = "techjrog_its492";
  $password = "Buster@619";
  $dbname = "techjrog_rathskellar";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
?>
<!-- end PHP script -->


  <?php
         if (preg_match( "/\d/",
                     $_POST["personLast"]))
         {
         print("<p class='error'>last name is incorrect and please use only letters</p></body></html>");

           die();
         }
      ?><!-- end PHP script -->

      <?php

         if (preg_match( "/\d/",
            $_POST["personFirst"]))
         {
         print("<p class='error'>first name is incorreect and please use only letters</p></body></html>");

           die();
         }
      ?><!-- end PHP script -->
      <?php

               if (!preg_match( "/@gallaudet/",
                  $_POST["personEmail"]))
               {
               print("<p class='error'>email is invalid and please use example@gallaudet.edu </p></body></html>");

                 die();
               }
            ?><!--end PHP script-->
<?php

         if (preg_match( "/[a-zA-Z]/",
            $_POST["personPhone"]))
         {
         print("<p class='error'>phone number is incorrect and please only digit</p></body></html>");

           die();
         }
      ?><!-- end PHP script -->






<?php
for ($i = 0; $i <4; $i++){
$str[0]="zero";
$str[1]=($_POST["personLast"]);
$str[2]=($_POST["personFirst"]);
$str[3]=($_POST["personEmail"]);

if (!preg_match("/^(?=\s*\S).*$/",$str[$i]))
{
print("<p class='error'>this string $str[$i] is empty and please fill it out");
die();
}

}

$phoneAlert=($_POST["personPhone"]);
if (!preg_match("/^\d+\.?\d*$/", $phoneAlert))
{
print("<p class='error'>phone cannot be empty </p>");
die();
}





    ?><!-- end script PHP --->
    <?php
      echo $last;

  $last = ($_POST["personLast"]);
  echo "<p class='b'>your last name $last stored in techjrogers database</p>";
   echo "&nbsp&nbsp";
  $first =($_POST["personFirst"]);
  echo "<p class='c'>your first name $first stored in techjrogers database</p>";
echo "&nbsp&nbsp";
  $email = ($_POST["personEmail"]);
  echo "<p class='d'>your email $email stored in techjrogers database</p>";
echo "&nbsp&nbsp";
  $phone = ($_POST["personPhone"]);
  echo "<p class='e'>your phone $phone is stored in techjrogers database</p>";

echo "&nbsp&nbsp";
  $sql = "INSERT INTO accountRath(rLastName,rFirstName, rEmail, rPhone)
  VALUES ('$last', '$first','$email','$phone')";

  if ($conn->query($sql) === TRUE) {
      echo "<h2 class='pink'>New record created successfully</h2>";
      echo"<h2 class='pink'>all data stored in table person</h2>";
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();
  ?>

