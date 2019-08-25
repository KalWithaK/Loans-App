<html>
<body>

<?php

$conn = mysqli_connect("localhost","root","root");

if ($conn == false)

  {

  die('Could not connect: ' . mysqli_connect_error());

  }


$sql="UPDATE loansApp.Loans
SET Amount_Due = (Amount_Due - $_POST[amount]), Last_Payment = NOW()
WHERE ID = $_POST[id];";

$sqlDelete="DELETE FROM loansApp.Loans
WHERE ID = $_POST[id];";


if (mysqli_query($conn, $sql)) {
    $amount_due = mysqli_query("SELECT Amount_Due FROM loansApp.Loans WHERE ID = $POST[id];");
    $results = mysqli_fetch_object($amount_due);  

    if($results == 0){
        echo "Congratulations! You Have Paid Off This Loan!";
        } 
    echo "Thank you for your payment!";
 }

else{
    echo "Not able to execute $sql. " . mysqli_error($conn);
}





 

mysqli_close($conn);

?>

<a href="index.php"> <p>Back</p></a>

</body>

</html>