<?php
$gender = 'femme';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <title>Exercice5</title>
</head>
<body>
  <p>
    <?php
    //echo ($gender != 'Homme') ? 'C\'est une développeuse !!!' : 'C\'est un développeur !!!';
    if($gender != 'homme'){
      echo 'C\'est une développeuse !!!';
    }else{
      echo 'C\'est un développeur !!!';
    }
    ?>
  </p>
</body>
</html>
