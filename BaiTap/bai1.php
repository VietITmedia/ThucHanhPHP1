<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <?php
  $N=rand(1,100);
    for ($i=1; $i<= $N; $i++){
        if ($i%2==0){
            echo $i; 
        }
    }
  ?>

</body>
</html> 