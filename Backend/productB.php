<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript">
        function clickme(id, name, code, color, material, price, gender, description, weight, image, quentity, type) {
            //jquery
            $(document).ready(function() {
                $("#Id").val(id);
                $('#Name').val(name);
                $('#Code').val(code);
                $('#Color').val(color);
                $('#Material').val(material);
                $('#Price').val(price);
                $('#Gender').val(gender);
                $('#Description').val(description);
                $('#Weight').val(weight);
                $('#Image').val(image);
                $('#Quentity').val(quentity);
                $('#Type').val(type);
            });
        }
    </script>
    <style>
        .maincol2 {
            background-color: white;
            width: 100%;
            height: 400px;
            padding: 0;
            margin: 0;
            border-right: 1px solid black;
        }

        .maincol3 {
            background-color: white;
            height: 400px;
            padding: 0;
            margin: 0;
        }

        .col-md-10 {
            margin: 0;
            padding: 0;
        }



        #imagebackendClick {
            width: 100%;
            height: 150px;
        }

        #formbackend {
            width: 100%;
        }

        #formbackend input {
            width: 100%;
            border: 1px solid black;
            padding: 2px;
            margin: 10px;
        }

        #divbtn {
            width: 100%;
            height: 50px;
        }

        #divbtn button {
            width: 33.3%;
            height: 50px;
        }
    </style>
</head>

<body>
    <div class="row">
        <div id="col5" class="col-md-5 w-50  maincol maincol2">
            <div class="overflow-auto bg-light" style="width:100%; height:100%;">
                <ul>
                    <?php
                    include('../Database-php/start-mysql-connection.php');
                    $queryshow = 'SELECT * FROM productshow';
                    $result = mysqli_query($connection, $queryshow);
                    if (mysqli_num_rows($result) > 0) {
                        $i = 0;
                        while ($rowCol = mysqli_fetch_assoc($result)) {
                            if (isset($rowCol)) {
                                $id[$i] = $rowCol['id'];
                                $code[$i] = $rowCol['code'];
                                $color[$i] = $rowCol['color'];
                                $material[$i] = $rowCol['material'];
                                $weight[$i] = $rowCol['weight'];
                                $name[$i] = $rowCol['name'];
                                $gender[$i] = $rowCol['gender'];
                                $description[$i] = $rowCol['description'];
                                $mainimage[$i] = $rowCol['mainimage'];
                                $price[$i] = $rowCol['price'];
                                $quentity[$i] = $rowCol['quentity'];
                                $type[$i] = $rowCol['type'];
                                $i++;
                            }
                        }

                        $c = count($id); //ength of array
                        //  echo print_r($id);
                        $i = 0;
                        for ($i = 0; $i < $c; $i++) {
                    ?>
                            <li class="dropdown-item">
                                <img id="imagebackendClick" onclick="clickme(
                                         '<?php echo $id[$i]; ?>',
                            '<?php echo $name[$i]; ?>'
                            ,'<?php echo $code[$i]; ?>'
                            ,'<?php echo $color[$i]; ?>'
                            ,'<?php echo $material[$i]; ?>'
                            ,'<?php echo $price[$i]; ?>'
                            ,'<?php echo $gender[$i] ?>' 
                            ,'<?php echo $description[$i]; ?>'
                             ,'<?php echo $weight[$i] ?>' 
                            ,'<?php echo $mainimage[$i]; ?>'
                            ,'<?php echo $quentity[$i]; ?>'
                               ,'<?php echo $type[$i]; ?>'
                            );" id=" clickme" src="<?php echo $mainimage[$i]; ?>" width="100%" height="150px" alt="">
                                <input type="hidden" value="<?php echo $id[$i]; ?>" class="form-control" id="id" placeholder="Id">
                                <input type="hidden" value="<?php echo  $name[$i]; ?>" class="form-control" id="name" placeholder="Name">
                                <input type="hidden" value="<?php echo  $code[$i]; ?>" class="form-control" id="code" placeholder="Code">
                                <input type="hidden" value="<?php echo  $color[$i]; ?>" class="form-control" id="color" placeholder="Color">
                                <input type="hidden" value="<?php echo  $material[$i]; ?>" class="form-control" id="material" placeholder="Material">
                                <input type="hidden" value="<?php echo  $quentity[$i]; ?>" class="form-control" id="quentity" placeholder="Amount">
                                <input type="hidden" value="<?php echo  $price[$i]; ?>" class="form-control" id="price" placeholder="Price">
                                <input type="hidden" value="<?php echo  $type[$i]; ?>" class="form-control" id="type" placeholder="Type">
                                <input type="hidden" value="<?php echo  $weight[$i]; ?>" class="form-control" id="weight" placeholder="Weight">
                                <input type="hidden" value="<?php echo  $mainimage[$i]; ?>" class="form-control" id="image" placeholder="Image">
                                <input type="hidden" value="<?php echo  $gender[$i]; ?>" class="form-control" id="gender" placeholder="Gender">
                                <input type="hidden" value="<?php echo  $description[$i]; ?>" class="form-control" id="description" placeholder="Description">
                            </li>

                    <?php
                        }
                    }
                    include('../Database-php/close-mysql-connection.php');
                    ?>
                </ul>
            </div>
        </div>

        <div id="col6" class="col-md-5 w-50  maincol maincol3">
            <div class="overflow-auto bg-light" style="width:100%; height:100%;">
                <ul>
                    <li class="dropdown-item">
                        <div class="text-center">
                            <img style="width:150px; height:150px" src="<?php echo fileupload(); ?>" width="100%" height="150px" alt="">
                            <form action="" method="POST" enctype="multipart/form-data">
                                <input accept="image/*" type="file" name="fileToUpload" id="fileToUpload">
                                <button type="submit" name="filesubmit" class="btn btn-dark">upload</button>
                            </form>
                        </div>
                        <div class="text-center">
                            <form method="POST" action="" id="formbackend" class="bg bg-light" class="text-center">
                                <input type="text" class="form-control" placeholder="----Id" id="Id" name="Ida">
                                <input type="text" class="form-control" placeholder="----Name" id="Name" name="Namea">
                                <input type="text" class="form-control" placeholder="----Code" id="Code" name="Codea">
                                <input type="text" class="form-control" placeholder="----Color" id="Color" name="Colora">
                                <input type="text" class="form-control" placeholder="----Material" id="Material" name="Materiala">
                                <input type="text" class="form-control" placeholder="----Amount" id="Quentity" name="Quentitya">
                                <input type="text" class="form-control" placeholder="----Price" id="Price" name="Pricea">
                                <input type="text" class="form-control" placeholder="----Type" id="Type" name="Typea">
                                <input type="text" class="form-control" placeholder="----Weight" id="Weight" name="Weighta">
                                <input type="text" class="form-control" placeholder="----Image" id="Image" name="Imagea">
                                <input type="text" class="form-control" placeholder="----Gender" id="Gender" name="Gendera">
                                <input type="text" class="form-control" placeholder="----Description" id="Description" name="Descriptiona">
                                <div id="divbtn">
                                    <button type="submit" name="adda" class="btn btn-info">Add</button>
                                    <button type="submit" name="updatea" class="btn btn-dark">Update</button>
                                    <button type="submit" name="deletea" class="btn btn-danger">Delete</button>
                                </div>
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</body>
<?php
echo ee();

