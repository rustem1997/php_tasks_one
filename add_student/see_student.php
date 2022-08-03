<?php
require_once './vendor/connect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/main.css">
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
                    <th scope="col">Имя</th>
                    <th scope="col">Email</th>
                    
                </tr>
            </thead>
            <h3 style="text-align: center; color:blue;">
                <p>Список пользователей</p>
            </h3>
            <?php
            $user_dbs = mysqli_query($connect, "SELECT * FROM `user_db`");
            $user_dbs = mysqli_fetch_all($user_dbs);
            foreach ($user_dbs as  $user_db) {
               
            ?>
                <tr>
                    <td><?= $user_db[1] ?></td>
                    <td><?= $user_db[2] ?></td>
                  
                </tr>
            <?php
            }
        
            ?>

        </table>
        <a href="../add_student/view_student.php" class="btn btn-danger"> выйты </a>
    </div>
</body>

</html>