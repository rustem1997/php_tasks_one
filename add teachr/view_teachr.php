<?php
require_once './vendor/connect.php';
if (isset($_GET['page'])) {
  $page=$_GET['page'];
}else{
  $page=1;
}

$rowperpage = 05;
$row = ($page -1)*05;
// Previous Button
// if (isset($_POST['but_prev'])) {
//   $row = $_POST['row'];
//   $row -= $rowperpage;
//   if ($row < 0) {
//     $row = 0;
//   }
// }

// Next Button
// if (isset($_POST['but_next'])) {
//   $row = $_POST['row'];
//   $allcount = $_POST['allcount'];

//   $val = $row + $rowperpage;
//   if ($val < $allcount) {
//     $row = $val;
//   }
// }
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
          <!-- <th scope="col">№</th> -->
          <th scope="col">Имя</th>
          <th scope="col">Фамилия</th>
          <th scope="col">Email</th>
          <th scope="col">Пол</th>
          <th scope="col">Город</th>
          <th scope="col" colspan="4">Должность</th>

        </tr>
      </thead>
      <h3>
        <p>Список переподователя</p>
      </h3>
      <?php
      // count total number of rows
      $sql = "SELECT COUNT(*) AS cntrows FROM add_teachr";
      $result = mysqli_query($connect, $sql);
      $fetchresult = mysqli_fetch_array($result);
      $allcount = $fetchresult['cntrows'];

      // selecting rows
      $sql = "SELECT * FROM add_teachr  ORDER BY ID ASC limit $row," . $rowperpage;
      $result = mysqli_query($connect, $sql);
      $sno = $row + 1;
      while ($add_teacher = mysqli_fetch_array($result)) {

      ?>

        <tr>
          <!-- <td><?= $add_teacher[0] ?></td> -->
          <td><?= $add_teacher[1] ?></td>
          <td><?= $add_teacher[2] ?></td>
          <td><?= $add_teacher[3] ?></td>
          <td><?= $add_teacher[4] ?></td>
          <td><?= $add_teacher[5] ?></td>
          <td><?= $add_teacher[6] ?></td>
          <td><a class="btn btn-primary" href="../add teachr/update_teachr.php?id=<?= $add_teacher[0] ?>">update</a></td>
          <td><a class="btn btn-danger " href="../add teachr/delete_teachr.php?id=<?= $add_teacher[0] ?>">delete</a></td>
        </tr>
      <?php
        $sno++;
      }
      ?>

    </table>
    <!-- --------------------- нумерации-------------------------- -->
    <!-- <form method="post" action="">
      <div id="div_pagination">
        <a href="../profile.php" class="btn btn-danger"> выйты </a>
        <input type="hidden" name="row" value="<?php echo $row; ?>">
        <input type="hidden" name="allcount" value="<?php echo $allcount; ?>">
        <input type="submit" class="button" name="but_prev" value="Перед">
        <input type="submit" class="button" name="but_next" value="След">
      </div>
    </form> -->
    <a href="../profile.php" class="btn btn-danger"> выйты </a>
    <!-- erer -->
    <?php
    $pr_query="SELECT * FROM add_teachr";
    $pr_results=mysqli_query($connect,$pr_query);
    $total_record=mysqli_num_rows($pr_results) ;
    $total_page=$total_record/$rowperpage;

    if ($page>1) {
      echo"<a href='./view_teachr.php?page=".($page-1)."' class='btn btn-primary '>Перед</a>";
    }
    for ($i=1; $i < $total_page; $i++) { 
      echo"<a href='./view_teachr.php?page=".$i."' class='btn btn-primary '>$i</a>";
    }
    if ($i>$page) {
      echo"<a href='./view_teachr.php?page=".($page+1)."' class='btn btn-primary '>След</a>";
    }
?>

  </div>
</body>

</html>