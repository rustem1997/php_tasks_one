<?php
require_once './vendor/connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap-theme.min.css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <title>add teachr</title>


</head>
<body>
  <div class="view_teachr">
<table border="5" style="width: 60%;" class="table table-success table-striped">
  <thead>
    <tr>
      <th scope="col">№</th>
      <th scope="col">Имя</th>
      <th scope="col">Фамилия</th>
      <th scope="col">Email</th>
      <th scope="col">Пол</th>
      <th scope="col">Город</th>
      <th scope="col" colspan="3">Должность</th>
  
    </tr>
  </thead>
  <h3><p>Список переподователя</p></h3>
    <?php
    
    $add_teachrs=mysqli_query($connect,"SELECT * FROM `add_teachr`");
    $add_teachrs=mysqli_fetch_all($add_teachrs);
 foreach ($add_teachrs as  $add_teachr) {
   ?>
  
   <tr>
    <td><?= $add_teachr[0]?></td>
    <td><?= $add_teachr[1]?></td>
    <td><?= $add_teachr[2]?></td>
    <td><?= $add_teachr[3]?></td>
    <td><?= $add_teachr[4]?></td>
    <td><?= $add_teachr[5]?></td>
    <td><?= $add_teachr[6]?></td>
    <td><a class="btn btn-primary" href="../add teachr/update_teachr.php?id=<?= $add_teachr[0]?>">update</a></td>   
    <td><a class="btn btn-danger" href="../add teachr/delete_teachr.php?id=<?=$add_teachr[0]?>">delete</a></td>   
   </tr>
   <?php
 }
  
    ?>
 
</table>
<a href="../profile.php" class="btn btn-danger"> выйты </a>
</div>
</body>
</html>