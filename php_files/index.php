<html>
<head>
    <!-- BootStrap and stylesheet-->
    <link rel="stylesheet" href="stylesheet.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        td{
            text-align: left;
            }
        
        .payment {
            width: 75px;
        }

        .submit {
            width: 65px;
        }

        .hidden {
           display: none; 
        }

    </style>
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
      <th scope="col">Make a Payment</th>
      <th scope="col">Payment History</th>
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
            <td>". $row["Recipient"] ."</td>
            <td>". $row["Reason"] ."</td>
            <td>". $row["Amount_Due"] ."</td>
            <td>". $row["Last_Payment"] ."</td>
            <td> <form action='modify.php' method='post'>            
                 <input class='payment' type='text' name='amount' /> <input class='hidden' type='text' name='id' value='" . $row["ID"] . "' /> <input class='submit' type='submit' />
            </form></td>
            <td><link>History</link></td</tr>";
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


<div class="container">
  <div class="row">
    <div class="col">
      <!-- form to insert !-->
<H2>Add A Loan</H2>
<form action="insert.php" method="post">

Recipient: <input type="text" name="recipient" /><br><br>

For: <input type="text" name="reason" /><br><br>

Amount Due: <input type="text" name="amountDue" /><br><br>

<input type="submit" />

</form>

    </div>
    <div class="col">
     
    <!-- form to modify !-->
      <!-- <H2>Make A Payment</H2>
<form action="modify.php" method="post">

Loan ID: <input type="text" name="id" /><br><br>

Amount: <input type="text" name="amount" /><br><br>

<input type="submit" />

</form> -->
    </div>
  </div>
</div>




</body>
</html>