function exequery($sqlquery)
{
    try {
        include('../Database-php/start-mysql-connection.php');
        //inser customer
        $result = mysqli_query($connection, $sqlquery);
        if ($result > 0) {
            $res = 1;
        } else {
            $res = 0;
        }
        include('../Database-php/close-mysql-connection.php');
    } catch (Exception $e) {
        $res = 0;
    }

    return $res;
}
function ee()
{
    if (isset($_POST["updatea"]) && isset($_POST["Ida"]) && isset($_POST["Codea"])) {
        $imageName = fileupload(); //image save
        $img = "";
        if (!empty($imageName)) {
            $img = $imageName;
        } else {
            $img = $_POST["Imagea"];
        }
        $query = "UPDATE productshow SET id='{$_POST["Ida"]}',code='{$_POST["Codea"]}',color='{$_POST["Colora"]}',material='{$_POST["Materiala"]}',weight='{$_POST["Weighta"]}',name='{$_POST["Namea"]}',gender='{$_POST["Gendera"]}',description='{$_POST["Descriptiona"]}',mainimage='{$img}',price='{$_POST["Pricea"]}',quentity='{$_POST["Quentitya"]}',type='{$_POST["Typea"]}' WHERE id='{$_POST["Ida"]}' ";
        if (1 == exequery($query)) {
            echo '<script type="text/javascript"> alert(" success ."); </script>';
        } else {
            echo '<script type="text/javascript"> alert(" failed ."); </script>';
        }
        $query = 0;
    }
    if (isset($_POST["deletea"]) && isset($_POST["Ida"])) {
        $query = "DELETE FROM productshow WHERE id='{$_POST["Ida"]}'";
        if (1 == exequery($query)) {
            echo '<script type="text/javascript"> alert(" success ."); </script>';
        } else {
            echo '<script type="text/javascript"> alert(" failed ."); </script>';
        }
        $query = 0;
    }
    if (isset($_POST["adda"]) && isset($_POST["Ida"]) && isset($_POST["Codea"])) {
        $imageName = fileupload(); //image save
        $img = "";
        if (!empty($imageName)) {
            $img = $imageName;
        } else {
            $img = $_POST["Imagea"];
        }
        $query = "INSERT INTO productshow (type,code,quentity,gender,description,color,name,price,weight,mainimage) VALUES('{$_POST["Typea"]}', '{$_POST["Codea"]}', '{$_POST["Quentitya"]}', '{$_POST["Gendera"]}', '{$_POST["Descriptiona"]}', '{$_POST["Colora"]}', '{$_POST["Namea"]}', '{$_POST["Pricea"]}', '{$_POST["Weighta"]}', '{$img}')";
        if (1 == exequery($query)) {
            echo '<script type="text/javascript"> alert(" success ."); </script>';
        } else {
            echo '<script type="text/javascript"> alert(" failed ."); </script>';
        }
        $query = 0;
    }
}
function fileupload()
{

    $target_dir = "images/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    if (isset($_POST["filesubmit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if ($check !== false) {
            //  echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            //    echo "File is not an image.";
            $uploadOk = 0;
        }
    }

    // Check if file already exists
    if (file_exists($target_file)) {
        // echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 500000) {
        //   echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if (
        $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif"
    ) {
        //  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        // echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            //  echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
            $uploadedfilename = htmlspecialchars(basename($_FILES["fileToUpload"]["name"]));
        } else {
            //echo "Sorry, there was an error uploading your file.";
        }
    }

    return $uploadedfilename;
}
?>

</html>