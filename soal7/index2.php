<?php
// Database name
$database_name = "hobi.db";
// Database Connection
require './config/db.php';

$query = "SELECT categories.id, categories.name, GROUP_CONCAT(products.name) FROM categories,products WHERE products.category_id = categories.id GROUP BY categories.id ORDER BY categories.id";

$exec = $db->query($query);
 
?>
<!DOCTYPE html>
<html>
<head>
    <title>7 : Data List</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<style>
        .x{
            font-weight: bold;
    }
    </style>
</head>
<body>
    <div class="container">
        <h1 style="text-align: center;">HOBBY MEREKA</h1>
        <table width="100%" class="table table-striped">

            <thead class="thead-dark">
            <tr>
                <th scope="col" class="x">person_id</td>
                <th scope="col" class="x">name</td>
                <th scope="col" class="x">person_hobbies</td>
            </tr>
            </thead>
            <?php while($row = $result->fetchArray()) {?>
            <tr>
                <td><?php echo $row[0];?></td>
                <td><?php echo $row[1];?></td>
                <td><?php echo $row[2];?></td>
            </tr>

            <?php } ?>

        </table>

    </div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>

</html>
