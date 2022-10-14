<?php
include '../data-access/promotion.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
    <title>iTask | Data home</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;700&display=swap');
    </style>
</head>

<body>
    <form method="POST" action="../business/crud.php" id="body">
            <!-- logo -->
    <h1 id="logo">iTask</h1>
    <!-- add and search section -->

    <div id="craete">
        <div id="add">
            <input type="text" name="addInput">
            <input type="submit" value="Add" name="add">
        </div>
        <div id="search">
            <input type="text" name="search">
        </div>
        <img src="images/search.svg" id="searchIcon" onclick="switchBtn()">
</div>

    <!-- list who get data from data base and display it -->
    <table>
        <thead>
            <tr>
                <th width="50px" id="">ID</th>
                <th width="800px">Name</th>
                <th id="controls">Controle</th>
            </tr>
        </thead>
    <!-- select data from data base and list it in the table -->
        <tbody>
            <?php
            $select_data = new Promotion(null,null);
            $data = $select_data->select();
            if($data->num_rows > 0) {
                while($row = $data->fetch_assoc()) {
                    echo '
                    <tr>
                    <td id="id-td">'.$row["id"].'</td>
                    <td width="800px" id="task-td">'.$row["name"].'</td>
                    <td id="control-btn">
                        <a ><input type="submit" value="Edit" id="edit" name="editBtn"></a>
                        <a href="../business/delete.php?deleteId='.$row["id"].'" ><input type="button" value="Delete" id="delete"></a>
                    </td>
                </tr>';
                }
            }

            ?>
            <!-- <tr>
                <td id="id-td">1</td>
                <td width="800px" id="task-td">Task number 1</td>
                <td id="control-btn">
                    <input type="button" value="Edit" id="edit">
                    <input type="button" value="Delete" id="delete">
                </td>
            </tr> -->
        </tbody>
    </table>
    </form>
    <!--  -->
    <script src="script/script.js"></script>
</body>

</html>