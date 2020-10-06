<html>
  <head>
    <title>PHP Day One Assignment</title>
  </head>
  <body>
  <?php  
  /* 
  Name: Jamil Matheny
  Date: 10/06/2020
  Class: CIS224

  */



  $firstName = 'Jamil';
  $lastName = 'Matheny';

  $fullName = $firstName . " " . $lastName;

  /* Using a for loop to count 5 times the print statement and my full name */
  for($j = 0; $j < 5; $j++) {

    echo "<br />";
    
    echo "Hi, my name is: " . $fullName;
    echo "<br />";
  }

  // Using a for loop as a countdown sequence using the '$x' variable.
    echo "<br />";
    echo "Ready for the countdown sequence at: ";
    echo "<br />";

  $x = "10";

  for($i = 0; $i < 10; $i++){

    echo "<br />";

   
    echo $x--;  // print variable $x-- as a decrementing order
    
  }
    echo "<br />";

    echo "Blast Off!";

    echo "<br />";

  // Variable for my age.
  $y = '34';

  echo "<br />";
  
  // Decision statement to verify age.
  if($y = 21) {

    echo "You can have a drink. :)";

  }

  else {

    echo "No drink for you.";
  }



  ?>


  </body>
</html>
