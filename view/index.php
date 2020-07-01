<?php
require "./../controller/getdata.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
    <?php
    if ($result->num_rows > 0) {

        while ($row = $result->fetch_assoc()) {
            ?>
            <tr>
                <td><?php echo $row['id'];?></td>
                <td><?php echo $row['firstname']. "  ". $row['lastname'];?></td>
                <td><?php echo $row['email'];?></td>
            </tr>
            <?php 
            }
    }else{
        echo "data 0";
    }
    ?>
    </table>
</body>
</html>