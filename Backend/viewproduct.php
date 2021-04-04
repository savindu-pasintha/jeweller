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
    <div id="order">
        <table class="table table-dark">
            <thead>
                <tr>

                    <th scope="col">ID</th>
                    <th scope="col">Code</th>
                    <th scope="col">Color</th>
                    <th scope="col">Material</th>
                    <th scope="col">Weight</th>
                    <th scope="col">Name</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Description</th>
                    <th scope="col">Imageurl</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quentity</th>
                    <th scope="col">Type</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php
                    include('../Database-php/start-mysql-connection.php');
                    $queryshow = 'SELECT * FROM productshow';
                    $result = mysqli_query($connection, $queryshow);
                    if (mysqli_num_rows($result) > 0) {
                        $i = 0;
                        $rowCol = 0;
                        while ($rowCol = mysqli_fetch_assoc($result)) {
                            if (isset($rowCol)) {

                    ?>
                <tr>
                    <td><?php echo $rowCol["id"]; ?></td>
                    <td><?php echo $rowCol["code"]; ?></td>
                    <td><?php echo $rowCol["color"]; ?></td>
                    <td><?php echo $rowCol["material"]; ?></td>
                    <td><?php echo $rowCol["weight"]; ?></td>
                    <td><?php echo $rowCol["name"]; ?></td>
                    <td><?php echo $rowCol["gender"]; ?></td>
                    <td><?php echo $rowCol["description"]; ?></td>
                    <td><?php echo $rowCol["mainimage"]; ?></td>
                    <td><?php echo $rowCol["price"]; ?></td>
                    <td><?php echo $rowCol["quentity"]; ?></td>
                    <td><?php echo $rowCol["type"]; ?></td>
                </tr>
    <?php }
                        }
                    }
                    include('../Database-php/close-mysql-connection.php');
    ?>
    </tr>

            </tbody>
        </table>
    </div>
</body>

</html>