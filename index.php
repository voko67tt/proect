<?php
include('connection.php');

if (isset($_POST['goToHome'])) {
    header('Location: index.html'); 
    exit();
}
?>
<!doctype html>
<html lang="en">

<head>
    <title>Таблиці додовання, редагуваня</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <style>
        * {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;

        }

        header {
            width: 100%;
            height: 150px;
            background: rgb(46, 255, 8);
            background: linear-gradient(90deg, rgba(46, 255, 8, 1) 0%, rgba(5, 254, 234, 1) 35%, rgba(255, 201, 0, 1) 100%);
            color: white;
            justify-content: center;
            text-align: center;
            padding-top: 40px;
        }

        #btnNew {
            width: 180px;
            height: 40px;
            font-weight: 800;
            border: none;
            border-radius: 20px;
            background-color: #2ecc71;
        }

        #tablehead {
            height: 50px;
            background-color: #7f8c8d;
            color: white;
        }td{
            padding-top: 30px;
            margin: 400px;
        }

        #btnUpdate {

            height: 40px;
            width: 120px;
            border: none;
            border-radius: 20px;
            background-color: #f1c40f;
            color: white;
            font-weight: 700;
        }

        #btnDelete {
            height: 40px;
            width: 120px;
            border: none;
            border-radius: 20px;
            background-color: #e67e22;
            color: white;
            font-weight: 700;
        }
    </style>
</head>

<body>
    <header>
        <h1>Редагуй, додавай, твори</h1>
    </header>
    <main>
        <div class="container">
            <div class="col-sm-6">
                <a href="insert.php" id="btnNew" class="btn btn-primary my-5"><i class="bi bi-plus-circle-fill"></i> NEW</a>
            </div>
            <div class="col-sm-6">

            </div>
            <table class="table table-striped table-hover table-responsive">
                <thead id="tablehead">
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Action</th>
                    </tr>

                </thead>
                <tbody>
                    <?php



                    $sql = "SELECT * FROM `tbl_curd`";
                    $result = mysqli_query($conn, $sql);

                    if ($result) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $id = $row['id'];
                            $name = $row['name'];
                            $email = $row['email'];
                            $pass = $row['pass'];
                            $phone = $row['phone'];
                            $address = $row['address'];
                            echo '
                           <tr>
                           <td>' . $id . '</td>
                           <td>' . $name . '</td>
                           <td>' . $email . '</td>
                           <td>' . $pass . '</td>
                           <td>' . $phone . '</td>
                           <td>' . $address . '</td>
                           <td>
                           <a href="edit.php?editid=' . $id . '"><button id="btnUpdate" class="btn btn-warning text-light"><i class="bi bi-pencil-square"></i> EDIT</button></a>
                           <a href="delete.php?deleteid=' . $id . '"><button id="btnDelete" class="btn btn-danger text-light"><i class="bi bi-trash-fill"></i> DELETE</button></a>
                           </td>
                           </tr>
                           ';
                        }
                    }

                    ?>
                </tbody>
            </table>

        </div>
    </main>
    <div class="container">
            <form method="post">
                <button type="submit" name="goToHome" id="btnHome" class="btn btn-primary my-5"><i class="bi bi-house-fill"></i> HOME</button>
            </form>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>