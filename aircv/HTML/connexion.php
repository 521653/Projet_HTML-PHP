<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <link rel="icon" href="images/fevicon.png" type="image/gif" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Connexion</title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet" />

  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

</head>

<body>
  <?php
  
    /*$serveur='91.216.107.182';
      $base='samac2160530';
      $utilisateur='samac2160530';
      $mot_de_passe ='p6j6zrmv5m';*/

    //$conn = null;
    /* try{
        //1)  Se connecter au SGBD et de sélectionner la base de données "samac2160530" ;
        $conn = new mysqli($serveur,$utilisateur,$mot_de_passe,$base);
        //$conn = new PDO("mysql:host=$serveur;dbname=$base", $utilisateur, $mot_de_passe);
        //$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "<br>-- Connexion réussie --:) <br>";
      }
      catch(Exception $e){ //catch(PDOException $e){
        //$conn->rollBack();
        echo "Erreur : " . $e->getMessage();
      }
    }*/
    $serveur = 'localhost';
    $base = 'samac2160530';
    $utilisateur = 'root';
    //$mot_de_passe = '';
    
    try {
      $conn = new PDO(
        "mysql:host=$serveur;dbname=$base",
        $utilisateur
      );
      //Définition du mode d'erreur de PDO sur Exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      
    } catch (PDOException $e) {
      //Capture des exceptions si une exception est lancée
      echo "Erreur : " . $e->getMessage();
    }

  
  ?>
</body>

</html>