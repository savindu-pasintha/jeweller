<?php
    echo include('start-mysql-connection.php');
?>
<?php

     //undifine error fixed to use global $variables
    
     if(isset($_POST['submit']))
     {
     //catsh the data in post array when submit
     $id=$_POST['id'];
     $fn=$_POST['firstname'];
     $ln=$_POST['lastname'];
     $e=$_POST['email'];
     $p=$_POST['password'];
     $hp=sha1($p);//password ek encript kala  hashed 
     $isdel=0;

     $query="UPDATE user SET  firstname='$_POST[firstname]',lastname='$_POST[lastname]',email='$_POST[email]',password='$hp' WHERE id='$_POST[id]'  ";
     $result=mysqli_query($connection,$query);
     if($result){ 
       echo mysqli_affected_rows($connection)."Updated";
    }else{ echo "failed update"; }

  }else{
    echo "NO-Data";
  echo  mysqli_error($con);
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
   
<form method="POST" action="" class="bg-success container border border-primary">
  
<div class="form-group">
    <label for="inputAddress">ID</label>
    <input type="text" name="id" required class="form-control" id="inputAddress" placeholder="ID">
  </div>
  <div class="form-group">
    <label for="inputAddress">First Name</label>
    <input type="text" name="firstname" required class="form-control" id="inputAddress" placeholder="First Name">
  </div>
  <div class="form-group">
    <label for="inputAddress">Last Name</label>
    <input type="text" name="lastname" required class="form-control" id="inputAddress" placeholder="Last Name">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" required class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>


<?php  //undifine error fixed to use global $variables
     global  $ide;
     global  $fne;
     global  $lne;
     global  $ee;
     global  $pe;
     global  $ie;
     
     $query="SELECT id,firstname,lastname,email,password FROM user";
     $result=mysqli_query($connection,$query);
    
     if(mysqli_num_rows($result) > 0){ 
        while($row = mysqli_fetch_assoc($result)) { 
        //put data to array stored
      $ide[$ie]=$row['id'];
      $fne[$ie]= $row['firstname'];
      $lne[$ie]= $row['lastname'];
      $ee[$ie]=$row['email'];
      $pe[$ie]=$row['password'];
      $ie++;
      /*
       $id= array();
       for ($i = 0; $i<=$row; $i++)
       $id[$i] = $row;
      */
     }
    }
 ?>

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
      <td><?php  foreach($ide as $ides){  echo "{$ides}   <br>" ;}   ?> </td>
      <td><?php  foreach($fne as $fnes){  echo "{$fnes}   <br>" ;}   ?></td>
      <td><?php  foreach($lne as $lnes){  echo "{$lnes}   <br>" ;}   ?></td>
      <td><?php  foreach($ee as  $ees)  {  echo "{$ees}    <br>" ;}   ?></td>
      <td><?php  foreach($pe as $pes)  {  echo "{$pes}    <br>" ;}   ?></td>
    </tr>
  </tbody>
</table>
</body>
</html>