<?php
include ("../inc/connection.inc.php");?>
<?php session_start();

//var_dump($_SESSION['user_id']);die;
$user_id = $_SESSION["user_id"];
if ($user_id != 4) {
    header('Location: ../../');die;
}
?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
        <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.20.2/dist/bootstrap-table.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery/dist/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/bootstrap-table@1.20.2/dist/bootstrap-table.min.js"></script>    <title>Document</title>
    </head>
    <body>

    <a href="recycleBin.php">
        <button > Recycle Bin </button>
    </a>
    <a href="../actions/logoutAction.php">
        <button> Log out </button>
    </a>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">firstname</th>
            <th scope="col">lastname</th>
            <th scope="col">phone</th>
            <th scope="col">email</th>
<!--            <th scope="col">country</th>-->
<!--            <th scope="col">region</th>-->
<!--            <th scope="col">addres</th>-->
            <th scope="col">productName</th>
        </tr>
        </thead>
        <tbody>
        <?php
        include("../inc/connection.inc.php");

        $sql = "SELECT * FROM `users`";
        $result = mysqli_query($connecting, $sql);

        while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['firstname']; ?></td>
                <td><?php echo $row['lastname']; ?></td>
                <td><?php echo $row['phone']; ?></td>
                <td><?php echo $row['email']; ?></td>
<!--                <td>--><?php //echo $row['country']; ?><!--</td>-->
<!--                <td>--><?php //echo $row['region'];?><!--</td>-->
<!--                <td>--><?php //echo $row['address']; ?><!--</td>-->
                <td><?php echo $row['productName']; ?></td>
                <td><a href="../actions/deleteUser.php?id=<?php echo $row['id'] ?>"><button>delete</button></a></td>
            </tr>
            <?php
        }
        ?>
        </tbody>
    </table>
    <!-- <script src="script.js"></script> -->
    </body>
    </html>
