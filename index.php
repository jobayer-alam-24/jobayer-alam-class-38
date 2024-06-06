<?php
  include("local_server.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data fetch from Database</title>
  <link rel="stylesheet" href="style.css"/>
</head>
<body>

<h2>Database Table</h2>

<div class="container">
<table>
  <?php 
    $queryGet = "SELECT * FROM authors"; 
    $fetchAuthors = mysqli_query($database_connection, $queryGet);

    if($caughtRows = mysqli_num_rows($fetchAuthors) > 0){
      $isFirstRow = true;
      while($dataAsRow = mysqli_fetch_assoc($fetchAuthors)){

        $id = $dataAsRow['id'];
        $name = $dataAsRow['name'];
        $birthDate = $dataAsRow['birthdate'];
        $nationality = $dataAsRow['nationality'];
        $bio = $dataAsRow['biography'];

        if($isFirstRow){
          echo 
            "<thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Birthdate</th>
                <th>Nationality</th>
                <th>Biography</th>
              </tr>
            </thead>
            <tbody>";
          $isFirstRow = false;
        }

        echo 
          "<tr>
            <td>".$id."</td>
            <td>".$name."</td>
            <td>".$birthDate."</td>
            <td>".$nationality."</td>
            <td>".$bio."</td>
          </tr>";
      }
      echo "</tbody>";
    }
  ?>
</table>
</div>
</body>
</html>
