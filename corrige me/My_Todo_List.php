<?php
require_once 'connect.php';
session_start();
require_once 'disconnect.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="My_Todo_list.css">
    <title>My_Todo_List</title>
</head>
<body>
    <div id="app" class="text-center">
        <h1>To Do List v2</h1>
        <form>
            
          <input type="text" id="task">
          
          <button id="addBtn" class="btn btn-warning">Ajouters</button>
        </form>
        &nbsp;
        <h2><strong>A faire : </strong></h2>
        <form method="POST">
        <ul id="tasks">
  <!-- <?php
  
   // $select = "SELECT AFAIRE from Todolist order by sequence";
  //  $qry = $db->query($select);
  // while($row = $qry->fetch())
  //  {
    //  $row['AFAIRE'] . "</li>";
   // }
  ?>
        </ul>
        
        &nbsp;
        <h2><strong>Finie : </strong></h2>
        <ul id="done">
        </ul>
        </form>
        <button id="saveBtn" class="btn btn-primary">Save</button>
      </div>

        </div>
    </div>

</body>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="My_Todo_List.js"></script>
</body>
</html>