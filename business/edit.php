    <?php
        include '../data-access/promotion.php';   
    ?>
    <form action="update.php" method="POST">
        name:<input type="text" name="updateName" value="<?php echo $row["name"]; ?>">
        <?php
            $select_query = "SELECT * FROM promotion WHERE id = " . $_GET["editId"];
            $select_res = $conn->query($select_query);
            if ($select_res->num_rows > 0) {
                while ($row = $select_res->fetch_assoc()) {
        ?>
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <input type="submit" value="Update" name="submitNewName">
    </form>
        <?php
                }
            }
        ?>