<?php
     echo include('start-mysql-connection.php');

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

      //    mysql_fetch_array()
      //    mysql_fetch_assoc()
      //    mysql_fetch_lengths()
      //    mysql_fetch_row() 

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



      /*
      //Way 2
      $query="SELECT id,firstname,lastname,email,password FROM user";
      $result=mysqli_query($connection,$query);
      if(mysqli_num_rows($results)){
     while( $row=mysql_fetch_row($result)){}
      $name=$row[1]; $age=$row[2];

      $msg .="<tr>";
       $msg .="<tr>$row[0]</td>";
        $msg .="<tr>$row[1]</td>";
         $msg .="<tr>$row[2]</td>";
      }

      $msg .="</table>";
 */








     }
    }

