<!DOCTYPE html>
<html lang="en">
<head>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <?php
        echo "<table class='table table-striped'>
                <thead>
                  <tr>
                    <th scope='col'>Recipient</th>
                    <th scope='col'>What It's For</th>
                    <th scope='col'>Amount Due</th>
                    <th scope='col'>Last Payment Date</th>
                    <th scope='col'>Make a Payment</th>
                    <th scope='col'>Payment History</th>
                  </tr>
                </thead>
                <tr>
                        <td>. ['Recipient'] .</td>
                        <td>. ['Reason'] .</td>
                        <td>. ['Amount_Due'] .</td>
                        <td>. ['Last_Payment'] .</td>
                        <td> <form action='modify.php' method='post'>            
                             <input class='payment' type='text' name='amount' /> <input class='hidden' type='text' name='id' value='" . $row['ID'] . " ' /> <input class='submit' type='submit' />
                        </form></td>
                        <td><div class='dropdown show'>
                        <a class='btn dropdown-toggle historyDrop' href='#' role='button' id='dropdownMenuLink' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                          History
                        </a>
                      
                        <div class='dropdown-menu' aria-labelledby='dropdownMenuLink'>
                        <table class='table table-striped'>
                        <thead>
                          <tr>
                            <th scope='col'>Date</th>
                            <th scope='col'>Amount</th>
                          </tr>
                        </thead>
                        <tbody><tr>
                                <td> TEST 1 </td>
                                <td> TEST 1 </td>
                               <td>. ['transaction_date'] .</td>
                                <td>. ['Amount'] .</tbody></table>
                                </tbody></div>
                            </div></td>
                        </div></td></tr></tbody></table></table></table>"
    ?>


    
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>