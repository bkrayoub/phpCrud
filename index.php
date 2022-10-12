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
<!-- logo -->
    <h1 id="logo">iTask</h1>
<!-- add and search section -->
    <div id="craete">
        <div id="add">
            <input type="text">
            <input type="button" value="Add">
        </div>
        <div id="search">
            <input type="text">
        </div>
            <img src="images/search.svg" id="searchIcon" onclick="switchBtn()">
    </div>
<!-- list who get data from data base and display it -->
    <table>
        <thead>
            <tr>
                <th width="50px" id="">ID</th>
                <th width="800px">Name</th>
                <th>Controle</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td id="id-td">1</td>
                <td width="800px" id="task-td">Task number 1</td>
                <td id="control-btn">
                    <input type="button" value="Edit" id="edit">
                    <input type="button" value="Delete" id="delete">
                </td>
            </tr>
            <tr>
                <td id="id-td">1</td>
                <td width="800px" id="task-td">Task number 1</td>
                <td id="control-btn">
                    <input type="button" value="Edit" id="edit">
                    <input type="button" value="Delete" id="delete">
                </td>
            </tr>
            <tr>
                <td id="id-td">1</td>
                <td width="800px" id="task-td">Task number 1</td>
                <td id="control-btn">
                    <input type="button" value="Edit" id="edit">
                    <input type="button" value="Delete" id="delete">
                </td>
            </tr>
            <tr>
                <td id="id-td">1</td>
                <td width="800px" id="task-td">Task number 1</td>
                <td id="control-btn">
                    <input type="button" value="Edit" id="edit">
                    <input type="button" value="Delete" id="delete">
                </td>
            </tr>
            <tr>
                <td id="id-td">1</td>
                <td width="800px" id="task-td">Task number 1</td>
                <td id="control-btn">
                    <input type="button" value="Edit" id="edit">
                    <input type="button" value="Delete" id="delete">
                </td>
            </tr>
            <tr>
                <td id="id-td">1</td>
                <td width="800px" id="task-td">Task number 1</td>
                <td id="control-btn">
                    <input type="button" value="Edit" id="edit">
                    <input type="button" value="Delete" id="delete">
                </td>
            </tr>
            <tr>
                <td id="id-td">1</td>
                <td width="800px" id="task-td">Task number 1</td>
                <td id="control-btn">
                    <input type="button" value="Edit" id="edit">
                    <input type="button" value="Delete" id="delete">
                </td>
            </tr>
            <tr>
                <td id="id-td">1</td>
                <td width="800px" id="task-td">Task number 1</td>
                <td id="control-btn">
                    <input type="button" value="Edit" id="edit">
                    <input type="button" value="Delete" id="delete">
                </td>
            </tr>
            <tr>
                <td id="id-td">1</td>
                <td width="800px" id="task-td">Task number 1</td>
                <td id="control-btn">
                    <input type="button" value="Edit" id="edit">
                    <input type="button" value="Delete" id="delete">
                </td>
            </tr>
            <tr>
                <td id="id-td">1</td>
                <td width="800px" id="task-td">Task number 1</td>
                <td id="control-btn">
                    <input type="button" value="Edit" id="edit">
                    <input type="button" value="Delete" id="delete">
                </td>
                <tr>
                    <td id="id-td">1</td>
                    <td width="800px" id="task-td">Task number 1</td>
                    <td id="control-btn">
                        <input type="button" value="Edit" id="edit">
                        <input type="button" value="Delete" id="delete">
                    </td>
                </tr>
            </tr>
        </tbody>
    </table>
<!--  -->
<script src="script/script.js"></script>
</body>
</html>