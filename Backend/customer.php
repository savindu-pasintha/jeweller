<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</head>

<body>
    <div id="customer">
        <table class="table table-dark">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First</th>
                    <th>Last</th>
                    <th>Company</th>
                    <th>ADD1</th>
                    <th>ADD2</th>
                    <th>Postal</th>
                    <th>City</th>
                    <th>Province</th>
                    <th>Email</th>
                    <th>ID OR PASS</th>
                    <th>Mobile</th>
                    <th>Date</th>

                </tr>
            </thead>
            <tbody>
                <?php
                include('../Database-php/start-mysql-connection.php');
                $queryshow = 'SELECT * FROM customer';
                $result = mysqli_query($connection, $queryshow);
                if (mysqli_num_rows($result) > 0) {
                    $i = 0;
                    $rowCol = 0;
                    while ($rowCol = mysqli_fetch_assoc($result)) {
                        if (isset($rowCol)) {

                ?>
                            <tr>
                                <td><?php echo $rowCol["id"]; ?></td>
                                <td><?php echo $rowCol["firstname"]; ?></td>
                                <td><?php echo $rowCol["lastname"]; ?></td>
                                <td><?php echo $rowCol["company"]; ?></td>
                                <td><?php echo $rowCol["lineone"]; ?></td>
                                <td><?php echo $rowCol["linetwo"]; ?></td>
                                <td><?php echo $rowCol["postalcode"]; ?></td>
                                <td><?php echo $rowCol["city"]; ?></td>
                                <td><?php echo $rowCol["province"]; ?></td>
                                <td><?php echo $rowCol["email"]; ?></td>
                                <td><?php echo $rowCol["idorpassport"]; ?></td>
                                <td><?php echo $rowCol["mobile"]; ?></td>
                                <td><?php echo $rowCol["date"]; ?></td>
                            </tr>
                <?php }
                    }
                }
                include('../Database-php/close-mysql-connection.php');
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>