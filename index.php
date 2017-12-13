<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Les fonctions Exercice 7</title>
  </head>
  <body>
<?php
  function transgenre(){
    // Prend en compte un nombre entre 1 et 50
    $age = rand(1, 50);
    //  Un tableau qui comporte Homme et Femme assigné à une variable
    $genre = array('Homme', 'Femme');
    // Mon tableau qui prend un compte soit Femme soit Homme
    $genre_rand = $genre[rand(0, 1)];
    if($age <= 17 && $genre_rand == 'Homme'){
      // Les variables $genre_rand et $age sont présent pour vérifié leurs bon fonctionnement
        echo 'Vous êtes un homme ' . $genre_rand . ' et vous êtes mineur '. ' ' . $age;
    } elseif($age >= 18 && $genre_rand == 'Homme'){
        echo 'Vous êtes un homme ' . $genre_rand . ' et vous êtes majeur' . ' ' . $age;
    } elseif($age <= 17 && $genre_rand == 'Femme'){
        echo 'Vous êtes une femme ' . $genre_rand . ' et vous êtes mineur' . ' ' . $age;
    } elseif($age >= 18 && $genre_rand == 'Femme'){
      echo 'Vous êtes une femme ' . $genre_rand . ' et vous êtes majeur' . ' ' . $age;
    } else{
      echo 'Personne de sexe inconnue non identifié';
    }
  };
  transgenre();
 ?>
  </body>
</html>
