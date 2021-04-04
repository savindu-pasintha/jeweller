<?php
    echo include('start-mysql-connection.php');
?>
<?php

     //undifine error fixed to use global $variables
     global  $id;
     global  $fn;
     global  $ln;
     global  $e;
     global  $p;
     global  $i;


     $query="SELECT id,firstname,lastname,email,password FROM user";
     $result=mysqli_query($connection,$query);
    
     if(mysqli_num_rows($result) > 0){ 
        while($row = mysqli_fetch_assoc($result)) { 
        //put data to array stored
      $id[$i]=$row['id'];
      $fn[$i]= $row['firstname'];
      $ln[$i]= $row['lastname'];
      $e[$i]=$row['email'];
      $p[$i]=$row['password'];
      $i++;
      /*
       $id= array();
       for ($i = 0; $i<=$row; $i++)
       $id[$i] = $row;
      */
     }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</head>
<body>
   
  <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
    </tr>
  </thead>

  <tbody>
    <tr>
      <td><?php  foreach($id as $ids){  echo "{$ids}   <br>" ;}   ?> </td>
      <td><?php  foreach($fn as $fns){  echo "{$fns}   <br>" ;}   ?></td>
      <td><?php  foreach($ln as $lns){  echo "{$lns}   <br>" ;}   ?></td>
      <td><?php  foreach($e as $es)  {  echo "{$es}    <br>" ;}   ?></td>
      <td><?php  foreach($p as $ps)  {  echo "{$ps}    <br>" ;}   ?></td>
    </tr>
  </tbody>
</table>
</body>
</html>