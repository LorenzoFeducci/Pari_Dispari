<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
         $numero = 6;

         if($numero%2==0){
            echo "<p>il numero " . $numero . " è pari</p>";
         } else {
            echo "<p>il numero " . $numero . " è dispari</p>";
         }
    ?>
</body>
</html>