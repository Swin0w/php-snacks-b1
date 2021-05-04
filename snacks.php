<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Snacks</title>
  </head>
  <style media="screen">
    li {
      list-style-type: none;
      display: block;
    }
  </style>
  <body>
    <h1>Snacks 1</h1>
    <p>
      Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario.
      Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
      Stampiamo a schermo tutte le partite con questo schema.
    </p>
    <p>Olimpia Milano - Cantù | 55-60</p>
    <h2>MATCH DI OGGI</h2>
    <ul>
        <?php
        $calendary = [
          [
            'home' => "Pistoia Basket",
            'away' => "Reyer Venezia Mestre",
            'homepoints' => 55,
            'guestpoints' => 65
          ],
          [
            'home' => "Fortitudo Pallacanestro",
            'away' => "Allianz Pallacanestro",
            'homepoints' => 88,
            'guestpoints' => 44
          ],
          [
            'home' => "Mennsana Basket",
            'away' => "Pallacanestro Viola",
            'homepoints' => 96,
            'guestpoints' => 12
          ],
          [
            'home' => "Tigers Cesena",
            'away' => "Pallacanestro Pavia",
            'homepoints' => 110,
            'guestpoints' => 8
          ]
        ];
        for($i=0;$i<count($calendary);$i++){
          echo "<li>";
          echo "<b>Partità: </b>" . $calendary[$i]['home'] . " - " . $calendary[$i]['away'] . " | " . $calendary[$i]['homepoints'] . "-" . $calendary[$i]['guestpoints'];
          echo "</li>";
        }
         ?>
    </ul>
    <h1>Snacks 2</h1>
    <p>
      Passare come parametri GET name, mail e age e verificare (cercando i metodi
      che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri,
      che mail contenga un punto e una chiocciola e che age sia un numero.
      Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato"
    </p>
    <?php
      $name = $_GET['name'];
      $mail = $_GET['mail'];
      $age = $_GET['age'];

      if(strlen($name) > 3 && is_int($age) && strpos($mail, ".") && strpos($mail, "@")) {
        echo "Accesso riuscito";
      } else {
        echo "Acesso negato";
      }


     ?>
  </body>
</html>
