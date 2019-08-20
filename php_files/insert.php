<html>

<body>

 

 

<?php

$conn = mysqli_connect("localhost","root","root");

if ($conn == false)

  {

  die('Could not connect: ' . mysqli_connect_error());

  }



 

$sql="INSERT INTO loansApp.Loans(Recipient, Reason, Amount_Due)

VALUES

 
 ('$_POST[recipient]', '$_POST[reason]','$_POST[amountDue]');";


 

if (mysqli_query($conn, $sql))

  {
  echo "1 record added";
 }

else{
    echo "Not able to execute $sql. " . mysqli_error($conn);
}



 

mysqli_close($conn);

?>

<a href="index.php"> <p>Back</p></a>

</body>

</html>