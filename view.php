
<?php include "conection.php";?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>student information</h2>
  <h4><a href="register.php">registration student</a></h4>

             
  <table class="table table-hover">
    <thead>
      <tr>
      <th>id</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
         <th>age</th>
        <th>batch</th>
        <th>action</th>
      </tr>
    </thead>
    <tbody>


    <?php 
if (isset ($_GET['delete'])) {
	
	$del = $_GET['delete'];
     
     mysqli_query ($connect, "DELETE FROM student WHERE id = '$del'");

}
    

    ?>
      
      <?php 

$view_result = mysqli_query ($connect,"SELECT * FROM student");
 $result= mysqli_fetch_all($view_result, MYSQLI_ASSOC);

 foreach ($result as $show) :

      ?>
      <tr>
        <td><?php echo $show['id']?></td>
        <td><?php echo $show['firstname'];?></td>
        <td><?php echo $show['lastname'];?></td>
        <td><?php echo $show['email'];?></td>
        <td><?php echo $show['age'];?></td>
        <td><?php echo $show['batch'];?></td>
        <td><a href="?delete=<?php echo $show['id']?>">Delete</a></td>
      </tr>
<?php endforeach;?>


    </tbody>
  </table>
</div>

</body>
</html>
