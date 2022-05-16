<?php
@include 'config.php';
session_start();
if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}

$sql = "select * from user_form";
$result = $conn->query($sql);
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin page</title>

   <link rel="stylesheet" href="css/style.css">

</head>
<style>
      table {
         margin: 0 auto;
         font-size: large;
         border: 1px solid black;
      }

      h1 {
         text-align: center;
         color: #006600;
         font-size: xx-large;
         font-family: 'Gill Sans', 'Gill Sans MT',
         ' Calibri', 'Trebuchet MS', 'sans-serif';
      }

      td {
         background-color: #E4F5D4;
         border: 1px solid black;
      }

      th,
      td {
         font-weight: bold;
         border: 1px solid black;
         padding: 10px;
         text-align: center;
      }

      td {
         font-weight: lighter;
      }
   </style>
<body>
   
<div class="container">

   <div class="content">
      <h3>hi, <span>admin</span></h3>
      <h1>welcome <span><?php echo $_SESSION['admin_name'] ?></span></h1>
      <p>this is an admin page</p>
      <br />
      <section>
      <h1>View table</h1>
      <!-- TABLE CONSTRUCTION-->
      <table>
         <tr>
            <th>id</th>
            <th>name</th>
            <th>user_type</th>

         </tr>
         <?php // LOOP TILL END OF DATA
            while($rows=$result->fetch_assoc())
            {
         ?>
         <tr>
               <td><?php echo $rows['id'];?></td>
            <td><?php echo $rows['name'];?></td>
           <td><?php echo $rows['user_type'];?></td>
          
         </tr>
         <?php
            }
         ?>
      </table>
   </section>
      <br />
      <a href="login_form.php" class="btn">login</a>
      <a href="register_form.php" class="btn">register</a>
      <a href="logout.php" class="btn">logout</a>
   </div>

</div>

</body>
</html>