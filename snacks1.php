<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Snacks</title>
    <style media="screen">
      .home {
        background-color: orange;
        width: 200px;
        height: 200px;
      }
      .guest {
        background-color: green;
        width: 200px;
        height: 200px;
      }
    </style>
  </head>
  <body>
    <h1>Snacks 1</h1>
    <p>
      Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario.
      Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
      Stampiamo a schermo tutte le partite con questo schema.
    </p>
    <p>Olimpia Milano - Cantù | 55-60</p>
    <h2>MATCH DI OGGI</h2>
    <?php
    $calendary = [
      'match' => [
        'home' => [
          'name' => 'Aquila Basket',
          'name' => 'Pallacanestro Brescia',
          'name' => 'Fortitudo Pallacanestro'
        ],
        'guest' => [
          'name' => 'Pistoia Basket',
          'name' => 'Mennsana Basket',
          'name' => 'Reyer Venezia Mestre'
        ],
        'homepoints' => [
          'pt' => 55,
          'pt' => 32,
          'pt' => 62
        ],
        'guestpoints' => [
          'pt' => 64,
          'pt' => 88,
          'pt' => 58,
        ]
      ]
      $team = $calendary['match'];
      $hometeam = $team['home'];
      $guesteam = $team['guest'];
      $homept = $team['homepoints'];
      $guestpt = $team['guestpoints'];

      for($i=0;$i<count($hometeam);$i++){
        if($hometeam) {
          echo "<div class='home'>" . $hometeam[$i] . "</div>";
        } else {
          echo "<div class='guest'>" . $guesteam[$i] . "</div>";
        }
      }
     ?>
  </body>
</html>
