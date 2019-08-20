<html>
<head>
    <!-- BootStrap and stylesheet-->
    <link rel="stylesheet" href="stylesheet.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Kal's Loans Application</h1>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Recipient</th>
      <th scope="col">What It's For</th>
      <th scope="col">Amount Due</th>
      <th scope="col">Last Payment Date</th>
      <th scope="col">Make A Payment</th>
    </tr>
  </thead>

<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "loansApp";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    $sql = "SELECT * FROM loans";
    $result = $conn-> query($sql); 

    if($result-> num_rows > 0) {
        // output data of each row
        while($row = $result-> fetch_assoc()) {
            echo "<tbody>
            <tr>
              <td>". $row["Recipient"] ."</td><td>". $row["Reason"] ."</td><td>". $row["Amount_Due"] ."</td><td>". $row["Last_Payment"] ."</td><td></td</tr>";
        }
        echo "</table>";
    }
    else {
        echo "All Paid Off!";
    }

    $conn-> close();
?>
</table>

<br>
<br>

<form action="insert.php" method="post">

Recipient: <input type="text" name="recipient" /><br><br>

For: <input type="text" name="reason" /><br><br>

Amount Due: <input type="text" name="amountDue" /><br><br>



 

<input type="submit" />

</form>

</body>
</html>