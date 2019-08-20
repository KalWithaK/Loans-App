<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Extension</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/custom.css">
</head>

<body>

    <table class="table table-striped">
    <thead>
        <tr>
        <th scope="col">Recipient</th>
        <th scope="col">What It's For</th>
        <th scope="col">Amount Due</th>
        <th scope="col">Last Payment Date</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <td>$row["Recipient"]</td>
        <td>$row["For"]</td>
        <td>$row["Amount Due"]</td>
        <td>$row["Last_Payment"]</td>
        </tr>
    </tbody>
    </table>

</body>

<?php

            $server = mysql_connect("localhost","root", "root");
            $db =  mysql_select_db("loansApp", $server);
            $query = mysql_query("select * from loans");
        ?>
        <table class="striped">
            <tr class="header">
                <td>Recipient</td>
                <td>For</td>
                <td>Amount</td>
                <td>Date</td>
            </tr>
            <?php
               while ($row = mysql_fetch_array($query)) {
                   echo "<tr>";
                   echo "<td>".$row[Recipient]."</td>";
                   echo "<td>".$row[Reason]."</td>";
                   echo "<td>".$row[Amount_Due]."</td>";
                   echo "<td>".$row[Last_Payment]."</td>";
                   echo "</tr>";
               }

            ?>
        </table>