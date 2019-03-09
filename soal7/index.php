<?php
// memanggil file config
require './config/db.php';

// variable query mysql
$query = "SELECT categories.id, categories.name, GROUP_CONCAT(products.name SEPARATOR ', ') FROM categories,products WHERE products.category_id = categories.id GROUP BY categories.id ORDER BY categories.id";

$data = $db->query($query)->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>SOAL 7 - PRODUCTS LIST</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<style type="text/css">
	*{
		padding: 0;
		margin: 0;
	}
	h1{
		text-align: center;
		margin-bottom: 50px;
		margin-top: 20px;
	}
</style>

</head>
<body>

<div class="container">
  <h1>Products List</h1>
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>CATEGORY NAME</th>
        <th>PRODUCTS</th>
      </tr>
    </thead>
    <tbody>   
    <?php foreach ($data as $row) { ?>
      <tr>
        <td><?php echo $row[0]; ?></td>
        <td><?php echo $row[1]; ?></td>
        <td><?php echo $row[2]; ?></td>
      </tr>
  <?php } ?>
    </tbody>
  </table>
</div>

</body>
</html>