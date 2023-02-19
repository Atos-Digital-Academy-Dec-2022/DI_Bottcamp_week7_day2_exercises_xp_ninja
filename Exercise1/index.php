<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
  <table width="400px" cellspacing="0px" cellpadding="0px" border="1px">
    <?php
    //recuperation du nombre entreer par l'utlisateur pour generer le damier
    if (isset($_POST['submit'])) {

      $number = $_POST['number'];

      for ($row = 1; $row <= $number; $row++) {
        echo "<tr>";
        for ($col = 1; $col <= $number; $col++) {
          $total = $row + $col;
          if ($total % 2 == 0) {
            echo "<td height=60px width=60px bgcolor= white></td>";
          } else {
            echo "<td height=60px width=60px bgcolor=orange></td>";
          }
        }
        echo "</tr>";
      }
    }
    ?>
  </table>

</body>

</html>